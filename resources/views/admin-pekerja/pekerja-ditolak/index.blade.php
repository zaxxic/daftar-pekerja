@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <!-- --------------------------------------------------- -->
        <!--  Form Basic Start -->
        <!-- --------------------------------------------------- -->

        <div class="card w-100 position-relative overflow-hidden">

            <div class="card-body p-4">
                <form action="">
                    <div class="col-3 mb-4 d-flex justify-content-end align-items-center position-relative">
                        <input type="search" class="form-control py-2 ps-3 mt-3" name="cari" placeholder="Cari pekerjaa...">
                    </div>
                </form>

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
                                    <h6 class="fs-4 fw-semibold mb-0">Email</h6>
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
                                            <img src="{{ asset('storage/foto_user/' . $row->foto) }}" class="rounded-circle"
                                                width="40" height="40" />
                                            <div class="ms-3">
                                                <h6 class="fs-4 fw-semibold mb-0">{{ $row->name }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fw-normal">{{ $row->no_telp }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 fw-normal">{{ $row->jenis_kelamin }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 fw-normal ellipsis"></p>{{ $row->email }}
                                    </td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30"
                                            viewBox="0 0 16 16" data-bs-toggle="modal"
                                            data-bs-target="#detail-user-{{ $row->id }}">
                                            <g fill="#5D87FF">
                                                <path
                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                <path
                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0a3.5 3.5 0 0 1-7 0z" />
                                            </g>
                                        </svg>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div id="detail-user-{{ $row->id }}" class="modal fade" tabindex="-1"
                                    aria-labelledby="bs-example-modal-md" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header d-flex align-items-center">
                                                <h4 class="modal-title" id="myModalLabel">
                                                    Detail Pekerja
                                                </h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <hr style="width: 100%; border-top: 2px solid #000000;" class="mt-0">
                                            <div class="modal-body col-lg-12">
                                                <div class="d-flex">
                                                    <div class="col-lg-4">
                                                        <img src="../../dist/images/profile/user-3.jpg"
                                                            class="rounded-circle" width="180" height="180" />
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="mb-3">Data Diri Pekerja</h5>
                                                                <div class="d-flex mb-1">
                                                                    <span class="me-3" style="font-weight: 600;">Nama
                                                                        :</span>
                                                                        <span>{{ $row->name }}</span>
                                                                </div>
                                                                <hr style="width: 100%; border-top: 1px solid #000000;"
                                                                    class="mt-0">
                                                                <div class="d-flex mb-1">
                                                                    <span class="me-3" style="font-weight: 600;">Jenis
                                                                        Kelamin :</span>
                                                                        <span>{{ $row->jenis_kelamin }}</span>
                                                                </div>
                                                                <hr style="width: 100%; border-top: 1px solid #000000;"
                                                                    class="mt-0">
                                                                <div class="d-flex mb-1">
                                                                    <span class="me-3" style="font-weight: 600;">No.
                                                                        Handphone :</span>
                                                                        <span>{{ $row->no_telp }}</span>
                                                                </div>
                                                                <hr style="width: 100%; border-top: 1px solid #000000;"
                                                                    class="mt-0">
                                                                <div class="d-flex mb-1">
                                                                    <span class="me-3" style="font-weight: 600;">Email
                                                                        :</span>
                                                                        <span>{{ $row->email }}</span>
                                                                </div>
                                                                <hr style="width: 100%; border-top: 1px solid #000000;"
                                                                    class="mt-0">
                                                                <div class="d-flex mb-1">
                                                                    <span class="me-3" style="font-weight: 600;">Divisi
                                                                        :</span>
                                                                        <span>{{$row->Devision->divisi}}</span>
                                                                </div>
                                                                <hr style="width: 100%; border-top: 1px solid #000000;"
                                                                    class="mt-0">
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
                                                                <span>{{ $row->alamat }}</span>
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
                            @empty
                                <div class="container">
                                    <div class="row d-flex">
                                        <div class="col">
                                            <tr>
                                                <td class="text-center" colspan="5">
                                                    <img src="/assets/dist/images/nodatas.png" alt=""
                                                        width="280px">
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




        <!-- --------------------------------------------------- -->
        <!--  Form Basic End -->
        <!-- --------------------------------------------------- -->
    </div>
    </div>
@endsection
