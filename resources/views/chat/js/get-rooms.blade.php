<script>
    function getRooms() {
        axios.get('/chat/get-rooms')
            .then(response => {
                const chatRoomList = document.getElementById('chat-room-list');
                chatRoomList.innerHTML = '';

                response.data.forEach(user => {
                    const isSender = user.sender_id === currentUserID;
                    const doubleTick = isSender && !user.sender_message_unread ?
                        '<i class="bx bx-check-double"></i>' : '';
                    const singleTick = isSender && user.sender_message_unread ?
                        '<i class="bx bx-check"></i>' : '';
                    chatRoomList.innerHTML += `
                    <li class="user-list-item chat-user-list" data-room="${user.room_id}">
                        <a href="javascript:;" class="chat-link">
                            <div class="avatar avatar-${user.status}">
                                <img src="${user.profile}" class="rounded-circle" alt="image">
                            </div>
                            <div class="users-list-body">
                                <div>
                                    <h5>${user.name}</h5>
                                    <p>${user.lastmessage || 'Tidak ada pesan'}</p>
                                </div>
                                <div class="last-chat-time">
                                    <small class="text-muted">${new Date(user.lastMessageTime).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })}</small>
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
                        $('.status-middle-bar').remove();
                        middleSection.style.display = 'block';
                        loadDetailRoom(roomId);
                    });
                });
            })
            .catch(error => console.error('Error fetching chat rooms:', error));
    }

    getRooms();
</script>