<script>
    function loadDetailRoom(roomId) {
        const token = localStorage.getItem('token');
        axios.get('{{ env('API_SECURE_MESSANGER') }}/v1/room-chat/detail/' + roomId, {
                headers: {
                    'Authorization': 'Bearer ' + token,
                }
            })
            .then(response => {
                updateRoomDetails(response.data.data);
                loadMessages(roomId);
            })
            .catch(error => console.error('Error loading room details:', error));
    }
</script>