<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets1/css/bootstrap.min.css') }}">
    <!-- Owl Theme Default Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets1/css/owl.theme.default.min.css') }}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets1/css/owl.carousel.min.css') }}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets1/css/animate.min.css') }}">
    <!-- Boxicons Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets1/css/boxicons.min.css') }}">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets1/css/magnific-popup.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets1/css/flaticon.css') }}">
    <!-- Meanmenu Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets1/css/meanmenu.min.css') }}">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets1/css/nice-select.min.css') }}">
    <!-- Odometer Min CSS-->
    <link rel="stylesheet" href="{{ asset('assets1/css/odometer.min.css') }}">
    <!-- Date Picker CSS-->
    <link rel="stylesheet" href="{{ asset('assets1/css/date-picker.min.css') }}">
    <!-- Muli Fonts Min CSS-->
    <link rel="stylesheet" href="{{ asset('assets1/css/muli-fonts.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets1/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets1/css/responsive.css') }}">
    <!-- Rtl CSS -->
    <link rel="stylesheet" href="{{ asset('assets1/css/rtl.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/dist/images/logo.png') }}" />
    <!-- Title -->
    <title>Halaman Utama</title>
</head>

<body>

    <!-- Start Header Area -->
    <header class="header-area">
        <!-- Start Top Header -->
        <!-- Start Top Header -->
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <ul class="header-left-content">
                            <li>
                                <a class="navbar-brand" href="index.html">
                                    <img width="180px" src="assets1/images/humma.png" alt="logo">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="header-right-content">
                            <ul class="log-in">
                                <li>
                                    <a href="log-in-register.html">
                                        <i class="bx bxs-lock"></i>
                                        Log In
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('register') }}">
                                        <i class="bx bxs-user"></i>
                                        Register
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="mobile-nav">
                <div class="container">
                    <div class="mobile-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets1/images/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="option-inner">
                            <div class="others-option justify-content-center d-flex align-items-center">
                                <div class="get-quote">
                                    <a href="post-job.html" class="default-btn">
                                        Daftar Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
    </header>
    <!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area mb-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row align-items-center mt-3">
                        <div class="col-lg-7">
                            <div class="banner-content">
                                <h1>Kembangkan Karir Anda Bersama Kami</h1>
                                <p>Lebih dari 1000++ Orang Telah Bergabung</p>



                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="banner-img">
                                <img src="assets1/images/banner/banner-img.png" alt="Image">

                                <div class="video-content">
                                    <a href="https://www.youtube.com/watch?v=BVnMXNW_grk" class="popup-youtube">
                                        <i class="flaticon-play-button-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!-- Start Who We Are Area -->
    <section class="who-we-are-page mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="who-we-are-img">
                        <img src="assets1/images/who-we-are-img.png" alt="Image" width="400px;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="who-we-are-content">
                        <div class="container">
                            <div class="row" style="margin-right: 350px;">
                                <h2 class="fw-bold">Tentang Kami</h2>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <h4 style="margin-right: 280px;" class="text-primary">Hummatech Technology</h4>

                            </div>
                        </div>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                            no sea
                            takimata sanctus est Lorem ipsum dolor sit amet. consetetur sadipscing elitr, sed
                            diam nonumy
                            eirmod tempor invidunt labore et dolore magna aliquyam erat, sed diam voluptua.</p>

                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="who-we-are-single-item">
                                    <h3>What we believe</h3>
                                    <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod
                                        tempor
                                        incididunt.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="who-we-are-single-item">
                                    <h3>What We Offer</h3>
                                    <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod
                                        tempor
                                        incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Testimonials Area -->
    <section class="testimonials-area pb-100 mt-5">
        <div class="container">
            <div class="row align-items-center mt-5">
                <div class="col-lg-5">
                    <div class="testimonials-img">
                        <img src="{{ asset('assets1/images/testimonials/testimonials-img.png') }}" alt="Image">

                        <h3>Testimonials</h3>

                        <div class="testimonials-1">
                            <img src="{{ asset('assets1/images/testimonials/testimonials-1.jpg') }}" alt="Image">
                        </div>

                        <div class="testimonials-2">
                            <img src="{{ asset('assets1/images/testimonials/testimonials-2.jpg') }}" alt="Image">
                        </div>

                        <div class="testimonials-3">
                            <img src="{{ asset('assets1/images/testimonials/testimonials-3.jpg') }}" alt="Image">
                        </div>

                        <div class="testimonials-4">
                            <img src="{{ asset('assets1/images/testimonials/testimonials-4.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="testimonials">
                        <div class="testimonials-slider owl-carousel owl-theme">
                            <div class="testimonials-item">
                                <i class="flaticon-quote"></i>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida. Risus
                                    viverra maecenas accumsan lacus vel facilisis.”</p>

                                <h3>Allan norris</h3>
                                <span>Software Engineer</span>
                            </div>

                            <div class="testimonials-item">
                                <i class="flaticon-quote"></i>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida. Risus
                                    viverra maecenas accumsan lacus vel facilisis.”</p>

                                <h3>Tammie King</h3>
                                <span>Founder</span>
                            </div>

                            <div class="testimonials-item">
                                <i class="flaticon-quote"></i>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida. Risus
                                    viverra maecenas accumsan lacus vel facilisis.”</p>

                                <h3>Juhon Anderson</h3>
                                <span>Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Footer Area -->
    <div class="container">
        <div class="row">
            <div class="col">
                <footer class="footer-area pt-100 pb-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="single-footer-widget single-bg">
                                    <a class="logo" href="index.html">
                                        <img width="180px" src="assets1/images/humma.png" alt="logo">
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua consec tetur.</p>

                                    <ul class="social-icon">
                                        <li>
                                            <a href="#">
                                                <i class="bx bxl-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bx bxl-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bx bxl-linkedin-square"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bx bxl-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="single-footer-widget">
                                    <h3>Kontak</h3>

                                    <ul class="address">
                                        <li>
                                            <i class="bx bx-phone-call"></i>
                                            <span>Telepon:</span>
                                            <a href="tel:+1-(514)-7939-357">(+62)821 3256 0566</a>
                                        </li>
                                        <li>
                                            <i class="bx bx-envelope"></i>
                                            <span>Email:</span>
                                            <a
                                                href="https://templates.envytheme.com/cdn-cgi/l/email-protection#80e8e5ececefc0eaf5e2e9aee3efed"><span
                                                    class="__cf_email__"
                                                    data-cfemail="f098959c9c9fb09a859299de939f9d">hummasoft.tech@gmail.com</span></a>
                                        </li>
                                        <li class="location">
                                            <i class="bx bx-location-plus"></i>
                                            <span>Alamat:</span>
                                            Perum Permata Regency 1 blok 10 no 28 Ngijo Karangploso Malang
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="single-footer-widget">
                                    <h3>Helpful Resources</h3>

                                    <ul class="import-link">
                                        <li>
                                            <a href="#">Create Account</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Site Map</a>
                                        </li>
                                        <li>
                                            <a href="#">Terms of Use</a>
                                        </li>
                                        <li>
                                            <a href="#">Privacy Centre</a>
                                        </li>
                                        <li>
                                            <a href="#">Blog</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="single-footer-widget">
                                    <h3>Job Seekers</h3>

                                    <ul class="import-link">
                                        <li>
                                            <a href="#">Create Account</a>
                                        </li>
                                        <li>
                                            <a href="#">Browse Jobs</a>
                                        </li>
                                        <li>
                                            <a href="#">Upload CV</a>
                                        </li>
                                        <li>
                                            <a href="#">Company Profile</a>
                                        </li>
                                        <li>
                                            <a href="#">International Jobs</a>
                                        </li>
                                        <li>
                                            <a href="#">FAQ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <!-- End Footer Area -->

    <!-- Start Copy Right Area -->
    <div class="copy-right-area">
        <div class="container">
            <p>
                © 2023 Hummatech Technology Created By
                <a href="https://envytheme.com/" target="_blank">Eternal Glory</a>
            </p>
        </div>
    </div>
    <!-- End Copy Right Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="bx bx-chevrons-up"></i>
        <i class="bx bx-chevrons-up"></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Jquery Min JS -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets1/js/jquery.min.js') }}"></script>
    <!-- Popper Min JS -->
    <script src="{{ asset('assets1/js/popper.min.js') }}"></script>
    <!-- Bootstrap Min JS -->
    <script src="{{ asset('assets1/js/bootstrap.min.js') }}"></script>
    <!-- Meanmenu Min JS -->
    <script src="{{ asset('assets1/js/meanmenu.min.js') }}"></script>
    <!-- Wow Min JS -->
    <script src="{{ asset('assets1/js/wow.min.js') }}"></script>
    <!-- Owl Carousel Min JS -->
    <script src="{{ asset('assets1/js/owl.carousel.min.js') }}"></script>
    <!-- Nice Select Min JS -->
    <script src="{{ asset('assets1/js/nice-select.min.js') }}"></script>
    <!-- Magnific Popup Min JS -->
    <script src="{{ asset('assets1/js/magnific-popup.min.js') }}"></script>
    <!-- Mixitup JS -->
    <script src="{{ asset('assets1/js/jquery.mixitup.min.js') }}"></script>
    <!-- Appear Min JS -->
    <script src="{{ asset('assets1/js/appear.min.js') }}"></script>
    <!-- Odometer Min JS -->
    <script src="{{ asset('assets1/js/odometer.min.js') }}"></script>
    <!-- Range Slider Min JS -->
    <script src="{{ asset('assets1/js/range-slider.min.js') }}"></script>
    <!-- Datepicker Min JS -->
    <script src="{{ asset('assets1/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- Form Validator Min JS -->
    <script src="{{ asset('assets1/js/form-validator.min.js') }}"></script>
    <!-- Contact JS -->
    <script src="{{ asset('assets1/js/contact-form-script.js') }}"></script>
    <!-- Ajaxchimp Min JS -->
    <script src="{{ asset('assets1/js/ajaxchimp.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets1/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
<!-- End Testimonials Area -->
<!-- End Who We Are Area -->

<!-- Start Working Area -->

<!-- End Working Area -->

<!-- Start Global Talent Area -->

<!-- End Global Talent Area -->

<!-- Start Testimonials Area -->

<!-- End Testimonials Area -->