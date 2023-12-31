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


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/logo.png') }}" />
    <!-- Title -->
    <title>Halaman Utama</title>
    <style>
        .highlight-box {
            display: inline-block;
            width: 10px;
            height: 10px;
            background-color: #5d87ff;
            margin-right: 5px;
            vertical-align: middle;
        }

        .border {

        }

        .border.border::hover {

        }

        @media (max-width: 600px) {

            .atas {
                display: none;
            }
        }

        @media (min-width: 768px) {

            .atass {
                display: none;
            }
        }
    </style>
</head>

<body>

    <!-- Start Header Area -->
    <header class="header-area mb-5">
        <!-- Start Top Header -->
        <!-- Start Top Header -->
        <div class="top-header atas">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <ul class="header-left-content">
                            <li>
                                <a class="navbar-brand">
                                    <img width="180px" src="{{ asset('assets/hummatech.png') }}" alt="logo">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="header-right-content">
                            <ul class="log-in">
                                @auth
                                    <li>
                                        <a href="{{ route('login') }}" style="padding-left: 10px; padding-right: 10px; padding-top: 5px; padding-bottom: 8px;">
                                            <i class="bx bxs-dashboard"></i>
                                            Dashboard
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('login') }}" style="padding-left: 10px; padding-right: 10px; padding-top: 5px; padding-bottom: 8px;">
                                            <i class="bx bxs-lock"></i>
                                            Log In
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('register') }}" style="padding-left: 10px; padding-right: 10px; padding-top: 5px; padding-bottom: 8px;">
                                            <i class="bx bxs-user"></i>
                                            Register
                                        </a>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!-- Start Navbar Area -->
        <!-- Start Navbar Area -->
        <div class="navbar-area atass">
            <div class="mobile-nav">
                <div class="container">
                    <div class="mobile-menu">
                        <div class="logo">
                            <a>
                                <img src="{{ asset('assets/hummatech.png') }}" alt="logo">
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
                <div class="container align-items-end" style="margin-right: -50px;">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>

                    <div class="container me-5 mr-5" style="margin-right: 50px;">
                        <div class="option-inner" style="margin-right: 50px;">
                            <div class="others-option justify-content-center d-flex align-items-center"
                                style="margin-left: 10px;">
                                <div class="get-quote">
                                    <ul>
                                        @auth
                                            <li style="list-style-type: none;">
                                                <a href="{{ route('login') }}">
                                                    Dashboard
                                                </a>
                                            </li>
                                        @else
                                            <li style="list-style-type: none;" class="mb-3">
                                                <a href="{{ route('login') }}">

                                                    Log In
                                                </a>
                                            </li>
                                            <li style="list-style-type: none;">
                                                <a href="{{ route('register') }}">

                                                    Register
                                                </a>
                                            </li>
                                        @endauth
                                    </ul>

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
                            <div class="banner-content fs-5">
                                <h1>Kembangkan Karir Anda Bersama Kami</h1>
                                <p>Lebih dari 1000++ Orang Telah Bergabung</p>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="banner-img">
                                <img src="assets1/images/Ip.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->


    <!-- Start Who We Are Area -->
    <section class="who-we-are-page mt-5" class="gambar">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="who-we-are-img">
                        <img src="assets1/images/who-we-are-img.png" class="d-sm-block d-md-block" alt="Image"
                            width="400px;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="who-we-are-content">
                        <div class="container">
                            <div class="row">
                                <h2 class="fw-bold">Tentang Kami</h2>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div>
                                    <h4 class="text-primary">Hummatech Digital Indonesia
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <p>Hummasoft merupakan sebuah perusahaan yang bergerak dibidang IT (Information Technology) yang
                            memiliki beberapa divisi layanan, diantaranya: Software Development (Website Application,
                            Desktop Application, and Mobile Application), IT Course, IT Training, IT Research, and IT
                            Services.</p>

                        <p>
                            Hummasoft berdiri sejak 21 Mei 2013. Perusahaan Hummasoft ini dibawah naungan badan usaha
                            yang bernama Hummasoft Komputindo dan kemudian beralih menjadi Hummasoft Technology pada
                            Oktober 2019. Proyek-proyek perangkat lunak yang telah dikerjakan oleh perusahaan kami ini
                            dalam lingkup perorangan, perusahaan, instansi sekolah, bahkan lembaga pemerintahan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Who We Are Area -->

    <!-- Start Working Area -->
    <section class="working-area bg-color pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Bagaimana Alur Kerja Hummatech</h2>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-working">
                        <i class="flaticon-find-my-friend"></i>
                        <h3>Daftarkan Diri</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-working">
                        <i class="flaticon-company"></i>
                        <h3>Menunggu Di terima</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-working">
                        <i class="flaticon-salary"></i>
                        <h3>Mengerjakan Project</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-working">
                        <i class="flaticon-submit"></i>
                        <h3>Terima Gaji Projek</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Working Area -->

    <!-- Start Global Talent Area -->

    <!-- End Global Talent Area -->

    <!-- Start Testimonials Area -->


    <!-- Start Footer Area -->
    <div class="container">
        <div class="row">
            <div class="col">
                <footer class="footer-area pt-100 pb-70" style="direction: ltr;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="single-footer-widget single-bg">
                                    <a class="logo" href="index.html">
                                        <img width="180px" src="{{ asset('assets/hummatech.png') }}"
                                            alt="logo">
                                    </a>
                                    <p>Hummasoft merupakan sebuah perusahaan yang bergerak dibidang IT (Information
                                        Technology).</p>

                                    <ul class="social-icon">
                                        <li>
                                            <a href="https://www.facebook.com/hummasoft?locale=id_ID" target="_blank">
                                                <i class="bx bxl-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/hummasoft" target="_blank">
                                                <i class="bx bxl-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://id.linkedin.com/in/hummasoft-technology-2476a8241"
                                                target="_blank">
                                                <i class="bx bxl-linkedin-square"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/hummasoft">
                                                <i class="bx bxl-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="single-footer-widget">
                                    <h3>Kontak</h3>

                                    <ul class="mb-3" style="direction: ltr;">
                                        <li style="direction: ltr;" class="mb-3">
                                            <i class="bx bx-phone-call"></i>
                                            <span>Telepon:</span>
                                            <a href="tel:+1-(514)-7939-357">(+62)821 3256 0566</a>
                                        </li>
                                        <li class="mb-3" s>
                                            <i class="bx bx-envelope"></i>
                                            <span>Email:</span>
                                            <a
                                                ><span
                                                    class="__cf_email__"
                                                    data-cfemail="f098959c9c9fb09a859299de939f9d">hummatechcareer@gmail.com</span></a>
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
                                    <h3>Layanan Kami</h3>

                                    <ul class="import-link">
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <div class="highlight-box"></div>
                                                </div>
                                                <a>Kelas Industri</a>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <div class="highlight-box"></div>
                                                </div>
                                                <a>Pengembangan Perangkat Lunak</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <div class="highlight-box"></div>
                                                </div>
                                                <a>Pelatihan Upskilling/Reskilling Berbasis Industri</a>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <div class="highlight-box"></div>
                                                </div>
                                                <a>Riset dan Intership/Magang</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="single-footer-widget">
                                    <h3>Benefit Kami</h3>

                                    <ul class="import-link">
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <div class="highlight-box"></div>
                                                </div>
                                                <a>Lingkungan Kerja Berbasis Proyek dan Teamwork</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <div class="highlight-box"></div>
                                                </div>
                                                <a>Memperluas Jejaring / Networking IT</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <div class="highlight-box"></div>
                                                </div>
                                                <a>Menambah Pengalaman dan Portofolio</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <div class="highlight-box"></div>
                                                </div>
                                                <a>Proyek Skala Nasional dan Internasional</a>
                                            </div>
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
