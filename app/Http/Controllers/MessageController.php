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

            $sendMessage = new ChatMessage;
            $sendMessage->chat_room_id = $request->room_id;
            $sendMessage->from_id = Auth::user()->id;
            $sendMessage->to_id = $roomParticipant->user_id;
            $sendMessage->message = $request->message;
            $sendMessage->is_read = 0;
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

                    ChatMessageImage::create([
                        'chat_message_id' => $sendMessage->id,
                        'file_name' => $fileName,
                        'file_path' => $filePath,
                        'file_extension' => $fileExtension,
                    ]);
                }
            }

            $has_images = [];
            $has_files = [];
            $has_audios = [];
            foreach ($sendMessage->images as $image) {
                $has_images[] = [
                    'file_name' => $image->file_name,
                    'file_path' => asset('storage/' . $image->file_path),
                    'file_extension' => $image->file_extension,
                ];
            }

            if ($sendMessage->MessageReply) {
                $messageReply = [
                    'full_name' => $sendMessage->MessageReply->full_name,
                    'profile_image' => $sendMessage->MessageReply->profile_image,
                    'message' => $sendMessage->MessageReply->message,
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
                    "user_profile_image" => $userFrom->profile_image ?? "https://cdn-icons-png.flaticon.com/512/847/847969.png",
                    "message" => $sendMessage->message,
                    "has_images" => $has_images,
                    "has_files" => $has_files,
                    "has_audios" => $has_audios,
                    "datetime" => $sendMessage->created_at->format('h:i A'),
                    "is_read" => $sendMessage->is_read,
                    "is_sender" => Auth::user()->id == $sendMessage->from_id,
                    "is_replied" => $cMessage ? true : false,
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
        $room_id = $request->room_id;

        // Update pesan yang belum dibaca oleh pengguna saat ini
        ChatMessage::where('chat_room_id', $room_id)
            ->where('from_id', '!=', Auth::user()->id)
            ->update([
                'is_read' => 1,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

        // Ambil pesan dari database terurut berdasarkan waktu dibuat
        $fetch = ChatMessage::where('chat_room_id', $room_id)
            ->orderBy('created_at', 'ASC')
            ->get();

        $messages = [];

        foreach ($fetch as $f) {
            // Tandai pesan sebagai sudah dibaca jika pengguna bukan pengirim dan pesan belum dibaca
            if ($f->from_id != Auth::user()->id && $f->is_read == 0) {
                $f->is_read = 1;
                $f->save();
            }

            // Ambil profil pengirim pesan
            $userFrom = UserProfile::where('user_id', $f->from_id)->first();

            // Persiapkan data untuk pesan yang akan dikirimkan sebagai respons JSON
            $dmsg = [
                "id" => $f->id,
                "user_id" => $f->from_id,
                "user_profile_image" => $userFrom->profile_image ?? "https://cdn-icons-png.flaticon.com/512/847/847969.png",
                "user_full_name" => $userFrom->full_name,
                "message" => $f->message,
                "has_files" => [], // Sementara kosong karena belum diimplementasikan
                "has_images" => $f->images->map(function ($image) {
                    return [
                        'file_name' => $image->file_name,
                        'file_path' => asset('storage/' . $image->file_path),
                        'file_extension' => $image->file_extension,
                    ];
                }),
                "has_audios" => [], // Sementara kosong karena belum diimplementasikan
                "datetime" => $f->created_at->format('h:i A'),
                "is_read" => $f->is_read,
                "is_sender" => Auth::user()->id == $f->from_id,
                "is_replied" => $f->message_reply_id != 0 ? true : false,
                "message_reply" => $f->MessageReply
            ];

            $messages[] = $dmsg;
        }

        return response()->json([
            'status' => 'success',
            'code' => 200,
            'data' => $messages
        ]);
    }
    public function getSingleMessage($message_id)
    {
        $fetch = ChatMessage::select('chat_messages.*', 'up.full_name', 'up.profile_image')
            ->where('chat_messages.id', $message_id)
            ->join('user_profiles as up', 'up.user_id', '=', 'chat_messages.from_id')
            ->first();

        if(!$fetch) {
            return response()
                ->json([
                    'status' => 'failed', 
                    'code' => 400, 
                    'message' => 'No Data Single Message', 
                    'data' => null
                ], 400);
        }

        $dmsg = [
            "id" => $fetch->id,
            "user_id" => $fetch->from_id,
            "user_profile_image" => $fetch->profile_image ?? "https://cdn-icons-png.flaticon.com/512/847/847969.png",
            "user_full_name" => $fetch->full_name,
            "message" => $fetch->message,
            "has_images" => [],
            "has_files" => [],
            "has_audios" => [],
            "datetime" => $fetch->created_at->format('h:i A'),
            "is_read" => $fetch->is_read,
            "is_sender" => Auth::user()->id == $fetch->from_id,
            "is_replied" => Auth::user()->id == $fetch->from_id ? 1 : 2,
        ];

        return response()
            ->json([
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
