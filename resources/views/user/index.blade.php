<!doctype html>
<html lang="zxx">


<head>
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
    <title>Dashboard User</title>

    <style>
        .employers-listing-area .employers-listing-sidebar1 h4 {
            background-color: #5d87ff;
            padding: 15px 20px;
            border-radius: 5px 5px 0 0;
            margin-bottom: 0;
        }

        .highlight-box {
            display: inline-block;
            width: 10px;
            height: 10px;
            background-color: #5d87ff;
            margin-right: 5px;
            vertical-align: middle;
        }

        .status {
            display: inline-block;
            width: 92px;
            height: 28px;
            padding-left: 12px;
            padding-right: 12px;
            padding-top: 2px;
            padding-bottom: 1px;
            color: white;
            border-radius: 4px;
            text-align: center;
        }

        .status-terdaftar {
            display: inline-block;
            width: 92px;
            height: 28px;
            padding-left: 12px;
            padding-right: 12px;
            padding-top: 2px;
            padding-bottom: 1px;
            color: #13DEB9;
            background-color: #E6FFFA;
            border-radius: 4px;
            text-align: center;
        }

        .status-menunggu {
            display: inline-block;
            width: 92px;
            height: 28px;
            padding-left: 12px;
            padding-right: 12px;
            padding-top: 2px;
            padding-bottom: 1px;
            color: #ffae1f;
            background-color: #FEF5E5;
            border-radius: 4px;
            text-align: center;
        }

        .status-diterima {
            display: inline-block;
            width: 92px;
            height: 28px;
            padding-left: 12px;
            padding-right: 12px;
            padding-top: 2px;
            padding-bottom: 1px;
            color: #67E6E6;
            background-color: #E6FFFA;
            border-radius: 4px;
            text-align: center;
        }

        .status-lulus {
            display: inline-block;
            width: 92px;
            height: 28px;
            padding-left: 12px;
            padding-right: 12px;
            padding-top: 2px;
            padding-bottom: 1px;
            color: #5D87FF;
            background-color: #ECF2FF;
            border-radius: 4px;
            text-align: center;
        }


        #pp {

            /* border-top-right-radius: 30px;
            border-bottom-right-radius: 30px; */
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0px 10px 10px rgba(245, 246, 253, 1);
        }

        /* Gaya untuk tampilan desktop (lebar layar lebih dari 767px) */
        @media (min-width: 768px) {

            /* Teks berakhir pada tanggal akan diatur ke kanan */
        }

        .detail {
            text-align: right;
        }
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

    <style>
        @media (max-width: 600px) {
            .judul {
                font-size: 16px;
                /* Ubah ukuran font sesuai keinginan Anda */
                margin-top: 10px;
                /* Sesuaikan margin-top sesuai keinginan Anda */
                text-align: center;
                /* Teks akan menjadi lurus horizontal */
            }

            .kerja {
                padding: 30px 15px;
                /* Sesuaikan ukuran padding sesuai keinginan Anda */
            }

            .banner-content h5 {
                font-size: 12px;
                /* Ubah ukuran font sesuai keinginan Anda */
                text-align: center;
                /* Teks akan menjadi lurus horizontal */
            }
        }

        @media (min-width:1300px) {
            .justify-content-xl-endcustom {
                justify-content: end;
                padding-left: 120px
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

        @media (max-width:1200px) {
            .tengah {
                justify-content: center;
            }
        }

        @media (min-width: 1200px) {
            .justify-content-lg-endcustom {
                justify-content: flex-end !important;
            }
        }

        .tepiborder {
            border: 1px solid #5D87FF;
            border-radius: 10px;
            height: auto;
            padding: 9px;
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
                <!-- <div class="col-12 col-lg-6 d-flex">
                    @if (count($registration) > 0)

                    @endif
                    <div class="shorting col-12">
                        <div class="row">
                            @forelse ($registration as $item)

                            <a href="{{ route('detailLowongan', $item->Vacancy->id) }}">
                                <div class="hot-jobs-list">
                                    <div class="row align-items-center">


                                        <div class="col-lg-12">
                                            <div class="hot-jobs-content ms-4">
                                                <div class="d-flex justify-content-between">
                                                    <h3>{{ $item->Vacancy->judul }}</h3>
                                                    <span class="fw-semibold fs-4 mt-2" style="color: #5d87ff;">{{ 'Rp ' . number_format($item->Vacancy->gaji, 0, ',', '.') }}</span>
                                                </div>
                                                <ul>
                                                    <li><span>Slot Tersedia:</span> <span class="fw-medium"> {{ $item->Vacancy->slot }}</span></li>
                                                    <li><span>Divisi: </span> <span class="fw-medium"> {{ $item->Vacancy->Division->divisi }} </span> </li>
                                                    <li><span>Posisi: </span> <span class="fw-medium"> {{ $item->Vacancy->pekerja }} </span> </li>
                                                    <li><span>Tipe Kerja: </span> <span class="fw-medium"> {{ $item->Vacancy->tipe }} </span> </li>
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="d-flex">
                                                @if ($item->status === 'diterima')
                                                <span class="status bg-success" style="width: 79px;">{{ $item->status }}</span>
                                                @elseif($item->status === 'lulus')
                                                <span class="status bg-primary" style="width: 75px;">{{ $item->status }}</span>
                                                @else($item->status === 'menunggu')
                                                <span class="status bg-warning"><span>{{ $item->status }}</span></span>
                                                @endif
                                                <p class="ms-3 fs-3" style="color: #7c8fac;">Berakhir Pada Tanggal: {{ \Carbon\Carbon::parse($item->batas)->locale('id')->isoFormat('D MMMM Y ') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="featured green">Terdaftar</span>
                                </div>
                            </a>


                            @empty
                            <div class="col-lg-12 text-center" id="lowongan">
                                <img src="{{ asset('assets/nodatas.png') }}" alt="" width="180px">
                            </div>
                            @endforelse
                        </div>
                    </div>



                </div> -->
                @if (count($registration) > 0)

                    @endif
                <div class="col-lg-6">
                @forelse ($registration as $item)
                <a href="{{ route('detailLowongan', $item->Vacancy->id) }}">
                    <div class="card position-relative overflow-hidden mb-4" style="height: 279px;">
                        <div class="card-header bg-info d-flex align-items-center justify-content-between">
                            <div class="col-12 d-flex justify-content-between" style="padding: 0;">
                                <h4 class="card-title text-white mb-0 me-3" style="font-size: 22px;">{{ $item->Vacancy->judul }}</h4>
                            </div>
                        </div>
                        <div style="padding: 15px 20px 15px 20px;">
                            <div class=" col-12 row">
                                <div class="col-3 mb-2 p-0">
                                    <span class="fw-semibold fs-4" style="color: black;">Slot Tersedia</span>
                                </div>
                                <div class="col-1 p-0">
                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                </div>
                                <div class="col-8 p-0">
                                    <span class="fs-4" style="color: black;">{{ $item->Vacancy->slot }}</span>
                                </div>
                                <div class="col-3 mb-2 p-0">
                                    <span class="fw-semibold fs-4" style="color: black;">Posisi</span>
                                </div>
                                <div class="col-1 p-0">
                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                </div>
                                <div class="col-8 p-0">
                                    <span class="fs-4" style="color: black;">{{ $item->Vacancy->pekerja }}</span>
                                </div>
                                <div class="col-3 mb-2 p-0">
                                    <span class="fw-semibold fs-4" style="color: black;">Tipe Pekerjaan</span>
                                </div>
                                <div class="col-1 p-0">
                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                </div>
                                <div class="col-8 p-0">
                                    <span class="fs-4" style="color: black;">{{ $item->Vacancy->tipe }}</span>
                                </div>
                                <div class="col-3 mb-3 p-0">
                                    <span class="fw-semibold fs-4" style="color: black;">Gaji</span>
                                </div>
                                <div class="col-1 p-0">
                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                </div>
                                <div class="col-8 p-0">
                                    <span class="fw-semibold fs-4" style="color: black;">{{ 'Rp ' . number_format($item->Vacancy->gaji, 0, ',', '.') }}</span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between p-0">
                                    <p class="fs-3" style="color: #7c8fac;">Berakhir Pada Tanggal: {{ \Carbon\Carbon::parse($item->batas)->locale('id')->isoFormat('D MMMM Y ') }}
                                    </p>
                                    <span class="status-terdaftar">Terdaftar</span>
                                    @if ($item->status === 'diterima')
                                        <span class="status-diterima" style="width: 79px;">{{ $item->status }}</span>
                                    @elseif($item->status === 'lulus')
                                        <span class="status-lulus" style="width: 75px;">{{ $item->status }}</span>
                                    @else($item->status === 'menunggu')
                                        <span class="status-menunggu" style="width: 100px;"><span>{{ $item->status }}</span></span>
                                    @endif
                                </div>
                            </div>


                        </div>
                    </div>
                </a>
                @empty
                    <div class="card position-relative overflow-hidden mb-4" style="height: 279px;">

                    @if (Auth()->user()->status === 'ditolak')
                        <div class="card-header bg-info d-flex align-items-center justify-content-between">
                            <div class="col-12 d-flex justify-content-between" style="padding: 0;">
                                <h4 class="card-title text-white mb-0 me-3" style="font-size: 22px;">Ditolak</h4>
                            </div>
                        </div>
                        <div class="" style="padding: 60px 30px 60px 30px;"><span class="mb-2">Anda telah
                            menerima pemberitahuan bahwa pendaftaran Anda telah ditolak. Mohon periksa
                            email Anda untuk informasi lebih lanjut.</span>
                            <div class="d-flex justify-content-end mt-2">
                                <a href="https://mail.google.com/" target="_blank">
                                    <button class="btn btn-primary">
                                        Cek Email
                                    </button>
                                </a>
                            </div>
                        </div>
                    @elseif (Auth()->user()->status === 'gagal')
                        <div class="card-header bg-info d-flex align-items-center justify-content-between">
                            <div class="col-12 d-flex justify-content-between" style="padding: 0;">
                                <h4 class="card-title text-white mb-0 me-3" style="font-size: 22px;">Tidak Lulus</h4>
                            </div>
                        </div>
                        <div class="" style="padding: 60px 30px 60px 30px;"><span class="mb-2">Anda telah
                            menerima pemberitahuan bahwa pendaftaran Anda tidak memnuhi kriteria. Mohon
                            periksa email Anda untuk informasi lebih lanjut.</span>
                            <div class="d-flex justify-content-end mt-2">
                                <a href="https://mail.google.com/" target="_blank">
                                    <button class="btn btn-primary">
                                        Cek Email
                                    </button>
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="card-header bg-info d-flex align-items-center justify-content-between">
                            <div class="col-12 d-flex justify-content-between" style="padding: 0;">
                                <h4 class="card-title text-white mb-0 me-3" style="font-size: 22px;">Belum Terdapat Lowongan Yang Terdaftar</h4>
                            </div>
                        </div>

                        <div style="padding: 15px 20px 15px 20px;">
                            <div class="col-lg-12 text-center" id="lowongan">
                                <img src="{{ asset('assets/nodatas.png') }}" alt="" width="180px">
                            </div>
                        </div>
                    @endif
                    </div>
                @endforelse
                </div>
                <div class="col-lg-6">
                    <div class="card position-relative overflow-hidden mb-4" style="height: 94%;">
                        <div class="card-header bg-info d-flex align-items-center justify-content-between">
                            <div class="col-12 d-flex justify-content-between" style="padding: 0;">
                                <h4 class="card-title text-white mb-0 me-3" style="font-size: 22px;">Kelengkapan Data</h4>
                                <h4 class="text-white mb-0 fs-4" style="margin-top: 2px;">{{$jumlahData}}/7
                                </h4>
                            </div>

                        </div>
                        <div class="p-2">
                            <div class="col-12 row">
                                <div class="col-6" style="margin-top:5px" data-bs-toggle="modal" data-bs-target="#dataWajib">
                                    <div class="tepiborder"><span class="fw-semibold">Data Diri</span> <span class="text-danger fw-semibold">(Wajib)</span>
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" style="float: right" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10.0898" cy="10.897" r="10" fill="#5D87FF"/>
                                            <path d="M16.0898 6.84328L7.86127 14.897L4.08984 11.2057L5.0567 10.2594L7.86127 12.9976L15.123 5.89697L16.0898 6.84328Z" fill="white"/>
                                        </svg>

                                    </div>
                                </div>
                                <div class="col-6" style="margin-top:5px" data-bs-toggle="modal" data-bs-target="#kelengkapanData">
                                    <div class="tepiborder kelengkapan"><span class="fw-semibold">Kelengkapan Dokumen</span> <span class="text-danger fw-semibold">(Wajib)</span>
                                        @if (!empty($DataProfile['FotoDanFile'] != null))
                                        <style>
                                            .kelengkapan{
                                                border: 1px solid #5D87FF;
                                            }
                                        </style>
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" style="float: right" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10.0898" cy="10.897" r="10" fill="#5D87FF"/>
                                            <path d="M16.0898 6.84328L7.86127 14.897L4.08984 11.2057L5.0567 10.2594L7.86127 12.9976L15.123 5.89697L16.0898 6.84328Z" fill="white"/>
                                        </svg>
                                        @else
                                        <style>
                                             .kelengkapan{
                                                border: 1px solid #DF2121;
                                            }
                                        </style>

                                     <svg style="float:right " width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="10" fill="#DF2121"/>
                                    <path d="M7.66958 6.66455L10.5002 9.49522L13.3162 6.67922C13.3785 6.61301 13.4534 6.56005 13.5366 6.52351C13.6197 6.48696 13.7094 6.46759 13.8003 6.46655C13.9947 6.46655 14.1813 6.54381 14.3188 6.68134C14.4563 6.81887 14.5336 7.00539 14.5336 7.19989C14.5353 7.28979 14.5186 7.3791 14.4846 7.46233C14.4505 7.54556 14.3998 7.62096 14.3356 7.68389L11.4829 10.4999L14.3356 13.3526C14.4564 13.4708 14.5273 13.6309 14.5336 13.7999C14.5336 13.9944 14.4563 14.1809 14.3188 14.3184C14.1813 14.456 13.9947 14.5332 13.8003 14.5332C13.7068 14.5371 13.6135 14.5215 13.5264 14.4874C13.4393 14.4533 13.3603 14.4015 13.2943 14.3352L10.5002 11.5046L7.67692 14.3279C7.61495 14.3919 7.54093 14.443 7.45912 14.4782C7.37731 14.5135 7.28932 14.5322 7.20025 14.5332C7.00576 14.5332 6.81923 14.456 6.6817 14.3184C6.54418 14.1809 6.46692 13.9944 6.46692 13.7999C6.46521 13.71 6.48189 13.6207 6.51594 13.5374C6.54998 13.4542 6.60068 13.3788 6.66492 13.3159L9.51758 10.4999L6.66492 7.64722C6.54405 7.52898 6.47318 7.36886 6.46692 7.19989C6.46692 7.00539 6.54418 6.81887 6.6817 6.68134C6.81923 6.54381 7.00576 6.46655 7.20025 6.46655C7.37625 6.46875 7.54492 6.53989 7.66958 6.66455Z" fill="white"/>
                                    </svg>

                                        @endif
                                    </div>
                                </div>
                                <div class="col-6" style="margin-top:5px" data-bs-toggle="modal" data-bs-target="#keteranganDiri">
                                    <div class="tepiborder deskripsi"><span class="fw-semibold">Keterangan Diri</span> <span class="text-info fw-semibold">(Opsional)</span>
                                        @if (!empty($DataProfile['Tentang'] != null))
                                        <style>
                                            .deskripsi{
                                                border: 1px solid #5D87FF;
                                            }
                                        </style>
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" style="float: right" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10.0898" cy="10.897" r="10" fill="#5D87FF"/>
                                            <path d="M16.0898 6.84328L7.86127 14.897L4.08984 11.2057L5.0567 10.2594L7.86127 12.9976L15.123 5.89697L16.0898 6.84328Z" fill="white"/>
                                        </svg>
                                        @else
                                        <style>
                                            .deskripsi{
                                                border: 1px solid #DF2121;
                                            }
                                        </style>
                                     <svg style="float:right " width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="10" fill="#DF2121"/>
                                    <path d="M7.66958 6.66455L10.5002 9.49522L13.3162 6.67922C13.3785 6.61301 13.4534 6.56005 13.5366 6.52351C13.6197 6.48696 13.7094 6.46759 13.8003 6.46655C13.9947 6.46655 14.1813 6.54381 14.3188 6.68134C14.4563 6.81887 14.5336 7.00539 14.5336 7.19989C14.5353 7.28979 14.5186 7.3791 14.4846 7.46233C14.4505 7.54556 14.3998 7.62096 14.3356 7.68389L11.4829 10.4999L14.3356 13.3526C14.4564 13.4708 14.5273 13.6309 14.5336 13.7999C14.5336 13.9944 14.4563 14.1809 14.3188 14.3184C14.1813 14.456 13.9947 14.5332 13.8003 14.5332C13.7068 14.5371 13.6135 14.5215 13.5264 14.4874C13.4393 14.4533 13.3603 14.4015 13.2943 14.3352L10.5002 11.5046L7.67692 14.3279C7.61495 14.3919 7.54093 14.443 7.45912 14.4782C7.37731 14.5135 7.28932 14.5322 7.20025 14.5332C7.00576 14.5332 6.81923 14.456 6.6817 14.3184C6.54418 14.1809 6.46692 13.9944 6.46692 13.7999C6.46521 13.71 6.48189 13.6207 6.51594 13.5374C6.54998 13.4542 6.60068 13.3788 6.66492 13.3159L9.51758 10.4999L6.66492 7.64722C6.54405 7.52898 6.47318 7.36886 6.46692 7.19989C6.46692 7.00539 6.54418 6.81887 6.6817 6.68134C6.81923 6.54381 7.00576 6.46655 7.20025 6.46655C7.37625 6.46875 7.54492 6.53989 7.66958 6.66455Z" fill="white"/>
                                    </svg>

                                        @endif
                                    </div>
                                </div>
                                <div class="col-6" style="margin-top:5px" data-bs-toggle="modal" data-bs-target="#pendidikan">
                                    <div class="tepiborder school"><span class="fw-semibold">Pendidikan</span> <span class="text-info fw-semibold">(Opsional)</span>
                                        @if (!empty($DataProfile['school'] != null))
                                        <style>
                                            .school{
                                                border: 1px solid #5D87FF;
                                            }
                                        </style>
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" style="float: right" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10.0898" cy="10.897" r="10" fill="#5D87FF"/>
                                            <path d="M16.0898 6.84328L7.86127 14.897L4.08984 11.2057L5.0567 10.2594L7.86127 12.9976L15.123 5.89697L16.0898 6.84328Z" fill="white"/>
                                        </svg>
                                        @else
                                        <style>
                                            .school{
                                                border: 1px solid #DF2121;
                                            }
                                        </style>
                                     <svg style="float:right " width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="10" fill="#DF2121"/>
                                    <path d="M7.66958 6.66455L10.5002 9.49522L13.3162 6.67922C13.3785 6.61301 13.4534 6.56005 13.5366 6.52351C13.6197 6.48696 13.7094 6.46759 13.8003 6.46655C13.9947 6.46655 14.1813 6.54381 14.3188 6.68134C14.4563 6.81887 14.5336 7.00539 14.5336 7.19989C14.5353 7.28979 14.5186 7.3791 14.4846 7.46233C14.4505 7.54556 14.3998 7.62096 14.3356 7.68389L11.4829 10.4999L14.3356 13.3526C14.4564 13.4708 14.5273 13.6309 14.5336 13.7999C14.5336 13.9944 14.4563 14.1809 14.3188 14.3184C14.1813 14.456 13.9947 14.5332 13.8003 14.5332C13.7068 14.5371 13.6135 14.5215 13.5264 14.4874C13.4393 14.4533 13.3603 14.4015 13.2943 14.3352L10.5002 11.5046L7.67692 14.3279C7.61495 14.3919 7.54093 14.443 7.45912 14.4782C7.37731 14.5135 7.28932 14.5322 7.20025 14.5332C7.00576 14.5332 6.81923 14.456 6.6817 14.3184C6.54418 14.1809 6.46692 13.9944 6.46692 13.7999C6.46521 13.71 6.48189 13.6207 6.51594 13.5374C6.54998 13.4542 6.60068 13.3788 6.66492 13.3159L9.51758 10.4999L6.66492 7.64722C6.54405 7.52898 6.47318 7.36886 6.46692 7.19989C6.46692 7.00539 6.54418 6.81887 6.6817 6.68134C6.81923 6.54381 7.00576 6.46655 7.20025 6.46655C7.37625 6.46875 7.54492 6.53989 7.66958 6.66455Z" fill="white"/>
                                    </svg>

                                        @endif
                                    </div>
                                </div>
                                <div class="col-6" style="margin-top:5px" data-bs-toggle="modal" data-bs-target="#pengalaman">
                                    <div class="tepiborder pengalaman"><span class="fw-semibold">Pengalaman Kerja</span> <span class="text-info fw-semibold">(Opsional)</span>
                                        @if (!empty($DataProfile['pengalaman'] != null))
                                        <style>
                                            .pengalaman{
                                                border: 1px solid #5D87FF;
                                            }
                                        </style>
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" style="float: right" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10.0898" cy="10.897" r="10" fill="#5D87FF"/>
                                            <path d="M16.0898 6.84328L7.86127 14.897L4.08984 11.2057L5.0567 10.2594L7.86127 12.9976L15.123 5.89697L16.0898 6.84328Z" fill="white"/>
                                        </svg>
                                        @else
                                        <style>
                                            .pengalaman{
                                                border: 1px solid #DF2121;
                                            }
                                        </style>
                                     <svg style="float:right " width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="10" fill="#DF2121"/>
                                    <path d="M7.66958 6.66455L10.5002 9.49522L13.3162 6.67922C13.3785 6.61301 13.4534 6.56005 13.5366 6.52351C13.6197 6.48696 13.7094 6.46759 13.8003 6.46655C13.9947 6.46655 14.1813 6.54381 14.3188 6.68134C14.4563 6.81887 14.5336 7.00539 14.5336 7.19989C14.5353 7.28979 14.5186 7.3791 14.4846 7.46233C14.4505 7.54556 14.3998 7.62096 14.3356 7.68389L11.4829 10.4999L14.3356 13.3526C14.4564 13.4708 14.5273 13.6309 14.5336 13.7999C14.5336 13.9944 14.4563 14.1809 14.3188 14.3184C14.1813 14.456 13.9947 14.5332 13.8003 14.5332C13.7068 14.5371 13.6135 14.5215 13.5264 14.4874C13.4393 14.4533 13.3603 14.4015 13.2943 14.3352L10.5002 11.5046L7.67692 14.3279C7.61495 14.3919 7.54093 14.443 7.45912 14.4782C7.37731 14.5135 7.28932 14.5322 7.20025 14.5332C7.00576 14.5332 6.81923 14.456 6.6817 14.3184C6.54418 14.1809 6.46692 13.9944 6.46692 13.7999C6.46521 13.71 6.48189 13.6207 6.51594 13.5374C6.54998 13.4542 6.60068 13.3788 6.66492 13.3159L9.51758 10.4999L6.66492 7.64722C6.54405 7.52898 6.47318 7.36886 6.46692 7.19989C6.46692 7.00539 6.54418 6.81887 6.6817 6.68134C6.81923 6.54381 7.00576 6.46655 7.20025 6.46655C7.37625 6.46875 7.54492 6.53989 7.66958 6.66455Z" fill="white"/>
                                    </svg>

                                        @endif
                                    </div>
                                </div>
                                <div class="col-6" style="margin-top:5px" data-bs-toggle="modal" data-bs-target="#keahlian">
                                    <div class="tepiborder skills"><span class="fw-semibold">Keahlian</span> <span class="text-info fw-semibold">(Opsional)</span>
                                        @if (!empty($DataProfile['Skill'] != null))
                                        <style>
                                            .skills{
                                                border: 1px solid #5D87FF;
                                            }
                                        </style>
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" style="float: right" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10.0898" cy="10.897" r="10" fill="#5D87FF"/>
                                            <path d="M16.0898 6.84328L7.86127 14.897L4.08984 11.2057L5.0567 10.2594L7.86127 12.9976L15.123 5.89697L16.0898 6.84328Z" fill="white"/>
                                        </svg>
                                        @else
                                        <style>
                                            .skills{
                                                border: 1px solid #DF2121;
                                            }
                                        </style>
                                     <svg style="float:right " width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="10" fill="#DF2121"/>
                                    <path d="M7.66958 6.66455L10.5002 9.49522L13.3162 6.67922C13.3785 6.61301 13.4534 6.56005 13.5366 6.52351C13.6197 6.48696 13.7094 6.46759 13.8003 6.46655C13.9947 6.46655 14.1813 6.54381 14.3188 6.68134C14.4563 6.81887 14.5336 7.00539 14.5336 7.19989C14.5353 7.28979 14.5186 7.3791 14.4846 7.46233C14.4505 7.54556 14.3998 7.62096 14.3356 7.68389L11.4829 10.4999L14.3356 13.3526C14.4564 13.4708 14.5273 13.6309 14.5336 13.7999C14.5336 13.9944 14.4563 14.1809 14.3188 14.3184C14.1813 14.456 13.9947 14.5332 13.8003 14.5332C13.7068 14.5371 13.6135 14.5215 13.5264 14.4874C13.4393 14.4533 13.3603 14.4015 13.2943 14.3352L10.5002 11.5046L7.67692 14.3279C7.61495 14.3919 7.54093 14.443 7.45912 14.4782C7.37731 14.5135 7.28932 14.5322 7.20025 14.5332C7.00576 14.5332 6.81923 14.456 6.6817 14.3184C6.54418 14.1809 6.46692 13.9944 6.46692 13.7999C6.46521 13.71 6.48189 13.6207 6.51594 13.5374C6.54998 13.4542 6.60068 13.3788 6.66492 13.3159L9.51758 10.4999L6.66492 7.64722C6.54405 7.52898 6.47318 7.36886 6.46692 7.19989C6.46692 7.00539 6.54418 6.81887 6.6817 6.68134C6.81923 6.54381 7.00576 6.46655 7.20025 6.46655C7.37625 6.46875 7.54492 6.53989 7.66958 6.66455Z" fill="white"/>
                                    </svg>

                                        @endif
                                    </div>
                                </div>
                                <div class="col-12" style="margin-top:5px" data-bs-toggle="modal" data-bs-target="#sertifikat">
                                    <div class="tepiborder sertifikat"><span class="fw-semibold">Sertifikat</span> <span class="text-info fw-semibold">(Opsional)</span>
                                        @if (!empty($DataProfile['sertifikat'] != null))
                                        <style>
                                            .sertifikat{
                                                border: 1px solid #5D87FF;
                                            }
                                        </style>
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" style="float: right" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10.0898" cy="10.897" r="10" fill="#5D87FF"/>
                                            <path d="M16.0898 6.84328L7.86127 14.897L4.08984 11.2057L5.0567 10.2594L7.86127 12.9976L15.123 5.89697L16.0898 6.84328Z" fill="white"/>
                                        </svg>
                                        @else
                                        <style>
                                            .sertifikat{
                                                border: 1px solid #DF2121;
                                            }
                                        </style>
                                     <svg style="float:right " width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="10" fill="#DF2121"/>
                                    <path d="M7.66958 6.66455L10.5002 9.49522L13.3162 6.67922C13.3785 6.61301 13.4534 6.56005 13.5366 6.52351C13.6197 6.48696 13.7094 6.46759 13.8003 6.46655C13.9947 6.46655 14.1813 6.54381 14.3188 6.68134C14.4563 6.81887 14.5336 7.00539 14.5336 7.19989C14.5353 7.28979 14.5186 7.3791 14.4846 7.46233C14.4505 7.54556 14.3998 7.62096 14.3356 7.68389L11.4829 10.4999L14.3356 13.3526C14.4564 13.4708 14.5273 13.6309 14.5336 13.7999C14.5336 13.9944 14.4563 14.1809 14.3188 14.3184C14.1813 14.456 13.9947 14.5332 13.8003 14.5332C13.7068 14.5371 13.6135 14.5215 13.5264 14.4874C13.4393 14.4533 13.3603 14.4015 13.2943 14.3352L10.5002 11.5046L7.67692 14.3279C7.61495 14.3919 7.54093 14.443 7.45912 14.4782C7.37731 14.5135 7.28932 14.5322 7.20025 14.5332C7.00576 14.5332 6.81923 14.456 6.6817 14.3184C6.54418 14.1809 6.46692 13.9944 6.46692 13.7999C6.46521 13.71 6.48189 13.6207 6.51594 13.5374C6.54998 13.4542 6.60068 13.3788 6.66492 13.3159L9.51758 10.4999L6.66492 7.64722C6.54405 7.52898 6.47318 7.36886 6.46692 7.19989C6.46692 7.00539 6.54418 6.81887 6.6817 6.68134C6.81923 6.54381 7.00576 6.46655 7.20025 6.46655C7.37625 6.46875 7.54492 6.53989 7.66958 6.66455Z" fill="white"/>
                                    </svg>

                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- modal -->
                            <div class="modal fade" id="dataWajib" tabindex="-1" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog" role="document">

                                    <!-- Tambahkan input hidden untuk status deskripsi -->
                                    <input type="hidden" name="deskripsi">

                                    <div class="modal-content">
                                        <div class="modal-header d-flex align-items-center">
                                            <h4 class="modal-title" id="exampleModalLabel1">
                                                Data Wajib
                                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" class="ms-2" style="float: right; margin-top: 6px;" xmlns="http://www.w3.org/2000/svg">
                                               <circle cx="10.0898" cy="10.897" r="10" fill="#5D87FF"/>
                                               <path d="M16.0898 6.84328L7.86127 14.897L4.08984 11.2057L5.0567 10.2594L7.86127 12.9976L15.123 5.89697L16.0898 6.84328Z" fill="white"/>
                                               </svg>
                                            </h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                        <div class="modal-body" style="max-height: 490px; overflow-y: auto;">
                                            <div class="mb-3">
                                                <p class="bg-info p-2 text-white text-center mb-4 fs-4"
                                                    style="border-radius: 10px;">Wajib</p>
                                                <p>Bagian data wajib mencakup nama, alamat email, nomor telepon, dan alamat, yang sebelumnya sudah anda masukkan saat anda melakukan register.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="kelengkapanData" tabindex="-1" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog" role="document">

                                    <!-- Tambahkan input hidden untuk status deskripsi -->
                                    <input type="hidden" name="deskripsi">

                                    <div class="modal-content">
                                        <div class="modal-header d-flex align-items-center">
                                            <h4 class="modal-title" id="exampleModalLabel1">
                                                Kelengkapan Data
                                                @if (!empty($DataProfile['FotoDanFile'] != null))

                                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" class="ms-2" style="float: right; margin-top: 6px;" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="10.0898" cy="10.897" r="10" fill="#5D87FF"/>
                                                <path d="M16.0898 6.84328L7.86127 14.897L4.08984 11.2057L5.0567 10.2594L7.86127 12.9976L15.123 5.89697L16.0898 6.84328Z" fill="white"/>
                                                </svg>
                                                @else
                                                <svg style="float:right; margin-top: 6px;" class="ms-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="10" cy="10" r="10" fill="#DF2121"/>
                                                <path d="M7.66958 6.66455L10.5002 9.49522L13.3162 6.67922C13.3785 6.61301 13.4534 6.56005 13.5366 6.52351C13.6197 6.48696 13.7094 6.46759 13.8003 6.46655C13.9947 6.46655 14.1813 6.54381 14.3188 6.68134C14.4563 6.81887 14.5336 7.00539 14.5336 7.19989C14.5353 7.28979 14.5186 7.3791 14.4846 7.46233C14.4505 7.54556 14.3998 7.62096 14.3356 7.68389L11.4829 10.4999L14.3356 13.3526C14.4564 13.4708 14.5273 13.6309 14.5336 13.7999C14.5336 13.9944 14.4563 14.1809 14.3188 14.3184C14.1813 14.456 13.9947 14.5332 13.8003 14.5332C13.7068 14.5371 13.6135 14.5215 13.5264 14.4874C13.4393 14.4533 13.3603 14.4015 13.2943 14.3352L10.5002 11.5046L7.67692 14.3279C7.61495 14.3919 7.54093 14.443 7.45912 14.4782C7.37731 14.5135 7.28932 14.5322 7.20025 14.5332C7.00576 14.5332 6.81923 14.456 6.6817 14.3184C6.54418 14.1809 6.46692 13.9944 6.46692 13.7999C6.46521 13.71 6.48189 13.6207 6.51594 13.5374C6.54998 13.4542 6.60068 13.3788 6.66492 13.3159L9.51758 10.4999L6.66492 7.64722C6.54405 7.52898 6.47318 7.36886 6.46692 7.19989C6.46692 7.00539 6.54418 6.81887 6.6817 6.68134C6.81923 6.54381 7.00576 6.46655 7.20025 6.46655C7.37625 6.46875 7.54492 6.53989 7.66958 6.66455Z" fill="white"/>
                                                </svg>

                                                @endif
                                            </h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                        <div class="modal-body" style="max-height: 490px; overflow-y: auto;">
                                            <div class="mb-3">
                                                <p class="bg-info p-2 text-white text-center mb-4 fs-4"
                                                    style="border-radius: 10px;">Wajib</p>
                                                <p>Bagian kelengkapan data mencakup foto, cv, lamaran, profile LinkedIn, dan profile Github.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="keteranganDiri" tabindex="-1" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog" role="document">

                                    <!-- Tambahkan input hidden untuk status deskripsi -->
                                    <input type="hidden" name="deskripsi">

                                    <div class="modal-content">
                                        <div class="modal-header d-flex align-items-center">
                                            <h4 class="modal-title" id="exampleModalLabel1">
                                                Keterangan Diri
                                                @if (!empty($DataProfile['Tentang'] != null))

                                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" class="ms-2" style="float: right; margin-top: 6px;" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="10.0898" cy="10.897" r="10" fill="#5D87FF"/>
                                                <path d="M16.0898 6.84328L7.86127 14.897L4.08984 11.2057L5.0567 10.2594L7.86127 12.9976L15.123 5.89697L16.0898 6.84328Z" fill="white"/>
                                                </svg>
                                                @else
                                                <svg style="float:right; margin-top: 6px;" class="ms-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="10" cy="10" r="10" fill="#DF2121"/>
                                                <path d="M7.66958 6.66455L10.5002 9.49522L13.3162 6.67922C13.3785 6.61301 13.4534 6.56005 13.5366 6.52351C13.6197 6.48696 13.7094 6.46759 13.8003 6.46655C13.9947 6.46655 14.1813 6.54381 14.3188 6.68134C14.4563 6.81887 14.5336 7.00539 14.5336 7.19989C14.5353 7.28979 14.5186 7.3791 14.4846 7.46233C14.4505 7.54556 14.3998 7.62096 14.3356 7.68389L11.4829 10.4999L14.3356 13.3526C14.4564 13.4708 14.5273 13.6309 14.5336 13.7999C14.5336 13.9944 14.4563 14.1809 14.3188 14.3184C14.1813 14.456 13.9947 14.5332 13.8003 14.5332C13.7068 14.5371 13.6135 14.5215 13.5264 14.4874C13.4393 14.4533 13.3603 14.4015 13.2943 14.3352L10.5002 11.5046L7.67692 14.3279C7.61495 14.3919 7.54093 14.443 7.45912 14.4782C7.37731 14.5135 7.28932 14.5322 7.20025 14.5332C7.00576 14.5332 6.81923 14.456 6.6817 14.3184C6.54418 14.1809 6.46692 13.9944 6.46692 13.7999C6.46521 13.71 6.48189 13.6207 6.51594 13.5374C6.54998 13.4542 6.60068 13.3788 6.66492 13.3159L9.51758 10.4999L6.66492 7.64722C6.54405 7.52898 6.47318 7.36886 6.46692 7.19989C6.46692 7.00539 6.54418 6.81887 6.6817 6.68134C6.81923 6.54381 7.00576 6.46655 7.20025 6.46655C7.37625 6.46875 7.54492 6.53989 7.66958 6.66455Z" fill="white"/>
                                                </svg>

                                                @endif
                                            </h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                        <div class="modal-body" style="max-height: 490px; overflow-y: auto;">
                                            <div class="mb-3">
                                                <p class="bg-info p-2 text-white text-center mb-4 fs-4"
                                                    style="border-radius: 10px;">Opsional</p>
                                                <p>Keterangan diri berisi informasi singkat mengenai Anda atau latar belakang
                                                Anda.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="pendidikan" tabindex="-1" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog" role="document">

                                    <!-- Tambahkan input hidden untuk status deskripsi -->
                                    <input type="hidden" name="deskripsi">

                                    <div class="modal-content">
                                        <div class="modal-header d-flex align-items-center">
                                            <h4 class="modal-title" id="exampleModalLabel1">
                                                Pendidikan
                                                @if (!empty($DataProfile['school'] != null))

                                               <svg width="21" height="21" viewBox="0 0 21 21" fill="none" class="ms-2" style="float: right; margin-top: 6px;" xmlns="http://www.w3.org/2000/svg">
                                               <circle cx="10.0898" cy="10.897" r="10" fill="#5D87FF"/>
                                               <path d="M16.0898 6.84328L7.86127 14.897L4.08984 11.2057L5.0567 10.2594L7.86127 12.9976L15.123 5.89697L16.0898 6.84328Z" fill="white"/>
                                               </svg>
                                               @else
                                               <svg style="float:right; margin-top: 6px;" class="ms-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <circle cx="10" cy="10" r="10" fill="#DF2121"/>
                                               <path d="M7.66958 6.66455L10.5002 9.49522L13.3162 6.67922C13.3785 6.61301 13.4534 6.56005 13.5366 6.52351C13.6197 6.48696 13.7094 6.46759 13.8003 6.46655C13.9947 6.46655 14.1813 6.54381 14.3188 6.68134C14.4563 6.81887 14.5336 7.00539 14.5336 7.19989C14.5353 7.28979 14.5186 7.3791 14.4846 7.46233C14.4505 7.54556 14.3998 7.62096 14.3356 7.68389L11.4829 10.4999L14.3356 13.3526C14.4564 13.4708 14.5273 13.6309 14.5336 13.7999C14.5336 13.9944 14.4563 14.1809 14.3188 14.3184C14.1813 14.456 13.9947 14.5332 13.8003 14.5332C13.7068 14.5371 13.6135 14.5215 13.5264 14.4874C13.4393 14.4533 13.3603 14.4015 13.2943 14.3352L10.5002 11.5046L7.67692 14.3279C7.61495 14.3919 7.54093 14.443 7.45912 14.4782C7.37731 14.5135 7.28932 14.5322 7.20025 14.5332C7.00576 14.5332 6.81923 14.456 6.6817 14.3184C6.54418 14.1809 6.46692 13.9944 6.46692 13.7999C6.46521 13.71 6.48189 13.6207 6.51594 13.5374C6.54998 13.4542 6.60068 13.3788 6.66492 13.3159L9.51758 10.4999L6.66492 7.64722C6.54405 7.52898 6.47318 7.36886 6.46692 7.19989C6.46692 7.00539 6.54418 6.81887 6.6817 6.68134C6.81923 6.54381 7.00576 6.46655 7.20025 6.46655C7.37625 6.46875 7.54492 6.53989 7.66958 6.66455Z" fill="white"/>
                                               </svg>

                                               @endif
                                            </h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                        <div class="modal-body" style="max-height: 490px; overflow-y: auto;">
                                            <div class="mb-3">
                                                <p class="bg-info p-2 text-white text-center mb-4 fs-4"
                                                    style="border-radius: 10px;">Opsional</p>
                                                <p>Pendidikan mencakup riwayat pendidikan Anda mulai dari sekolah dasar hingga
                                                perguruan tinggi. Jika Anda belum menyelesaikan pendidikan tertinggi Anda, Anda
                                                dapat mencantumkan pendidikan terakhir Anda.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="pengalaman" tabindex="-1" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog" role="document">

                                    <!-- Tambahkan input hidden untuk status deskripsi -->
                                    <input type="hidden" name="deskripsi">

                                    <div class="modal-content">
                                        <div class="modal-header d-flex align-items-center">
                                            <h4 class="modal-title" id="exampleModalLabel1">
                                                Pengalaman
                                                @if (!empty($DataProfile['pengalaman'] != null))

                                               <svg width="21" height="21" viewBox="0 0 21 21" fill="none" class="ms-2" style="float: right; margin-top: 6px;" xmlns="http://www.w3.org/2000/svg">
                                               <circle cx="10.0898" cy="10.897" r="10" fill="#5D87FF"/>
                                               <path d="M16.0898 6.84328L7.86127 14.897L4.08984 11.2057L5.0567 10.2594L7.86127 12.9976L15.123 5.89697L16.0898 6.84328Z" fill="white"/>
                                               </svg>
                                               @else
                                               <svg style="float:right; margin-top: 6px;" class="ms-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <circle cx="10" cy="10" r="10" fill="#DF2121"/>
                                               <path d="M7.66958 6.66455L10.5002 9.49522L13.3162 6.67922C13.3785 6.61301 13.4534 6.56005 13.5366 6.52351C13.6197 6.48696 13.7094 6.46759 13.8003 6.46655C13.9947 6.46655 14.1813 6.54381 14.3188 6.68134C14.4563 6.81887 14.5336 7.00539 14.5336 7.19989C14.5353 7.28979 14.5186 7.3791 14.4846 7.46233C14.4505 7.54556 14.3998 7.62096 14.3356 7.68389L11.4829 10.4999L14.3356 13.3526C14.4564 13.4708 14.5273 13.6309 14.5336 13.7999C14.5336 13.9944 14.4563 14.1809 14.3188 14.3184C14.1813 14.456 13.9947 14.5332 13.8003 14.5332C13.7068 14.5371 13.6135 14.5215 13.5264 14.4874C13.4393 14.4533 13.3603 14.4015 13.2943 14.3352L10.5002 11.5046L7.67692 14.3279C7.61495 14.3919 7.54093 14.443 7.45912 14.4782C7.37731 14.5135 7.28932 14.5322 7.20025 14.5332C7.00576 14.5332 6.81923 14.456 6.6817 14.3184C6.54418 14.1809 6.46692 13.9944 6.46692 13.7999C6.46521 13.71 6.48189 13.6207 6.51594 13.5374C6.54998 13.4542 6.60068 13.3788 6.66492 13.3159L9.51758 10.4999L6.66492 7.64722C6.54405 7.52898 6.47318 7.36886 6.46692 7.19989C6.46692 7.00539 6.54418 6.81887 6.6817 6.68134C6.81923 6.54381 7.00576 6.46655 7.20025 6.46655C7.37625 6.46875 7.54492 6.53989 7.66958 6.66455Z" fill="white"/>
                                               </svg>

                                               @endif
                                            </h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                        <div class="modal-body" style="max-height: 490px; overflow-y: auto;">
                                            <div class="mb-3">
                                                <p class="bg-info p-2 text-white text-center mb-4 fs-4"
                                                    style="border-radius: 10px;">Opsional</p>
                                                <p>Pengalaman berisi informasi mengenai tempat dan waktu pengalaman kerja
                                                Anda. Anda akan mencantumkan jenis pekerjaan Anda (kontrak atau permanen), nama
                                                proyek yang pernah Anda kerjakan, deskripsi proyek, tanggal mulai, tanggal
                                                selesai, dan juga mengunggah bukti pengalaman dalam format JPG, PNG, atau JPEG.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="keahlian" tabindex="-1" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog" role="document">

                                    <!-- Tambahkan input hidden untuk status deskripsi -->
                                    <input type="hidden" name="deskripsi">

                                    <div class="modal-content">
                                        <div class="modal-header d-flex align-items-center">
                                            <h4 class="modal-title" id="exampleModalLabel1">
                                                Keahlian
                                                @if (!empty($DataProfile['Skill'] != null))

                                               <svg width="21" height="21" viewBox="0 0 21 21" fill="none" class="ms-2" style="float: right; margin-top: 6px;" xmlns="http://www.w3.org/2000/svg">
                                               <circle cx="10.0898" cy="10.897" r="10" fill="#5D87FF"/>
                                               <path d="M16.0898 6.84328L7.86127 14.897L4.08984 11.2057L5.0567 10.2594L7.86127 12.9976L15.123 5.89697L16.0898 6.84328Z" fill="white"/>
                                               </svg>
                                               @else
                                               <svg style="float:right; margin-top: 6px;" class="ms-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <circle cx="10" cy="10" r="10" fill="#DF2121"/>
                                               <path d="M7.66958 6.66455L10.5002 9.49522L13.3162 6.67922C13.3785 6.61301 13.4534 6.56005 13.5366 6.52351C13.6197 6.48696 13.7094 6.46759 13.8003 6.46655C13.9947 6.46655 14.1813 6.54381 14.3188 6.68134C14.4563 6.81887 14.5336 7.00539 14.5336 7.19989C14.5353 7.28979 14.5186 7.3791 14.4846 7.46233C14.4505 7.54556 14.3998 7.62096 14.3356 7.68389L11.4829 10.4999L14.3356 13.3526C14.4564 13.4708 14.5273 13.6309 14.5336 13.7999C14.5336 13.9944 14.4563 14.1809 14.3188 14.3184C14.1813 14.456 13.9947 14.5332 13.8003 14.5332C13.7068 14.5371 13.6135 14.5215 13.5264 14.4874C13.4393 14.4533 13.3603 14.4015 13.2943 14.3352L10.5002 11.5046L7.67692 14.3279C7.61495 14.3919 7.54093 14.443 7.45912 14.4782C7.37731 14.5135 7.28932 14.5322 7.20025 14.5332C7.00576 14.5332 6.81923 14.456 6.6817 14.3184C6.54418 14.1809 6.46692 13.9944 6.46692 13.7999C6.46521 13.71 6.48189 13.6207 6.51594 13.5374C6.54998 13.4542 6.60068 13.3788 6.66492 13.3159L9.51758 10.4999L6.66492 7.64722C6.54405 7.52898 6.47318 7.36886 6.46692 7.19989C6.46692 7.00539 6.54418 6.81887 6.6817 6.68134C6.81923 6.54381 7.00576 6.46655 7.20025 6.46655C7.37625 6.46875 7.54492 6.53989 7.66958 6.66455Z" fill="white"/>
                                               </svg>

                                               @endif
                                            </h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                        <div class="modal-body" style="max-height: 490px; overflow-y: auto;">
                                            <div class="mb-3">
                                                <p class="bg-info p-2 text-white text-center mb-4 fs-4"
                                                    style="border-radius: 10px;">Opsional</p>
                                                <p>Keahlian berisi judul-judul keahlian Anda dan deskripsi tentang
                                                keahlian-keahlian tersebut.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="sertifikat" tabindex="-1" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog" role="document">

                                    <!-- Tambahkan input hidden untuk status deskripsi -->
                                    <input type="hidden" name="deskripsi">

                                    <div class="modal-content">
                                        <div class="modal-header d-flex align-items-center">
                                            <h4 class="modal-title" id="exampleModalLabel1">
                                                Sertifikat
                                                @if (!empty($DataProfile['sertifikat'] != null))

                                               <svg width="21" height="21" viewBox="0 0 21 21" fill="none" class="ms-2" style="float: right; margin-top: 6px;" xmlns="http://www.w3.org/2000/svg">
                                               <circle cx="10.0898" cy="10.897" r="10" fill="#5D87FF"/>
                                               <path d="M16.0898 6.84328L7.86127 14.897L4.08984 11.2057L5.0567 10.2594L7.86127 12.9976L15.123 5.89697L16.0898 6.84328Z" fill="white"/>
                                               </svg>
                                               @else
                                               <svg style="float:right; margin-top: 6px;" class="ms-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <circle cx="10" cy="10" r="10" fill="#DF2121"/>
                                               <path d="M7.66958 6.66455L10.5002 9.49522L13.3162 6.67922C13.3785 6.61301 13.4534 6.56005 13.5366 6.52351C13.6197 6.48696 13.7094 6.46759 13.8003 6.46655C13.9947 6.46655 14.1813 6.54381 14.3188 6.68134C14.4563 6.81887 14.5336 7.00539 14.5336 7.19989C14.5353 7.28979 14.5186 7.3791 14.4846 7.46233C14.4505 7.54556 14.3998 7.62096 14.3356 7.68389L11.4829 10.4999L14.3356 13.3526C14.4564 13.4708 14.5273 13.6309 14.5336 13.7999C14.5336 13.9944 14.4563 14.1809 14.3188 14.3184C14.1813 14.456 13.9947 14.5332 13.8003 14.5332C13.7068 14.5371 13.6135 14.5215 13.5264 14.4874C13.4393 14.4533 13.3603 14.4015 13.2943 14.3352L10.5002 11.5046L7.67692 14.3279C7.61495 14.3919 7.54093 14.443 7.45912 14.4782C7.37731 14.5135 7.28932 14.5322 7.20025 14.5332C7.00576 14.5332 6.81923 14.456 6.6817 14.3184C6.54418 14.1809 6.46692 13.9944 6.46692 13.7999C6.46521 13.71 6.48189 13.6207 6.51594 13.5374C6.54998 13.4542 6.60068 13.3788 6.66492 13.3159L9.51758 10.4999L6.66492 7.64722C6.54405 7.52898 6.47318 7.36886 6.46692 7.19989C6.46692 7.00539 6.54418 6.81887 6.6817 6.68134C6.81923 6.54381 7.00576 6.46655 7.20025 6.46655C7.37625 6.46875 7.54492 6.53989 7.66958 6.66455Z" fill="white"/>
                                               </svg>

                                               @endif
                                            </h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                        <div class="modal-body" style="max-height: 490px; overflow-y: auto;">
                                            <div class="mb-3">
                                                <p class="bg-info p-2 text-white text-center mb-4 fs-4"
                                                    style="border-radius: 10px;">Opsional</p>
                                                <p>Sertifikat berisi judul-judul sertifikat yang Anda miliki dan deskripsi tentang
                                                sertifikat tersebut. Jika Anda memiliki sertifikat dari pengalaman sebelumnya,
                                                Anda dapat menambahkannya ke profil Andat.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <section class="employers-listing-area ptb-50" style="direction: ltr;">
                <div class="container">
                    <div class="row">


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

                        <div class="col-12 row p-0" style="margin-left: 3px">
                            <div class="col-12 col-lg-3 filter2 ">
                            <div class="p-3 my-2 mb-3 rounded-2 py-3" style="background-color: #ECF2FF">
                            <div class="d-flex gap-2">
                                <div class="p-1 align-self-center rounded" style="background-color: #5D87FF"">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #ffff;" width="32" height="32"
                                    viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                        d="m11.99 18.54l-7.37-5.73L3 14.07l9 7l9-7l-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7l-9 7l1.63 1.27L12 16zm0-11.47L17.74 9L12 13.47L6.26 9L12 4.53z" />
                                    </svg>
                                </div>
                                <div class="" style="font-size: 16px">
                                    Lowongan Yang <br> Disimpan
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-2" >
                                <span id="jumlah-lowongan" class="fw-bold fs-7">{{ $simpan }}</span>
                            </div>
                        </div>
                                <div class="employers-listing-sidebar1"
                                    style="box-shadow: 0px 10px 10px rgba(245, 246, 253, 1); border-radius:5px">
                                    <h4 class="text-white">Filter Tambahan</h4>

                                    <form style="padding: 20px;" id="SideFilter">
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
                                <div class="col-12 col-sm-12 filter1 " style="background-color: #fff">
                                    <div class="form-group">
                                        <form class="search-form d-flex justify-content-between  row " id="">
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

                                        </form>
                                    </div>
                                </div>
                                <div id="lowonganKosong" class=" w-full "></div>
                                <div id="LowonganUser" class="row w-full "></div>
                                {{-- @if ($limit < 1)

                                    @else
                                    <div class="lihatSelengkapnya btn btn-primary w-100" style="cursor: pointer" id="lihatSelengkapnya">Lihat Selengkapnya
                                    </div>
                                    <div class="lihatSedikit btn btn-primary w-100" style="display: none" id="lihatSedikit">Lihat Sedikit</div>
                                    @endif --}}

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

    @if (session('tidakAda'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('
            tidakAda ') }}',
        });
    </script>
    @endif

    <script>
      $(document).ready(function() {
    var formUrl = "{{ route('jumlah-lowongan') }}";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Fungsi untuk memperbarui jumlah lowongan
    function updateJumlahLowongan() {
        $.ajax({
            url: formUrl,
            type: 'GET',
            success: function(response) {
                var simpan = response.simpan;
                $('#jumlah-lowongan').text(simpan);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    // Memanggil fungsi updateJumlahLowongan saat halaman dimuat
    updateJumlahLowongan();
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
                            updateJumlahLowongan();
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
                        $('.buttonSimpan[data-vacancie-id="' + item.vacancie_id + '"]').addClass('text-warning');
                        $('.labelSimpan[data-label-id="' + item.vacancie_id + '"]').removeClass('hidden');
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
                    text: "Ingin membatalkan pendaftaran ini",
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
                                        location.reload();
                                        $('#lowongan').empty();
                                        let kosong = `<div> <div>`;
                                        $('#lowongan').append(kosong);
                                    });
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
    // $(document).ready(function() {
    //     var formUrl = "{{ route('jumlah-lowongan') }}";

    //     // Fungsi untuk memperbarui jumlah lowongan
    //     function updateJumlahLowongan() {
    //         $.get(formUrl, function(response) {
    //             var simpan = response.simpan;
    //             $('#jumlah-lowongan').text(simpan.length);

    //             $.each(simpan, function(index, item) {
    //                 $('.buttonSimpan[data-vacancie-id="' + item.vacancie_id + '"]').addClass('text-warning');
    //                 $('.labelSimpan[data-label-id="' + item.vacancie_id + '"]').removeClass('hidden');
    //             });
    //         }).fail(function(error) {
    //             console.log(error);
    //         });
    //     }

    //     // Memanggil fungsi updateJumlahLowongan saat halaman dimuat
    //     updateJumlahLowongan();

    //     $('.simpan').on('click', function() {
    //         var formUrl = $('#saveForm').attr('action');
    //         $('#saveForm').submit();
    //     });

    //     function Simpan(id) {
    //         const formId = 'saveForm' + id;
    //         const formUrl = $('#' + formId).attr('action');
    //         $('#' + formId).submit();
    //     }
    // });
</script>
    <script>
            $(document).ready(function() {
    var formUrl = "{{ route('jumlah-lowongan') }}";

    function updateJumlahLowongan() {
        $.get(formUrl, function(response) {
            var simpan = response.simpan;
            var jumlahLowongan = simpan.length;
            $('#jumlah-lowongan').text(jumlahLowongan);
        }).fail(function(error) {
            console.log(error);
        });
    }
    updateJumlahLowongan();

    $('.simpan').on('click', function() {
        var formUrl = $('#saveForm').attr('action');
        $('#saveForm').submit();
    });

    function Simpan(id) {
        const formId = 'saveForm' + id;
        const formUrl = $('#' + formId).attr('action');

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
                $.ajax({
                    url: formUrl,
                    type: 'PATCH',
                    data: $('#' + formId).serialize(),
                    success: function(response) {
                        if (response.suksesBatal) {
                            swalWithBootstrapButtons.fire({
                                icon: 'success',
                                title: 'Berhasil Batal',
                                text: 'Berhasil batal, simpan lowongan.',
                            });
                            updateJumlahLowongan(-1);
                        } else {
                            swalWithBootstrapButtons.fire({
                                icon: 'success',
                                title: 'Berhasil Simpan',
                                text: 'Berhasil simpan lowongan.',
                            });
                            updateJumlahLowongan(1);
                        }
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

    function updateJumlahLowongan(delta) {
        var jumlahLowongan = parseInt($('#jumlah-lowongan').text());
        jumlahLowongan += delta;
        $('#jumlah-lowongan').text(jumlahLowongan);
    }
});
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
            var formUrl = "{{ route('Tampil/lowongan/Dashboard') }}"; // Changed 'Route' to 'route'

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
                                                    <div class="row d-flex justify-content-between mb-3" style="color: black">
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
                        $('#lowonganKosong').append(lowongan);
                    } else {
                        $.each(response.lowongan, function(index, item) {
                            console.log(response.lowongan);

                            var route = "{{ route('detailLowongan', ':id') }}".replace(
                                ':id', item.id);
                            var routeSimpan = "simpan-lowongan/" + item.id;
                            var gaji = "Rp " + Number(item.gaji).toLocaleString(
                                'id-ID');
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
    {{-- <script>
        $(document).ready(function() {
            $('#lihatSelengkapnya').click(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var url = "{{route('lihat-selengkapnya-user')}}";

                $.ajax({
                    type: 'Get',
                    url: url,
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
                                <!-- <div class="col-3 mb-2">
                                    <span class="fw-semibold fs-4" style="color: black;">Divisi</span>
                                </div>
                                <div class="col-1">
                                    <span class="fw-semibold fs-4" style="color: black;">:</span>
                                </div>
                                <div class="col-8">
                                    <span class="fs-4" style="color: black;">${item.division.divisi }</span>
                                </div> -->
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
                            $('.buttonSimpan[data-vacancie-id="' + item.vacancie_id + '"]').addClass('text-warning');

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
    </script> --}}
     {{-- <script>
        $(document).ready(function() {
            $('#lihatSedikit').click(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var url = "{{route('Lowongan/Lowongan')}}";

                $.ajax({
                    type: 'Get',
                    url: url,

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
                            <div class="col-md-6 col-12 mix a s c" id="card2">
                                <div class="hot-jobs-list col-12">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <a href="${route}">
                                                <div class="hot-jobs-content">
                                                    <div class="row d-flex justify-content-between mb-3" style="color: black">
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

                        $('#LowonganUser').append(lowongan);


                    });
                    $.each(response.simpan, function(index, item) {
                            $('.buttonSimpan[data-vacancie-id="' + item.vacancie_id + '"]').addClass('text-warning');

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
    </script> --}}
    <script>
        $(document).ready(function() {
            $('#SideFilter').change(function() {
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
                var formUrl = "{{ route('Dashboard/SideFilter') }}";
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
                var formUrl = "{{ route('Dashboard/searchlowongan') }}";

                // Kirim permintaan AJAX ke server
                $.ajax({
                    url: '{{ route('Dashboard/searchlowongan') }}',
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
                        // alert(response.lowonganKosong);
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
                            // alert(response.lowongan);
                            $.each(response.lowongan, function(index, item) {
                                console.log(response.lowongan);
                                // alert(response.lowongan);
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
                                $('.labelSimpan[data-label-id="' + item.vacancie_id + '"]').removeClass('hidden');
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
</body>

</html>
