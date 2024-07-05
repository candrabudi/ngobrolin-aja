<div class="chat-header">
    <div class="user-details">
        <div class="d-lg-none">
            <ul class="list-inline mt-2 me-2">
                <li class="list-inline-item">
                    <a class="text-muted px-0 left_sides" href="#" data-chat="open">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </li>
            </ul>
        </div>
        <figure class="avatar ms-1">
            <img src="assets/img/avatar/avatar-2.jpg" class="rounded-circle" alt="image">
        </figure>
        <div class="mt-1">
            <h5>Mark Villiams</h5>
            <small class="last-seen">
                Last Seen at 07:15 PM
            </small>
        </div>
    </div>
    <div class="chat-options ">
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="javascript:void(0)" class="btn btn-outline-light chat-search-btn"
                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search">
                    <i class="bx bx-search"></i>
                </a>
            </li>
            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Video Call">
                <a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="modal"
                    data-bs-target="#video_call">
                    <i class="bx bx-video"></i>
                </a>
            </li>
            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Voice Call">
                <a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="modal"
                    data-bs-target="#voice_call">
                    <i class="bx bx-phone"></i>
                </a>
            </li>
            <li class="list-inline-item dream_profile_menu">
                <a href="javascript:void(0)" class="btn btn-outline-light not-chat-user"
                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Contact Info">
                    <i class="bx bx-info-circle"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn btn-outline-light no-bg" href="#" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="index.html" class="dropdown-item "><span><i class="bx bx-x"></i></span>Close
                        Chat </a>
                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                        data-bs-target="#mute-notification"><span><i class="bx bx-volume-mute"></i></span>Mute
                        Notification</a>
                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                        data-bs-target="#disappearing-messages"><span><i
                                class="bx bx-time-five"></i></span>Disappearing Message</a>
                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                        data-bs-target="#clear-chat"><span><i class="bx bx-brush-alt"></i></span>Clear
                        Message</a>
                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                        data-bs-target="#change-chat"><span><i class="bx bx-trash"></i></span>Delete
                        Chat</a>
                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                        data-bs-target="#report-user"><span><i class="bx bx-dislike"></i></span>Report</a>
                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                        data-bs-target="#block-user"><span><i class="bx bx-block"></i></span>Block</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="chat-search">
        <form>
            <span class="form-control-feedback"><i class="bx bx-search"></i></span>
            <input type="text" name="chat-search" placeholder="Search Chats" class="form-control">
            <div class="close-btn-chat"><span class="material-icons">close</span></div>
        </form>
    </div>
</div>