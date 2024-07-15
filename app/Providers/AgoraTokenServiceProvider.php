<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Yasserbelhimer\Agora\RtcTokenBuilder;

class AgoraTokenServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('agora-token', function ($app) {
            return new RtcTokenBuilder();
        });
    }
}
