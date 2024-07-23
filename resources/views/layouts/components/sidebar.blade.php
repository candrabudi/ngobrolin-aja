<div class="sidebar-group left-sidebar chat_sidebar">

    <div id="chats" class="left-sidebar-wrap sidebar active slimscroll">
        <div class="slimscroll">

            <div class="left-chat-title all-chats d-flex justify-content-between align-items-center">
                <div class="select-group-chat">
                    <div class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-bs-toggle="dropdown">
                            Semua Pesan<i class="bx bx-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Semua Pesan</a></li>
                            <li><a class="dropdown-item" href="#">Archive Pesan</a></li>
                            <li><a class="dropdown-item" href="#">Pin Pesan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="add-section">
                    <ul>
                        <li>
                            <a href="javascript:;" class="user-chat-search-btn">
                                <i class="bx bx-search"></i>
                            </a>
                        </li>
                        <li>
                            <div class="chat-action-btns">
                                <div class="chat-action-col">
                                    <a class="#" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:;" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#new-chat" id="newChatButton">
                                            <span><i class="bx bx-message-rounded-add"></i></span>Obrolan Baru
                                        </a>
                                        <a href="javascript:;" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#new-group"><span><i
                                                    class="bx bx-user-circle"></i></span>Buat Group</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="user-chat-search">
                        <form>
                            <span class="form-control-feedback"><i class="bx bx-search"></i></span>
                            <input type="text" name="chat-search" placeholder="Search" class="form-control">
                            <div class="user-close-btn-chat"><span class="material-icons">close</span>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="sidebar-body chat-body" id="chatsidebar">

                <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                    <div class="fav-title pin-chat">
                        <h6><i class="bx bx-chat me-1"></i>Semua Obrolan</h6>
                    </div>
                </div>

                <ul class="user-list space-chat" id="chat-room-list">

                </ul>
            </div>
        </div>
    </div>
</div>
