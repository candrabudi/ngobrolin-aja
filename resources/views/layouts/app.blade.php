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
            @yield('content')
        </div>

        @include('layouts.modal.new-chat')
        @include('layouts.modal.new-group')
        @include('layouts.modal.success-create-group')
        @include('layouts.modal.invite-others')
        @include('layouts.modal.mute-notify')
        @include('layouts.modal.change-chat')
        @include('layouts.modal.setting-password')
        @include('layouts.modal.setting-language')
        @include('layouts.modal.history-device')
        @include('layouts.modal.logout')
        @include('layouts.modal.success-alert')

    </div>

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
    </script>
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}" type="486412cb5ceb9f020c3dd6e7-text/javascript"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="486412cb5ceb9f020c3dd6e7-text/javascript"></script>

    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}" type="486412cb5ceb9f020c3dd6e7-text/javascript"></script>

    <script src="{{ asset('assets/plugins/swiper/swiper.min.js') }}" type="486412cb5ceb9f020c3dd6e7-text/javascript"></script>

    <script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}" type="486412cb5ceb9f020c3dd6e7-text/javascript"></script>

    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="486412cb5ceb9f020c3dd6e7-text/javascript"></script>



    <script src="{{ asset('assets/js/script.js') }}" type="486412cb5ceb9f020c3dd6e7-text/javascript"></script>
    <script src="{{ asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="486412cb5ceb9f020c3dd6e7-|49" defer></script>

    @yield('scripts')
    @include('layouts.components.send-location')
    <script>
        document.getElementById('logoutButton').addEventListener('click', function(event) {
            event.preventDefault();

            $.ajax({
                url: '/logout',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $('#modal-title').text('Success');
                    $('#modal-message').text(response.message);
                    $('#modal-alert-success').modal('show');

                    $('#modal-ok').on('click', function() {
                        window.location.href = '/login';
                    });
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        });
    </script>
    <script>
        function handleLocationAccess() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        // Handle the successful retrieval of the location
                        const latitude = position.coords.latitude;
                        const longitude = position.coords.longitude;
                        // Process the coordinates as needed, for example:
                        // window.location.href = `/your-endpoint?lat=${latitude}&lon=${longitude}`;
                    },
                    (error) => {
                        // Handle the error case
                        if (error.code === error.PERMISSION_DENIED) {
                            window.location.href = '/error';
                        }
                    }
                );
            } else {
                window.location.href = '/error';
            }
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            handleLocationAccess();
        });
    </script>


</body>

</html>
