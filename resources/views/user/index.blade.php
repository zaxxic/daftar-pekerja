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
    <!-- Rtl CSS -->
    <link rel="stylesheet" href="assets1/css/rtl.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/logo.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Title -->
    <title>Dashboard User</title>
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
                <div class="col-lg-4">
                    <div class="employers-listing-sidebar">
                        <h4 class="text-white">Cari Divisi</h4>

                        <form class="search-form" action="{{ route('dashboard-filter') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Cari Berdasarkan Divisi</label>
                                <select name="division">
                                    <option value="" @if (!$selectedDivision) selected @endif>Semua
                                    </option>
                                    @foreach ($divisi as $item)
                                    <option value="{{ $item->divisi }}" @if ($selectedDivision===$item->divisi) selected @endif>
                                        {{ $item->divisi }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Cari Divisi
                            </button>
                        </form>
                    </div>


                    <style>
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
                    </style>
                    <div class="employers-listing-sidebar mt-5 mb-5" id="pp">
                        <h4 class="text-white">Lamaran Ditampung</h4>
                        @forelse ($registration as $item)
                        <div class="col-lg-12 mt-3" id="lowongan">
                            <div class="d-flex justify-content-between mb-3">
                                @if (!in_array($item->status, ['nonaktif', 'dipecat']))
                                <h5><a href="" style="color: black">{{ $item->Vacancy->judul }}</a></h5>
                                @endif
                                @if (!in_array($item->status, ['nonaktif', 'dipecat']))
                                <div>
                                    @if ($item->status === 'diterima')
                                    <span class="status bg-success" style="width: 79px;">{{ $item->status }}</span>
                                    @elseif(in_array($item->status, ['lulus']))
                                    <span class="status bg-primary" style="width: 75px;">{{ $item->status }}</span>
                                    @else
                                    <span class="status bg-warning"><span>{{ $item->status }}</span></span>
                                    @endif
                                </div>
                                @endif
                            </div>
                            <ul>
                                @if (!in_array($item->status, ['nonaktif', 'lulus', 'ditolak', 'menunggu']))
                                <li class="mb-2 mt-2"><span>Tanggal Wawancara :</span>
                                    {{ \Carbon\Carbon::parse($item->User->tanggal_wawancara)->locale('id')->isoFormat('D MMMM Y') }}
                                </li>
                                <li class="mb-2 mt-2"><span>Jam Wawancara :</span>
                                    {{ \Carbon\Carbon::parse($item->User->tanggal_wawancara)->locale('id')->isoFormat('h:m') }}
                                </li>
                                @endif
                                @if ($item->status === 'diterima')
                                <li class="mb-2"><span>Lokasi Wawancara : </span>
                                    {{ $item->User->lokasi_wawancara }}
                                </li>
                                @endif

                                @if (!in_array($item->status, ['nonaktif', 'dipecat']))
                                <li class="mb-2"><span>Posisi :</span>{{ $item->Vacancy->pekerja }}</li>
                                <li class="mb-2"><span>Divisi :</span>{{ $item->Vacancy->Division->divisi }}</li>
                                @endif
                                @if (!in_array($item->status, ['lulus', 'nonaktif']))
                                <li class="mb-2"><span>Slot Tersedia : </span> {{ $item->Vacancy->slot }}</li>
                                @endif
                                <div class="d-flex justify-content-between">
                                    @if (!in_array($item->status, ['nonaktif', 'dipecat']))
                                    <li class="mb-2"><span>Tipe Kerja : </span>{{ $item->Vacancy->tipe }}</li>
                                    @endif
                                    @if ($item->status === 'menunggu')
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('detailLowongan', $item->Vacancy->id) }}">
                                            <button class="btn btn-primary mb-4">
                                                Detail
                                            </button>
                                        </a>
                                        <li class="ml-1" id="batal">
                                            <button class="btn btn-danger mb-4">Batal</button>
                                        </li>
                                    </div>

                                    @else ($item->Vacancy->status === 'aktif')
                                    <li class="ml-auto" style="margin-left: 300px;">
                                        <a href="{{ route('detailLowongan', $item->Vacancy->id) }}">
                                            <button class="btn btn-primary mb-4" style="background-color: #2042e3">
                                                Detail
                                            </button>
                                        </a>
                                    </li>

                                    @endif
                                </div>
                            </ul>
                        </div>
                        @empty
                        @if (Auth()->user()->status === 'ditolak')
                        <div class="mb-2" style="padding: 10%;"><span class="mb-2">Anda telah menerima pemberitahuan bahwa pendaftaran Anda telah ditolak. Mohon periksa email Anda untuk informasi lebih lanjut.</span>
                            <div class="d-flex justify-content-end">
                                <a href="https://mail.google.com/" target="_blank">
                                    <button class="btn btn-primary mb-4">
                                        Cek Email
                                    </button>
                                </a>
                            </div>
                        </div>
                        @elseif (Auth()->user()->status === 'gagal')
                        <div class="mb-2" style="padding: 10%;"><span class="mb-2">Anda telah menerima pemberitahuan bahwa pendaftaran Anda tidak memnuhi kriteria. Mohon periksa email Anda untuk informasi lebih lanjut.</span>
                            <div class="d-flex justify-content-end">
                                <a href="https://mail.google.com/" target="_blank">
                                    <button class="btn btn-primary mb-4">
                                        Cek Email
                                    </button>
                                </a>
                            </div>
                        </div>
                        @else
                        <div class="col-lg-12 mt-3 ml-5" id="lowongan">
                            <img src="{{ asset('assets/nodatas.png') }}" alt="" width="180px">
                        </div>
                        @endif
                        @endforelse

                    </div>
                </div>
                <div class="col-lg-8">
                <div class="mb-4" style="border-bottom: 2px solid #5d87ff; width: 40%;">
                        <h4 style="color: #5d87ff;">Lowongan Yang Didaftar</h4>
                    </div>
                    <div class="shorting">
                        <div class="row">
                            @forelse ($registration as $item)
                            <a href="{{ route('detailLowongan', $item->Vacancy->id) }}" id="card2">

                                <div id="card2">
                                    <div class="hot-jobs-list col-md-12 border border-info col-12 col-lg-12">
                                        <div class="row align-items-center ">
                                            <div class="col-12 col-lg-12 ">

                                                <div class="hot-jobs-content ">
                                                    <div class="row d-flex justify-content-between" style="color: black">
                                                        <h4 class="col-12 col-md-12 col-xl-6 tengah">{{ $item->Vacancy->judul }}</h4>
                                                        <p class="col-12 col-md-12 col-lg-12  col-xl-6 tanggal justify-content-lg-endcustom justify-content-xl-endcustom ">
                                                            <span class="fw-semibold fs-4" style="float: right; color: #5d87ff;">{{ 'Rp ' . number_format($item->Vacancy->gaji, 0, ',', '.') }}</span>
                                                        </p>
                                                    </div>
                                                    <span class="sub-title text-primary mb-1"></span>
                                                    <ul>
                                                        <li class="fs-3"><span>Slot Tersedia : </span><span class="fw-medium">{{ $item->Vacancy->slot }}</span>
                                                        </li>
                                                        @if (in_array($item->Vacancy->status, ['dihapus', 'nonaktif']))
                                                        <li class="fs-3"><span>Status Lowongan : </span>sudah tidak tersedia</li>
                                                        @endif
                                                        </li>
                                                        <li class="fs-3"><span>Divisi : </span><span class="fw-medium">{{ $item->Vacancy->Division->divisi }}</span></li>
                                                        <li class="fs-3"><span>Posisi : </span><span class="fw-medium">{{ $item->Vacancy->pekerja }}</span></li>
                                                        <li class="fs-3"><span>Tipe Kerja : </span><span class="fw-medium">{{ $item->Vacancy->tipe }}</span></li>

                                                        <hr>
                                                        <div class="d-flex">
                                                            @if ($item->status === 'diterima')
                                                            <span class="status bg-success" style="width: 79px;">{{ $item->status }}</span>
                                                            @elseif($item->status === 'lulus')
                                                            <span class="status bg-primary" style="width: 75px;">{{ $item->status }}</span>
                                                            @else($item->status === 'menunggu')
                                                            <span class="status bg-warning"><span>{{ $item->status }}</span></span>
                                                            @endif
                                                            <p class="ms-3 fs-3" style="color: #7c8fac;">Berakhir Pada Tanggal: {{ Carbon::parse($item->batas)->format('d F Y') }}</p>

                                                        </div>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            @empty
                            @endforelse
                        </div>
                        <div class="row">
                            @forelse ($lowongan as $item)
                            <div id="card2">
                                <div class="mb-4" style="border-bottom: 2px solid #5d87ff; width: 33%;">
                                    <h4 style="color: #5d87ff;">Lowongan Tersedia</h4>
                                </div>
                                <div class="hot-jobs-list col-md-12 col-12 col-lg-12">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-12">
                                            <!-- <div class="hot-jobs-content">
                                                <div class="row d-flex justify-content-between" style="color: black">
                                                    <h3 class="col-12 col-md-12 col-xl-6 tengah"><a href="">{{ $item->judul }}</a></h3>
                                                    <p class="col-12 col-md-12 col-lg-12  col-xl-6 tanggal  justify-content-lg-endcustom justify-content-xl-endcustom">
                                                        <span class="text-center text-md-left">Berakhir Pada
                                                            Tanggal:
                                                            {{ Carbon::parse($item->batas)->format('d M Y') }}</span>
                                                    </p>
                                                </div>
                                                <span class="sub-title text-primary mb-1">{{ $item->Division->divisi }}</span>
                                                <ul>
                                                    <li><span>Gaji
                                                            :</span>{{ 'Rp ' . number_format($item->gaji, 0, ',', '.') }}
                                                    </li>
                                                    <li><span>Slot Tersedia : </span>{{ $item->slot }}</li>
                                                    <div class="row ">
                                                        <li class="col-12 col-md-12"><span>Tipe Kerja :
                                                            </span>{{ $item->tipe }}</li>
                                                        <li class="col-12 col-md-12 col-lg-12 d-flex justify-content-center justify-content-md-center tengah justify-content-lg-endcustom justify-content-xl-end">
                                                            <a href="{{ route('detailLowongan', $item->id) }}" class="text-white">
                                                                <button class="default-btn">Detail</button>
                                                            </a>
                                                        </li>
                                                    </div>
                                                </ul>
                                            </div> -->
                                            <a href="{{ route('detailLowongan', $item->id) }}">
                                                <div class="hot-jobs-content">
                                                    <div class="row d-flex justify-content-between mb-3" style="color: black">
                                                        <h4 class="col-12 col-md-12 col-xl-6 tengah">{{ $item->judul }}</h4>
                                                        <p class="col-12 col-md-12 col-lg-12  col-xl-6 tanggal  justify-content-lg-endcustom justify-content-xl-endcustom">
                                                            <!-- <span class="text-center text-md-left">Berakhir Pada
                                                            Tanggal:
                                                            {{ Carbon::parse($item->batas)->format('d M Y') }}</span> -->
                                                            @if($item->status)
                                                            <span class="fw-semibold fs-4" style="float: right; color: #5d87ff;">{{ 'Rp ' . number_format($item->gaji, 0, ',', '.') }}</span>
                                                            @else
                                                            <span class="fw-semibold fs-4" style="float: right; color: #5d87ff;">Gaji Tidak Ditambahkan</span>
                                                            @endif
                                                        </p>
                                                    </div>
                                                    <ul>
                                                        <li class="fs-3"><span>Slot Tersedia : </span><span class="fw-medium">{{ $item->slot }}</span></li>
                                                        <li class="fs-3"><span>Divisi : </span><span class="fw-medium">{{ $item->Division->divisi }}</span></li>
                                                        <li class="fs-3"><span>Posisi : </span><span class="fw-medium">{{ $item->pekerja }}</span></li>
                                                        <li class="fs-3"><span>Tipe Kerja :</span><span class="fw-medium">{{ $item->tipe }}</span></li>
                                                        <hr>
                                                    </ul>
                                                </div>
                                            </a>
                                            <div class="card-footer">
                                                <div class="d-flex justify-content-between">

                                                    <p class="fs-3" style="color: #7c8fac;">Berakhir Pada Tanggal: {{ Carbon::parse($item->batas)->format('d F Y') }}</p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3V6a2 2 0 0 1 2-2" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            @empty
                            <div class="row">
                                <div class="col-lg-12 mt-5 text-center" id="lowongan">
                                    <img src="{{ asset('assets/nodatas.png') }}" alt="" width="350px">
                                </div>
                            </div>
                            @endforelse
                            <div class="col-12">
                                <div class="pagination-area">
                                    @if ($cek > 2)
                                    <button class="default-btn"><a href="{{ route('lowongan-user', $item->id) }}" class="text-white">Lihat Selengkapnya</a></button>
                                    @endif
                                    {{-- {{ $lowongan->links() }} --}}
                                </div>
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
    <!-- Custom JS -->
    <script src="assets1/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">
    @if (session('tidakAda'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('
            tidakAda ') }}'
        });
    </script>
    @endif
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
</body>

</html>