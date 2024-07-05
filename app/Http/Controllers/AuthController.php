<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        if (!$request->username || !$request->password) {
            return response()->json([
                'status' => 'failed',
                'code' => 400,
                'message' => 'Mohon isi username dan password.'
            ], 400);
        }

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->put('is_logged_in', true);
            return response()->json([
                'status' => 'success',
                'code' => 200,
                'message' => 'Berhasil login.'
            ]);
        } else {
            return response()->json([
                'status' => 'failed',
                'code' => 401,
                'message' => 'Maaf username atau password salah.'
            ], 401);
        }
    }

}
