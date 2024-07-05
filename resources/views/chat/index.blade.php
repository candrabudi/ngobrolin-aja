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
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
