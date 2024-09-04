<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from workload.dexignlab.com/codeigniter/demo/page-lock-screen by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2024 06:37:51 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="Workload - CodeIgniter Project Management Admin Dashboard Template" />
    <meta property="og:title" content="Workload - CodeIgniter Project Management Admin Dashboard Template" />
    <meta property="og:description" content="Workload - CodeIgniter Project Management Admin Dashboard Template" />
    <meta property="og:image" content="../social-image.html" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Login :: OTP Verification</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/mpa_logo.jpeg') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .toast {
            min-width: 350px;
        }

        .authincation {
            background: #F8F8F8;
        }

        .auth-form {
            padding: 2rem 2rem;
        }

        .brand-logo {
            max-width: 85px;
            border-radius: 50%;
        }

        .auth-form {
            border-top: 5px solid #E8211A;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .btn {
            font-size: 1rem;
            padding: 5px 0px;
            letter-spacing: 0.5px;
        }

        #otp_timer {
            font-size: 12px;
        }

        label {
            color: black;
            font-size: 15px;
        }

        #resend_btn {
            margin-left: 35%;
            font-size: 14px;
            padding: 6px 30px;
        }

        @media(max-width: 345px {
                margin-left: 26%;
            })
    </style>
</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="javascript:;"><img class="brand-logo"
                                                src="{{ asset('images/mpa_logo.jpeg') }}" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-2">
                                        <span id="otp_timer">OTP will expire in : <span id="countdown"> </span></span>
                                        <button id="resend_btn" type="button"
                                            class="btn btn-rounded btn-outline-success" style="display: none">Resend
                                            OTP</button>
                                    </h4>
                                    <form action="{{ route('validateUserOtp') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label><strong>OTP</strong></label>
                                            <input type="text" class="form-control" name="userOtp" id="userOtp"
                                                placeholder="Enter otp" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Verify OTP</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
	Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('js/global.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>

    <script>
        var timeLeft = 1 * 60;

        function formatTime(seconds) {
            const minutes = Math.floor(seconds / 60);
            const remainingSeconds = seconds % 60;
            return `${minutes.toString().padStart(2, '0')}:${remainingSeconds.toString().padStart(2, '0')}`;
        }

        function updateTimer() {
            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                document.getElementById('countdown').innerHTML = "00:00";
                document.getElementById('otp_timer').style.display = 'none'; // Hide the timer
                document.getElementById('resend_btn').style.display = 'block'; // Show the resend button
            } else {
                document.getElementById('countdown').innerHTML = formatTime(timeLeft);
                timeLeft--;
            }
        }

        var timerInterval = setInterval(updateTimer, 1000);
        updateTimer();

        document.getElementById('resend_btn').addEventListener('click', function() {
            // Reset the timer
            timeLeft = 1 * 60;
            document.getElementById('resend_btn').style.display = 'none';
            document.getElementById('otp_timer').style.display = 'block';
            timerInterval = setInterval(updateTimer, 1000);
            updateTimer();
        });


        document.getElementById('resend_btn').addEventListener('click', function() {
            // Make AJAX request to resend OTP
            $.ajax({
                url: '{{ route("resendOtp") }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    if (response.success) {
                        timeLeft = 1 * 60;
                        document.getElementById('resend_btn').style.display = 'none';
                        document.getElementById('otp_timer').style.display = 'block';
                        timerInterval = setInterval(updateTimer, 1000);
                        updateTimer();
                        toastr.success(response.message);
                    }
                },
                error: function(xhr) {
                    document.getElementById('resend_btn').style.display = 'block';
                    document.getElementById('otp_timer').style.display = 'none';
                    toastr.error('Failed to resend OTP. Please try again.');
                }
            });
        });

    </script>

    <script>
        // Toastr configuration
            toastr.options = {
                "closeButton": true,             // Enable close button
                "progressBar": true,             // Enable progress bar
                "positionClass": "toast-top-center", // Position of the toastr
                "showDuration": "300",           // Show animation duration
                "hideDuration": "1000",          // Hide animation duration
                "timeOut": "5000",               // Time to show the toastr
                "extendedTimeOut": "1000",       // Time to keep the toastr after hover
                "showEasing": "swing",           // Easing for show animation
                "hideEasing": "linear",          // Easing for hide animation
                "showMethod": "fadeIn",          // Show animation method
                "hideMethod": "fadeOut"          // Hide animation method
            };

            @if (session('success'))
                toastr.success("{{ session('success') }}");
            @endif
            @if(session('error'))
                toastr.error("{{ session('error') }}");
            @endif
    </script>
</body>

<!-- Mirrored from workload.dexignlab.com/codeigniter/demo/page-lock-screen by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2024 06:37:51 GMT -->

</html>