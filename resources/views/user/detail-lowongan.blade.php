<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/jubi/rtl/employers-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Aug 2023 07:41:52 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <!-- Bootstrap Min CSS -->
        <link rel="stylesheet" href="assets1/css/bootstrap.min.css">
        <!-- Owl Theme Default Min CSS -->
        <link rel="stylesheet" href="assets1/css/owl.theme.default.min.css">
        <!-- Owl Carousel Min CSS -->
        <link rel="stylesheet" href="assets1/css/owl.carousel.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="assets1/css/animate.min.css">
        <!-- Boxicons Min CSS -->
        <link rel="stylesheet" href="assets1/css/boxicons.min.css">
        <!-- Magnific Popup Min CSS -->
        <link rel="stylesheet" href="assets1/css/magnific-popup.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="assets1/css/flaticon.css">
        <!-- Meanmenu Min CSS -->
        <link rel="stylesheet" href="assets1/css/meanmenu.min.css">
        <!-- Nice Select Min CSS -->
        <link rel="stylesheet" href="assets1/css/nice-select.min.css">
        <!-- Odometer Min CSS-->
        <link rel="stylesheet" href="assets1/css/odometer.min.css">
        <!-- Date Picker CSS-->
        <link rel="stylesheet" href="assets1/css/date-picker.min.css">
        <!-- Muli Fonts Min CSS-->
        <link rel="stylesheet" href="assets1/css/muli-fonts.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets1/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets1/css/responsive.css">
        <!-- Rtl CSS -->
        <link rel="stylesheet" href="assets1/css/rtl.css">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets1/images/favicon.png">
        <!-- Title -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <title>Dashboard User</title>
    </head>
    <title>Jubi - Job Board HTML Template</title>
</head>

<body>
    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Header Area -->
    <div style="direction: ltr;">
        @include('layouts1.app')
    </div>
    <!-- End Header Area -->

    <style>
        .kerja {
            background-image: url("assets1/images/banner/banner-bg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;

            padding: 170px;
            /* Sesuaikan ukuran padding sesuai keinginan */
            box-sizing: border-box;
        }
    </style>
    @if (session()->has('sukses'))
        <script>
            alert("anda sudah terdaftar")
        </script>
    @endif
    @if (session()->has('error'))
        <script>
            alert("anda tidak bisa daftar kembali")
        </script>
    @endif


    <!-- Start Page Title Area -->
    <div class=" kerja" style="direction: ltr; margin-top: -45px;">
        <div class="container" style="margin-bottom: -100px; margin-left: -50px;">
            <div class="row">
                <div class="col sm-6">
                    <div class="banner-content">
                        <h1 style="margin-top: -40px;  font-weight: bolder; font-size: 50px;">Detail Lowongan
                            Kerja</h1>
                        <ul>
                            <li>
                                <h5>Temukan pekerjaan yang anda sukai!!</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    <!-- Start Employers Details Area -->
    <section class="employers-details-area pt-100 pb-70" style="direction: ltr;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hot-jobs-list">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="hot-jobs-content">
                                    <div class="d-flex justify-content-between" style="color: black">
                                        <h3 class="mb-3"><a href="">{{ $lowongan->judul }}</a></h3>
                                    </div>
                                    <span class="sub-title text-primary mb-3">{{ $lowongan->Division->divisi }}</span>
                                    <ul class="overview">
                                        <li class="mb-3"><span>Posisi : </span> {{ $lowongan->pekerja }}</li>
                                        <li class="mb-3"><span>Slot Tersedia : </span> {{ $lowongan->slot }}</li>
                                        <div class="d-flex justify-content-between">
                                            <li><span>Tipe Kerja : </span>{{ $lowongan->tipe }}</li>
                                            <div class="d-flex justify-content-end  ">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <li style="margin-right: -19%;"><button
                                                                class="btn btn-warning"><a
                                                                    href="{{ route('dashboard-user') }}"
                                                                    class="text-white">Kembali</a></button>
                                                        </li>
                                                    </div>
                                                    <div class="col-6">
                                                        {{-- @if (Auth::check())
                                                            <!-- Periksa apakah pengguna sudah login -->
                                                            @if ($registrations !== null && $registrations->status !== 'menunggu')
                                                                <!-- Pengguna telah mendaftar pada lowongan lain -->
                                                                <li>
                                                                    <button type="button" class="btn btn-primary"
                                                                        style="background-color: #2042e3"
                                                                        id="daftar">Daftar</button>
                                                                </li>
                                                            @else
                                                                <!-- Pengguna belum mendaftar pada lowongan ini -->
                                                                <li>
                                                                    <p>Anda sudah mendaftar pada lowongan lain.</p>
                                                                </li>
                                                            @endif
                                                        @else
                                                            <!-- Tampilkan tombol "Daftar" jika pengguna belum login -->
                                                            <li>
                                                                <button type="button" class="btn btn-primary"
                                                                    id="daftar">Daftar</button>
                                                            </li>
                                                        @endif --}}
                                                        @if ($status === 'sudah')
                                                            <li>
                                                                <p>Anda sudah mendaftar pada lowongan lain.</p>
                                                            </li>
                                                        @elseif ($status === 'belum')
                                                            <button type="button" class="btn btn-primary"
                                                                style="background-color: #2042e3"
                                                                id="daftar">Daftar</button>
                                                        @elseif ($status === 'disini')
                                                            <li>
                                                                <button type="button" class="btn btn-danger"
                                                                    id="batal">Batal</button>
                                                            </li>
                                                        @elseif ($status === 'diterima_disini')
                                                            <li>
                                                                <p>anda di terima di lowongan ini </p>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <p>anda sudah di terima pada lowongan lain</p>
                                                            </li>
                                                        @endif
                                                    </div>



                                                </div>
                                            </div>


                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="employers-details-content mb-5">
                        <h3>Persyaratan Kerja</h3>
                        <p>{!! $lowongan->syarat !!} <br></p>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="employers-details-sidebar">
                        <div class="employer-widget">
                            <h3>Bagikan Lowongan Ini</h3>

                            <ul class="social-icon">
                                <li id="shareFacebook">
                                    <a>
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li id="shareWhatsapp">
                                    <a>
                                        <i class="bx bxl-whatsapp"></i>
                                    </a>
                                </li>
                                <li id="shareLinkedin">
                                    <a>
                                        <i class="bx bxl-linkedin-square"></i>
                                    </a>
                                </li>
                                <li id="shareTwitter">
                                    <a>
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="employer-widget">
                            <h3>Detail Lowongan Perusahaan</h3>



                            <ul class="overview">
                                <li>
                                    Divisi
                                    <span>: {{ $lowongan->Division->divisi }}</span>
                                </li>
                                <li>
                                    Gaji
                                    <span>: {{ 'Rp ' . number_format($lowongan->gaji, 0, ',', '.') }}</span>
                                </li>
                                <li>
                                    Tipe Kerja
                                    <span>: {{ $lowongan->tipe }}</span>
                                </li>
                                <li>
                                    Lokasi
                                    <span>: {{ $lowongan->lokasi }}</span>
                                </li>

                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Employers Details Area -->

    <!-- Start Subscribe Area -->

    <!-- End Subscribe Area -->

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
                                        <img width="180px" src="assets1/images/humma.png" alt="logo">
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua consec tetur.</p>

                                    <ul class="social-icon">
                                        <li>
                                            <a href="" id="shareFacebook">
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
                © 2020 Jubi Is Proudly Created By
                <a href="https://envytheme.com/" target="_blank">EnvyTheme</a>
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
    <script src="assets1/js/jquery.min.js"></script>
    <!-- Popper Min JS -->
    <script src="assets1/js/popper.min.js"></script>
    <!-- Bootstrap Min JS -->
    <script src="assets1/js/bootstrap.min.js"></script>
    <!-- Meanmenu Min JS -->
    <script src="assets1/js/meanmenu.min.js"></script>
    <!-- Wow Min JS -->
    <script src="assets1/js/wow.min.js"></script>
    <!-- Owl Carousel Min JS -->
    <script src="assets1/js/owl.carousel.min.js"></script>
    <!-- Nice Select Min JS -->
    <script src="assets1/js/nice-select.min.js"></script>
    <!-- Magnific Popup Min JS -->
    <script src="assets1/js/magnific-popup.min.js"></script>
    <!-- Mixitup JS -->
    <script src="assets1/js/jquery.mixitup.min.js"></script>
    <!-- Appear Min JS -->
    <script src="assets1/js/appear.min.js"></script>
    <!-- Odometer Min JS -->
    <script src="assets1/js/odometer.min.js"></script>
    <!-- Range Slider Min JS -->
    <script src="assets1/js/range-slider.min.js"></script>
    <!-- Datepicker Min JS -->
    <script src="assets1/js/bootstrap-datepicker.min.js"></script>
    <!-- Form Validator Min JS -->
    <script src="assets1/js/form-validator.min.js"></script>
    <!-- Contact JS -->
    <script src="assets1/js/contact-form-script.js"></script>
    <!-- Ajaxchimp Min JS -->
    <script src="assets1/js/ajaxchimp.min.js"></script>
    <!-- Custom JS -->
    <script src="assets1/js/custom.js"></script>

    <script>
        function isi() {
            var x = document.getElementById("lowongan").value = {
                !!$lowongan - > id!!
            };
            var y = document.getElementById("myform");
            y.submit();
        }

        document.getElementById('shareFacebook').addEventListener('click', function() {
            var currentUrl = window.location.href;
            var facebookLink = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(currentUrl);
            window.open(facebookLink, '_blank');
        });
    </script>
    <script>
        document.getElementById('shareWhatsapp').addEventListener('click', function() {
            var currentUrl = window.location.href;
            var message = encodeURIComponent('Ini adalah tautan dari halaman: ' + currentUrl);
            var whatsappLink = 'https://api.whatsapp.com/send?text=' + message;
            window.open(whatsappLink, '_blank');
        });
    </script>
    <script>
        document.getElementById('shareLinkedin').addEventListener('click', function() {
            var currentUrl = window.location.href;
            var linkedinLink = 'https://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(
                currentUrl);
            window.open(linkedinLink, '_blank');
        });
    </script>
    <script>
        document.getElementById('shareTwitter').addEventListener('click', function() {
            var currentUrl = window.location.href;
            var tweetText = 'Ini adalah tautan dari halaman: ' + currentUrl;
            var twitterLink = 'https://twitter.com/intent/tweet?text=' + encodeURIComponent(tweetText);
            window.open(twitterLink, '_blank');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#daftar').on('click', function() {
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'mr-2 btn btn-success',
                        cancelButton: ' btn btn-danger'
                    },
                    buttonsStyling: false
                });

                swalWithBootstrapButtons.fire({
                    title: 'Apa kamu yakin',
                    text: "Ingin mendaftar di lowongan ini",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'iya',
                    cancelButtonText: 'tidak',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        var url = "{{ route('detail-lowongan.store') }}";
                        var formData = "{{ $lowongan->id }}";

                        $.ajax({
                            type: 'POST',
                            url: url,
                            data: {
                                id: formData,
                            },
                            success: function(response) {
                                if (response.status === 'sukses') {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Sukses',
                                        text: 'Terima kasih anda telah mendaftar di lowongan ini'
                                    }).then(() => {
                                        window.location.reload();
                                    });
                                } else if (response.status === 'sudah') {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: 'Anda sudah terdaftar di lowongan ini'
                                    });
                                } else if (response.status === 'penuh') {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Maaf',
                                        text: 'Slot lowongan sudah penuh. Tidak bisa mendaftar.'
                                    });
                                }
                            },
                            error: function(error) {
                                console.log(error);
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'Terjadi kesalahan. Data tidak dapat disimpan.'
                                });
                            }
                        });
                    } else if (
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            'Batal',
                            'Coba untuk berpikir lebih yakin untuk mendaftar :)',
                            'error'
                        );
                    }
                });

            });

        });
    </script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#batal').on('click', function() {

                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'mr-2 btn btn-success',
                        cancelButton: ' btn btn-danger'
                    },
                    buttonsStyling: false
                });

                swalWithBootstrapButtons.fire({
                    title: 'Apa kamu yakin',
                    text: "Ingin membatalkan di lowongan ini",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'iya',
                    cancelButtonText: 'tidak',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        var url = "{{ route('batalkan-lowongan') }}";
                        var formData = "{{ Auth()->User()->id }}";

                        $.ajax({
                            type: 'POST',
                            url: url,
                            data: {
                                id: formData,
                            },
                            success: function(response) {
                                if (response.status === 'sukses') {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Sukses',
                                        text: response.pesan,
                                    }).then(() => {
                                        window.location.reload();
                                    });;
                                    // $('#lowongan').empty();
                                    // let kosong = `<div> <div>`;
                                    // $('#lowongan').append(kosong);

                                }
                                console.log(response);

                                // Tanggapan berhasil

                                // Tampilkan pesan sukses dengan SweetAlert

                            },
                            error: function(error) {
                                // Tanggapan error
                                console.log(error);
                                // Tampilkan pesan error dengan SweetAlert
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'Terjadi kesalahan. Data tidak dapat dihapus.'
                                });
                            }
                        });
                    } else if (
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            'Batal',
                            'Coba untuk berpikir lebih yakin untuk mendaftar :)',
                            'error'
                        );
                    }
                });
            });




        });
    </script>
</body>

<!-- Mirrored from templates.envytheme.com/jubi/rtl/employers-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Aug 2023 07:41:52 GMT -->

</html>
