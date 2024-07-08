<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UserLocation;
use App\Events\LocationUpdated;
use Carbon\Carbon;
use Pusher\Pusher;
class UserLocationController extends Controller
{
    public function updateLocation(Request $request)
    {
        $request->validate([
            'location' => 'required|string',
        ]);

        $user = Auth::user();
        $currentDate = Carbon::now()->format('Y-m-d H:i');

        $existingLocation = UserLocation::where('user_id', $user->id)
                                        ->where('created_at', 'LIKE', '%'.$currentDate.'%')
                                        ->first();

        if ($existingLocation) {
            return response()->json(['success' => false, 'message' => 'Location update already exists for today'], 422);
        }

        $location = UserLocation::create([
            'user_id' => $user->id,
            'location' => $request->location,
            'status' => true
        ]);

        broadcast(new LocationUpdated($location))->toOthers();

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
        ];

        $pusher->trigger('private-location', 'location-sent', $pdata);

        return response()->json(['success' => true, 'location' => $location]);
    }
    
}
