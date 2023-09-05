<!doctype html>
<html lang="zxx">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="assets1/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Owl Theme Default Min CSS -->
    <link rel="stylesheet" href="assets1/css/owl.theme.default.min.css">
    <!-- Owl Carousel Min CSS -->

    <link rel="stylesheet" href="assets1/css/boxicons.min.css">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="assets1/css/magnific-popup.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets1/css/flaticon.css">
    <!-- Meanmenu Min CSS -->
    <link rel="stylesheet" href="assets1/css/meanmenu.min.css">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="assets1/css/nice-select.min.css">

    <link rel="stylesheet" href="assets1/css/muli-fonts.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets1/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets1/css/responsive.css">

    <link id="themeColors" rel="stylesheet" href="assets/dist/css/style.min.css" />
    <link rel="stylesheet" href="assets/dist/libs/select2/dist/css/select2.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>



    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/logo.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Title -->
    <title>Dashboard User</title>
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

    <!-- Start Page Title Area -->
    <div class=" kerja" style="direction: ltr; margin-top: -45px;">
        <div class="container" style="margin-bottom: -100px; margin-left: -50px;">
            <div class="banner-content">
                <h1 style="margin-top: -40px;  font-weight: bolder; font-size: 50px;">Daftar Lowongan
                    Kerja</h1>
                <ul>
                    <li>
                        <h5>Temukan pekerjaan yang anda sukai!!</h5>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    @php
        use Carbon\Carbon;
    @endphp

    <!-- Start Employers Listing Area -->
    <section class="employers-listing-area ptb-100" style="direction: ltr;">
        <div class="container">
            <div class="row">
                <label class="fs-5 fw-bold">Cari Berdasarkan Divisi :</label>
                <div class="col-6">
                    <div class="form-group">
                        <form action="" class="search-form d-flex">
                            <div class="form-group">
                                <div style="width: 360px;"> <!-- Mengatur lebar form secara keseluruhan -->
                                    <select class="select2 form-control me-2" id="division-select" name="division"
                                        style="width: 100%; height: 360px; margin-right: 10px;">
                                        <!-- Mengatur width, height, dan margin -->
                                        <option value="" @if (!$selectedDivision) selected @endif>Semua
                                        </option>
                                        @foreach ($divisi as $item)
                                            <option value="{{ $item->id }}"
                                                @if ($selectedDivision == $item->id) selected @endif>
                                                {{ $item->divisi }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button class="default-btn ms-1" type="submit"
                                style="height: 34px; display: flex; align-items: center;">
                                <span>Cari Divisi</span>
                            </button>

                        </form>
                    </div>

                </div>

                {{-- <script>
                    $(document).ready(function() {
                        $("#division-select").on("click", function() {
                            var value = $(this).val();
                            $("#card #card2").filter(function() {
                                $(this).toggle($(this).text().indexOf(value) > -1)
                            });
                        });
                    });
                </script> --}}

                <div class="shorting">
                    <div class="row" id="card">
                        @forelse ($lowongan as $item)
                            <div class="col-6 sm-12 mix a s c" id="card2">
                                <div class="hot-jobs-list">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <div class="hot-jobs-content">
                                                <div class="d-flex justify-content-between" style="color: black">
                                                    <h3><a href="">{{ $item->judul }}</a></h3>
                                                    <p><span class="ml-5 mr-1">Berakhir Pada
                                                            Tanggal
                                                            :
                                                        </span>{{ Carbon::parse($item->batas)->format('d M Y') }}
                                                    </p>
                                                </div>
                                                <span class="sub-title text-primary mb-1">{{ $item->Division->divisi }}
                                                </span>
                                                <ul>
                                                    <li><span>Gaji
                                                            :</span>{{ 'Rp ' . number_format($item->gaji, 0, ',', '.') }}
                                                    </li>
                                                    <li><span>Slot Tersedia : </span>{{ $item->slot }}</li>
                                                    <div class="d-flex justify-content-between">
                                                        <li><span>Tipe Kerja : </span>{{ $item->tipe }}</li>
                                                        <li class="ml-auto" style="margin-left: 300px;"><button
                                                                class="default-btn"><a
                                                                    href="{{ route('detailLowongan', $item->id) }}"
                                                                    class="text-white">Detail</a></button>
                                                        </li>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        @empty
                            <div class="row">
                                <div class="col-lg-12 mt-5 text-center" id="lowongan">
                                    <img src="/assets/dist/images/nodatas.png" alt="" width="350px">
                                </div>
                            </div>
                        @endforelse
                        <div class="col-12">
                            <div class="pagination-area">
                            {{ $lowongan->appends(['cari' => request('cari')])->onEachSide(1)->links() }}
                            </div>
                        </div>
                    </div>
                </div>



            </div>
    </section>
    <!-- End Employers Listing Area -->

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
                © 2021 Jubi Is Proudly Created By
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

    <script src="assets/dist/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/dist/libs/select2/dist/js/select2.min.js"></script>
    <script src="assets/dist/js/forms/select2.init.js"></script>

    <script src="assets1/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script
        src="
                                                                                                                                                                                                                                                                                                                                                                                                                                            https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js
                                                                                                                                                                                                                                                                                                                                                                                                                                            ">
    </script>
    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css
    " rel="stylesheet">
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
                    text: "Ingin mendaftar di lowongan ini",
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
                                    });
                                    $('#lowongan').empty();
                                    let kosong = `<div> <div>`;
                                    $('#lowongan').append(kosong);

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

</html>
