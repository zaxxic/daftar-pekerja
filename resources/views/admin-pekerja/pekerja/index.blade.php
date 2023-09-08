<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
</head>

<body>
    @extends('layouts.app')
    @section('content')
    </body>

    </html>
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
                                <input type="search" class="form-control mt-3" name="cari" placeholder="Cari Pekerja..."
                                    style="height: 4%;" value="{{ $keyword }}">
                            </div>
                        </form>
                    </div>
                    <div class="mb-3 d-flex justify-content-end col-md-6 lg-6 mt-3">
                        <form id="form_filter">
                            <div class="mb-3 d-flex">
                                <select id="filter" name="filter" class="form-select me-3">
                                    <option value="">Semua</option>
                                    @foreach ($divisi as $item)
                                        <option value="{{ $item->id }}"
                                            @if ($item->id == $value_filter) selected @endif>
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
                                    <h6 class="fs-4 fw-semibold mb-0">No</h6>
                                </th>
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
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ asset('foto_user/' . $row->User->foto) }}" data-lightbox="image-1"
                                                data-title="Gambar Profil Anda"
                                                style="border-radius: 50%; overflow: hidden; width: 35px; height: 35px; display: flex; justify-content: center; align-items: center;">
                                                <img src="{{ asset('foto_user/' . $row->User->foto) }}"
                                                    style="max-width: 150%; max-height: 150%;" alt="" />
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
                                        <button type="button" title="nonaktif pekerja"
                                            style="background-color: transparent;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="21"
                                                viewBox="0 0 16 16" data-bs-toggle="modal"
                                                data-bs-target="#nonaktif-user-{{ $row->User->id }}">
                                                <g fill="#FA896B">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path
                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8L4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                </g>
                                            </svg>
                                        </button>
                                        <button type="button" title="lihat pekerja" style="background-color: transparent;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="25"
                                                viewBox="0 0 16 16" data-bs-toggle="modal"
                                                data-bs-target="#detail-user-{{ $row->User->id }}">
                                                <g fill="#5D87FF">
                                                    <path
                                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                    <path
                                                        d="M8 5.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0a3.5 3.5 0 0 1-7 0z" />
                                                </g>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>


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


                <style>
                    @media (max-width: 600px) {

                        .foto {
                            align-items: center;
                            text-align: center;
                            justify-content: center;
                            margin-left: 38px;
                            border-radius: 10%;
                        }
                    }
                </style>

                @foreach ($user as $item)
                    <div id="detail-user-{{ $item->User->id }}" class="modal fade" tabindex="-1"
                        aria-labelledby="bs-example-modal-md" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header d-flex align-items-center">
                                    <h4 class="modal-title" id="myModalLabel">Detail Pekerja</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <hr style="width: 100%; border-top: 2px solid #000000;" class="mt-0">
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-4 col-12 foto">
                                                <div class="justify-content-center align-items-center foto"
                                                    style="border-radius: 50%; overflow: hidden; width: 180px; height: 180px;">
                                                    <img src="{{ asset('foto_user/' . $row->User->foto) }}"
                                                        style="max-width: 100%; max-height: 100%;" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="mb-3">Data Divisi</h5>
                                                        <div class="d-flex mb-1">
                                                            <span style="font-weight: 600;">Divisi:</span>
                                                            <span
                                                                class="ms-2">{{ $item->Vacancy->Division->divisi }}</span>
                                                        </div>
                                                        <hr style="width: 100%; border-top: 1px solid #000000;"
                                                            class="mt-0">
                                                        <div class="d-flex mb-1">
                                                            <span class="me-3" style="font-weight: 600;">Posisi
                                                                :</span>
                                                            <span>{{ $item->Vacancy->pekerja }}</span>
                                                        </div>
                                                        <hr style="width: 100%; border-top: 1px solid #000000;"
                                                            class="mt-0">
                                                        <div class="d-flex mb-1">
                                                            <span class="me-3" style="font-weight: 600;">Tipe
                                                                Pekrjaan
                                                                :</span>
                                                            <span>{{ $item->Vacancy->tipe }}</span>
                                                        </div>
                                                        <hr style="width: 100%; border-top: 1px solid #000000;"
                                                            class="mt-0">
                                                        <div class="d-flex mb-1">
                                                            <span class="me-3" style="font-weight: 600;">Lokasi
                                                                :</span>
                                                            <span>{{ $item->Vacancy->lokasi }}</span>
                                                        </div>
                                                        <hr style="width: 100%; border-top: 1px solid #000000;"
                                                            class="mt-0">
                                                        <div class="d-flex mb-1">
                                                            <span class="me-3" style="font-weight: 600;">Tanggal
                                                                Wawancara
                                                                :</span>
                                                            <span>{{ $item->Vacancy->lokasi }}</span>
                                                        </div>
                                                        <hr style="width: 100%; border-top: 1px solid #000000;"
                                                            class="mt-0">
                                                        <div class="d-flex mb-1">
                                                            <span class="me-3" style="font-weight: 600;">Lokasi
                                                                Wawancara
                                                                :</span>
                                                            <span>{{ $item->Vacancy->lokasi }}</span>
                                                        </div>
                                                        <hr style="width: 100%; border-top: 1px solid #000000;"
                                                            class="mt-0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="mb-3">Data Diri Pekerja</h5>
                                                        <div class="d-flex mb-1">
                                                            <span class="me-3" style="font-weight: 600;">Nama:</span>
                                                            <span>{{ $item->User->name }}</span>
                                                        </div>
                                                        <hr style="width: 100%; border-top: 1px solid #000000;"
                                                            class="mt-0">
                                                        <div class="d-flex mb-1">
                                                            <span class="me-3" style="font-weight: 600;">Jenis
                                                                Kelamin:</span>
                                                            <span>{{ $item->User->jenis_kelamin }}</span>
                                                        </div>
                                                        <hr style="width: 100%; border-top: 1px solid #000000;"
                                                            class="mt-0">
                                                        <div class="d-flex mb-1">
                                                            <span class="me-3" style="font-weight: 600;">No.
                                                                Handphone:</span>
                                                            <span>{{ $item->User->no_telp }}</span>
                                                        </div>
                                                        <hr style="width: 100%; border-top: 1px solid #000000;"
                                                            class="mt-0">
                                                        <div class="d-flex mb-1">
                                                            <span class="me-3" style="font-weight: 600;">Email:</span>
                                                            <span>{{ $item->User->email }}</span>
                                                        </div>
                                                        <hr style="width: 100%; border-top: 1px solid #000000;"
                                                            class="mt-0">
                                                        <div class="d-flex mb-1">
                                                            <span style="font-weight: 600;">Alamat:</span>
                                                            <span class="ms-2">{{ $item->User->alamat }}</span>
                                                        </div>
                                                        <hr style="width: 100%; border-top: 1px solid #000000;"
                                                            class="mt-0">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($user as $row)
                    <div class="modal fade" id="nonaktif-user-{{ $row->User->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header d-flex align-items-center">
                                    <h4 class="modal-title" id="exampleModalLabel1">
                                        Nonaktif Pekerja
                                    </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <hr style="width: 100%; border-top: 2px solid #000000;" class="mt-0">
                                <div class="modal-body">
                                    <form action="/nonactive/{{ $row->User->id }}" method="POST" id="formnonactive">
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
                                    <button type="button" onclick="klikNonaktif()"
                                        class="btn btn-danger img-fluid model_img" id="nonaktif">
                                        Nonaktif
                                    </button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach

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

                if ($("#pesan").val() !== "") {
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
                } else {
                    $('#error').text("pesan harus di isi");
                    console.log("gagal bg");
                }
            });
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            console.log("dokumen siap");
            $('#filter').click(function() {
                console.log("awookaowk");
            });
        });
    </script>
@endsection
