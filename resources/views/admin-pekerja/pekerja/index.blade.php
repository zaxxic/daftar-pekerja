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
                        <div class="mb-3 d-flex mt-3 input-group">
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
                <div class="mb-3 d-flex justify-content-end col-md-6 lg-6 mt-3">
                    <form id="form_filter">
                        <div class="mb-3 d-flex align-items-center justify-content-end">
                            <div style="max-width: 30%;">
                                <span class="mb-2 fw-semibold" style="font-size: 13px;">Filter Divisi</span>
                                <select id="filter_divisi" name="filter_divisi" class="form-select me-3">
                                    <option value="">Semua</option>
                                    @foreach ($divisi as $item)
                                    <option value="{{ $item->id }}" @if ($item->id == $value_filter) selected @endif>
                                        {{ $item->divisi }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="ms-3" style="max-width: 30%;">
                                <span class="mb-2 fw-semibold" style="font-size: 13px;">Filter Lokasi</span>
                                <select id="filter_lokasi" name="filter_lokasi" class="form-select me-3">
                                    <option value="">Semua</option>
                                    @foreach ($lokasi as $lokasi_wawancara)
                                    <option value="{{ $lokasi_wawancara }}" @if ($item->id == $value_filter) selected @endif>
                                        {{ $lokasi_wawancara }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn btn-primary ms-3" style="height: 4%; width: 20%; margin-top: 20px;" type="submit">Cari</button>
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
                                <h6 class="fs-4 fw-semibold mb-0">Lokasi Wawancara</h6>
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
                                <p class="mb-0 fw-normal">{{ $row->User->lokasi_wawancara }}</p>
                            </td>
                            <td>
                                <button type="button" title="nonaktif pekerja" style="background-color: transparent;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="21" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#nonaktif-user-{{ $row->id }}" class="me-1">
                                        <g fill="#FA896B">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8L4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </g>
                                    </svg>
                                </button>
                                <form action="{{ route('pekerja-lulus', $row->id) }}" method="POST" style="display: inline;" class="dropdown-item" id="formlulus-{{ $row->id }}">
                                    @csrf
                                    @method('PATCH')
                                    <button type="button" title="terima pekerja" onclick="klikLulus('{{ $row->id }}')" style="background-color: transparent;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="28" viewBox="0 0 16 16" data-bs-toggle="modal" data-id="{{ $row->id }}" data-bs-target="#acc-user-{{ $row->id }}">
                                            <g fill="#13DEB9">
                                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764a.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0a5.5 5.5 0 1 1-11 0z" />
                                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293L5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                            </g>
                                        </svg>
                                    </button>
                                </form>
                                <button type="button" title="lihat pekerja" style="background-color: transparent;">
                                    <a href="{{ route('detail-user', $row->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="25" viewBox="0 0 16 16">
                                            <g fill="#5D87FF">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0a3.5 3.5 0 0 1-7 0z" />
                                            </g>
                                        </svg>
                                    </a>
                                </button>
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
            </div>

            <style>
                @media (max-width: 680px) {

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

            @foreach ($user as $item)
            <div class="modal fade" id="detail-user-{{ $item->id }}" tabindex="-1" aria-labelledby="bs-example-modal-lg" aria-hidden="true">
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
                                                                <span class="col-12 col-md-3 text-detail " style="font-weight: bold">Jenis
                                                                    Kelamin</span>
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

                                                        <div class="col-lg-6 col-md-12 col-sm-12 pt-3">

                                                            <div class="row  mb-4">
                                                                <span class="col-12 col-md-3 text-detail " style="font-weight: bold">Tanggal
                                                                    Wawancara</span>
                                                                <span class="titik-dua col-1">:</span>
                                                                <span class="col-12 col-md-8 text-detail">{{ $item->User->tanggal_wawancara }}</span>
                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 col-md-12 col-sm-12 pt-3">

                                                            <div class="row  mb-4">
                                                                <span class="col-12 col-md-3 text-detail " style="font-weight: bold">Lokasi
                                                                    Wawancara</span>
                                                                <span class="titik-dua col-1">:</span>
                                                                <span class="col-12 col-md-8 text-detail">{{ $item->User->lokasi_wawancara }}</span>
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
            <div class="modal fade" id="nonaktif-user-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                            <h4 class="modal-title" id="exampleModalLabel1">
                                Gagalkan Pelamar
                            </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                        <div class="modal-body">
                            <span for="recipient-name" class="control-label">Apakah anda
                                yakin untuk tidak meluluskan pelamar
                                {{ $item->name }} untuk mendaftar di lowongan {{ $item->Vacancy->judul }}?</span>
                            <form action="/nonactive/{{ $item->id }}" method="POST" id="pesanNonaktif{{ $item->id }}">
                                @method('PATCH')
                                @csrf
                                <div class="mb-3 mt-2">
                                    <label for="message-text" style="color: black;" class="control-label">Pesan
                                        <span style="color: red;">*</span></label>
                                    <textarea class="form-control" id="pesan{{ $item->id }}" placeholder="Masukkan pesan" name="pesan"></textarea>
                                    <span id="error{{ $item->id }}" class="text-danger"></span>
                                    @error('pesan')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <small id="name" class="form-text text-muted">Masukkan alasan
                                        kenapa pelamar tersebut tidak Anda luluskan.</small>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary img-fluid model_img">
                                Kirim
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

<!-- <script>
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
    </script> -->
@if (session('sukses'))
<script>
    console.log("berhasil");
    Swal.fire({
        title: 'Berhasil',
        text: "Anda berhasil memperbarui data tersebut",
        icon: 'success',
    });
</script>
@endif
@if (session('gagal'))
<script>
    console.log("gagal");
    Swal.fire({
        title: 'Gagal',
        text: "Maaf, slot pada lowongan ini sudah terisi penuh",
        icon: 'error',
    });
</script>
@endif
<script>
    function klikLulus(itemId) {
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
                text: "Anda ingin meluluskan pelamar ini!",
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
                    swalWithBootstrapButtons.fire({
                        title: "Terkirim!",
                        text: "Data sedang diproses.",
                        icon: "info",
                        customClass: {
                            icon: "swal-icon--info",
                        },
                        showConfirmButton: false,
                    });
                    var form = document.getElementById("formlulus-" + itemId);
                    form.submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        "Batal",
                        "Pelemar tersebut batal untuk diluluskan. :)",
                        "error"
                    );
                }
            });
    }

    function Nonaktif(data) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "mr-2 btn btn-danger",
            },
            buttonsStyling: false,
        });
        var pesan = document.getElementById('pesan' + data).value;
        const error = document.getElementById('error' + data);
        console.log(pesan);
        console.log(data);
        if (pesan.trim() !== "") {
            error.innerHTML = '';

            swalWithBootstrapButtons.fire({
                    title: "Apakah Anda Yakin?",
                    text: "Anda ingin menggagalkan pelamar ini!",
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
                            "Anda berhasil menggagalkan akun tersebut.",
                            "success"
                        );
                        var form = document.getElementById("pesanNonaktif" + data);
                        form.submit();
                    } else if (
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            "Batal",
                            "Pelamar tersebut batal untuk digagalkan. :)",
                            "error"
                        );
                    }
                });
        } else {
            error.innerHTML = "pesan harus di isi";
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        console.log("dokumen siap");
        $('#filter_divisi').click(function() {
            console.log("awookaowk");
        });
    });
    $(document).ready(function() {
        console.log("dokumen siap");
        $('#filter_lokasi').click(function() {
            console.log("awookaowk");
        });
    });
</script>
@endsection