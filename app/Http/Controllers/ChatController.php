<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserData;
use App\Models\ChatRoom;
use App\Models\ChatMessage;
use App\Models\UserProfile;
use App\Models\ChatRoomParticipant;
use Auth;
use DB;
use MobileDetect;
use Str;
use Crypt;
class ChatController extends Controller
{
    public function index()
    {
        return view('chat.index');
    }

    public function getRoomChat()
    {
        $userlogin = Auth::user();
        $roomParticipant = RoomParticipant::where('user_id', $userlogin->user_id)
            ->where('is_leave', 0)
            ->join('chat_rooms as cr', 'cr.id', '=', 'chat_room_participants.chat_room_id')
            ->get();

        return $roomParticipant;
    }

    public function createPrivateRoom(Request $request)
    {
        DB::beginTransaction();

        try {
            $userlogin = Auth::user();
            $from_id = $userlogin->id;
            $to_id = $request->user_id;

            $touser = UserProfile::where('user_id', $to_id)->first();
            if (!$touser) {
                return response()->json([
                    'status' => 'failed',
                    'code' => 400,
                    'message' => 'No Data User Profile'
                ]);
            }

            $checkRoom = ChatRoomParticipant::whereIn('chat_room_id', function ($query) use ($from_id) {
                    $query->select('chat_room_id')
                        ->from('chat_room_participants')
                        ->where('user_id', $from_id);
                })
                ->join('chat_rooms as cr', 'cr.id', '=', 'chat_room_participants.chat_room_id')
                ->where('room_type', 'personal')
                ->where('user_id', $to_id)
                ->first();
            
            if (!$checkRoom) {
                $privateKey = Str::random(64);

                $room = new ChatRoom();
                $room->room_name = "Private Chat";
                $room->room_type = 'personal';
                $room->private_key = $privateKey;
                $room->save();

                ChatRoomParticipant::create([
                    'chat_room_id' => $room->id,
                    'user_id' => $from_id, 
                    'is_leave' => 0,
                ]);

                ChatRoomParticipant::create([
                    'chat_room_id' => $room->id,
                    'user_id' => $to_id,
                    'is_leave' => 0,
                ]);

                DB::commit();

                return response()->json([
                    'status' => 'success',
                    'code' => 201,
                    'message' => 'Success create private room',
                    'data' => [
                        'chat_room_id' => $room->id,
                    ]
                ], 201);
            }

            DB::commit();

            return response()->json([
                'status' => 'success',
                'code' => 201,
                'message' => 'Private room already exists',
                'data' => [
                    'chat_room_id' => $checkRoom->chat_room_id,
                ]
            ], 201);

        } catch (\Exception $e) {
            DB::rollback();

            return response()->json([
                'status' => 'failed',
                'code' => 500,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function getChatRoom()
    {
        $userId = Auth::user()->id;
        $rooms = [];

        $fetchPrivateRooms = ChatRoomParticipant::join('chat_rooms as cr', 'cr.id', '=', 'chat_room_participants.chat_room_id')
            ->where('user_id', $userId)
            ->where('room_type', 'personal')
            ->where('is_leave', 0)
            ->get();

        foreach ($fetchPrivateRooms as $fr) {
            $roomParticipant = ChatRoomParticipant::where('chat_room_id', $fr->chat_room_id)
                ->where('user_id', '!=', $userId)
                ->first();

            $user = User::where('id', $roomParticipant->user_id)
                ->first();

            $lastMessage = ChatMessage::where('chat_room_id', $fr->chat_room_id)
                ->orderBy('created_at', 'DESC')
                ->first();

            $senderLastMessage = ChatMessage::where('chat_room_id', $fr->chat_room_id)
                ->where('from_id', $userId)
                ->where('is_read', 0)
                ->orderBy('created_at', 'DESC')
                ->first();

            $unreadMessages = ChatMessage::where('chat_room_id', $fr->chat_room_id)
                ->where('from_id', '!=', $userId)
                ->where('is_read', 0)
                ->count();

            $decryptedLastMessage = null;
            if ($lastMessage) {
                try {
                    $privateKey = ChatRoom::find($fr->chat_room_id)->private_key;
                    $decryptedMessageContent = Crypt::decryptString($lastMessage->message);
                    $decryptedLastMessage = str_replace($privateKey, '', $decryptedMessageContent);
                } catch (\Exception $e) {
                    $decryptedLastMessage = $lastMessage->message;
                }
            }

            $rooms[] = [
                "room_id" => $fr->chat_room_id,
                "name" => $user->Profile->full_name,
                "sender_id" => $lastMessage ? $lastMessage->from_id : null,
                "status" => $user->is_online == 1 ? "online" : "offline",
                "lastmessage" => $decryptedLastMessage ?? '',
                "profile" => $user->Profile->profile_img ?? "https://cdn-icons-png.flaticon.com/512/847/847969.png",
                "unread" => $unreadMessages,
                "sender_message_unread" => $senderLastMessage ? true : false,
                'lastMessageTime' => $lastMessage ? $lastMessage->created_at : null,
                'is_location' => $senderLastMessage ? $senderLastMessage->is_location : 0
            ];
        }

        $fetchGroupRooms = ChatRoomParticipant::join('chat_rooms', 'chat_rooms.id', '=', 'chat_room_participants.chat_room_id')
            ->where('user_id', $userId)
            ->where('room_type', 'group')
            ->where('is_leave', 0)
            ->get();

        foreach ($fetchGroupRooms as $fr) {
            $lastMessage = ChatMessage::where('chat_room_id', $fr->chat_room_id)
                ->orderBy('created_at', 'DESC')
                ->first();

            $unreadMessages = ChatMessage::where('chat_room_id', $fr->chat_room_id)
                ->where('from_id', '!=', $userId)
                ->where('is_read', 0)
                ->count();

            $decryptedLastMessage = null;
            if ($lastMessage) {
                try {
                    $privateKey = ChatRoom::find($fr->chat_room_id)->private_key;
                    $decryptedMessageContent = Crypt::decryptString($lastMessage->message);
                    $decryptedLastMessage = str_replace($privateKey, '', $decryptedMessageContent);
                } catch (\Exception $e) {
                    $decryptedLastMessage = $lastMessage->message;
                }
            }

            $rooms[] = [
                "room_id" => $fr->chat_room_id,
                "name" => $fr->name,
                "status" => "online",
                "lastmessage" => $decryptedLastMessage ?? '',
                "profile" => $fr->icon_room,
                "unread" => $unreadMessages,
            ];
        }

        return response()->json([
            'status' => 'success',
            'code' => 200,
            'data' => $rooms
        ]);
    }

    public function getDetailRoom(Request $request)
    {
        $room_id = $request->room_id;
        $userLogin = Auth::user();
        $fRoom = ChatRoom::where('id', $room_id)
            ->first();
        if(!$fRoom) {
            return response()->json([
                'status' => 'failed',
                'code' => 400,
                'data' => 'No data chat room.'
            ], 400);
        }

        if($fRoom->room_type == "personal") {
            $fRoomParticipant = ChatRoomParticipant::where('chat_room_id', $room_id)
                ->where('chat_room_participants.user_id', '!=',$userLogin->id)
                ->join('user_profiles as up', 'up.user_id', '=', 'chat_room_participants.user_id')
                ->join('users as u', 'u.id', '=', 'up.user_id')
                ->first();

            if($fRoomParticipant) {
                $data = [
                    'room_name' => $fRoomParticipant->full_name,
                    'room_icon' => $fRoomParticipant->profile_img,
                    'last_seen' => $fRoomParticipant->last_seen,
                    'is_online' => $fRoomParticipant->is_online == 1 ? true : false,
                    'room_type' => "personal"
                ];

                return $data;
            }
        }
    }

}
