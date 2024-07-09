<script>
    let map;
    const userList = document.getElementById('user-list');
    const messageContainer = document.querySelector('.messages');
    const middleSection = document.getElementById('middle');

    function appendMessage(message) {
        const lastMessage = messageContainer.lastElementChild;
        const lastMessageTime = lastMessage ? lastMessage.querySelector('.chat-profile-name label').textContent : null;
        const lastMessageUser = lastMessage ? lastMessage.querySelector('.chat-profile-name h6').textContent.trim() :
            null;
        const isSameTime = lastMessageTime === message.created_at;
        const isSameUser = lastMessageUser && lastMessageUser.includes(message.user_full_name.trim());

        const hasImages = message.has_images.length > 0 ? `
        <div class="download-col mt-3">
            <ul class="nav mb-0">
                ${message.has_images.map(image => `
                    <li style="padding: 5px;">
                        <div class="image-download-col">
                            <a href="${image.file_path}" data-fancybox="gallery" class="fancybox">
                                <div style="display:inline-block; width: 100px; height:100px; background-image: url(${image.file_path}); background-size: cover;border: 2px solid #ecf0f1; border-radius: 8px;"></div>
                            </a>
                        </div>
                    </li>
                `).join('')}
            </ul>
        </div>` : '';

        const hasFiles = message.has_files.length > 0 ? `
        <div class="download-col" style="padding: 0px;">
            <ul class="nav mb-0">
                ${message.has_files.map(file => `
                    <li>
                        <div class="file-download-col">
                            <a href="${file.file_path}" target="_blank">${file.file_name}</a>
                        </div>
                    </li>
                `).join('')}
            </ul>
        </div>` : '';

        const locationCoordinates = message.is_location == 1 ? message.message : null;

        const locationIcon = locationCoordinates ? `
        <div class="message-content fancy-msg-box mt-2" style="min-width: 200px;">
            <div class="chat-profile-name${message.is_sender ? ' text-end' : ''}">
                <div class="chat-action-btns ms-2">
                    <div class="chat-action-col">
                        <a class="#" href="#" data-bs-toggle="dropdown" aria-expanded="false" style="color: #333;">
                            <i class="bx bx-dots-horizontal-rounded"></i>
                        </a>
                        <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item reply-button" data-reply-id="${message.id}"><span><i class="bx bx-share"></i></span><span>Reply</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="location-icon mt-3 mb-2">
                <a href="https://www.google.com/maps?q=${locationCoordinates}" target="_blank" class="btn btn-xs btn-primary">Google Map</a>
                <a onclick="showMapPreview('${locationCoordinates}')" class="btn btn-xs btn-secondary">Lihat Map</a>
            </div>
            <span style="display: block; text-align: right; color: #7f8c8d;font-size: 12px;">${message.datetime} ${message.is_sender ? `<i class="bx ${message.is_read ? 'bx-check-double' : 'bx-check'} me-1 inactive-check"></i>` : ''}</span>
        </div>` : '';

        const replyMessageContent = message.is_replied ? `
        <div class="replay-msg mb-1">
            <div class="chat-profile-name justify-content-end">
                <h6>
                    ${message.message_reply.full_name}
                    <span>${message.message_reply.datetime}</span>
                    <span class="check-star msg-star-three d-none">
                        <i class="bx bxs-star"></i>
                    </span>
                </h6>
            </div>
            ${message.message_reply.is_location == 1 ? "berbagi lokasi terkini" : message.message_reply.message}
        </div>` : '';

        const textMessage = locationCoordinates ? locationIcon : (message.message ? `
        <div class="message-content fancy-msg-box mt-2" style="min-width: 50px;">
            <div class="chat-profile-name${message.is_sender ? ' text-end' : ''}">
                <div class="chat-action-btns ms-2">
                    <div class="chat-action-col">
                        <a class="#" href="#" data-bs-toggle="dropdown" aria-expanded="false" style="color: #333;">
                            <i class="bx bx-dots-horizontal-rounded"></i>
                        </a>
                        <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item reply-button" data-reply-id="${message.id}"><span><i class="bx bx-share"></i></span><span>Reply</span></a>
                        </div>
                    </div>
                </div>
            </div>
            ${replyMessageContent}
            <p style="text-align: left;">${message.message}</p>
            ${hasImages}
            ${hasFiles}
            <span style="display: block;text-align: right; color: #7f8c8d;font-size: 12px;margin-top: -20px;">${message.datetime} ${message.is_sender ? `<i class="bx ${message.is_read ? 'bx-check-double' : 'bx-check'} me-1 inactive-check"></i>` : ''}</span>
        </div>` : '');

        let messageElement;

        if (isSameTime && isSameUser) {
            lastMessage.querySelector('.chat-content').innerHTML += textMessage;
        } else {
            messageElement = `
            <div class="${message.is_sender ? 'chats chats-right' : 'chats'}" data-message-id="${message.id}">
                <div class="chat-avatar">
                    <img src="${message.user_profile_image}" class="rounded-circle dreams_chat" alt="image">
                </div>
                <div class="chat-content">
                    <div class="chat-profile-name${message.is_sender ? ' text-end' : ''}">
                        <h6 style="display: none;">
                            ${message.user_full_name}<span>${message.datetime}</span>
                            <label style="display: none;">${message.created_at}</label>
                            <span class="check-star msg-star${message.is_sender ? '-one' : ''} d-none"><i class="bx bxs-star"></i></span>
                        </h6>
                    </div>
                    ${textMessage}
                </div>
            </div>`;
            messageContainer.innerHTML += messageElement;
        }

        messageContainer.querySelectorAll('.reply-button').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const replyId = this.getAttribute('data-reply-id');
                scrollToMessage(replyId);
            });
        });
    }

    function scrollToMessage(messageId) {
        const messageElement = messageContainer.querySelector(`[data-message-id="${messageId}"]`);
        if (messageElement) {
            messageElement.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }

    function showMapPreview(coordinates) {
        const [lat, lng] = coordinates.split(', ');
        const mapModal = new bootstrap.Modal(document.getElementById('mapModal'));
        mapModal.show();

        document.getElementById('mapModal').addEventListener('shown.bs.modal', function() {
            if (map) {
                map.remove();
            }
            map = L.map('map').setView([lat, lng], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([lat, lng]).addTo(map)
                .openPopup();
        });
    }
</script>
