<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-register2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 02:01:04 GMT -->

<head>
    <!--  Title -->
    <title>Halaman Register</title>
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
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/dist/images/logo.png') }}" />
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('assets/dist/css/style.min.css') }}" />
</head>

<body>
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
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-10">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex justify-content-between">
                                            <a href="index-2.html" class="text-nowrap logo-img d-block mb-5 w-100"
                                                style="margin-top: -8px;">
                                                <img src="{{ asset('assets/hummas.png') }}" width="200"
                                                    alt="" />
                                            </a>
                                            <h4 style="font-weight: bolder">REGISTER</h4>
                                        </div>
                                    </div>
                                </div>

                                @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <form action="{{ route('register-store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="d-flex col-lg-12 justify-content-between">
                                        <div class="mb-3 col-lg-5">
                                            <div class="form-group">
                                                <label for="email" class="form-label">Nama <span
                                                        style="color: red;">*</span></label>
                                                <input type="text" name="name"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-5">
                                            <label for="email" class="form-label">Email <span
                                                    style="color: red;">*</span></label>
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" id="email" name="email"
                                                aria-describedby="emailHelp" />
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex col-lg-12 justify-content-between">
                                        <div class="mb-3 col-lg-5">
                                            <label for="exampleInputEmail1" class="form-label">Telephone <span
                                                    style="color: red;">*</span></label>
                                            <input type="number"
                                                class="form-control @error('no_telp') is-invalid @enderror"
                                                value="{{ old('no_telp') }}" id="no_telp" name="no_telp"
                                                aria-describedby="emailHelp" />
                                            @error('no_telp')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col-lg-5">
                                            <label for="exampleInputEmail1" class="form-label mb-3">Jenis Kelamin <span
                                                    style="color: red;">*</span></label>
                                            <div class="d-flex align-items-center">
                                                <input class="text-sm me-1" checked type="radio" name="jenis_kelamin"
                                                    id="radio1" value="laki-laki">
                                                <label class="mb-0 me-3" for="radio1">Laki-laki</label>
                                                <input class="text-sm me-1" type="radio" name="jenis_kelamin"
                                                    id="radio2" value="perempuan">
                                                <label class="mb-0" for="radio2">Perempuan</label>
                                            </div>
                                            @error('jenis_kelamin')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Alamat <span
                                                style="color: red;">*</span></label>
                                        <textarea name="alamat" id="" cols="10" rows="5"
                                            class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" id="alamat"
                                            name="alamat">{{ old('alamat') }}</textarea>
                                        @error('alamat')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Masukkan CV (wajib
                                            pdf)<span style="color: red;">*</span></label>
                                        <input type="file" class="form-control @error('cv') is-invalid @enderror"
                                            value="{{ old('cv') }}" id="cv" name="cv"
                                            aria-describedby="emailHelp" aria-label="Pilih Berkas CV" />
                                        @error('cv')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="d-flex col-lg-12 justify-content-between">
                                        <div class="mb-3 col-lg-5">
                                            <label for="exampleInputEmail1" class="form-label">Masukan Lamaran Kerja
                                                (wajib pdf)
                                                <span style="color: red;">*</span></label>
                                            <input type="file"
                                                class="form-control @error('lamaran') is-invalid @enderror"
                                                value="{{ old('lamaran') }}" id="lamaran" name="lamaran"
                                                aria-describedby="emailHelp" />
                                            @error('lamaran')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-4 col-lg-5">
                                            <label for="exampleInputEmail1" class="form-label">Masukan Foto Anda <span
                                                    style="color: red;">*</span></label>
                                            <input type="file"
                                                class="form-control @error('foto') is-invalid @enderror"
                                                value="{{ old('foto') }}" id="foto" name="foto"
                                                aria-describedby="emailHelp" />
                                            @error('foto')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex col-lg-12 justify-content-between">
                                        <div class="mb-3 col-lg-5">
                                            <label for="exampleInputEmail1" class="form-label">Password</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="password" name="password" aria-describedby="emailHelp" />
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col-lg-5">
                                            <label for="exampleInputEmail1" class="form-label">Konfirmasi
                                                Password</label>
                                            <input type="password"
                                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                                id="password_confirmation" name="password_confirmation"
                                                aria-describedby="emailHelp" />
                                            @error('password_confirmation')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100 py-2 mb-4 rounded-2">Daftar
                                        Sekarang</button>
                                    <div class="d-flex align-items-center">
                                        <p class="fs-4 mb-0 text-dark">
                                            Sudah mempunyai akun?
                                        </p>
                                        <a class="text-primary fw-medium ms-2" href="{{ route('login')}}">
                                            Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Import Js Files -->
    <script src="{{ asset('assets/dist/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!--  core files -->
    <script src="{{ asset('assets/dist/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/app.init.js') }}"></script>
    <script src="{{ asset('assets/dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('assets/dist/js/sidebarmenu.js') }}"></script>

    <script src="{{ asset('assets/dist/js/custom.js') }}"></script>
</body>

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-register2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 02:01:04 GMT -->

</html>
