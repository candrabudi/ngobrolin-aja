<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta property="og:url" content="Template Landing Page URL">
    <meta property="og:title" content="Template Titlte">
    <meta property="og:description" content="Template Content">
    <meta property="og:image" content="/assets/img/meta-image.jpg">
    <meta property="og:image:secure_url" content="assets/img/meta-image.jpg">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <title>Bicaro</title>

    <link rel="icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/swiper/swiper.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/boxicons/css/boxicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>

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
                                <a href="group.html" class="chat-unread active" data-bs-toggle="tooltip"
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
                                <a href="settings.html" class="chat-unread" data-bs-toggle="tooltip"
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


            <div class="chat video-screen" id="middle">
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
                            <h5>Mark Villiams</h5>
                            <small class="last-seen">
                                +91 9988776655
                            </small>
                        </div>
                    </div>
                    <div class="chat-options chat-contact-list">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="btn btn-outline-light" href="#" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="contact.html" class="dropdown-item "><span><i
                                                class="bx bx-user-pin"></i></span>View Contact </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="chat-body pt-4 pb-0">
                    <div class="video-screen-inner audio-screen-inner">
                        <div class="more-icon">
                            <a href="#" class="mic-off">
                                <i class="feather-mic-off"></i>
                            </a>
                        </div>
                        <div class="audio-call-group">
                            <div>
                                <figure class="avatar">
                                    <img src="assets/img/avatar/avatar-2.jpg" class="rounded-circle" alt="image">
                                </figure>
                                <h6>Mark Villiams</h6>
                                <span>00:25</span>
                            </div>
                        </div>
                        <div class="video-call-action action-calls">
                            <ul class="center-action">
                                <li>
                                    <a class="mute-bt" href="javascript:void(0);">
                                        <i class="feather-mic"></i>
                                    </a>
                                </li>
                                <li><a href="#" class="call-end"><i class="feather-phone-off"></i></a></li>
                                <li>
                                    <a class="mute-video" href="javascript:void(0);">
                                        <i class="feather-video"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}" type="3cf9768f2c7d58f611fda09b-text/javascript"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="3cf9768f2c7d58f611fda09b-text/javascript"></script>

    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}" type="3cf9768f2c7d58f611fda09b-text/javascript"></script>

    <script src="{{ asset('assets/plugins/swiper/swiper.min.js') }}" type="3cf9768f2c7d58f611fda09b-text/javascript"></script>

    <script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}" type="3cf9768f2c7d58f611fda09b-text/javascript"></script>

    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="3cf9768f2c7d58f611fda09b-text/javascript"></script>

    <script src="{{ asset('assets/js/script.js') }}" type="3cf9768f2c7d58f611fda09b-text/javascript"></script>
    <script src="{{ asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="3cf9768f2c7d58f611fda09b-|49" defer></script>
</body>

</html>
