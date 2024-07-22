<script>
    function getRooms() {
        const token = localStorage.getItem('token');
        const userProfileJSON = localStorage.getItem('user_profile');

        // if (!userProfileJSON || !token) {
        //     localStorage.clear();
        //     window.location.href = '/login';
        //     return;
        // }

        const userProfile = JSON.parse(userProfileJSON);
        const currentUserID = userProfile.user_id;

        axios.get('{{ env('API_SECURE_MESSANGER') }}/v1/room-chat/list', {
                headers: {
                    'Authorization': 'Bearer ' + token,
                }
            })
            .then(response => {
                const chatRoomList = document.getElementById('chat-room-list');
                chatRoomList.innerHTML = '';

                if (response.data.data.length === 0) {
                    localStorage.removeItem('roomId'); // Hapus roomId jika tidak ada chat room
                }

                response.data.data.forEach(user => {
                    const isSender = user.sender_id === currentUserID;
                    const doubleTick = isSender && !user.sender_message_unread ?
                        '<i class="bx bx-check-double"></i>' : '';
                    const singleTick = isSender && user.sender_message_unread ?
                        '<i class="bx bx-check"></i>' : '';
                    const lastMessageTime = user.lastMessageTime ? new Date(user.lastMessageTime)
                        .toLocaleTimeString([], {
                            hour: '2-digit',
                            minute: '2-digit'
                        }) : '';

                    let lastMessage = 'Tidak ada pesan';
                    if (user.is_location === 1) {
                        lastMessage = 'berbagi lokasi terkini';
                    } else if (user.lastmessage) {
                        lastMessage = user.lastmessage;
                    }

                    chatRoomList.innerHTML += `
                <li class="user-list-item chat-user-list" data-room="${user.room_id}">
                    <a href="javascript:;" class="chat-link">
                        <div class="avatar avatar-${user.status}">
                            <img src="${user.profile}" class="rounded-circle" alt="image">
                        </div>
                        <div class="users-list-body">
                            <div>
                                <h5>${user.name}</h5>
                                <p>${lastMessage}</p>
                            </div>
                            <div class="last-chat-time">
                                <small class="text-muted">${lastMessageTime}</small>
                                ${user.unread > 0 ? `
                                    <div class="chat-pin">
                                        <span class="count-message">${user.unread}</span>
                                        ${doubleTick}
                                        ${singleTick}
                                    </div>` : `
                                    <div class="chat-pin">
                                        ${doubleTick}
                                        ${singleTick}
                                    </div>`}
                            </div>
                        </div>
                    </a>
                </li>`;
                });

                document.querySelectorAll('.chat-link').forEach(link => {
                    link.addEventListener('click', function() {
                        const roomId = this.closest('.chat-user-list').dataset.room;
                        localStorage.setItem('roomId', roomId);

                        if (window.innerWidth <= 768) {
                            $('.sidebar-menu').addClass('d-none');
                            $('.chat-footer').css('margin-top', '-120px');
                        }

                        $('.status-middle-bar').remove();
                        middleSection.style.display = 'block';
                        loadDetailRoom(roomId);
                    });
                });
            })
            .catch(error => {
                console.error('Error fetching chat rooms:', error);
                localStorage.clear();
                window.location.href = '/login';
            });
    }

    getRooms();
</script>
