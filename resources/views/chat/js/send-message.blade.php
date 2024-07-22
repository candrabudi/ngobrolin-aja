<script>
    const tokenJwtSendMessage = localStorage.getItem('token');

    function adjustTextareaHeight() {
        const messageInput = document.getElementById('messageInput');
        messageInput.style.height = 'auto';
        messageInput.style.height = `${messageInput.scrollHeight}px`;
    }

    function showLoading() {
        document.getElementById('loadingSpinner').style.display = 'block';
    }

    function hideLoading() {
        document.getElementById('loadingSpinner').style.display = 'none';
    }

    function handleFormSubmit(event) {
        event.preventDefault();
        showLoading();

        const messageInput = document.getElementById('messageInput').value.trim();
        const messageReplyId = document.getElementById('messageReplyId').value;
        const roomId = localStorage.getItem('roomId');
        const previewImagesContainer = document.querySelector('.preview-image-upload');

        if (!messageInput && previewImagesContainer.children.length === 0) {
            showToast('Please type a message or upload images.');
            hideLoading();
            return;
        }

        if (!roomId) {
            showToast('No chat room selected.');
            hideLoading();
            return;
        }

        const formData = new FormData();
        formData.append('room_id', roomId);
        formData.append('message', messageInput);
        formData.append('message_reply_id', messageReplyId);

        const previewImages = previewImagesContainer.querySelectorAll('.img-container');
        const imagesToSend = [];

        previewImages.forEach((imgContainer, index) => {
            if (index < 2) {
                const imageUrl = imgContainer.getAttribute('data-image-url');
                const file = dataURLtoFile(imageUrl,
                `image${index + 1}_${new Date().getTime()}.png`); // Ensure unique filenames with timestamp
                imagesToSend.push(file);
            }
        });

        imagesToSend.forEach(file => {
            formData.append('images[]', file);
        });

        axios.post('{{ env('API_SECURE_MESSANGER') }}/v1/message/send', formData, {
                headers: {
                    'Authorization': 'Bearer ' + tokenJwtSendMessage,
                    'Content-Type': 'multipart/form-data',
                }
            })
            .then(function(response) {
                if (response.data.status === 'success') {
                    // Clear the input and preview container
                    document.getElementById('messageInput').value = '';
                    previewImagesContainer.innerHTML = '';
                    previewImagesContainer.classList.add('d-none');
                    document.querySelector('#forwardChatMsg').classList.add('d-none');
                } else {
                    showToast('Failed to send message: ' + response.data.message);
                }
            })
            .catch(function(error) {
                console.error('Error sending message:', error);
                showToast('An error occurred while sending the message.');
            })
            .finally(function() {
                hideLoading();
            });
    }

    function handleEnterKeyPress(event) {
        const messageInput = document.getElementById('messageInput');
        const messageForm = document.getElementById('messageForm');

        if (event.key === 'Enter' && !event.shiftKey) {
            event.preventDefault();
            handleFormSubmit(event);
        }
    }

    function handleLocationClick(event) {
        event.preventDefault();
        showLoading();

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
                formData.append('is_message_location', 1);

                axios.post('{{ env('API_SECURE_MESSANGER') }}/v1/message/send', formData, {
                        headers: {
                            'Authorization': 'Bearer ' + tokenJwtSendMessage,
                            'Content-Type': 'multipart/form-data',
                        }
                    })
                    .then(function(response) {
                        if (response.data.status === 'success') {
                            // Clear the input and preview container
                            document.getElementById('messageInput').value = '';
                            document.querySelector('.preview-image-upload').innerHTML = '';
                            document.querySelector('.preview-image-upload').classList.add('d-none');
                            document.querySelector('#forwardChatMsg').classList.add('d-none');
                        } else {
                            showToast('Failed to send message: ' + response.data.message);
                        }
                    })
                    .catch(function(error) {
                        console.error('Error sending message:', error);
                        showToast('An error occurred while sending the message.');
                    })
                    .finally(function() {
                        hideLoading();
                    });
            }, function(error) {
                showToast('Unable to retrieve your location.');
                hideLoading();
            }, {
                enableHighAccuracy: true,
                timeout: 10000,
                maximumAge: 0
            });
        } else {
            showToast('Geolocation is not supported by this browser.');
            hideLoading();
        }
    }

    function dataURLtoFile(dataurl, filename) {
        var arr = dataurl.split(','),
            mime = arr[0].match(/:(.*?);/)[1],
            bstr = atob(arr[1]),
            n = bstr.length,
            u8arr = new Uint8Array(n);
        while (n--) {
            u8arr[n] = bstr.charCodeAt(n);
        }
        return new File([u8arr], filename, {
            type: mime
        });
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

    function previewImages(files) {
        const previewContainer = document.querySelector('.preview-image-upload');
        previewContainer.innerHTML = '';
        Array.from(files).forEach(file => {
            const reader = new FileReader();
            reader.onload = function(event) {
                const imgContainer = document.createElement('div');
                imgContainer.classList.add('img-container');
                imgContainer.setAttribute('data-image-url', event.target.result);
                imgContainer.innerHTML =
                    `<img src="${event.target.result}" alt="preview" style="width: 100px; height: 100px;">`;
                previewContainer.appendChild(imgContainer);
            };
            reader.readAsDataURL(file);
        });
        previewContainer.classList.remove('d-none');
    }

    document.getElementById('messageForm').onsubmit = handleFormSubmit;
    document.getElementById('locationTrigger').onclick = handleLocationClick;
    document.getElementById('messageInput').onkeydown = handleEnterKeyPress;
    document.getElementById('imageUploadInput').onchange = function() {
        previewImages(this.files);
    };

    adjustTextareaHeight();
</script>
