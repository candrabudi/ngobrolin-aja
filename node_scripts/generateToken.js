const { RtcTokenBuilder, RtcRole } = require('agora-access-token');
const APP_ID = '28f10f3bc7cf4dc28787a7759f2dfff5'; // Replace with your Agora App ID
const APP_CERTIFICATE = '553a6503e34f4aa2a66eb290f77cfd43'; // Replace with your Agora App Certificate

function generateToken(channelName, uid, role, expireTime) {
    const currentTimestamp = Math.floor(Date.now() / 1000);
    const privilegeExpireTime = currentTimestamp + expireTime;

    return RtcTokenBuilder.buildTokenWithUid(
        APP_ID,
        APP_CERTIFICATE,
        channelName,
        uid,
        role,
        privilegeExpireTime
    );
}

if (require.main === module) {
    const [channelName, uid, role, expireTime] = process.argv.slice(2);
    const token = generateToken(channelName, uid, role, parseInt(expireTime));
    console.log(token);
}
