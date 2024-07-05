<script>
    function updateUnreadMessages(roomId, messageId) {
        axios.post('{{ route('message.update.unread') }}', {
                room_id: roomId,
                message_id: messageId
            })
            .then(response => {

            })
            .catch(error => {
                console.error('Error updating unread messages:', error);
            });

        getRooms();
    }
</script>