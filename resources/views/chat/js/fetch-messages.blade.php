<script>
    const token = localStorage.getItem('token');
    function fetchMessageData(messageId) {
        const token = localStorage.getItem('token');

        axios.get(`{{ env('API_SECURE_MESSANGER') }}/v1/message/single/${messageId}`, {
            headers: {
                'Authorization': `Bearer ${token}`
            }
        })
        .then(response => {
            if (response.data.status === "success") {
                document.querySelector('#replyAvatar').src = response.data.data.user_profile_image;
                document.querySelector('#replyFullName').textContent = response.data.data.user_full_name;
                document.querySelector('#replyMessage').textContent = response.data.data.message;
                document.querySelector('#messageReplyId').value = response.data.data.id;
                document.querySelector('#forwardChatMsg').classList.remove('d-none');
            } else {
                console.error('Failed to fetch message data:', response.data.message);
            }
        })
        .catch(error => {
            console.error('Error fetching message data:', error);
        });
    }
</script>