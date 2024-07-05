<script>
    document.getElementById('messageForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const messageInput = document.getElementById('messageInput');
        const messageReplyId = document.getElementById('messageReplyId').value;
        const message = messageInput.value.trim();
        const roomId = localStorage.getItem('roomId');

        if (!message) {
            alert('Please type a message.');
            return;
        }

        if (!roomId) {
            alert('No chat room selected.');
            return;
        }

        axios.post('{{ route('message.send') }}', {
                room_id: roomId,
                message: message,
                message_reply_id: messageReplyId
            })
            .then(function(response) {
                if (response.data.status === 'success') {
                    messageInput.value = '';
                    document.querySelector('#forwardChatMsg').classList.add('d-none');
                } else {
                    alert('Failed to send message: ' + response.data.message);
                }
            })
            .catch(function(error) {
                console.error('Error sending message:', error);
                alert('An error occurred while sending the message.');
            });
    });
</script>