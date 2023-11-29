<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/dist/libs/daterangepicker/daterangepicker.css') }}">  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets1/css/stylesCarousel.css') }}">
    <!-- Add Bootstrap JavaScript and jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-<v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ asset('assets/dist/libs/prismjs/themes/prism-okaidia.min.css') }}">

</head>

<body>
    @extends('layouts.app')
    @section('content')
    <div class="">
        <div class="row">
            <div class="col-lg-8">
                <div class="card overflow-hidden">
                    <div class="card-body p-0">
                        @if (session()->has('success'))
                        <script>
                            Swal.fire(
                                'Berhasil!',
                                "{{ session('success') }}",
                                'success'
                            )
                        </script>
                        @endif
                        @if (session()->has('add'))
                        <script>
                            Swal.fire(
                                'Berhasil!',
                                "{{ session('add') }}",
                                'success'
                            )
                        </script>
                        @endif
                        @if (session()->has('update'))
                        <script>
                            Swal.fire(
                                'Berhasil!',
                                "{{ session('update') }}",
                                'success'
                            )
                        </script>
                        @endif
                        @if (session()->has('tambah'))
                        <script>
                            Swal.fire(
                                'Berhasil!',
                                "{{ session('tambah') }}",
                                'success'
                            )
                        </script>
                        @endif

                        @if (session()->has('sunting'))
                        <script>
                            Swal.fire(
                                'Berhasil!',
                                "{{ session('sunting') }}",
                                'success'
                            )
                        </script>
                        @endif
                        @if (session()->has('gagal'))
                        <script>
                            Swal.fire(
                                'Berhasil!',
                                "{{ session('gagal') }}",
                                'success'
                            )
                        </script>
                        @endif

                        <img src="{{ asset('assets/profilebg.jpg') }}" alt="" class="img-fluid">
                        <div class="row ">
                            <div class="col-lg-8 col-md-8 col-7 ">
                                <div class="mt-n5">
                                    <div class="d-flex ms-5 mb-2">
                                        <div class="linear-gradient d-flex align-items-center justify-content-center rounded-circle" style="width: 110px; height: 110px; position: relative;">
                                            <div class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden" style="width: 100px; height: 100px;">
                                                <!-- <img src="{{ asset('assets/user-1.jpg') }}" alt="" class="w-100 h-100"> -->
                                                <a href="{{ asset('foto_user/' . $data->foto) }}" data-lightbox="image-1" data-title="Gambar Profil Anda">
                                                    @if ($data->foto === 'default/default.png')
                                                    <img src="{{ asset($user->foto) }}" alt="" width="180px" class="img-fluid rounded-circle" style="width: 120px; height: 120px; object-fit: cover;">
                                                    @else
                                                    <img src="{{ asset('foto_user/' . $data->foto) }}" alt="" width="180px" class="img-fluid rounded-circle" style="width: 120px; height: 120px; object-fit: cover;">
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-4 mb-3">
                                    <h5 class="fs-5 mb-0 fw-semibold mb-3">{{ $data->name }}</h5>
                                    <!-- <div style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; float: right;">
                                                        <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#detail-cv-{{ Auth()->User()->cv }}">CV</button>
                                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail-lamaran-{{ Auth()->User()->lamaran }}">Lamaran</button>
                                                    </div> -->
                                </div>
                            </div>
                            <div class="modal fade" id="detail-cv-{{ Auth()->User()->cv }}" tabindex="-1" aria-labelledby="detail-cv-{{ Auth()->User()->cv }}" aria-hidden="true">
                                <div class="modal-dialog modal-fullscreen">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Cv pekerja</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @if (Auth()->User()->cv === 'default/default.png')
                                            <div class="row">
                                                <div class="col-lg-12 mt-5 text-center" id="lowongan">
                                                    <img src="/assets/nodatas.png" alt="" width="350px">
                                                </div>
                                            </div>
                                            @else
                                            <embed src="{{ asset('cv/' . $data->cv) }}" type="application/pdf" width="100%" height="100%">
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <div class="list-unstyled align-items-center justify-content-center justify-content-lg-start my-3 gap-3 mx-4">
                                    <div class="position-relative d-flex  mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-3" width="25" height="25" viewBox="0 0 24 24">
                                            <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2" />
                                        </svg>
                                        <h6 class="mb-0 mt-1">{{ $data->no_telp }}</h6>
                                    </div>

                                    <div class="position-relative d-flex mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-3" width="25" height="25" viewBox="0 0 24 24">
                                            <g fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="M3 7a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z" />
                                                <path d="m3 7l9 6l9-6" />
                                            </g>
                                        </svg>
                                        <h6 class="mb-0 mt-1">{{ $data->email }}</h6>
                                    </div>
                                    <div class="position-relative d-flex mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-3 alamat" width="25" height="26" viewBox="0 0 24 24">
                                            <g fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0-6 0" />
                                                <path d="M17.657 16.657L13.414 20.9a2 2 0 0 1-2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z" />
                                            </g>
                                        </svg>
                                        <h6 class="mb-0 mt-1">{{ $data->alamat }}</h6>
                                    </div>
                                </div>
                            </div>
                            <style>
                                @media (max-width: 760px) {
                                    svg.alamat {
                                        width: 25;
                                        height: 25;
                                    }
                                }

                                @media (max-width: 320px) {
                                    svg.alamat {
                                        width: 49;
                                        height: 49;
                                    }
                                }

                                @media (max-width: 410px) {
                                    svg.alamat {
                                        width: 38;
                                        height: 38;
                                    }
                                }

                                /* HR untuk tampilan di luar (laptop) */
                                @media (min-width: 1080px) {
                                    svg.alamat {
                                        width: 25;
                                        height: 25;
                                    }
                                }
                            </style>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="text-center mb-3 ms-4 padding">
                                    <a href="{{ route('user.cv', ['id' => $data->id]) }}" class="btn btn-primary me-2">CV</a>
                                    <a href="{{ route('user.lamaran', ['id' => $data->id]) }}" class="btn btn-primary">Lamaran</a>
                                </div>
                            </div>
                            <style>
                                @media (min-width: 768px) {
                                    div.padding {
                                        padding-top: 90px;
                                    }
                                }

                                @media (max-width: 600px) {
                                    div.padding {
                                        padding-top: 10px;
                                    }
                                }

                                /* HR untuk tampilan di luar (laptop) */
                                @media (min-width: 1080px) {
                                    div.padding {
                                        padding-top: 90px;
                                    }
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card position-relative overflow-hidden mb-4" style="height: 94%;">
                            <div class="card-header bg-info d-flex align-items-center justify-content-between">
                                <h4 class="card-title text-white mb-0">Tentang</h4>
                            </div>
                            <div class="card-body p-4">
                                @if (!empty($data->deskripsi))
                                <form>
                                    <p>{{ $data->deskripsi }}</p>
                                </form>
                                @else
                                <div class="text-center" id="lowongan">
                                    <img src="{{ asset('assets/nodatas.png') }}" alt="" width="200px">
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <style>
                        .accordion {
                            background-color: #ffffff00;
                            color: #000000;
                            cursor: pointer;
                            padding: 8px;
                            width: 100%;
                            border: none;
                            text-align: left;
                            outline: none;
                            font-size: 15px;
                            transition: 0.4s;
                            height: 40px;
                            border-radius: 10px;
                        }

                        .active,
                        .accordion:hover {
                            background-color: #549bff;
                            color: white;
                        }

                        .accordion:after {
                            content: '\002B';
                            color: white;
                            font-weight: bold;
                            float: top;
                            margin-left: 5px;
                        }

                        .active:after {
                            content: "\2212";
                        }

                        .panel {
                            padding: 0 18px;
                            background-color: white;
                            max-height: 0;
                            overflow: hidden;
                            transition: max-height 0.2s ease-out;

                        }
                    </style>


                    <div class="col-lg-12">
                        <div class="card position-relative overflow-hidden mb-4">
                            <div class="card-header bg-info d-flex align-items-center">
                                <h4 class="card-title text-white mb-0">Pengalaman</h4>
                            </div>
                            <div class="card-body p-4">
                                @forelse($experience as $key => $item)
                                <button class="accordion mt-2">
                                    <div class="d-flex">
                                        <p class="  fw-semibold fs-4">{{ $item->Tempat }}</p>
                                        <span class="fs-2 ms-2 me-2 mt-1">{{ \Carbon\Carbon::parse($item->TanggalAwal)->locale('id')->isoFormat('D MMM Y ') }}</span>-
                                        <span class="fs-2 ms-2 mt-1">{{ \Carbon\Carbon::parse($item->TanggalAkhir)->locale('id')->isoFormat('D MMM Y ') }}</span>
                                    </div>
                                </button>
                                <div class="panel card-body pt-2">

                                    <span class="form-label fw-semibold fs-4">{{ $item->NamaProjek }}</span>
                                    <br>
                                    {{ $item->JenisPekerjaan }}
                                    <p class="form-label fw-semibold mt-3">Detail Projek :</p>
                                    {{ $item->DetailProjek }}
                                    <p class="form-label fw-semibold mt-3">Bukti :</p>
                                    <div class="text-center mb-4" style="width: 670px; height: 500px; border: 1px solid #adadac; overflow: hidden; position: relative; border-radius: 10px;">
                                        <a href="{{ asset('pengalaman/' . $item->Bukti) }}" data-lightbox="image-1" data-title="Gambar Profil Anda">
                                            <img src="{{ asset('pengalaman/' . $item->Bukti) }}" style="width: 100%; height: 100%; object-fit: contain;" alt="" />
                                        </a>
                                    </div>
                                </div>

                                @empty
                                <div class="text-center" id="lowongan">
                                    <img src="{{ asset('assets/nodatas.png') }}" alt="" width="200px">
                                </div>`
                                @endforelse

                            </div>


                            <script>
                                var acc = document.getElementsByClassName("accordion");
                                var i;

                                for (i = 0; i < acc.length; i++) {
                                    acc[i].addEventListener("click", function() {
                                        this.classList.toggle("active");
                                        var panel = this.nextElementSibling;
                                        if (panel.style.maxHeight) {
                                            panel.style.maxHeight = null;
                                            panel.style.border = null;
                                            this.style.borderRadius = null;

                                        } else {
                                            panel.style.maxHeight = panel.scrollHeight + "px";
                                            panel.style.border = "1px solid rgb(122, 122, 122)";
                                            panel.style.borderTop = "0px solid black";
                                            panel.style.borderRadius = "0px 0px 10px 10px ";
                                            this.style.borderRadius = "10px 10px 0px 0px";
                                        }
                                    });
                                }
                            </script>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card position-relative overflow-hidden mb-4">
                            <div class="card-header bg-info d-flex align-items-center">
                                <h4 class="card-title text-white mb-0">Keahlian</h4>
                            </div>
                            <div class="card-body p-4">
                                @forelse ($skill as $item)
                                <div class="mt-2 mb-2">
                                    <div class="d-flex">
                                        <div>
                                            <p class="form-label fw-semibold">{{ $item->judul }}</p>
                                            <p class="mt-2">{{ $item->deskripsi }}</p>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="text-center" id="lowongan">
                                    <img src="{{ asset('assets/nodatas.png') }}" alt="" width="200px">
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card position-relative overflow-hidden mb-4" style="height: 94%;">
                            <div class="card-header bg-info d-flex align-items-center">
                                <h4 class="card-title text-white mb-0">Pendidikan</h4>
                            </div>
                            <div class="card-body p-4">
                                @forelse ($school as $item)
                                <div class="mt-2 mb-2 d-flex justify-content-between">
                                    <div class="d-flex">
                                        <div class="me-4" style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; text-align: center; vertical-align: middle; line-height: 35px;">
                                            <img src="{{ asset('assets/user-1.jpg') }}" alt="" class="w-100 h-100">
                                        </div>
                                        <div>
                                            <p for="exampleInputPassword1" class=" fw-semibold" style="margin-bottom: 0">
                                                {{ $item->NamaSekolah }}
                                            </p>
                                            @if ($item->Jurusan !== '')
                                            <p for="" class="" style="margin: 0">
                                                {{ $item->Jurusan }}
                                            </p>
                                            @endif
                                            <p class=" " style="margin: 0">
                                                {{ \Carbon\Carbon::parse($item->TanggalAwal)->locale('id')->isoFormat('MMM  Y') .'->' .\Carbon\Carbon::parse($item->TanggalAkhir)->locale('id')->isoFormat('MMM  Y') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                                @empty
                                <div class="text-center" id="lowongan">
                                    <img src="{{ asset('assets/nodatas.png') }}" alt="" width="200px">
                                </div>`
                                @endforelse
                            </div>

                        </div>
                    </div>

                    {{-- ppppp --}}
                    <style>
                        .servitikat {
                            width: 100%;
                            overflow-x: scroll;

                            overflow-y: hidden;
                            white-space: nowrap;

                            display: flex;

                        }

                        .truncate-text {
                            max-height: calc(1.2em * 5);
                            /* Adjust the number of lines (5 lines in this example) */
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: nowrap;
                        }

                        .menu {
                            display: none;
                        }
                    </style>
                    <div class="col-lg-12">
                        <div class="card position-relative overflow-hidden mb-4">
                            <div class="card-header bg-info d-flex align-items-center justify-content-between">
                                <h4 class="card-title text-white mb-0">Sertifikat</h4>
                            </div>
                            <div class="card-body">

                                <section class="product">

                                    <button class="pre-btn"><img src="{{ asset('images/arrow.png') }}" alt=""></button>
                                    <button class="nxt-btn"><img src="{{ asset('images/arrow.png') }}" alt=""></button>
                                    <div class="product-container">
                                        @forelse ($certificate as $item)
                                        <div class="product-card">
                                            <div class="col-lg-12 ">
                                                <div class="card" style="height: 90%;">
                                                    <div class="p-2">
                                                        <div class="d-flex align-items-center">
                                                            <h4 class="card-title mb-0"></h4>
                                                            <div class="ms-auto mb-0">
                                                                <div class="dropdown dropstart">
                                                                    <a href="#" class="link text-dark" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="fs-7">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                                                                <path fill="currentColor" d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2s2-.9 2-2s-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2s2-.9 2-2s-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2s2-.9 2-2s-.9-2-2-2z" />
                                                                            </svg>
                                                                        </i>
                                                                    </a>
                                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <li class="d-flex">
                                                                            <a href="#" class="dropdown-item text-primary" data-bs-toggle="modal" data-bs-target="#certificate-update-{{ $item->id }}">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-2" style="margin-bottom: 3px;" width="20" height="20" viewBox="0 0 24 24">
                                                                                    <path fill="currentColor" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                                                                                </svg>

                                                                                Edit
                                                                            </a>
                                                                        </li>
                                                                        <li class="d-flex">
                                                                            <form action="{{ route('certificate-delete', $item->id) }}" method="POST" style="display: inline;" class="dropdown-item" id="formsertifikat-{{ $item->id }}">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="button" class=" delete-button me-1 dropdown-item text-primary" onclick="Sertifikat('{{ $item->id }}')" style="background: none; border: none; padding: 0;">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-2" width="20" height="20" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                                                                        <path fill="currentColor" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                                                                                    </svg>

                                                                                    Hapus
                                                                                </button>
                                                                            </form>
                                                                        </li>
                                                                        <li class="d-flex">
                                                                            <a href="#" class="dropdown-item text-primary" data-bs-toggle="modal" data-bs-target="#certificate-detail-{{ $item->id }}">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-2" width="20" height="20" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                                                                    <path fill="currentColor" d="M12 16q1.875 0 3.188-1.313T16.5 11.5q0-1.875-1.313-3.188T12 7q-1.875 0-3.188 1.313T7.5 11.5q0 1.875 1.313 3.188T12 16Zm0-1.8q-1.125 0-1.913-.788T9.3 11.5q0-1.125.788-1.913T12 8.8q1.125 0 1.913.788T14.7 11.5q0 1.125-.787 1.913T12 14.2Zm0 4.8q-3.65 0-6.65-2.038T1 11.5q1.35-3.425 4.35-5.463T12 4q3.65 0 6.65 2.038T23 11.5q-1.35 3.425-4.35 5.463T12 19Zm0-7.5Zm0 5.5q2.825 0 5.188-1.488T20.8 11.5q-1.25-2.525-3.613-4.013T12 6Q9.175 6 6.812 7.488T3.2 11.5q1.25 2.525 3.613 4.013T12 17Z" />
                                                                                </svg>

                                                                                Detail
                                                                            </a>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 mb-3">
                                                                <div class="border border-4 border-white d-flex align-items-center justify-content-center overflow-hidden" style="width: 200px; height: 110px;">
                                                                    <img src="{{ asset('sertifikat/' . $item->foto) }}" alt="" style="height: 100%; width: 100%; border-radius: 6px;">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 " style="height: 100px">
                                                                <span style="color: black">{{ $item->judul }}</span>
                                                                <p>{{ $item->deskripsi }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    @empty
                                    <div class="text-center col-12" id="lowongan">
                                        <img src="{{ asset('assets/nodatas.png') }}" alt="" width="200px">
                                    </div>`
                                    @endforelse
                                </section>



                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="col-lg-12">
                    <div class="card mb-4" style="height: auto;">
                        <div class="card-header bg-info d-flex align-items-center">
                            <h4 class="card-title text-white mb-0">Lowongan Yang Telah Didaftar</h4>
                        </div>
                        <div class="card-body p-4">
                            @foreach ($lowongan as $item)
                            <ul class="overview">
                                <li class="row">
                                    <p class="fw-semibold col-3"> Judul </p>
                                    <p class="ellipsis  col-9">: {{ $item->Vacancy->judul }}</p>
                                </li>
                                <li class="row">
                                    <p class="fw-semibold  col-3"> Divisi</p>
                                    <p class="ellipsis  col-9">: {{ $item->Vacancy->Division->divisi }}</p>
                                </li>
                                <li class="row">
                                    <p class="fw-semibold  col-3"> Posisi</p>
                                    <p class="ellipsis  col-9">: {{ $item->Vacancy->pekerja }}</p>
                                </li>
                            </ul>

                            <!-- <div style="float: right;">
                                        <button class="btn btn-danger me-2" data-bs-toggle="modal" data-bs-target="#reject-user-{{ $data->id }}">Tolak</button>
                                        <button class="btn btn-success" data-bs-toggle="modal" data-id="{{ $data->id }}" data-bs-target="#acc-user-{{ $data->id }}">Terima</button> -->
                            <div style="float: right;">
                                @if ($item->status === 'menunggu')
                                <button class="btn btn-danger me-2" data-bs-toggle="modal" data-bs-target="#reject-user-{{ $item->id }}">Tolak</button>
                                <button class="btn btn-success" data-bs-toggle="modal" data-id="{{ $data->id }}" data-bs-target="#acc-user-{{ $item->id }}">Terima</button>
                                @elseif ($item->status === 'diterima')
                                <form action="{{ route('pekerja-lulus', $item->id) }}" method="POST" style="display: inline;" class="dropdown-item" id="formlulus-{{ $item->id }}">
                                    @csrf
                                    @method('PATCH')
                                    <button type="button" class="btn btn-success" onclick="klikLulus('{{ $item->id }}')">Lulus</button>
                                </form>
                                <button class="btn btn-danger me-2" data-bs-toggle="modal" data-bs-target="#nonaktif-user-{{ $item->id }}">Gagal</button>
                                @elseif ($item->status === 'lulus')
                                <button class="btn btn-danger me-2" data-bs-toggle="modal" data-bs-target="#pecat-user-{{ $item->id }}">Pecat</button>
                                @endif
                            </div>

                        </div>
                        <div class="modal fade" id="acc-user-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">

                                <form action="{{ route('acc', ['id' => $item->id]) }}" method="POST" id="pesanTerima{{ $item->id }}">
                                    @method('PATCH')
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header d-flex align-items-center">
                                            <h4 class="modal-title" id="exampleModalLabel1">
                                                Terima Pekerja
                                            </h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <span style="color: black;" for="recipient-name" class="control-label">Apakah anda
                                                    yakin untuk menerima
                                                    {{ $item->name }}?</span>
                                                    <div style="background-color: #549bff; border-radius:2px; padding:5px; " class="mt-2">
                                                        <small  class="text-muted  text-white" style="font-weight:bold">Setelah Anda yakin, kirimkan tanggal dan lokasi untuk jadwal wawancara dengan pelamar    </small>
                                                    </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="control-label" style="color: black;">Tanggal Wawancara
                                                    <span style="color: red;">*</span></label>
                                                <input type="datetime-local" class="form-control" id="Tanggal{{ $item->id }}" name="tanggal_wawancara" />
                                                <p class="text-danger fs-3 mb-4" style="color: red; height:5px" id="error{{ $item->id }}"></p>
                                                <label for="recipient-name" class="control-label mt-2" style="color: black;">Lokasi
                                                    Wawancara
                                                    <span style="color: red;">*</span></label>
                                                <input type="text" class="form-control" id="Lokasi{{ $item->id }}" name="lokasi" placeholder="Masukkan lokasi wawancara"/>
                                                <p class="text-danger fs-3" style="color: red; height:5px" id="errorLokasi{{ $item->id }}"></p>

                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button onclick="Terima({{$item->id}})" type="button" class="btn btn-success">
                                                Terima
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade" id="reject-user-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header d-flex align-items-center">
                                        <h4 class="modal-title" id="exampleModalLabel1">
                                            Tolak Pekerja
                                        </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <span style="color: black;" for="recipient-name" class="control-label">Apakah anda
                                                yakin untuk menolak
                                                {{ $item->name }}?</span>
                                        </div>
                                        <form action="/reject/{{ $item->id }}" method="POST" id="pesanTolak{{ $item->User->id }}">
                                            @method('PATCH')
                                            @csrf
                                            <div class="mb-3">
                                                <label for="message-text" class="control-label">Pesan <span style="color: red;">*</span></label>
                                                <textarea class="form-control mb-2" id="pesanAlasan{{ $item->id }}" placeholder="Masukkan pesan" name="pesan"></textarea>
                                                <p class="text-danger mb-1 fs-3" id="errorTolak{{ $item->id }}"></p>
                                                @error('pesan')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <small id="name" class="text-muted text-white" style=" background-color: #549bff; border-radius:2px; padding:5px; font-weight:bold">Masukkan alasan
                                                    kenapa pelamar tersebut ditolak.</small>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button onclick="Tolak({{$item->id}})" type="button" class="btn btn-danger">
                                            Tolak
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="modal fade" id="pecat-user-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header d-flex align-items-center">
                                        <h4 class="modal-title" id="exampleModalLabel1">
                                            Pecat Pekerja
                                        </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <span style="color: black;" for="recipient-name" class="control-label">Apakah anda
                                                yakin untuk mempecat
                                                {{ $item->User->name }}?</span>
                                        </div>
                                        <form action="/reject/{{ $item->id }}" method="POST" id="pecatPekerja{{ $item->User->id }}">
                                            @method('PATCH')
                                            @csrf
                                            <div class="mb-3">
                                                <label for="message-text" class="control-label">Pesan <span style="color: red;">*</span></label>
                                                <textarea class="form-control mb-2" id="pesan{{ $item->id }}" placeholder="Masukkan pesan" name="pesan"></textarea>
                                                <p class="text-danger mb-1 fs-3" id="error{{ $item->User->id }}"></p>
                                                @error('pesan')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <small id="name" class="text-muted text-informasi text-white">Masukkan alasan
                                                    kenapa pekerja tersebut Anda pecat.</small>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button onclick="Pecat({{$item->User->id}})" type="button" class="btn btn-danger">
                                            Tolak
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="modal fade" id="nonaktif-user-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header d-flex align-items-center">
                                        <h4 class="modal-title" id="exampleModalLabel1">
                                            Gagalkan Pelamar
                                        </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <span for="recipient-name" class="control-label">Apakah anda yakin untuk tidak meluluskan pelamar
                                            {{ $item->name }} untuk mendaftar di lowongan {{ $item->Vacancy->judul }}?</span>
                                        <form action="nonactive/{{ $item->id }}" method="POST" id="pesanNonaktif{{ $item->User->id }}">
                                            @method('PATCH')
                                            @csrf
                                            <div class="mb-3 mt-2">
                                                <label for="message-text" style="color: black;" class="control-label">Pesan <span style="color: red;">*</span></label>
                                                <textarea class="form-control" id="pesan{{ $item->id }}" placeholder="Masukkan pesan" name="pesan"></textarea>
                                                <p id="error{{ $item->User->id }}" class="text-danger fs-3"></p>
                                                <small id="name" class="text-muted text-informasi text-white">Masukkan alasan kenapa pelamar tersebut tidak Anda luluskan.</small>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button onclick="Nonaktif({{ $item->User->id }})" type="button" class="btn btn-primary img-fluid model_img">
                                            Kirim
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="modal fade" id="pecat-user-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header d-flex align-items-center">
                                        <h4 class="modal-title" id="exampleModalLabel1">
                                            Pecat Pekerja
                                        </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <span style="color: black;" for="recipient-name" class="control-label">Apakah anda
                                                yakin untuk mempecat
                                                {{ $item->name }}?</span>
                                        </div>
                                        <form action="/pecat/{{ $item->id }}" method="POST" id="pecatUser{{ $item->id }}">
                                            @method('PATCH')
                                            @csrf
                                            <div class="mb-3">
                                                <label for="message-text" class="control-label">Pesan <span style="color: red;">*</span></label>
                                                <textarea class="form-control mb-2" id="pesan{{ $item->id }}" placeholder="Masukkan pesan" name="pesan"></textarea>
                                                <p class="text-danger mb-1 fs-3" id="errorPecat{{ $item->id }}"></p>
                                                @error('pesan')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <small id="name" class="text-muted text-informasi text-white">Masukkan alasan
                                                    kenapa pekerja tersebut Anda pecat.</small>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button onclick="Pecat({{$item->id}})" type="button" class="btn btn-primary">
                                            Kirim
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="nonaktif-user-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header d-flex align-items-center">
                                        <h4 class="modal-title" id="exampleModalLabel1">
                                            Gagalkan Pelamar
                                        </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <span style="color: black;" for="recipient-name" class="control-label">Apakah anda
                                                yakin untuk menolak
                                                {{ $item->name }}?</span>
                                        </div>
                                        <form action="/nonactive/{{ $item->id }}" method="POST" id="nonaktifUser{{ $item->User->id }}">
                                            @method('PATCH')
                                            @csrf
                                            <div class="mb-3">
                                                <label for="message-text" class="control-label">Pesan <span style="color: red;">*</span></label>
                                                <textarea class="form-control mb-2" id="pesan{{ $item->User->id }}" placeholder="Masukkan pesan" name="pesan"></textarea>
                                                <p class="text-danger mb-1 fs-3" id="errorNonaktif{{ $item->User->id }}"></p>
                                                @error('pesan')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <small id="name" class="text-muted text-white" style=" background-color: #549bff; border-radius:2px; padding:5px; font-weight:bold">Masukkan alasan kenapa pelamar tersebut tidak Anda luluskan.</small>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button onclick="Nonaktif({{$item->User->id}})" type="button" class="btn btn-primary">
                                            Kirim
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
                <div class="col-lg-12">
                    <div class="card mb-4" style="height: auto;">
                        <div class="card-header bg-info d-flex align-items-center">
                            <h4 class="card-title text-white mb-0">Pendaftar Mendaftar Lowongan Yang Sama</h4>
                        </div>
                        <div class="card-body p-4">
                            <div id="pelamarSama"></div>
                            {{-- @forelse ($pelamarSama as $data)
                                    <div class="mt-2 mb-4 d-flex justify-content-between">
                                        <div class="d-flex " style="width:100%; padding: 0">
                                            <div class="me-2"
                                                style="width: 50px; height: 42px; border-radius: 50%; overflow: hidden; text-align: center; vertical-align: middle; line-height: 35px; margin-top: 5px;">
                                                <img src="{{ asset('foto_user/' . $data->User->foto) }}" alt=""
                            class="w-100 h-100">
                        </div>
                        <div style="width: 100%; overflow:hidden">
                            <div class="w-full d-flex justify-content-between">
                                <span for="exampleInputPassword1" class="form-label fw-semibold">{{ $data->User->name }}</span>
                                <a href="{{ route('detail-user', $data->User->id) }}" class="d-flex items-center" style="padding: 0;">
                                    <button class="btn btn-primary btn-sm">Detail</button>
                                </a>
                            </div>
                            <p class="fs-2">{{ $data->User->email }}</p>
                        </div>


                    </div>
                </div>
                <button class="btn btn-primary" type="submit" style="cursor: pointer;">Lihat
                    Selengkapnya</button>
                @empty
                <div class="text-center" id="lowongan">
                    <img src="{{ asset('assets/nodatas.png') }}" alt="" width="200px">
                </div>`
                @endforelse --}}
                @if ($pelamarSama < 3) @else <div class="lihatSelengkapnya btn btn-primary w-100" style="cursor: pointer" id="LihatSelengkapnya">Lihat Selengkapnya
            </div>
            <div class="lihatSedikit btn btn-primary w-100" style="display: none" id="Lihatsedikit">Lihat Sedikit</div>
            @endif
        </div>

    </div>
    </div>
    </div>
    </div>

    </div>
    </div>
</body>


<!-- <script src="{{ asset('assets/dist/libs/daterangepicker/daterangepicker.js') }}"></script>
                                                                            <script src="{{ asset('assets/dist/libs/bootstrap-material-datetimepicker/node_modules/moment/moment.js') }}">
                                                                            </script> -->
<script src="{{ asset('assets/dist/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('assets/dist/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/dist/js/dashboard3.js') }}"></script>
<script src="{{ asset('assets1/js/carousel.js') }}"></script>
<!-- ---------------------------------------------- -->
<script src="{{ asset('assets/dist/libs/prismjs/prism.js') }}"></script>

@if (Session::has('BerhasilPendidikan'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: "{{ Session('BerhasilPendidikan') }}",
    });
</script>
@endif


@if (session('sukses'))
<script>
    console.log("berhasil");
    Swal.fire({
        title: 'Berhasil',
        text: "Anda berhasil memperbarui data tersebut",
        icon: 'success',
    });
</script>
@endif
@if (session('gagal'))
<script>
    console.log("gagal");
    Swal.fire({
        title: 'Gagal',
        text: "Maaf, slot pada lowongan ini sudah terisi penuh",
        icon: 'error',
    });
</script>
@endif
<script>
    function klikLulus(itemId) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "mr-2 btn btn-danger",
            },
            buttonsStyling: false,
        });

        swalWithBootstrapButtons
            .fire({
                title: "Apakah Anda Yakin?",
                text: "Anda ingin meluluskan pelamar ini!",
                type: "warning",
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
            })
            .then((result) => {
                if (result.value) {
                    swalWithBootstrapButtons.fire({
                        title: "Terkirim!",
                        text: "Data sedang diproses.",
                        icon: "info",
                        customClass: {
                            icon: "swal-icon--info",
                        },
                        showConfirmButton: false,
                    });
                    var form = document.getElementById("formlulus-" + itemId);
                    form.submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        "Batal",
                        "Pelemar tersebut batal untuk diluluskan. :)",
                        "error"
                    );
                }
            });
    }

    function Nonaktif(data) {
        var pesan = document.getElementById('pesan' + data).value;
        var error = document.getElementById('errorNonaktif' + data);

        if (pesan !== "") {
            if (pesan.length > 255) {
                error.innerHTML = "Pesan maksimal 255 karakter.";
            } else {
                error.innerHTML = "";
                var form = document.getElementById("nonaktifUser" + data);
                form.submit();
                return; // Menambahkan return untuk keluar dari fungsi setelah mengirim formulir
            }
        } else {
            error.innerHTML = "Pesan harus diisi.";
        }

        // Jika kode mencapai titik ini, berarti ada error dan modal tidak akan ditutup
    }

    function Terima(data) {
        var today = new Date();
        var yesterday = new Date(today);
        yesterday.setDate(today.getDate() - 1);
        var tanggal = document.getElementById('Tanggal' + data).value;
        var lokasi = document.getElementById('Lokasi' + data).value;
        const error = document.getElementById('error' + data);
        const errorLokasi = document.getElementById('errorLokasi' + data);
        var tahun = today.getFullYear();
        var bulan = String(today.getMonth() + 1).padStart(2, "0");
        var tanggalKedua = String(today.getDate()).padStart(2, "0");
        var jam = String(today.getHours()).padStart(2, "0");
        var menit = String(today.getMinutes()).padStart(2, "0");

        var hasilFormat = tahun + "-" + bulan + '-' + tanggalKedua + 'T' + jam + ':' + menit;

        var isValidDate = !isNaN(Date.parse(tanggal));

        if (tanggal.trim() !== "" && isValidDate && (lokasi.trim() !== "" && tanggal.trim() > hasilFormat)) {
            error.innerHTML = '';
            errorLokasi.innerHTML = '';

            var form = document.getElementById("pesanTerima" + data);
            form.submit();
        } else {
            if (new Date(tanggal) <= yesterday && lokasi === "") {
                error.innerHTML = "Tanggal tidak boleh tanggal kemarin";
                errorLokasi.innerHTML = "Lokasi wawancara harus di isi";
            } else if (!isValidDate) {
                error.innerHTML = "Tanggal wawancara tidak valid";
                if (lokasi === "") {
                errorLokasi.innerHTML = "Lokasi wawancara harus di isi";
                } else {
                    errorLokasi.innerHTML = "";
                }
            } else if (new Date(tanggal) <= yesterday) {
                error.innerHTML = "Tanggal tidak boleh tanggal kemarin";
                errorLokasi.innerHTML = "";
            } else if (tanggal === "" && lokasi === "") {
                error.innerHTML = "Pesan harus di isi";
                errorLokasi.innerHTML = "Lokasi wawancara harus di isi";
            } else if (tanggal === "") {
                error.innerHTML = "Pesan harus di isi";
                errorLokasi.innerHTML = "";
            } else if (lokasi === "") {
                error.innerHTML = "";
                errorLokasi.innerHTML = "Lokasi wawancara harus di isi";
            }
        }
    }

    function Tolak(itemId) {
        var pesan = document.getElementById('pesanAlasan' + itemId).value;
        var error = document.getElementById('errorTolak' + itemId);

        if (pesan !== "") {
            if (pesan.length > 255) {
                error.innerHTML = "Pesan maksimal 255 karakter.";
            } else {
                error.innerHTML = "";
                var form = document.getElementById("pesanTolak" + itemId);
                form.submit();
                return; // Menambahkan return untuk keluar dari fungsi setelah mengirim formulir
            }
        } else {
            error.innerHTML = "Pesan harus diisi.";
        }

        // Jika kode mencapai titik ini, berarti ada error dan modal tidak akan ditutup
    }
    function Pecat(params) {
        var pesan = document.getElementById('pesan' + params).value;
        var error = document.getElementById('errorPecat' + params);

        if (pesan !== "") {
            if (pesan.length > 255) {
                error.innerHTML = "Pesan maksimal 255 karakter.";
            } else {
                error.innerHTML = "";
                var form = document.getElementById("pecatUser" + params);
                form.submit();
                return; // Menambahkan return untuk keluar dari fungsi setelah mengirim formulir
            }
        } else {
            error.innerHTML = "Pesan harus diisi.";
        }

        // Jika kode mencapai titik ini, berarti ada error dan modal tidak akan ditutup
    }


</script>


<script>
    const toggleButton = document.querySelector('.btn-toggle');
    const longText = document.querySelector('.long-text');

    toggleButton.addEventListener('click', function() {
        if (longText.style.display === 'none' || longText.style.display === '') {
            longText.style.display = 'block';
            toggleButton.textContent = 'Sembunyikan';
        } else {
            longText.style.display = 'none';
            toggleButton.textContent = 'Lihat Selengkapnya';
        }
    });
</script>
<script>
    function show() {
        document.getElementById('foto').click();

        document.getElementById('foto').addEventListener('change', function() {
            document.getElementById('submit-button').click();
        });
    }
</script>
<script>
    $('#ButtonSimpan').click(function() {
        Swal.fire({
            title: 'Apa kamu yakin?',
            text: "Data yang anda masukan sudah benar?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ya, sudah benar!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Terkirim!',
                    'Data telah terkirim',
                    'success'
                ).then((result) => { // Perbaikan disini: Tambahkan parameter "result"
                    var form = document.getElementById('Pendidikan');
                    form.submit();
                });
            };
        });
    });
</script>

<script>
    function Form() {
        var selectElement = document.getElementById("tingkatan");

        var selectedValue = selectElement.options[selectElement.selectedIndex].value;


        if (selectedValue === 'SMA/SMK/Sederajat') {
            let Smk = ` <div class="mt-2">
                        <label for="Jurusan">
                            Jurusan
                        </label>
                        <input placeholder="Jurusan" class="col-12 col-md-10 rounded-1 form-control"
                            type="text" name="Jurusan" value="{{ old('Jurusan') }}" id="InputJurusan">
                    </div>`;
            let Nama =
                `   <label for="NamaSekolah">
                            NamaSekolah
                        </label>
                        <input placeholder="NamaSekolah" class="col-12 col-md-10 rounded-1 form-control"
                            type="text" name="NamaSekolah" value="{{ old('NamaSekolah') }}" id="InputNamaSekolah">`;
            document.getElementById('NamaSekolah').innerHTML = Nama;

            var tempat = document.getElementById('Tambahan');
            document.getElementById('TempatUniversitas').innerHTML = '';
            console.log(tempat);
            tempat.innerHTML = Smk;

        } else if (selectedValue === 'Universitas') {
            let Universitas = ` <div class="mt-2" id="NamaUniversitas">
                        <label for="Universitas">
                            Universitas
                        </label>
                        <input placeholder="Universitas" class="col-12 col-md-10 rounded-1 form-control"
                            type="text" name="NamaSekolah" value="{{ old('NamaSekolah') }}" id="InputUniversitas">
                    </div>
                    <div class="mt-2" id="Fakultas">
                        <label for="Fakultas">
                            Fakultas
                        </label>
                        <input placeholder="Falkutas" class="col-12 col-md-10 rounded-1 form-control"
                            type="text" name="Jurusan" value="{{ old('Jurusan') }}" id="InputJurusan">
                    </div>
                    `;
            document.getElementById('NamaSekolah').innerHTML = ``;
            var tempat = document.getElementById('TempatUniversitas');
            console.log(tempat);
            tempat.innerHTML = Universitas;
            document.getElementById('Tambahan').innerHTML = ``;

        } else if (selectedValue.includes('SD') || selectedValue.includes('SMP')) {
            console.log("hjgnhfnhjd");
            let Nama = `   <label for="NamaSekolah">
                            NamaSekolah
                        </label>
                        <input placeholder="NamaSekolah" class="col-12 col-md-10 rounded-1 form-control"
                            type="text" name="NamaSekolah" value="{{ old('NamaSekolah') }}" id="">`;
            document.getElementById('NamaSekolah').innerHTML = Nama;
            document.getElementById('TempatUniversitas').innerHTML = ``;
            document.getElementById('Tambahan').innerHTML = ``;
            // document.getElementById('NamaUniversitas').style.display = 'none';
            // document.getElementById('NamaUniversitas').style.display = 'none';
        }

    }
</script>
<script>
    function Dropdown() {
        $('.menu').css('display', 'block');
        // console.log("awoakwkwkaowk");
    }
</script>

<script>
    var IdData;

    function ShowEditModal(id) {
        // Tampilkan modal
        // Lakukan permintaan Ajax GET
        $.ajax({
            url: '/tampilkan/pendidikan/' + id, // Ganti dengan URL sesuai dengan rute Anda
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                IdData = response.user.id;

                $('#edit-pendidikan').modal('show');
                // Isi data ke dalam elemen-elemen modal
                $('#tingkatan').val(response.user.Tingkatan);
                $('#Sekolah').val(response.user.NamaSekolah);
                $('#Awal').val(response.user.TanggalAwal);
                $('#Akhir').val(response.user.TanggalAkhir);
                if (response.user.Tingkatan === 'SMA/SMK/Sederajat') {
                    let jurusan = ` <div class="mt-2">
                        <label for="Jurusan">
                            Jurusan
                        </label>
                        <input placeholder="Jurusan" class="col-12 col-md-10 rounded-1 form-control"
                            type="text" name="Jurusan" value="${response.user.Jurusan}" id="InputJurusan">
                    </div>`;
                    $('#Jurusan').empty();
                    $('#Jurusan').append(jurusan);
                } else if (response.user.Tingkatan === 'Universitas') {
                    let fakultas = ` <div class="mt-2">
                        <label for="Jurusan">
                            fakultas
                        </label>
                        <input placeholder="fakultas" class="col-12 col-md-10 rounded-1 form-control"
                            type="text" name="Jurusan" value="${response.user.Jurusan}" id="InputJurusan">
                            </div>`;
                    $('#Jurusan').empty();
                    $('#Jurusan').append(fakultas);
                } else {
                    $('#Jurusan').empty();
                }
                // ... tambahkan elemen lainnya sesuai kebutuhan Anda
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }

    function EditData() {
        var NamaSekolah = $('#Sekolah').val();
        var TanggalAwal = $('#Awal').val();
        var TanggalAkhir = $('#Akhir').val();
        var Jurusan = $('#InputJurusan').val() ?? null;
        var id = IdData;
        var dataToSend = {
            id: id,
            namaSekolah: NamaSekolah,
            TanggalAwal: TanggalAwal,
            TanggalAkhir: TanggalAkhir,
            Jurusan: Jurusan,
        };
        Swal.fire({
            title: 'Apa kamu yakin?',
            text: "Data yang anda masukan sudah benar?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ya, sudah benar!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Terkirim!',
                    'Data telah terkirim',
                    'success'
                ).then((result) => { // Perbaikan disini: Tambahkan parameter "result"
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: '/Edit/pendidikan/' +
                            IdData, // Ganti dengan URL sesuai dengan rute Anda
                        type: 'PUT',
                        dataType: 'json',
                        data: {
                            NamaSekolah: NamaSekolah,
                            TanggalAwal: TanggalAwal,
                            TanggalAkhir: TanggalAkhir,
                            Jurusan: Jurusan,
                        },
                        success: function(response) {
                            if (response.status === 'berhasil')
                                Swal.fire(
                                    'Berhasil Disimpan!',
                                    response.pesan,
                                    'success'
                                ).then((result) => {
                                    location.reload();
                                });
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                            // Tampilkan pesan error atau lakukan tindakan lain
                        }
                    });
                });
            };
        });



    }

    function HapusData(id) {
        Swal.fire({
            title: 'Apa kamu yakin?',
            text: "Data yang anda pillih akan di hapus!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ya, Hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Terkirim!',
                    'permintaan Sedang Diproses',
                    'success'
                ).then((result) => { // Perbaikan disini: Tambahkan parameter "result"
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: '/delete/pendidikan/' +
                            id, // Ganti dengan URL sesuai dengan rute Anda
                        type: 'DELETE',
                        dataType: 'json',
                        success: function(response) {
                            if (response.status === 'berhasil')
                                Swal.fire(
                                    'Berhasil Dihapus!',
                                    response.pesan,
                                    'success'
                                ).then((result) => {
                                    location.reload();
                                });
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                            // Tampilkan pesan error atau lakukan tindakan lain
                        }
                    });
                });
            };
        });
    }
</script>

<script>
    $(function() {
        $('input[name="WaktuPengerjaan"]').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });
        $('input[name="WaktuPengerjaan"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format(
                'DD/MM/YYYY'));
        });

        $('input[name="WaktuPengerjaan"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    });
</script>

<script>
    $(".shawCalRanges").daterangepicker({
        ranges: {
            Today: [moment(), moment()],
            Yesterday: [
                moment().subtract(1, "days"),
                moment().subtract(1, "days"),
            ],
            "Last 7 Days": [moment().subtract(6, "days"), moment()],
            "Last 30 Days": [moment().subtract(29, "days"), moment()],
            "This Month": [moment().startOf("month"), moment().endOf("month")],
            "Last Month": [
                moment().subtract(1, "month").startOf("month"),
                moment().subtract(1, "month").endOf("month"),
            ],
        },
        alwaysShowCalendars: true,
    });
</script>

<script>
    const toggleButton = document.querySelector('.btn-toggle');
    const longText = document.querySelector('.long-text');

    toggleButton.addEventListener('click', function() {
        if (longText.style.display === 'none' || longText.style.display === '') {
            longText.style.display = 'block';
            toggleButton.textContent = 'Sembunyikan';
        } else {
            longText.style.display = 'none';
            toggleButton.textContent = 'Lihat Selengkapnya';
        }
    });
</script>
<script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var id = "{{ $data->id }}";
        var url = "{{ route('pekerja-sama') }}";
        // alert("p");
        console.log("p");
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                id: id,
            },
            success: function(response) {
                console.log(response);
                // alert(response);
                $('#pelamarSama').empty(); // Kosongkan kontainer sebelum menambahkan data baru
                $.each(response.pelamarSama, function(index, item) {
                    // alert(item.user.id);
                    var id = item.user.id;
                    var divisiHtml = `
                                <div class="mt-2 mb-4 d-flex justify-content-between">
                                    <div class="d-flex " style="width:100%; padding: 0">
                                            <div class="me-2"
                                                style="width: 50px; height: 42px; border-radius: 50%; overflow: hidden; text-align: center; vertical-align: middle; line-height: 35px; margin-top: 5px;">
                                                <img src="{{ asset('foto_user/${item.user.foto}') }}" alt=""
                                                    class="w-100 h-100">
                                            </div>
                                            <div style="width: 100%; overflow:hidden">
                                                <div class="w-full d-flex justify-content-between">
                                                    <span for="exampleInputPassword1"
                                                        class="form-label fw-semibold">${item.user.name}</span>
                                                    <a onclick="Detail(${item.user.id})" class="d-flex items-center" style="padding: 0;">
                                                        <button class="btn btn-primary btn-sm">Detail</button>
                                                    </a>
                                                </div>
                                                <p class="fs-2">${item.user.email}</p>
                                            </div>


                                        </div>
                                    </div>
                        `;
                    $('#pelamarSama').append(divisiHtml);
                });
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
</script>
<script>
    function Detail(id) {
        window.location.href = "/detail-user/" + id;
    }
</script>

<script>
    $(document).ready(function() {
        $('#LihatSelengkapnya').click(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var id = "{{ $data->id }}";
            var url = "{{ route('pekerja-selengkapnya') }}";

            $.ajax({
                type: 'POST',
                url: url,
                data: {
                    id: id,
                },
                success: function(response) {
                    console.log(response);
                    $('.LihatSedikit').attr("style", "display:block");
                    $('.LihatSelengkapnya').attr("style", "display:none");
                    // alert(response);
                    $('#pelamarSama').empty(); // Kosongkan kontainer sebelum menambahkan data baru
                    $.each(response.pelamarSama, function(index, item) {
                        // alert(item.user.id);
                        var id = item.user.id;
                        var userHtml = `
                                <div class="mt-2 mb-4 d-flex justify-content-between">
                                    <div class="d-flex " style="width:100%; padding: 0">
                                            <div class="me-2"
                                                style="width: 50px; height: 42px; border-radius: 50%; overflow: hidden; text-align: center; vertical-align: middle; line-height: 35px; margin-top: 5px;">
                                                <img src="{{ asset('foto_user/${item.user.foto}') }}" alt=""
                                                    class="w-100 h-100">
                                            </div>
                                            <div style="width: 100%; overflow:hidden">
                                                <div class="w-full d-flex justify-content-between">
                                                    <span for="exampleInputPassword1"
                                                        class="form-label fw-semibold">${item.user.name}</span>
                                                    <a onclick="Detail(${item.user.id})" class="d-flex items-center" style="padding: 0;">
                                                        <button class="btn btn-primary btn-sm">Detail</button>
                                                    </a>
                                                </div>
                                                <p class="fs-2">${item.user.email}</p>
                                            </div>


                                        </div>
                                    </div>
                        `;
                        $('#pelamarSama').append(userHtml);
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
        $('#Lihatsedikit').click(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var id = "{{ $data->id }}";
            var url = "{{ route('pekerja-sama') }}";

            $.ajax({
                type: 'POST',
                url: url,
                data: {
                    id: id,
                },
                success: function(response) {
                    console.log(response);
                    $('.LihatSedikit').attr("style", "display:none");
                    $('.LihatSelengkapnya').attr("style", "display:block");
                    // alert(response);
                    $('#pelamarSama').empty(); // Kosongkan kontainer sebelum menambahkan data baru
                    $.each(response.pelamarSama, function(index, item) {
                        // alert(item.user.id);
                        var id = item.user.id;
                        var userHtml = `
                                <div class="mt-2 mb-4 d-flex justify-content-between">
                                    <div class="d-flex " style="width:100%; padding: 0">
                                            <div class="me-2"
                                                style="width: 50px; height: 42px; border-radius: 50%; overflow: hidden; text-align: center; vertical-align: middle; line-height: 35px; margin-top: 5px;">
                                                <img src="{{ asset('foto_user/${item.user.foto}') }}" alt=""
                                                    class="w-100 h-100">
                                            </div>
                                            <div style="width: 100%; overflow:hidden">
                                                <div class="w-full d-flex justify-content-between">
                                                    <span for="exampleInputPassword1"
                                                        class="form-label fw-semibold">${item.user.name}</span>
                                                    <a onclick="Detail(${item.user.id})" class="d-flex items-center" style="padding: 0;">
                                                        <button class="btn btn-primary btn-sm">Detail</button>
                                                    </a>
                                                </div>
                                                <p class="fs-2">${item.user.email}</p>
                                            </div>


                                        </div>
                                    </div>
                        `;
                        $('#pelamarSama').append(userHtml);
                    });
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    });
</script>
@endsection

</html>
