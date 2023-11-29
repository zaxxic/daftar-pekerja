@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- --------------------------------------------------- -->
    <!--  Form Basic Start -->
    <!-- -------------------------------------------- -->

    <div class="card w-100 position-relative overflow-hidden">

        <div class="card-body p-4">

            <span style="color: #549bff;" class="fw-semibold fs-4">Pelamar</span><span class="fw-semibold fs-4">/ Approval</span>
            <div class="row">
                <div class="mb-3 d-flex justify-content-start col-md-6 lg-6">
                    <form action="">
                        <div class="mb-3 d-flex mt-5 input-group">
                            <input type="search" class="form-control mt-0" name="cari" placeholder="Cari Pekerja..." style="height: 4%;" value="{{ $keyword }}">
                            <button type="submit" style="width: 40px; height:auto;  background-color:#549bff; border-radius: 0px 5px 5px 0px;" class="text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 21 21">
                                    <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="8.5" cy="8.5" r="5" />
                                        <path d="M17.571 17.5L12 12" />
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="mb-3 mt-4 d-flex justify-content-end col-md-6 lg-6">
                    <form id="form_filter">
                        <div class="mt-4 d-flex">
                            <select id="filter" name="filter" class="form-select me-3">
                                <option value="">Semua</option>
                                @foreach ($divisi as $item)
                                <option value="{{ $item->id }}" @if ($item->id == $value_filter) selected @endif>
                                    {{ $item->divisi }}
                                </option>
                                @endforeach
                            </select>
                            <button class="btn btn-primary" style="height: 4%; width: 40%;" type="submit">Cari</button>
                        </div>
                    </form>
                </div>

            </div>

            <div class="table-responsive rounded-2 mb-4">
                <table class="table border text-nowrap customize-table mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">User</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Divisi</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Posisi</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">CV</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Lamaran</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Aksi</h6>
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($user as $row)
                        <tr>
                            <td>

                                <div class="d-flex align-items-center">
                                    <a href="{{ asset('foto_user/' . $row->User->foto) }}" data-lightbox="image-1" data-title="Gambar Profil Anda" style="border-radius: 50%; overflow: hidden; width: 35px; height: 35px; display: flex; justify-content: center; align-items: center;">
                                        <img src="{{ asset('foto_user/' . $row->User->foto) }}" style="max-width: 150%; max-height: 150%;" alt="" />
                                    </a>
                                    <div class="ms-3">
                                        <h6 class="fs-4 fw-semibold mb-0">{{ $row->User->name }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal">{{ $row->Vacancy->Division->divisi }}</p>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal">{{ $row->Vacancy->pekerja }}</p>
                            </td>
                            <td>
                                <a href="{{ route('user.cv', ['id' => $row->User->id]) }}" class="btn btn-primary">CV</a>
                            </td>
                            <td>
                                <a href="{{ route('user.lamaran', ['id' => $row->User->id]) }}" class="btn btn-primary">Lamaran</a>
                            </td>
                            <td>
                                <div class="dropdown dropstart" style="margin-top: -4px;">
                                    <a href="#" class="" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fs-7">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="" class="text-#5d87ff link text-dark bg-light-primary rounded me-8 p-1 d-flex align-items-center justify-content-center mt-1" viewBox="0 0 21 21">
                                                <g fill="#5d87ff" fill-rule="evenodd">
                                                    <circle cx="10.5" cy="10.5" r="1" />
                                                    <circle cx="10.5" cy="5.5" r="1" />
                                                    <circle cx="10.5" cy="15.5" r="1" />
                                                </g>
                                            </svg>
                                        </i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li class="d-flex" data-bs-toggle="modal" data-bs-target="#reject-user-{{ $row->User->id }}" style="cursor: pointer;">
                                            <a class=" text-primary " style="padding: 10px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" title="Tolak Pekerja" viewBox="0 0 16 16" class="me-1 " style="margin-left: 2px">
                                                    <g fill="currentColor">
                                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8L4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                    </g>
                                                </svg>
                                                Tolak
                                            </a>
                                        </li>
                                        <li class="d-flex" data-bs-toggle="modal" data-id="{{ $row->id }}" data-bs-target="#acc-user-{{ $row->id }}" style="cursor: pointer;">
                                            <a class=" text-primary " style="padding: 10px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 16 16" class="me-1">
                                                    <g fill="currentColor">
                                                        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764a.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0a5.5 5.5 0 1 1-11 0z" />
                                                        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293L5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                                    </g>
                                                </svg>
                                                Terima
                                            </a>
                                        </li>

                                        <li class="d-flex" style="cursor: pointer;">
                                            <a href="{{ route('detail-user', $row->User->id) }}" class=" text-primary" style="padding: 10px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 16 16" class="me-1">
                                                    <g fill="currentColor">
                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0a3.5 3.5 0 0 1-7 0z" />
                                                    </g>
                                                </svg>
                                                Detail
                                            </a>
                                        </li>

                                        <li class="d-flex " style="cursor: pointer;">
                                            @if ($row->status2 === 'save')
                                            <form action="BatalSimpan/{{ $row->id }}" method="post" style="padding: 10px;" id="BatalSimpan{{ $row->User->id }}">
                                                @csrf
                                                @method('PATCH')
                                                <button class="text-primary d-flex" type="button" title="batal pekerja" style="background-color: transparent;" onclick="BatalSimpan({{ $row->User->id }})">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" style="margin-right: 4px">
                                                        <path fill="currentColor" d="M21 7h-6V5h6v2ZM5 21V5q0-.825.588-1.413T7 3h6v2H7v12.95l5-2.15l5 2.15V11h2v10l-7-3l-7 3ZM7 5h6h-6Z" />
                                                    </svg>
                                                    <p class="" style="font-size: 14px; margin-left:3px">
                                                        Batal Simpan
                                                    </p>
                                                </button>
                                            </form>
                                            @else
                                            <form action="save/{{ $row->id }}" method="post" style="padding: 10px;" id="Simpan{{ $row->id }}" style="background-color: transparent; padding:4px">
                                                @csrf
                                                @method('PATCH')
                                                <button class="text-primary d-flex" type="button" title="simpan pekerja" onclick="Simpan({{ $row->id }})" style="background-color: transparent;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" style="margin-right: 4px">
                                                        <path fill="currentColor" d="M5 21V5q0-.825.588-1.413T7 3h6v2H7v12.95l5-2.15l5 2.15V11h2v10l-7-3l-7 3ZM7 5h6h-6Zm10 4V7h-2V5h2V3h2v2h2v2h-2v2h-2Z" />
                                                    </svg>
                                                    <p class="" style="font-size: 14px; margin-left:3px">
                                                        Simpan
                                                    </p>
                                                </button>
                                            </form>
                                            @endif
                                        </li>

                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @empty

                        <div class="container">
                            <div class="row d-flex">
                                <div class="col">
                                    <tr>
                                        <td class="text-center" colspan="12">
                                            <img src="{{ asset('assets/nodatas.png') }}" alt="" width="280px">
                                        </td>
                                    </tr>


                                </div>
                            </div>
                        </div>
                        @endforelse

                    </tbody>
                </table>
                <div class="col-lg-12">
                    <nav aria-label="Page navigation example" class="mt-3 justify-content-end">
                        <ul class="pagination justify-content-end">
                            {{ $user->appends(['cari' => request('cari')])->links() }}
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>
@foreach ($user as $item)
<!-- Modal -->
<div class="modal fade" id="acc-user-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">

        <form action="acc/{{ $item->id }}" method="POST" id="pesanTerima{{ $item->id }}">
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
                            {{ $item->User->name }}?</span>
                            <div style="background-color: #549bff; border-radius:2px; padding:5px; " class="mt-2">
                                <small  class="text-muted  text-white" style="font-weight:bold">Setelah Anda yakin, kirimkan tanggal dan lokasi untuk jadwal wawancara dengan pelamar.</small>
                            </div>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="control-label" style="color: black;">Tanggal Wawancara
                            <span style="color: red;">*</span></label>
                        <input type="datetime-local" class="form-control" id="Tanggal{{ $item->id }}" name="tanggal_wawancara" />
                        <p class="text-danger fs-3" id="error{{ $item->id }}"></p>
                        <br>
                        <label for="recipient-name" class="control-label mt-2" style="color: black;">lokasi
                            Wawancara
                            <span style="color: red;">*</span></label>
                        <input type="text" class="form-control" id="Lokasi{{ $item->id }}" name="lokasi" placeholder="Masukkan lokasi wawancara"/>
                        <p class="text-danger fs-3" id="errorLokasi{{ $item->id }}"></p>
                        

                    </div>
                </div>
                <div class="modal-footer">
                    <button  onclick="Terima({{$item->id}})" type="button" class="btn btn-success">
                        Terima
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="reject-user-{{ $item->User->id }}" tabindex="-1" aria-labelledby="exampleModalLabel1">
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
                        {{ $item->User->name }}?</span>
                </div>
                <form action="/reject/{{ $item->id }}" method="POST" id="pesanTolak{{ $item->User->id }}">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="message-text" class="control-label">Pesan <span style="color: red;">*</span></label>
                        <textarea class="form-control" id="pesan{{ $item->User->id }}" placeholder="Masukkan pesan" name="pesan"></textarea>
                        <p class="text-danger fs-3" id="errorTolak{{ $item->User->id }}"></p>
                        <small id="name" class="text-muted text-white" style=" background-color: #549bff; border-radius:2px; padding:5px; font-weight:bold">Masukkan alasan
                            kenapa pekerja tersebut ditolak.</small>
                    </div>
            </div>
            <div class="modal-footer">
                <button onclick="Tolak({{$item->User->id}})" type="button" class="btn btn-danger">
                    Tolak
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
<style>
    @media (max-width: 600px) {

        .fotos {
            align-items: center;
            text-align: center;
            justify-content: center;

            border-radius: 10%;
        }
    }

    @media (max-width: 1080px) and (min-width: 760px) {
        .fotos {
            align-items: center;
            text-align: center;
            justify-content: center;
            border-radius: 10%;
            width: 100%;
        }
    }

    @media (max-width: 765px) {
        .titik-dua {
            display: none;
        }

        .text-detail {
            text-align: center
        }
    }
</style>
<div class="modal fade" id="detail-user-{{ $item->User->id }}" tabindex="-1" aria-labelledby="bs-example-modal-lg" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="myModalLabel">Detail Pekerja</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12 text-center mb-3">
                                <div class="justify-content-center align-items-center fotos">
                                    <img src="{{ asset('foto_user/' . $item->User->foto) }}" class="img-fluid rounded-circle" style="width: 220px; height: 220px;" />
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-12 pt-3">
                                                <div class="row mb-4">
                                                    <span class="col-12 col-md-3 text-detail  " style="font-weight: bold">Nama</span>
                                                    <span class="titik-dua col-1">:</span>
                                                    <span class="col-12 col-md-8 text-detail">{{ $item->User->name }}</span>
                                                </div>

                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 pt-3">

                                                <div class="row  mb-4">
                                                    <span class="col-12 col-md-3 text-detail " style="font-weight: bold">Jenis Kelamin</span>
                                                    <span class="titik-dua col-1">:</span>
                                                    <span class="col-12 col-md-8 text-detail">{{ $item->User->jenis_kelamin }}</span>
                                                </div>

                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 pt-3">

                                                <div class="row  mb-4">
                                                    <span class="col-12 col-md-3 text-detail " style="font-weight: bold">No Telp</span>
                                                    <span class="titik-dua col-1">:</span>
                                                    <span class="col-12 col-md-8 text-detail">{{ $item->User->no_telp }}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 pt-3">
                                                <div class="row mb-4">
                                                    <span class="col-12 col-md-3 text-detail " style="font-weight: bold" style="font-weight: bold">Email</span>
                                                    <span class="titik-dua col-1">:</span>
                                                    <span class="col-12 col-md-8 text-detail">{{ $item->User->email }}</span>
                                                </div>

                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 pt-3">

                                                <div class="row  mb-4">
                                                    <span class="col-12 col-md-3 text-detail " style="font-weight: bold">Divisi</span>
                                                    <span class="titik-dua col-1">:</span>
                                                    <span class="col-12 col-md-8 text-detail">{{ $item->Vacancy->Division->divisi }}</span>
                                                </div>

                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 pt-3">

                                                <div class="row  mb-4">
                                                    <span class="col-12 col-md-3 text-detail " style="font-weight: bold">Posisi</span>
                                                    <span class="titik-dua col-1">:</span>
                                                    <span class="col-12 col-md-8 text-detail">{{ $item->Vacancy->pekerja }}</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 pt-3">
                                                <div class="row mb-4">
                                                    <span class="col-12 text-center text-detail " style="font-weight: bold" style="font-weight: bold">Alamat</span>

                                                    <span class="col-12 text-center text-detail">{{ $item->User->alamat }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal-content -->
</div>


<div class="modal fade" id="detail-cv-{{ $item->User->id }}" tabindex="-1" aria-labelledby="detail-cv-{{ $item->User->id }}" aria-hidden="true">
    <!-- Konten modal CV -->
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalFullscreenLabel">
                    CV Pekerja
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <embed src="{{ asset('cv/' . $item->User->cv) }}" type="application/pdf" width="100%" height="100%">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-danger text-danger font-medium" data-bs-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="detail-lamaran-{{ $item->User->id }}" tabindex="-1" aria-labelledby="detail-lamaran-{{ $item->User->id }}" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalFullscreenLabel">
                    Lamaran Pekerja
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <embed src="{{ asset('lamaran/' . $item->User->lamaran) }}" type="application/pdf" width="100%" height="100%">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-danger text-danger font-medium" data-bs-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach

<!-- --------------------------------------------------- -->
<!--  Form Basic End -->
<!-- --------------------------------------------------- -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js
    "></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css
" rel="stylesheet">
@if (session('suksesSimpan'))
<script>
    Swal.fire(
        "Berhasil!",
        "{{ session('suksesSimpan') }}",
        "success"
    );
</script>
@endif
@if (session('sukses'))
<script>
    Swal.fire(
        "Berhasil!",
        "{{ session('sukses') }}",
        "success"
    );
</script>
@endif
@if (session('BerhasilBatal'))
<script>
    Swal.fire(
        "Berhasil!",
        "{{ session('BerhasilBatal') }}",
        "success"
    );
</script>
@endif

<script>
   function Tolak(params) {
    var pesan = document.getElementById('pesan' + params).value;
    var error = document.getElementById('errorTolak' + params);

    if (pesan !== "") {
        if (pesan.length > 255) {
            error.innerHTML = "Pesan maksimal 255 karakter.";
        } else {
            error.innerHTML = "";
            var form = document.getElementById("pesanTolak" + params);
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
</script>

<script>
    // Ambil elemen input pencarian
    const searchInput = document.querySelector('input[name="cari"]');

    // Tambahkan event listener untuk mendengarkan peristiwa klik pada ikon "x"
    searchInput.addEventListener('search', function(event) {
        // Setel nilai input pencarian menjadi kosong
        searchInput.value = '';

        // Selanjutnya, Anda dapat memicu pencarian ulang atau tindakan lain yang sesuai.
    });
</script>

<script>
    function BatalSimpan(data) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "mr-2 btn btn-danger",
            },
            buttonsStyling: false,
        });


        swalWithBootstrapButtons.fire({
            title: "Apakah Anda Yakin?",
            text: "Membatalkan simpan Pelamar tersebut!",
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
        }).then((result) => {
            if (result.value) {
                // Jika SweetAlert berhasil ditampilkan, submit form
                var form = document.getElementById("BatalSimpan" + data);
                form.submit();
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire(
                    "Batal",
                    "penerimaan di batalkan. :)",
                    "error"
                );
            }
        });
    }

    function Simpan(data) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "mr-2 btn btn-danger",
            },
            buttonsStyling: false,
        });


        swalWithBootstrapButtons.fire({
            title: "Apakah Anda Yakin?",
            text: "Menyimpan Pelamar tersebut!",
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
        }).then((result) => {
            if (result.value) {
                // Jika SweetAlert berhasil ditampilkan, submit form
                var form = document.getElementById("Simpan" + data);
                form.submit();
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire(
                    "Batal",
                    "penerimaan di batalkan. :)",
                    "error"
                );
            }
        });
    }
</script>
@endsection
