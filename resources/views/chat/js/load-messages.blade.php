<script>
    function loadMessages(roomId) {
        const token = localStorage.getItem('token');
        axios.get('{{ env('API_SECURE_MESSANGER') }}/v1/message/list', {
                headers: {
                    'Authorization': 'Bearer ' + token,
                },
                params: {
                    room_id: roomId
                }
            })
            .then(response => {
                messageContainer.innerHTML = '';
                response.data.data.forEach(message => {
                    appendMessage(message);
                });
            })
            .catch(error => console.error('Error loading messages:', error));
    }
</script>