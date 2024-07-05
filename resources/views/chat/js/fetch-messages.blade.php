<script>
    function fetchMessageData(messageId) {
        $.ajax({
            url: `/message/single-message/${messageId}`,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.status === "success") {
                    document.querySelector('#replyAvatar').src = response.data
                        .user_profile_image;
                    document.querySelector('#replyFullName').textContent = response.data
                        .user_full_name;
                    document.querySelector('#replyMessage').textContent = response.data.message;
                    document.querySelector('#messageReplyId').value = response.data.id;
                    document.querySelector('#forwardChatMsg').classList.remove('d-none');
                } else {
                    console.error('Failed to fetch message data:', response.message);
                }
            },
            error: function(error) {
                console.error('Error fetching message data:', error);
            }
        });
    }
</script>