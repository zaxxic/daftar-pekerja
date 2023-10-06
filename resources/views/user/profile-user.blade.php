<html>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

</head>

<body>
    @extends('layouts1.app')
    @section('content')
    <div class="card overflow-hidden">
        <div class="card-body p-0">
            <img src="{{ asset('assets/profilebg.jpg') }}" alt="" class="img-fluid">
            <div class="row align-items-center">
                <!-- <div class="col-lg-4 order-lg-1 order-2">
                    <div class="d-flex align-items-center justify-content-around m-4">
                      
                    </div>
                </div> -->
                <div class="col-lg-4 order-lg-1 order-2">
                    <div class="mt-n5">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                            <div class="linear-gradient d-flex align-items-center justify-content-center rounded-circle" style="width: 110px; height: 110px; position: relative;">
                                <div class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden" style="width: 100px; height: 100px;">
                                    <img src="{{ asset('assets/user-1.jpg') }}" alt="" class="w-100 h-100">
                                </div>
                                <div style="position: absolute; bottom: 0; right: 0; display: flex; align-items: center; justify-content: center;">
                                    <div style="width: 40px; height: 40px; background-color: #5d87ff; border-radius: 50%; display: flex; align-items: center; justify-content: center;" class="tooltip-container1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" title="update foto">
                                            <g fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="M12 20H5a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h1a2 2 0 0 0 2-2a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v3.5M16 19h6m-3-3v6" />
                                                <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0-6 0" />
                                            </g>
                                        </svg>
                                        <span class="tooltip-text1" style="width: 280%;">Edit Foto</span>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="text-center mb-3">
                            <h5 class="fs-5 mb-0 fw-semibold mb-3">Trisqi Tegar Valenzi</h5>
                            <div class="">
                                <button class="btn btn-primary me-2">CV</button>
                                <button class="btn btn-primary">Lamaran</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-last">
                    <div style="width: 40px; height: 40px; background-color: #5d87ff; border-radius: 50%; display: flex; align-items: center; justify-content: center; float: right;" class="mt-3 me-5">
                        <div class="tooltip-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" style="margin-bottom: 3px;" width="25" height="25" viewBox="0 0 24 24">
                                <path fill="#ffffff" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                            </svg>
                            <span class="tooltip-text" style="width: 450%;">Edit Profile</span>
                        </div>
                    </div>
                    <div class="list-unstyled align-items-center justify-content-center justify-content-lg-start my-3 gap-3">
                        <div class="position-relative d-flex  mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-3" width="25" height="25" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2" />
                            </svg>
                            <h6>085607338154</h6>
                        </div>

                        <div class="position-relative d-flex mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-3" width="25" height="25" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M3 7a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z" />
                                    <path d="m3 7l9 6l9-6" />
                                </g>
                            </svg>
                            <h6>trisqitegarv@gmail.com</h6>
                        </div>
                        <div class="position-relative d-flex mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-3" width="25" height="26" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0-6 0" />
                                    <path d="M17.657 16.657L13.414 20.9a2 2 0 0 1-2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z" />
                                </g>
                            </svg>
                            <h6>jl Lesti Utara Gg makam no.179</h6>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7">
            <div class="card position-relative overflow-hidden mb-4">
                <div class="card-header bg-info d-flex align-items-center">
                    <h4 class="card-title text-white mb-0">Tentang</h4>
                    <button class="btn btn-danger btn-sm">Tambah</button>
                </div>
                
                <div class="card-body p-4">

                    <form>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card position-relative overflow-hidden mb-4">
                <div class="card-header bg-info d-flex align-items-center">
                    <h4 class="card-title text-white mb-0">Pendidikan</h4>
                </div>
                <div class="card-body p-4">
                    <div class="mt-2 mb-2 d-flex justify-content-between">
                        <div class="d-flex">
                            <div class="me-4" style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; text-align: center; vertical-align: middle; line-height: 35px;">
                                <img src="{{ asset('assets/user-1.jpg') }}" alt="" class="w-100 h-100">
                            </div>
                            <div>
                                <p for="exampleInputPassword1" class="form-label fw-semibold">SMK PGRI 03 Malang</p>
                                <p class=" mt-2">2019-2022</p>
                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-1" style="margin-bottom: 3px;" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="#13DEB9" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" height="20" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                <path fill="#FA896B" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-2 mb-2 d-flex justify-content-between">
                        <div class="d-flex">
                            <div class="me-4" style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; text-align: center; vertical-align: middle; line-height: 35px;">
                                <img src="{{ asset('assets/user-1.jpg') }}" alt="" class="w-100 h-100">
                            </div>
                            <div>
                                <p for="exampleInputPassword1" class="form-label fw-semibold">MTs Hasyim Asy'ari</p>
                                <p class=" mt-2">2019-2022</p>
                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-1" style="margin-bottom: 3px;" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="#13DEB9" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" height="20" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                <path fill="#FA896B" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-2 mb-2 d-flex justify-content-between">
                        <div class="d-flex">
                            <div class="me-4" style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; text-align: center; vertical-align: middle; line-height: 35px;">
                                <img src="{{ asset('assets/user-1.jpg') }}" alt="" class="w-100 h-100">
                            </div>
                            <div>
                                <p for="exampleInputPassword1" class="form-label fw-semibold">MI Darul Ulum</p>
                                <p class=" mt-2">2019-2022</p>
                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-1" style="margin-bottom: 3px;" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="#13DEB9" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" height="20" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                <path fill="#FA896B" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <button class="buttonmodal border-bottom-0 border-start-0 border-end-0 w-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="25" height="25" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                    </svg>
                    <strong class="fs-4">Tambah</strong>
                </button>

            </div>
        </div>


    </div>
    <div class="row">
        <div class="col-lg-7">
            <div class="card position-relative overflow-hidden mb-4">
                <div class="card-header bg-info d-flex align-items-center">
                    <h4 class="card-title text-white mb-0">Pengalaman</h4>
                </div>
                <div class="card-body p-4">

                    <div class="mt-2 mb-2 d-flex justify-content-between">
                        <div class="d-flex">
                            <div class="me-4" style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; text-align: center; vertical-align: middle; line-height: 35px;">
                                <img src="{{ asset('assets/user-1.jpg') }}" alt="" class="w-100 h-100">
                            </div>
                            <div>
                                <p for="exampleInputPassword1" class="form-label fw-semibold">Web Developer</p>
                                <p class=" mt-2">Jul - 22 Agu -22 2023</p>
                                <div class="content">
                                    <p for="exampleInputPassword1" class="form-label fw-semibold">
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    </p>
                                    <p class="long-text">
                                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
                                        making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                                        search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,
                                        sometimes on purpose (injected humour and the like).will uncover many web sites still in their infancy. Various versions have evolved over the years,
                                        sometimes by accident, sometimes on purpose (injected humour and the like).
                                    </p>
                                </div>
                                <p class="btn-toggle">Lihat Selengkapnya</p>
                                <style>
                                    .long-text {
                                        display: none;
                                        /* Sembunyikan teks yang lebih panjang secara default */
                                    }

                                    .btn-toggle {
                                        background: none;
                                        border: none;
                                        color: blue;
                                        cursor: pointer;
                                    }
                                </style>

                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-1" style="margin-bottom: 3px;" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="#13DEB9" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" height="20" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                <path fill="#FA896B" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-2 mb-2 d-flex justify-content-between">
                        <div class="d-flex">
                            <div class="me-4" style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; text-align: center; vertical-align: middle; line-height: 35px;">
                                <img src="{{ asset('assets/user-1.jpg') }}" alt="" class="w-100 h-100">
                            </div>
                            <div>
                                <p for="exampleInputPassword1" class="form-label fw-semibold">Web Developer</p>
                                <p class=" mt-2">Jul - 22 Agu -22 2023</p>
                                <div class="content">
                                    <p for="exampleInputPassword1" class="form-label fw-semibold">
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    </p>
                                    <p class="long-text">
                                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
                                        making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                                        search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,
                                        sometimes on purpose (injected humour and the like).will uncover many web sites still in their infancy. Various versions have evolved over the years,
                                        sometimes by accident, sometimes on purpose (injected humour and the like).
                                    </p>
                                </div>
                                <p class="btn-toggle">Lihat Selengkapnya</p>

                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-1" style="margin-bottom: 3px;" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="#13DEB9" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" height="20" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                <path fill="#FA896B" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-2 mb-2 d-flex justify-content-between">
                        <div class="d-flex">
                            <div class="me-4" style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; text-align: center; vertical-align: middle; line-height: 35px;">
                                <img src="{{ asset('assets/user-1.jpg') }}" alt="" class="w-100 h-100">
                            </div>
                            <div>
                                <p for="exampleInputPassword1" class="form-label fw-semibold">Web Developer</p>
                                <p class=" mt-2">Jul - 22 Agu -22 2023</p>
                                <div class="content">
                                    <p for="exampleInputPassword1" class="form-label fw-semibold">
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    </p>
                                    <p class="long-text">
                                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
                                        making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                                        search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,
                                        sometimes on purpose (injected humour and the like).will uncover many web sites still in their infancy. Various versions have evolved over the years,
                                        sometimes by accident, sometimes on purpose (injected humour and the like).
                                    </p>
                                </div>
                                <p class="btn-toggle">Lihat Selengkapnya</p>

                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-1" style="margin-bottom: 3px;" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="#13DEB9" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" height="20" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                <path fill="#FA896B" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <button class="buttonmodal border-bottom-0 border-start-0 border-end-0 w-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="25" height="25" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                    </svg>
                    <strong class="fs-4">Tambah</strong>
                </button>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card position-relative overflow-hidden mb-4">
                <div class="card-header bg-info d-flex align-items-center">
                    <h4 class="card-title text-white mb-0">Keahlian</h4>
                </div>
                <div class="card-body p-4">
                    <div class="mt-2 mb-2 d-flex justify-content-between">
                        <div class="d-flex">

                            <div>
                                <p for="exampleInputPassword1" class="form-label fw-semibold">laravel</p>
                                <p class=" mt-2">Saya berpengalaman dengan laravel sejak 5 tahun yang lalu</p>
                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-1" style="margin-bottom: 3px;" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="#13DEB9" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" height="20" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                <path fill="#FA896B" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-2 mb-2 d-flex justify-content-between">
                        <div class="d-flex">

                            <div>
                                <p for="exampleInputPassword1" class="form-label fw-semibold">laravel</p>
                                <p class=" mt-2">Saya berpengalaman dengan laravel sejak 5 tahun yang lalu</p>
                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-1" style="margin-bottom: 3px;" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="#13DEB9" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" height="20" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                <path fill="#FA896B" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-2 mb-2 d-flex justify-content-between">
                        <div class="d-flex">

                            <div>
                                <p for="exampleInputPassword1" class="form-label fw-semibold">laravel</p>
                                <p class=" mt-2">Saya berpengalaman dengan laravel sejak 5 tahun yang lalu</p>p
                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-1" style="margin-bottom: 3px;" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="#13DEB9" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" height="20" style="margin-bottom: 3px;" viewBox="0 0 24 24">
                                <path fill="#FA896B" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <button class="buttonmodal border-bottom-0 border-start-0 border-end-0 w-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="25" height="25" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                    </svg>
                    <strong class="fs-4">Tambah</strong>
                </button>

            </div>
        </div>


    </div>
    <!-- <div class="container">
        <div class="row">
            <div class="col">
                <footer class="footer-area pt-100 pb-70" style="direction: ltr;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="single-footer-widget single-bg">
                                    <a class="logo" href="index.html">
                                        <img width="180px" src="{{ asset('assets/hummatech.png') }}"
                                            alt="logo">
                                    </a>
                                    <p>Hummasoft merupakan sebuah perusahaan yang bergerak dibidang IT (Information
                                        Technology).</p>

                                    <ul class="social-icon">
                                        <li>
                                            <a href="https://www.facebook.com/hummasoft?locale=id_ID" target="_blank">
                                                <i class="bx bxl-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/hummasoft" target="_blank">
                                                <i class="bx bxl-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://id.linkedin.com/in/hummasoft-technology-2476a8241"
                                                target="_blank">
                                                <i class="bx bxl-linkedin-square"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/hummasoft">
                                                <i class="bx bxl-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="single-footer-widget">
                                    <h3>Kontak</h3>

                                    <ul class="mb-3" style="direction: ltr;">
                                        <li style="direction: ltr;" class="mb-3">
                                            <i class="bx bx-phone-call"></i>
                                            <span>Telepon:</span>
                                            <a href="tel:+1-(514)-7939-357">(+62)821 3256 0566</a>
                                        </li>
                                        <li class="mb-3" s>
                                            <i class="bx bx-envelope"></i>
                                            <span>Email:</span>
                                            <a><span class="__cf_email__"
                                                    data-cfemail="f098959c9c9fb09a859299de939f9d">hummatechcareer@gmail.com</span></a>
                                        </li>
                                        <li class="location">
                                            <i class="bx bx-location-plus"></i>
                                            <span>Alamat:</span>
                                            Perum Permata Regency 1 blok 10 no 28 Ngijo Karangploso Malang
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="single-footer-widget">
                                    <h3>Layanan Kami</h3>

                                    <ul class="import-link">
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <div class="highlight-box"></div>
                                                </div>
                                                <a>Kelas Industri</a>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <div class="highlight-box"></div>
                                                </div>
                                                <a>Pengembangan Perangkat Lunak</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <div class="highlight-box"></div>
                                                </div>
                                                <a>Pelatihan Upskilling/Reskilling Berbasis Industri</a>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <div class="highlight-box"></div>
                                                </div>
                                                <a>Riset dan Intership/Magang</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="single-footer-widget">
                                    <h3>Benefit Kami</h3>

                                    <ul class="import-link">
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <div class="highlight-box"></div>
                                                </div>
                                                <a>Lingkungan Kerja Berbasis Proyek dan Teamwork</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <div class="highlight-box"></div>
                                                </div>
                                                <a>Memperluas Jejaring / Networking IT</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <div class="highlight-box"></div>
                                                </div>
                                                <a>Menambah Pengalaman dan Portofolio</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <div class="highlight-box"></div>
                                                </div>
                                                <a>Proyek Skala Nasional dan Internasional</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div> -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
<script>
    const toggleButton = document.querySelector('.btn-toggle');
    const longText = document.querySelector('.long-text');

    toggleButton.addEventListener('click', function() {
        if (longText.style.display === 'none' || longText.style.display === '') {
            longText.style.display = 'block';
            toggleButton.textContent = 'Sembunyikan';
        } else {
            longText.style.display = 'none';
            toggleButton.textContent = 'Lihat Selengkapnya';
        }
    });
</script>

@endsection

</html>