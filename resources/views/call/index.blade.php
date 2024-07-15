<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Call</title>
    <script src="{{ asset('agora/AgoraRTC_N-4.21.0.js') }}"></script>
    <style>
        #local-stream, .remote-stream {
            width: 400px;
            height: 300px;
            background-color: #ccc;
            margin: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>Video Call</h1>
    <div id="local-stream"></div>
    <div id="remote-streams"></div>
    
    <script>
        const client = AgoraRTC.createClient({ mode: 'rtc', codec: 'vp8' });
        const localStreamContainer = document.getElementById('local-stream');
        const remoteStreamsContainer = document.getElementById('remote-streams');
        const channel = '{{ $channel }}';
        const appId = '{{ $appId }}';

        async function startCall() {
            try {
                const response = await fetch('/generate-token');
                const data = await response.json();
                const token = data.token;

                await client.join(appId, channel, token, null);
                const localTracks = await AgoraRTC.createMicrophoneAndCameraTracks();
                localTracks[0].play(localStreamContainer);
                await client.publish([localTracks[0], localTracks[1]]);

                client.on('user-published', async (user, mediaType) => {
                    await client.subscribe(user, mediaType);
                    if (mediaType === 'video') {
                        const remoteTrack = user.videoTrack;
                        const remoteStreamContainer = document.createElement('div');
                        remoteStreamContainer.id = `remote-stream-${user.uid}`;
                        remoteStreamContainer.className = 'remote-stream';
                        remoteStreamsContainer.appendChild(remoteStreamContainer);
                        remoteTrack.play(remoteStreamContainer);
                    }
                });

                client.on('user-unpublished', user => {
                    const remoteStreamContainer = document.getElementById(`remote-stream-${user.uid}`);
                    if (remoteStreamContainer) {
                        remoteStreamsContainer.removeChild(remoteStreamContainer);
                    }
                });
            } catch (error) {
                console.error('Error starting call:', error);
            }
        }

        startCall();
    </script>
</body>
</html>
