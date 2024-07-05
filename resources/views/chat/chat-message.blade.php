<div class="chat chat-messages" id="middle" style="display: none;">
    <div>
        @include('chat.chat-header')
        {{-- <div class="chat-body chat-page-group slimscroll">
            <div class="messages">
                <div class="chats">
                    <div class="chat-avatar">
                        <img src="assets/img/avatar/avatar-2.jpg" class="rounded-circle dreams_chat" alt="image">
                    </div>
                    <div class="chat-content">
                        <div class="chat-profile-name">
                            <h6>Mark Villiams<span>8:16 PM</span><span class="check-star msg-star d-none"><i
                                        class="bx bxs-star"></i></span>
                            </h6>
                        </div>
                        <div class="message-content">
                            Hello <a href="javascript:;">@Alex</a> Thank you for the beautiful web design ahead
                            schedule.
                            <div class="emoj-group">
                                <ul>
                                    <li class="emoj-action"><a href="javascript:;"><i class="bx bx-smile"></i></a>
                                        <div class="emoj-group-list">
                                            <ul>
                                                <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-01.svg"
                                                            alt="Icon"></a></li>
                                                <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-02.svg"
                                                            alt="Icon"></a></li>
                                                <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-03.svg"
                                                            alt="Icon"></a></li>
                                                <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-04.svg"
                                                            alt="Icon"></a></li>
                                                <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-05.svg"
                                                            alt="Icon"></a></li>
                                                <li class="add-emoj"><a href="javascript:;"><i
                                                            class="feather-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i
                                                class="bx bx-share"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chats chats-right">
                    <div class="chat-content">
                        <div class="chat-profile-name text-end">
                            <h6><i class="bx bx-check-double me-1 inactive-check"></i>Alex Smith<span>8:16
                                    PM</span><span class="check-star msg-star-one d-none"><i
                                        class="bx bxs-star"></i></span></h6>
                            <div class="chat-action-btns ms-2">
                                <div class="chat-action-col">
                                    <a class="#" href="#" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item message-info-left"><span><i
                                                    class="bx bx-info-circle"></i></span>Message Info </a>
                                        <a href="#" class="dropdown-item reply-button"><span><i
                                                    class="bx bx-share"></i></span>Reply</a>
                                        <a href="#" class="dropdown-item"><span><i
                                                    class="bx bx-smile"></i></span>React</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#forward-message"><span><i
                                                    class="bx bx-reply"></i></span>Forward</a>
                                        <a href="#" class="dropdown-item click-star-one"><span><i
                                                    class="bx bx-star"></i></span><span class="star-msg-one">Star
                                                Message</span></a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#edit-message"><span><i
                                                    class="bx bx-edit-alt"></i></span>Edit</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#delete-message"><span><i
                                                    class="bx bx-trash"></i></span>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="message-content ">
                            <div class="emoj-group rig-emoji-group">
                                <ul>
                                    <li class="emoj-action"><a href="javascript:;"><i class="bx bx-smile"></i></a>
                                        <div class="emoj-group-list">
                                            <ul>
                                                <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-01.svg"
                                                            alt="Icon"></a></li>
                                                <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-02.svg"
                                                            alt="Icon"></a></li>
                                                <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-03.svg"
                                                            alt="Icon"></a></li>
                                                <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-04.svg"
                                                            alt="Icon"></a></li>
                                                <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-05.svg"
                                                            alt="Icon"></a></li>
                                                <li class="add-emoj"><a href="javascript:;"><i
                                                            class="feather-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i
                                                class="bx bx-share"></i></a></li>
                                </ul>
                            </div>
                            <div class="chat-voice-group">
                                <ul>
                                    <li><a href="javascript:;"><span><img src="assets/img/icon/play-01.svg"
                                                    alt="image"></span></a></li>
                                    <li><img src="assets/img/voice.svg" alt="image"></li>
                                    <li>0:05</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="chat-avatar">
                        <img src="assets/img/avatar/avatar-10.jpg" class="rounded-circle dreams_chat" alt="image">
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="chat-body chat-page-group slimscroll" id="chat-body">
            <div class="messages">
                {{-- <div class="chats chats-right">
                    <div class="chat-content">
                        <div class="message-content reply-getcontent">
                            <div class="replay-msg mb-1">
                                <div class="chat-profile-name justify-content-end">
                                    <h6><i class="bx bx-check-double me-1 inactive-check"></i>Alex Smith<span>8:16 PM</span><span
                                            class="check-star msg-star-three d-none"><i class="bx bxs-star"></i></span></h6>
                                </div>
                                Thank you for your support
                            </div>
                            Welcome
                        </div>
                    </div>
                    <div class="chat-avatar">
                        <img src="assets/img/avatar/avatar-10.jpg" class="rounded-circle dreams_chat" alt="image">
                    </div>
                </div> --}}
                
            </div>
        </div>
    </div>
    <div class="chat-footer">
        <form id="messageForm">
            <div class="smile-foot">
                <div class="chat-action-btns">
                    <div class="chat-action-col">
                        <a class="action-circle" href="#" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item"><span><i class="bx bx-file"></i></span>Document</a>
                            <a href="#" class="dropdown-item"><span><i class="bx bx-camera"></i></span>Camera</a>
                            <a href="#" class="dropdown-item"><span><i class="bx bx-image"></i></span>Gallery</a>
                            <a href="#" class="dropdown-item"><span><i
                                        class="bx bx-volume-full"></i></span>Audio</a>
                            <a href="#" class="dropdown-item"><span><i class="bx bx-map"></i></span>Location</a>
                            <a href="#" class="dropdown-item"><span><i
                                        class="bx bx-user-pin"></i></span>Contact</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="smile-foot emoj-action-foot">
                <a href="#" class="action-circle"><i class="bx bx-smile"></i></a>
                <div class="emoj-group-list-foot down-emoji-circle">
                    <ul>
                        <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-01.svg" alt="Icon"></a>
                        </li>
                        <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-02.svg" alt="Icon"></a>
                        </li>
                        <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-03.svg" alt="Icon"></a>
                        </li>
                        <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-04.svg" alt="Icon"></a>
                        </li>
                        <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-05.svg" alt="Icon"></a>
                        </li>
                        <li class="add-emoj"><a href="javascript:;"><i class="feather-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="smile-foot">
                <a href="#" class="action-circle"><i class="bx bx-microphone-off"></i></a>
            </div>
            <div class="replay-forms">
                <div class="chats forward-chat-msg reply-div d-flex d-none" id="forwardChatMsg">
                    <div class="contact-close_call text-end">
                        <a href="#" class="close-replay">
                            <i class="bx bx-x"></i>
                        </a>
                    </div>
                    <div class="chat-avatar">
                        <img src="assets/img/avatar/avatar-2.jpg" class="rounded-circle dreams_chat" alt="image" id="replyAvatar">
                    </div>
                    <div class="chat-content">
                        <div class="chat-profile-name">
                            <h6 id="replyFullName">Mark Villiams<span id="replyTime">8:16 PM</span></h6>
                        </div>
                        <div class="message-content reply-content" id="replyMessage">Thank you for your support</div>
                    </div>
                </div>
                <input type="hidden" name="message_reply_id" id="messageReplyId">
                <input type="text" id="messageInput" class="form-control chat_form"
                    placeholder="Type your message here...">
            </div>
            <div class="form-buttons">
                <button class="btn send-btn" type="submit">
                    <i class="bx bx-paper-plane"></i>
                </button>
            </div>
        </form>
    </div>
</div>
