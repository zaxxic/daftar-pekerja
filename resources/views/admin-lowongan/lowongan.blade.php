@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="mb-4 d-flex justify-content-start col-md-6 lg-6">
            <button style="background-color: white;">
                <a href="{{ route('lowongan.create') }}" class="btn text-white me-2"
                    style="background-color: #007bff; margin-top: -10px;">Tambah</a>
            </button>
            <form action="">
                <div class="mb-4 d-flex justify-content-end align-items-center position-relative">
                    <input type="search" class="form-control mt-3" name="cari" placeholder="Cari Lowongan..."
                        style="height: 4%;">
                </div>
            </form>
        </div>
        <div class="mb-4 d-flex justify-content-end col-md-6 lg-6">
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
                                Tambah Devisi
                            </h4>
                            <button type="button" class="submitBtn" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="createDivisiForm" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="d-flex justify-content-center">
                                    <input type="text" name="divisi" id="devisi" class="form-control" autofocus
                                        placeholder="masukan " style="width: 95%">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="submitBtn"
                                    class="btn btn-light-success text-success font-medium waves-effect text-start">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <a href="javascript:void(0)" class="btn text-white" style="background-color: #13DEB9" data-bs-toggle="modal" data-bs-target="#staBackdrop">Divisi</a>
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
                        <div class="row p-3 " id="divisiContainer">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        @forelse ($data as $item)
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted d-flex align-items-center">{{ $item->pekerja }}</h6>
                        <p class="card-text pt-2">
                            {!! $item->syarat !!}
                        </p>
                        <p class="card-text pt-2"> Gaji : {{ $item->gaji }}</p>
                        <p class="card-text pt-2">
                            {{ $item->batas }}
                        </p>
                        <div class="row">
                            <div class="col-6">
                                <form action="{{ route('lowongan.destroy', $item->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="text-danger delete-button"
                                        style="background: none; border: none; padding: 0;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                            viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </form>

                                <a href="{{ route('lowongan.show', $item->id) }}" class="text-info"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 6.5a9.77 9.77 0 0 1 8.82 5.5c-1.65 3.37-5.02 5.5-8.82 5.5S4.83 15.37 3.18 12A9.77 9.77 0 0 1 12 6.5m0-2C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zm0 5a2.5 2.5 0 0 1 0 5a2.5 2.5 0 0 1 0-5m0-2c-2.48 0-4.5 2.02-4.5 4.5s2.02 4.5 4.5 4.5s4.5-2.02 4.5-4.5s-2.02-4.5-4.5-4.5z" />
                                    </svg></a>
                                <a href="{{ route('lowongan.edit', $item->id) }}" class="text-warning"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"
                                            d="M4 20h4L18.5 9.5a2.828 2.828 0 1 0-4-4L4 16v4m9.5-13.5l4 4" />
                                    </svg></a>
                            </div>
                            <div class="col-6 d-flex justify-content-end ">
                                <form action="{{ route('nonactive-lowongan', $item->id) }}" method="POST"
                                    style="display: inline;" id="formnonactive">
                                    @csrf
                                    @method('PATCH')
                                    <button type="button" style="background: none; border: none; padding: 0;"
                                        class="text-danger" onclick="klikNonaktif()" id="nonaktif">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zM4 12c0-4.42 3.58-8 8-8c1.85 0 3.55.63 4.9 1.69L5.69 16.9A7.902 7.902 0 0 1 4 12zm8 8c-1.85 0-3.55-.63-4.9-1.69L18.31 7.1A7.902 7.902 0 0 1 20 12c0 4.42-3.58 8-8 8z"/></svg>
                                    </button>
                                </form>
                                <form action="{{ route('active-lowongan', $item->id) }}" method="POST"
                                    style="display: inline;" id="formactive">
                                    @csrf
                                    @method('PATCH')
                                    <button type="button" style="background: none; border: none; padding: 0;"
                                        class="text-success" onclick="klikAktif()" id="aktif">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M20 12a8 8 0 0 1-8 8a8 8 0 0 1-8-8a8 8 0 0 1 8-8c.76 0 1.5.11 2.2.31l1.57-1.57A9.822 9.822 0 0 0 12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10M7.91 10.08L6.5 11.5L11 16L21 6l-1.41-1.42L11 13.17l-3.09-3.09Z" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <img src="/assets/dist/images/nodatas.png" alt="" width="280px">
                    </div>
                </div>
            </div>
        @endforelse
        <div class="col-lg-12">
            <nav aria-label="Page navigation example" class="mt-3 justify-content-end">
                <ul class="pagination justify-content-end">
                    {{ $data->appends(['cari' => request('cari')])->links() }}
                </ul>
            </nav>
        </div>
    </div>
    </div>

    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $('#submitBtn').on('click', function() {
                var formData = $('#createDivisiForm').serialize();
                var url = "{{ route('divisi.store') }}"; // Mengambil URL dari route

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: formData,
                    success: function(response) {
                        // Tanggapan berhasil
                        console.log(response);
                        // Tampilkan pesan sukses dengan SweetAlert
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: 'Data berhasil disimpan.'
                        });
                        $('#devisi').val('');
                        $('#staticBackdrop').removeClass('show');
                        $('#staticBackdrop').modal('hide');
                    },
                    error: function(error) {
                        // Tanggapan error
                        console.log(error);
                        // Tampilkan pesan error dengan SweetAlert
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Terjadi kesalahan. Data tidak dapat disimpan.'
                        });
                    }
                });
            });

            $(document).on('click', '.btn-delete', function() {
                var form = $(this).closest('.delete-form');
                var id = form.data('id');
                // sweet aler

                $.ajax({
                    type: 'DELETE',
                    url: "/divisi/" + id,
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        form.closest('.col-4').remove(); // Hapus elemen dari tampilan
                    },
                    error: function(error) {
                        console.log(error);
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
                                <div class="col-4 flex justify-content-center">
                                    <div class="col-12 d-flex justify-content-between border border-2" style="padding: 3px;">
                                        ${item.divisi}
                                        <form class="text-danger delete-form" data-id="${item.id}">
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
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-button');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
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
                            // Submit form after confirmation
                            button.closest('form').submit();
                        }
                    });
                });
            });
        });
    </script>
    <script>
        const status = '{{ $item->status ?? '' }}'; // Ganti dengan status sebenarnya dari data

        function updateButtonAppearance(status) {
            const nonaktifButton = document.getElementById('formnonactive');
            const aktifButton = document.getElementById('formactive');

            if (status === 'aktif') {
                nonaktifButton.style.display = 'inline';
                aktifButton.style.display = 'none';
            } else if (status === 'nonaktif') {
                nonaktifButton.style.display = 'none';
                aktifButton.style.display = 'inline';
            }
        }

        // Panggil fungsi saat halaman dimuat untuk pertama kali
        window.onload = function() {
            updateButtonAppearance(status);
        };

        function klikNonaktif() {
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
                    width: "25rem", // You can adjust the width as needed
                    padding: "1rem", // You can adjust the padding as needed
                    customContainerClass: "swal-custom", // Define a custom class for styling
                })
                .then((result) => {
                    if (result.value) {
                        swalWithBootstrapButtons.fire(
                            "Berhasil!",
                            "Anda berhasil menonaktifkan lowongan tersebut.",
                            "success"
                        );
                        var form = document.getElementById("formnonactive");
                        form.submit();
                    } else if (
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            "Batal",
                            "Selamat lowongan tersebut masih selamat. :)",
                            "error"
                        );
                    }
                });
        }

        function klikAktif() {
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
                    width: "25rem", // You can adjust the width as needed
                    padding: "1rem", // You can adjust the padding as needed
                    customContainerClass: "swal-custom", // Define a custom class for styling
                })
                .then((result) => {
                    if (result.value) {
                        swalWithBootstrapButtons.fire(
                            "Berhasil!",
                            "Anda berhasil mengaktifkan lowongan tersebut.",
                            "success"
                        );
                        var form = document.getElementById("formactive");
                        form.submit();
                    } else if (
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            "Batal",
                            "Selamat lowongan tersebut masih selamat. :)",
                            "error"
                        );
                    }
                });
        }
    </script>
@endsection
