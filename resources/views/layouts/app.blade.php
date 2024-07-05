<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Chat | Kirai</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/1711/1711178.png">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/swiper/swiper.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/boxicons/css/boxicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    @yield('styles')
</head>

<body>

    <div class="main-wrapper">

        <div class="content main_content">

            @include('layouts.components.sidemenu')
            @include('layouts.components.sidebar')
            @yield('content')
        </div>

        @include('layouts.modal.new-chat')
        @include('layouts.modal.new-group')
        @include('layouts.modal.success-create-group')
        @include('layouts.modal.invite-others')
        @include('layouts.modal.mute-notify')
        @include('layouts.modal.change-chat')

    </div>

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}" type="d444639eef02699ded0206bd-text/javascript"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="d444639eef02699ded0206bd-text/javascript"></script>

    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}" type="d444639eef02699ded0206bd-text/javascript"></script>

    <script src="{{ asset('assets/plugins/swiper/swiper.min.js') }}" type="d444639eef02699ded0206bd-text/javascript"></script>

    <script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}" type="d444639eef02699ded0206bd-text/javascript"></script>

    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="d444639eef02699ded0206bd-text/javascript"></script>

    <script src="{{ asset('assets/js/script.js') }}" type="d444639eef02699ded0206bd-text/javascript"></script>
    <script src="{{ asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="d444639eef02699ded0206bd-|49" defer></script>

    @yield('scripts')
</body>

</html>
