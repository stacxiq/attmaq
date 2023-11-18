<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords"
        content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@400;700&display=swap"
        rel="stylesheet">
    <title> مقراه العتبه العباسية </title>

    <link href="{{ asset('admin/css/icons.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>
    <!--  Right-sidemenu css -->
    <link href="{{ asset('admin/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!-- Sidemenu css -->
    <link rel="stylesheet" href="{{ asset('admin/css-rtl/sidemenu.css') }}">

    <!--  Custom Scroll bar-->
    <link href="{{ asset('admin/plugins/mscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />

    <!--  Left-Sidebar css -->
    <link rel="stylesheet" href="{{ asset('admin/css/sidemenu.css') }}">


    <!--- Style css --->
    <link href="{{ asset('admin/css-rtl/style.css') }}" rel="stylesheet">

    <!--- Dark-mode css --->
    <link href="{{ asset('admin/css-rtl/style-dark.css') }}" rel="stylesheet">

    <!---Skinmodes css-->
    <link href="{{ asset('admin/css-rtl/skin-modes.css') }} " rel="stylesheet" />

    <!--- Animations css-->
    <link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet">

    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        span,
        p,
        label,
        input,
        button,
        li {
            font-family: 'IBM Plex Sans Arabic', sans-serif;
        }

        .side-menu__label {
            font-family: 'IBM Plex Sans Arabic', sans-serif;

        }

        .side-item .side-item-category {
            font-family: 'IBM Plex Sans Arabic', sans-serif;

        }
    </style>

</head>

<body class="main-body app sidebar-mini">

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('admin/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->


    <div class="page">
        @include('teacher.layouts.sidebar')
        <div class="main-content app-content">
            <!-- main-header opened -->
            <div class="main-header sticky side-header nav nav-item">
                <div class="container-fluid">
                    <div class="main-header-left ">

                        <div class="app-sidebar__toggle" data-toggle="sidebar">
                            <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
                            <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
                        </div>

                    </div>
                    <div class="main-header-right">

                        <div class="nav nav-item  navbar-nav-right ml-auto">

                            <div class="nav-item full-screen fullscreen-button">
                                <a class="new nav-link full-screen-link" href="#"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-maximize">
                                        <path
                                            d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                                        </path>
                                    </svg></a>
                            </div>

                            <div class="nav-item">
                                <a class="new nav-link full-screen-link" href="{{ route('teacher.logout') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                    </svg>
                                </a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- container opened -->
            <div class="container-fluid w-100">

                @if ($errors->any())

                    @foreach ($errors->all() as $error)
                        <br>
                        <div class="alert alert-danger mg-b-0" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>{{ $error }}</strong>
                        </div>
                    @endforeach

                @endif
                @yield('main-content')
            </div>
        </div>
        <!-- Container closed -->

        <!-- Sidebar-right-->
        <!--/Sidebar-right-->

        <!-- Message Modal -->


        <!-- Footer opened -->
        <div class="main-footer ht-40">
            <div class="container-fluid pd-t-0-f ht-100p">
                <span> مقرآة العتبه العباسية </span>
            </div>
        </div>
        <!-- Footer closed -->

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!-- JQuery min js -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!--Internal  Chart.bundle js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js"></script>
    <!-- Ionicons js -->
    <script src="{{ asset('admin/plugins/ionicons/ionicons.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('admin/plugins/moment/moment.js') }}"></script>

    <!--Internal Sparkline js -->
    <script src="{{ asset('admin/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('admin/plugins/raphael/raphael.min.js') }}"></script>

    <!--Internal  Flot js-->
    <script src="{{ asset('admin/plugins/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery.flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery.flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard.sampledata.js') }}"></script>

    <!-- Custom Scroll bar Js-->
    <script src="{{ asset('admin/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!-- Rating js-->
    <script src="{{ asset('admin/plugins/rating/jquery.rating-stars.js') }} "></script>
    <script src="{{ asset('admin/plugins/rating/jquery.barrating.js') }}"></script>



    <!-- Eva-icons js -->
    <script src="{{ asset('admin/js/eva-icons.min.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('admin/js/sticky.js') }} "></script>
    <script src="{{ asset('admin/js/modal-popup.js') }} "></script>

    <!-- Left-menu js-->
    <script src="{{ asset('admin/plugins/side-menu/sidemenu.js') }} "></script>


    <!--Internal  index js -->
    <script src="{{ asset('admin/js/index.js') }}"></script>

    <!-- Apexchart js-->

    <script src="{{ asset('admin/js/custom.js') }}"></script>


</body>

</html>
