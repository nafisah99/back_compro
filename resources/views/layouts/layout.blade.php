<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless </title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="{!! asset('theme/css/icons/icomoon/styles.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('theme/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('theme/css/bootstrap_limitless.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('theme/css/layout.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('theme/css/components.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('theme/css/colors.min.css') !!}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{!! asset('theme/js/main/jquery.min.js') !!}"></script>
    <script src="{!! asset('theme/js/main/bootstrap.bundle.min.js') !!}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{!! asset('theme/js/plugins/prism.min.js') !!}"></script>
    <script src="{!! asset('theme/js/plugins/sticky.min.js') !!}"></script>

    <script src="{!! asset('theme/js/main/app.js') !!}"></script>
    <script src="{!! asset('theme/js/pages/components_scrollspy.js') !!}"></script>
    <!-- /theme JS files -->

</head>

<body data-spy="scroll" data-target=".sidebar-component-right">

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-light">
        <div class="navbar-header navbar-dark d-none d-md-flex align-items-md-center">
            <div class="navbar-brand navbar-brand-md">
                <a href="index.html" class="d-inline-block">
                    <img src="{!! asset('theme/images/logo_light.png') !!}" alt="">
                </a>
            </div>

            <div class="navbar-brand navbar-brand-xs">
                <a href="index.html" class="d-inline-block">
                    <img src="{!! asset('theme/images/logo_icon_light.png') !!}" alt="">
                </a>
            </div>
        </div>

        <div class="d-flex flex-1 d-md-none">
            <div class="navbar-brand mr-auto">
                <a href="index.html" class="d-inline-block">
                    <img src="{!! asset('theme/images/logo_dark.png') !!}" alt="">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-component-toggle" type="button">
                <i class="icon-unfold"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-hide d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-component-toggle d-none d-md-block">
                        <i class="icon-transmission"></i>
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-md-auto">
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                Navigation
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->


            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Support -->
                <div class="card card-body">
                    Welcome
                </div>
                <!-- /support -->


                <!-- Main navigation -->
                @include('layouts.side')
                <!-- /main navigation -->

            </div>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header">
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content pt-0">
                    @yield('content')
                </div>
                <!-- /content area -->


                <!-- Footer -->
                @include('layouts.footer')
                <!-- /footer -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->
</body>

</html>