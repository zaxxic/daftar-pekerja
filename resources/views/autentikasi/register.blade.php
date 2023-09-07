<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 02:01:04 GMT -->

<head>
    <!--  Title -->
    <title>Register</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/logo.png') }}" />
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('assets/dist/css/style.min.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body style="background-color: #f6f9fc;">
    {{-- <!-- Preloader -->
    <div class="preloader">
        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico"
            alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Preloader -->
    <div class="preloader">
        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico"
            alt="loader" class="lds-ripple img-fluid" />
    </div> --}}
    <!--  Body Wrapper -->
    @if (session('success'))
        {{-- <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div> --}}
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses',
                text: "{{ session('success') }}",
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses',
                    text: 'Berhasil mereset password.',
                });
            });
        </script>
        <style>
            /* Tampilan untuk layar yang lebih kecil dari 768px (misalnya, ponsel) */
            @media (max-width: 767px) {
                .gambar {
                    display: none;
                    /* Menyembunyikan gambar dengan class "gambar" */
                }

                .wadah {
                    margin-top: 250px;
                    /* Gaya CSS khusus untuk tampilan ponsel di sini */
                }
            }

            /* Tampilan untuk layar yang lebih kecil dari atau sama dengan 768px (misalnya, tablet) */
            @media (min-width: 768px) {
                #ini {
                    display: none;
                }

                .wadah {
                    /* Gaya CSS khusus untuk tampilan tablet di sini */
                }
            }
        </style>
    @endif
    <div id="root" class="min-h-100vh d-flex flex-column bg-light">

        <div class="container bg-light">
            <div class="row align-items-center bg-light">
                <div class="col-lg-6">
                    <img class="w-100 gambar d-none d-lg-block" id="ini" style="margin-left: -10%; "
                        src="{{ asset('assets/loginn.svg') }}" alt="image">
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="card shadow h-100 mt-5">
                        <div class="card-body h-100" style="height: 100%;">
                            <div class="text-center mt-2">
                                <h2 class="text-2xl">
                                    Halaman Register
                                </h2>
                                <p class="text-slate-400 dark:text-navy-300">
                                    Silahkan Registrasikan Diri Anda
                                </p>
                            </div>

                            <form action="{{ route('register-store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Nama <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                value="{{ old('name') }}" placeholder="Masukan Nama Anda">
                                            @error('name')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email <span
                                                    style="color: red;">*</span></label>
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" id="email" name="email"
                                                aria-describedby="emailHelp" placeholder="Masukan Email Anda"/>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Telephone <span
                                                    style="color: red;">*</span></label>
                                            <input type="number"
                                                class="form-control @error('no_telp') is-invalid @enderror"
                                                value="{{ old('no_telp') }}" id="no_telp" name="no_telp"
                                                aria-describedby="emailHelp" placeholder="Masukan No.Telephone Anda"/>
                                            @error('no_telp')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label mb-3">Jenis Kelamin <span
                                                style="color: red;">*</span></label>
                                        <div class="radio-container">
                                            <input class="text-sm me-1" type="radio" name="jenis_kelamin"
                                                id="radio1" value="laki-laki"
                                                {{ old('jenis_kelamin') == 'laki-laki' ? 'checked' : '' }}>
                                            <label class="mb-0 me-3" for="radio1">Laki-laki</label>
                                            <input class="text-sm me-1" type="radio" name="jenis_kelamin"
                                                id="radio2" value="perempuan"
                                                {{ old('jenis_kelamin') == 'perempuan' ? 'checked' : '' }}>
                                            <label class="mb-0" for="radio2">Perempuan</label>
                                        </div>
                                        @error('jenis_kelamin')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Alamat <span
                                                    style="color: red;">*</span></label>
                                            <textarea name="alamat" id="" cols="2" rows="2"
                                                class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" id="alamat"
                                                name="alamat" placeholder="Masukan Alamat Anda">{{ old('alamat') }}</textarea>
                                            @error('alamat')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Password <span
                                                    style="color: red;">*</span></label></label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="password" name="password" aria-describedby="emailHelp" placeholder="Masukan Password Anda"/>
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Konfirmasi Password
                                                <span style="color: red;">*</span></label></label>
                                            <input type="password"
                                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                                id="password_confirmation" name="password_confirmation"
                                                aria-describedby="emailHelp" placeholder="Konfirmasi Password Anda"/>
                                            @error('password_confirmation')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" id="daftar"
                                    class="btn btn-primary w-100 py-2 mb-4 rounded-2">Daftar
                                    Sekarang</button>
                                <div class="d-flex align-items-center">
                                    <p class="fs-4 mb-0 text-dark">
                                        Sudah punya akun?
                                    </p>
                                    <a class="text-primary fw-medium ms-2" href="{{ route('login') }}">login</a>
                                </div>
                            </form>

                            <div class="mt-3 text-center">

                            </div>
                        </div>
                    </div>


                    <!--  Import Js Files -->
                    {{-- <script src="{{ asset('assets/dist/libs/jquery/dist/jquery.min.js') }}"></script>
                    <script src="{{ asset('assets/dist/libs/simplebar/dist/simplebar.min.js') }}"></script>
                    <script src="{{ asset('assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
                    <!--  core files -->
                    <script src="{{ asset('assets/dist/js/app.min.js') }}"></script>
                    <script src="{{ asset('assets/dist/js/app.init.js') }}"></script>
                    <script src="{{ asset('assets/dist/js/app-style-switcher.js') }}"></script>
                    <script src="{{ asset('assets/dist/js/sidebarmenu.js') }}"></script>

                    <script src="{{ asset('assets/dist/js/custom.js') }}"></script> --}}
</body>

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 02:01:04 GMT -->

</html>
