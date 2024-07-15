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
    @include('chat.js.gallery-input')
    <script>
        const userProfileJSON = localStorage.getItem('user_profile');
        if (userProfileJSON) {
            const userProfile = JSON.parse(userProfileJSON);
            var currentUserID = userProfile.user_id;
        } else {
            localStorage.clear();
            window.location.href = '/login';
        }
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
    {{-- @include('chat.js.update-activity-user') --}}
    @include('chat.js.send-message')
@endsection
