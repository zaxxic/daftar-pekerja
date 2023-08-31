@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- --------------------------------------------------- -->
    <!--  Form Basic Start -->
    <!-- --------------------------------------------------- -->

    <div class="card w-100 position-relative overflow-hidden">

        <div class="card-body p-4">
            <div class="col-lg-3 mb-4 d-flex justify-content-end align-items-center position-relative">
                <input type="text" class="form-control search-chat py-2 ps-3 mt-3" id="search-name" placeholder="Cari pekerja...">
            </div>

            <div class="table-responsive rounded-2 mb-4">
                <table class="table border text-nowrap customize-table mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">User</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">No.Handphone</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Jenis Kelamin</h6>
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
                        @foreach ($user as $row)
                        <tr>
                            <td>

                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage/public/foto_user/' . $row->foto) }}" class="rounded-circle" width="40" height="40" />
                                    <div class="ms-3">
                                        <h6 class="fs-4 fw-semibold mb-0">{{ $row->User->name }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal">{{ $row->User->no_telp}}</p>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal">{{ $row->User->jenis_kelamin}}</p>
                            </td>
                            <td>
                                <a href="{{ route('user.cv', $row->User->id) }}" target="_blank" class="btn btn-primary" target="_blank">CV</a>
                            </td>
                            <td>
                                <a href="{{ route('user.lamaran', $row->User->id) }}" target="_blank" class="btn btn-primary" target="_blank">Lamaran</a>
                            </td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#reject-user-{{ $row->User->id }}">
                                    <g fill="#FA896B">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8L4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </g>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="33   " viewBox="0 0 16 16" data-bs-toggle="modal" data-id="{{ $row->User->id }}" data-bs-target="#acc-user-{{ $row->User->id }}">
                                    <g fill="#13DEB9">
                                        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764a.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0a5.5 5.5 0 1 1-11 0z" />
                                        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293L5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                    </g>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#detail-user-{{ $row->User->id }}">
                                    <g fill="#5D87FF">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0a3.5 3.5 0 0 1-7 0z" />
                                    </g>
                                </svg>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="acc-user-{{ $row->User->id }}" tabindex="-1" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header d-flex align-items-center">
                                        <h4 class="modal-title" id="exampleModalLabel1">
                                            Terima Pekerja
                                        </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <hr style="width: 100%; border-top: 2px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <form action="/acc/{{ $row->User->id }}" method="POST">
                                            @method('PATCH')
                                            @csrf
                                            <div class="mb-3">
                                                <span style="color: black;" for="recipient-name" class="control-label">Apakah anda yakin untuk menerima pekerja tersebut?</span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="control-label" style="color: black;">Tanggal <span style="color: red;">*</span></label>
                                                <input type="date" class="form-control" id="recipient-name1" name="tanggal_wawancara" />
                                                @error('tanggal_wawancara')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <br>
                                                <small id="name" class="form-text text-muted">Setelah anda yakin ingin menerima pekerja tersebut, anda bisa mengirimkan tanggal untuk jadwal wawancara si pekerja.</small>

                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">
                                            Terima
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="reject-user-{{ $row->User->id }}" tabindex="-1" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header d-flex align-items-center">
                                        <h4 class="modal-title" id="exampleModalLabel1">
                                            Tolak Pekerja
                                        </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <hr style="width: 100%; border-top: 2px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <form action="/reject/{{ $row->User->id }}" method="POST">
                                            @method('PATCH')
                                            @csrf
                                            <div class="mb-3">
                                                <label for="message-text" class="control-label">Pesan <span style="color: red;">*</span></label>
                                                <textarea class="form-control" id="message-text1" placeholder="Masukkan pesan" name="pesan"></textarea>
                                                @error('pesan')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <small id="name" class="form-text text-muted">Masukkan alasan kenapa pekerja tersebut ditolak.</small>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger">
                                            Tolak
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="detail-user-{{ $row->User->id }}" class="modal fade" tabindex="-1" aria-labelledby="bs-example-modal-md" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header d-flex align-items-center">
                                        <h4 class="modal-title" id="myModalLabel">
                                            Detail Pekerja
                                        </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <hr style="width: 100%; border-top: 2px solid #000000;" class="mt-0">
                                    <div class="modal-body col-lg-12">
                                        <div class="d-flex">
                                            <div class="col-lg-4">
                                                <img src="{{ asset('storage/public/foto_user/' . $row->User->foto) }}" class="rounded-circle" width="180" height="180" />
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="mb-3">Data Diri Pekerja</h5>
                                                        <div class="d-flex mb-1">
                                                            <span class="me-3" style="font-weight: 600;">Nama :</span>
                                                            <span>{{ $row->User->name }}</span>
                                                        </div>
                                                        <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                                        <div class="d-flex mb-1">
                                                            <span class="me-3" style="font-weight: 600;">Jenis Kelamin :</span>
                                                            <span>{{ $row->User->jenis_kelamin }}</span>
                                                        </div>
                                                        <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                                        <div class="d-flex mb-1">
                                                            <span class="me-3" style="font-weight: 600;">No. Handphome :</span>
                                                            <span>{{ $row->User->no_telp }}</span>
                                                        </div>
                                                        <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                                        <div class="d-flex mb-1">
                                                            <span class="me-3" style="font-weight: 600;">Email :</span>
                                                            <span>{{ $row->User->email }}</span>
                                                        </div>
                                                        <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div class=" row">
                                                <h5 style="margin-top: 6%; margin-left: 23%;" class="mb-0">Data Dokumen</h5>
                                                <div class="col-lg-5">
                                                    <div class="card">
                                                        <div class="card-body d-flex justify-content-center align-items-center">
                                                        <a href="{{ route('user.cv', $row->User->id) }}" target="_blank" class="btn btn-primary" target="_blank">CV</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5">
                                                    <div class="card">
                                                        <div class="card-body d-flex justify-content-center align-items-center">
                                                        <a href="{{ route('user.lamaran', $row->User->id) }}" target="_blank" class="btn btn-primary" target="_blank">Lamaran</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-5">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="mb-3">Data Daftar Lowongan</h5>
                                                        <div class="d-flex mb-1">
                                                            <span class="me-3" style="font-weight: 600;">Lowongan :</span>
                                                            <span>Pemrograman web</span>
                                                        </div>
                                                        <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                                        <div class="d-flex mb-1">
                                                            <span class="me-3" style="font-weight: 600;">Divisi :</span>
                                                            <span>Web Developer</span>
                                                        </div>
                                                        <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                                        <div class="d-flex mb-1">
                                                            <span class="me-3" style="font-weight: 600;">Gaji :</span>
                                                            <span>Rp 120.000.00</span>
                                                        </div>
                                                        <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>





                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="mb-3">Alamat Pekerja</h5>
                                                <div class="d-flex mb-1">
                                                    <div class="col-lg-1.5">
                                                        <span class="me-3" style="font-weight: 600;">Alamat :</span>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <span>{{ $row->User->alamat }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-lg-12">
                    <nav aria-label="Page navigation example" class="mt-3 justify-content-end">
                        <ul class="pagination justify-content-end">
                            <li class="page-item">
                                <a class="page-link link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <i class="ti ti-chevrons-left fs-4"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link link" href="#" aria-label="Next">
                                    <span aria-hidden="true">
                                        <i class="ti ti-chevrons-right fs-4"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>




    <!-- --------------------------------------------------- -->
    <!--  Form Basic End -->
    <!-- --------------------------------------------------- -->
</div>

@endsection
