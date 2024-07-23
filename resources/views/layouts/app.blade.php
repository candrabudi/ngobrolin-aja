<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Chat | Bicaro</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo-chat.png') }}">

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

    <div id="joinCallDialog" class="dialog" onmousedown="startDrag(event)" style="display: none;">
        <div class="dialog-header">
            <span class="dialog-title">Video Call</span>
            <div class="dialog-controls">
                <button type="button" class="dialog-btn dialog-maximize-btn"
                    onclick="maximizeDialog('joinCallDialog')">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>
        </div>
        <div class="dialog-body">
            <div class="call-box incoming-box">
                <div class="call-wrapper">
                    <div class="call-inner">
                        <div class="call-user">
                            <video id="localVideo" autoplay muted></video>
                            <h4 id="video-full-name">Mark Villiams</h4>
                        </div>
                        <div class="call-items">
                            <a href="#" class="btn call-item btn-end-call" style="margin-right: 10px;"
                                onclick="closeDialog()">
                                <i class="bx bx-x"></i>
                            </a>
                            <a href="#" class="btn call-item btn-voice-call" onclick="switchToVoiceCall()">
                                <i class="bx bx-phone"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pusher/8.3.0/pusher.min.js"
        integrity="sha512-tXL5mrkSoP49uQf2jO0LbvzMyFgki//znmq0wYXGq94gVF6TU0QlrSbwGuPpKTeN1mIjReeqKZ4/NJPjHN1d2Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

    <script>
        $(document).ready(function() {
            function checkToken() {
                const token = localStorage.getItem('token');
                // const tokenExpiry = localStorage.getItem('expires_at');
                // if (!token) {
                //     window.location.href = '/login';
                // } else {
                    getUserProfile(token);
                // }
            }
    
            function getUserProfile(token) {
                $.ajax({
                    url: '{{ env('API_SECURE_MESSANGER') }}/v1/user/get-profile',
                    type: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + token,
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            localStorage.setItem('user_profile', JSON.stringify(response.data));
                        } else {
                            console.error('Error:', response.message);
                            // Handle errors other than 401 here
                        }
                    },
                    error: function(xhr) {
                        console.error('Error:', xhr);
                        if (xhr.status === 401) {
                            // Redirect to login on 401 error
                            window.location.href = '/login';
                        } else {
                            // Handle other errors
                            console.error('Unexpected error:', xhr.responseText);
                        }
                    }
                });
            }
    
            checkToken();
    
            $('#logoutButton').on('click', function(event) {
                event.preventDefault();
                $.ajax({
                    url: '/logout',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        localStorage.clear();
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
    
            function handleLocationAccess() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        function(position) {
                            const latitude = position.coords.latitude;
                            const longitude = position.coords.longitude;
                            // Handle the location data here
                        },
                        function(error) {
                            if (error.code === error.PERMISSION_DENIED) {
                                window.location.href = '/error';
                            }
                        }
                    );
                } else {
                    window.location.href = '/error';
                }
            }
    
            handleLocationAccess();
        });
    </script>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const token = localStorage.getItem('token');
            const middleSection = document.getElementById('middle-section');

            const fetchContacts = () => {
                axios.get('{{ env('API_SECURE_MESSANGER') }}/v1/contact/list', {
                        headers: {
                            'Authorization': 'Bearer ' + token
                        }
                    })
                    .then(response => {
                        if (response.data.status === 'success') {
                            displayContacts(response.data.data);
                        } else {
                            console.error('Failed to get contacts:', response.data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching contacts:', error.response ? error.response.data :
                            error.message);
                    });
            };

            const displayContacts = (contacts) => {
                const contactListContainer = document.getElementById('contact-list');
                contactListContainer.innerHTML = ''; // Clear previous content

                contacts.forEach(contact => {
                    const contactItem = `
                <li class="user-list-item">
                    <div class="list-user-blk">
                        <div class="avatar">
                            <img src="${contact.profile_img}" class="rounded-circle" alt="${contact.full_name}">
                        </div>
                        <div class="users-list-body">
                            <div>
                                <h5>${contact.full_name}</h5>
                                <p>Active</p>
                            </div>
                        </div>
                        <div class="notify-check parti-notify-check">
                            <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                <label class="custom-check mt-0 mb-0">
                                    <input type="checkbox" name="participant_ids[]" value="${contact.user_id}">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </li>
            `;
                    contactListContainer.innerHTML += contactItem;
                });
            };

            // Fetch contacts when the page loads
            fetchContacts();

            // Handle the "Create Group" button click
            document.getElementById('create-group').addEventListener('click', () => {
                const selectedParticipants = Array.from(document.querySelectorAll(
                        'input[name="participant_ids[]"]:checked'))
                    .map(input => input.value);
                const groupName = document.getElementById('group-name').value;
                const groupDescription = document.getElementById('group-description').value;
                const groupIcon = document.getElementById('avatar_upload').files[0];

                const formData = new FormData();
                formData.append('group_name', groupName);
                formData.append('group_description', groupDescription);
                formData.append('group_icon', groupIcon);
                selectedParticipants.forEach(id => formData.append('participant_ids[]', id));

                axios.post('{{ env('API_SECURE_MESSANGER') }}/v1/room-chat/group/create', formData, {
                        headers: {
                            'Authorization': 'Bearer ' + token,
                            'Content-Type': 'multipart/form-data'
                        }
                    })
                    .then(response => {
                        if (response.data.status === 'success') {
                            const roomId = response.data.data.chat_room_id;
                            localStorage.setItem('roomId', roomId);
                            loadDetailRoom(roomId);
                            getRooms();
                        } else {
                            alert('Failed to create chat room: ' + response.data.message);
                        }
                    })
                    .catch(error => {
                        console.log(error);
                        alert('An error occurred while creating the chat room.');
                    });
            });
        });
    </script>
 @yield('scripts')
</body>

</html>
