<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class AgoraToken extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'agora-token';
    }
}
