<script>
    document.getElementById('messageForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const messageInput = document.getElementById('messageInput').value.trim();
        const messageReplyId = document.getElementById('messageReplyId').value;
        const roomId = localStorage.getItem('roomId');

        if (!messageInput && previewImagesContainer.children.length === 0) {
            showToast('Please type a message or upload images.');
            return;
        }

        if (!roomId) {
            showToast('No chat room selected.');
            return;
        }

        const formData = new FormData();
        formData.append('room_id', roomId);
        formData.append('message', messageInput);
        formData.append('message_reply_id', messageReplyId);

        const previewImages = previewImagesContainer.querySelectorAll('.img-container');
        previewImages.forEach(imgContainer => {
            const imageUrl = imgContainer.getAttribute('data-image-url');
            const file = dataURLtoFile(imageUrl, 'image.png');
            formData.append('images[]', file);
        });

        axios.post('{{ route('message.send') }}', formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            if (response.data.status === 'success') {
                document.getElementById('messageInput').value = '';
                previewImagesContainer.innerHTML = '';
                document.querySelector('.preview-image-upload').classList.add('d-none');
                document.querySelector('#forwardChatMsg').classList.add('d-none');
            } else {
                showToast('Failed to send message: ' + response.data.message);
            }
        })
        .catch(function(error) {
            console.error('Error sending message:', error);
            showToast('An error occurred while sending the message.');
        });
    });

    document.getElementById('locationTrigger').addEventListener('click', function(event) {
        event.preventDefault();
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                const latitude = position.coords.latitude;
                const longitude = position.coords.longitude;

                const roomId = localStorage.getItem('roomId');
                const messageReplyId = document.getElementById('messageReplyId').value;

                const formData = new FormData();
                formData.append('room_id', roomId);
                formData.append('message', `${latitude}, ${longitude}`);
                formData.append('message_reply_id', messageReplyId);
                formData.append('is_location', 1);

                axios.post('{{ route('message.send') }}', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(function(response) {
                    if (response.data.status === 'success') {
                        document.getElementById('messageInput').value = '';
                        previewImagesContainer.innerHTML = '';
                        document.querySelector('.preview-image-upload').classList.add('d-none');
                        document.querySelector('#forwardChatMsg').classList.add('d-none');
                    } else {
                        showToast('Failed to send message: ' + response.data.message);
                    }
                })
                .catch(function(error) {
                    console.error('Error sending message:', error);
                    showToast('An error occurred while sending the message.');
                });
            }, function(error) {
                showToast('Unable to retrieve your location.');
            }, {
                enableHighAccuracy: true, 
                timeout: 10000, 
                maximumAge: 0 
            });
        } else {
            showToast('Geolocation is not supported by this browser.');
        }
    });

    function dataURLtoFile(dataurl, filename) {
        var arr = dataurl.split(','), mime = arr[0].match(/:(.*?);/)[1],
            bstr = atob(arr[1]), n = bstr.length, u8arr = new Uint8Array(n);
        while (n--) {
            u8arr[n] = bstr.charCodeAt(n);
        }
        return new File([u8arr], filename, { type: mime });
    }

    function showToast(message) {
        const toastContainer = document.getElementById('toastContainer');
        const toast = document.createElement('div');
        toast.classList.add('toast');
        toast.innerHTML = `
            <span>${message}</span>
            <button class="close-btn">&times;</button>
        `;
        
        toast.querySelector('.close-btn').addEventListener('click', () => {
            toast.classList.remove('show');
            setTimeout(() => toast.remove(), 300);
        });

        toastContainer.appendChild(toast);
        
        setTimeout(() => {
            toast.classList.add('show');
        }, 100);

        setTimeout(() => {
            toast.classList.remove('show');
            setTimeout(() => toast.remove(), 300);
        }, 5000);
    }
</script>
