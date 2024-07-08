<div class="sidebar-menu">
    <div class="logo-col">
        <a href="index.html"><img src="https://cdn-icons-png.flaticon.com/512/1711/1711178.png" width="50"
                alt="Logo"></a>
    </div>
    <div class="menus-col">
        <div class="chat-menus">
            <ul>
                <li>
                    <a href="index.html" class="chat-unread active" data-bs-toggle="tooltip" data-bs-placement="right"
                        title data-bs-original-title="Chat">
                        <i class="bx bx-message-square-dots"></i>
                    </a>
                </li>
                <li>
                    <a href="group.html" class="chat-unread" data-bs-toggle="tooltip" data-bs-placement="right" title
                        data-bs-original-title="Group">
                        <i class="bx bx-group"></i>
                    </a>
                </li>
                <li>
                    <a href="empty-status.html" class="chat-unread" data-bs-toggle="tooltip" data-bs-placement="right"
                        title data-bs-original-title="Status">
                        <i class="bx bx-stop-circle"></i>
                    </a>
                </li>
                <li>
                    <a href="call.html" class="chat-unread" data-bs-toggle="tooltip" data-bs-placement="right" title
                        data-bs-original-title="Call">
                        <i class="bx bx-phone"></i>
                    </a>
                </li>
                <li>
                    <a href="contact.html" class="chat-unread" data-bs-toggle="tooltip" data-bs-placement="right" title
                        data-bs-original-title="Contact">
                        <i class="bx bx-user-pin"></i>
                    </a>
                </li>
                <li>
                    <a href="settings.html" class="chat-unread" data-bs-toggle="tooltip" data-bs-placement="right" title
                        data-bs-original-title="Settings">
                        <i class="bx bx-cog"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="bottom-menus">
            <ul>
                <li>
                    <a href="#" id="dark-mode-toggle" class="dark-mode-toggle active">
                        <i class="bx bx-moon"></i>
                    </a>
                    <a href="#" id="light-mode-toggle" class="dark-mode-toggle">
                        <i class="bx bx-sun"></i>
                    </a>
                </li>
                <li>
                    <div class="avatar avatar-online">
                        <a href="#" class="chat-profile-icon" data-bs-toggle="dropdown">
                            @if (Auth::user()->profile->profile_image != null)
                                <img src="{{ Auth::user()->profile->profile_image }}" alt>
                            @else
                                <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt>
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="/setting" class="dropdown-item">
                                <span>
                                    <i class="bx bx-cog"></i>
                                </span>
                                Settings
                            </a>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#setting-logout" class="dropdown-item">
                                <span>
                                    <i class="bx bx-log-out"></i>
                                </span>
                                Logout 
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
