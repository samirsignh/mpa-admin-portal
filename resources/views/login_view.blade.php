<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from akademi.dexignlab.com/php/demo/page-login.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2024 16:35:45 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- PAGE TITLE HERE -->
    <title>Login - Murmugao Port Authority, Goa</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Dexignlabs">
    <meta name="robots" content="index, follow">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="og:image" content="../social-image.png">
    <meta name="format-detection" content="telephone=no">
    <meta name="twitter:title"
        content="Akademi - PHP School and Education Management Admin Dashboard Bootstrap Template">
    <meta name="twitter:image" content="../social-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/mpa_logo.jpeg') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('css/customeStyle.css') }}"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .brand-logo {
            max-width: 85px;
            border-radius: 50%;
        }

        .fs-13 {
            font-size: 1rem !important;
        }

        .company-name {
            width: 100%;
        }

        .text-primary {
            font-weight: 600;
        }
    </style>
</head>

<body class="body  h-100">
    <div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="login-aside text-center  d-flex flex-column flex-row-auto">
            <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15 mb-2">
                <div class="text-center mb-lg-4 mb-2 pt-5 logo">
                    <img class="brand-logo" src="{{ asset('images/mpa_logo.jpeg') }}" alt="">
                </div>
                <h3 class="mb-2 text-white">Welcome back!</h3>
                {{-- <p class="mb-4">User Experience & Interface Design <br>Strategy SaaS Solutions</p> --}}
            </div>
            <div class="aside-image position-relative" style="background-image:url(../images/background/ship.png);">
                {{-- <img class="img1 move-1" src="{{ asset('images/background/pic3.png') }}" alt="background-img">
                <img class="img2 move-2" src="{{ asset('images/background/pic4.png') }}" alt="background-img">
                <img class="img3 move-3" src="{{ asset('images/background/pic5.png') }}" alt="background-img"> --}}

            </div>
        </div>
        <div
            class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
            <div class="d-flex justify-content-center h-100 align-items-center">
                <div class="authincation-content style-2">
                    <div class="row no-gutters">
                        <div class="col-xl-12 tab-content">
                            <div id="sign-up" class="auth-form tab-pane fade show active  form-validation">
                                <form action="{{ route('dashboard') }}">
                                    <div class="text-center mb-2">
                                        <h3 class="text-center mb-1 text-black">Sign In</h3>
                                        <span>to your account</span>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-xl-12 col-12">
                                            <img class="company-name" src="{{ asset('images/mpalogo.PNG') }}"
                                                alt="company-name">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1"
                                            class="form-label mb-2 fs-13 label-color font-w500">Email address</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            value="hello@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1"
                                            class="form-label mb-2 fs-13 label-color font-w500">Password</label>
                                        <input type="password" class="form-control" id="exampleFormControlInput2"
                                            value="Password">
                                    </div>
                                    <a href="javascript:void(0);" class="text-primary float-end mb-4">Forgot Password
                                        ?</a>
                                    <button class="btn btn-block btn-primary">Sign In</button>

                                </form>
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
    <script>
        var enableSupportButton = '1'
    </script>
    <script>
        var asset_url = 'assets/'
    </script>

    <script src="{{ asset('js/global.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>

</body>

<!-- Mirrored from akademi.dexignlab.com/php/demo/page-login.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2024 16:35:47 GMT -->

</html>
