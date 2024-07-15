<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AgoraTokenService;

class AgoraController extends Controller
{
    protected $tokenService;

    public function __construct(AgoraTokenService $tokenService)
    {
        $this->tokenService = $tokenService;
    }

    public function generateToken(Request $request)
    {
        $channelName = $request->input('channel');
        $uid = $request->input('uid');
        $role = $request->input('role');

        $role = in_array($role, ['publisher', 'subscriber']) ? $role : 'subscriber';

        $token = $this->tokenService->generateToken($channelName, $uid, $role);

        return response()->json(['token' => $token]);
    }
}
