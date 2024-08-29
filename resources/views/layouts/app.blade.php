<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from akademi.dexignlab.com/php/demo/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2024 16:34:38 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- PAGE TITLE HERE -->
    <title>Dashboard :: Mormugao Port Authority, Goa</title>
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
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
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

    <!--***********************************-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Recent Student title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label mb-2">Student Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="James">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput2" class="form-label mb-2">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput2"
                                    placeholder="hello@example.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label mb-2">Gender</label>
                                <select class="default-select wide" aria-label="Default select example">
                                    <option selected>Select Option</option>
                                    <option value="1">Male</option>
                                    <option value="2">Women</option>
                                    <option value="3">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput4" class="form-label mb-2">Entery Year</label>
                                <input type="number" class="form-control" id="exampleFormControlInput4"
                                    placeholder="EX: 2023">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput5" class="form-label mb-2">Student ID</label>
                                <input type="number" class="form-control" id="exampleFormControlInput5"
                                    placeholder="14EMHEE092">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput6" class="form-label mb-2">Phone Number</label>
                                <input type="number" class="form-control" id="exampleFormControlInput6"
                                    placeholder="+123456">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
		Modal
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
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
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
    {{-- <script src="{{ asset('js/styleSwitcher.js') }}" type="text/javascript"></script> --}}
</body>

<!-- Mirrored from akademi.dexignlab.com/php/demo/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2024 16:35:19 GMT -->

</html>
