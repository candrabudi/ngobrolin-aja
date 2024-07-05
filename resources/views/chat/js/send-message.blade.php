<script>
    document.getElementById('messageForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const messageInput = document.getElementById('messageInput').value.trim();
        const messageReplyId = document.getElementById('messageReplyId').value;
        const roomId = localStorage.getItem('roomId');

        if (!messageInput && previewImagesContainer.children.length === 0) {
            alert('Please type a message or upload images.');
            return;
        }

        if (!roomId) {
            alert('No chat room selected.');
            return;
        }

        const formData = new FormData();
        formData.append('room_id', roomId);
        formData.append('message', messageInput);
        formData.append('message_reply_id', messageReplyId);

        // Collect all images from previewImagesContainer
        const previewImages = previewImagesContainer.querySelectorAll('.img-container');
        previewImages.forEach(imgContainer => {
            const imageUrl = imgContainer.getAttribute('data-image-url');
            const file = dataURLtoFile(imageUrl, 'image.png'); // Convert data URL to File object
            formData.append('images[]', file);
        });

        axios.post('{{ route('message.send') }}', formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            if (response.data.status === 'success') {
                alert('Message sent successfully');
                document.getElementById('messageInput').value = '';
                previewImagesContainer.innerHTML = '';
                document.querySelector('.preview-image-upload').classList.add('d-none');
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

    function dataURLtoFile(dataurl, filename) {
        var arr = dataurl.split(','), mime = arr[0].match(/:(.*?);/)[1],
            bstr = atob(arr[1]), n = bstr.length, u8arr = new Uint8Array(n);
        while (n--) {
            u8arr[n] = bstr.charCodeAt(n);
        }
        return new File([u8arr], filename, { type: mime });
    }
</script>
