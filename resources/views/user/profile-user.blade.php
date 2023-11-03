<html>

<head>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Add Bootstrap JavaScript and jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="{{ asset('assets/dist/libs/prismjs/themes/prism-okaidia.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    {{-- <script src="script.js" defer></script> --}}
    <!--=============== REMIXICONS ===============-->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin=""> --}}

    <!--=============== SWIPER CSS ===============-->
    {{-- <link rel="stylesheet" href="{{asset('assets1/css/swiper-bundle.min.css')}}"> --}}

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets1/css/stylesCarousel.css') }}">
    <link rel="stylesheet" href="{{ 'assets1/css/perelode.css' }}">

    <script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@3.11.174/build/pdf.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/pdfjs-dist@3.11.174/web/pdf_viewer.min.css" rel="stylesheet">


</head>

<body>
    @extends('layouts1.app')
    @section('content')
    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
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
                        <style>
                            .tepi {
                                width: 110px;
                                height: 110px;
                                position: relative;
                            }

                            .dalam {
                                width: 100px;
                                height: 100px;
                            }

                            .buttonEdit {
                                margin-right: 20px;
                            }

                            @media (max-width:670px) {
                                .tepi {
                                    width: 80px;
                                    height: 80px;
                                    position: relative;
                                }

                                .dalam {
                                    width: 70px;
                                    height: 70px;
                                }

                                .hilang {
                                    display: none;
                                }

                                .buttonEdit {
                                    margin-right: 10px;
                                }
                            }
                        </style>

                        <img src="{{ asset('assets/profilebg.jpg') }}" alt="" class="img-fluid">
                        <div class="row ">

                            <div class="col-lg-8 col-md-8 col-7 ">
                                <div class="mt-n5">
                                    <div class="d-flex ms-5 mb-2">
                                        <div class="tepi  d-flex align-items-center justify-content-center rounded-circle" style="background-color:#5d87ff">
                                            <div class="  dalam  border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden" style="">

                                                <a href="{{ asset('foto_user/' . $user->foto) }}" data-lightbox="image-1" data-title="Gambar Profil Anda">
                                                    @if ($user->foto === 'default/default.png')
                                                    <img src="{{ asset($user->foto) }}" alt="" class="img-fluid rounded-circle" style="width:120px; height:120px; object-fit:cover  ">
                                                    @else
                                                    <img src="{{ asset('foto_user/' . $user->foto) }}" alt="" class="img-fluid rounded-circle" style="width:120px; height:120px; object-fit:cover">
                                                    @endif
                                                </a>
                                            </div>
                                            <div style="position: absolute; bottom: 0; right: 0; display: flex; align-items: center; justify-content: center;">
                                                <div style="width: 40px; height: 40px; background-color: #5d87ff; border-radius: 50%; display: flex; align-items: center; justify-content: center;" class="tooltip-container1">
                                                    <form action="{{ route('ubah-foto') }}" enctype="multipart/form-data" method="post">
                                                        @method('PATCH')
                                                        @csrf
                                                        <input type="file" style="display: none" name="foto" id="foto">
                                                        <ul class="error-text"></ul>
                                                        <button class="btn btn-primary" type="button" onclick="show()" id="btn-upload" style="background: none; border: none; padding: 0;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="mb-3" width="25" height="25" viewBox="0 0 24 24" title="update foto">
                                                                <g fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                                    <path d="M12 20H5a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h1a2 2 0 0 0 2-2a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v3.5M16 19h6m-3-3v6" />
                                                                    <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0-6 0" />
                                                                </g>
                                                            </svg>
                                                        </button>
                                                        <button type="submit" style="display: none" id="submit-button">Save</button>
                                                    </form>
                                                    <span class="tooltip-text1" style="width: 280%;">Edit Foto</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-4 mb-3">
                                    <h5 class="fs-5 mb-0 fw-semibold mb-3">{{ $user->name }}</h5>

                                </div>
                            </div>
                            <div class="modal fade" id="detail-cv-{{ Auth()->User()->cv }}" tabindex="-1" aria-labelledby="detail-cv-{{ Auth()->User()->cv }}" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info d-flex align-items-center justify-content-start" style="border-radius: 10px 10px 0px 0px">
                                            <a type="button" class="text-white mr-2" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="m7.825 13l5.6 5.6L12 20l-8-8l8-8l1.425 1.4l-5.6 5.6H20v2H7.825Z" />
                                                </svg>
                                            </a>
                                            <h4 class="modal-title" style="color: #ffffff;" id="myModalLabel">CV</h4>
                                        </div>
                                        <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                        <div class="modal-body" style="max-height: 490px; overflow-y: auto;">
                                            @if (Auth()->User()->cv === 'default/default.png')
                                            <div class="row">
                                                <div class="col-lg-12 mt-5 text-center" id="lowongan">
                                                    <img src="/assets/nodatas.png" alt="" width="350px">
                                                </div>
                                            </div>
                                            @else
                                            <div class="text-center" style="width: 100%" id="pdf-container-cv">
                                            </div>
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Tutup
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <div class="modal fade" id="detail-lamaran-{{ Auth()->User()->lamaran }}" tabindex="-1" aria-labelledby="detail-lamaran-{{ Auth()->User()->lamaran }}" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info d-flex align-items-center justify-content-start" style="border-radius: 10px 10px 0px 0px">
                                            <a type="button" class="text-white mr-2" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="m7.825 13l5.6 5.6L12 20l-8-8l8-8l1.425 1.4l-5.6 5.6H20v2H7.825Z" />
                                                </svg>
                                            </a>
                                            <h4 class="modal-title" style="color: #ffffff;" id="myModalLabel">Lamaran
                                            </h4>
                                        </div>
                                        <div class="modal-body" style="max-height: 490px; overflow-y: auto;">
                                            @if (Auth()->User()->lamaran === 'default/default.png')
                                            <div class="row">
                                                <div class="col-lg-12 mt-5 text-center" id="lowongan">
                                                    <img src="/assets/nodatas.png" alt="" width="350px">
                                                </div>
                                            </div>
                                            @else
                                            <div class="text-center" style="width: 100%;" id="pdf-container-lamaran"></div>
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Tutup
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-5 ">
                                <div style="width: 40px; height: 40px; background-color: #5d87ff; border-radius: 50%; display: flex; align-items: center; justify-content: center; float: right;" class="mt-4 buttonEdit">
                                    <div class="tooltip-container">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#profile-update-{{ $user->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" style="margin-bottom: 3px;" width="25" height="25" viewBox="0 0 24 24">
                                                <path fill="#ffffff" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                                            </svg>
                                        </a>
                                        <span class="tooltip-text" style="width: 450%;">Edit Profile</span>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="profile-update-{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog" role="document">

                                    <form action="{{ route('ubah-profile') }}" method="POST" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header d-flex align-items-center">
                                                <h4 class="modal-title" id="exampleModalLabel1">
                                                    Edit profile
                                                </h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                            <div class="modal-body" style="max-height: 490px; overflow-y: auto;">
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">Nama<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" name="name" value="{{ $user->name }}"></input>

                                                    <br>
                                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">No. Telephone<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" name="no_telp" value="{{ $user->no_telp }}"></input>

                                                    <br>
                                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">Email<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" name="email" value="{{ $user->email }}"></input>
                                                    <br>
                                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">Lamaran<span style="color: red;">*</span></label>
                                                    <input type="file" class="form-control" name="lamaran" value="{{ $user->lamaran }}"></input>
                                                    <small class="mt-1">Format lamaran wajib pdf.</small>
                                                    <br>
                                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">cv<span style="color: red;">*</span></label>
                                                    <input type="file" class="form-control" name="cv" value="{{ $user->cv }}"></input>
                                                    <small class="mt-1">Format CV wajib pdf.</small>
                                                    <br>
                                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">Alamat<span style="color: red;">*</span></label>
                                                    <textarea type="text" class="form-control" name="alamat">{{ $user->alamat }}</textarea>
                                                    <br>
                                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">Profile LinkedIn</label>
                                                    <input type="url" class="form-control" name="url_likedIn" value="{{ $user->LinkedIn }}"></input>
                                                    <small class="mt-1">Profile LinkedIn tidak wajib diisi.</small>

                                                    <br>
                                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">Profile Github</label>
                                                    <input type="url" class="form-control" name="url_Github" value="{{ $user->GitHub }}"></input>
                                                    <small class="mt-1">Profile Github tidak wajib diisi.</small>

                                                    <br>

                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">
                                                    Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <div class="list-unstyled align-items-center justify-content-center justify-content-lg-start my-3 gap-3 mx-4">
                                    <div class="position-relative d-flex  mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-3 hilang" width="25" height="25" viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2" />
                                        </svg>
                                        <h6 class="mb-0 mt-1">{{ $user->no_telp }}</h6>
                                    </div>

                                    <div class="position-relative d-flex mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-3 hilang" width="25" height="25" viewBox="0 0 24 24">
                                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="M3 7a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z" />
                                                <path d="m3 7l9 6l9-6" />
                                            </g>
                                        </svg>
                                        <h6 class="mb-0 mt-1">{{ $user->email }}</h6>
                                    </div>
                                    <div class="position-relative d-flex mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-3 alamat hilang" width="25" height="26" viewBox="0 0 24 24">
                                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0-6 0" />
                                                <path d="M17.657 16.657L13.414 20.9a2 2 0 0 1-2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z" />
                                            </g>
                                        </svg>
                                        <h6 class="mb-0 mt-1">{{ $user->alamat }}</h6>
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
                                <div class="text-end mb-3 me-4 padding">
                                    <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#detail-cv-{{ Auth()->User()->cv }}">CV</button>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail-lamaran-{{ Auth()->User()->lamaran }}">Lamaran</button>
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
                                <div class="col-6 d-flex" style="padding: 0;">
                                    <h4 class="card-title text-white mb-0 me-3">Kelengkapan Data</h4>
                                    <h4 class="text-white mb-0 fs-4" style="margin-top: 2px;">{{ $jumlahData }}/7</h4>
                                </div>
                                <div title="informasi data">
                                    <svg xmlns="http://www.w3.org/2000/svg" data-bs-toggle="modal" data-bs-target="#informasi" width="32" height="32" viewBox="0 0 24 24">
                                        <path fill="#ffffff" d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="p-2">
                                @if ($jumlahData == '7')
                                <span>Sudah lengkap dan detail</span>
                                @elseif ($jumlahData >= '2' && $jumlahData < '7' ) <span>Sudah lengkap tapi kurang detail</span>
                                    @else
                                    <span>Kurang</span>
                                    @endif

                                    <div id="progress2"></div>

                                    @if ($jumlahData == '7')
                                    <span>Anda telah melangkapi semua data</span>
                                    @elseif ($jumlahData >= '2' && $jumlahData < '7' ) @if ( $user->cv !== 'default/default.png' &&
                                        ($user->foto !== 'default/default.png' && $user->lamaran !== 'default/default.png'))
                                        <span>Sudah bisa mendaftar namun lengkapi <b>({{ 7 - $jumlahData }})</b> data
                                            lagi untuk lebih detail</span>
                                        @else
                                        <span>belum bisa mendaftar lengkapi cv, lamaran dan foto anda untuk bisa
                                            mendaftar</span>
                                        @endif
                                        @else
                                        <span>Belum bisa mendaftar lengkapi data wajib yang harus di isi</span>
                                        @endif

                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal fade" id="informasi" tabindex="-1" aria-labelledby="exampleModalLabel1">
                    <div class="modal-dialog" role="document">

                        <!-- Tambahkan input hidden untuk status deskripsi -->
                        <input type="hidden" name="deskripsi">

                        <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                                <h4 class="modal-title" id="exampleModalLabel1">
                                    Informasi Kelengkapan Data
                                </h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                            <div class="modal-body" style="max-height: 490px; overflow-y: auto;">
                                <div class="mb-3">
                                    <p class="bg-info p-2 text-white text-center mb-4 fs-4" style="border-radius: 10px;">Wajib</p>
                                    <div class="d-flex">
                                        <p class="fw-semibold mb-1">1. Data Diri</p>
                                        @if(!empty($user->cv !== 'default/default.png') && !empty($user->lamaran !== 'default/default.png') && !empty($user->LinkedIn) && !empty($user->GitHub))
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ms-2" width="20" height="20" viewBox="0 0 24 24">
                                            <path fill="#13deb9" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8zm4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                        </svg>
                                        @endif
                                    </div>
                                    <p>Bagian data diri mencakup nama, alamat email, nomor telepon, dan alamat. Selain itu, Anda juga akan diminta untuk mengunggah CV dan surat lamaran dalam format PDF sebagai syarat untuk mendaftar pada lowongan pekerjaan. Anda juga dapat menyertakan tautan ke profil GitHub pribadi dan laman web pribadi Anda.</p>

                                    <div class="d-flex">
                                        <p class=" fw-semibold mb-1">2. Foto Profile</p>
                                        @if(!empty($user->foto !== 'default/default.png'))
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ms-2" width="20" height="20" viewBox="0 0 24 24">
                                            <path fill="#13deb9" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8zm4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                        </svg>
                                        @endif
                                    </div>
                                    <p>Foto profil adalah gambar pribadi Anda yang akan digunakan ketika Anda mendaftar pada lowongan pekerjaan. Pastikan untuk mengunggah foto profil yang sesuai dengan tuntutan perusahaan.</p>
                                    <p class="bg-info p-2 text-white text-center fs-4 mt-4 mb-4" style="border-radius: 10px;">Opsional</p>
                                    <div class="d-flex">
                                        <p class="fw-semibold mb-1">1. Tentang Anda</p>
                                        @if(!empty($user->deskripsi))
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ms-2" width="20" height="20" viewBox="0 0 24 24">
                                            <path fill="#13deb9" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8zm4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                        </svg>
                                        @endif
                                    </div>
                                    <p>Bagian "Tentang Anda" berisi informasi singkat mengenai Anda atau latar belakang Anda.</p>

                                    <div class="d-flex">
                                        <p class="fw-semibold mb-1">2. Pengalaman Kerja</p>
                                        @if(!empty($user->Experience->count() > 0))
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ms-2" width="20" height="20" viewBox="0 0 24 24">
                                            <path fill="#13deb9" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8zm4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                        </svg>
                                        @endif
                                    </div>
                                    <p>"Pengalaman Kerja" berisi informasi mengenai tempat dan waktu pengalaman kerja Anda. Anda akan mencantumkan jenis pekerjaan Anda (kontrak atau permanen), nama proyek yang pernah Anda kerjakan, deskripsi proyek, tanggal mulai, tanggal selesai, dan juga mengunggah bukti pengalaman dalam format JPG, PNG, atau JPEG.</p>

                                    <div class="d-flex">
                                        <p class="fw-semibold mb-1">3. Keahlian</p>
                                        @if(!empty($user->Skill->count() > 0))
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ms-2" width="20" height="20" viewBox="0 0 24 24">
                                            <path fill="#13deb9" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8zm4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                        </svg>
                                        @endif
                                    </div>
                                    <p>"Keahlian" berisi judul-judul keahlian Anda dan deskripsi tentang keahlian-keahlian tersebut.</p>

                                    <div class="d-flex">
                                        <p class="fw-semibold mb-1">4. Pendidikan</p>
                                        @if(!empty($user->School->count() > 0))
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ms-2" width="20" height="20" viewBox="0 0 24 24">
                                            <path fill="#13deb9" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8zm4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                        </svg>
                                        @endif
                                    </div>
                                    <p>"Pendidikan" mencakup riwayat pendidikan Anda mulai dari sekolah dasar hingga perguruan tinggi. Jika Anda belum menyelesaikan pendidikan tertinggi Anda, Anda dapat mencantumkan pendidikan terakhir Anda.</p>

                                    <div class="d-flex">
                                        <p class="fw-semibold mb-1">5. Sertifikat</p>
                                        @if(!empty($user->Certificate->count() > 0))
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ms-2" width="20" height="20" viewBox="0 0 24 24">
                                            <path fill="#13deb9" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8zm4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                        </svg>
                                        @endif
                                    </div>
                                    <p>"Sertifikat" berisi judul-judul sertifikat yang Anda miliki dan deskripsi tentang sertifikat tersebut. Jika Anda memiliki sertifikat dari pengalaman sebelumnya, Anda dapat menambahkannya ke profil Anda.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <div class="card position-relative overflow-hidden mb-4" style="height: 94%;">
                            <div class="card-header bg-info d-flex align-items-center justify-content-between">
                                <h4 class="card-title text-white mb-0">Tentang</h4>
                                @php
                                $userDeskripsi = auth()->user()->deskripsi;
                                $buttonText = empty($userDeskripsi) ? 'Tambah' : 'Edit';
                                @endphp
                                <button type="submit" class="btn btn-sm btn-light" style="margin-bottom: -10px; margin-top: -10px;" data-bs-toggle="modal" data-bs-target="#modalsummary">{{ $buttonText }}</button>
                            </div>
                            <div class="card-body p-4">
                                @if (!empty($user->deskripsi))
                                <form>
                                    <p>{{ $user->deskripsi }}</p>
                                </form>
                                @else
                                <div class="text-center" id="lowongan">
                                    <img src="{{ asset('assets/nodatas.png') }}" alt="" width="200px">
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modalsummary" tabindex="-1" aria-labelledby="exampleModalLabel1">
                        <div class="modal-dialog" role="document">

                            <form action="{{ route('summary') }}" method="POST" id="summaryUser{{ $user->id }}">
                                @csrf
                                <!-- Tambahkan input hidden untuk status deskripsi -->
                                <input type="hidden" name="deskripsi">

                                <div class="modal-content">
                                    <div class="modal-header d-flex align-items-center">
                                        <h4 class="modal-title" id="exampleModalLabel1">
                                            Deskripsi Anda
                                        </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Deskripsi
                                                <span style="color: red;">*</span>
                                            </label>
                                            <textarea name="deskripsi" class="form-control" id="" placeholder="Masukkan deskripsi Anda"> {{ $user->deskripsi }}</textarea>


                                            <span class="text-danger" id="errorSumary{{ $user->id }}"></span>
                                            <small id="name" class="form-text text-muted">Silakan masukkan
                                                deskripsi
                                                Anda.</small>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success" onclick="Summary({{ $user->id }})">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- pppp --}}
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
                        height: 55px;
                        border-radius: 10px;
                    }

                    .active,
                    .accordion:hover {
                        background-color: #549bff;
                        color: white;
                    }

                    .accordion:after {
                        content: '';
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card position-relative overflow-hidden mb-4">
                            <div class="card-header bg-info d-flex align-items-center">
                                <h4 class="card-title text-white mb-0">Pengalaman</h4>
                            </div>
                            <div class="card-body p-4">
                                @forelse($experience as $key => $item)
                                <button class="accordion mt-2" style="border-bottom: 1px solid black" onclick="Ganti({{ $item->id }})">
                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <p class="fw-semibold fs-4" style="margin: 0">{{ $item->Tempat }}</p>
                                            <div class="d-flex">
                                                <span class="fs-2 ms-0 me-2 mt-0">{{ \Carbon\Carbon::parse($item->TanggalAwal)->locale('id')->isoFormat('D MMM Y ') }}</span>
                                                <span class="fs-2 ms-0 me-0 mt-0">-</span>
                                                <span class="fs-2 ms-2 mt-0">{{ \Carbon\Carbon::parse($item->TanggalAkhir)->locale('id')->isoFormat('D MMM Y ') }}</span>
                                            </div>
                                        </div>
                                        <div>
                                            <svg id="buka{{ $item->id }}" class="buka" style="display: block" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 21 21">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m14.5 8.5l-4 4l-4-4" />
                                            </svg>

                                            <svg id="tutup{{ $item->id }}" class="tutup" style="display: none" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 21 21">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m6.5 12.5l4-4l4 4" />
                                            </svg>
                                        </div>
                                    </div>
                                </button>
                                <div class="panel card-body pt-2">
                                    <div class="d-flex mt-3" style="float: right;">

                                        <a href="#" data-bs-toggle="modal" data-bs-target="#experience-update-{{ $item->id }}" class="aksi p-1" style="">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="23" height="23" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                                            </svg>
                                        </a>

                                        <div class="justify-content-end">
                                            <form action="{{ route('experience-delete', $item->id) }}" method="POST" id="formpengalaman-{{ $item->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <a type="button" onclick="Pengalaman({{ $item->id }})" class="aksi1 p-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                                                    </svg>
                                                </a>
                                            </form>
                                        </div>

                                    </div>
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
                            <button class="buttonmodal border-bottom-0 border-start-0 border-end-0 w-100" data-bs-toggle="modal" data-bs-target="#experience-add">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="25" height="25" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                                </svg>
                                <strong class="fs-4">Tambah</strong>
                            </button>
                        </div>
                    </div>

                    <div class="modal fade" id="experience-add" tabindex="-1" aria-labelledby="exampleModalLabel1">
                        <div class="modal-dialog" role="document">

                            <form action="{{ route('add-experience') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header d-flex align-items-center">
                                        <h4 class="modal-title" id="exampleModalLabel1">
                                            Tambah Pengalaman
                                        </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                    <div class="modal-body" style="max-height: 490px; overflow-y: auto;">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Tempat<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="Tempat" value="{{ old('Tempat') }}" placeholder="Masukkan Tempat Pengalaman Anda"></input>

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Jenis Pekerjaan<span style="color: red;">*</span></label>
                                            <select name="JenisPekerjaan" class="form-control rounded-1 form-select" style="" id="">
                                                <option value="kontrak" {{ 'kontrak' === old('JenisPekerjaan') ? 'selected' : '' }}>kontrak</option>
                                                <option value="permanen" {{ 'permanen' === old('JenisPekerjaan') ? 'selected' : '' }}>permanen</option>
                                            </select>
                                            @error('JenisPekerjaan')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Nama
                                                Project<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="NamaProjek" value="{{ old('NamaProjek') }}" placeholder="Masukkan Nama Projek Anda"></input>

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Tanggal Awal<span style="color: red;">*</span></label>
                                            <input type="date" class="form-control" name="TanggalAwal" value="{{ old('TanggalAwal') }}" />

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Tanggal Akhir<span style="color: red;">*</span></label>
                                            <input type="date" class="form-control" name="TanggalAkhir" value="{{ old('TanggalAkhir') }}" />

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Bukti<span style="color: red;">*</span></label>
                                            <input type="file" class="form-control" name="Bukti" value="{{ old('Bukti') }}"></input>

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Detail Project<span style="color: red;">*</span></label>
                                            <textarea type="text" class="form-control" name="DetailProjek" placeholder="Masukkan Detail Projek Anda">{{ old('DetailProjek') }}</textarea>

                                            <small id="name" class="form-text text-muted">Silakan masukkan
                                                detail
                                                projek yang Anda kerjakan.</small>
                                            <br>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @foreach ($experience as $item)
                    <div class="modal fade" id="experience-update-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel1">
                        <div class="modal-dialog" role="document">

                            <form action="experience-update/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header d-flex align-items-center">
                                        <h4 class="modal-title" id="exampleModalLabel1">
                                            Edit Pengalaman
                                        </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                    <div class="modal-body" style="max-height: 490px; overflow-y: auto;">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Tempat<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="Tempat" value="{{ $item->Tempat }}" placeholder="Masukkan Tempat Pengalaman Anda"></input>

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Jenis Pekerjaan<span style="color: red;">*</span></label>
                                            <select name="JenisPekerjaan" class="form rounded-1 form-control" id="tipe">
                                                <option value="kontrak" {{ old('JenisPekerjaan', $item->JenisPekerjaan) == 'kontrak' ? 'selected' : '' }}>kontrak</option>
                                                <option value="permanen" {{ old('JenisPekerjaan', $item->JenisPekerjaan) == 'permanen' ? 'selected' : '' }}>permanen</option>
                                            </select>
                                            @error('tipe')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Nama Project<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="NamaProjek" value="{{ $item->NamaProjek }}" placeholder="Masukkan Nama Projek Anda"></input>

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Tanggal Awal<span style="color: red;">*</span></label>
                                            <input type="date" class="form-control" name="TanggalAwal" value="{{ $item->TanggalAwal }}" />

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Tanggal Akhir<span style="color: red;">*</span></label>
                                            <input type="date" class="form-control" name="TanggalAkhir" value="{{ $item->TanggalAkhir }}" />

                                            <br>
                                            <div class="mb-3" style="width: 250px; height: 150px; border: 1px solid #adadac; overflow: hidden; position: relative; border-radius: 10px;">
                                                <a href="{{ asset('pengalaman/' . $item->Bukti) }}" data-lightbox="image-1" data-title="Gambar Profil Anda">
                                                    <img src="{{ asset('pengalaman/' . $item->Bukti) }}" style="width: 100%; height: 100%; object-fit: contain;" alt="" />
                                                </a>
                                            </div>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Bukti<span style="color: red;">*</span></label>
                                            <input type="file" class="form-control" name="Bukti" value="{{ $item->Bukti }}"></input>
                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Detail Project<span style="color: red;">*</span></label>
                                            <textarea type="text" class="form-control" name="DetailProjek" placeholder="Masukkan Detail Projek Anda">{{ $item->DetailProjek }}</textarea>

                                            <small id="name" class="form-text text-muted">Silakan
                                                masukkan
                                                detail
                                                projek yang Anda kerjakan.</small>
                                            <br>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    {{-- dsds --}}
                    <div class="col-lg-12">
                        <div class="card position-relative overflow-hidden mb-4">
                            <div class="card-header bg-info d-flex align-items-center">
                                <h4 class="card-title text-white mb-0">Keahlian</h4>
                            </div>
                            <div class="card-body p-4">
                                @forelse ($skill as $item)
                                <div class="d-flex mt-2 mb-2">
                                    <div class="col-10">
                                        <div>
                                            <p class="form-label fw-semibold">{{ $item->judul }}</p>
                                            <p class="mt-2">{{ $item->deskripsi }}</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-flex justify-content-end">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#skill-update-{{ $item->id }}" class="aksi p-1" style="">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="" width="23" height="23" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                                                </svg>
                                            </a>

                                            <form action="skill-delete/{{ $item->id }}" method="POST" id="formkeahlian-{{ $item->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <a type="button" onclick="Keahlian({{ $item->id }})" class="aksi1 p-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                                                    </svg>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="text-center" id="lowongan">
                                    <img src="{{ asset('assets/nodatas.png') }}" alt="" width="200px">
                                </div>`
                                @endforelse
                            </div>
                            <button class="buttonmodal border-bottom-0 border-start-0 border-end-0 w-100" data-bs-toggle="modal" data-bs-target="#skill-add">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="25" height="25" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                                </svg>
                                <strong class="fs-4">Tambah</strong>
                            </button>
                        </div>
                    </div>

                    {{-- dsds --}}
                    <div class="modal fade" id="skill-add" tabindex="-1" aria-labelledby="exampleModalLabel1">
                        <div class="modal-dialog" role="document">

                            <form action="{{ route('add-skill') }}" method="POST">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header d-flex align-items-center">
                                        <h4 class="modal-title" id="exampleModalLabel1">
                                            Tambah Keahlian
                                        </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Judul
                                                <span style="color: red;">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="judul" value="{{ old('judul') }}" placeholder="Masukkan Keahlian Anda"></input>

                                            <small id="name" class="form-text text-muted">Silakan masukkan
                                                Keahlian
                                                Anda.</small>
                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Deskripsi
                                                <span style="color: red;">*</span>
                                            </label>
                                            <textarea type="text" class="form-control" name="deskripsi_keahlian" placeholder="Masukkan Deskripsi Keahlian Anda">{{ old('deskripsi_keahlian') }}</textarea>

                                            <small id="name" class="form-text text-muted">Silakan masukkan
                                                deskripsi
                                                Keahlian Anda.</small>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    @foreach ($skill as $item)
                    <div class="modal fade" id="skill-update-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel1">
                        <div class="modal-dialog" role="document">

                            <form action="skill-update/{{ $item->id }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header d-flex align-items-center">
                                        <h4 class="modal-title" id="exampleModalLabel1">
                                            Edit Keahlian
                                        </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Judul
                                                <span style="color: red;">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="judul" value="{{ $item->judul }}" placeholder="Masukkan Keahlian Anda"></input>

                                            <small id="name" class="form-text text-muted">Silakan
                                                masukkan
                                                Keahlian
                                                Anda.</small>
                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Deskripsi
                                                <span style="color: red;">*</span>
                                            </label>
                                            <textarea type="text" class="form-control" name="deskripsi_keahlian" placeholder="Masukkan Deskripsi Keahlian Anda">{{ $item->deskripsi }}</textarea>

                                            <small id="name" class="form-text text-muted">Silakan
                                                masukkan
                                                deskripsi
                                                Keahlian Anda.</small>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card position-relative overflow-hidden mb-4" style="height: 94%;">
                            <div class="card-header bg-info d-flex align-items-center">
                                <h4 class="card-title text-white mb-0">Pendidikan</h4>
                            </div>
                            <div class="card-body p-4">
                                @forelse ($School as $data)
                                <div class="mt-2 mb-2 d-flex justify-content-between">
                                    <div class="d-flex">
                                        <div class="me-4" style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; text-align: center; vertical-align: center; line-height: 50px; border:1px solid black">
                                            <div style="background-color: white; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;">
                                                <p style="margin-top: 14px">
                                                    @if ($data->Tingkatan === 'SMA/SMK/Sederajat')
                                                    SMA
                                                    @elseif ($data->Tingkatan === 'Universitas')
                                                    UN
                                                    @else
                                                    {{ $data->Tingkatan }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <p for="exampleInputPassword1" class=" fw-semibold" style="margin-bottom: 0">
                                                {{ $data->NamaSekolah }}
                                            </p>
                                            @if ($data->Jurusan !== '')
                                            <p for="" class="" style="margin: 0">
                                                {{ $data->Jurusan }}
                                            </p>
                                            @endif
                                            <p class=" " style="margin: 0">
                                                {{ \Carbon\Carbon::parse($data->TanggalAwal)->locale('id')->isoFormat('MMM  Y') .'->' .\Carbon\Carbon::parse($data->TanggalAkhir)->locale('id')->isoFormat('MMM  Y') }}
                                            </p>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="aksi p-1" onclick="ShowEditModal({{ $item->id }})" width="30" height="30" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="aksi1 p-1" onclick="HapusData({{ $item->id }})" width="30" height="30" style="" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                                        </svg>
                                    </div>
                                </div>
                                @empty
                                <div class="text-center" id="lowongan">
                                    <img src="{{ asset('assets/nodatas.png') }}" alt="" width="200px">
                                </div>`
                                @endforelse
                            </div>
                            <button class="buttonmodal border-bottom-0 border-start-0 border-end-0 w-100" data-bs-toggle="modal" data-bs-target="#tambah-pendidikan">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="25" height="25" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                                </svg>
                                <strong class="fs-4">Tambah</strong>
                            </button>

                        </div>
                    </div>

                    <div class="modal fade" id="tambah-pendidikan" tabindex="-1" aria-labelledby="tambah-pendidikan" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pendidikan</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('pendidikan') }}" method="post" id="Pendidikan">
                                        @csrf
                                        <label for="tingkatan">Pilih tingkatan</label>
                                        <select class="col-12 col-md-12 rounded-1 form-control" onchange="Form()" name="Tingkatan" id="tingkatan">
                                            <option value="SD" @if (old('Tingkatan', old('Tingkatan'))=='SD' ) selected @endif>
                                                SD</option>
                                            <option value="SMP" @if (old('Tingkatan', old('Tingkatan'))=='SMP' ) selected @endif>
                                                SMP</option>
                                            <option value="SMA/SMK/Sederajat" @if (old('Tingkatan', old('Tingkatan'))=='SMA/SMK/Sederajat' ) selected @endif>SMA/SMK/Sederajat
                                            </option>
                                            <option value="Universitas" @if (old('Tingkatan', old('Tingkatan'))=='Universitas' ) selected @endif>Universitas</option>
                                        </select>


                                        <div id="TempatUniversitas"></div>
                                        <div class="mt-2" id="NamaSekolah">
                                            <label for="namaSekolah">
                                                Nama Sekolah
                                            </label>
                                            <input placeholder="Nama Sekolah" class="col-12 col-md-12 rounded-1 form-control" type="text" name="NamaSekolah" value="{{ old('NamaSekolah') }}" id="">
                                        </div>
                                        <div class="mt-2">
                                            <label for="TanggalAwal">
                                                Tanggal Awal
                                            </label>
                                            <input placeholder="Tanggal Awal" class="col-12 col-md-12 rounded-1 form-control" type="date" name="TanggalAwal" value="{{ old('TanggalAwal') }}" id="">
                                        </div>
                                        <div class="mt-2">
                                            <label for="namaSekolah">
                                                Tanggal Lulus
                                            </label>
                                            <input placeholder="Nama Sekolah" class="col-12 col-md-12 rounded-1 form-control" type="date" name="TanggalAkhir" value="{{ old('TanggalAkhir') }}" id="">
                                        </div>


                                        <div id="Tambahan"></div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="button" id="ButtonSimpan" class="btn btn-success">Simpan</button>
                                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="edit-pendidikan" tabindex="-1" aria-labelledby="tambah-pendidikan" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Pendidikan</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post" id="Pendidikan">
                                        @csrf
                                        <div class="mt-2">
                                            <label for="NamaSekolah">Nama Sekolah/Universitas</label>
                                            <input placeholder="Nama Sekolah" class="col-12 col-md-12 rounded-1 form-control" type="text" name="NamaSekolah" value="" id="Sekolah">
                                        </div>
                                        <div class="mt-2">
                                            <label for="TanggalAwal">Tanggal Awal</label>
                                            <input placeholder="Tanggal Awal" class="col-12 col-md-12 rounded-1 form-control" type="date" name="TanggalAwal" value="" id="Awal">
                                        </div>
                                        <div class="mt-2">
                                            <label for="TanggalAkhir">Tanggal Lulus</label>
                                            <input placeholder="Tanggal Lulus" class="col-12 col-md-12 rounded-1 form-control" type="date" name="TanggalAkhir" value="" id="Akhir">
                                        </div>
                                        <div id="Jurusan"></div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="button" id="buttonEdit" onclick="EditData()" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                                <button type="submit" class="btn btn-sm btn-light" style="margin-bottom: -10px; margin-top: -10px;" data-bs-toggle="modal" data-bs-target="#certificate-add">Tambah Sertifikat</button>
                            </div>
                            <div class="">

                                <section class="product">

                                    <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
                                    <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
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
                                                                <p class="ellipsis">{{ $item->deskripsi }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="col-12 text-center" id="lowongan">
                                            <img src="{{ asset('assets/nodatas.png') }}" alt="" width="200px">
                                        </div>`
                                        @endforelse

                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="certificate-add" tabindex="-1" aria-labelledby="exampleModalLabel1">
                        <div class="modal-dialog" role="document">

                            <form action="{{ route('add-certificate') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header d-flex align-items-center">
                                        <h4 class="modal-title" id="exampleModalLabel1">
                                            Tambah Sertifikat
                                        </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Judul
                                                <span style="color: red;">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="judul" value="{{ old('judul') }}" placeholder="Masukkan Judul"></input>

                                            <small id="name" class="form-text text-muted">Silakan masukkan
                                                judul
                                                sertifikat Anda.</small>
                                            <br>

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Foto<span style="color: red;">*</span></label>
                                            <input type="file" class="form-control" name="foto" value="{{ old('foto') }}"></input>
                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Deskripsi
                                                <span style="color: red;">*</span>
                                            </label>
                                            <textarea type="text" class="form-control" name="deskripsi_sertifikat" placeholder="Masukkan Deskripsi">{{ old('deskripsi_sertifikat') }}</textarea>

                                            <small id="name" class="form-text text-muted">Silakan masukkan
                                                deskripsi sertifikat Anda.</small>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    {{-- ppppp --}}

                    @foreach ($certificate as $item)
                    <div class="modal fade" id="certificate-update-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel1">
                        <div class="modal-dialog" role="document">

                            <form action="certificate-update/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header d-flex align-items-center">
                                        <h4 class="modal-title" id="exampleModalLabel1">
                                            Edit Sertifikat
                                        </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Judul
                                                <span style="color: red;">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="judul" value="{{ $item->judul }}"></input>

                                            <small id="name" class="form-text text-muted">Silakan masukkan
                                                Keahlian Anda.</small>
                                            <br>
                                            <div class="mb-3" style="width: 250px; height: 150px; border: 1px solid #adadac; overflow: hidden; position: relative; border-radius: 10px;">
                                                <a href="{{ asset('sertifikat/' . $item->foto) }}" data-lightbox="image-1" data-title="Gambar Profil Anda">
                                                    <img src="{{ asset('sertifikat/' . $item->foto) }}" style="width: 100%; height: 100%; object-fit: contain;" alt="" />
                                                </a>
                                            </div>

                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Foto<span style="color: red;">*</span></label>
                                            <input type="file" class="form-control" name="foto" value="{{ $item->foto }}"></input>
                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Deskripsi
                                                <span style="color: red;">*</span>
                                            </label>
                                            <textarea type="text" class="form-control" name="deskripsi_sertifikat">{{ $item->deskripsi }}</textarea>

                                            <small id="name" class="form-text text-muted">Silakan masukkan
                                                deskripsi Keahlian Anda.</small>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="modal fade" id="certificate-detail-{{ $item->id }}" tabindex="-1" aria-labelledby="bs-example-modal-lg" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header d-flex align-items-center">
                                    <h4 class="modal-title" id="myLargeModalLabel">
                                        Detail Sertifikat
                                    </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="max-height: 80vh; overflow-y: auto;">
                                    <div class="col-lg-12 mb-2">
                                        <div style="font-size: 20px; font-weight: bold;">
                                            {{ $item->judul }}
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border border-4 border-white d-flex align-items-center justify-content-center overflow-hidden" style="width: 100%; max-height: 100%;">
                                            <img src="{{ asset('sertifikat/' . $item->foto) }}" alt="" style="max-height: 100%; width: 100%; border-radius: 20px;">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-1">
                                        <div>
                                            {{ $item->deskripsi }}
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-danger text-danger font-medium waves-effect text-start" data-bs-dismiss="modal">
                                        Tutup
                                    </button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    @endforeach
                    {{-- ppppp --}}

                    @foreach ($certificate as $item)
                    <div class="modal fade" id="certificate-update-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel1">
                        <div class="modal-dialog" role="document">

                            <form action="certificate-update/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header d-flex align-items-center">
                                        <h4 class="modal-title" id="exampleModalLabel1">
                                            Edit Sertifikat
                                        </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Judul
                                                <span style="color: red;">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="judul" value="{{ $item->judul }}"></input>
                                            <br>
                                            <small id="name" class="form-text text-muted">Silakan masukkan
                                                Keahlian Anda.</small>
                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Deskripsi
                                                <span style="color: red;">*</span>
                                            </label>
                                            <textarea type="text" class="form-control" name="deskripsi">{{ $item->deskripsi }}</textarea>
                                            <br>
                                            <small id="name" class="form-text text-muted">Silakan masukkan
                                                deskripsi Keahlian Anda.</small>
                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Foto<span style="color: red;">*</span></label>
                                            <input type="file" class="form-control" name="foto" value="{{ $item->foto }}"></input>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-4">
                <div class="col-lg-12">
                    <div class="card mb-4" style="height: auto;">
                        <div class="card-header bg-info d-flex align-items-center">
                            <h4 class="card-title text-white mb-0">Lamaran Terdaftar</h4>
                        </div>
                        <div class="card-body p-4">
                            @forelse ($Pendaftaran as $data)
                            <ul class="overview">
                                <li class="row">
                                    <p class="fw-semibold col-6"> Judul </p>
                                    <p class="ellipsis  col-6">: {{ $data->Vacancy->judul }}</p>
                                </li>
                                <li class="row">
                                    <p class="fw-semibold col-6"> Tgl. Berakhir </p>
                                    <p class="ellipsis  col-6">:
                                        {{ \Carbon\Carbon::parse($data->Vacancy->batas)->locale('id')->isoFormat('D MMM Y ') }}
                                    </p>
                                </li>
                                <li class="row">
                                    <p class="fw-semibold  col-6"> Divisi</p>
                                    <p class="ellipsis  col-6">: {{ $data->Vacancy->Division->divisi }}</p>
                                </li>
                                <li class="row">
                                    <p class="fw-semibold  col-6"> Posisi</p>
                                    <p class="ellipsis  col-6">: {{ $data->Vacancy->pekerja }}</p>
                                </li>
                                <li class="row">
                                    <p class="fw-semibold col-6"> Tipe Pekerja </p>
                                    <p class="ellipsis  col-6">: {{ $data->Vacancy->tipe }}</p>
                                </li>
                                <li class="row">
                                    <p class="fw-semibold col-6"> Status Lowongan </p>
                                    <p class="ellipsis  col-6">: {{ $data->Vacancy->status }}</p>
                                </li>
                                <li class="row">
                                    <p class="fw-semibold col-6"> Status Pendaftaran </p>
                                    <p class="ellipsis  col-6">: {{ $data->status }}</p>
                                </li>
                            </ul>
                            <div class="mt-2 mb-2 d-flex justify-content-end gap-2">
                                @if ($data->status === 'menunggu')
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('detailLowongan', $data->Vacancy->id) }}">
                                        <button class="btn btn-primary mb-4">
                                            Detail
                                        </button>
                                    </a>
                                    <a class="ml-1" id="batal">
                                        <button class="btn btn-danger mb-4">Batal</button>
                                    </a>
                                </div>
                                @else
                                @if ($data->Vacancy->status === 'aktif')
                                <a class="ml-auto" style="margin-left: 300px;">
                                    <a href="{{ route('detailLowongan', $data->Vacancy->id) }}">
                                        <button class="btn btn-primary mb-4">
                                            Detail
                                        </button>
                                    </a>
                                </a>
                                @endif
                                @endif
                            </div>
                            @empty
                            @if (Auth()->user()->status === 'ditolak')
                            <div class="" style="padding: 3%;"><span class="mb-2">Anda telah menerima pemberitahuan bahwa pendaftaran Anda telah ditolak. Mohon periksa email Anda untuk informasi lebih lanjut.</span>
                                <div class="d-flex justify-content-end">
                                    <a href="https://mail.google.com/" target="_blank">
                                        <button class="btn btn-primary">
                                            Cek Email
                                        </button>
                                    </a>
                                </div>
                            </div>
                            @elseif (Auth()->user()->status === 'gagal')
                            <div class="" style="padding: 3%;"><span class="mb-2">Anda telah menerima pemberitahuan bahwa pendaftaran Anda tidak memnuhi kriteria. Mohon periksa email Anda untuk informasi lebih lanjut.</span>
                                <div class="d-flex justify-content-end">
                                    <a href="https://mail.google.com/" target="_blank">
                                        <button class="btn btn-primary">
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
                </div>
                <div class="col-lg-12">
                    <div class="card position-relative overflow-hidden mb-4" style="height: auto;">
                        <div class="card-header bg-info d-flex align-items-center">
                            <h4 class="card-title text-white mb-0">Lowongan</h4>
                        </div>
                        @forelse ($lowongan as $data)
                        <div style="padding-left: 20px; padding-right: 20px; padding-top: 10px; padding bottom: 10px;">
                            <div class="d-flex justify-content-between px-2 py-1 rounded">
                                <div class="d-flex">
                                    <div>
                                        <h5 for="exampleInputPassword1" class="fw-semibold mb-2" style="margin-bottom: 0">
                                            {{ $data->judul }}
                                        </h5>
                                        <p for="exampleInputPassword1" class="mb-2" style="margin-bottom: 0">
                                            Tenggat Lowongan :
                                            {{ \Carbon\Carbon::parse($data->batas)->locale('id')->isoFormat('D MMM Y ') }}
                                        </p>
                                        <p for="exampleInputPassword1" class="mb-2" style="margin-bottom: 0">
                                            Divisi : <span style="color: #5d87ff">{{ $data->Division->divisi }}</span>
                                        </p>
                                        <p for="exampleInputPassword1" class="mb-2" style="margin-bottom: 0">
                                            Posisi : {{ $data->pekerja }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr style="margin-top: 10px;">
                        </div>


                        @empty
                        <div class="col-lg-12 mt-3 ml-5" id="lowongan">
                            <img src="{{ asset('assets/nodatas.png') }}" alt="" width="200px">
                        </div>`
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@php
$data = round($jumlahData * 14.28571428571429);
@endphp

{{-- <!-- <script src="{{ asset('assets/dist/libs/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/dist/libs/bootstrap-material-datetimepicker/node_modules/moment/moment.js') }}">
</script> --> --}}
<script src="{{ asset('assets1/js/carousel.js') }}"></script>
{{-- <script src="{{ asset('assets/dist/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script> --}}
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
<!-- ---------------------------------------------- -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
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

@if ($errors->any())
<script>
    $(document).ready(function() {
        @foreach($errors -> all() as $error)
        toastr.error('{{ $error }}', 'Error', {
            closeButton: true, // Menambahkan tombol hapus
            timeOut: 0
        });
        @endforeach
    });
</script>
@endif


<script>
    function Ganti(id) {
        var buka = document.getElementById('buka' + id);
        var tutup = document.getElementById('tutup' + id);
        var gaya = window.getComputedStyle(tutup);


        if (gaya.display === 'none') {
            tutup.style.display = 'block';
            buka.style.display = 'none';
        } else {
            tutup.style.display = 'none';
            buka.style.display = 'block';
        }
    }
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
            cancelButtonText: 'batal',
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
    // Konfigurasi grafik Anda

    var optionsProgress2 = {
        chart: {
            height: 30,
            type: "bar",
            stacked: true,
            sparkline: {
                enabled: true
            }
        },
        plotOptions: {
            bar: {
                horizontal: true,
                barHeight: "20%",
                colors: {
                    backgroundBarColors: ["#40475D"],
                    borderRadius: 5
                },

            }
        },
        colors: ["#17ead9"],
        stroke: {
            width: 0
        },
        series: [{
            name: "kelengkapan data",
            data: [{!!json_encode($data)!!}]
        }],
        title: {
            floating: true,
            offsetX: -10,
            offsetY: 5,
            text: " "
        },
        subtitle: {
            floating: true,
            align: "right",
            offsetY: 0,
            text: "",
            style: {
                fontSize: "20px"
            }
        },
        tooltip: {
            enabled: true

        },
        xaxis: {
            categories: ["kelengkapan data"]
        },
        yaxis: {
            max: 100
        },

    };

    // Membuat dan merender grafik dengan konfigurasi yang telah ditentukan
    var chartProgress2 = new ApexCharts(document.querySelector("#progress2"), optionsProgress2);
    chartProgress2.render();
</script>


<script>
    function Form() {
        var selectElement = document.getElementById("tingkatan");

        var selectedValue = selectElement.options[selectElement.selectedIndex].value;


        if (selectedValue === 'SMA/SMK/Sederajat') {
            let Smk = ` <div class="mt-2">
                        <label for="Jurusan" style="color: black;">
                            Jurusan <span style="color: red;">*</span>
                        </label>
                        <input placeholder="Jurusan" class="col-12 col-md-12 rounded-1 form-control"
                            type="text" name="Jurusan" value="{{ old('Jurusan') }}" id="InputJurusan">
                    </div>`;
            let Nama =
                `   <label for="NamaSekolah" style="color: black;">
                            NamaSekolah <span style="color: red;">*</span>
                        </label>
                        <input placeholder="NamaSekolah" class="col-12 col-md-12 rounded-1 form-control"
                            type="text" name="NamaSekolah" value="{{ old('NamaSekolah') }}" id="InputNamaSekolah">`;
            document.getElementById('NamaSekolah').innerHTML = Nama;

            var tempat = document.getElementById('Tambahan');
            document.getElementById('TempatUniversitas').innerHTML = '';
            console.log(tempat);
            tempat.innerHTML = Smk;

        } else if (selectedValue === 'Universitas') {
            let Universitas = ` <div class="mt-2" id="NamaUniversitas">
                        <label for="Universitas" style="color: black;">
                            Universitas <span style="color: red;">*</span>
                        </label>
                        <input placeholder="Universitas" class="col-12 col-md-12 rounded-1 form-control"
                            type="text" name="NamaSekolah" value="{{ old('NamaSekolah') }}" id="InputUniversitas">
                    </div>
                    <div class="mt-2" id="Fakultas" style="color: black;">
                        <label for="Fakultas">
                            Fakultas <span style="color: red;">*</span>
                        </label>
                        <input placeholder="Falkutas" class="col-12 col-md-12 rounded-1 form-control"
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
            let Nama = `   <label for="NamaSekolah" style="color: black;">
                            NamaSekolah <span style="color: red;">*</span>
                        </label>
                        <input placeholder="NamaSekolah" class="col-12 col-md-12 rounded-1 form-control"
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
    // PDF URL for CV
    const cvPdfUrl = '{{ asset('cv/' . $user->cv) }}';

    // Function to render a specific page of the PDF
    const renderPage = (pageNum, pdfDoc, containerId) => {
        pdfDoc.getPage(pageNum).then(page => {
            const pdfContainer = document.getElementById(containerId);
            const canvas = document.createElement('canvas');
            pdfContainer.appendChild(canvas);

            const context = canvas.getContext('2d');
            const viewport = page.getViewport({
                scale: 1.8
            });
            canvas.width = viewport.width;
            canvas.height = viewport.height;

            page.render({
                canvasContext: context,
                viewport: viewport
            });
        });
    };

    // Load CV PDF using PDF.js
    pdfjsLib.getDocument(cvPdfUrl).promise.then(pdfDoc => {
        const numPages = pdfDoc.numPages;

        for (let pageNum = 1; pageNum <= numPages; pageNum++) {
            renderPage(pageNum, pdfDoc, 'pdf-container-cv');
        }
    });

    // PDF URL for Lamaran
    const lamaranPdfUrl = '{{ asset('lamaran/' . $user->lamaran) }}';

    // Load Lamaran PDF using PDF.js
    pdfjsLib.getDocument(lamaranPdfUrl).promise.then(pdfDoc => {
        const numPages = pdfDoc.numPages;

        for (let pageNum = 1; pageNum <= numPages; pageNum++) {
            renderPage(pageNum, pdfDoc, 'pdf-container-lamaran');
        }
    });
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
                        <label for="Jurusan" style="color: black;">
                            Jurusan <span style="color: red;">*</span>
                        </label>
                        <input placeholder="Jurusan" class="col-12 col-md-10 rounded-1 form-control"
                            type="text" name="Jurusan" value="${response.user.Jurusan}" id="InputJurusan">
                    </div>`;
                    $('#Jurusan').empty();
                    $('#Jurusan').append(jurusan);
                } else if (response.user.Tingkatan === 'Universitas') {
                    let fakultas = ` <div class="mt-2">
                        <label for="Jurusan" style="color: black;">
                            fakultas <span style="color: red;">*</span>
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
            cancelButtonText: 'batal',
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
    // Lakukan permintaan Ajax POST untuk menyimpan data
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
    function Sertifikat(itemId) {
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
                text: "Anda ingin menghapus sertifikat ini!",
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
                    swalWithBootstrapButtons.fire(
                        "Berhasil!",
                        "Anda berhasil menghapus sertifikat tersebut.",
                        "success"
                    );
                    var form = document.getElementById("formsertifikat-" + itemId);
                    form.submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        "Batal",
                        "Sertifikat tersebut batal untuk dihapus.",
                        "error"
                    );
                }
            });
    }

    function Pengalaman(itemId) {
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
                text: "Anda ingin menghapus pengalaman ini!",
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
                    swalWithBootstrapButtons.fire(
                        "Berhasil!",
                        "Anda berhasil menghapus pengalaman tersebut.",
                        "success"
                    );
                    var form = document.getElementById("formpengalaman-" + itemId);
                    form.submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        "Batal",
                        "Pengalaman tersebut batal untuk dihapus.",
                        "error"
                    );
                }
            });
    }

    function Keahlian(itemId) {
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
                text: "Anda ingin menghapus keahlian ini!",
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
                    swalWithBootstrapButtons.fire(
                        "Berhasil!",
                        "Anda berhasil menghapus keahlian tersebut.",
                        "success"
                    );
                    var form = document.getElementById("formkeahlian-" + itemId);
                    form.submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        "Batal",
                        "Keahlian tersebut batal untuk dihapus.",
                        "error"
                    );
                }
            });
    }
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

@endsection

</html>
