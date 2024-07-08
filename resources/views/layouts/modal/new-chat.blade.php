<div class="modal fade" id="new-chat">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Chat</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span class="material-icons">close</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="createChatRoomForm" action="#">
                    <div class="user-block-group mb-4">
                        <div class="search_chat has-search">
                            <span class="fas fa-search form-control-feedback"></span>
                            <input class="form-control chat_input" id="search-contacted" type="text" placeholder="Search">
                        </div>
                        <h5>Contacts</h5>
                        <div class="sidebar sroll-side-view">
                            <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                                <div class="fav-title contact-title">
                                    <h6>A</h6>
                                </div>
                            </div>
                            <ul class="user-list" id="user-list"></ul>
                        </div>
                    </div>
                    <div class="mute-chat-btn">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                            <i class="feather-x me-1"></i>Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <img src="assets/img/icon/send.svg" class="me-1" alt="image">Chat
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
