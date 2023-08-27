<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-register2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 02:01:04 GMT -->

<head>
    <!--  Title -->
    <title>Mordenize</title>
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
    <link rel="shortcut icon" type="image/png"
        href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" />
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
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="index-2.html" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                                    <img src="{{ asset('assets/dist/images/hummas.png') }}" width="200"
                                        alt="" />
                                </a>
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Pekerja</label>
                                        <input type="text" class="form-control" id="exampleInputtext"
                                            aria-describedby="textHelp" />
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Telephone</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                        <div class="d-flex align-items-center">
                                            <input class="text-sm me-1" type="radio" name="jenisKelamin"
                                                id="radio1" value="laki-laki">
                                            <label class="mb-0 me-3" for="radio1">Laki-laki</label>
                                            <input class="text-sm me-1" type="radio" name="jenisKelamin"
                                                id="radio2" value="Perempuan">
                                            <label class="mb-0" for="radio2">Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Alamat</label>
                                        <textarea name="alamat" id="" cols="10" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Masukkan CV</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" aria-label="Pilih Berkas CV" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Masukan Lamaran Kerja</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" />
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputEmail1" class="form-label">Masukan Foto Anda</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" />
                                    </div>
                                    <a href="authentication-login.html"
                                        class="btn btn-primary w-100 py-8 mb-4 rounded-2">Daftar Sekarang</a>
                                    <div class="d-flex align-items-center">
                                        <p class="fs-4 mb-0 text-dark">
                                            Already have an Account?
                                        </p>
                                        <a class="text-primary fw-medium ms-2" href="authentication-login.html">Sign
                                            In</a>
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
