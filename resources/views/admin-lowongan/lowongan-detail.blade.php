@extends('layouts.app')
@section('content')
<div class="" style="width: 100%; height:auto;">

    <div class="row">

    </div>
    <div class="container">
        <div class="text-center">
            <h3 class="fw-semibold mb-5">Detail Lowongan</h3>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card position-relative overflow-hidden mb-4">
                    <div class="card-header bg-info d-flex align-items-center">
                        <!-- <h4 class="card-title text-white mb-0">detail</h4> -->
                    </div>
                    <div class="card-body p-4">

                        <form>
                            <div class="mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="me-4" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="#000000" d="M4 10.5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5s1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5zm0-6c-.83 0-1.5.67-1.5 1.5S3.17 7.5 4 7.5S5.5 6.83 5.5 6S4.83 4.5 4 4.5zm0 12c-.83 0-1.5.68-1.5 1.5s.68 1.5 1.5 1.5s1.5-.68 1.5-1.5s-.67-1.5-1.5-1.5zM7 19h14v-2H7v2zm0-6h14v-2H7v2zm0-8v2h14V5H7z" />
                                </svg>
                                <label for="exampleInputPassword1" class="form-label fw-semibold">Judul Lowongan</label>
                                <div class="border-2 border-bottom mt-2 ms-5">{{$data->judul}}</div>
                            </div>
                            <div class="mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="me-4" width="22" height="22" viewBox="0 0 24 24">
                                    <path fill="#000000" d="m11.99 18.54l-7.37-5.73L3 14.07l9 7l9-7l-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7l-9 7l1.63 1.27L12 16zm0-11.47L17.74 9L12 13.47L6.26 9L12 4.53z" />
                                </svg>
                                <label for="exampleInputPassword1" class="form-label fw-semibold">Divisi</label>
                                <div class="border-2 border-bottom mt-2 ms-5">{{$data->Division->divisi}}</div>
                            </div>
                            <div class="mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="me-4" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="#000000" d="M14 6V4h-4v2h4zM4 8v11h16V8H4zm16-2c1.11 0 2 .89 2 2v11c0 1.11-.89 2-2 2H4c-1.11 0-2-.89-2-2l.01-11c0-1.11.88-2 1.99-2h4V4c0-1.11.89-2 2-2h4c1.11 0 2 .89 2 2v2h4z" />
                                </svg>
                                <label for="exampleInputPassword1" class="form-label fw-semibold">Pekerjaan</label>
                                <div class="border-2 border-bottom mt-2 ms-5">{{$data->pekerja}}</div>
                            </div>
                            <div class="mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="me-4" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="#000000" d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15c0-1.09 1.01-1.85 2.7-1.85c1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61c0 2.31 1.91 3.46 4.7 4.13c2.5.6 3 1.48 3 2.41c0 .69-.49 1.79-2.7 1.79c-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55c0-2.84-2.43-3.81-4.7-4.4z" />
                                </svg>
                                <label for="exampleInputPassword1" class="form-label fw-semibold">Gaji</label>
                                <div class="border-2 border-bottom mt-2 ms-5">{{$data->gaji}}</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card position-relative overflow-hidden mb-4">
                    <div class="card-header bg-info d-flex align-items-center">
                        <!-- <h4 class="card-title text-white mb-0">detail</h4> -->
                    </div>
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-4" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="#000000" d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V10h16v11zm0-13H4V5h16v3z" />
                            </svg>
                            <label for="exampleInputPassword1" class="form-label fw-semibold">Batas Lowongan</label>
                            <div class="border-2 border-bottom mt-2 ms-5">{{$data->batas}}</div>
                        </div>
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-4" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="#000000" d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zM6 4h7l5 5v8.58l-1.84-1.84a4.992 4.992 0 0 0-.64-6.28A4.96 4.96 0 0 0 12 8a5 5 0 0 0-3.53 1.46a4.98 4.98 0 0 0 0 7.05a4.982 4.982 0 0 0 6.28.63L17.6 20H6V4zm8.11 11.1c-.56.56-1.31.88-2.11.88s-1.55-.31-2.11-.88c-.56-.56-.88-1.31-.88-2.11s.31-1.55.88-2.11c.56-.57 1.31-.88 2.11-.88s1.55.31 2.11.88c.56.56.88 1.31.88 2.11s-.31 1.55-.88 2.11z" />
                            </svg>
                            <label for="exampleInputPassword1" class="form-label fw-semibold">Slot</label>
                            <div class="border-2 border-bottom mt-2 ms-5">{{$data->slot}}</div>
                        </div>
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-4" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="#000000" d="M12 12c-1.1 0-2-.9-2-2s.9-2 2-2s2 .9 2 2s-.9 2-2 2zm6-1.8C18 6.57 15.35 4 12 4s-6 2.57-6 6.2c0 2.34 1.95 5.44 6 9.14c4.05-3.7 6-6.8 6-9.14zM12 2c4.2 0 8 3.22 8 8.2c0 3.32-2.67 7.25-8 11.8c-5.33-4.55-8-8.48-8-11.8C4 5.22 7.8 2 12 2z" />
                            </svg>
                            <label for="exampleInputPassword1" class="form-label fw-semibold">Lokasi</label>
                            <div class="border-2 border-bottom mt-2 ms-5">{{$data->lokasi}}</div>
                        </div>
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-4" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="#000000" d="M6 15c1.1 0 2 .9 2 2s-.9 2-2 2s-2-.9-2-2s.9-2 2-2m0-2c-2.2 0-4 1.8-4 4s1.8 4 4 4s4-1.8 4-4s-1.8-4-4-4zm6-8c1.1 0 2 .9 2 2s-.9 2-2 2s-2-.9-2-2s.9-2 2-2m0-2C9.8 3 8 4.8 8 7s1.8 4 4 4s4-1.8 4-4s-1.8-4-4-4zm6 12c1.1 0 2 .9 2 2s-.9 2-2 2s-2-.9-2-2s.9-2 2-2m0-2c-2.2 0-4 1.8-4 4s1.8 4 4 4s4-1.8 4-4s-1.8-4-4-4z" />
                            </svg>
                            <label for="exampleInputPassword1" class="form-label fw-semibold">Tipe Pekerjaan</label>
                            <div class="border-2 border-bottom mt-2 ms-5">{{$data->tipe}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 mt-4">
        <div class="card w-100 position-relative overflow-hidden mb-0">
            <div class="card-header bg-info d-flex align-items-center">
                <!-- <h4 class="card-title text-white mb-0">detail</h4> -->
            </div>
            <div class="card-body p-4">
                <form>
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="me-4" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="#000000" d="m12 3.19l7 3.11V11c0 4.52-2.98 8.69-7 9.93c-4.02-1.24-7-5.41-7-9.93V6.3l7-3.11M12 1L3 5v6c0 5.55 3.84 10.74 9 12c5.16-1.26 9-6.45 9-12V5l-9-4zm-1 6h2v2h-2V7zm0 4h2v6h-2v-6z" />
                        </svg>
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Syarat & Ketentuan</label>
                        <div class="border-2 border-bottom ms-5">{!!$data->syarat!!}</div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-12 col-lg-12 d-flex justify-content-end">
    <div class="mt-4">
        <a href="{{route('lowongan.index')}}">
            <button type="button" class="btn btn-primary rounded-2">
                <p class="mb-0">Kembali</p>
            </button>
        </a>
    </div>
</div>
</div>
@endsection