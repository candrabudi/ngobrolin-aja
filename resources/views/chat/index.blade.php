@extends('layouts.app')
@section('content')
    @include('layouts.components.sidebar')
    <div id="toastContainer" class="toast-container"></div>
    <div class="chat status-middle-bar d-flex align-items-center justify-content-center">
        <div class="status-right">
            <div class="empty-chat-img"><img src="assets/img/empty-img-01.png" alt="Image"></div>
            <div class="empty-dark-img"><img src="assets/img/empty-img-dark.png" alt="Image"></div>
            <div class="select-message-box">
                <h4>Pilih Pesan</h4>
                <p>Cek chat lama atau buat chat di bawah buat mulai yang baru, yuk!</p>
                <a href="javascript:;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#new-chat"><i
                        class="bx bx-plus me-1"></i>Buat Pesan Baru</a>
            </div>
        </div>
    </div>

    @include('chat.chat-message')

    <div class="modal fade" id="video_call" role="document">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content voice_content">
                <div class="modal-body voice_body">
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img alt="User Image" src="assets/img/avatar/avatar-2.jpg" class="call-avatar">
                                    <h4>Mark Villiams <span>Video Calling</span>
                                    </h4>
                                </div>
                                <div class="call-items">
                                    <a href="#" class="btn call-item call-end" data-bs-dismiss="modal">
                                        <i class="bx bx-x"></i>
                                    </a>
                                    <a href="video-call.html" class="btn call-item call-start">
                                        <i class="feather-video"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="voice_call" role="document">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content voice_content">
                <div class="modal-body voice_body">
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img alt="User Image" src="assets/img/avatar/avatar-2.jpg" class="call-avatar">
                                    <h4>Mark Villiams <span>Voice Calling</span>
                                    </h4>
                                </div>
                                <div class="call-items">
                                    <a href="#" class="btn call-item call-end" data-bs-dismiss="modal">
                                        <i class="bx bx-x"></i>
                                    </a>
                                    <a href="audio-call.html" class="btn call-item call-start">
                                        <i class="bx bx-phone-call"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mapModalLabel">Map Berbagi Lokasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="map" style="width: 100%; height: 600px;"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="voiceCallDialog" class="dialog" onmousedown="startDrag(event)">
        <div class="dialog-header">
            <span class="dialog-title">Voice Call</span>
            <div class="dialog-controls">
                <button type="button" class="dialog-btn dialog-maximize-btn" onclick="maximizeDialog('voiceCallDialog')">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>
        </div>
        <div class="dialog-body">
            <div class="call-box incoming-box">
                <div class="call-wrapper">
                    <div class="call-inner">
                        <div class="call-user">
                            <img alt="User Image" src="assets/img/avatar/avatar-2.jpg" class="call-avatar">
                            <h4 id="voice-full-name">Mark Villiams</h4>
                        </div>
                        <div class="call-items">
                            <a href="#" class="btn call-item btn-end-call" style="margin-right: 10px;"
                                onclick="closeDialog()">
                                <i class="bx bx-x"></i>
                            </a>
                            <a href="#" class="btn call-item btn-video-call" onclick="switchToVideoCall()">
                                <i class="bx bx-video"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="videoCallDialog" class="dialog" onmousedown="startDrag(event)" style="display: none;">
        <div class="dialog-header">
            <span class="dialog-title">Video Call</span>
            <div class="dialog-controls">
                <button type="button" class="dialog-btn dialog-maximize-btn"
                    onclick="maximizeDialog('videoCallDialog')">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>
        </div>
        <div class="dialog-body">
            <div class="call-box incoming-box">
                <div class="call-wrapper">
                    <div class="call-inner">
                        <div class="call-user">
                            <video id="localVideo" autoplay muted></video>
                            <h4 id="video-full-name">Mark Villiams</h4>
                        </div>
                        <div class="call-items">
                            <a href="#" class="btn call-item btn-end-call" style="margin-right: 10px;"
                                onclick="closeDialog()">
                                <i class="bx bx-x"></i>
                            </a>
                            <a href="#" class="btn call-item btn-voice-call" onclick="switchToVoiceCall()">
                                <i class="bx bx-phone"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="joinCallDialog" class="dialog" onmousedown="startDrag(event)" style="display: none;">
        <div class="dialog-header">
            <span class="dialog-title">Video Call</span>
            <div class="dialog-controls">
                <button type="button" class="dialog-btn dialog-maximize-btn"
                    onclick="maximizeDialog('joinCallDialog')">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>
        </div>
        <div class="dialog-body">
            <div class="call-box incoming-box">
                <div class="call-wrapper">
                    <div class="call-inner">
                        <div class="call-user">
                            <video id="localVideo" autoplay muted></video>
                            <h4 id="video-full-name">Mark Villiams</h4>
                        </div>
                        <div class="call-items">
                            <a href="#" class="btn call-item btn-end-call" style="margin-right: 10px;"
                                onclick="closeDialog()">
                                <i class="bx bx-x"></i>
                            </a>
                            <a href="#" class="btn call-item btn-voice-call" onclick="switchToVoiceCall()">
                                <i class="bx bx-phone"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('styles')
    @include('chat.css.styles')
@endsection
@section('scripts')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/agora-rtc-sdk-ng@latest"></script>
    <script>
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        var pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
            cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
            authEndpoint: '/pusher/auth',
            auth: {
                headers: {
                    'X-CSRF-Token': csrfToken
                }
            }
        });
    
        var channel = pusher.subscribe('start-call');
        channel.bind('call-sent', function(data) {
            console.log("kodok");
            console.log(data);
            // if (data.user_id === '{{ auth()->id() }}') {
                document.getElementById('joinCallDialog').style.display = 'block';
            // }
        });
    </script>
    
    <script>
        // Constants and initialization
        let isMaximized = false;
        let originalWidth = 350, originalHeight = 650;
        let offsetX, offsetY;
    
        let rtc = {
            client: null,
            localAudioTrack: null,
            localVideoTrack: null
        };
    
        const APP_ID = "48647c1af8324de3a1a3a382febbca97";
        const TOKEN = null;
        const CHANNEL = "channel01";
    
        // Function to start basic call (audio only)
        async function startBasicCall() {
            rtc.client = AgoraRTC.createClient({
                mode: "rtc",
                codec: "vp8"
            });
            await rtc.client.join(APP_ID, CHANNEL, TOKEN, null);
            rtc.localAudioTrack = await AgoraRTC.createMicrophoneAudioTrack();
            await rtc.client.publish([rtc.localAudioTrack]);
        }
    
        // Function to start video stream
        async function startVideoStream() {
            rtc.localVideoTrack = await AgoraRTC.createCameraVideoTrack();
            const video = document.getElementById('localVideo');
            rtc.localVideoTrack.play(video);
            await rtc.client.publish([rtc.localAudioTrack, rtc.localVideoTrack]);
        }
    
        // Switch to video call mode
        function switchToVideoCall() {
            document.getElementById('voiceCallDialog').style.display = 'none';
            document.getElementById('videoCallDialog').style.display = 'block';
            startVideoStream();
        }
    
        // Switch to voice call mode
        function switchToVoiceCall() {
            document.getElementById('videoCallDialog').style.display = 'none';
            document.getElementById('voiceCallDialog').style.display = 'block';
            if (rtc.localVideoTrack) {
                rtc.localVideoTrack.close();
                rtc.client.unpublish(rtc.localVideoTrack);
            }
        }
    
        // Open the call dialog
        async function openDialog() {
            try {
                const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    
                const response = await fetch('/call/start', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        parameter: 'value'
                    })
                });
    
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
    
                await startBasicCall();
    
                const dialog = document.getElementById('voiceCallDialog');
                dialog.style.display = 'block';
                dialog.style.width = originalWidth + 'px';
                dialog.style.height = originalHeight + 'px';
                dialog.style.right = '50px';
                dialog.style.top = '50px';
            } catch (error) {
                console.error('Error during API call:', error);
            }
        }
    
        // Close the call dialog
        function closeDialog() {
            document.getElementById('voiceCallDialog').style.display = 'none';
            document.getElementById('videoCallDialog').style.display = 'none';
            isMaximized = false;
            document.getElementById('voiceCallDialog').classList.remove('dialog-maximized');
            document.getElementById('videoCallDialog').classList.remove('dialog-maximized');
            if (rtc.localAudioTrack) rtc.localAudioTrack.close();
            if (rtc.localVideoTrack) rtc.localVideoTrack.close();
            rtc.client.leave();
        }
    
        // Maximize or restore the dialog size
        function maximizeDialog(dialogId) {
            const dialog = document.getElementById(dialogId);
            if (!isMaximized) {
                originalWidth = dialog.offsetWidth;
                originalHeight = dialog.offsetHeight;
                dialog.classList.add('dialog-maximized');
                dialog.style.width = '100vw';
                dialog.style.height = '100vh';
                dialog.style.top = 0;
                dialog.style.left = 0;
                isMaximized = true;
                dialog.removeEventListener('mousedown', startDrag);
            } else {
                dialog.style.width = originalWidth + 'px';
                dialog.style.height = originalHeight + 'px';
                dialog.classList.remove('dialog-maximized');
                isMaximized = false;
                dialog.addEventListener('mousedown', startDrag); // Restore dragging ability
            }
        }
    
        // Function to start dragging the dialog
        function startDrag(e) {
            e.preventDefault();
            const dialog = e.target.closest('.dialog');
            if (dialog) {
                offsetX = e.clientX - dialog.getBoundingClientRect().right;
                offsetY = e.clientY - dialog.getBoundingClientRect().top;
                document.addEventListener('mousemove', dragDialog);
                document.addEventListener('mouseup', stopDrag);
            }
        }
    
        // Function to drag the dialog
        function dragDialog(e) {
            const dialog = document.querySelector('.dialog:not([style*="display: none"])');
            if (dialog && !isMaximized) {
                dialog.style.right = (window.innerWidth - e.clientX - offsetX) + 'px';
                dialog.style.top = (e.clientY - offsetY) + 'px';
            }
        }
    
        // Function to stop dragging the dialog
        function stopDrag() {
            document.removeEventListener('mousemove', dragDialog);
            document.removeEventListener('mouseup', stopDrag);
        }
    
        // Event listener for opening the voice call dialog
        document.getElementById('open-voice-call').addEventListener('click', function() {
            openDialog();
        });
    
        // Event listeners for dragging the dialogs
        document.getElementById('voiceCallDialog').addEventListener('mousedown', startDrag);
        document.getElementById('videoCallDialog').addEventListener('mousedown', startDrag);
    </script>
    <script>
        const galleryInput = document.getElementById('galleryInput');
        const previewImagesContainer = document.getElementById('previewImages');
        let currentPreviewImage = null;

        galleryInput.addEventListener('change', function() {
            const files = this.files;
            if (files.length === 0) {
                return;
            }

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                if (!file.type.startsWith('image/')) {
                    continue;
                }

                const reader = new FileReader();
                reader.onload = function(event) {
                    const imgContainer = document.createElement('div');
                    imgContainer.classList.add('img-container');
                    imgContainer.style.backgroundImage = `url('${event.target.result}')`;
                    imgContainer.setAttribute('data-image-url', event.target.result);

                    const closeBtn = document.createElement('a');
                    closeBtn.href = '#';
                    closeBtn.classList.add('close-btn');
                    closeBtn.innerHTML = '<i class="bx bx-trash"></i>';
                    closeBtn.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        imgContainer.remove();
                        if (previewImagesContainer.children.length === 0) {
                            document.querySelector('.preview-image-upload').classList.add('d-none');
                        }
                    });

                    imgContainer.appendChild(closeBtn);
                    imgContainer.addEventListener('click', function() {
                        const imageUrl = imgContainer.getAttribute('data-image-url');
                        document.getElementById('modalImage').src = imageUrl;
                        $('#imageModal').modal('show');
                        currentPreviewImage = imgContainer;
                    });

                    previewImagesContainer.appendChild(imgContainer);
                };
                reader.readAsDataURL(file);
            }
            document.querySelector('.preview-image-upload').classList.remove('d-none');
        });

        document.querySelector('.close-preview').addEventListener('click', function(event) {
            event.preventDefault();
            document.querySelector('.preview-image-upload').classList.add('d-none');
            previewImagesContainer.innerHTML = '';
            galleryInput.value = '';
        });

        document.getElementById('deleteImageBtn').addEventListener('click', function() {
            if (currentPreviewImage) {
                currentPreviewImage.remove();
                $('#imageModal').modal('hide');
                if (previewImagesContainer.children.length === 0) {
                    document.querySelector('.preview-image-upload').classList.add('d-none');
                }
                currentPreviewImage = null;
            }
        });

        $(document).on('click', function(event) {
            if (!$(event.target).closest('.modal-content').length &&
                !$(event.target).closest('.img-container').length &&
                !$(event.target).closest('.close').length) {
                $('#imageModal').modal('hide');
            }
        });
    </script>

    <script>
        var currentUserID = {{ Auth::user()->id }};
    </script>
    @include('chat.js.append-message')
    @include('chat.js.get-rooms')
    @include('chat.js.pusher')
    @include('chat.js.load-messages')
    @include('chat.js.load-detail-room')
    @include('chat.js.update-detail-room')
    @include('chat.js.calculate-last-seen')
    @include('chat.js.update-unread-messages')
    @include('chat.js.fetch-messages')
    @include('chat.js.get-contact')
    @include('chat.js.create-chat-room')
    <script>
        const storedRoomId = localStorage.getItem('roomId');
        if (storedRoomId) {
            $('.status-middle-bar').remove();
            middleSection.style.display = 'block';
            loadDetailRoom(storedRoomId);
        }

        const forwardChatMsg = document.querySelector('#forwardChatMsg');
        const closeReplyButton = document.querySelector('.close-replay');

        if (messageContainer) {
            messageContainer.addEventListener('click', function(event) {
                if (event.target.closest('.reply-button')) {
                    event.preventDefault();
                    const messageElement = event.target.closest('.chats');
                    const messageId = messageElement.getAttribute('data-message-id');
                    fetchMessageData(messageId);
                }
            });
        }

        if (closeReplyButton) {
            closeReplyButton.addEventListener('click', function(event) {
                event.preventDefault();
                if (forwardChatMsg) {
                    forwardChatMsg.classList.add('d-none');
                }
            });
        }
    </script>
    @include('chat.js.update-activity-user')
    @include('chat.js.send-message')
@endsection
