@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- --------------------------------------------------- -->
    <!--  Form Basic Start -->
    <!-- --------------------------------------------------- -->

    <div class="card w-100 position-relative overflow-hidden">

        <div class="card-body p-4">
            <div class="row">
                <div class="mb-3 d-flex justify-content-start col-md-6 lg-6">
                    <form action="">
                        <div class="mb-3 d-flex justify-content-end align-items-center position-relative">
                            <input type="search" class="form-control mt-3" name="cari" placeholder="Cari Pekerja..." style="height: 4%;" value="{{ $keyword }}">
                        </div>
                    </form>
                </div>


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
                                <div style="border-radius: 50%; overflow: hidden; width: 35px; height: 35px; display: flex; justify-content: center; align-items: center;">
                                    <img src="{{ asset('foto_user/' . $row->User->foto) }}" style="max-width: 150%; max-height: 150%;" alt="" />
                                </div>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#detail-user-{{ $row->User->id }}">
                                <g fill="#5D87FF">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0a3.5 3.5 0 0 1-7 0z" />
                                </g>
                            </svg>
                        </td>
                    </tr>

                    <!-- Modal -->
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
                                            <div style="border-radius: 50%; overflow: hidden; width: 180px; height: 180px; display: flex; justify-content: center; align-items: center;">
                                                <img src="{{ asset('foto_user/' . $row->User->foto) }}" style="max-width: 150%; max-height: 150%;" alt="" />
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="fs-4 fw-semibold mb-0">{{ $row->User->name }}</h6>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fw-normal">{{ $row->Vacancy->Devision->divisi }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 fw-normal">{{ $row->Vacancy->pekerja }}</p>
                                    </td>
                                    <td>
                                        <button type="button" title="lihat pekerja" style="background-color: transparent;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#detail-user-{{ $row->User->id }}">
                                                <g fill="#5D87FF">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0a3.5 3.5 0 0 1-7 0z" />
                                                </g>
                                            </svg>
                                        </button>
                                    </td>
                                    </tr>

                                    <!-- Modal -->
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
                                                            <div style="border-radius: 50%; overflow: hidden; width: 180px; height: 180px; display: flex; justify-content: center; align-items: center;">
                                                                <img src="{{ asset('foto_user/' . $row->User->foto) }}" style="max-width: 150%; max-height: 150%;" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h5 class="mb-3">Data Diri Pekerja</h5>
                                                                    <div class="d-flex mb-1">
                                                                        <span class="me-3" style="font-weight: 600;">Nama
                                                                            :</span>
                                                                        <span>{{ $row->User->name }}</span>
                                                                    </div>
                                                                    <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                                                    <div class="d-flex mb-1">
                                                                        <span class="me-3" style="font-weight: 600;">Jenis
                                                                            Kelamin :</span>
                                                                        <span>{{ $row->User->jenis_kelamin }}</span>
                                                                    </div>
                                                                    <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                                                    <div class="d-flex mb-1">
                                                                        <span class="me-3" style="font-weight: 600;">No.
                                                                            Handphone :</span>
                                                                        <span>{{ $row->User->no_telp }}</span>
                                                                    </div>
                                                                    <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                                                    <div class="d-flex mb-1">
                                                                        <span class="me-3" style="font-weight: 600;">Email
                                                                            :</span>
                                                                        <span>{{ $row->User->email }}</span>
                                                                    </div>
                                                                    <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                                                    <div class="d-flex mb-1">
                                                                        <span style="font-weight: 600;">Divisi:</span>
                                                                        <span class="ms-2">{{ $item->Vacancy->Division->divisi }}</span>
                                                                    </div>
                                                                    <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                                                    <div class="d-flex mb-1">
                                                                        <span class="me-3" style="font-weight: 600;">Posisi
                                                                            :</span>
                                                                        <span>{{ $item->Vacancy->pekerja }}</span>
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
                                                                    <span class="me-3" style="font-weight: 600;">Alamat
                                                                        :</span>
                                                                </div>
                                                                <div class="col-lg-10">
                                                                    <span>{{ $row->User->alamat }}</span>
                                                                </div>
                                                            </div>
                                                            <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                                            <div class="d-flex mb-1">
                                                                <span class="me-3" style="font-weight: 600;">Jenis
                                                                    Kelamin :</span>
                                                                <span>{{ $row->User->jenis_kelamin }}</span>
                                                            </div>
                                                            <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                                            <div class="d-flex mb-1">
                                                                <span class="me-3" style="font-weight: 600;">No.
                                                                    Handphone :</span>
                                                                <span>{{ $row->User->no_telp }}</span>
                                                            </div>
                                                            <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                                            <div class="d-flex mb-1">
                                                                <span class="me-3" style="font-weight: 600;">Email
                                                                    :</span>
                                                                <span>{{ $row->User->email }}</span>
                                                            </div>
                                                            <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                                            <div class="d-flex mb-1">
                                                                <span style="font-weight: 600;">Divisi:</span>
                                                                <span class="ms-2">{{ $row->Vacancy->Division->divisi }}</span>
                                                            </div>
                                                            <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                                            <div class="d-flex mb-1">
                                                                <span class="me-3" style="font-weight: 600;">Posisi
                                                                    :</span>
                                                                <span>{{ $row->Vacancy->pekerja }}</span>
                                                            </div>
                                                            <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
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
                                                        <img src="/assets/dist/images/nodatas.png" alt="" width="280px">
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
                        {{ $user->appends(['cari' => request('cari')])->onEachSide(1)->links() }}
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
<script>
    // Ambil elemen input pencarian
    const searchInput = document.querySelector('input[name="cari"]');

    // Tambahkan event listener untuk mendengarkan peristiwa klik pada ikon "x"
    searchInput.addEventListener('search', function(event) {
                // Setel nilai input pencarian menjadi kosong
                searchInput.value = '';



                <
                !-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- - -- >
                <
                !--Form Basic End-- >
                <
                !-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- - -- >
                <
                /div> < /
                div > <
                    script >
                    // Ambil elemen input pencarian
                    const searchInput = document.querySelector('input[name="cari"]');

                // Tambahkan event listener untuk mendengarkan peristiwa klik pada ikon "x"
                searchInput.addEventListener('search', function(event) {
                    // Setel nilai input pencarian menjadi kosong
                    searchInput.value = '';

                    // Selanjutnya, Anda dapat memicu pencarian ulang atau tindakan lain yang sesuai.
                });
</script>
@endsection