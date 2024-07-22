<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AgoraService;

class AgoraController extends Controller
{
    protected $agoraService;

    public function __construct(AgoraService $agoraService)
    {
        $this->agoraService = $agoraService;
    }

    public function generateToken(Request $request)
    {
        $channelName = $request->input('channelName');
        $uid = $request->input('uid');
        $role = $request->input('role');

        $token = $this->agoraService->generateToken($channelName, $uid, $role);

        return response()->json(['token' => $token]);
    }

    public function index()
    {
        return view('call');
    }
}
