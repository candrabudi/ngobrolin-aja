<script>
    const userList = document.getElementById('user-list');
    const messageContainer = document.querySelector('.messages');
    const middleSection = document.getElementById('middle');

    function appendMessage(message) {
        const replyMessageContent = message.is_replied ? `
                <div class="replay-msg mb-1">
                    <div class="chat-profile-name justify-content-end">
                        <h6>
                            ${message.message_reply.full_name}
                            <span>${new Date(message.message_reply.created_at).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })}</span>
                            <span class="check-star msg-star-three d-none">
                                <i class="bx bxs-star"></i>
                            </span>
                        </h6>
                    </div>
                    ${message.message_reply.message}
                </div>` : '';

        const messageElement = `
                <div class="${message.is_sender ? 'chats chats-right' : 'chats'}" data-message-id="${message.id}">
                    <div class="chat-avatar">
                        <img src="${message.user_profile_image}" class="rounded-circle dreams_chat" alt="image">
                    </div>
                    <div class="chat-content">
                        <div class="chat-profile-name${message.is_sender ? ' text-end' : ''}">
                            <h6>
                                ${message.is_sender ? `<i class="bx ${message.is_read ? 'bx-check-double' : 'bx-check'} me-1 inactive-check"></i>` : ''}
                                ${message.user_full_name}<span>${message.datetime}</span>
                                <span class="check-star msg-star${message.is_sender ? '-one' : ''} d-none"><i class="bx bxs-star"></i></span>
                            </h6>
                            <div class="chat-action-btns ms-2">
                                <div class="chat-action-col">
                                    <a class="#" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item message-info-left"><span><i class="bx bx-info-circle"></i></span>Message Info </a>
                                        <a href="#" class="dropdown-item reply-button"><span><i class="bx bx-share"></i></span>Reply</a>
                                        <a href="#" class="dropdown-item"><span><i class="bx bx-smile"></i></span>React</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#forward-message"><span><i class="bx bx-reply"></i></span>Forward</a>
                                        <a href="#" class="dropdown-item click-star-four"><span><i class="bx bx-star"></i></span><span class="star-msg-four">Star Message</span></a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-message"><span><i class="bx bx-edit-alt"></i></span>Edit</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-message"><span><i class="bx bx-trash"></i></span>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="message-content">
                            ${replyMessageContent}
                            ${message.message}
                        </div>
                    </div>
                </div>`;
        messageContainer.innerHTML += messageElement;
    }
</script>