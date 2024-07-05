<script>
    document.getElementById('createChatRoomForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const selectedUser = document.querySelector('input[name="selected_user_id"]:checked');
        if (!selectedUser) {
            alert('Please select a user to chat with.');
            return;
        }

        axios.post('{{ route('chat.create.private') }}', {
                user_id: selectedUser.value
            })
            .then(response => {
                if (response.data.status === 'success') {
                    const roomId = response.data.data.chat_room_id;
                    localStorage.setItem('roomId', roomId);
                    $('.status-middle-bar').remove();
                    middleSection.style.display = 'block';
                    loadDetailRoom(roomId);
                    getRooms();
                } else {
                    alert('Failed to create chat room: ' + response.data.message);
                }
            })
            .catch(error => alert('An error occurred while creating the chat room.'));
    });
</script>