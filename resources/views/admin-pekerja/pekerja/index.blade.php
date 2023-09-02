@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <!-- --------------------------------------------------- -->
        <!--  Form Basic Start -->
        <!-- --------------------------------------------------- -->

        <div class="card w-100 position-relative overflow-hidden">

            <div class="card-body p-4">
                <div class="row">
                    <div class="col">
                        <div class="d-flex justify-content-between mb-2">
                            <form action="">
                                <div class="col mb-4 d-flex justify-content-end align-items-center position-relative">
                                    <input type="search" class="form-control py-2 ps-3 mt-3" name="cari"
                                        placeholder="Cari pekerjaa...">
                                </div>
                            </form>
                            <div class="employers-listing-sidebar">
                                <form class="search-form">
                                    <div class="form-group">
                                        <span>Cari Berdasarkan Divisi</span>
                                        <select class="form-control">
                                            @foreach ($user as $item )
                                            <option value="1">{{$item->Devision->divisi}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                            </div>
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
                                    <img src="{{ asset('storage/public/foto_user/' . $row->foto) }}" class="rounded-circle" width="40" height="40" />
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="21" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#nonaktif-user-{{ $row->id }}">
                                    <g fill="#FA896B">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8L4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </g>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="25" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#detail-user-{{ $row->id }}">
                                    <g fill="#5D87FF">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0a3.5 3.5 0 0 1-7 0z" />
                                    </g>
                                </svg>
                            </td>
                        </tr>
                    </tbody>
                </table>

                        </div>
                        <div class="modal fade" id="nonaktif-user-{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header d-flex align-items-center">
                                        <h4 class="modal-title" id="exampleModalLabel1">
                                            Nonaktif Pekerja
                                        </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <hr style="width: 100%; border-top: 2px solid #000000;" class="mt-0">
                                    <div class="modal-body">
                                        <form action="/nonactive/{{ $row->id }}" method="POST" id="formnonactive">
                                            @method('PATCH')
                                            @csrf
                                            <div class="mb-3">
                                                <label for="message-text" class="control-label">Pesan
                                                    <span style="color: red;">*</span></label>
                                                <textarea class="form-control" id="pesan" placeholder="Masukkan pesan" name="pesan"></textarea>
                                                <span id="error" class="text-danger"></span>
                                                @error('pesan')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <br>
                                                <small id="name" class="form-text text-muted">Masukkan alasan
                                                    kenapa pekerja tersebut dinonaktifkan.</small>
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" onclick="klikNonaktif()" class="btn btn-danger img-fluid model_img" id="nonaktif">
                                            Nonaktif
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>




                          @empty
                                <div class="container">
                                    <div class="row d-flex">
                                        <div class="col">
                                            <tr>
                                                <td class="text-center" colspan="5">
                                                    <img src="/assets/dist/images/nodatas.png"
                                                        alt="" width="280px">
                                                </td>
                                            </tr>
                                        </div>
                                    </div>
                                </div>
                            @endforelse


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
    <script>
        function klikNonaktif() {
            $("#nonaktif").click(function() {
                    const swalWithBootstrapButtons = Swal.mixin({
                            customClass: {
                                confirmButton: "btn btn-success",
                                cancelButton: "mr-2 btn btn-danger",
                            },
                            buttonsStyling: false,
                        });

                    if ( $("#pesan").val() !== "" ){
                        $('#error').html('')
                        swalWithBootstrapButtons
                            .fire({
                                title: "Apakah Anda Yakin?",
                                text: "Anda ingin menonaktifkan akun ini!",
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
                                width: "25rem", // You can adjust the width as needed
                                padding: "1rem", // You can adjust the padding as needed
                                customContainerClass: "swal-custom", // Define a custom class for styling
                            })
                            .then((result) => {
                                if (result.value) {
                                    swalWithBootstrapButtons.fire(
                                        "Berhasil!",
                                        "Anda berhasil menonaktifkan akun tersebut.",
                                        "success"
                                    );
                                    var form = document.getElementById("formnonactive");
                                    form.submit();
                                } else if (
                                    result.dismiss === Swal.DismissReason.cancel
                                ) {
                                    swalWithBootstrapButtons.fire(
                                        "Batal",
                                        "Selamat akun tersebut masih selamat. :)",
                                        "error"
                                    );
                                }
                            });
                    }else{
                        $('#error').text("pesan harus di isi");
                        console.log("gagal bg");
                    }
              });
    }
    </script>

@endsection
