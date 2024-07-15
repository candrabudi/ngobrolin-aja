<script>
    const tokenJwt = localStorage.getItem('token');
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    var pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
        cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
        authEndpoint: '{{ env('API_SECURE_MESSANGER') }}/v1/pusher/auth',
        auth: {
            headers: {
                'Authorization': 'Bearer ' + tokenJwt,
            }
        }
    });

    var channel = pusher.subscribe('private-chat');
    channel.bind('message-sent', function(data) {
        const roomId = localStorage.getItem('roomId');
        var is_sender = data.data.user_id === currentUserID ? true : false;
        if (data.data.room_id == roomId && data.data.user_id != currentUserID) {
            appendMessage({
                id: data.data.id,
                user_id: data.data.user_id,
                user_profile_image: data.data.user_profile_image,
                user_full_name: data.data.full_name,
                message: data.data.message,
                has_images: [],
                has_files: [],
                has_audios: [],
                is_sender: is_sender,
                datetime: data.data.datetime,
                is_read: true,
                is_replied: data.data.is_replied,
                message_reply: data.data.message_reply
            });
            updateUnreadMessages(data.data.room_id, data.data.id);
        } else if (data.data.room_id == roomId) {
            appendMessage({
                id: data.data.id,
                user_id: data.data.user_id,
                user_profile_image: data.data.user_profile_image,
                user_full_name: data.data.full_name,
                message: data.data.message,
                has_images: data.data.has_images,
                has_files: [],
                has_audios: [],
                is_sender: is_sender,
                datetime: data.data.datetime,
                is_read: false,
                is_replied: data.data.is_replied,
                is_location: data.data.is_location,
                message_reply: data.data.message_reply
            });
        }
        getRooms();
    });

    channel.bind('message-deleted', function(data) {
        $(`.chats[data-message-id="${data.message_id}"]`).remove();
    });

    var channelUpdateMessage = pusher.subscribe('update-message');
    channelUpdateMessage.bind('update-message-sent', function(data) {
        const messageId = data.data.id;
        const isRead = data.data.is_read;
        const messageElement = document.querySelector(`.chats[data-message-id="${messageId}"]`);
        if (messageElement) {
            const checkIcon = messageElement.querySelector('.inactive-check');
            if (checkIcon) {
                checkIcon.classList.remove('inactive-check');
                checkIcon.classList.add(
                    'bx-check-double');
            }
        }
    });

    var updateUserActivity = pusher.subscribe('user-activity');
    updateUserActivity.bind('room-detail', function(data) {
        const roomId = localStorage.getItem('roomId');
        if (data.room_id == roomId && data.user_id != currentUserID) {
            document.querySelector('.user-details h5').textContent = data.room_name;
            document.querySelector('.user-details .avatar img').src = data.room_icon;
            if (data.is_online) {
                document.querySelector('.user-details .last-seen').textContent = 'Online';
            } else if (data.last_seen) {
                let lastSeen = calculateLastSeen(data.last_seen);
                document.querySelector('.user-details .last-seen').textContent = 'Last Seen ' +
                    lastSeen;
            } else {
                document.querySelector('.user-details .last-seen').textContent =
                    'Last Seen: Not Available';
            }
        }
        getRooms();
    });
</script>