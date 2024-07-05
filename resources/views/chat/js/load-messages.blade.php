<script>
    function loadMessages(roomId) {
        axios.get('{{ route('message.list') }}', {
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