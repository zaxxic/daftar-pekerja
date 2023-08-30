<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>Mischool</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png')}}" href="{{ asset('assets/favicon.ico') }}" />
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('assets/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('assets/dist/libs/sweetalert2/dist/sweetalert2.min.css') }}">
    <link id="themeColors" rel="stylesheet" href="{{ asset('assets/dist/css/style.min.css') }}" />
    <link id="themeColors" rel="stylesheet" href="{{ asset('assets/dist/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/dist/libs/prismjs/themes/prism-okaidia.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dist/libs/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/libs/sweetalert2/dist/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @yield('style')
</head>

<body>
    <!-- Preloader -->
    <!-- <div class="preloader">
        <img src="{{ asset('logo.png') }}" alt="loader" class="lds-ripple img-fluid animate-bounce" />
    </div> -->
    <!-- Preloader -->
    <!-- <div class="preloader">
        <img src="{{ asset('logo.png') }}" alt="loader" class="lds-ripple img-fluid animate-bounce" />
    </div> -->
    <!--  Body Wrapper -->
    <!-- <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed"> -->

    <div class="body-wrapper">
        <!--  Header Start -->
        @include('layouts.header')
        <!--  Header End -->
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    </div>
    <!--  Mobilenavbar -->
    @include('layouts.mobile-navbar')
    <!--  Customizer -->
    <!--  Import Js Files -->
    <script src="{{ asset('assets/dist/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!--  core files -->
    <script src="{{ asset('assets/dist/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/app.init.js') }}"></script>
    <script src="{{ asset('assets/dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('assets/dist/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/dist/js/custom.js') }}"></script>
    <!--  current page js files -->
    <script src="{{ asset('assets/dist/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/dashboard.js') }}"></script>

    <script src="{{ asset('assets/dist/js/custom.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/jquery-steps/build/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/forms/form-wizard.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/forms/select2.init.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/plugins/repeater-init.js') }}"></script>
    <script src="{{ asset('assets/dist/js/apps/chat.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/widgets-charts.js') }}"></script>
    <script src="{{ asset('assets/dist/js/dashboard5.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/apex-chart/apex.pie.init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>


    @yield('script')
</body>

</html>

{{-- <script src="{{ asset('assets/dist/libs/jquery.repeater/jquery.repeater.min.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/dist/js/plugins/repeater-init.js') }}"></script> --}}
