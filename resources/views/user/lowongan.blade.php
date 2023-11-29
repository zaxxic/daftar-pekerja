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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

        .filter2 {
            display: none;
        }

        @media (min-width:992px) {

            .filter2 {
                display: block;
            }
        }
        @media (min-width:992px) {

            .addFIlter {
                display: none;
            }
        }
        .labelSimpan{
            font-size: 12px;
            font-weight: bold;
        }
        .hot-jobs-list .featured {
            position: absolute;
            top:10px;
            left: -45px;
            background-color: #2042e3;
            color: #ffffff;
            padding: 5px 40px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            font-size: 12px;
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
                <div class="col-12 col-sm-12 filter1 " style="background-color: #fff">
                    <div class="form-group">
                        <form class="search-form d-flex justify-content-between  row " id="search-lowongan">
                            <div class="form-group col-md-5 col-12 mb-0">
                                <div class="d-flex" style="margin-top: 10px;">
                                    <input type="text" name="cari" id="cari"
                                        style="border: 1px solid #549bff; height: 35px; border-radius: 5px; width: 100%; padding: 8px;"
                                        value="{{ $keyword }}" placeholder="Cari Lowongan..">
                                </div>
                            </div>

                            <div class="form-group col-md-3 col-4" style="margin-top: 10px;">
                                <div>
                                    <select class="select2 form-select" id="divisionSelect" name="division"
                                        style="width: 100%; margin-right: 10px;">
                                        <option disabled value="" selected>Divisi</option>
                                        <option value="semua">Semua
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


                            <div class="form-group col-md-3 col-4" style="margin-top: 10px;">
                                <div>
                                    <select class="select2" name="lokasi" style="width: 100%; margin-right: 10px;"
                                        id="locationSelect">
                                        <option disabled value="" selected>Tempat Pekerjaan</option>
                                        <option value="semua" >Semua
                                        </option>
                                        @foreach ($lokasi as $item)
                                            <option value="{{ $item->lokasi }}"
                                                {{ $item->lokasi == $keywordLokasi ? 'selected' : '' }}>
                                                {{ $item->lokasi }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-4 col-lg-1 d-flex justify-content-end"
                                style="align-items: center; margin-top: 0px;">
                                <button class="btn btn-primary w-full border-1 text-center ms-2" type="button"
                                    id="searchButton">
                                    <p class="text-center"></p>Cari
                                </button>
                            </div>
                            <div class="col-12 mx-auto addFIlter"
                                style="align-items: center;  ">
                                <button  data-bs-toggle="modal" data-bs-target="#filter-Open" class=" w-full  text-center " style="width: 100%;border:1px solid #549bff; background-color:transparent; color:gray; height:30px; border-radius:5px" type="button"
                                    id="searchButton">
                                    <span class="text-center d-flex justify-content-center align-items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 21 21"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.5 4a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0V5a1 1 0 0 1 1-1zm12 2h-11m-2 0h-3m4 8a1 1 0 0 1 1 1v2a1 1 0 0 1-2 0v-2a1 1 0 0 1 1-1zm12 2h-11m-2 0h-3m12-7a1 1 0 0 1 1 1v2a1 1 0 0 1-2 0v-2a1 1 0 0 1 1-1zm-1 2h-11m16 0h-3"/></svg> <p>Filter</p> </span>
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

                <div class="col-12 row p-0 " style="margin-left: 3px; position: sticky;">
                    <div class="col-12 col-lg-3 filter2 " style="">
                        <div class="employers-listing-sidebar1 sticky-top"
                            style="box-shadow: 0px 10px 10px rgba(245, 246, 253, 1); border-radius:5px">
                            <h4 class="text-white">Filter Tambahan</h4>

                            <form style="padding: 20px; position: sticky; " class="sticky-top"  id="SideFilter">
                                <p class="fw-semibold fs-4 mb-2" style="color: black;">Tipe Pekerjaan</p>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="tipe" value="Kontrak" id="flexCheckDefaultTipe" />
                                    <label class="form-check-label" for="flexCheckDefaultTipe">
                                        Kontrak
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input permanen" type="checkbox" name="tipe"
                                        value="Permanen" id="flexCheckDefaultTipe" />
                                    <label class="form-check-label" for="flexCheckDefaultTipe">
                                        Permanen
                                    </label>
                                </div>
                                <hr>
                                <p class="fw-semibold fs-4 mb-2" style="color: black;">Tipe Lowongan</p>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="tipeVacancy"
                                        id="exampleRadios1" value="terbaru" />
                                    <label class="form-check-label" for="exampleRadios1">
                                        Lowongan Terbaru
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipeVacancy" id="exampleRadios2" value="terlama" />
                                    <label class="form-check-label" for="exampleRadios2">
                                        Lowongan Terlama
                                    </label>
                                </div>
                                <hr>
                                <p class="fw-semibold fs-4 mb-2" style="color: black;">Rentang Gaji</p>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" name="Salary" type="radio" value="gaji1" id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Rp 100.000-2.500.000
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" name="Salary" type="radio" value="gaji2"
                                        id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Rp 2.500.000-5.000.000
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" name="Salary" type="radio" value="gaji3"
                                        id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Rp 5.000.000-7.500.000
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" name="Salary" type="radio" value="gaji4"
                                        id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Rp 7.500.000-10.000.000
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" name="Salary" type="radio" value="gaji5"
                                        id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Rp 10.000.000++
                                    </label>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-lg-9 col-12" id="card">

                        <div id="lowonganKosong" class=" w-full "></div>
                        <div id="LowonganUser" class="row w-full "></div>
                        @if ($limit < 1)

                            @else
                            <div class="lihatSelengkapnya btn btn-primary w-100" style="cursor: pointer" id="lihatSelengkapnya">Lihat Selengkapnya
                            </div>
                            <div class="lihatSedikit btn btn-primary w-100" style="display: none" id="lihatSedikit">Lihat Sedikit</div>
                            @endif

                        <div class="col-12">
                            <div class="pagination-area">
                                {{-- <div id="paginate"></div> --}}
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
                                            <a href="https://id.linkedin.com/in/hummasoft-technology-2476a8241" target="_blank">
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
                                            <a><span class="_cf_email_" data-cfemail="f098959c9c9fb09a859299de939f9d">hummatechcareer@gmail.com</span></a>
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
    <!-- End Footer Area -->  <div class="modal fade" id="filter-Open" tabindex="-1" aria-labelledby="exampleModalLabel1">
        <div class="modal-dialog" role="document">

            <form action="{{ route('add-experience') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="exampleModalLabel1">
                            Tambah Filter
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                    <div class="modal-body" style="max-height: 490px; overflow-y: auto;">
                       <div class="mb-3">
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
                                <input class="form-check-input permanen" type="checkbox" name="tipe"
                                    value="Permanen" id="flexCheckDefaultTipe" />
                                <label class="form-check-label" for="flexCheckDefaultTipe">
                                    Permanen
                                </label>
                            </div>
                            <hr>
                            <p class="fw-semibold fs-4 mb-2" style="color: black;">Tipe Lowongan</p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="tipeVacancy"
                                    id="exampleRadios1" value="terbaru" />
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
                                    id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">
                                    Rp 2.500.000-5.000.000
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="Salary" type="radio" value="gaji3"
                                    id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">
                                    Rp 5.000.000-7.500.000
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="Salary" type="radio" value="gaji4"
                                    id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">
                                    Rp 7.500.000-10.000.000
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="Salary" type="radio" value="gaji5"
                                    id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">
                                    Rp 10.000.000++
                                </label>
                            </div>
                        </form>

                       </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button"data-bs-dismiss="modal"
                        aria-label="Close" class="btn btn-success">
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


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
                                $('.svgSimpan[data-vacancie-id="' + id + '"]').attr('fill', 'none').addClass('text-black');
                                $('.labelSimpan[data-label-id="' + id + '"]').addClass('hidden');

                            } else {
                                swalWithBootstrapButtons.fire({
                                    icon: 'success',
                                    title: 'Berhasil Simpan',
                                    text: 'Berhasil simpan lowongan.',
                                });
                                $('.svgSimpan[data-vacancie-id="' + id + '"]').attr('fill', 'currentColor') .addClass('text-warning');
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
                    $('#LowonganUser').empty();
                    $('#lowonganKosong').empty();

                    if (response.lowongan === 'kosong') {
                        let lowongan = `
                            <div class="row">
                                <div class="col-lg-12 mt-5 text-center" id="lowongan">
                                    <img src="{{ asset('assets/nodatas.png') }}" alt="" width="350px">
                            <div class="col-md-6 col-12 mix a s c" id="card2">
                                <div class="hot-jobs-list col-12">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <a href="${route}">
                                                <div class="hot-jobs-content">
                                                    <div class="row d-flex justify-content-between mb-1" style="color: black">
                                                        <h4 class="col-12 col-md-12 col-xl-6 tengah">${item.judul}</h4>
                                                        <p class="col-12 col-md-12 col-lg-12 col-xl-6 d-flex tanggal justify-content-center  justify-content-lg-end justify-content-xl-end">
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
                                                        <button type="button" id="simpan${id}" onclick="Simpan('${id}')" style="background-color: transparent;" class="buttonSimpan " data-vacancie-id="${id}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                                                <path class="svgSimpan" data-vacancie-id="${id}"  fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3V6a2 2 0 0 1 2-2" />
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
                        $('#lowonganKosong').append(lowongan);
                    } else {
                        $.each(response.lowongan, function(index, item) {
                            console.log(response.lowongan);

                            var route = "{{ route('detailLowongan', ':id') }}".replace(':id', item.id);
                            var routeSimpan = "simpan-lowongan/" + item.id;
                            var gaji = "Rp " + Number(item.gaji).toLocaleString('id-ID');
                            var tanggalTengat = item.batas;
                            var formattedDate = formatTanggalIndonesia(tanggalTengat);
                            // alert(formattedDate);
                            var id = item.id;
                            let lowongan = `
                                <div class="col-lg-6">
                                    <div class="card position-relative overflow-hidden mb-4" style="height: auto;">
                                        <div class="card-header bg-info d-flex align-items-center justify-content-between">
                                            <div class="col-12 d-flex justify-content-between" style="padding: 0;">
                                                <h4 class="card-title text-white mb-0 me-3" style="font-size: 22px;">${item.judul}</h4>
                                                </h4>
                                            </div>

                                        </div>
                                        <div style="padding: 15px 20px 15px 20px;">
                                            <div class=" col-12 row">
                                                <div class="col-4 mb-2 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Slot Tersedia</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fs-4" style="color: black;">${item.slot}</span>
                                                </div>

                                                <div class="col-4 mb-2 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Posisi</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fs-4" style="color: black;">${item.pekerja}</span>
                                                </div>
                                                <div class="col-4 mb-2 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Tipe Pekerjaan</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fs-4" style="color: black;">${item.tipe}</span>
                                                </div>
                                                <div class="col-4 mb-3 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Gaji</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">${gaji}</span>
                                                </div>
                                                <hr>
                                                <div class="d-flex justify-content-between p-0">
                                                    <p class="fs-3" style="color: #7c8fac;">Berakhir Pada Tanggal: ${formattedDate}
                                                    </p>
                                                    <form id="saveForm${id}" action="${routeSimpan}" method="post">
                                                        @method('PATCH')
                                                        @csrf
                                                        <button type="button" id="simpan${id}" onclick="Simpan('${id}')" style="background-color: transparent;" class="buttonSimpan" data-vacancie-id="${id}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                                                <path class="svgSimpan"  data-vacancie-id="${id}" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3V6a2 2 0 0 1 2-2" />
                                                            </svg>
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                `;
                            // alert(lowongan);
                            $('#LowonganUser').append(lowongan);
                        });
                        if(response.limit > 20){
                            $('#lihatSelengkapnya').css('display', 'block');
                        };
                        $.each(response.simpan, function(index, item) {

                            $('.svgSimpan[data-vacancie-id="' + item.vacancie_id + '"]').attr('fill', 'currentColor')
                                .addClass('text-warning');

                            $('.labelSimpan[data-label-id="' + item.vacancie_id + '"]')
                                .removeClass('hidden');
                        });
                    }




                },
                error: function(error) {
                    console.log(error);
                } // Removed unnecessary semicolon
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#lihatSelengkapnya').click(function() {
                // Dapatkan nilai elemen filter yang terpilih
                var selectType = new Array();
                var selectTypeVacancy = new Array();
                var selectSalary = new Array();
                var keyword = $('#cari').val();
                var selectedDivision = $('#divisionSelect').val();
                var keywordLokasi = $('#locationSelect').val();
                if (keyword === '') {
                    keyword = "semua";
                };
                if (selectedDivision === null) {
                    selectedDivision = "semua";
                };
                if (keywordLokasi === null) {
                    keywordLokasi = "semua";
                };

                $('input[name="tipe"]:checked').each(function() {
                    selectType.push(this.value);
                });
                $('input[name="tipeVacancy"]:checked').each(function() {
                    selectTypeVacancy.push(this.value);
                });
                $('input[name="Salary"]:checked').each(function() {
                    selectSalary.push(this.value);
                });

                if (selectType.length < 1) {
                    selectType.push('semua');
                }
                if (selectTypeVacancy.length < 1) {
                    selectTypeVacancy.push('semua');
                }
                if (selectSalary.length < 1) {
                    selectSalary.push('semua');
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var formData = [keyword, selectedDivision, keywordLokasi, selectType, selectTypeVacancy,
                    selectSalary
                ];

                var url = "{{route('lihat-selengkapnya-user')}}";

                $.ajax({
                    type: 'Get',
                    url: url,
                    data :{data : formData},
                    success: function(response) {
                        // alert(response);
                        $('.lihatSedikit').show();
                        $('.lihatSelengkapnya').hide();
                        // alert(response);
                        // Kosongkan kontainer sebelum menambahkan data baru
                        $('#LowonganUser').empty();
                        console.log(response.lowongan);

                    $.each(response.lowongan, function(index, item) {
                        var route = "{{ route('detailLowongan', ':id') }}".replace(':id', item.id);
                        var routeSimpan = "simpan-lowongan/" + item.id;
                        var gaji = "Rp " + Number(item.gaji).toLocaleString('id-ID');
                        var tanggalTengat = item.batas;
                        var formattedDate = formatTanggalIndonesia(tanggalTengat);
                        // alert(formattedDate);
                        var id = item.id;
                        let lowongan = `
                                <div class="col-lg-6">
                                    <div class="card position-relative overflow-hidden mb-4" style="height: auto;">
                                        <div class="card-header bg-info d-flex align-items-center justify-content-between">
                                            <div class="col-12 d-flex justify-content-between" style="padding: 0;">
                                                <h4 class="card-title text-white mb-0 me-3" style="font-size: 22px;">${item.judul}</h4>
                                                </h4>
                                            </div>

                                        </div>
                                        <div style="padding: 15px 20px 15px 20px;">
                                            <div class=" col-12 row">
                                                <div class="col-4 mb-2 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Slot Tersedia</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fs-4" style="color: black;">${item.slot}</span>
                                                </div>

                                                <div class="col-4 mb-2 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Posisi</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fs-4" style="color: black;">${item.pekerja}</span>
                                                </div>
                                                <div class="col-4 mb-2 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Tipe Pekerjaan</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fs-4" style="color: black;">${item.tipe}</span>
                                                </div>
                                                <div class="col-4 mb-3 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Gaji</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">${gaji}</span>
                                                </div>
                                                <hr>
                                                <div class="d-flex justify-content-between p-0">
                                                    <p class="fs-3" style="color: #7c8fac;">Berakhir Pada Tanggal: ${formattedDate}
                                                    </p>
                                                    <form id="saveForm${id}" action="${routeSimpan}" method="post">
                                                        @method('PATCH')
                                                        @csrf
                                                        <button type="button" id="simpan${id}" onclick="Simpan('${id}')" style="background-color: transparent;" class="buttonSimpan" data-vacancie-id="${id}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                                                <path class="svgSimpan"  data-vacancie-id="${id}" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3V6a2 2 0 0 1 2-2" />
                                                            </svg>
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                `;
                        $('#LowonganUser').append(lowongan);


                    });
                    $.each(response.simpan, function(index, item) {
                            $('.svgSimpan[data-vacancie-id="' + item.vacancie_id + '"]').attr('fill', 'currentColor').addClass('text-warning');

                            $('.labelSimpan[data-label-id="' + item.vacancie_id + '"]')
                                .removeClass('hidden');
                    });
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
     <script>
        $(document).ready(function() {
            $('#lihatSedikit').click(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                   // Dapatkan nilai elemen filter yang terpilih
                var selectType = new Array();
                var selectTypeVacancy = new Array();
                var selectSalary = new Array();
                var keyword = $('#cari').val();
                var selectedDivision = $('#divisionSelect').val();
                var keywordLokasi = $('#locationSelect').val();
                if (keyword === '') {
                    keyword = "semua";
                };
                if (selectedDivision === null) {
                    selectedDivision = "semua";
                };
                if (keywordLokasi === null) {
                    keywordLokasi = "semua";
                };

                $('input[name="tipe"]:checked').each(function() {
                    selectType.push(this.value);
                });
                $('input[name="tipeVacancy"]:checked').each(function() {
                    selectTypeVacancy.push(this.value);
                });
                $('input[name="Salary"]:checked').each(function() {
                    selectSalary.push(this.value);
                });

                if (selectType.length < 1) {
                    selectType.push('semua');
                };
                if (selectTypeVacancy.length < 1) {
                    selectTypeVacancy.push('semua');
                }
                if (selectSalary.length < 1) {
                    selectSalary.push('semua');
                }


                var formData = [keyword, selectedDivision, keywordLokasi, selectType, selectTypeVacancy,
                    selectSalary
                ];
                var formUrl = "{{ route('searchlowongan') }}";

                $.ajax({
                    type: 'POST',
                    url: formUrl,
                    data: {
                        data:formData
                    },

                    success: function(response) {
                        // alert(response);
                        $('#lihatSedikit').hide();
                        $('#lihatSelengkapnya').show();
                        // alert(response);
                        console.log(response.lowongan);
                        $('#LowonganUser').empty();

                    $.each(response.lowongan, function(index, item) {
                        var route = "{{ route('detailLowongan', ':id') }}".replace(':id', item.id);
                        var routeSimpan = "simpan-lowongan/" + item.id;
                        var gaji = "Rp " + Number(item.gaji).toLocaleString('id-ID');
                        var tanggalTengat = item.batas;
                        var formattedDate = formatTanggalIndonesia(tanggalTengat);
                        // alert(formattedDate);
                        var id = item.id;
                        let lowongan = `
                                <div class="col-lg-6">
                                    <div class="card position-relative overflow-hidden mb-4" style="height: auto;">
                                        <div class="card-header bg-info d-flex align-items-center justify-content-between">
                                            <div class="col-12 d-flex justify-content-between" style="padding: 0;">
                                                <h4 class="card-title text-white mb-0 me-3" style="font-size: 22px;">${item.judul}</h4>
                                                </h4>
                                            </div>

                                        </div>
                                        <div style="padding: 15px 20px 15px 20px;">
                                            <div class=" col-12 row">
                                                <div class="col-4 mb-2 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Slot Tersedia</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fs-4" style="color: black;">${item.slot}</span>
                                                </div>

                                                <div class="col-4 mb-2 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Posisi</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fs-4" style="color: black;">${item.pekerja}</span>
                                                </div>
                                                <div class="col-4 mb-2 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Tipe Pekerjaan</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fs-4" style="color: black;">${item.tipe}</span>
                                                </div>
                                                <div class="col-4 mb-3 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Gaji</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">${gaji}</span>
                                                </div>
                                                <hr>
                                                <div class="d-flex justify-content-between p-0">
                                                    <p class="fs-3" style="color: #7c8fac;">Berakhir Pada Tanggal: ${formattedDate}
                                                    </p>
                                                    <form id="saveForm${id}" action="${routeSimpan}" method="post">
                                                        @method('PATCH')
                                                        @csrf
                                                        <button type="button" id="simpan${id}" onclick="Simpan('${id}')" style="background-color: transparent;" class="buttonSimpan" data-vacancie-id="${id}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                                                <path class="svgSimpan"  data-vacancie-id="${id}" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3V6a2 2 0 0 1 2-2" />
                                                            </svg>
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                `;

                        $('#LowonganUser').append(lowongan);


                    });
                    $.each(response.simpan, function(index, item) {
                            $('.svgSimpan[data-vacancie-id="' + item.vacancie_id + '"]').attr('fill', 'currentColor').addClass('text-warning');
                            $('.labelSimpan[data-label-id="' + item.vacancie_id + '"]').removeClass('hidden');
                    });
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#SideFilter').change(function() {
                // Dapatkan nilai elemen filter yang terpilih
                var selectType = new Array();
                var selectTypeVacancy = new Array();
                var selectSalary = new Array();
                var keyword = $('#cari').val();
                var selectedDivision = $('#divisionSelect').val();
                var keywordLokasi = $('#locationSelect').val();
                if (keyword === '') {
                    keyword = "semua";
                };
                if (selectedDivision === null) {
                    selectedDivision = "semua";
                };
                if (keywordLokasi === null) {
                    keywordLokasi = "semua";
                };

                $('input[name="tipe"]:checked').each(function() {
                    selectType.push(this.value);
                });
                $('input[name="tipeVacancy"]:checked').each(function() {
                    selectTypeVacancy.push(this.value);
                });
                $('input[name="Salary"]:checked').each(function() {
                    selectSalary.push(this.value);
                });

                if (selectType.length < 1) {
                    selectType.push('semua');
                }
                if (selectTypeVacancy.length < 1) {
                    selectTypeVacancy.push('semua');
                }
                if (selectSalary.length < 1) {
                    selectSalary.push('semua');
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var formData = [keyword, selectedDivision, keywordLokasi, selectType, selectTypeVacancy,
                    selectSalary
                ];
                var formUrl = "{{ route('SideFilter') }}";
                console.log(formData);
                $.ajax({
                    url: formUrl,
                    type: 'POST',
                    data: {
                        data: formData
                    },
                    success: function(response) {

                        $('#LowonganUser').empty();
                        $('#lowonganKosong').empty();

                        if (response.lowongan === 'kosong') {
                            let lowongan = `
                            <div class="row">
                                <div class="col-lg-12 mt-5 text-center" id="lowongan">
                                    <img src="{{ asset('assets/nodatas.png') }}" alt="" width="350px">
                                </div>
                            </div>
                                `;
                            // alert(lowongan);
                            $('#lowonganKosong').append(lowongan);
                        } else {
                            $.each(response.lowongan, function(index, item) {
                                console.log(response.lowongan);

                                var route = "{{ route('detailLowongan', ':id') }}".replace(':id', item.id);
                                var routeSimpan = "simpan-lowongan/" + item.id;
                                var gaji = "Rp " + Number(item.gaji).toLocaleString('id-ID');
                                var tanggalTengat = item.batas;
                                var formattedDate = formatTanggalIndonesia(
                                    tanggalTengat);
                                // alert(formattedDate);
                                var id = item.id;
                                let lowongan = `
                                <div class="col-lg-6">
                                    <div class="card position-relative overflow-hidden mb-4" style="height: auto;">
                                        <div class="card-header bg-info d-flex align-items-center justify-content-between">
                                            <div class="col-12 d-flex justify-content-between" style="padding: 0;">
                                                <h4 class="card-title text-white mb-0 me-3" style="font-size: 22px;">${item.judul}</h4>
                                                </h4>
                                            </div>

                                        </div>
                                        <div style="padding: 15px 20px 15px 20px;">
                                            <div class=" col-12 row">
                                                <div class="col-4 mb-2 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Slot Tersedia</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fs-4" style="color: black;">${item.slot}</span>
                                                </div>

                                                <div class="col-4 mb-2 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Posisi</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fs-4" style="color: black;">${item.pekerja}</span>
                                                </div>
                                                <div class="col-4 mb-2 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Tipe Pekerjaan</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fs-4" style="color: black;">${item.tipe}</span>
                                                </div>
                                                <div class="col-4 mb-3 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Gaji</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">${gaji}</span>
                                                </div>
                                                <hr>
                                                <div class="d-flex justify-content-between p-0">
                                                    <p class="fs-3" style="color: #7c8fac;">Berakhir Pada Tanggal: ${formattedDate}
                                                    </p>
                                                    <form id="saveForm${id}" action="${routeSimpan}" method="post">
                                                        @method('PATCH')
                                                        @csrf
                                                        <button type="button" id="simpan${id}" onclick="Simpan('${id}')" style="background-color: transparent;" class="buttonSimpan" data-vacancie-id="${id}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                                                <path class="svgSimpan"  data-vacancie-id="${id}" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3V6a2 2 0 0 1 2-2" />
                                                            </svg>
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                `;
                                // alert(lowongan);
                                $('#LowonganUser').append(lowongan);
                            });

                            // if(response.limit => '20'){
                            //     $('.lihatSelengkapnya').css('display', 'block');
                            // }else{
                                $('.lihatSelengkapnya').css('display', 'none');
                            // };
                            // console.log(response.limit);
                            $.each(response.simpan, function(index, item) {
                                $('.svgSimpan[data-vacancie-id="' + item.vacancie_id + '"]').attr('fill', 'currentColor').addClass('text-warning');

                                $('.labelSimpan[data-label-id="' + item.vacancie_id +'"]').removeClass('hidden');
                            });
                        }



                    },
                    error: function(error) {
                        console.log(error);
                    } // Removed unnecessary semicolon
                });
            });
        })
    </script>
    <script>
        $(document).ready(function() {
            $('#searchButton').click(function() {
                // Dapatkan nilai elemen filter yang terpilih
                var selectType = new Array();
                var selectTypeVacancy = new Array();
                var selectSalary = new Array();
                var keyword = $('#cari').val();
                var selectedDivision = $('#divisionSelect').val();
                var keywordLokasi = $('#locationSelect').val();
                if (keyword === '') {
                    keyword = "semua";
                };

                if (selectedDivision === null) {
                    selectedDivision = "semua";
                };
                if (keywordLokasi === null) {
                    keywordLokasi = "semua";
                };


                $('input[name="tipe"]:checked').each(function() {
                    selectType.push(this.value);
                });
                $('input[name="tipeVacancy"]:checked').each(function() {
                    selectTypeVacancy.push(this.value);
                });
                $('input[name="Salary"]:checked').each(function() {
                    selectSalary.push(this.value);
                });



                if (selectType.length < 1) {
                    selectType.push('semua');
                }
                if (selectTypeVacancy.length < 1) {
                    selectTypeVacancy.push('semua');
                }
                if (selectSalary.length < 1) {
                    selectSalary.push('semua');
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var formData = [keyword, selectedDivision, keywordLokasi, selectType, selectTypeVacancy,
                    selectSalary
                ];
                var formUrl = "{{ route('searchlowongan') }}";

                // Kirim permintaan AJAX ke server
                $.ajax({
                    url: '{{ route('searchlowongan') }}',
                    type: 'POST',
                    data: {
                        data: formData
                    },
                    success: function(response) {
                        // Proses respons dan perbarui tampilan
                        var lowongan = response.lowongan;
                        var divisi = response.divisi;

                        $('#LowonganUser').empty();
                        $('#lowonganKosong').empty();

                        if (response.lowongan === 'kosong') {
                            let lowongan = `
                            <div class="row">
                                <div class="col-lg-12 mt-5 text-center" id="lowongan">
                                    <img src="{{ asset('assets/nodatas.png') }}" alt="" width="350px">
                                </div>
                            </div>
                                `;
                            // alert(lowongan);
                            $('#lowonganKosong').append(lowongan);
                        } else {
                            $.each(response.lowongan, function(index, item) {
                                console.log(response.lowongan);

                                var route = "{{ route('detailLowongan', ':id') }}".replace(':id', item.id);
                                var routeSimpan = "simpan-lowongan/" + item.id;
                                var gaji = "Rp " + Number(item.gaji).toLocaleString('id-ID');
                                var tanggalTengat = item.batas;
                                var formattedDate = formatTanggalIndonesia(tanggalTengat);
                                // alert(formattedDate);
                                var id = item.id;
                                let lowongan = `
                                <div class="col-lg-6">
                                    <div class="card position-relative overflow-hidden mb-4" style="height: auto;">
                                        <div class="card-header bg-info d-flex align-items-center justify-content-between">
                                            <div class="col-12 d-flex justify-content-between" style="padding: 0;">
                                                <h4 class="card-title text-white mb-0 me-3" style="font-size: 22px;">${item.judul}</h4>
                                                </h4>
                                            </div>

                                        </div>
                                        <div style="padding: 15px 20px 15px 20px;">
                                            <div class=" col-12 row">
                                                <div class="col-4 mb-2 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Slot Tersedia</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fs-4" style="color: black;">${item.slot}</span>
                                                </div>

                                                <div class="col-4 mb-2 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Posisi</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fs-4" style="color: black;">${item.pekerja}</span>
                                                </div>
                                                <div class="col-4 mb-2 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Tipe Pekerjaan</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fs-4" style="color: black;">${item.tipe}</span>
                                                </div>
                                                <div class="col-4 mb-3 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">Gaji</span>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                                </div>
                                                <div class="col-7 p-0">
                                                    <span class="fw-semibold fs-4" style="color: black;">${gaji}</span>
                                                </div>
                                                <hr>
                                                <div class="d-flex justify-content-between p-0">
                                                    <p class="fs-3" style="color: #7c8fac;">Berakhir Pada Tanggal: ${formattedDate}
                                                    </p>
                                                    <form id="saveForm${id}" action="${routeSimpan}" method="post">
                                                        @method('PATCH')
                                                        @csrf
                                                        <button type="button" id="simpan${id}" onclick="Simpan('${id}')" style="background-color: transparent;" class="buttonSimpan" data-vacancie-id="${id}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                                                <path class="svgSimpan"  data-vacancie-id="${id}" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3V6a2 2 0 0 1 2-2" />
                                                            </svg>
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                `;
                                // alert(lowongan);
                                $('#LowonganUser').append(lowongan);
                            });
                            $.each(response.simpan, function(index, item) {
                                $('.svgSimpan[data-vacancie-id="' + item.vacancie_id + '"]').attr('fill', 'currentColor').addClass('text-warning');

                                $('.labelSimpan[data-label-id="' + item.vacancie_id +
                                    '"]').removeClass('hidden');
                            });
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
    {{-- <script>
        function LowonganDataContainer(item) {
           const data = item;
           console.log(data);
            var count = data.length/2;
            for (var i = 1; i <= count; i++) {
                console.log(i);
                let paginate = `<li class="page-item" style="text-decoration: none;" onclick="Paginate(${i})"><a class="page-link" >${i}</a></li>`;
                $('#paginate').append(paginate);
            };
            var lowongan = item

            return data;


        }
    </script>
    <script>
        function Paginate(id){
            $('#LowonganUser').empty();
            var dataAkhir = id*2;
            var dataAwal =dataAkhir-2;
            var data = LowonganDataContainer();
            alert(data);
            for (let index = dataAwal; index < dataAkhir; index++) {


            }
        }
    </script> --}}
</body>

</html>
