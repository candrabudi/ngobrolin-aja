<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Login | Ngobrol Yuk</title>

    <link rel="shortcut icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/1711/1711178.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <style>
        .toast {
            position: fixed;
            background-color: #ff4444;
            color: white;
        }

        .custom-toast {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>

<body class="login-form">

    <div class="main-wrapper register-surv">
        <div class="container-fluid">
            <div class="login-wrapper">
                <header class="logo-header">
                    <a href="index.html" class="logo-brand">
                        <img src="{{ asset('assets/img/logo-chat.png') }}" width="50" alt="Logo"
                            class="img-fluid logo-dark">
                        <h5>Ngobrol Yuk</h5>
                    </a>
                </header>
                <div class="login-inbox">
                    <div class="log-auth">
                        <div class="login-auth-wrap">
                            <div class="login-content-head">
                                <h3>Login</h3>
                                <p>Hi Selamat Datang Kembali ke Ngobrol Yuk</p>
                            </div>
                        </div>
                        <form id="loginForm">
                            <div class="form-group">
                                <label class="form-label">Username <span>*</span></label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password <span>*</span></label>
                                <div class="pass-group">
                                    <input type="password" name="password" class="form-control pass-input" required>
                                    <span class="fas fa-eye toggle-password"></span>
                                </div>
                            </div>
                            <button type="submit"
                                class="btn btn-primary w-100 btn-size justify-content-center">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Success-group" aria-modal="true" role="dialog" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content success-group-wrap-list">
                <div class="modal-header">
                    <div id="modal-image" class="mx-auto">

                    </div>
                </div>
                <div class="modal-body mt-5">
                    <div class="success-header">
                        <h4 id="modal-title">Status</h4>
                        <p id="modal-message">Message</p>
                    </div>
                    <a class="btn btn-primary" id="modal-ok" data-bs-dismiss="modal" aria-label="Close">Ok</a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}" type="ebb18e95c6e8ad76e832abc0-text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="ebb18e95c6e8ad76e832abc0-text/javascript"></script>
    <script src="{{ asset('assets/js/script.js') }}" type="ebb18e95c6e8ad76e832abc0-text/javascript"></script>
    <script src="{{ asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="ebb18e95c6e8ad76e832abc0-|49" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#loginForm').on('submit', function(e) {
                e.preventDefault();

                axios.post('{{ route('login.process') }}', $(this).serialize(), {
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/x-www-form-urlencoded'
                        }
                    })
                    .then(function(response) {
                        if (response.data.status === 'success') {
                            $('#modal-image').html(
                                '<img src="https://cdn-icons-png.flaticon.com/512/6785/6785304.png" width="80" alt="Success" class="img-fluid">'
                            );
                            $('#modal-message').text(
                                'Kamu Berhasil Login, nikmati berbagai fitur chat dari Ngobrol Yuk'
                            );
                            $('#modal-title').text('Berhasil Login');
                        } else {
                            $('#modal-image').html(
                                '<img src="https://cdn-icons-png.flaticon.com/512/753/753345.png" width="80" alt="Error" class="img-fluid">'
                            );
                            $('#modal-message').text(response.data.message);
                            $('#modal-title').text('Gagal Login');
                        }
                        $('#Success-group').modal('show');
                        $('#modal-ok').one('click', function() {
                            if (response.data.status === 'success') {
                                window.location.href = '/chat';
                            }
                        });
                    })
                    .catch(function(error) {
                        $('#modal-image').html(
                            '<img src="https://cdn-icons-png.flaticon.com/512/753/753345.png" width="80" alt="Error" class="img-fluid">'
                        );
                        $('#modal-message').text(error.response.data.message);
                        $('#modal-title').text('Gagal Login');
                        $('#Success-group').modal('show');
                    });
            });
        });
    </script>

</body>

</html>
