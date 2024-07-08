<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Template Content">
    <meta name="keywords" content="Template Keywords">
    <meta name="author" content="Dreamguys - DreamsChat">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@dreamguystech">
    <meta name="twitter:title" content="Template Content">
    <meta name="twitter:description" content="Template Content">
    <meta name="twitter:image" content="assets/img/meta-image.jpg">
    <meta name="twitter:image:alt" content>
    <meta property="og:url" content="Template Landing Page URL">
    <meta property="og:title" content="Template Titlte">
    <meta property="og:description" content="Template Content">
    <meta property="og:image" content="/assets/img/meta-image.jpg">
    <meta property="og:image:secure_url" content="assets/img/meta-image.jpg">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <title>DreamsChat</title>

    <link rel="icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/feather.css">

    <link rel="stylesheet" href="assets/plugins/intltelinput/css/intlTelInput.css">
    <link rel="stylesheet" href="assets/plugins/intltelinput/css/demo.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/swiper/swiper.min.css">

    <link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">

    <link rel="stylesheet" href="assets/plugins/boxicons/css/boxicons.min.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body class="settings-page">

    <div class="main-wrapper">

        <div class="content main_content">

            <div class="sidebar-menu">
                <div class="logo-col">
                    <a href="index.html"><img src="assets/img/logo.png" alt="Logo"></a>
                </div>
                <div class="menus-col">
                    <div class="chat-menus">
                        <ul>
                            <li>
                                <a href="index.html" class="chat-unread " data-bs-toggle="tooltip"
                                    data-bs-placement="right" title data-bs-original-title="Chat">
                                    <i class="bx bx-message-square-dots"></i>
                                </a>
                            </li>
                            <li>
                                <a href="group.html" class="chat-unread" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title data-bs-original-title="Group">
                                    <i class="bx bx-group"></i>
                                </a>
                            </li>
                            <li>
                                <a href="empty-status.html" class="chat-unread" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title data-bs-original-title="Status">
                                    <i class="bx bx-stop-circle"></i>
                                </a>
                            </li>
                            <li>
                                <a href="call.html" class="chat-unread" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title data-bs-original-title="Call">
                                    <i class="bx bx-phone"></i>
                                </a>
                            </li>
                            <li>
                                <a href="contact.html" class="chat-unread" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title data-bs-original-title="Contact">
                                    <i class="bx bx-user-pin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="settings.html" class="chat-unread active" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title data-bs-original-title="Settings">
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
                                        <img src="assets/img/avatar/avatar-2.jpg" alt>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="settings.html" class="dropdown-item"><span><i
                                                    class="bx bx-cog"></i></span>Settings</a>
                                        <a href="email-login.html" class="dropdown-item"><span><i
                                                    class="bx bx-log-out"></i></span>Logout </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="sidebar-group left-sidebar chat_sidebar">

                <div id="chats" class="left-sidebar-wrap sidebar active slimscroll">
                    <div class="slimscroll">

                        <div
                            class="left-chat-title d-flex justify-content-between align-items-center position-relative">
                            <div class="setting-title-head">
                                <h4><a href="#"><img src="assets/img/icon/arrow-left.svg" alt="Icon"></a>
                                    Setting</h4>
                            </div>
                            <a href="#" class="user-chat-search-btn"><i class="bx bx-search set-search"></i>
                            </a>

                            <div class="user-chat-search">
                                <form action="#">
                                    <span class="form-control-feedback"><i class="bx bx-search"></i></span>
                                    <input type="text" name="chat-search" placeholder="Search"
                                        class="form-control">
                                    <div class="user-close-btn-chat"><span class="material-icons">close</span></div>
                                </form>
                            </div>

                        </div>

                        <div class="setting-profile-card">
                            <div class="settings-option">
                                <a href="#" class="user-list-item">Edit Settings</a>
                            </div>
                            <div class="account-setting">
                                <h5>Account Setting</h5>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit-setting-condition"> <i
                                        class="bx bx-pencil set-search"></i></a>
                            </div>
                            <div class="profile-card">
                                <div class="profile-cover text-center">
                                    <label class="profile-cover-avatar">
                                        <img class="avatar-img" src="assets/img/avatar/avatar-2.jpg"
                                            alt="Profile Image">
                                        <input type="file" id="avatar_upload_one">
                                        <span class="avatar-edit">
                                            <i class="bx bx-camera"></i>
                                        </span>
                                    </label>
                                </div>
                                <div class="profile-info">
                                    <div class="profile-listout">
                                        <p class="info-title mb-0">Your Name</p>
                                        <span class="info-text"><img src="assets/img/icon/smile-01.svg"
                                                class="ms-1" alt="Image"> Alex Smith <img
                                                src="assets/img/icon/smile-01.svg" class="me-1"
                                                alt="Image"></span>
                                    </div>
                                    <div class="profile-listout">
                                        <p class="info-title mb-0">About</p>
                                        <span class="info-text">Can’t Talk, WhatsApp only</span>
                                    </div>
                                    <div class="profile-listout">
                                        <p class="info-title mb-0">Date of Birth</p>
                                        <span class="info-text">10 July 1996</span>
                                    </div>
                                    <div class=" profile-listout">
                                        <p class="info-title mb-0">Gender</p>
                                        <span class="info-text">Male</span>
                                    </div>
                                    <div class="profile-listout mb-0">
                                        <p class="info-title mb-0">Country</p>
                                        <span class="info-text">India</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="settings-card">
                            <div class="settings-control">
                                <ul>
                                    <li>
                                        <a href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#social-profile">
                                            <div class="setting-card-list">
                                                <i class="bx bx-globe"></i>
                                                <span>Social Profiles</span>
                                            </div>
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#password-security">
                                            <div class="setting-card-list">
                                                <i class="bx bx-lock-alt"></i>
                                                <span>Password & Security</span>
                                            </div>
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#privacy">
                                            <div class="setting-card-list">
                                                <i class="bx bx-check-shield"></i>
                                                <span>Privacy</span>
                                            </div>
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#setting-chat">
                                            <div class="setting-card-list">
                                                <i class="bx bx-message-square-dots"></i>
                                                <span>Chat</span>
                                            </div>
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#setting-notification">
                                            <div class="setting-card-list">
                                                <i class="bx bx-bell"></i>
                                                <span>Notifications</span>
                                            </div>
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#setting-languages">
                                            <div class="setting-card-list">
                                                <i class="bx bx-globe"></i>
                                                <span>Languages</span>
                                            </div>
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#setting-device">
                                            <div class="setting-card-list">
                                                <i class="bx bx-laptop"></i>
                                                <span>Manage Devices</span>
                                            </div>
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="setting-card-list">
                                                <i class="bx bx-file"></i>
                                                <span>Terms & Conditions</span>
                                            </div>
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="setting-card-list">
                                                <i class="bx bx-shield-alt-2"></i>
                                                <span>Privacy Policy</span>
                                            </div>
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#blocked-user">
                                            <div class="setting-card-list">
                                                <i class="bx bx-block"></i>
                                                <span>Blocked User</span>
                                            </div>
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#mute-user">
                                            <div class="setting-card-list">
                                                <i class="bx bx-volume-mute"></i>
                                                <span>Mute User</span>
                                            </div>
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#delete-account">
                                            <div class="setting-card-list">
                                                <i class="bx bx-trash"></i>
                                                <span>Delete Account</span>
                                            </div>
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#setting-logout">
                                            <div class="setting-card-list">
                                                <i class="bx bx-lock-alt"></i>
                                                <span>Logout</span>
                                            </div>
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="chat setting-chat" id="middle">
                <div class="slimscroll">
                    <div class="chat-header">
                        <div class="user-details">
                            <div class="d-lg-none">
                                <ul class="list-inline mt-2 me-2">
                                    <li class="list-inline-item">
                                        <a class="text-muted px-0 left_side" href="#" data-chat="open">
                                            <i class="fas fa-arrow-left"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <figure class="avatar ms-1">
                                <img src="assets/img/avatar/avatar-2.jpg" class="rounded-circle" alt="image">
                            </figure>
                            <div class="mt-1">
                                <h5>UI UX Designer</h5>
                                <small class="last-seen">
                                    35 Members, <span class="active-online">15 Online</span>
                                </small>
                            </div>
                        </div>
                        <div class="avatar-group">
                            <div class="avatar avatar-xs group_img group_header">
                                <img class="avatar-img rounded-circle" alt="User Image"
                                    src="assets/img/avatar/avatar-6.jpg">
                            </div>
                            <div class="avatar avatar-xs group_img group_header">
                                <img class="avatar-img rounded-circle" alt="User Image"
                                    src="assets/img/avatar/avatar-4.jpg">
                            </div>
                            <div class="avatar avatar-xs group_img group_header">
                                <img class="avatar-img rounded-circle" alt="User Image"
                                    src="assets/img/avatar/avatar-1.jpg">
                            </div>
                            <div class="avatar avatar-xs group_img group_header">
                                <img class="avatar-img rounded-circle" alt="User Image"
                                    src="assets/img/avatar/avatar-2.jpg">
                            </div>
                            <div class="avatar avatar-xs group_img group_header">
                                <span class="avatar-title rounded-circle">+25</span>
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
                                <li class="list-inline-item">
                                    <a href="video-call.html" class="btn btn-outline-light" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="Video Call">
                                        <i class="bx bx-video"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="audio-call.html" class="btn btn-outline-light" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="Voice Call">
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
                                        <a href="#" class="dropdown-item "><span><i
                                                    class="bx bx-x"></i></span>Close Chat </a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#mute-notification"><span><i
                                                    class="bx bx-volume-mute"></i></span>Mute Notification</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#disappearing-messages"><span><i
                                                    class="bx bx-time-five"></i></span>Disappearing Message</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#clear-chat"><span><i
                                                    class="bx bx-brush-alt"></i></span>Clear Message</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#change-chat"><span><i
                                                    class="bx bx-trash"></i></span>Delete Chat</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#report-user"><span><i
                                                    class="bx bx-dislike"></i></span>Report</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#block-user"><span><i
                                                    class="bx bx-block"></i></span>Block</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="chat-search">
                            <form action="#">
                                <span class="form-control-feedback"><i class="bx bx-search"></i></span>
                                <input type="text" name="chat-search" placeholder="Search Chats"
                                    class="form-control">
                                <div class="close-btn-chat"><span class="material-icons">close</span></div>
                            </form>
                        </div>

                    </div>
                    <div class="chat-body">
                        <div class="messages">
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="assets/img/avatar/avatar-2.jpg" class="rounded-circle dreams_chat"
                                        alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-profile-name">
                                        <h6>Mark Villiams<span>8:16 PM</span></h6>
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
                                                    <a href="#" class="dropdown-item"><span><i
                                                                class="bx bx-star"></i></span>Star Message</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#report-user"><span><i
                                                                class="bx bx-dislike"></i></span>Report</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#delete-message"><span><i
                                                                class="bx bx-trash"></i></span>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message-content">
                                        Hello <a href="javascript:;">@Alex</a> Thank you for the beautiful web design
                                        ahead schedule.
                                        <div class="emoj-group">
                                            <ul>
                                                <li class="emoj-action"><a href="javascript:;"><i
                                                            class="bx bx-smile"></i></a>
                                                    <div class="emoj-group-list">
                                                        <ul>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-01.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-02.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-03.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-04.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-05.svg"
                                                                        alt="Icon"></a></li>
                                                            <li class="add-emoj"><a href="javascript:;"><i
                                                                        class="feather-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#forward-message"><i
                                                            class="bx bx-share"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-line">
                                <span class="chat-date">Today, July 24</span>
                            </div>
                            <div class="chats chats-right">
                                <div class="chat-content">
                                    <div class="chat-profile-name text-end">
                                        <h6>Alex Smith<span>8:16 PM</span></h6>
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
                                                    <a href="#" class="dropdown-item"><span><i
                                                                class="bx bx-star"></i></span>Star Message</a>
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
                                                <li class="emoj-action"><a href="javascript:;"><i
                                                            class="bx bx-smile"></i></a>
                                                    <div class="emoj-group-list">
                                                        <ul>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-01.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-02.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-03.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-04.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-05.svg"
                                                                        alt="Icon"></a></li>
                                                            <li class="add-emoj"><a href="javascript:;"><i
                                                                        class="feather-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#forward-message"><i
                                                            class="bx bx-share"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="chat-voice-group">
                                            <ul>
                                                <li><a href="javascript:;"><span><img
                                                                src="assets/img/icon/play-01.svg"
                                                                alt="image"></span></a></li>
                                                <li><img src="assets/img/voice.svg" alt="image"></li>
                                                <li>0:05</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-avatar">
                                    <img src="assets/img/avatar/avatar-10.jpg" class="rounded-circle dreams_chat"
                                        alt="image">
                                </div>
                            </div>
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="assets/img/avatar/avatar-1.jpg" class="rounded-circle dreams_chat"
                                        alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-profile-name">
                                        <h6>Elizabeth Sosa<span>8:16 PM</span></h6>
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
                                                    <a href="#" class="dropdown-item"><span><i
                                                                class="bx bx-star"></i></span>Star Message</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#report-user"><span><i
                                                                class="bx bx-dislike"></i></span>Report</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#delete-message"><span><i
                                                                class="bx bx-trash"></i></span>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message-content award-link chat-award-link">
                                        <a href="javascript:;">https://www.youtube.com/watch?v=GCmL3mS0Psk</a>
                                        <img src="assets/img/award.jpg" alt="img">
                                        <div class="emoj-group">
                                            <ul>
                                                <li class="emoj-action"><a href="javascript:;"><i
                                                            class="bx bx-smile"></i></a>
                                                    <div class="emoj-group-list">
                                                        <ul>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-01.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-02.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-03.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-04.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-05.svg"
                                                                        alt="Icon"></a></li>
                                                            <li class="add-emoj"><a href="javascript:;"><i
                                                                        class="feather-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#forward-message"><i
                                                            class="bx bx-share"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chats chats-right">
                                <div class="chat-content">
                                    <div class="chat-profile-name justify-content-end">
                                        <h6>Alex Smith<span>8:16 PM</span></h6>
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
                                                    <a href="#" class="dropdown-item"><span><i
                                                                class="bx bx-star"></i></span>Star Message</a>
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
                                    <div class="message-content fancy-msg-box">
                                        <div class="emoj-group wrap-emoji-group ">
                                            <ul>
                                                <li class="emoj-action"><a href="javascript:;"><i
                                                            class="bx bx-smile"></i></a>
                                                    <div class="emoj-group-list">
                                                        <ul>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-01.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-02.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-03.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-04.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-05.svg"
                                                                        alt="Icon"></a></li>
                                                            <li class="add-emoj"><a href="javascript:;"><i
                                                                        class="feather-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#forward-message"><i
                                                            class="bx bx-share"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="download-col">
                                            <ul class="nav mb-0">
                                                <li>
                                                    <div class="image-download-col">
                                                        <a href="assets/img/media/media-02.jpg"
                                                            data-fancybox="gallery" class="fancybox">
                                                            <img src="assets/img/media/media-02.jpg" alt>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="image-download-col ">
                                                        <a href="assets/img/media/media-03.jpg"
                                                            data-fancybox="gallery" class="fancybox">
                                                            <img src="assets/img/media/media-03.jpg" alt>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="image-download-col image-not-download">
                                                        <a href="assets/img/media/media-01.jpg"
                                                            data-fancybox="gallery" class="fancybox">
                                                            <img src="assets/img/media/media-01.jpg" alt>
                                                            <span>10+</span>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-avatar">
                                    <img src="assets/img/avatar/avatar-10.jpg" class="rounded-circle dreams_chat"
                                        alt="image">
                                </div>
                            </div>
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="assets/img/avatar/avatar-4.jpg" class="rounded-circle dreams_chat"
                                        alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-profile-name">
                                        <h6>James Albert<span>8:16 PM</span></h6>
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
                                                    <a href="#" class="dropdown-item"><span><i
                                                                class="bx bx-star"></i></span>Star Message</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#report-user"><span><i
                                                                class="bx bx-dislike"></i></span>Report</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#delete-message"><span><i
                                                                class="bx bx-trash"></i></span>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message-content review-files">
                                        <p>Please check and review the files<span class="ms-1"><img
                                                    src="assets/img/icon/smile-chat.svg" alt="Icon"></span></p>
                                        <div class="file-download d-flex align-items-center mb-0">
                                            <div
                                                class="file-type d-flex align-items-center justify-content-center me-2">
                                                <i class="bx bxs-file-doc"></i>
                                            </div>
                                            <div class="file-details">
                                                <span class="file-name">Landing_page_V1.doc</span>
                                                <ul>
                                                    <li>80 Bytes</li>
                                                    <li><a href="javascript:;">Download</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="emoj-group">
                                            <ul>
                                                <li class="emoj-action"><a href="javascript:;"><i
                                                            class="bx bx-smile"></i></a>
                                                    <div class="emoj-group-list">
                                                        <ul>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-01.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-02.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-03.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-04.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-05.svg"
                                                                        alt="Icon"></a></li>
                                                            <li class="add-emoj"><a href="javascript:;"><i
                                                                        class="feather-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#forward-message"><i
                                                            class="bx bx-share"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="like-chat-grp">
                                        <ul>
                                            <li class="like-chat"><a href="javascript:;">2<img
                                                        src="assets/img/icon/like.svg" alt="Icon"></a></li>
                                            <li class="comment-chat"><a href="javascript:;">2<img
                                                        src="assets/img/icon/heart.svg" alt="Icon"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="assets/img/avatar/avatar-5.jpg" class="rounded-circle dreams_chat"
                                        alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-profile-name">
                                        <h6>Richard Ohare<span>8:16 PM</span></h6>
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
                                                    <a href="#" class="dropdown-item"><span><i
                                                                class="bx bx-star"></i></span>Star Message</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#report-user"><span><i
                                                                class="bx bx-edit-alt"></i></span>Report</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#delete-message"><span><i
                                                                class="bx bx-trash"></i></span>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message-content reply-getcontent">
                                        Thank you for your support
                                        <div class="emoj-group">
                                            <ul>
                                                <li class="emoj-action"><a href="javascript:;"><i
                                                            class="bx bx-smile"></i></a>
                                                    <div class="emoj-group-list">
                                                        <ul>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-01.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-02.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-03.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-04.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-05.svg"
                                                                        alt="Icon"></a></li>
                                                            <li class="add-emoj"><a href="javascript:;"><i
                                                                        class="feather-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#forward-message"><i
                                                            class="bx bx-share"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="assets/img/avatar/avatar-8.jpg" class="rounded-circle dreams_chat"
                                        alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-profile-name">
                                        <h6>Judy Mercer<span>8:16 PM</span></h6>
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
                                                    <a href="#" class="dropdown-item"><span><i
                                                                class="bx bx-star"></i></span>Star Message</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#report-user"><span><i
                                                                class="bx bx-edit-alt"></i></span>Report</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#delete-message"><span><i
                                                                class="bx bx-trash"></i></span>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message-content reply-getcontent">
                                        Hey, have you heard about the importance pf user research in our design process?
                                        <div class="emoj-group">
                                            <ul>
                                                <li class="emoj-action"><a href="javascript:;"><i
                                                            class="bx bx-smile"></i></a>
                                                    <div class="emoj-group-list">
                                                        <ul>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-01.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-02.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-03.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-04.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="assets/img/icon/emoj-icon-05.svg"
                                                                        alt="Icon"></a></li>
                                                            <li class="add-emoj"><a href="javascript:;"><i
                                                                        class="feather-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#forward-message"><i
                                                            class="bx bx-share"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chats forward-chat-msg reply-div d-none">
                                <div class="contact-close_call text-end">
                                    <a href="#" class="close-replay">
                                        <i class="bx bx-x"></i>
                                    </a>
                                </div>
                                <div class="chat-avatar">
                                    <img src="assets/img/avatar/avatar-2.jpg" class="rounded-circle dreams_chat"
                                        alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-profile-name">
                                        <h6>Mark Villiams<span>8:16 PM</span></h6>
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
                                                    <a href="#" class="dropdown-item"><span><i
                                                                class="bx bx-star"></i></span>Star Message</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#report-user"><span><i
                                                                class="bx bx-dislike"></i></span>Report</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#delete-message"><span><i
                                                                class="bx bx-trash"></i></span>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message-content reply-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chat-footer">
                    <form action="#">
                        <div class="smile-foot">
                            <div class="chat-action-btns">
                                <div class="chat-action-col">
                                    <a class="action-circle" href="#" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item "><span><i
                                                    class="bx bx-file"></i></span>Document</a>
                                        <a href="#" class="dropdown-item"><span><i
                                                    class="bx bx-camera"></i></span>Camera</a>
                                        <a href="#" class="dropdown-item"><span><i
                                                    class="bx bx-image"></i></span>Gallery</a>
                                        <a href="#" class="dropdown-item"><span><i
                                                    class="bx bx-volume-full"></i></span>Audio</a>
                                        <a href="#" class="dropdown-item"><span><i
                                                    class="bx bx-map"></i></span>Location</a>
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
                                    <li class="add-emoj"><a href="javascript:;"><i class="feather-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="smile-foot">
                            <a href="#" class="action-circle"><i class="bx bx-microphone-off"></i></a>
                        </div>
                        <input type="text" class="form-control chat_form"
                            placeholder="Type your message here...">
                        <div class="form-buttons">
                            <button class="btn send-btn" type="submit">
                                <i class="bx bx-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>


        <div class="modal fade " id="social-profile">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Social Profiles
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="social-profile-blk">
                            <form action="#">
                                <div class="pass-login">
                                    <input type="text" class="form-control" value="www.facebook.com">
                                    <span class="social-medias"><i class="fa-brands fa-facebook-f"></i></span>
                                </div>
                                <div class="pass-login">
                                    <input type="text" class="form-control" value="www.google.com   ">
                                    <span class="social-medias"><i class="fa-brands fa-google"></i></span>
                                </div>
                                <div class="pass-login">
                                    <input type="text" class="form-control" value="www.twitter.com ">
                                    <span class="social-medias"><i class="fa-brands fa-twitter"></i></span>
                                </div>
                                <div class="pass-login">
                                    <input type="text" class="form-control" value="www.linkedin.com ">
                                    <span class="social-medias"><i class="fa-brands fa-linkedin"></i></span>
                                </div>
                                <div class="pass-login">
                                    <input type="text" class="form-control" value="www.youtube.com">
                                    <span class="social-medias"><i class="fa-brands fa-youtube"></i></span>
                                </div>
                            </form>
                        </div>
                        <div class="mute-chat-btn">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-x me-1"></i>Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-check me-1"></i>Save Changes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="password-security">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Password & Security
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body login-security">

                        <div class="settings-switch">
                            <h6>Security</h6>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div>
                                        <span>Use two-factor authentication</span>
                                    </div>
                                    <label class="switch ms-auto">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <form action="new-friends">
                            <h6>Change Password</h6>
                            <div class="pass-login">
                                <label class="form-label">Current Password </label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-input">
                                    <span class="toggle-password fa-solid fa-eye"></span>
                                </div>
                            </div>
                            <div class="pass-login">
                                <label class="form-label">New Password </label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-inputs">
                                    <span class="toggle-passwords fa-solid fa-eye"></span>
                                </div>
                            </div>
                            <div class="pass-login">
                                <label class="form-label">Confirm Password </label>
                                <div class="pass-group">
                                    <input type="password" class="form-control conform-pass-input">
                                    <span class="conform-toggle-password fa-solid fa-eye"></span>
                                </div>
                            </div>
                        </form>

                        <div class="mute-chat-btn">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-x me-1"></i>Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-check me-1"></i>Save Changes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="privacy">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Privacy
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="privacy-group">
                            <div class="privacy-detail-blk">
                                <div class="privacy-content">
                                    <h6>Profile Picture</h6>
                                    <p>Select who can see my profile picture</p>
                                </div>
                                <div>
                                    <select class="select">
                                        <option>Everyone</option>
                                        <option>Friends</option>
                                        <option>Selected Friends</option>
                                    </select>
                                </div>
                            </div>
                            <div class="privacy-detail-blk">
                                <div class="privacy-content">
                                    <h6>Last Seen</h6>
                                    <p>Select who can see my last seen</p>
                                </div>
                                <div>
                                    <select class="select">
                                        <option>My Contacts</option>
                                        <option>Friends</option>
                                        <option>Selected Friends</option>
                                    </select>
                                </div>
                            </div>
                            <div class="privacy-detail-blk">
                                <div class="privacy-content">
                                    <h6>Groups</h6>
                                    <p>Select who can add you in groups</p>
                                </div>
                                <div>
                                    <select class="select">
                                        <option>Everyone</option>
                                        <option>Friends</option>
                                        <option>Selected Friends</option>
                                    </select>
                                </div>
                            </div>
                            <div class="privacy-detail-blk">
                                <div class="privacy-content">
                                    <h6>Status</h6>
                                    <p>Select who can see my status updates</p>
                                </div>
                                <div>
                                    <select class="select">
                                        <option>Only Share With</option>
                                        <option>Friends</option>
                                        <option>Selected Friends</option>
                                    </select>
                                </div>
                            </div>
                            <div class="privacy-detail-blk">
                                <div class="privacy-content">
                                    <h6>Read receipts</h6>
                                    <p>If turn off this option you won't be able to see read recipts</p>
                                </div>
                                <div class="settings-switch d-flex align-items-center">
                                    <label class="switch ms-auto">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mute-chat-btn">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-x me-1"></i>Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-check me-1"></i>Save Changes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="setting-chat">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Chat
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="privacy-group">
                            <div class="privacy-detail-blk">
                                <div class="privacy-content chat-content">
                                    <h6><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#gallery-image">Background Images<span><i
                                                    class="feather-chevron-right"></i></span></a></h6>
                                </div>
                            </div>
                            <div class="privacy-detail-blk">
                                <div class="privacy-content chat-content">
                                    <h6>Clear All Chat</h6>
                                </div>
                                <div class="settings-switch d-flex align-items-center">
                                    <label class="switch ms-auto">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="privacy-detail-blk">
                                <div class="privacy-content chat-content">
                                    <h6>Delete All Chat</h6>
                                </div>
                                <div class="settings-switch d-flex align-items-center">
                                    <label class="switch ms-auto">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="privacy-detail-blk">
                                <div class="privacy-content chat-content">
                                    <h6>Chat Backup</h6>
                                </div>
                                <div class="settings-switch d-flex align-items-center">
                                    <label class="switch ms-auto">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mute-chat-btn">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-x me-1"></i>Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-check me-1"></i>Save Changes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="setting-notification">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Notifications
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="notification-group">
                            <div class="privacy-detail-blk">
                                <div class="privacy-content notify-content">
                                    <h6>Message Notifications</h6>
                                    <p>Show notifications for new messages</p>
                                </div>
                                <div class="notify-check mb-0">
                                    <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                        <label class="custom-check mt-0 mb-0">
                                            <input type="checkbox" name="remeber">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="privacy-detail-blk ">
                                <div class="privacy-content notify-content">
                                    <h6>Show Previews</h6>
                                </div>
                                <div class="notify-check mb-0">
                                    <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                        <label class="custom-check mt-0 mb-0">
                                            <input type="checkbox" name="remeber">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="privacy-detail-blk border-group">
                                <div class="privacy-content notify-content">
                                    <h6>Show Reaction Notifications</h6>
                                </div>
                                <div class="notify-check mb-0">
                                    <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                        <label class="custom-check mt-0 mb-0">
                                            <input type="checkbox" name="remeber">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="privacy-detail-blk">
                                <div class="privacy-content notify-content">
                                    <h6>Sounds</h6>
                                    <p>Play sounds for incoming messages</p>
                                </div>
                                <div class="notify-check mb-0">
                                    <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                        <label class="custom-check mt-0 mb-0">
                                            <input type="checkbox" name="remeber">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mute-chat-btn">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-x me-1"></i>Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-check me-1"></i>Save Changes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="blocked-user">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Blocked Users
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="user-block-group">
                            <div class="search_chat has-search">
                                <span class="fas fa-search form-control-feedback"></span>
                                <input class="form-control chat_input" id="search-contacted" type="text"
                                    placeholder="Search">
                            </div>
                            <h5>Recent chats</h5>
                            <div class="recent-block-group">
                                <div class="user-block-profile">
                                    <div class="avatar">
                                        <img src="assets/img/avatar/avatar-1.jpg" class="rounded-circle"
                                            alt="image">
                                    </div>
                                    <div class="block-user-name">
                                        <h6>Horace Keene</h6>
                                        <span>Sleeping</span>
                                    </div>
                                </div>
                                <div class="user-blocked">
                                    <a href="javascript:;" class="btn btn-primary">Unblock</a>
                                </div>
                            </div>
                            <div class="recent-block-group">
                                <div class="user-block-profile">
                                    <div class="avatar">
                                        <img src="assets/img/avatar/avatar-2.jpg" class="rounded-circle"
                                            alt="image">
                                    </div>
                                    <div class="block-user-name">
                                        <h6>Bacon Mark</h6>
                                        <span>Available</span>
                                    </div>
                                </div>
                                <div class="user-blocked">
                                    <a href="javascript:;" class="btn btn-primary">Unblock</a>
                                </div>
                            </div>
                            <div class="recent-block-group">
                                <div class="user-block-profile">
                                    <div class="avatar">
                                        <img src="assets/img/avatar/avatar-3.jpg" class="rounded-circle"
                                            alt="image">
                                    </div>
                                    <div class="block-user-name">
                                        <h6>Debra Jones</h6>
                                        <span>At Work</span>
                                    </div>
                                </div>
                                <div class="user-blocked">
                                    <a href="javascript:;" class="btn btn-primary">Unblock</a>
                                </div>
                            </div>
                            <div class="recent-block-group mb-0">
                                <div class="user-block-profile">
                                    <div class="avatar">
                                        <img src="assets/img/avatar/avatar-4.jpg" class="rounded-circle"
                                            alt="image">
                                    </div>
                                    <div class="block-user-name">
                                        <h6>Dina Brown</h6>
                                        <span>Can’t Talk, WhatsApp only</span>
                                    </div>
                                </div>
                                <div class="user-blocked">
                                    <a href="javascript:;" class="btn btn-primary">Unblock</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="mute-user">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Muted Users
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="user-block-group">
                            <div class="search_chat has-search">
                                <span class="fas fa-search form-control-feedback"></span>
                                <input class="form-control chat_input" id="search-new-contacted" type="text"
                                    placeholder="Search">
                            </div>
                            <h5>Recent User</h5>
                            <div class="recent-block-group">
                                <div class="user-block-profile">
                                    <div class="avatar">
                                        <img src="assets/img/avatar/avatar-1.jpg" class="rounded-circle"
                                            alt="image">
                                    </div>
                                    <div class="block-user-name">
                                        <h6>Horace Keene</h6>
                                        <span>Sleeping</span>
                                    </div>
                                </div>
                                <div class="user-blocked">
                                    <a href="javascript:;" class="btn btn-primary">Unmute</a>
                                </div>
                            </div>
                            <div class="recent-block-group">
                                <div class="user-block-profile">
                                    <div class="avatar">
                                        <img src="assets/img/avatar/avatar-2.jpg" class="rounded-circle"
                                            alt="image">
                                    </div>
                                    <div class="block-user-name">
                                        <h6>Bacon Mark</h6>
                                        <span>Available</span>
                                    </div>
                                </div>
                                <div class="user-blocked">
                                    <a href="javascript:;" class="btn btn-primary">Unmute</a>
                                </div>
                            </div>
                            <div class="recent-block-group">
                                <div class="user-block-profile">
                                    <div class="avatar">
                                        <img src="assets/img/avatar/avatar-3.jpg" class="rounded-circle"
                                            alt="image">
                                    </div>
                                    <div class="block-user-name">
                                        <h6>Debra Jones</h6>
                                        <span>At Work</span>
                                    </div>
                                </div>
                                <div class="user-blocked">
                                    <a href="javascript:;" class="btn btn-primary">Unmute</a>
                                </div>
                            </div>
                            <div class="recent-block-group mb-0">
                                <div class="user-block-profile">
                                    <div class="avatar">
                                        <img src="assets/img/avatar/avatar-4.jpg" class="rounded-circle"
                                            alt="image">
                                    </div>
                                    <div class="block-user-name">
                                        <h6>Dina Brown</h6>
                                        <span>Can’t Talk, WhatsApp only</span>
                                    </div>
                                </div>
                                <div class="user-blocked">
                                    <a href="javascript:;" class="btn btn-primary">Unmute</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="setting-languages">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Languages
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="languages-group mb-4">
                            <div>
                                <select class="select">
                                    <option>Choose Language</option>
                                    <option>English</option>
                                    <option>French</option>
                                    <option>German</option>
                                </select>
                            </div>
                        </div>
                        <div class="mute-chat-btn">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-x me-1"></i>Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-check me-1"></i>Save Changes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="setting-logout">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Log Out
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="logout-group mb-4">
                            <p>Are you sure you want to log out?</p>
                        </div>
                        <div class="mute-chat-btn">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade device-modal" id="setting-device">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body pt-4">
                        <div class="device-group mb-4">
                            <div class="manage-device-detail setting-device-details">
                                <div class="manage-histry manage-wrapper-histry flkex-grow-1">
                                    <h6>Device History</h6>
                                    <p>If you see a device here that you believe wasn’t you, please contact our account
                                        fraud department immediately.</p>
                                </div>
                                <a href="javascript:;"
                                    class="btn btn-primary set-manage-pri flex-shrink-0 d-flex align-items-center"><img
                                        src="assets/img/icon/logout.svg" class="me-1" alt="Icon">Log out all
                                    Devices</a>
                            </div>
                            <div class="connectetapps setting-connect">
                                <div class="connectetappsimg setting-connect-img">
                                    <div class="connectet-img">
                                        <i class="fa-solid fa-laptop"></i>
                                    </div>
                                    <div class="connectet-content">
                                        <p>16 Feb 2023 at 06:25 PM</p>
                                        <h6>Mac OS Safari 15.1</h6>
                                    </div>
                                </div>
                                <div class="connectetappscontent">
                                    <a href="javascript:;" class="btn btn-primary">Current Session</a>
                                    <span class="device-remove"><a href="javascript:;"><i
                                                class="feather-trash-2"></i></a></span>
                                </div>
                            </div>
                            <div class="connectetapps">
                                <div class="connectetappsimg">
                                    <div class="connectet-img">
                                        <i class="fa-solid fa-laptop"></i>
                                    </div>
                                    <div class="connectet-content">
                                        <p>22 Jan 2023 at 04:32 AM</p>
                                        <h6>Windows 11 Mozilla Firefox</h6>
                                    </div>
                                </div>
                                <div class="connectetappscontent">
                                    <span class="device-remove"><a href="javascript:;"><i
                                                class="feather-trash-2"></i></a></span>
                                </div>
                            </div>
                            <div class="connectetapps">
                                <div class="connectetappsimg">
                                    <div class="connectet-img">
                                        <i class="feather-tablet"></i>
                                    </div>
                                    <div class="connectet-content">
                                        <p>06 Dec 2023 at 06:30 AM</p>
                                        <h6>iOS Safari 15.1</h6>
                                    </div>
                                </div>
                                <div class="connectetappscontent">
                                    <span class="device-remove"><a href="javascript:;"><i
                                                class="feather-trash-2"></i></a></span>
                                </div>
                            </div>
                        </div>
                        <div class="mute-chat-btn">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-x me-1"></i>Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-check me-1"></i>Save Changes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="delete-account">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Delete My Account
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="logout-group mb-4">
                            <p>Delete your account info and profile photo</p>
                            <p>Delete you from all dreamschat groups</p>
                            <p>Delete your message history on this phone and your icloud backup</p>
                            <div class="form-group">
                                <label class="form-label">Phone Number <span>*</span></label>
                                <input class="form-control form-control-lg group_formcontrol" id="phone"
                                    name="phone" type="text">
                            </div>
                        </div>
                        <div class="mute-chat-btn">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                Delete My Account
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade custom-border-modal" id="add-group-member">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <span class="material-icons group-add-btn">group_add</span>Add Group Members
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="search_chat has-search me-0 ms-0">
                            <span class="fas fa-search form-control-feedback"></span>
                            <input class="form-control chat_input" id="search-contact1" type="text"
                                placeholder="Search Contacts">
                        </div>
                        <div class="sidebar">
                            <span class="contact-name-letter">A</span>
                            <ul class="user-list mt-2">
                                <li class="user-list-item">
                                    <div class="avatar avatar-online">
                                        <img src="assets/img/avatar/avatar-1.jpg" class="rounded-circle"
                                            alt="image">
                                    </div>
                                    <div class="users-list-body align-items-center">
                                        <div>
                                            <h5>Albert Rodarte</h5>
                                        </div>
                                        <div class="last-chat-time">
                                            <label class="custom-check">
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="user-list-item">
                                    <div class="avatar avatar-online">
                                        <img src="assets/img/avatar/avatar-2.jpg" class="rounded-circle"
                                            alt="image">
                                    </div>
                                    <div class="users-list-body align-items-center">
                                        <div>
                                            <h5>Allison Etter</h5>
                                        </div>
                                        <div class="last-chat-time">
                                            <label class="custom-check">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <span class="contact-name-letter mt-3">C</span>
                            <ul class="user-list mt-2">
                                <li class="user-list-item">
                                    <div class="avatar avatar-online">
                                        <img src="assets/img/avatar/avatar-3.jpg" class="rounded-circle"
                                            alt="image">
                                    </div>
                                    <div class="users-list-body align-items-center">
                                        <div>
                                            <h5>Craig Smiley</h5>
                                        </div>
                                        <div class="last-chat-time">
                                            <label class="custom-check">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="user-list-item">
                                    <div class="avatar avatar-online">
                                        <img src="assets/img/avatar/avatar-4.jpg" class="rounded-circle"
                                            alt="image">
                                    </div>
                                    <div class="users-list-body align-items-center">
                                        <div>
                                            <h5>Caniel Clay</h5>
                                        </div>
                                        <div class="last-chat-time">
                                            <label class="custom-check">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="form-row profile_form text-end float-end m-0 mt-3 align-items-center">
                            <div class="cancel-btn me-3">
                                <a href="#" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                            </div>
                            <div class>
                                <button type="button" class="btn newgroup_create previous mb-0 me-3"
                                    data-bs-toggle="modal" data-bs-target="#add-new-group" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Previous
                                </button>
                            </div>
                            <div class>
                                <button type="button" class="btn btn-block newgroup_create mb-0"
                                    data-bs-dismiss="modal" aria-label="Close">
                                    Create Group
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="gallery-image">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content setting-wall">
                    <div class="modal-header set-wall-header">
                        <h5 class="modal-title">
                            Select Wallpaper
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-4 wallper-card-wrapper">
                            <div class="wall-img active">
                                <img src="./assets/img/wallpaper/wallpaper-07.png" alt="Img"
                                    class="img-fluid">
                                <div class="theme-image-content">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 wallper-card-wrapper">
                            <div class="wall-img">
                                <img src="./assets/img/wallpaper/wallpaper-08.png" alt="Img"
                                    class="img-fluid">
                                <div class="theme-image-content">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 wallper-card-wrapper">
                            <div class="wall-img">
                                <img src="./assets/img/wallpaper/wallpaper-09.png" alt="Img"
                                    class="img-fluid">
                                <div class="theme-image-content">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 wallper-card-wrapper">
                            <div class="wall-img">
                                <img src="./assets/img/wallpaper/wallpaper-10.png" alt="Img"
                                    class="img-fluid">
                                <div class="theme-image-content">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 wallper-card-wrapper">
                            <div class="wall-img">
                                <img src="./assets/img/wallpaper/wallpaper-11.png" alt="Img"
                                    class="img-fluid">
                                <div class="theme-image-content">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 wallper-card-wrapper">
                            <div class="wall-img">
                                <img src="./assets/img/wallpaper/wallpaper-12.png" alt="Img"
                                    class="img-fluid">
                                <div class="theme-image-content">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 wallper-card-wrapper">
                            <div class="wall-img">
                                <img src="./assets/img/wallpaper/wallpaper-06.png" alt="Img"
                                    class="img-fluid">
                                <div class="theme-image-content">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 wallper-card-wrapper">
                            <div class="wall-img">
                                <img src="./assets/img/wallpaper/wallpaper-05.png" alt="Img"
                                    class="img-fluid">
                                <div class="theme-image-content">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 wallper-card-wrapper">
                            <div class="wall-img">
                                <img src="./assets/img/wallpaper/wallpaper-04.png" alt="Img"
                                    class="img-fluid">
                                <div class="theme-image-content">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 wallper-card-wrapper">
                            <div class="wall-img">
                                <img src="./assets/img/wallpaper/wallpaper-03.png" alt="Img"
                                    class="img-fluid">
                                <div class="theme-image-content">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 wallper-card-wrapper">
                            <div class="wall-img">
                                <img src="./assets/img/wallpaper/wallpaper-02.png" alt="Img"
                                    class="img-fluid">
                                <div class="theme-image-content">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 wallper-card-wrapper">
                            <div class="wall-img">
                                <img src="./assets/img/wallpaper/wallpaper-01.png" alt="Img"
                                    class="img-fluid">
                                <div class="theme-image-content">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body wall-set-body">
                        <div class="mute-chat-btn wall-btn">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                Select
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="forward-message">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Forward Message To
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="user-block-group mb-4">
                                <div class="search_chat has-search">
                                    <span class="fas fa-search form-control-feedback"></span>
                                    <input class="form-control chat_input" id="search-contact" type="text"
                                        placeholder="Search">
                                </div>
                                <h5>Recent Chats</h5>
                                <div class="recent-block-group">
                                    <div class="user-block-profile">
                                        <div class="avatar">
                                            <img src="assets/img/avatar/avatar-1.jpg" class="rounded-circle"
                                                alt="image">
                                        </div>
                                        <div class="block-user-name">
                                            <h6>Horace Keene</h6>
                                            <span>Sleeping</span>
                                        </div>
                                    </div>
                                    <div class="notify-check mb-0">
                                        <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                            <label class="custom-check mt-0 mb-0">
                                                <input type="checkbox" name="remeber">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-block-group">
                                    <div class="user-block-profile">
                                        <div class="avatar">
                                            <img src="assets/img/avatar/avatar-2.jpg" class="rounded-circle"
                                                alt="image">
                                        </div>
                                        <div class="block-user-name">
                                            <h6>Bacon Mark</h6>
                                            <span>Available</span>
                                        </div>
                                    </div>
                                    <div class="notify-check mb-0">
                                        <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                            <label class="custom-check mt-0 mb-0">
                                                <input type="checkbox" name="remeber">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-block-group">
                                    <div class="user-block-profile">
                                        <div class="avatar">
                                            <img src="assets/img/avatar/avatar-3.jpg" class="rounded-circle"
                                                alt="image">
                                        </div>
                                        <div class="block-user-name">
                                            <h6>Debra Jones</h6>
                                            <span>At Work</span>
                                        </div>
                                    </div>
                                    <div class="notify-check mb-0">
                                        <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                            <label class="custom-check mt-0 mb-0">
                                                <input type="checkbox" name="remeber">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-block-group mb-0">
                                    <div class="user-block-profile">
                                        <div class="avatar">
                                            <img src="assets/img/avatar/avatar-4.jpg" class="rounded-circle"
                                                alt="image">
                                        </div>
                                        <div class="block-user-name">
                                            <h6>Dina Brown</h6>
                                            <span>Can’t Talk, WhatsApp only</span>
                                        </div>
                                    </div>
                                    <div class="notify-check">
                                        <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                            <label class="custom-check mt-0 mb-0">
                                                <input type="checkbox" name="remeber">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mute-chat-btn">
                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i class="feather-x me-1"></i>Cancel
                                </button>
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <img src="assets/img/icon/send.svg" class="me-1" alt="image">Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="delete-message">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content delete-model-head">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Delete Message
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="notify-check delete-chat-notify">
                            <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                <label class="custom-check mt-0 mb-0">
                                    <span class="remember-me">Delete for Me</span>
                                    <input type="checkbox" name="remeber" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                <label class="custom-check mt-0 mb-0">
                                    <span class="remember-me">Delete for Everyone</span>
                                    <input type="checkbox" name="remeber">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="mute-chat-btn delete-pop-btn justify-content-end">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-x me-1"></i>Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="bx bx-trash me-1"></i>Delete
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="report-user">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Report Mark Villiams
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="block-user-blk text-center">
                            <img src="assets/img/icon/report-01.svg" alt="icon">
                            <p>If you block this contact and clear the chat, messages will only be removed from this
                                device and your devices on the newer versions of DreamsChat</p>
                            <div class="notify-check">
                                <div class="form-check d-flex align-items-center justify-content-center ps-0">
                                    <label class="custom-check mt-0 mb-0">
                                        <span class="remember-me">Block contact and clear chat</span>
                                        <input type="checkbox" name="remeber">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mute-chat-btn justify-content-center">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                Report
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade mute-notify" id="mute-notification">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Mute Notifications
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="notify-check">
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">30 Minutes
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">1 Hour
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">1 Day
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">1 Week
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">1 Month
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">1 Year
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">Always
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="mute-chat-btn">
                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Mute
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="disappearing-messages">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Disappearing messages
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="block-user-blk">
                                <p>For more privacy and storage, all new messages will disappear from this chat for
                                    everyone after the selected duration, except when kept. Anyone in the chat can
                                    change this setting.</p>
                                <div class="notify-check">
                                    <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                        <label class="custom-check mt-0 mb-0">
                                            <span class="remember-me">24 Hours</span>
                                            <input type="checkbox" name="remeber">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                        <label class="custom-check mt-0 mb-0">
                                            <span class="remember-me">7 Days</span>
                                            <input type="checkbox" name="remeber">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                        <label class="custom-check mt-0 mb-0">
                                            <span class="remember-me">90 Days</span>
                                            <input type="checkbox" name="remeber">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                        <label class="custom-check mt-0 mb-0">
                                            <span class="remember-me">Off</span>
                                            <input type="checkbox" name="remeber">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mute-chat-btn">
                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="change-chat">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Delete Chat
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="block-user-blk text-center">
                            <i class="bx bx-trash change-color "></i>
                            <p>Clearing or deleting entire chats will only remove messages from this device and your
                                devices on the newer versions of DreamsChat.</p>
                        </div>
                        <div class="mute-chat-btn justify-content-center">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="clear-chat">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Clear Chat
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="block-user-blk text-center">
                            <i class="bx bx-trash change-color "></i>
                            <p>Clearing or deleting entire chats will only remove messages from this device and your
                                devices on the newer versions of DreamsChat.</p>
                        </div>
                        <div class="mute-chat-btn justify-content-center">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                Clear
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="block-user">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Block Mark Villiams
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="block-user-blk text-center">
                            <i class="bx bx-block change-color "></i>
                            <p>Blocked contacts will no longer be able to call you or send you messages.</p>
                        </div>
                        <div class="mute-chat-btn justify-content-center">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                Block
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="setting-condition">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Account Setting
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="user-profiles-group mb-4">
                            <div class="profile-cover text-center">
                                <label class="profile-cover-avatar">
                                    <img class="avatar-img" src="assets/img/avatar/avatar-2.jpg"
                                        alt="Profile Image">
                                    <input type="file" id="avatar_upload_three">
                                    <span class="avatar-edit">
                                        <img src="assets/img/icon/camera.svg" alt="Image">
                                    </span>
                                </label>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="pass-login ">
                                            <label class="form-label">First Name <span>*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="pass-login">
                                            <label class="form-label">Last Name <span>*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="pass-login">
                                            <label class="form-label">Gender </label>
                                            <select class="select pass-login-dropdown">
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Trans-Gender</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Date of Birth <span>*</span></label>
                                            <div class="cal-icon">
                                                <span><img src="assets/img/icon/calendar.svg" alt="Icon"></span>
                                                <input type="text" class="form-control datetimepicker"
                                                    placeholder="Select Date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="pass-login">
                                            <label class="form-label">Country </label>
                                            <select class="select pass-login-dropdown">
                                                <option>India</option>
                                                <option>USA</option>
                                                <option>China</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="pass-login">
                                            <label class="form-label">About</label>
                                            <textarea class="form-control "></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="mute-chat-btn">
                                    <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <i class="feather-x me-1"></i>Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal"
                                        aria-label="Close" data-bs-toggle="modal" data-bs-target="#group-parti">
                                        <i class="feather-check me-1"></i>Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="edit-setting-condition">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Account Setting
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="user-profiles-group ">
                            <div class="profile-cover text-center">
                                <label class="profile-cover-avatar">
                                    <img class="avatar-img" src="assets/img/avatar/avatar-2.jpg"
                                        alt="Profile Image">
                                    <input type="file" id="avatar_upload_img">
                                    <span class="avatar-edit">
                                        <img src="assets/img/icon/camera.svg" alt="Image">
                                    </span>
                                </label>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="pass-login ">
                                            <label class="form-label">First Name <span>*</span></label>
                                            <input type="text" class="form-control" value="Alexander">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="pass-login">
                                            <label class="form-label">Last Name <span>*</span></label>
                                            <input type="text" class="form-control" value="Manuel">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="pass-login">
                                            <label class="form-label">Gender </label>
                                            <select class="select pass-login-dropdown">
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Trans-Gender</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Date of Birth <span>*</span></label>
                                            <div class="cal-icon">
                                                <span><img src="assets/img/icon/calendar.svg" alt="Icon"></span>
                                                <input type="text" class="form-control datetimepicker"
                                                    placeholder="19-09-2023">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="pass-login">
                                            <label class="form-label">Country </label>
                                            <select class="select pass-login-dropdown">
                                                <option>India</option>
                                                <option>USA</option>
                                                <option>China</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="pass-login">
                                            <label class="form-label">About</label>
                                            <textarea class="form-control "></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="mute-chat-btn">
                                    <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <i class="feather-x me-1"></i>Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal"
                                        aria-label="Close" data-bs-toggle="modal" data-bs-target="#group-parti">
                                        <i class="feather-check me-1"></i>Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="assets/js/jquery-3.7.0.min.js" type="337e067c5ed31a2f61791e49-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="337e067c5ed31a2f61791e49-text/javascript"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="337e067c5ed31a2f61791e49-text/javascript"></script>

    <script src="assets/plugins/intltelinput/js/intlTelInput.js" type="337e067c5ed31a2f61791e49-text/javascript"></script>

    <script src="assets/plugins/swiper/swiper.min.js" type="337e067c5ed31a2f61791e49-text/javascript"></script>

    <script src="assets/plugins/fancybox/jquery.fancybox.min.js" type="337e067c5ed31a2f61791e49-text/javascript"></script>

    <script src="assets/plugins/moment/moment.min.js" type="337e067c5ed31a2f61791e49-text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="337e067c5ed31a2f61791e49-text/javascript"></script>

    <script src="assets/plugins/select2/js/select2.min.js" type="337e067c5ed31a2f61791e49-text/javascript"></script>

    <script src="assets/js/script.js" type="337e067c5ed31a2f61791e49-text/javascript"></script>
    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="337e067c5ed31a2f61791e49-|49" defer></script>
</body>

</html>
