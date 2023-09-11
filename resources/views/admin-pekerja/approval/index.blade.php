
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
                                        <a data-bs-toggle="modal" data-bs-target="#detail-cv-{{ $row->User->cv }}"
                                            class="btn btn-primary">CV</a>
                                    </td>
                                    <td>
                                        <a data-bs-toggle="modal" data-bs-target="#detail-lamaran-{{ $row->User->lamaran }}"
                                            class="btn btn-primary">Lamaran</a>
                                    </td>
                                    <td>
                                        <button type="button" title="tolak pekerja" style="background-color: transparent;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="21"
                                                title="Tolak Pekerja" viewBox="0 0 16 16" data-bs-toggle="modal"
                                                data-bs-target="#reject-user-{{ $row->User->id }}">
                                                <g fill="#FA896B">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path
                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8L4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                </g>
                                            </svg>
                                        </button>
                                        <button type="button" title="terima pekerja"
                                            style="background-color: transparent;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="28"
                                                viewBox="0 0 16 16" data-bs-toggle="modal" data-id="{{ $row->User->id }}"
                                                data-bs-target="#acc-user-{{ $row->User->id }}">
                                                <g fill="#13DEB9">
                                                    <path
                                                        d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764a.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0a5.5 5.5 0 1 1-11 0z" />
                                                    <path
                                                        d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293L5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
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
                            @empty
                                <div class="container">
                                    <div class="row d-flex">
                                        <div class="col">
                                            <tr>
                                                <td class="text-center" colspan="6">
                                                    <img src="{{ asset('assets/nodatas.png') }}" alt=""
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
    </div>
    @foreach ($user as $item)
        <!-- Modal -->
        <div class="modal fade" id="acc-user-{{ $item->User->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel1">
            <div class="modal-dialog" role="document">

                <form action="acc/{{ $item->User->id }}" method="POST" id="pesanTerima{{$item->User->id}}">
                    @method('PATCH')
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                            <h4 class="modal-title" id="exampleModalLabel1">
                                Terima Pekerja
                            </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <hr style="width: 100%; border-top: 2px solid #000000;" class="mt-0">
                        <div class="modal-body">
                            <div class="mb-3">
                                <span style="color: black;" for="recipient-name" class="control-label">Apakah anda
                                    yakin untuk menerima pekerja
                                    tersebut?</span>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="control-label" style="color: black;">Tanggal Wawancara
                                    <span style="color: red;">*</span></label>
                                <input type="datetime-local" class="form-control" id="tanggal{{$item->User->id}}"
                                    name="tanggal_wawancara" />
                                <p class="text-danger" style="color: red; height:5px" id="error{{$item->User->id}}"></p>
                                @error('tanggal_wawancara')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <br>
                                <label for="recipient-name" class="control-label mt-2" style="color: black;">lokasi
                                    Wawancara
                                    <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="lokasi{{$item->User->id}}" name="lokasi" />
                                <p class="text-danger" style="color: red; height:5px" id="errorLokasi{{$item->User->id}}"></p>
                                @error('lokasi')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <br>
                                <small id="name" class="form-text text-muted">Setelah anda
                                    yakin ingin menerima pekerja tersebut, anda bisa mengirimkan
                                    tanggal untuk jadwal wawancara si pekerja.</small>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button"  onclick="Terima({{$item->User->id}})" class="btn btn-success">
                                Terima
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="reject-user-{{ $item->User->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel1">
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
                        <form action="/reject/{{ $item->User->id }}" method="POST" id="pesanTolak{{ $item->User->id }}">
                            @method('PATCH')
                            @csrf
                            <div class="mb-3">
                                <label for="message-text" class="control-label">Pesan <span
                                        style="color: red;">*</span></label>
                                <textarea class="form-control" id="pesan{{ $item->User->id }}" placeholder="Masukkan pesan" name="pesan"></textarea>
                                <span class="text-danger" id="errorPesan{{ $item->User->id }}"></span>
                                @error('pesan')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <small id="name" class="form-text text-muted">Masukkan alasan
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

                .foto {
                    align-items: center;
                    text-align: center;
                    justify-content: center;
                    margin-left: 38px;
                    border-radius: 10%;
                }
            }
        </style>
        <div id="detail-user-{{ $item->User->id }}" class="modal fade" tabindex="-1"
            aria-labelledby="bs-example-modal-md" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="myModalLabel">Detail Pekerja</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr style="width: 100%; border-top: 2px solid #000000;" class="mt-0">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-12 foto">
                                    <div class="justify-content-center align-items-center foto"
                                        style="border-radius: 50%; overflow: hidden; width: 180px; height: 180px;">
                                        <img src="{{ asset('foto_user/' . $item->User->foto) }}"
                                            style="max-width: 100%; max-height: 100%;" alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="mb-3">Data Diri Pekerja</h5>
                                            <div class="mb-1">
                                                <span class="fw-bold me-3">Nama:</span>
                                                <span>{{ $item->User->name }}</span>
                                            </div>
                                            <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                            <div class="mb-1">
                                                <span class="fw-bold me-3">Jenis Kelamin:</span>
                                                <span>{{ $item->User->jenis_kelamin }}</span>
                                            </div>
                                            <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                            <div class="d-flex mb-1">
                                                <span class="me-3" style="font-weight: 600;">No. Handphone:</span>
                                                <span>{{ $item->User->no_telp }}</span>
                                            </div>
                                            <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                            <div class="d-flex mb-1">
                                                <span class="me-3" style="font-weight: 600;">Email:</span>
                                                <span>{{ $item->User->email }}</span>
                                            </div>
                                            <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                            <div class="d-flex mb-1">
                                                <span style="font-weight: 600;">Divisi:</span>
                                                <span class="ms-2">{{ $item->Vacancy->Division->divisi }}</span>
                                            </div>
                                            <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                            <div class="d-flex mb-1">
                                                <span class="me-3" style="font-weight: 600;">Posisi:</span>
                                                <span>{{ $item->Vacancy->pekerja }}</span>
                                            </div>
                                            <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">

                                            <div class="d-flex mb-1">
                                                <span style="font-weight: 600;">Alamat:</span>
                                                <span class="ms-2">{{ $item->User->alamat }}</span>
                                            </div>
                                            <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">

                                            <!-- Tambahkan data lainnya di sini menggunakan format yang sama -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="modal fade" id="detail-lamaran-{{ $row->User->lamaran }}" tabindex="-1"
            aria-labelledby="detail-lamaran-{{ $row->User->lamaran }}" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Lamaran pekerja</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <embed src="{{ asset('lamaran/' . $row->User->lamaran) }}" type="application/pdf" width="100%"
                            height="100%">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="detail-cv-{{ $row->User->cv }}" tabindex="-1"
            aria-labelledby="detail-cv-{{ $row->User->cv }}" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Cv pekerja</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <embed src="{{ asset('cv/' . $row->User->cv) }}" type="application/pdf" width="100%"
                            height="100%">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach




    <!-- --------------------------------------------------- -->
    <!--  Form Basic End -->
    <!-- --------------------------------------------------- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function Tolak(params) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "mr-2 btn btn-danger",
            },
            buttonsStyling: false,
        });
        var pesan = document.getElementById('pesan'+params).value;
        var errorPesan = document.getElementById('errorPesan'+params);
                if(pesan.trim() !== ""){
                    errorPesan.innerHTML = "";
                        swalWithBootstrapButtons.fire({
                        title: "Apakah Anda Yakin?",
                        text: "Anda ingin menolak akun ini!",
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
                    }).then((result) => {
                        if (result.value) {
                            swalWithBootstrapButtons.fire(
                                "Berhasil!",
                                "Anda berhasil menolak akun tersebut.",
                                "success"
                            );
                            var form = document.getElementById("pesanTolak"+params);
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
                errorPesan.innerHTML = "pesan harus di isi";
            }
        }
        // $(document).ready(function() {
        //     $('#tolak').click(function() {
        //         // Menutup modal yang ada sebelumnya (jika ada)
        //         $('.modal').modal('hide');

        //         const swalWithBootstrapButtons = Swal.mixin({
        //             customClass: {
        //                 confirmButton: "btn btn-success",
        //                 cancelButton: "mr-2 btn btn-danger",
        //             },
        //             buttonsStyling: false,
        //         });

        //         else {
        //             $('#error').text("pesan harus di isi");
        //             console.log("gagal bg");
        //         }
        //     });
        // });
    </script>

    <script>
        function Terima(data) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "mr-2 btn btn-danger",
                },
                buttonsStyling: false,
            });
            var tanggal = document.getElementById('tanggal'+data).value;
            var lokasi = document.getElementById('lokasi'+data).value;
            const error = document.getElementById('error'+data);
            const errorLokasi = document.getElementById('errorLokasi'+data);
            console.log(tanggal);
            console.log(lokasi);
            console.log(data);
            if (tanggal.trim() !== "" && lokasi.trim() !== "") {
                error.innerHTML = '';
                errorLokasi.innerHTML = '';

                swalWithBootstrapButtons.fire({
                        title: "Apakah Anda Yakin?",
                        text: "Anda ingin menerima akun ini!",
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
                                "Anda berhasil menerima akun tersebut.",
                                "success"
                            );
                            var form = document.getElementById("pesanTerima"+data);
                            form.submit();
                        } else if (
                            result.dismiss === Swal.DismissReason.cancel
                        ) {
                            swalWithBootstrapButtons.fire(
                                "Batal",
                                "penerimaan di batalkan. :)",
                                "error"
                            );
                        }
                    });
            } else {
                if (tanggal === "" && lokasi === "") {
                    console.log(error.innerHTML);
                    error.innerHTML = "pesan harus di isi";
                    errorLokasi.innerHTML = "Lokasi wawancara harus di isi";
                } else if (lokasi === "") {
                    error.innerHTML = "";
                    errorLokasi.innerHTML = "Lokasi wawancara harus di isi";
                } else if (tanggal === "") {
                    error.innerHTML = "pesan harus di isi";
                    errorLokasi.innerHTML = "";
                }

            };
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
@endsection
