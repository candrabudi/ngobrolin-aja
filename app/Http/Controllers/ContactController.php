<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserData;
use Auth;
class ContactController extends Controller
{
    public function getContact()
    {
        $userlogin = Auth::user();
        $queries = [];

        if ($userlogin->role_id == 3) {
            $queries[] = UserData::select('up.user_id', 'full_name', 'up.profile_img')
                ->where('central_id', $userlogin->id)
                ->join('user_profiles as up', 'up.user_id', '=', 'user_data.user_id');

            $queries[] = UserData::select('up.user_id', 'full_name', 'up.profile_img')
                ->where('central_id', 0)
                ->where('up.user_id', '!=', $userlogin->id)
                ->join('user_profiles as up', 'up.user_id', '=', 'user_data.user_id');
        } elseif ($userlogin->role_id == 4) {
            $queries[] = UserData::select('up.user_id', 'full_name', 'up.profile_img')
                ->where('up.user_id', $userlogin->data->central_id)
                ->join('user_profiles as up', 'up.user_id', '=', 'user_data.user_id');

            $queries[] = UserData::select('up.user_id', 'full_name', 'up.profile_img')
                ->where('parent_id', $userlogin->id)
                ->where('central_id', $userlogin->data->central_id)
                ->join('user_profiles as up', 'up.user_id', '=', 'user_data.user_id');

            $queries[] = UserData::select('up.user_id', 'full_name', 'up.profile_img')
                ->where('parent_id', 0)
                ->where('central_id', $userlogin->data->central_id)
                ->where('up.user_id', '!=', $userlogin->id)
                ->join('user_profiles as up', 'up.user_id', '=', 'user_data.user_id');
        }

        $finalQuery = array_shift($queries);

        foreach ($queries as $query) {
            $finalQuery = $finalQuery->union($query);
        }

        return $finalQuery->get();
    }

    
}
