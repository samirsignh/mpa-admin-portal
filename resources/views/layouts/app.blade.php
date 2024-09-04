<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from akademi.dexignlab.com/php/demo/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2024 16:34:38 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <!-- PAGE TITLE HERE -->
    <title>Mormugao Port Authority, Goa</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="author" content="Dexignlabs">
    <meta name="robots" content="index, follow">
   
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="og:title" content="Akademi - PHP School and Education Management Admin Dashboard Bootstrap Template">
    <meta name="og:image" content="../social-image.png">
    <meta name="format-detection" content="telephone=no">
    <meta name="twitter:title"
        content="Akademi - PHP School and Education Management Admin Dashboard Bootstrap Template">
    <meta name="twitter:image" content="../social-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/mpa_logo.jpeg') }}">

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .toast {
            min-width: 350px;
        }

        .dlabnav {
            background-image: linear-gradient(45deg, #0d093a, transparent);
        }

        .footer {
            width: 100% !important;
        }
    </style>
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <div class="dots">
                <div class="dot mainDot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>

        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper" class="wallet-open active">

        <!--****************** Nav header start **************************-->
        @include('layouts.topNav')
        <!--********************* Nav header end *************************-->

        <!--************** Header start *************************-->
        @include('layouts.header')
        <!--****************** Header end ti-comment-alt *****************************-->

        <!--********************* Sidebar start ****************************-->
        @include('layouts.sidebar')
        <!--************************* Sidebar end ****************************-->

        <!--***********************Content body start*************************-->
        @yield('content')
        <!--*************************Content body end**********************-->

        <!--**********************************
			Footer start
		***********************************-->
        <div class="footer footer-outer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="javascript:;" target="_blank">iOTAS</a> 2024</p>
            </div>
        </div>
    </div>


    <!--**********************************
        Main wrapper end
    ***********************************-->

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('js/global.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/Chart.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/apexchart.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.peity.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/dashboard-1.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/datatables.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/moment.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/dlabnav-init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/demo.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    {{-- <script src="{{ asset('js/styleSwitcher.js') }}" type="text/javascript"></script> --}}
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right", // Center position
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if(session('error'))
            toastr.error("{{ session('error') }}");
        @endif

        // Display validation errors if available
        @if($errors->any())
        @foreach($errors->all() as $error)
        toastr.error("{{ $error }}");
        @endforeach
        @endif

    </script>
</body>

<!-- Mirrored from akademi.dexignlab.com/php/demo/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2024 16:35:19 GMT -->

</html>