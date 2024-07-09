<div class="chat chat-messages" id="middle" style="display: none;">
    <div>
        @include('chat.chat-header')
        <div class="chat-body chat-page-group slimscroll" id="chat-body">
            <div class="messages" id="messages">
                
            </div>
        </div>
        <div class="chat-footer" id="chatFooter">
            <form id="messageForm" enctype="multipart/form-data">
                <div class="smile-foot">
                    <div class="chat-action-btns">
                        <div class="chat-action-col">
                            <a class="action-circle" href="#" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </a>
                            <input type="file" id="galleryInput" style="display: none;" multiple>
                            <input type="file" name="multiple_images[]" style="display: none;" multiple>
                            <div class="dropdown-menu dropdown-menu-end">
                                <label for="galleryInput" class="dropdown-item gallery-trigger">
                                    <span><i class="bx bx-image"></i></span>Galeri
                                </label>
                                <a href="#" id="locationTrigger" class="dropdown-item">
                                    <span><i class="bx bx-map"></i></span>Lokasi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="smile-foot">
                    <a href="#" class="action-circle"><i class="bx bx-microphone-off"></i></a>
                </div>
                <div class="replay-forms">
                    @include('chat.partials.forward-chat-message')
                    @include('chat.partials.preview-image-upload')
                    <input type="hidden" name="message_reply_id" id="messageReplyId">
                    <textarea id="messageInput" class="form-control chat_form" placeholder="Type your message here..." rows="1"></textarea>
                </div>
                <div class="form-buttons">
                    <button class="btn send-btn" type="submit">
                        <i class="bx bx-paper-plane"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>