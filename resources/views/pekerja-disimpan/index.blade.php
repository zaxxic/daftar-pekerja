@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- --------------------------------------------------- -->
    <!--  Form Basic Start -->
    <!-- --------------------------------------------------- -->

    <div class="card w-100 position-relative overflow-hidden">

        <div class="card-body p-4">

            <span style="color: #549bff;" class="fw-semibold fs-4">Pelamar</span><span class="fw-semibold fs-4">/ Disimpan</span>
            <div class="row mt-5">
                <div class="mb-3 mt-2 d-flex justify-content-start col-md-6 lg-6">
                    <form action="">
                        <div class="mb-3 d-flex  input-group">
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
                    {{-- <form id="form_filter">
                        <div class="mb-3 d-flex">
                            <select id="filter" name="filter" class="form-select me-3">
                                <option value="">Semua</option>
                                <option>
                                </option>
                            </select>
                            <button class="btn btn-primary" style="height: 4%; width: 40%;" type="submit">Cari</button>
                        </div>
                    </form> --}}
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
                                <h6 class="fs-4 fw-semibold mb-0">No.Telp</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Email</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">CV</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Aksi</h6>
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                        <tr>
                            <td>

                                <div class="d-flex align-items-center">
                                    <a href="" data-lightbox="image-1" data-title="Gambar Profil Anda" style="border-radius: 50%; overflow: hidden; width: 35px; height: 35px; display: flex; justify-content: center; align-items: center;">
                                        <img src="{{ asset('foto_user/' . $item->User->foto) }}" style=" max-width: 150%; max-height: 150%;" alt="" />
                                    </a>
                                    <div class="ms-3">
                                        <h6 class="fs-4 fw-semibold mb-2">{{ $item->User->name }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal">{{ $item->User->no_telp }}</p>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal">{{ $item->User->email }}</p>
                            </td>
                            <td>
                                <a href="{{ route('user.cv', ['id' => $item->User->id]) }}" class="btn btn-primary">CV</a>
                            </td>
                            <td class="d-flex" style="border: none">
                                <form action="BatalSimpan/{{ $item->id }}" method="post" id="BatalSimpan{{ $item->id }}">
                                    @csrf
                                    @method('PATCH')
                                    <button type="button" title="tolak pekerja" style="background-color: transparent;" onclick="BatalSimpan({{ $item->id }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                            <path fill="none" stroke="#FA896B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </form>
                                <button type="button" title="lihat pekerja" style="background-color: transparent;">
                                    <a href="{{ route('detail-user', $item->User->id) }}">
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
                                        <td class="text-center" colspan="6">
                                            <img src="{{ asset('assets/nodatas.png') }}" alt="" width="280px">
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

                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- --------------------------------------------------- -->
<!--  Form Basic End -->
<!-- --------------------------------------------------- -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js
    "></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css
" rel="stylesheet">
@if (session('BerhasilBatal'))
<script>
    Swal.fire(
        "Berhasil!",
        "{{ session('BerhasilBatal') }}",
        "success"
    );
</script>
@endif
<script>
    function Tolak(params) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "mr-2 btn btn-danger",
            },
            buttonsStyling: false,
        });
        var pesan = document.getElementById('pesan' + params).value;
        var error = document.getElementById('errorTolak' + params)
        console.log(pesan);
        if (pesan !== "") {
            error.innerHTML = "";
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
                })
                .then((result) => {
                    if (result.value) {
                        swalWithBootstrapButtons.fire(
                            "Berhasil!",
                            "Anda berhasil menolak akun tersebut.",
                            "success"
                        );
                        var form = document.getElementById("pesanTolak" + params);
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
            error.innerHTML = "masukan pesan alasan kenapa anda menolak pendaftar ini";
        }

    }
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
        var today = new Date(); // Tanggal hari ini
        var yesterday = new Date(today);
        yesterday.setDate(today.getDate() - 1); // Mengurangkan satu hari
        var tanggal = document.getElementById('tanggal' + data).value;
        var lokasi = document.getElementById('lokasi' + data).value;
        const error = document.getElementById('error' + data);
        const errorLokasi = document.getElementById('errorLokasi' + data);
        var tahun = today.getFullYear();
        var bulan = String(today.getMonth() + 1).padStart(2, "0");
        var tanggalKedua = String(today.getDate()).padStart(2, "0");
        var jam = String(today.getHours()).padStart(2, "0");
        var menit = String(today.getMinutes()).padStart(2, "0");

        // Menghasilkan format yang diinginkan (YYYY-MM-DDTHH:MM)
        var hasilFormat = `${tahun}-${bulan}-${tanggalKedua}T${jam}:${menit}`;

        console.log(hasilFormat); // Output: 2023-09-23T19:55
        console.log(tanggal);
        console.log(lokasi);
        console.log(data);
        console.log(yesterday);
        if (tanggal.trim() !== "" && (lokasi.trim() !== "" && tanggal.trim() > hasilFormat)) {
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
            }).then((result) => {
                if (result.value) {
                    swalWithBootstrapButtons.fire(
                        "Berhasil!",
                        "Anda berhasil menerima akun tersebut.",
                        "success"
                    ).then(() => {
                        // Jika SweetAlert berhasil ditampilkan, submit form
                        var form = document.getElementById("pesanTerima" + data);
                        form.submit();
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        "Batal",
                        "penerimaan di batalkan. :)",
                        "error"
                    );
                }
            });
        } else {
            // Perbandingan dengan tanggal kemarin
            if (new Date(tanggal) <= yesterday && lokasi === "") {
                error.innerHTML = "tanggal tidak boleh tanggal kemarin";
                errorLokasi.innerHTML = "Lokasi wawancara harus di isi";
            } else if (new Date(tanggal) <= yesterday) {
                error.innerHTML = "tanggal tidak boleh tanggal kemarin";
                errorLokasi.innerHTML = "";
            } else if (tanggal === "" && lokasi === "") {
                error.innerHTML = "pesan harus di isi";
                errorLokasi.innerHTML = "Lokasi wawancara harus di isi";
            } else if (tanggal === "") {
                console.log('2');
                error.innerHTML = "pesan harus di isi";
                errorLokasi.innerHTML = "";
            } else if (lokasi === "") {
                console.log('3');
                error.innerHTML = "";
                errorLokasi.innerHTML = "Lokasi wawancara harus di isi";
            }
        }
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
<script>
    function BatalSimpan(data) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "mr-2 btn btn-danger",
            },
            buttonsStyling: false,
        });


        swalWithBootstrapButtons.fire({
            title: "Apakah Anda Yakin?",
            text: "Membatalkan simpan Pelamar tersebut!",
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
        }).then((result) => {
            if (result.value) {
                // Jika SweetAlert berhasil ditampilkan, submit form
                var form = document.getElementById("BatalSimpan" + data);
                form.submit();
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire(
                    "Batal",
                    "penerimaan di batalkan. :)",
                    "error"
                );
            }
        });
    }
</script>
@endsection
