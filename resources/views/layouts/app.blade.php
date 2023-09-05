<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>Dashboard-Admin</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{asset('assets1/css/bootstrap.min.css')}}">
    <!-- Owl Theme Default Min CSS -->
    <link rel="stylesheet" href="{{asset('assets1/css/owl.theme.default.min.css')}}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{asset('assets1/css/owl.carousel.min.css')}}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{asset('assets1/css/animate.min.css')}}">
    <!-- Boxicons Min CSS -->
    <link rel="stylesheet" href="{{asset('assets1/css/boxicons.min.css')}}">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="{{asset('assets1/css/magnific-popup.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('assets1/css/flaticon.css')}}">
    <!-- Meanmenu Min CSS -->
    <link rel="stylesheet" href="{{asset('assets1/css/meanmenu.min.css')}}">
    <!-- Nice Select Min CSS -->
    <!-- <link rel="stylesheet" href="{{asset('assets1/css/nice-select.min.css')}}"> -->
    <!-- Odometer Min CSS-->
    <link rel="stylesheet" href="{{asset('assets1/css/odometer.min.css')}}">
    <!-- Date Picker CSS-->
    <link rel="stylesheet" href="{{asset('assets1/css/date-picker.min.css')}}">
    <!-- Muli Fonts Min CSS-->
    <link rel="stylesheet" href="{{asset('assets1/css/muli-fonts.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets1/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets1/css/responsive.css')}}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/dist/images/logo.png') }}" />
    <!-- Title -->
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png')}}" href="{{ asset('assets/logo.png') }}" />
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('assets/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('assets/dist/libs/sweetalert2/dist/sweetalert2.min.css') }}">
    <link id="themeColors" rel="stylesheet" href="{{ asset('assets/dist/css/style.min.css') }}" />
    <link id="themeColors" rel="stylesheet" href="{{ asset('assets/dist/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/dist/libs/prismjs/themes/prism-okaidia.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/libs/sweetalert2/dist/sweetalert2.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">

    @yield('style')
</head>

<body>


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
    <script src="{{ asset('assets/dist/js/forms/sweet-alert.init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

    <!-- Jquery Min JS -->
    <script data-cfasync="false" src="{{asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{asset('assets1/js/jquery.min.js')}}"></script>
    <!-- Popper Min JS -->
    <script src="{{asset('assets1/js/popper.min.js')}}"></script>
    <!-- Bootstrap Min JS -->
    <script src="{{asset('assets1/js/bootstrap.min.js')}}"></script>
    <!-- Meanmenu Min JS -->
    <script src="{{asset('assets1/js/meanmenu.min.js')}}"></script>
    <!-- Wow Min JS -->
    <script src="{{asset('assets1/js/wow.min.js')}}"></script>
    <!-- Owl Carousel Min JS -->
    <script src="{{asset('assets1/js/owl.carousel.min.js')}}"></script>
    <!-- Nice Select Min JS -->
    <!-- <script src="{{asset('assets1/js/nice-select.min.js')}}"></script> -->
    <!-- Magnific Popup Min JS -->
    <script src="{{asset('assets1/js/magnific-popup.min.js')}}"></script>
    <!-- Mixitup JS -->
    <script src="{{asset('assets1/js/jquery.mixitup.min.js')}}"></script>
    <!-- Appear Min JS -->
    <script src="{{asset('assets1/js/appear.min.js')}}"></script>
    <!-- Odometer Min JS -->
    <script src="{{asset('assets1/js/odometer.min.js')}}"></script>
    <!-- Range Slider Min JS -->
    <script src="{{asset('assets1/js/range-slider.min.js')}}"></script>
    <!-- Datepicker Min JS -->
    <script src="{{asset('assets1/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- Form Validator Min JS -->
    <script src="{{asset('assets1/js/form-validator.min.js')}}"></script>
    <!-- Contact JS -->
    <script src="{{asset('assets1/js/contact-form-script.js')}}"></script>
    <!-- Ajaxchimp Min JS -->
    <script src="{{asset('assets1/js/ajaxchimp.min.js')}}"></script>
    <!-- Custom JS -->
    <script src="{{asset('assets1/js/custom.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        CKEDITOR.replace('content');
    </script>

    @yield('script')
</body>

</html>

{{-- <script src="{{ asset('assets/dist/libs/jquery.repeater/jquery.repeater.min.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/dist/js/plugins/repeater-init.js') }}"></script> --}}
