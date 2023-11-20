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
    <title>Lowongan-user</title>
    <style>
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
    <!-- <script>
        $(document).ready(function() {
            $('.select2-container--default').each(function() {
                $(this).css('width', '230px');
                $(this).css('margin-right', '50px');
            });
        });
    </script> -->


    <style>
        @media (max-width: 600px) {
            .judul {
                font-size: small;
                /* padding-left: 90px; */
            }
        }

        .kerja {
            background-image: url("assets1/images/banner/banner-bg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;

            padding-top: 150px;
            padding-right: 150px;
            padding-bottom: 150px;
            padding-left: 90px;
            /* Sesuaikan ukuran padding sesuai keinginan */
            box-sizing: border-box;
        }

        @media (max-width: 640px) {

            /* Atur breakpoint sesuai kebutuhan */
            .kerja h1 {
                background-size: contain;
                /* Gambar akan menyesuaikan ukuran sesuai lebar */
                padding: 60px 15px;
                display: none;
                /* Ubah ukuran padding sesuai keinginan */
            }

            .lowongan {
                font-size: 10px;
            }

            .banner-content h1 {
                font-size: 5px;
            }
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            height: 120px;
            /* Sesuaikan tinggi sesuai kebutuhan Anda */
        }

        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border-radius: 4px;
            display: flex;
            font-size: 15px;
            font-style: thin;
            height: 35px;
            border: 1px solid #549bff;
            padding-top: 2px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 26px;
            position: absolute;
            top: 5px;
            right: 1px;
            width: 20px;
            color: #549bff;
        }

        .select2-results {
            display: block;
            border: 1px solid #549bff;
        }

        .select2-search--dropdown {
            display: block;
            padding: 4px;
            border: 1px solid #549bff;
        }

        .select2-container--default .select2-search--dropdown .select2-search__field {
            border: 1px solid #549bff;
        }


        .employers-listing-area .nice-select {
            width: 100%;
            border-radius: 5px;
            height: 29px;
            margin-bottom: 30px;
            border-color: #cccccc;
        }
    </style>

    <!-- Start Page Title Area -->
    <div class=" kerja" style="direction: ltr; margin-top: -45px;">
        <div class="container" style="margin-bottom: -100px; margin-left: -50px;">
            <div class="banner-content">
                <h2 style="margin-top: -40px;  font-weight: bolder; font-size: 35px; " class="judul">Daftar Lowongan
                    Kerja</h2>
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
                <div class="col-12 col-sm-12">
                    <div class="form-group">
                        <form class="search-form d-flex justify-content-between  row ">
                            <div class="form-group col-5 ">
                                <div class="d-flex" style="margin-top: 30px;">
                                    <input type="text" name="cari"
                                        style="border: 1px solid #549bff; height: 35px; border-radius: 5px; width: 100%; padding: 8px;"
                                        value="{{ $keyword }}" placeholder="Cari Lowongan..">

                                </div>
                            </div>

                            <div class="form-group col-3" style="margin-top: 30px;">
                                <div>
                                    <select class="select2 form-select" id="division-select" name="division"
                                        style="width: 100%; margin-right: 10px;">
                                        <option value="semua" @if (!$selectedDivision) selected @endif>Semua
                                        </option>
                                        @foreach ($divisi as $item)
                                            <option value="{{ $item->id }}"
                                                @if (old('division', $selectedDivision) == $item->id) selected @endif>
                                                {{ $item->divisi }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group col-3" style="margin-top: 30px;">
                                <div>
                                    <select class="select2" name="tipe" style="width: 100%; margin-right: 10px;">
                                        <option value="kontrak" {{ $keywordTipe == 'kontrak' ? 'selected' : '' }}>
                                            kontrak</option>
                                        <option value="permanen" {{ $keywordTipe == 'permanen' ? 'selected' : '' }}>
                                            permanen</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-1 d-flex justify-content-end"
                                style="align-items: center; margin-top: 15px;">
                                <button class="btn btn-primary text-center ms-2" type="submit">
                                    <p class="text-center"></p>Cari
                                </button>
                            </div>
                            {{-- <button class="default-btn " type="submit"
                                style="height: 15px; display: flex; align-items:;">
                                <span style="font-size: 15px">Cari Divisi</span>
                            </button> --}}

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
                <style>
                    @media (min-width: 768px) {
                        .tanggal {
                            text-align: right;
                            /* Teks berakhir pada tanggal akan diatur ke kanan */
                        }

                        .detail {
                            text-align: right;
                        }
                    }
                </style>

                <div class="row">
                    <div class="col-3">
                        <div class="employers-listing-sidebar1"
                            style="box-shadow: 0px 10px 10px rgba(245, 246, 253, 1); border-radius:5px">
                            <h4 class="text-white">Filter Tambahan</h4>

                            <form style="padding: 20px;" id="SideFilter">
                                <p class="fw-semibold fs-4 mb-2" style="color: black;">Tipe Pekerjaan</p>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="tipe" value="Kontrak"
                                        id="flexCheckDefaultTipe" />
                                    <label class="form-check-label" for="flexCheckDefaultTipe">
                                        Kontrak
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input permanen" type="checkbox" name="tipe" value="Permanen"
                                        id="flexCheckDefaultTipe"  />
                                    <label class="form-check-label" for="flexCheckDefaultTipe">
                                        Permanen
                                    </label>
                                </div>
                                <hr>
                                <p class="fw-semibold fs-4 mb-2" style="color: black;">Tipe Lowongan</p>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="tipeVacancy"
                                        id="exampleRadios1" value="terbaru"  />
                                    <label class="form-check-label" for="exampleRadios1">
                                        Lowongan Terbaru
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipeVacancy"
                                        id="exampleRadios2" value="terlama" />
                                    <label class="form-check-label" for="exampleRadios2">
                                        Lowongan Terlama
                                    </label>
                                </div>
                                <hr>
                                <p class="fw-semibold fs-4 mb-2" style="color: black;">Rentang Gaji</p>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" name="Salary" type="radio" value="gaji1"
                                        id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Rp 100.000-2.500.000
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" name="Salary" type="radio" value="gaji2"
                                        id="flexCheckDefault"  />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Rp 2.500.000-5.000.000
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" name="Salary" type="radio" value="gaji3"
                                        id="flexCheckDefault"  />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Rp 5.000.000-7.500.000
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" name="Salary" type="radio" value="gaji4"
                                        id="flexCheckDefault"  />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Rp 7.500.000-10.000.000
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" name="Salary" type="radio" value="gaji5"
                                        id="flexCheckDefault"  />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Rp 10.000.000++
                                    </label>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-9" id="card">
                        <div class="row">
                            <div id="LowonganUser" class="row"></div>
                        </div>
                        <div class="col-12">
                            <div class="pagination-area">
                                {{ $lowongan->appends(['cari' => request('cari')])->onEachSide(1)->links() }}
                            </div>
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
                                        <img width="180px" src="{{ asset('assets/hummatech.png') }}" alt="logo">
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
                                    let kosong = `<div>
        <div>`;
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
    <script>
        $(document).ready(function() {

            // $('.simpan').on('click', function() {
            //     var formUrl = $('#saveForm').attr('action');
            //     $.ajax({
            //         url: formUrl,
            //         type: 'PATCH',
            //         data: $('#saveForm').serialize(),
            //         success: function(response) {

            //             if (response.suksesBatal) {
            //                 alert('berhasil batal');
            //                 $('#simpan').removeClass('text-info');
            //             } else {
            //                 $('#simpan').addClass('text-info');
            //                 alert('berhasil simpan');
            //             }
            //             // console.log(response.success);
            //         },
            //         error: function(error) {
            //             console.log(error);
            //         }
            //     });
            // });
        });

        function Simpan(id) {

            const formId = 'saveForm' + id;
            const formUrl = $('#' + formId).attr('action');

            const formData = $('#' + formId).serialize();

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "mr-2 btn btn-danger",
                },
                buttonsStyling: false,
            });

            swalWithBootstrapButtons.fire({
                title: "Konfirmasi",
                text: "Apakah anda yakin ingin merubah status lowongan ini?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Iya!",
                cancelButtonText: "Tidak!",
                reverseButtons: true,
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger me-3",
                },
                buttonsStyling: false,
                width: "25rem",
                padding: "1rem",
                customContainerClass: "swal-custom",
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna menekan "Iya", lakukan AJAX request
                    $.ajax({
                        url: formUrl,
                        type: 'PATCH',
                        data: formData,
                        success: function(response) {

                            if (response.suksesBatal) {
                                swalWithBootstrapButtons.fire({
                                    icon: 'success',
                                    title: 'Berhasil Batal',
                                    text: 'Berhasil batal, simpan lowongan.',
                                });
                                $('#simpan' + id).removeClass('text-warning');
                                $('.labelSimpan[data-label-id="' + id + '"]').addClass('hidden');

                            } else {
                                swalWithBootstrapButtons.fire({
                                    icon: 'success',
                                    title: 'Berhasil Simpan',
                                    text: 'Berhasil simpan lowongan.',
                                });
                                $('#simpan' + id).addClass('text-warning');
                                $('.labelSimpan[data-label-id="' + id + '"]').removeClass('hidden');

                            }
                            // console.log(response.success);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        "Batal",
                        "Pengajuan penerimaan dibatalkan.",
                        "error"
                    );
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            var formUrl = "{{ route('Tampilkan-lowongan') }}"; // Changed 'Route' to 'route'

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: formUrl,
                type: 'GET',
                success: function(response) {
                    console.log(response);
                    $.each(response.simpan, function(index, item) {
                        $('.buttonSimpan[data-vacancie-id="' + item.vacancie_id + '"]')
                            .addClass('text-warning');
                        $('.labelSimpan[data-label-id="' + item.vacancie_id + '"]').removeClass(
                            'hidden');
                    });
                },
                error: function(error) {
                    console.log(error);
                } // Removed unnecessary semicolon
            });
        });
    </script>
    <script>
        function formatTanggalIndonesia(tanggal) {
            const bulanIndonesia = [
                'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ];

            const [tahun, bulan, hari] = tanggal.split('-');

            // Ambil nama bulan dalam bahasa Indonesia
            const namaBulan = bulanIndonesia[parseInt(bulan, 10) - 1];

            // Format tanggal sesuai keinginan
            const formattedDate = `${hari} - ${namaBulan} - ${tahun}`;

            return formattedDate;
        }
    </script>
    <script>
        $(document).ready(function() {
            var formUrl = "{{ route('Lowongan/Lowongan') }}"; // Changed 'Route' to 'route'

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: formUrl,
                type: 'GET',
                success: function(response) {
                    console.log(response.lowongan);
                    $('LowonganUser').empty();
                    $.each(response.lowongan, function(index, item) {
                        var route = "{{ route('detailLowongan', ':id') }}".replace(':id', item
                            .id);
                        var routeSimpan = "simpan-lowongan/" + item.id;
                        var gaji = "Rp " + Number(item.gaji).toLocaleString('id-ID');
                        var tanggalTengat = item.batas;
                        var formattedDate = formatTanggalIndonesia(tanggalTengat);
                        // alert(formattedDate);
                        var id = item.id;
                        let lowongan = `
                            <div class="col-md-6 col-12 mix a s c" id="card2">
                                <div class="hot-jobs-list col-12">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <a href="${route}">
                                                <div class="hot-jobs-content">
                                                    <div class="row d-flex justify-content-between mb-3" style="color: black">
                                                        <h4 class="col-12 col-md-12 col-xl-6 tengah">${item.judul}</h4>
                                                        <p class="col-12 col-md-12 col-lg-12 col-xl-6 tanggal justify-content-lg-endcustom justify-content-xl-endcustom">
                                                            ${item.status ? '<span class="fw-semibold fs-4" style="float: right; color: #5d87ff;">' + gaji + '</span>' : '<span class="fw-semibold fs-4" style="float: right; color: #5d87ff;">Gaji Tidak Ditambahkan</span>'}
                                                        </p>
                                                    </div>
                                                    <ul>
                                                        <li class="fs-3"><span>Slot Tersedia : </span><span class="fw-medium">${item.slot}</span></li>
                                                        <li class="fs-3"><span>Posisi : </span><span class="fw-medium">${item.pekerja}</span></li>
                                                        <li class="fs-3"><span>Tipe Kerja :</span><span class="fw-medium">${item.tipe}</span></li>
                                                        <hr>
                                                    </ul>
                                                </div>
                                            </a>
                                            <div class="card-footer">
                                                <div class="d-flex justify-content-between">
                                                    <p class="fs-3" style="color: #7c8fac;">Berakhir Pada Tanggal: ${formattedDate}</p>
                                                    <form id="saveForm${id}" action="${routeSimpan}" method="post">
                                                        @method('PATCH')
                                                        @csrf
                                                        <button type="button" id="simpan${id}" onclick="Simpan('${id}')" style="background-color: transparent;" class="buttonSimpan" data-vacancie-id="${id}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3V6a2 2 0 0 1 2-2" />
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        // alert(lowongan);
                        $('#LowonganUser').append(lowongan);
                    });


                },
                error: function(error) {
                    console.log(error);
                } // Removed unnecessary semicolon
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#SideFilter').change(function() {
                var selectType = new Array();
                var selectTypeVacancy = new Array();
                var selectSalary = new Array();
                $('input[name="tipe"]:checked').each(function() {
                    selectType.push(this.value);
                });
                $('input[name="tipeVacancy"]:checked').each(function() {
                    selectTypeVacancy.push(this.value);
                });
                $('input[name="Salary"]:checked').each(function() {
                    selectSalary.push(this.value);
                });
                console.log(selectType);
                console.log(selectTypeVacancy);
                console.log(selectSalary);

                if (selectType.length < 1){
                    selectType.push('semua');
                }
                if (selectTypeVacancy.length < 1){
                    selectTypeVacancy.push('semua');
                }
                if (selectSalary.length < 1){
                    selectSalary.push('semua');
                }
                   $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var formData = [ selectType, selectTypeVacancy, selectSalary ];
                var formUrl =  "{{route('SideFilter')}}";
                console.log(formData);
                $.ajax({
                    url: formUrl,
                    type: 'POST',
                    data: {data : formData},
                    success: function(response) {

                        $('#LowonganUser').empty();
                        console.log();
                        $.each(response.lowongan, function(index, item) {
                            var route = "{{ route('detailLowongan', ':id') }}".replace(':id', item.id);
                            var routeSimpan = "simpan-lowongan/" + item.id;
                            var gaji = "Rp " + Number(item.gaji).toLocaleString('id-ID');
                            var tanggalTengat = item.batas;
                            var formattedDate = formatTanggalIndonesia(tanggalTengat);
                            // alert(formattedDate);
                            var id = item.id;
                            let lowongan = `
                                <div class="col-md-6 col-12 mix a s c" id="card2">
                                    <div class="hot-jobs-list col-12">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <a href="${route}">
                                                    <div class="hot-jobs-content">
                                                        <div class="row d-flex justify-content-between mb-3" style="color: black">
                                                            <h4 class="col-12 col-md-12 col-xl-6 tengah">${item.judul}</h4>
                                                            <p class="col-12 col-md-12 col-lg-12 col-xl-6 tanggal justify-content-lg-endcustom justify-content-xl-endcustom">
                                                                ${item.status ? '<span class="fw-semibold fs-4" style="float: right; color: #5d87ff;">' + gaji + '</span>' : '<span class="fw-semibold fs-4" style="float: right; color: #5d87ff;">Gaji Tidak Ditambahkan</span>'}
                                                            </p>
                                                        </div>
                                                        <ul>
                                                            <li class="fs-3"><span>Slot Tersedia : </span><span class="fw-medium">${item.slot}</span></li>
                                                            <li class="fs-3"><span>Posisi : </span><span class="fw-medium">${item.pekerja}</span></li>
                                                            <li class="fs-3"><span>Tipe Kerja :</span><span class="fw-medium">${item.tipe}</span></li>
                                                            <hr>
                                                        </ul>
                                                    </div>
                                                </a>
                                                <div class="card-footer">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="fs-3" style="color: #7c8fac;">Berakhir Pada Tanggal: ${formattedDate}</p>
                                                        <form id="saveForm${id}" action="${routeSimpan}" method="post">
                                                            @method('PATCH')
                                                            @csrf
                                                            <button type="button" id="simpan${id}" onclick="Simpan('${id}')" style="background-color: transparent;" class="buttonSimpan" data-vacancie-id="${id}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3V6a2 2 0 0 1 2-2" />
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `;
                            // alert(lowongan);
                            $('#LowonganUser').append(lowongan);
                        });


                    },
                    error: function(error) {
                        console.log(error);
                    } // Removed unnecessary semicolon
                });
            });
        })
    </script>
</body>

</html>
