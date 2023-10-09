<html>

<head>

    <!-- <link rel="stylesheet" href="{{ asset('assets/dist/libs/daterangepicker/daterangepicker.css')}}"> -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="{{ asset('assets/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css')}}">

</head>

<body>
    @extends('layouts1.app')
    @section('content')
    <div class="container-fluid">

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
                <div class="row align-items-center">
                    <!-- <div class="col-lg-4 order-lg-1 order-2">
                    <div class="d-flex align-items-center justify-content-around m-4">
                      
                    </div>
                </div> -->
                    <div class="col-lg-4 order-lg-1 order-2">
                        <div class="mt-n5">
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <div class="linear-gradient d-flex align-items-center justify-content-center rounded-circle" style="width: 110px; height: 110px; position: relative;">
                                    <div class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden" style="width: 100px; height: 100px;">
                                        <img src="{{ asset('assets/user-1.jpg') }}" alt="" class="w-100 h-100">
                                    </div>
                                    <div style="position: absolute; bottom: 0; right: 0; display: flex; align-items: center; justify-content: center;">
                                        <div style="width: 40px; height: 40px; background-color: #5d87ff; border-radius: 50%; display: flex; align-items: center; justify-content: center;" class="tooltip-container1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" title="update foto">
                                                <g fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="M12 20H5a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h1a2 2 0 0 0 2-2a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v3.5M16 19h6m-3-3v6" />
                                                    <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0-6 0" />
                                                </g>
                                            </svg>
                                            <span class="tooltip-text1" style="width: 280%;">Edit Foto</span>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="text-center mb-3">
                                <h5 class="fs-5 mb-0 fw-semibold mb-3">Trisqi Tegar Valenzi</h5>
                                <div class="">
                                    <button class="btn btn-primary me-2">CV</button>
                                    <button class="btn btn-primary">Lamaran</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 order-last">
                        <div style="width: 40px; height: 40px; background-color: #5d87ff; border-radius: 50%; display: flex; align-items: center; justify-content: center; float: right;" class="mt-3 me-5">
                            <div class="tooltip-container">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" style="margin-bottom: 3px;" width="25" height="25" viewBox="0 0 24 24">
                                    <path fill="#ffffff" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                                </svg>
                                <span class="tooltip-text" style="width: 450%;">Edit Profile</span>
                            </div>
                        </div>
                        <div class="list-unstyled align-items-center justify-content-center justify-content-lg-start my-3 gap-3">
                            <div class="position-relative d-flex  mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-3" width="25" height="25" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2" />
                                </svg>
                                <h6>085607338154</h6>
                            </div>

                            <div class="position-relative d-flex mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-3" width="25" height="25" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M3 7a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z" />
                                        <path d="m3 7l9 6l9-6" />
                                    </g>
                                </svg>
                                <h6>trisqitegarv@gmail.com</h6>
                            </div>
                            <div class="position-relative d-flex mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-3" width="25" height="26" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0-6 0" />
                                        <path d="M17.657 16.657L13.414 20.9a2 2 0 0 1-2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z" />
                                    </g>
                                </svg>
                                <h6>jl Lesti Utara Gg makam no.179</h6>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
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
                        @if(!empty($user->deskripsi))
                        <form>
                            <p>{{$user->deskripsi}}</p>
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

                    <form action="{{ route('summary') }}" method="POST" id="summaryUser{{$user->id}}">
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
                                    <textarea type="text" class="form-control" name="deskripsi">@if (!empty($user->deskripsi)){{ $user->deskripsi }}@endif</textarea>

                                    <span class="text-danger" id="errorSumary{{ $user->id }}"></span>

                                    <br>
                                    <small id="name" class="form-text text-muted">Silakan masukkan deskripsi Anda.</small>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" onclick="Summary({{$user->id}})">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card position-relative overflow-hidden mb-4" style="height: 94%;">
                    <div class="card-header bg-info d-flex align-items-center">
                        <h4 class="card-title text-white mb-0">Pendidikan</h4>
                    </div>
                    <div class="card-body p-4">
                        <div class="mt-2 mb-2 d-flex justify-content-between">
                            <div class="d-flex">
                                <div class="me-4" style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; text-align: center; vertical-align: middle; line-height: 35px;">
                                    <img src="{{ asset('assets/user-1.jpg') }}" alt="" class="w-100 h-100">
                                </div>
                                <div>
                                    <p for="exampleInputPassword1" class="form-label fw-semibold">SMK PGRI 03 Malang</p>
                                    <p class=" mt-2">2019-2022</p>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-1" style="margin-bottom: 3px;" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="#13DEB9" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" height="20" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                    <path fill="#FA896B" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2 mb-2 d-flex justify-content-between">
                            <div class="d-flex">
                                <div class="me-4" style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; text-align: center; vertical-align: middle; line-height: 35px;">
                                    <img src="{{ asset('assets/user-1.jpg') }}" alt="" class="w-100 h-100">
                                </div>
                                <div>
                                    <p for="exampleInputPassword1" class="form-label fw-semibold">MTs Hasyim Asy'ari</p>
                                    <p class=" mt-2">2019-2022</p>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-1" style="margin-bottom: 3px;" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="#13DEB9" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" height="20" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                    <path fill="#FA896B" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2 mb-2 d-flex justify-content-between">
                            <div class="d-flex">
                                <div class="me-4" style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; text-align: center; vertical-align: middle; line-height: 35px;">
                                    <img src="{{ asset('assets/user-1.jpg') }}" alt="" class="w-100 h-100">
                                </div>
                                <div>
                                    <p for="exampleInputPassword1" class="form-label fw-semibold">MI Darul Ulum</p>
                                    <p class=" mt-2">2019-2022</p>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-1" style="margin-bottom: 3px;" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="#13DEB9" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" height="20" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                    <path fill="#FA896B" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <button class="buttonmodal border-bottom-0 border-start-0 border-end-0 w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="25" height="25" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                        </svg>
                        <strong class="fs-4">Tambah</strong>
                    </button>

                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="card position-relative overflow-hidden mb-4">
                    <div class="card-header bg-info d-flex align-items-center">
                        <h4 class="card-title text-white mb-0">Pengalaman</h4>
                    </div>
                    <div class="card-body p-4">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            @forelse($experience as $key => $item)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading{{$key}}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$key}}" aria-expanded="false" aria-controls="flush-collapse{{$key}}">
                                        <div class="d-flex">
                                            <p class="form-label fw-semibold fs-4">{{$item->Tempat}}</p>
                                            <span class="fs-2 ms-2 me-2 mt-1">{{ \Carbon\Carbon::parse($item->TanggalAwal)->locale('id')->isoFormat('D MMM Y ') }}</span>-
                                            <span class="fs-2 ms-2 mt-1">{{ \Carbon\Carbon::parse($item->TanggalAkhir)->locale('id')->isoFormat('D MMM Y ') }}</span>
                                        </div>
                                    </button>
                                </h2>
                                <div id="flush-collapse{{$key}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$key}}" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex" style="float: right;">

                                            <a href="#" data-bs-toggle="modal" data-bs-target="#experience-update-{{ $item->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-1" style="margin-bottom: 3px;" width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="#13DEB9" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                                                </svg>
                                            </a>
                                            <div class="justify-content-end">
                                                <form action="{{ route('experience-delete', $item->id) }}" method="POST" id="formpengalaman-{{$item->id}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" style="background: none; border: none; padding: 0;" onclick="Pengalaman({{$item->id}})">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" height="20" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                                            <path fill="#FA896B" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <span class="form-label fw-semibold fs-4">{{$item->NamaProjek}}</span>
                                        <br>
                                        {{$item->JenisPekerjaan}}
                                        <p class="form-label fw-semibold mt-3">Detail Projek :</p>
                                        {{$item->DetailProjek}}
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
                                    <input type="text" class="form-control" name="Tempat" value="{{old('Tempat')}}"></input>

                                    <br>
                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">Jenis Pekerjaan<span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="JenisPekerjaan" value="{{old('JenisPekerjaan')}}"></input>

                                    <br>
                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">Nama Project<span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="NamaProjek" value="{{old('NamaProjek')}}"></input>

                                    <br>
                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">Tanggal Awal<span style="color: red;">*</span></label>
                                    <input type="date" class="form-control" name="TanggalAwal" value="{{old('TanggalAwal')}}" />

                                    <br>
                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">Tanggal Akhir<span style="color: red;">*</span></label>
                                    <input type="date" class="form-control" name="TanggalAkhir" value="{{old('TanggalAkhir')}}" />

                                    <br>
                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">Detail Project<span style="color: red;">*</span></label>
                                    <textarea type="text" class="form-control" name="DetailProjek">{{old('DetailProjek')}}</textarea>

                                    <br>
                                    <small id="name" class="form-text text-muted">Silakan masukkan deskripsi Keahlian Anda.</small>
                                    <br>
                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">Bukti<span style="color: red;">*</span></label>
                                    <input type="file" class="form-control" name="Bukti" value="{{old('Bukti')}}"></input>

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
                                    <input type="text" class="form-control" name="Tempat" value="{{$item->Tempat}}"></input>

                                    <br>
                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">Jenis Pekerjaan<span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="JenisPekerjaan" value="{{$item->JenisPekerjaan}}"></input>

                                    <br>
                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">Nama Project<span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="NamaProjek" value="{{$item->NamaProjek}}"></input>

                                    <br>
                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">Tanggal Awal<span style="color: red;">*</span></label>
                                    <input type="date" class="form-control" name="TanggalAwal" value="{{($item->TanggalAwal)}}" />

                                    <br>
                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">Tanggal Akhir<span style="color: red;">*</span></label>
                                    <input type="date" class="form-control" name="TanggalAkhir" value="{{($item->TanggalAkhir)}}" />

                                    <br>
                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">Detail Project<span style="color: red;">*</span></label>
                                    <textarea type="text" class="form-control" name="DetailProjek">{{$item->DetailProjek}}</textarea>
                                    <br>
                                    <small id="name" class="form-text text-muted">Silakan masukkan deskripsi Keahlian Anda.</small>
                                    <br>
                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">Bukti<span style="color: red;">*</span></label>
                                    <input type="file" class="form-control" name="Bukti" value="{{$item->Bukti}}"></input>
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
            <div class="col-lg-5">
                <div class="card position-relative overflow-hidden mb-4">
                    <div class="card-header bg-info d-flex align-items-center">
                        <h4 class="card-title text-white mb-0">Keahlian</h4>
                    </div>
                    <div class="card-body p-4">
                        @forelse ($skill as $item)
                        <div class="mt-2 mb-2">
                            <div class="d-flex" style="float: right;">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#skill-update-{{ $item->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-1" style="margin-bottom: 3px;" width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="#13DEB9" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                                    </svg>
                                </a>
                                <form action="skill-delete/{{ $item->id }}" method="POST" id="formkeahlian-{{$item->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" style="background: none; border: none; padding: 0;" onclick="Keahlian({{$item->id}})">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" height="20" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                            <path fill="#FA896B" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            <div class="d-flex">

                                <div>
                                    <p for="exampleInputPassword1" class="form-label fw-semibold">{{ $item->judul }}</p>
                                    <p class=" mt-2">{{ $item->deskripsi }}</p>
                                </div>
                            </div>
                            @empty
                            <div class="col-lg-12 mt-3 ml-5 text-center" id="lowongan">
                                <img src="{{ asset('assets/nodatas.png') }}" alt="" width="200px">
                            </div>
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
                                    <input type="text" class="form-control" name="judul" value="{{old('judul')}}"></input>
                                    <br>
                                    <small id="name" class="form-text text-muted">Silakan masukkan Keahlian Anda.</small>
                                    <br>
                                    <label for="recipient-name" class="control-label mt-2" style="color: black;">
                                        Deskripsi
                                        <span style="color: red;">*</span>
                                    </label>
                                    <textarea type="text" class="form-control" name="deskripsi">{{old('deskripsi')}}</textarea>
                                    <br>
                                    <small id="name" class="form-text text-muted">Silakan masukkan deskripsi Keahlian Anda.</small>
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
                <div class="card position-relative overflow-hidden mb-4">
                    <div class="card-header bg-info d-flex align-items-center">
                        <h4 class="card-title text-white mb-0">Sertifikat</h4>
                    </div>
                    <div class="d-flex justfy-content-between">
                        <div class="card-body p-4">
                            <div class="owl-carousel collectibles-carousel owl-theme mt-9">
                                <div class="item">
                                    <div class="card overflow-hidden mb-4 mb-md-0 shadow-none border">
                                        <div class="position-relative">
                                            <img src="{{asset('assets/hummatech.png')}}" class="img-fluid w-100" alt="1" />
                                            <div class="card-img-overlay">
                                                <div class="text-end">
                                                    <span class="badge bg-light-dark rounded-pill fs-2">04h 09m 12s</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-9 text-start">
                                            <h6 class="fw-semibold fs-4">Geo Runners</h6>
                                            <div class="d-flex align-items-center mt-3 justify-content-between">
                                                <div class="fs-3">Volume</div>
                                                <h6 class="mb-0">
                                                    <i class="cc ETH" title="ETH"></i>
                                                    <span class="text-dark fw-bold">10.1</span> ETH
                                                </h6>
                                            </div>
                                            <a href="javascript:void(0)" class="btn btn-primary w-100 mt-3">Place a Bid</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card overflow-hidden mb-4 mb-md-0 shadow-none border">
                                        <div class="position-relative">
                                            <img src="{{asset('assets/hummatech.png')}}" class="img-fluid w-100" alt="1" />
                                            <div class="card-img-overlay">
                                                <div class="text-end">
                                                    <span class="badge bg-light-dark rounded-pill fs-2">02h 10m 30s</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-9 text-start">
                                            <h6 class="fw-semibold fs-4">Cube Runner</h6>
                                            <div class="d-flex align-items-center mt-3 justify-content-between">
                                                <div class="fs-3">Volume</div>
                                                <h6 class="mb-0">
                                                    <i class="cc ETH" title="ETH"></i>
                                                    <span class="text-dark fw-bold">10.1</span> ETH
                                                </h6>
                                            </div>
                                            <a href="javascript:void(0)" class="btn btn-primary w-100 mt-3">Place a Bid</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card overflow-hidden mb-4 mb-md-0 shadow-none border">
                                        <div class="position-relative">
                                            <img src="{{asset('assets/hummatech.png')}}" class="img-fluid w-100" alt="1" />
                                            <div class="card-img-overlay">
                                                <div class="text-end">
                                                    <span class="badge bg-light-dark rounded-pill fs-2">01h 02m 10s</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-9 text-start">
                                            <h6 class="ffw-semibold fs-4">Algo cube</h6>
                                            <div class="d-flex align-items-center mt-3 justify-content-between">
                                                <div class="fs-3">Volume</div>
                                                <h6 class="mb-0">
                                                    <i class="cc ETH" title="ETH"></i>
                                                    <span class="text-dark fw-bold">10.1</span> ETH
                                                </h6>
                                            </div>
                                            <a href="javascript:void(0)" class="btn btn-primary w-100 mt-3">Place a Bid</a>
                                        </div>
                                    </div>
                                </div>
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
    $(function() {
        $('input[name="WaktuPengerjaan"]').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });
        $('input[name="WaktuPengerjaan"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
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