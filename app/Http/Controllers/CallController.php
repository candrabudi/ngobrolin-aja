<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher\Pusher;
class CallController extends Controller
{
    public function startCall(Request $request)
    {
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
            'message' => 'Success start call',
        ];

        $pusher->trigger('start-call', 'call-sent', $pdata);
    }
}
