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
        <link rel="icon" type="image/png" href="assets/logo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

        <!-- Title -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <title>Dashboard User</title>
        <style>
            .ellipsis {
                white-space: nowrap;
                /* Mencegah teks untuk melompat ke baris berikutnya */
                overflow: hidden;
                /* Menyembunyikan teks yang melebihi lebar elemen */
                text-overflow: ellipsis;
                /* Menambahkan efek ellipsis */
                width: 100%;
                /* Atur lebar elemen sesuai kebutuhan Anda */
            }
        </style>
        <style>
            .status {
                display: inline-block;
                width: 92px;
                height: 28px;
                padding-left: 12px;
                padding-right: 20px;
                padding-top: 2px;
                padding-bottom: 1px;
                color: white;
                border-radius: 4px;
            }

            .highlight-box {
                display: inline-block;
                width: 10px;
                height: 10px;
                background-color: #5d87ff;
                margin-right: 5px;
                vertical-align: middle;
            }
        </style>
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
        @media (max-width: 600px) {
            .judul {
                font-size: small;
                /* padding-left: 90px; */
            }
        }

        @media (max-width: 770px) {
            .daftar {
                margin-top: 15px;
                justify-content: center;
            }
        }

        @media (min-width: 1200px) {
            .daftar {
                justify-content: end;

            }
        }

        @media (min-width: 770px) and (max-width: 1200px) {
            .kembali {
                margin-left: 220px;
                margin-right: 80px;
                text-align: center;
                justify-content: center;
                /* Atur margin kiri sesuai yang Anda inginkan */
            }

            .kembalii {
                margin-left: 3000px;
            }
        }

        .custom-title-class {
            font-size: 18px;
            /* Atur ukuran font sesuai keinginan Anda */
        }


        .kerja {
            background-image: url("assets1/images/banner/banner-bg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;

            padding-top: 150px;

            padding-bottom: 150px;
            padding-left: 90px;
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
                <div class="col-sm-12">
                    <div class="banner-content">
                        <h1 style="margin-top: -40px; font-weight: bolder; font-size: 50px;" class="judul">Detail
                            Lowongan Kerja</h1>

                        <ul class="temukan-list">
                            <li class="temukan mt-3">
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
                                    <div class="" style="color: black">
                                        <h3 class="mb-3"><a href="">{{ $lowongan->judul }}</a></h3>
                                    </div>
                                    <span class="sub-title text-primary mb-3">{{ $lowongan->Division->divisi }}</span>
                                    <ul class="overview">
                                        <li class="mb-3"><span>Posisi : </span> {{ $lowongan->pekerja }}</li>
                                        <li class="mb-3"><span>Slot Tersedia : </span> {{ $lowongan->slot }}</li>
                                        <div class="row">
                                            <li class="col-12 col-md-12"><span>Tipe Kerja : </span>{{ $lowongan->tipe }}
                                            </li>
                                            <div class="col-12 col-md-12 d-flex  daftar ">
                                                <div class="row">
                                                    <div class="col-6" class="kembali">
                                                        <button class="btn btn-warning kembali"><a
                                                                href="{{ route('dashboard-user') }}"
                                                                class="text-white">Kembali</a></button>

                                                    </div>
                                                    <div class="col-6" class="">
                                                        @if ($status === 'sudah')
                                                            <button type="button" class="btn btn-primary"
                                                                style="background-color: #2042e3" id="Terdaftar"
                                                                class="kembalii">Terdaftar</button>
                                                        @elseif ($status === 'belum')
                                                            <button type="button" class="btn btn-primary"
                                                                style="background-color: #2042e3" id="daftar"
                                                                class="kembalii">Daftar</button>
                                                        @elseif ($status === 'disini')
                                                            <li>
                                                                <button type="button" class="btn btn-danger"
                                                                    id="batal">Batal</button>
                                                            </li>
                                                        @elseif ($status === 'diterima_disini')
                                                            <button type="button" class="btn btn-primary"
                                                                style="background-color: #2042e3" id="Diterima"
                                                                class="kembalii">Diterima</button>
                                                        @else
                                                            <button type="button" class="btn btn-primary"
                                                                style="background-color: #2042e3" id="Diterima"
                                                                class="kembalii">Diterima</button>
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
                        @foreach ($reg as $registration)
                            @if ($registration->vacancie_id === $lowongan->id)
                                @if ($registration->status === 'diterima')
                                    <div class="card " style="background-color:green">
                                        <ul class="">
                                            <li class="mt-3 ms-4"
                                                style="display: flex; align-items: center; justify-content: center; background-color:green">
                                                {{-- <span></span> --}}
                                                <span class="status fs-5 text-center fw-bold"
                                                    style="width: 200px; color: #ffffff;">Status:
                                                    {{ $registration->status }}</span>

                                            </li>
                                        </ul>
                                    </div>
                                @elseif(in_array($registration->status, ['ditolak', 'nonaktif']))
                                    <div class="card " style="background-color:#f04848">
                                        <ul class="">
                                            <li class="mt-3 ms-4"
                                                style="display: flex; align-items: center; justify-content: center; background-color:#f04848">
                                                {{-- <span></span> --}}
                                                <span class="status fs-5 text-center fw-bold"
                                                    style="width: 200px; color: #ffffff;">Status:
                                                    {{ $registration->status }}</span>

                                            </li>
                                        </ul>
                                    </div>
                                @else
                                    <div class="card " style="background-color:#ffae1f">
                                        <ul class="">
                                            <li class="mt-3 ms-4"
                                                style="display: flex; align-items: center; justify-content: center; background-color:#ffae1f">
                                                {{-- <span></span> --}}
                                                <span class="status fs-5 text-center fw-bold"
                                                    style="width: 200px; color: #ffffff;">Status:
                                                    {{ $registration->status }}</span>

                                            </li>
                                        </ul>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                        <div class="employer-widget">
                            <h3>Detail Lowongan Perusahaan</h3>
                            <ul class="overview">
                                <li class="row">
                                    <p class="  col-5"> Divisi</p>
                                    <p class="ellipsis  col-7">: {{ $lowongan->Division->divisi }}</p>
                                </li>
                                <li class="row">
                                    <p class=" col-5">Gaji</p>
                                    <p class="  col-7">:
                                        {{ 'Rp ' . number_format($lowongan->gaji, 0, ',', '.') }}</p>
                                </li>
                                <li class="row">
                                    <p class=" col-5">Tipe Kerja</p>
                                    <p class=" col-7 ellipsis">: {{ $lowongan->tipe }}</p>
                                </li>
                                <li class="row">
                                    <p class=" col-5"> Lokasi</p>
                                    <p class="ellipsis  col-7">: {{ $lowongan->lokasi }}</p>
                                </li>
                            </ul>
                        </div>

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
                                            <a><span class="__cf_email__"
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
    </script>
    <script>
        document.getElementById('shareFacebook').addEventListener('click', function() {
            var currentUrl = window.location.href;
            var facebookLink = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(currentUrl);
            console.log(facebookLink);
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

                var cv = '{{ Auth()->user()->cv }}';
                var lamaran = '{{ Auth()->user()->lamaran }}';
                var foto_user = '{{ Auth()->user()->foto }}';

                if (foto_user !== 'default/default.png' && (cv !== 'default/default.png' && lamaran !==
                        'default/default.png')) {
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
                                        swalWithBootstrapButtons.fire({
                                            icon: 'success',
                                            title: 'Sukses',
                                            text: 'Terima kasih anda telah mendaftar di lowongan ini'
                                        }).then(() => {
                                            window.location.reload();
                                        });
                                    } else if (response.status === 'sudah') {
                                        swalWithBootstrapButtons.fire({
                                            icon: 'error',
                                            title: 'Error',
                                            text: 'Anda sudah terdaftar di lowongan ini'
                                        });
                                    } else if (response.status === 'penuh') {
                                        swalWithBootstrapButtons.fire({
                                            icon: 'error',
                                            title: 'Maaf',
                                            text: 'Slot lowongan sudah penuh. Tidak bisa mendaftar.'
                                        });
                                    }
                                },
                                error: function(error) {
                                    console.log(error);
                                    swalWithBootstrapButtons.fire({
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
                } else {
                    swalWithBootstrapButtons.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Lengkapi data cv, lamaran, dan foto anda di halaman profile'
                    }).then(() => {
                        window.location.href = "{{ route('profile') }}";
                    });
                    // console.log("pppp");

                }

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
    <script>
        function Terdaftar(){
            
        }
        // $(document).ready(function() {
        //     $('#Terdaftar').click(function() {
        //         const swalWithBootstrapButtons = Swal.mixin({
        //             customClass: {
        //                 confirmButton: 'mr-2 btn btn-success',
        //                 cancelButton: ' btn btn-danger'
        //             },
        //             buttonsStyling: false
        //         });

        //             .fire({
        //             title: 'Anda sudah mendaftar di lowongan lain ',
        //             showClass: {
        //                 popup: 'animate__animated animate__fadeInDown'
        //             },
        //             hideClass: {
        //                 popup: 'animate__animated animate__fadeOutUp'
        //             },
        //             customClass: {
        //                 title: 'custom-title-class' // Tambahkan class CSS khusus untuk judul
        //             }
        //         })
        //     })
        // })
    </script>
    <script>
        $(document).ready(function() {
            $('#Diterima').click(function() {
                Swal.fire({
                    title: 'Selamat anda telah di terima selalu semangat dan jangan menyerah ',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    },
                    customClass: {
                        title: 'custom-title-class' // Tambahkan class CSS khusus untuk judul
                    }
                })
            })
        })
    </script>
</body>

<!-- Mirrored from templates.envytheme.com/jubi/rtl/employers-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Aug 2023 07:41:52 GMT -->

</html>
