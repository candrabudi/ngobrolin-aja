<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ChatRoom;
use App\Models\ChatRoomParticipant;
use Pusher\Pusher;
use Auth;
class UserController extends Controller
{
    public function updateUserActivity(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $user = Auth::user();
        $user->is_online = $request->input('is_online');
        
        if ($request->input('is_online') == 1) {
            $user->last_seen = null;
        } else {
            $user->last_seen = now();
        }
        
        $user->save();


        $fRoomParticipant = ChatRoomParticipant::where('user_id', $user->id)
            ->where('room_type', 'personal')
            ->join('chat_rooms as cr', 'cr.id', '=', 'chat_room_participants.chat_room_id')
            ->get();

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'encrypted' => true
            ]
        );
    
        foreach($fRoomParticipant as $rp) {
            $pdata = [
                'room_id'   => $rp->chat_room_id,
                'user_id'   =>  $user->id,
                'room_name' =>  $user->Profile->full_name,
                'room_icon' =>  $user->Profile->profile_img,
                'last_seen' =>  $user->last_seen,
                'is_online' =>  $user->is_online == 1 ? true : false,
                'room_type' => "personal"
            ];
    
            $pusher->trigger('user-activity', 'room-detail', $pdata);
        }
        
        
        return response()->json(['message' => 'Status pengguna diperbarui.']);
    }
}
