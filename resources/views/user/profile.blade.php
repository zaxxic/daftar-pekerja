<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile-User</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    @extends('layouts1.app')
    @section('content')
</body>

</html>
<div class="card-body">
    @if (session()->has('success'))
    <script>
        Swal.fire(
            'Berhasil!',
            "{{ session('success') }}",
            'success'
        )
    </script>
    @endif
    @if (session()->has('error'))
    <script>
        Swal.fire(
            'Oops..!',
            "{{ session('error') }}",
            'error'
        )
    </script>
    @endif

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0">

            <div class="row">
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card w-100 position-relative overflow-hidden">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-semibold">Ganti Password</h5>
                            <p class="card-subtitle mb-4">Untuk ganti password silahkan di sini</p>
                            <form method="POST" action="{{ route('ubah-password') }}">
                                @csrf
                                <div class="mb-4">
                                    <label for="current_password" class="form-label fw-semibold">Password
                                        Sebelumnya</label>
                                    <input type="password" class="form-control" id="current_password" name="current_password">
                                    @error('current_password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="new_password" class="form-label fw-semibold">Password Baru</label>
                                    <input type="password" class="form-control" id="new_password" name="new_password">
                                    @error('new_password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="">
                                    <label for="new_password_confirmation" class="form-label fw-semibold">Konfirmasi
                                        Password</label>
                                    <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">
                                    @error('new_password_confirmation')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-center mt-4">
                                    <button type="submit" class="btn btn-primary">Ubah Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card w-100 position-relative overflow-hidden">
                        <div class="card-body p-4">

                            <h5 class="card-title fw-semibold">Ubah Profile</h5>
                            <p class="card-subtitle mb-4">Ubah photo profile silahkan masukkan di sini</p>
                            <div class="text-center">
                                <img src="{{ asset('foto_user/' . $user->foto) }}" alt="" class="img-fluid rounded-circle" style="width: 120px; height:120px;">
                                <!-- <div class="d-flex align-items-center justify-content-center my-4 gap-3">
                                        <input type="file" name="foto" class="form-control" id="exampleInputResume">
                                        @error('foto')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div> -->
                                <form action="{{ route('ubah-foto') }}" enctype="multipart/form-data" method="post">
                                    @method('PATCH')
                                    @csrf
                                    <input type="file" style="display: none" name="foto" id="foto">
                                    <ul class="error-text"></ul>
                                    <button class="btn btn-primary" type="button" onclick="show()" id="btn-upload">Upload</button>
                                    <button type="submit" style="display: none" id="submit-button">Save</button>
                                </form>
                                <p class="mb-0">Dibolehkan JPG atau PNG. Ukuran maksimal photo 5Mb</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card w-100 position-relative overflow-hidden mb-0">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Detail Profile</h5>
                        <p class="card-subtitle mb-4">Profile detail</p>
                        <form action="{{ route('ubah-profile') }}" method="POST" enctype="multipart/form-data">
                            {{-- <form action="{{ route('update-profile') }}" method="POST"> --}}
                            @method('PATCH')
                            @csrf
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="exampleInputName" class="form-label fw-semibold">Masukkan
                                            Nama</label>
                                        <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="exampleInputName" placeholder="Mathew Anderson">
                                        @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputEmail" class="form-label fw-semibold">Email</label>
                                        <input type="email" value="{{ $user->email }}" name="email" class="form-control" id="exampleInputEmail" placeholder="info@modernize.com">
                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPhone" class="form-label fw-semibold">No
                                            Telpon</label>
                                        <input type="text" name="no_telp" value="{{ $user->no_telp }}" class="form-control" id="exampleInputPhone" placeholder="+91 12345 65478">
                                        @error('no_telp')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="exampleInputAddress" class="form-label fw-semibold">Alamat</label>
                                        <textarea name="alamat" class="form-control" id="exampleInputAddress" placeholder="Jalan Pegangsaan Timur Nomor 14, RT 04 RW 05 Kel. Senayan, Kec. Kebayoran Baru, Jakarta Selatan, 10450">{{ $user->alamat }}</textarea>
                                        @error('alamat')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputResume" class="form-label fw-semibold">Masukkan
                                            Lamaran</label>
                                        <div class=" d-flex justify-content-between">
                                            <div class="col-9">
                                                <input type="file" name="lamaran" class="form-control" id="lamaran">
                                                @error('lamaran')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <a  data-bs-toggle="modal"
                                            data-bs-target="#detail-cv-{{ Auth()->User()->cv }}" class="btn btn-primary" >Lihat Lamaran</a>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputCV" class="form-label fw-semibold">Masukkan
                                            CV</label>
                                        <div class=" d-flex justify-content-between">
                                            <div class="col-9">
                                                <input type="file" name="cv" class="form-control" id="cv">
                                                @error('cv')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <a  data-bs-toggle="modal"
                                                data-bs-target="#detail-cv-{{ Auth()->User()->cv }}" class="btn btn-primary" >Lihat CV</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                                    <button class="btn btn-primary">Save</button>
                                    <button class="btn btn-light-danger text-danger"><a href="{{ route('dashboard-user') }}">Cancel</a></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>


</div>
<script>
    function show() {
        document.getElementById('foto').click();

        document.getElementById('foto').addEventListener('change', function() {
            document.getElementById('submit-button').click();
        });
    }
</script>
<div class="modal fade" id="detail-cv-{{Auth()->User()->cv}}" tabindex="-1" aria-labelledby="detail-cv-{{Auth()->User()->cv}}" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Cv pekerja</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <embed src="{{ asset('cv/' . Auth()->User()->cv) }}" type="application/pdf" width="100%" height="100%">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
        </div>
    </div>
</div>
<div class="modal fade" id="detail-lamaran-{{Auth()->User()->cv}}" tabindex="-1" aria-labelledby="detail-lamaran-{{Auth()->User()->cv}}" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Lamaran pekerja</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <embed src="{{ asset('lamaran/' . Auth()->User()->lamaran) }}" type="application/pdf" width="100%" height="100%">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
@endsection
