<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agora Voice and Video Call</title>
    <style>
        #local_stream, #remote_stream {
            width: 400px;
            height: 300px;
            border: 1px solid #ccc;
            margin: 10px;
        }
        #participant_count {
            font-size: 20px;
            margin: 10px;
        }
        #participant_list {
            font-size: 16px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div id="local_stream"></div>
    <div id="remote_stream"></div>
    <button id="startVoiceCall">Start Voice Call</button>
    <button id="switchToVideoCall">Switch to Video Call</button>
    <div id="participant_count">Participants: 0</div>
    <div id="participant_list">Participant UIDs: </div>

    <script src="https://cdn.jsdelivr.net/npm/agora-rtc-sdk-ng@latest"></script>
    <script>
        const client = AgoraRTC.createClient({ mode: 'rtc', codec: 'vp8' });
        let localAudioTrack, localVideoTrack;
        const channelName = 'test-channel';
        const participants = new Set();  // Track participants by UID
        const broadcastChannel = new BroadcastChannel('agora_channel');  // Create a broadcast channel for synchronization
        let isInCall = false; // To track if the call has started

        // Function to handle BroadcastChannel messages
        function handleBroadcastChannelMessage(event) {
            if (event.data.type === 'update') {
                const { uid, action } = event.data;
                if (action === 'join') {
                    participants.add(uid);
                } else if (action === 'leave') {
                    participants.delete(uid);
                }
                updateParticipantCount();
                updateParticipantList();
            }
        }

        // Initialize BroadcastChannel listener for synchronization
        broadcastChannel.onmessage = handleBroadcastChannelMessage;

        async function autoJoin() {
            if (isInCall) return; // Prevent rejoining if already in call

            // Fetch token from server and join the channel
            const uid = await getUID();
            const response = await fetch(`/token?channelName=${channelName}&uid=${uid}&role=publisher`);
            const data = await response.json();
            const token = data.token;

            await client.join('28f10f3bc7cf4dc28787a7759f2dfff5', channelName, token, uid);

            // Publish local audio track
            localAudioTrack = await AgoraRTC.createMicrophoneAudioTrack();
            await client.publish(localAudioTrack);

            participants.add(uid);  // Add local participant
            updateParticipantCount();
            updateParticipantList();

            isInCall = true; // Mark that the call has started

            // Notify other tabs of new participant
            broadcastChannel.postMessage({ type: 'update', uid, action: 'join' });

            // Set up event listeners
            client.on('user-published', async (user, mediaType) => {
                await client.subscribe(user, mediaType);
                participants.add(user.uid);  // Add remote participant
                updateParticipantCount();
                updateParticipantList();

                // Notify other tabs of new participant
                broadcastChannel.postMessage({ type: 'update', uid: user.uid, action: 'join' });

                if (mediaType === 'video') {
                    const remoteVideoTrack = user.videoTrack;
                    remoteVideoTrack.play('remote_stream');
                }

                if (mediaType === 'audio') {
                    const remoteAudioTrack = user.audioTrack;
                    remoteAudioTrack.play();
                }
            });

            client.on('user-unpublished', (user) => {
                participants.delete(user.uid);  // Remove participant
                updateParticipantCount();
                updateParticipantList();

                // Notify other tabs of participant leaving
                broadcastChannel.postMessage({ type: 'update', uid: user.uid, action: 'leave' });
            });

            client.on('user-joined', (user) => {
                participants.add(user.uid);  // Add participant
                updateParticipantCount();
                updateParticipantList();

                // Notify other tabs of new participant
                broadcastChannel.postMessage({ type: 'update', uid: user.uid, action: 'join' });
            });

            client.on('user-left', (user) => {
                participants.delete(user.uid);  // Remove participant
                updateParticipantCount();
                updateParticipantList();

                // Notify other tabs of participant leaving
                broadcastChannel.postMessage({ type: 'update', uid: user.uid, action: 'leave' });
            });
        }

        async function getUID() {
            // Implement UID generation or fetch it from a server
            return Math.floor(Math.random() * (2299 - 1 + 1)) + 1;
        }

        async function startVoiceCall() {
            await autoJoin();
        }

        async function switchToVideoCall() {
            if (!localAudioTrack) {
                console.error("Start the voice call first!");
                return;
            }

            if (localVideoTrack) {
                console.log("Already in video call.");
                return;
            }

            localVideoTrack = await AgoraRTC.createCameraVideoTrack();
            localVideoTrack.play('local_stream');
            await client.publish(localVideoTrack);

            // Notify others about the video track change
            // This might need additional handling on the server side or through Agora events
        }

        function updateParticipantCount() {
            document.getElementById('participant_count').textContent = `Participants: ${participants.size}`;
        }

        function updateParticipantList() {
            const participantListElement = document.getElementById('participant_list');
            participantListElement.textContent = `Participant UIDs: ${Array.from(participants).join(', ')}`;
        }

        document.getElementById('startVoiceCall').addEventListener('click', startVoiceCall);
        document.getElementById('switchToVideoCall').addEventListener('click', switchToVideoCall);

        // Auto-join the channel when the page loads
        window.onload = autoJoin;
    </script>
</body>
</html>
