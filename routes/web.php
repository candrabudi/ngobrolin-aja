<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserLocationController;
use App\Http\Controllers\SettingController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/process/login', [AuthController::class, 'loginProcess'])->name('login.process');
});
Route::middleware('auth')->post('/update-location', [UserLocationController::class, 'updateLocation']);
Route::group(['middleware' => 'auth'], function () {
    Route::get('/get-contact', [ContactController::class, 'getContact'])->name('contact.get');
    Route::get('/chat', [ChatController::class, 'index'])->name('chat.home');
    Route::get('/chat/room/detail', [ChatController::class, 'getDetailRoom'])->name('chat.room.detail');
    Route::post('/chat/create/private-room', [ChatController::class, 'createPrivateRoom'])->name('chat.create.private');
    Route::get('/chat/get-rooms', [ChatController::class, 'getChatRoom'])->name('chat.getrooms');
    Route::get('/message', [MessageController::class, 'getMessage'])->name('message.list');
    Route::post('/message/sent', [MessageController::class, 'sendMessage'])->name('message.send');
    Route::post('/message/update-read-message', [MessageController::class, 'updateReadMessage'])->name('message.update.unread');
    Route::get('/message/single-message/{message_id}', [MessageController::class, 'getSingleMessage'])->name('message.singlemessage');

    Route::post('/user/update-activity', [UserController::class, 'updateUserActivity'])->name('user.activity.update');
    Route::get('/setting', [SettingController::class, 'index'])->name('setting');

    Route::post('/pusher/auth', function (Request $request) {
        $authenticated = false;

        if (auth()->check()) {
            $user = auth()->user();
            $socket_id = $request->input('socket_id');
            $channel_name = $request->input('channel_name');
    
            $pusher = new Pusher\Pusher(
                env('PUSHER_APP_KEY'),
                env('PUSHER_APP_SECRET'),
                env('PUSHER_APP_ID'),
                [
                    'cluster' => env('PUSHER_APP_CLUSTER'),
                    'encrypted' => true
                ]
            );
            $presence_data = [
                'full_name' => $user->Profile->full_name,
            ];
    
            $auth = $pusher->presence_auth($channel_name, $socket_id, $user->id, $presence_data);
            return response($auth);
        } else {
            abort(403, 'Unauthorized action.');
        }
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
