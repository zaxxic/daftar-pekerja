<html>

<head>

    <!-- <link rel="stylesheet" href="{{ asset('assets/dist/libs/daterangepicker/daterangepicker.css') }}"> -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="{{ asset('assets/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Add Bootstrap JavaScript and jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('assets/dist/libs/prismjs/themes/prism-okaidia.min.css') }}">

    <script>
        $(document).ready(function() {
            $('#myCarousel').carousel();
        });
    </script>

</head>

<body>
    @extends('layouts1.app')
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
                            <!-- <div class="col-lg-4 order-lg-1 order-2">
                                                                                    <div class="d-flex align-items-center justify-content-around m-4">

                                                                                    </div>
                                                                                </div> -->
                            <div class="col-lg-4 col-md-5 col-7 ">
                                <div class="mt-n5">
                                    <div class="d-flex align-items-center justify-content-center mb-2">
                                        <div class="linear-gradient d-flex align-items-center justify-content-center rounded-circle" style="width: 110px; height: 110px; position: relative;">
                                            <div class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden" style="width: 100px; height: 100px;">
                                                <!-- <img src="{{ asset('assets/user-1.jpg') }}" alt="" class="w-100 h-100"> -->
                                                <a href="{{ asset('foto_user/' . $user->foto) }}" data-lightbox="image-1" data-title="Gambar Profil Anda">
                                                    @if ($user->foto === 'default/default.png')
                                                    <img src="{{ asset($user->foto) }}" alt="" width="180px" class="img-fluid rounded-circle" style="width: 120px; height: 120px;">
                                                    @else
                                                    <img src="{{ asset('foto_user/' . $user->foto) }}" alt="" width="180px" class="img-fluid rounded-circle" style="width: 120px; height: 120px;">
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
                                <div class="text-center mb-3">
                                    <h5 class="fs-5 mb-0 fw-semibold mb-3">{{ $user->name }}</h5>
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
                                            <embed src="{{ asset('cv/' . $user->cv) }}" type="application/pdf" width="100%" height="100%">
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="detail-lamaran-{{ Auth()->User()->lamaran }}" tabindex="-1" aria-labelledby="detail-lamaran-{{ Auth()->User()->cv }}" aria-hidden="true">
                                <div class="modal-dialog modal-fullscreen">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Lamaran pekerja</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @if (Auth()->User()->lamaran === 'default/default.png')
                                            <div class="row">
                                                <div class="col-lg-12 mt-5 text-center" id="lowongan">
                                                    <img src="/assets/nodatas.png" alt="" width="350px">
                                                </div>
                                            </div>
                                            @else
                                            <embed src="{{ asset('lamaran/' . $user->lamaran) }}" type="application/pdf" width="100%" height="100%">
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-12 ">
                                <div style="width: 40px; height: 40px; background-color: #5d87ff; border-radius: 50%; display: flex; align-items: center; justify-content: center; float: right;" class="mt-4 me-5">
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
                                            <hr style="width: 100%; border-top: 2px solid #000000;" class="mt-0">
                                            <div class="modal-body">
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
                                                    <br>
                                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">cv<span style="color: red;">*</span></label>
                                                    <input type="file" class="form-control" name="cv" value="{{ $user->cv }}"></input>
                                                    <br>
                                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">Alamat<span style="color: red;">*</span></label>
                                                    <textarea type="text" class="form-control" name="alamat">{{ $user->alamat }}</textarea>
                                                    <br>
                                                </div>
                                            </div>

                                            <diPv class="modal-footer">
                                                <button type="submit" class="btn btn-success">
                                                    Simpan
                                                </button>
                                            </diPv>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-12 container">
                                <div class="list-unstyled align-items-center justify-content-center justify-content-lg-start my-3 gap-3 mx-4">
                                    <div class="position-relative d-flex  mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-3" width="25" height="25" viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2" />
                                        </svg>
                                        <h6>{{ $user->no_telp }}</h6>
                                    </div>

                                    <div class="position-relative d-flex mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-3" width="25" height="25" viewBox="0 0 24 24">
                                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="M3 7a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z" />
                                                <path d="m3 7l9 6l9-6" />
                                            </g>
                                        </svg>
                                        <h6>{{ $user->email }}</h6>
                                    </div>
                                    <div class="position-relative d-flex mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-3" width="25" height="26" viewBox="0 0 24 24">
                                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0-6 0" />
                                                <path d="M17.657 16.657L13.414 20.9a2 2 0 0 1-2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z" />
                                            </g>
                                        </svg>
                                        <h6>{{ $user->alamat }}</h6>
                                    </div>

                                </div>

                            </div>
                            <div class="col-lg-12 container">
                                <div class="text-center mb-3">
                                    <div style="float: right;" class="mb-4 me-5">
                                        <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#detail-cv-{{ Auth()->User()->cv }}">CV</button>
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail-lamaran-{{ Auth()->User()->lamaran }}">Lamaran</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
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
                                <div class="col-lg-12 mt-3 ml-5 text-center" id="lowongan">
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
                                    <hr style="width: 100%; border-top: 2px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Deskripsi
                                                <span style="color: red;">*</span>
                                            </label>
                                            <textarea name="deskripsi" class="form-control" id=""> {{ $user->deskripsi }}</textarea>


                                            <span class="text-danger" id="errorSumary{{ $user->id }}"></span>

                                            <br>
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
                    {{-- pppp --}}

                    <div class="col-lg-12">
                        <div class="card position-relative overflow-hidden mb-4">
                            <div class="card-header bg-info d-flex align-items-center">
                                <h4 class="card-title text-white mb-0">Pengalaman</h4>
                            </div>
                            <div class="card-body p-4">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    @forelse($experience as $key => $item)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-heading{{ $key }}">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $key }}" aria-expanded="false" aria-controls="flush-collapse{{ $key }}">
                                                <div class="d-flex">
                                                    <p class="form-label fw-semibold fs-4">{{ $item->Tempat }}</p>
                                                    <span class="fs-2 ms-2 me-2 mt-1">{{ \Carbon\Carbon::parse($item->TanggalAwal)->locale('id')->isoFormat('D MMM Y ') }}</span>-
                                                    <span class="fs-2 ms-2 mt-1">{{ \Carbon\Carbon::parse($item->TanggalAkhir)->locale('id')->isoFormat('D MMM Y ') }}</span>
                                                </div>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse{{ $key }}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{ $key }}" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <div class="d-flex" style="float: right;">

                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#experience-update-{{ $item->id }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-1" style="margin-bottom: 3px;" width="20" height="20" viewBox="0 0 24 24">
                                                            <path fill="#13DEB9" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                                                        </svg>
                                                    </a>
                                                    <div class="justify-content-end">
                                                        <form action="{{ route('experience-delete', $item->id) }}" method="POST" id="formpengalaman-{{ $item->id }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" style="background: none; border: none; padding: 0;" onclick="Pengalaman({{ $item->id }})">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" height="20" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                                                    <path fill="#FA896B" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <span class="form-label fw-semibold fs-4">{{ $item->NamaProjek }}</span>
                                                <br>
                                                {{ $item->JenisPekerjaan }}
                                                <p class="form-label fw-semibold mt-3">Detail Projek :</p>
                                                {{ $item->DetailProjek }}
                                                <p class="form-label fw-semibold mt-3">Bukti :</p>
                                                <div style="width: 40%; height: 10%; border-radius: 10%; overflow: hidden; text-align: center; vertical-align: middle; line-height: 35px;">
                                                    <img src="{{ asset('pengalaman/' . $item->Bukti) }}" style="width: 100%; height: 100%;" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    <div class="col-lg-12 mt-3 ml-5 text-center" id="lowongan">
                                        <img src="{{ asset('assets/nodatas.png') }}" alt="" width="200px">
                                    </div>
                                    @endforelse
                                </div>
                            </div>
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
                                    <hr style="width: 100%; border-top: 2px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Tempat<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="Tempat" value="{{ old('Tempat') }}"></input>

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Jenis Pekerjaan<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="JenisPekerjaan" value="{{ old('JenisPekerjaan') }}"></input>

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Nama
                                                Project<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="NamaProjek" value="{{ old('NamaProjek') }}"></input>

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Tanggal Awal<span style="color: red;">*</span></label>
                                            <input type="date" class="form-control" name="TanggalAwal" value="{{ old('TanggalAwal') }}" />

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Tanggal Akhir<span style="color: red;">*</span></label>
                                            <input type="date" class="form-control" name="TanggalAkhir" value="{{ old('TanggalAkhir') }}" />

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Detail Project<span style="color: red;">*</span></label>
                                            <textarea type="text" class="form-control" name="DetailProjek">{{ old('DetailProjek') }}</textarea>

                                            <br>
                                            <small id="name" class="form-text text-muted">Silakan masukkan
                                                deskripsi
                                                Keahlian Anda.</small>
                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Bukti<span style="color: red;">*</span></label>
                                            <input type="file" class="form-control" name="Bukti" value="{{ old('Bukti') }}"></input>

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
                                    <hr style="width: 100%; border-top: 2px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Tempat<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="Tempat" value="{{ $item->Tempat }}"></input>

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Jenis Pekerjaan<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="JenisPekerjaan" value="{{ $item->JenisPekerjaan }}"></input>

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Nama Project<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="NamaProjek" value="{{ $item->NamaProjek }}"></input>

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Tanggal Awal<span style="color: red;">*</span></label>
                                            <input type="date" class="form-control" name="TanggalAwal" value="{{ $item->TanggalAwal }}" />

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Tanggal Akhir<span style="color: red;">*</span></label>
                                            <input type="date" class="form-control" name="TanggalAkhir" value="{{ $item->TanggalAkhir }}" />

                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Detail Project<span style="color: red;">*</span></label>
                                            <textarea type="text" class="form-control" name="DetailProjek">{{ $item->DetailProjek }}</textarea>
                                            <br>
                                            <small id="name" class="form-text text-muted">Silakan masukkan
                                                deskripsi
                                                Keahlian Anda.</small>
                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Bukti<span style="color: red;">*</span></label>
                                            <input type="file" class="form-control" name="Bukti" value="{{ $item->Bukti }}"></input>
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
                    {{-- dsds --}}
                    <div class="col-lg-12">
                        <div class="card position-relative overflow-hidden mb-4">
                            <div class="card-header bg-info d-flex align-items-center">
                                <h4 class="card-title text-white mb-0">Keahlian</h4>
                            </div>
                            <div class="card-body p-4">
                                @forelse ($skill as $item)
                                <div class="mt-2 mb-2">
                                    <div class="d-flex justify-content-end">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#skill-update-{{ $item->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-1" width="20" height="20" viewBox="0 0 24 24">
                                                <path fill="#13DEB9" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                                            </svg>
                                        </a>
                                        <form action="skill-delete/{{ $item->id }}" method="POST" id="formkeahlian-{{ $item->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" style="background: none; border: none; padding: 0;" onclick="Keahlian({{ $item->id }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="#FA896B" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="d-flex">
                                        <div>
                                            <p class="form-label fw-semibold">{{ $item->judul }}</p>
                                            <p class="mt-2">{{ $item->deskripsi }}</p>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="col-lg-12 mt-3 ml-5 text-center" id="lowongan">
                                    <img src="{{ asset('assets/nodatas.png') }}" alt="" width="200px">
                                </div>
                                @endforelse
                                <button class="buttonmodal border-bottom-0 border-start-0 border-end-0 w-100" data-bs-toggle="modal" data-bs-target="#skill-add">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="25" height="25" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                                    </svg>
                                    <strong class="fs-4">Tambah</strong>
                                </button>
                            </div>
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
                                    <hr style="width: 100%; border-top: 2px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Judul
                                                <span style="color: red;">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="judul" value="{{ old('judul') }}"></input>
                                            <br>
                                            <small id="name" class="form-text text-muted">Silakan masukkan
                                                Keahlian
                                                Anda.</small>
                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Deskripsi
                                                <span style="color: red;">*</span>
                                            </label>
                                            <textarea type="text" class="form-control" name="deskripsi">{{ old('deskripsi') }}</textarea>
                                            <br>
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
                                    <hr style="width: 100%; border-top: 2px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Judul
                                                <span style="color: red;">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="judul" value="{{ $item->judul }}"></input>
                                            <br>
                                            <small id="name" class="form-text text-muted">Silakan masukkan
                                                Keahlian
                                                Anda.</small>
                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Deskripsi
                                                <span style="color: red;">*</span>
                                            </label>
                                            <textarea type="text" class="form-control" name="deskripsi">{{ $item->deskripsi }}</textarea>
                                            <br>
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
                    @endforeach

                    <div class="col-lg-12">
                        <div class="card position-relative overflow-hidden mb-4" style="height: 94%;">
                            <div class="card-header bg-info d-flex align-items-center">
                                <h4 class="card-title text-white mb-0">Pendidikan</h4>
                            </div>
                            <div class="card-body p-4">
                                @forelse ($School as $data)
                                <div class="mt-2 mb-2 d-flex justify-content-between">
                                    <div class="d-flex">
                                        <div class="me-4" style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; text-align: center; vertical-align: middle; line-height: 35px;">
                                            <img src="{{ asset('assets/user-1.jpg') }}" alt="" class="w-100 h-100">
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
                                    </div>
                                    <div>

                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-1" onclick="ShowEditModal({{ $data->id }})" style="margin-bottom: 3px;" width="20" height="20" viewBox="0 0 24 24">
                                            <path fill="#13DEB9" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" onclick="HapusData({{ $data->id }})" height="20" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                            <path fill="#FA896B" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                                        </svg>
                                    </div>
                                </div>
                                @empty
                                <div class="col-lg-12 mt-3 ml-5 text-center" id="lowongan">
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
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambaha Pendidikan</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post" id="Pendidikan">
                                        @csrf
                                        <label for="tingkatan">Pilih tingkatan</label>
                                        <select class="col-12 col-md-10 rounded-1 form-control" onchange="Form()" name="Tingkatan" id="tingkatan">
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA/SMK/Sederajat">SMA/SMK/Sederajat</option>
                                            <option value="Universitas">Universitas</option>
                                        </select>

                                        <div id="TempatUniversitas"></div>
                                        <div class="mt-2" id="NamaSekolah">
                                            <label for="namaSekolah">
                                                Nama Sekolah
                                            </label>
                                            <input placeholder="Nama Sekolah" class="col-12 col-md-10 rounded-1 form-control" type="text" name="NamaSekolah" value="{{ old('NamaSekolah') }}" id="">
                                        </div>
                                        <div class="mt-2">
                                            <label for="TanggalAwal">
                                                Tanggal Awal
                                            </label>
                                            <input placeholder="Tanggal Awal" class="col-12 col-md-10 rounded-1 form-control" type="date" name="TanggalAwal" value="{{ old('TanggalAwal') }}" id="">
                                        </div>
                                        <div class="mt-2">
                                            <label for="namaSekolah">
                                                Tanggal Lulus
                                            </label>
                                            <input placeholder="Nama Sekolah" class="col-12 col-md-10 rounded-1 form-control" type="date" name="TanggalAkhir" value="{{ old('TanggalAkhir') }}" id="">
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
                                            <input placeholder="Nama Sekolah" class="col-12 col-md-10 rounded-1 form-control" type="text" name="NamaSekolah" value="" id="Sekolah">
                                        </div>
                                        <div class="mt-2">
                                            <label for="TanggalAwal">Tanggal Awal</label>
                                            <input placeholder="Tanggal Awal" class="col-12 col-md-10 rounded-1 form-control" type="date" name="TanggalAwal" value="" id="Awal">
                                        </div>
                                        <div class="mt-2">
                                            <label for="TanggalAkhir">Tanggal Lulus</label>
                                            <input placeholder="Tanggal Lulus" class="col-12 col-md-10 rounded-1 form-control" type="date" name="TanggalAkhir" value="" id="Akhir">
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
                            <div class="card-header bg-info d-flex align-items-center">
                                <h4 class="card-title text-white mb-0">Keahlian</h4>
                            </div>
                            <div class="card-body">
                                <div class="servitikat gap-1">
                                    @foreach ($certificate as $item)
                                    <div class="col-lg-5">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <h4 class="card-title mb-0"></h4>
                                                    <div class="ms-auto">
                                                        <div class="dropdown dropstart">
                                                            <a href="#" class="link text-dark" id="new" data-bs-toggle="dropdown" onclick="Dropdown()" aria-expanded="false">
                                                                <i class="ti ti-dots fs-7"></i>
                                                            </a>
                                                            <ul class="menu shadow" style="position: absolute; z-index: 100; background-color:white; right:20px; padding:8px; border-radius:10px; " aria-labelledby="new">
                                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#certificate-update-{{ $item->id }}">Edit</a></li>
                                                                <form action="{{ route('certificate-delete', $item->id) }}" method="POST" id="formsertifikat-{{$item->id}}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <li><a class="dropdown-item" href="#" onclick="Sertifikat({{ $item->id }})">Hapus</a></li>
                                                                </form>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-12 mb-3">
                                                        <div style="max-width: auto; height: auto;">
                                                            <img src="{{ asset('sertifikat/' . $item->foto) }}" class="img-fluid" alt="">
                                                        </div>
                                                    </div>

                                                    <div class="col-12 ">
                                                        <p>{{$item->judul}}</p>
                                                    </div>
                                                    <div class="col-12">
                                                        <div style="max-width: auto;">
                                                            <p style="white-space: normal; " class="truncate-text">
                                                                {{$item->deskripsi}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="col-lg-5">
                                        <div class="card tambah" data-bs-toggle="modal" data-bs-target="#certificate-add">
                                            <div class="card-body" style="height: 395px; width: ; padding:0;">
                                                <div class="cardTambah" style="height: 100%; width: 100%; justify-content: center; align-items: center; background-color: #000000; border-radius: 5px; opacity: 0.2; display: flex;">
                                                    <div style="border: 4px solid rgb(249, 249, 249); width: 130px; height: 130px; border-radius: 50rem; display: flex; justify-content: center; align-items: center; color: white;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="82" height="82" viewBox="0 0 24 24">
                                                            <path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2v-6Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <hr style="width: 100%; border-top: 2px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Judul
                                                <span style="color: red;">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="judul" value="{{old('judul')}}"></input>
                                            <br>
                                            <small id="name" class="form-text text-muted">Silakan masukkan judul sertifikat Anda.</small>
                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Deskripsi
                                                <span style="color: red;">*</span>
                                            </label>
                                            <textarea type="text" class="form-control" name="deskripsi">{{old('deskripsi')}}</textarea>
                                            <br>
                                            <small id="name" class="form-text text-muted">Silakan masukkan deskripsi sertifikat Anda.</small>
                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Foto<span style="color: red;">*</span></label>
                                            <input type="file" class="form-control" name="foto" value="{{old('foto')}}"></input>
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
                                    <hr style="width: 100%; border-top: 2px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Judul
                                                <span style="color: red;">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="judul" value="{{$item->judul}}"></input>
                                            <br>
                                            <small id="name" class="form-text text-muted">Silakan masukkan Keahlian Anda.</small>
                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                                Deskripsi
                                                <span style="color: red;">*</span>
                                            </label>
                                            <textarea type="text" class="form-control" name="deskripsi">{{($item->deskripsi)}}</textarea>
                                            <br>
                                            <small id="name" class="form-text text-muted">Silakan masukkan deskripsi Keahlian Anda.</small>
                                            <br>
                                            <label for="recipient-name" class="control-label mt-2" style="color: black;">Foto<span style="color: red;">*</span></label>
                                            <input type="file" class="form-control" name="foto" value="{{$item->foto}}"></input>
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
                    <div class="card position-relative overflow-hidden mb-4" style="height: 16%;">
                        <div class="card-header bg-info d-flex align-items-center">
                            <h4 class="card-title text-white mb-0">Lowongan</h4>
                        </div>
                        <div class="card-body p-4">
                            {{-- @forelse ($user as $data) --}}
                            <div>
                                <h5 for="exampleInputPassword1" class=" fw-semibold" style="margin-bottom: 0">
                                    Web Devlopment</h5>
                                <p>Tenggat : 12 Agustus 2005</p>
                                <p>Divisi : <span style="color:aqua">web devloper</span></p>
                                <p>Posisi : Programer</p>
                                <p>Tipe Kerja : permanen</p>
                                <p>Status Lowongan : aktif</p>
                                <p>Status Pendaftaran : <span>Menunggu</span></p>
                            </div>
                            <div class="mt-2 mb-2 d-flex justify-content-end gap-2">
                                <div class=" p-1 btn btn-primary">
                                    detail
                                </div>
                                <div class="p-1 btn btn-danger">
                                    batalkan
                                </div>
                            </div>
                            {{-- @empty --}}
                            {{-- <div class="col-lg-12 mt-3 ml-5 text-center" id="lowongan">
                                        <img src="{{ asset('assets/nodatas.png') }}" alt="" width="200px">
                        </div>`
                        @endforelse --}}
                    </div>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="card position-relative overflow-hidden mb-4" style="height: 25%;">
                    <div class="card-header bg-info d-flex align-items-center">
                        <h4 class="card-title text-white mb-0">Lowongan</h4>
                    </div>
                    @forelse ($lowongan as $data)
                    <div class=" " style="padding: 5px 15px 5px 15px">
                        <div class="d-flex justify-content-between px-2 py-1 rounded" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
                            <div class="d-flex">

                                <div>
                                    <h5 for="exampleInputPassword1" class=" fw-semibold" style="margin-bottom: 0">
                                        {{ $data->judul }}
                                    </h5>
                                    <p for="exampleInputPassword1" class=" fw-semibold" style="margin-bottom: 0">
                                        Tenggat Lowongan : {{ $data->batas }}</p>
                                    <p for="exampleInputPassword1" class=" fw-semibold" style="margin-bottom: 0">
                                        Divisi : <span style="color: #5d87ff">{{ $data->Division->divisi }}</span></p>
                                    <p for="exampleInputPassword1" class=" fw-semibold" style="margin-bottom: 0">
                                        posisi : {{ $data->pekerja }}</p>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class=" " style="padding: 5px 15px 5px 15px">
                        <div class="d-flex justify-content-between px-2 rounded" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
                            <div class="d-flex">

                                <div>
                                    <h5 for="exampleInputPassword1" class=" fw-semibold" style="margin-bottom: 0">
                                        {{ $data->judul }}
                                    </h5>
                                    <p for="exampleInputPassword1" class=" fw-semibold" style="margin-bottom: 0">
                                        Tenggat Lowongan : {{ $data->batas }}</p>
                                    <p for="exampleInputPassword1" class=" fw-semibold" style="margin-bottom: 0">
                                        Divisi : <span style="color: #5d87ff">{{ $data->Division->divisi }}</span></p>
                                    <p for="exampleInputPassword1" class=" fw-semibold" style="margin-bottom: 0">
                                        posisi : {{ $data->pekerja }}</p>

                                </div>
                            </div>

                        </div>
                    </div>
                    @empty
                    <div class="col-lg-12 mt-3 ml-5 text-center" id="lowongan">
                        <img src="{{ asset('assets/nodatas.png') }}" alt="" width="200px">
                    </div>`
                    @endforelse


                </div>
            </div>
        </div>
    </div>
    </div>
</body>


<!-- <script src="{{ asset('assets/dist/libs/daterangepicker/daterangepicker.js') }}"></script>
                                                                    <script src="{{ asset('assets/dist/libs/bootstrap-material-datetimepicker/node_modules/moment/moment.js') }}"></script> -->
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
<!-- ---------------------------------------------- -->
<script src="{{ asset('assets/dist/libs/prismjs/prism.js') }}"></script>
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


@if (Session::has('BerhasilPendidikan'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: "{{ Session('BerhasilPendidikan') }}",
    });
</script>
@endif



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
@endsection

</html>