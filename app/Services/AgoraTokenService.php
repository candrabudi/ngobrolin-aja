<?php

namespace App\Services;

use Yasser\Agora\RtcTokenBuilder;

class AgoraTokenService
{
    private $appID;
    private $appCertificate;

    public function __construct()
    {
        $this->appID = env('AGORA_APP_ID');
        $this->appCertificate = env('AGORA_APP_CERTIFICATE');
    }

    public function generateToken($channelName, $uid, $role, $expireTimeInSeconds = 3600)
    {
        $role = $role === 'publisher' ? RtcTokenBuilder::ROLE_PUBLISHER : RtcTokenBuilder::ROLE_SUBSCRIBER;

        return RtcTokenBuilder::buildTokenWithUid(
            $this->appID,
            $this->appCertificate,
            $channelName,
            $uid,
            $role,
            $expireTimeInSeconds
        );
    }
}
