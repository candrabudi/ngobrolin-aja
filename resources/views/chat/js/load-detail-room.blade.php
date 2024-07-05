<script>
    function loadDetailRoom(roomId) {
        axios.get('{{ route('chat.room.detail') }}', {
                params: {
                    room_id: roomId
                }
            })
            .then(response => {
                updateRoomDetails(response.data);
                loadMessages(roomId);
            })
            .catch(error => console.error('Error loading room details:', error));
    }
</script>