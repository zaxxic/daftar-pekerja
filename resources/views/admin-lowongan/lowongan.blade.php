@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="mb-4 d-flex gap-2 justify-content-start col-md-6 ">
            <a href="{{ route('lowongan.create') }}" class="btn btn-primary">Tambah</a>
            <input type="text" class="border border-2 p-1 rounded " placeholder="cari lowongan ">
        </div>
        <div class="d-flex justify-content-end gap-2 col-md-6  ">
            <div>
                <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal"
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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

            <div>
                <a href="javascript:void(0)" class="btn text-white" style="background-color: #13DEB9" data-bs-toggle="modal"
                    data-bs-target="#staBackdrop">DIvisi</a>
            </div>
            <div class="modal fade" style="height: auto" id="staBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                            <h4 class="modal-title" id="myLargeModalLabel">
                                Devisi Yang Ada
                            </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
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

                                <a href="{{ route('lowongan.show', $item->id) }}" class="text-warning"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"
                                            d="M4 20h4L18.5 9.5a2.828 2.828 0 1 0-4-4L4 16v4m9.5-13.5l4 4" />
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
                                <a href="#" class="text-success"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="26" height="26" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M20 12a8 8 0 0 1-8 8a8 8 0 0 1-8-8a8 8 0 0 1 8-8c.76 0 1.5.11 2.2.31l1.57-1.57A9.822 9.822 0 0 0 12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10M7.91 10.08L6.5 11.5L11 16L21 6l-1.41-1.42L11 13.17l-3.09-3.09Z" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            belum ada data
        @endforelse

    </div>
    @section('script')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                                    <div class="col-12 d-flex justify-content-between border border-2">
                                        ${item.divisi}
                                        <form class="text-danger delete-form" data-id="${item.id}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn-delete border-0" style="background:none;">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="" width="18" height="18" viewBox="0 0 24 24">
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
    @endsection
@endsection
