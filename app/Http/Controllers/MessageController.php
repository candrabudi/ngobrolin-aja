<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatRoom;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\ChatMessage;
use App\Models\ChatMessageImage;
use App\Models\ChatRoomParticipant;
use Auth;
use Pusher\Pusher;
use Carbon\Carbon;
use DB;
use Validator;
use Crypt;
class MessageController extends Controller
{
    public function sendMessage(Request $request)
    {
        try {
            date_default_timezone_set('Asia/Jakarta');

            $validator = Validator::make($request->all(), [
                'room_id' => 'required|exists:chat_rooms,id',
                'message' => 'required|string',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 'failed',
                    'code' => 400,
                    'message' => $validator->errors()->first()
                ]);
            }

            $roomParticipant = ChatRoomParticipant::where('chat_room_id', $request->room_id)
                ->where('user_id', '!=', Auth::user()->id)
                ->first();

            $userFrom = UserProfile::where('user_id', Auth::user()->id)->first();

            $cMessage = ChatMessage::select('id')
                ->where('chat_room_id', $request->room_id)
                ->where('id', $request->message_reply_id)
                ->first();

            $chatRoom = ChatRoom::find($request->room_id);
            $privateKey = $chatRoom->private_key;

            $encryptedMessage = Crypt::encryptString($request->message . $privateKey);

            $sendMessage = new ChatMessage;
            $sendMessage->chat_room_id = $request->room_id;
            $sendMessage->from_id = Auth::user()->id;
            $sendMessage->to_id = $roomParticipant->user_id;
            $sendMessage->message = $encryptedMessage;
            $sendMessage->is_read = 0;
            $sendMessage->is_location = $request->is_location ?? 0;
            $sendMessage->message_type = "personal";
            if ($cMessage) {
                $sendMessage->message_reply_id = $cMessage->id;
            }
            $sendMessage->save();
            $sendMessage->refresh();

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $fileName = time() . '_' . $image->getClientOriginalName();
                    $filePath = $image->storeAs('uploads/chat_images', $fileName, 'public');
                    $fileExtension = $image->getClientOriginalExtension();

                    $encryptedFileName = Crypt::encryptString($fileName);
                    $encryptedFilePath = Crypt::encryptString($filePath);

                    ChatMessageImage::create([
                        'chat_message_id' => $sendMessage->id,
                        'file_name' => $encryptedFileName,
                        'file_path' => $encryptedFilePath,
                        'file_extension' => $fileExtension,
                    ]);
                }
            }

            $has_images = [];
            $has_files = [];
            $has_audios = [];
            foreach ($sendMessage->images as $image) {
                $has_images[] = [
                    'file_name' => Crypt::decryptString($image->file_name),
                    'file_path' => asset('storage/' . Crypt::decryptString($image->file_path)),
                    'file_extension' => $image->file_extension,
                ];
            }

            if ($sendMessage->MessageReply) {
                $decryptedMessage = Crypt::decryptString($sendMessage->MessageReply->message);
                $messageContent = str_replace($privateKey, '', $decryptedMessage);

                $messageReply = [
                    'full_name' => $sendMessage->MessageReply->full_name,
                    'profile_img' => $sendMessage->MessageReply->profile_img,
                    'message' => $messageContent,
                    'datetime' => $sendMessage->MessageReply->created_at->format('h:i A'),
                ];
            }

            $pusher = new Pusher(
                env('PUSHER_APP_KEY'),
                env('PUSHER_APP_SECRET'),
                env('PUSHER_APP_ID'),
                [
                    'cluster' => env('PUSHER_APP_CLUSTER'),
                    'encrypted' => true
                ]
            );

            $pdata = [
                'status' => 'success',
                'message' => 'Message sent successfully',
                'data' => [
                    "id" => $sendMessage->id,
                    "room_id" => $request->room_id,
                    "user_id" => $sendMessage->from_id,
                    "full_name" => $userFrom->full_name,
                    "user_profile_image" => $userFrom->profile_img ?? "https://cdn-icons-png.flaticon.com/512/847/847969.png",
                    "message" => $request->message,
                    "has_images" => $has_images,
                    "has_files" => $has_files,
                    "has_audios" => $has_audios,
                    "datetime" => $sendMessage->created_at->format('h:i A'),
                    "is_read" => $sendMessage->is_read,
                    "is_sender" => Auth::user()->id == $sendMessage->from_id,
                    "is_replied" => $cMessage ? true : false,
                    "is_location"=> $sendMessage->is_location,
                    "message_reply" => $cMessage ? $messageReply : null
                ],
            ];

            $pusher->trigger('private-chat', 'message-sent', $pdata);

            return response()->json([
                'status' => 'success',
                'message' => 'Message sent successfully',
                'data' => $sendMessage,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'failed',
                'code' => 500,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function getMessage(Request $request)
    {
        try {
            $room_id = $request->room_id;

            ChatMessage::where('chat_room_id', $room_id)
                ->where('from_id', '!=', Auth::user()->id)
                ->update([
                    'is_read' => 1,
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]);

            $chatRoom = ChatRoom::find($room_id);
            $privateKey = $chatRoom->private_key;

            $fetch = ChatMessage::where('chat_room_id', $room_id)
                ->orderBy('created_at', 'ASC')
                ->get();

            $messages = [];

            foreach ($fetch as $f) {
                if ($f->from_id != Auth::user()->id && $f->is_read == 0) {
                    $f->is_read = 1;
                    $f->save();
                }

                $decryptedMessage = Crypt::decryptString($f->message);
                $messageContent = str_replace($privateKey, '', $decryptedMessage);

                $userFrom = UserProfile::where('user_id', $f->from_id)->first();
                $messageReplyContent = null;
                if ($f->message_reply_id) {
                    $messageReply = ChatMessage::find($f->message_reply_id);
                    if ($messageReply) {
                        $decryptedReply = Crypt::decryptString($messageReply->message);
                        $messageReplyContent = [
                            'full_name' => UserProfile::where('user_id', $messageReply->from_id)->first()->full_name,
                            'profile_img' => UserProfile::where('user_id', $messageReply->from_id)->first()->profile_img,
                            'message' => str_replace($privateKey, '', $decryptedReply),
                            'datetime' => $messageReply->created_at->format('h:i A'),
                            'is_location' => $messageReply->is_location,
                        ];
                    }
                }

                $dmsg = [
                    "id" => $f->id,
                    "user_id" => $f->from_id,
                    "user_profile_image" => $userFrom->profile_img ?? "https://cdn-icons-png.flaticon.com/512/847/847969.png",
                    "user_full_name" => $userFrom->full_name,
                    "message" => $messageContent,
                    "has_files" => [],
                    "has_images" => $f->images->map(function ($image) use ($privateKey) {
                        return [
                            'file_name' => str_replace($privateKey, '', Crypt::decryptString($image->file_name)),
                            'file_path' => asset('storage/' . str_replace($privateKey, '', Crypt::decryptString($image->file_path))),
                            'file_extension' => $image->file_extension,
                        ];
                    }),
                    "has_audios" => [],
                    "datetime" => $f->created_at->format('h:i A'),
                    "created_at" => Carbon::parse($f->created_at)->format('Y-m-d H:i'),
                    "is_read" => $f->is_read,
                    "is_sender" => Auth::user()->id == $f->from_id,
                    "is_replied" => $f->message_reply_id != 0,
                    "is_location" => $f->is_location,
                    "message_reply" => $messageReplyContent
                ];

                $messages[] = $dmsg;
            }

            return response()->json([
                'status' => 'success',
                'code' => 200,
                'data' => $messages
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'failed',
                'code' => 500,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function getSingleMessage($message_id)
    {
        $fetch = ChatMessage::select('chat_messages.*', 'up.full_name', 'up.profile_img')
            ->where('chat_messages.id', $message_id)
            ->join('user_profiles as up', 'up.user_id', '=', 'chat_messages.from_id')
            ->first();

        if (!$fetch) {
            return response()->json([
                'status' => 'failed', 
                'code' => 400, 
                'message' => 'No Data Single Message', 
                'data' => null
            ], 400);
        }

        $chatRoom = ChatRoom::find($fetch->chat_room_id);
        $privateKey = $chatRoom->private_key;

        $decryptedMessage = Crypt::decryptString($fetch->message);
        $messageContent = str_replace($privateKey, '', $decryptedMessage);

        $dmsg = [
            "id" => $fetch->id,
            "user_id" => $fetch->from_id,
            "user_profile_image" => $fetch->profile_img ?? "https://cdn-icons-png.flaticon.com/512/847/847969.png",
            "user_full_name" => $fetch->full_name,
            "message" => $messageContent,
            "has_images" => [],
            "has_files" => [],
            "has_audios" => [],
            "datetime" => $fetch->created_at->format('h:i A'),
            "is_read" => $fetch->is_read,
            "is_location" => $fetch->is_location,
            "is_sender" => Auth::user()->id == $fetch->from_id,
            "is_replied" => Auth::user()->id == $fetch->from_id ? 1 : 2,
        ];

        return response()->json([
            'status' => 'success', 
            'code' => 200, 
            'message' => 'Success Get Single Message',
            'data' => $dmsg
        ]);
    }

    public function updateReadMessage(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        DB::beginTransaction();
        try{
            $room_id = $request->room_id;
            $message_id = $request->message_id;
            $message = ChatMessage::where('chat_room_id', $room_id)
                ->where('id', $message_id)
                ->update([
                    'is_read' => 1,
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]);

            $pusher = new Pusher(
                env('PUSHER_APP_KEY'),
                env('PUSHER_APP_SECRET'),
                env('PUSHER_APP_ID'),
                [
                    'cluster' => env('PUSHER_APP_CLUSTER'),
                    'encrypted' => true
                ]
            );

            $pdata = [
                'status' => 'success',
                'message' => 'Update read message',
                'data' => [
                    "id" => $message_id,
                    "is_read" => true,
                ],
            ];

            $pusher->trigger('update-message', 'update-message-sent', $pdata);

            DB::commit();
            return response()
                ->json([
                    'status' => 'success', 
                    'code' => 200, 
                    'message' => 'Success update read message'
                ], 200);

        }catch(\Exception $e){
            DB::rollback();
            return response()
                ->json([
                    'status' => 'failed', 
                    'code' => 500, 
                    'message' => 'Internal Server Error',
                ], 500);
        }
    }
}
