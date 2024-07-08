@extends('layouts.app')

@section('content')
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
@endsection
@section('styles')
    <style>
        .img-container {
            position: relative;
            display: inline-block;
            margin: 10px;
            background-size: cover;
            background-position: center;
            width: 150px;
            height: 150px;
            border: 2px solid #8e44ad;
            border-radius: 8px;
            cursor: pointer;
        }

        .img-container img {
            display: none;
        }

        .close-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            background: #e74c3c;
            color: #FFFFFF;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            text-decoration: none;
            text-align: center;
            line-height: 25px;
            z-index: 10;
        }

        .img-popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            text-align: center;
        }

        .img-popup img {
            max-width: 100%;
            max-height: 100%;
        }

        .close-popup {
            position: absolute;
            top: 10px;
            right: 10px;
            color: white;
            cursor: pointer;
        }
    </style>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
