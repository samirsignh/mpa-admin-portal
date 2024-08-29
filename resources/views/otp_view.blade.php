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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
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

        label {
            color: black;
            font-size: 15px;
        }
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
                                    <h4 class="text-center mb-4">Otp is sent to your registered email</h4>
                                    <form action="{{ route('dashboard') }}">
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
    <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
</body>

<!-- Mirrored from workload.dexignlab.com/codeigniter/demo/page-lock-screen by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2024 06:37:51 GMT -->

</html>
