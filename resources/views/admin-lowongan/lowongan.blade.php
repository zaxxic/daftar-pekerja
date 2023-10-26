@extends('layouts.app')
@section('content')
    <style>
        .status {
            display: inline-flex;
            align-items: center;
            /* Mengatur vertikal ke tengah */
            height: 28px;
            padding-left: 12px;
            padding-right: 20px;
            color: white;
            border-radius: 4px;
            background-color: #36B37E;
            /* Ganti dengan warna latar belakang yang diinginkan */
        }
    </style>



    <div class="row">
        <div class="mb-4 d-flex justify-content-start col-md-6 lg-6">
            <button style="background-color: white;">
                <a href="{{ route('lowongan.create') }}" class="btn btn-primary me-3" style=" margin-top: -10px;">Tambah</a>
            </button>
            <form action="">
                <div class="mb-4 d-flex justify-content-end align-items-center position-relative">
                    <input type="search" class="form-control mt-3" name="cari" placeholder="Cari Lowongan..."
                        style="height: 4%;" value="{{ $keyword }}">
                </div>
            </form>
        </div>
        <div class="mb-4 d-flex justify-content-end col-md-6 lg-6 mt-3">
            <div>
                <a href="javascript:void(0)" class="btn btn-primary me-3" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">Tambah Divisi</a>
            </div>
            <div class="modal fade" style="height: auto" id="staticBackdrop" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                            <h4 class="modal-title" id="myLargeModalLabel">
                                Tambah Divisi
                            </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="createDivisiForm" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="d-flex justify-content-center">
                                    <input type="text" name="divisi" id="devisi" class="form-control" autofocus
                                        placeholder="Masukan Divisi " pattern="[a-zA-Z\s]+" style="width: 95%">
                                    <span class="text-danger" id="error"></span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="submitBtn" class="btn btn-success">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div>
                <a href="javascript:void(0)" class="btn text-white" style="background-color: #13DEB9" data-bs-toggle="modal"
                    data-bs-target="#staBackdrop">Divisi</a>
            </div>
        </div>


        <div class="modal fade" id="staBackdrop" tabindex="-1" aria-labelledby="exampleModalLabel1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="exampleModalLabel1">
                            Divisi Yang Ada
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr style="width: 100%; border-top: 2px solid #000000;" class="mt-0">
                    <div class="modal-body">
                        <div class="row" id="divisiContainer">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        @forelse ($data as $item)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-info d-flex align-items-center">
                        <h4 class="card-title text-white mb-0">{{ $item->judul }}</h4>
                        <div class="ms-auto">
                            <div class="dropdown dropstart">
                                <a href="#" class="link text-dark" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fs-7">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            class="text-white" viewBox="0 0 21 21">
                                            <g fill="currentColor" fill-rule="evenodd">
                                                <circle cx="10.5" cy="10.5" r="1" />
                                                <circle cx="10.5" cy="5.5" r="1" />
                                                <circle cx="10.5" cy="15.5" r="1" />
                                            </g>
                                        </svg>
                                    </i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li class="d-flex">
                                        <a href="{{ route('lowongan.edit', $item->id) }}"
                                            class="dropdown-item text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-2"
                                                style="margin-bottom: 3px;" width="20" height="20"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                                            </svg>

                                            Edit
                                        </a>
                                    </li>
                                    <li class="d-flex">
                                        <form action="{{ route('lowongan.destroy', $item->id) }}" method="POST"
                                            style="display: inline;" class="dropdown-item"
                                            id="formdelete-{{ $item->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class=" delete-button me-1 dropdown-item text-primary"
                                                onclick="klikDelete('{{ $item->id }}')"
                                                style="background: none; border: none; padding: 0;">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-2"
                                                    width="20" height="20" style="margin-bottom: 3px;"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                                                </svg>

                                                Hapus
                                            </button>
                                        </form>
                                    </li>
                                    <li class="d-flex">
                                        <a href="{{ route('lowongan.show', $item->id) }}"
                                            class="dropdown-item text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-2"
                                                width="20" height="20" style="margin-bottom: 3px;"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M12 16q1.875 0 3.188-1.313T16.5 11.5q0-1.875-1.313-3.188T12 7q-1.875 0-3.188 1.313T7.5 11.5q0 1.875 1.313 3.188T12 16Zm0-1.8q-1.125 0-1.913-.788T9.3 11.5q0-1.125.788-1.913T12 8.8q1.125 0 1.913.788T14.7 11.5q0 1.125-.787 1.913T12 14.2Zm0 4.8q-3.65 0-6.65-2.038T1 11.5q1.35-3.425 4.35-5.463T12 4q3.65 0 6.65 2.038T23 11.5q-1.35 3.425-4.35 5.463T12 19Zm0-7.5Zm0 5.5q2.825 0 5.188-1.488T20.8 11.5q-1.25-2.525-3.613-4.013T12 6Q9.175 6 6.812 7.488T3.2 11.5q1.25 2.525 3.613 4.013T12 17Z" />
                                            </svg>

                                            Detail
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body collapse show">
                        <div style="float: right;">
                            @if ($item->status === 'aktif')
                                <h6 class="card-title mb-2 d-flex align-items-center justify-content-center mb-3"
                                    style="font-size: 16px;">
                                    <span class="status bg-success">Aktif</span>
                                </h6>
                            @elseif ($item->status === 'nonaktif')
                                <h6 class="card-title mb-2 d-flex align-items-center justify-content-center mb-3"
                                    style="font-size: 16px;">
                                    <span class="status bg-danger">Nonaktif</span>
                                </h6>
                            @endif
                        </div>

                        <h6 class="card-title mb-2 d-flex align-items-center mb-3" style="font-size: 16px;">
                            <span class="me-2">Posisi:</span>
                            {{ $item->pekerja }}
                        </h6>
                        <label class="card-title" style="margin-bottom: -20px; font-size: 16px;">Syarat dan
                            Ketentuan:</label>
                        <div style="height: 20px; overflow: hidden; font-size: 16px;" class="card-text mb-3">
                            {!! str_replace(
                                '<p>',
                                '
                                                                            <p class="ellipsis1">',
                                $item->syarat,
                            ) !!}
                        </div>
                        <p class="card-title pt-2" style="font-size: 16px;">Gaji:
                            {{ 'Rp ' . number_format($item->gaji, 0, ',', '.') }}
                        </p>
                        <div class="d-flex justify-content-between">
                            <p class="card-title" style="font-size: 16px;">

                                {{ \Carbon\Carbon::parse($item->batas)->locale('id')->isoFormat('D MMMM Y ') }}
                            </p>
                            <div class="col-4 d-flex justify-content-end">
                                @if ($item->status === 'aktif')
                                    <form action="{{ route('nonactive-lowongan', $item->id) }}" method="POST"
                                        style="display: inline;" id="formnonactive-{{ $item->id }}">
                                        @csrf
                                        @method('PATCH')
                                        <!-- <button type="button" style="background: none; border: none; padding: 0;" class="text-danger" onclick="klikNonaktif('{{ $item->id }}')" id="nonaktif-{{ $item->id }}">
                                                                                                                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
                                                                                                                                                                                                                            <path fill="currentColor" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zM4 12c0-4.42 3.58-8 8-8c1.85 0 3.55.63 4.9 1.69L5.69 16.9A7.902 7.902 0 0 1 4 12zm8 8c-1.85 0-3.55-.63-4.9-1.69L18.31 7.1A7.902 7.902 0 0 1 20 12c0 4.42-3.58 8-8 8z" />
                                                                                                                                                                                                                        </svg>
                                                                                                                                                                                                                    </button> -->
                                        <button type="button" title="nonaktif lowongan"
                                            onclick="klikNonaktif('{{ $item->id }}')"
                                            style="background: none; border: none; padding: 0;">
                                            <span id="formnonactive-icon-{{ $item->id }}" class="text-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                    viewBox="0 0 24 24" title="nonaktif lowongan">
                                                    <path fill="currentColor"
                                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zM4 12c0-4.42 3.58-8 8-8c1.85 0 3.55.63 4.9 1.69L5.69 16.9A7.902 7.902 0 0 1 4 12zm8 8c-1.85 0-3.55-.63-4.9-1.69L18.31 7.1A7.902 7.902 0 0 1 20 12c0 4.42-3.58 8-8 8z" />
                                                </svg>
                                            </span>
                                            <span id="formnonactive-text-{{ $item->id }}"></span>
                                        </button>
                                    </form>
                                @elseif ($item->status === 'nonaktif')
                                    <form action="{{ route('active-lowongan', $item->id) }}" method="POST"
                                        style="display: inline;" id="formactive-{{ $item->id }}">
                                        @csrf
                                        @method('PATCH')
                                        <!-- <button type="button" style="background: none; border: none; padding: 0;" class="text-success" onclick="klikAktif('{{ $item->id }}')" id="aktif-{{ $item->id }}">
                                                                                                                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
                                                                                                                                                                                                                            <path fill="currentColor" d="M20 12a8 8 0 0 1-8 8a8 8 0 0 1-8-8a8 8 0 0 1 8-8c.76 0 1.5.11 2.2.31l1.57-1.57A9.822 9.822 0 0 0 12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10M7.91 10.08L6.5 11.5L11 16L21 6l-1.41-1.42L11 13.17l-3.09-3.09Z" />
                                                                                                                                                                                                                        </svg>
                                                                                                                                                                                                                    </button> -->
                                        <button type="button" title="aktif lowongan"
                                            onclick="klikAktif('{{ $item->id }}')"
                                            style="background: none; border: none; padding: 0;">
                                            <span id="formactive-icon-{{ $item->id }}" class="text-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                    viewBox="0 0 24 24" title="aktif lowongan">
                                                    <path fill="currentColor"
                                                        d="M20 12a8 8 0 0 1-8 8a8 8 0 0 1-8-8a8 8 0 0 1 8-8c.76 0 1.5.11 2.2.31l1.57-1.57A9.822 9.822 0 0 0 12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10M7.91 10.08L6.5 11.5L11 16L21 6l-1.41-1.42L11 13.17l-3.09-3.09Z" />
                                                </svg>
                                            </span>
                                            <span id="formactive-text-{{ $item->id }}" style="display: none;"></span>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <img src="{{ asset('assets/nodatas.png') }}" alt="" width="280px">
                    </div>
                </div>
            </div>
        @endforelse
        <div class="col-lg-12">
            <nav aria-label="Page navigation example" class="mt-3 justify-content-end">
                <ul class="pagination justify-content-end">
                    {{ $data->appends(['cari' => request('cari')])->onEachSide(1)->links() }}
                </ul>
            </nav>
        </div>
    </div>

    <div class="row">

    </div>

    </div>

    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        .ellipsis {
            white-space: nowrap;
            /* Mencegah teks untuk melompat ke baris berikutnya */
            overflow: hidden;
            /* Menyembunyikan teks yang melebihi lebar elemen */
            text-overflow: ellipsis;
            /* Menambahkan efek ellipsis */
            width: 100%;
            /* Atur lebar elemen sesuai kebutuhan Anda */
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#submitBtn').on('click', function() {
                var divisi = $('#devisi').val();
                console.log(divisi);

                if (divisi !== null) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    var formData = $('#devisi').val();
                    var url = "{{ route('divisi.store') }}"; // Mengambil URL dari route
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: {
                            divisi: formData,
                        },
                        success: function(response) {
                            // Tanggapan berhasil
                            if (response.status === 'gagal') {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal',
                                    text: response.message,
                                });
                            } else if (response.status === 'sukses') {
                                $('#devisi').val('');
                                $('#staticBackdrop').removeClass('show');
                                $('#staticBackdrop').modal('hide');
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Sukses',
                                    text: 'Data berhasil disimpan.'
                                });
                            }
                            // Tampilkan pesan sukses dengan SweetAlert

                        },
                        error: function(response) {
                            // Tanggapan error

                            // Tampilkan pesan error dengan SweetAlert
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.responseJSON.message
                            });
                        }
                    });
                } else {
                    $('#error').html("divisi tidak boleh kosong");
                };

            });

            $(document).on('click', '.btn-delete', function() {
                var form = $(this).closest('.delete-form');
                var id = form.data('id');
                // sweet alert
                Swal.fire({
                    title: 'Konfirmasi Hapus',
                    text: 'Anda yakin ingin menghapus item ini?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, hapus',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'DELETE',
                            url: "/divisi/" + id,
                            data: {
                                "_token": "{{ csrf_token() }}"
                            },
                            success: function(response) {
                                console.log(response.peringatan);
                                if (response.status === 'peringatan') {
                                    Swal.fire({
                                        title: "peringatan",
                                        text: response.peringatan,
                                        icon: "info"
                                    });
                                } else {
                                    Swal.fire({
                                        title: "berhasil",
                                        text: 'berhasil menghapus devisi',
                                        icon: "success"
                                    });
                                    form.closest('.col-4')
                                        .remove(); // Hapus elemen dari tampilan
                                }
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        });
                    } else {
                        Swal.fire(
                            "Batal",
                            "Data Anda tidak jadi dihapus.",
                            "info"
                        );
                    }
                });
            });

            $('#staBackdrop').on('show.bs.modal', function() {
                $.ajax({
                    type: 'GET',
                    url: "{{ route('divisi.index') }}",
                    success: function(response) {
                        $('#divisiContainer')
                            .empty(); // Kosongkan kontainer sebelum menambahkan data baru
                        $.each(response.divisi, function(index, item) {
                            var divisiHtml = `
                                <div class="col-4 flex mb-2  justify-content-center ">
                                    <div class="col-12 rounded rounded-2  d-flex justify-content-between border border-2" style="padding: 10px;">
                                        <div class="col-8 ellipsis">${item.divisi}</div>
                                        <form class="text-danger delete-form col-3" data-id="${item.id}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn-delete border-0" style="background:none;">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                         d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                        `;
                            $('#divisiContainer').append(divisiHtml);
                        });
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });

        });
    </script>


    <script>
        function klikNonaktif(itemId) {
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
                    text: "Anda ingin menonaktifkan lowongan ini!",
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
                            "Anda berhasil menonaktifkan lowongan tersebut.",
                            "success"
                        );
                        var form = document.getElementById("formnonactive-" + itemId);
                        form.submit();
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        swalWithBootstrapButtons.fire(
                            "Batal",
                            "Lowongan tersebut dibatalkan. :)",
                            "error"
                        );
                    }
                });
        }

        function klikDelete(itemId) {
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
                    text: "Anda ingin menghapus lowongan ini!",
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
                            "Anda berhasil menghapus lowongan tersebut.",
                            "success"
                        );
                        var form = document.getElementById("formdelete-" + itemId);
                        form.submit();
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        swalWithBootstrapButtons.fire(
                            "Batal",
                            "Lowongan tersebut dibatalkan. :)",
                            "error"
                        );
                    }
                });
        }

        function klikAktif(itemId) {
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
                    text: "Anda ingin mengaktifkan lowongan ini!",
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
                        var form = document.getElementById("formactive-" + itemId);
                        form.submit();
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        swalWithBootstrapButtons.fire(
                            "Batal",
                            "Lowongan tersebut dibatalkan. :)",
                            "error"
                        );
                    }
                });
        }
    </script>
    @if (session('gagal'))
        <script>
            Swal.fire({
                title: 'Batal',
                text: "{{ session('gagal') }}",
                icon: 'error',
            }).then(function() {
                // Redirect ke halaman edit dengan menggunakan ID yang diambil dari sesi
                window.location.href = "{{ route('lowongan.edit', session('id')) }}";
            });
        </script>
    @endif
    @if(session('sukses'))
        <script>
            console.log("berhasil");
            Swal.fire({
                title:  'Berhasil',
                text: "berhasil mengaktifkan lowongan",
                icon: 'success',
            });
        </script>
    @endif
    @if(session('suksesEdit'))
        <script>
            console.log("berhasil");
            Swal.fire({
                title:  'Berhasil',
                text: "{{session('suksesEdit')}}",
                icon: 'success',
            });
        </script>
    @endif
    @if(session('divisiKosong'))
        <script>
            Swal.fire({
                title:  'gagal',
                text: "{{session('divisiKosong')}}",
                icon: 'error',
            });
        </script>
    @endif



@endsection
