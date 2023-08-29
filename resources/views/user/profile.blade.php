@extends('layouts1.app')
@section('content')
    <div class="card-body">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab"
                tabindex="0">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card w-100 position-relative overflow-hidden">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-semibold">Ganti Profile</h5>
                                <p class="card-subtitle mb-4">Ganti Photo Ptofile mu disini</p>
                                <div class="text-center">
                                    <img src="assets/dist/images/profile/user-1.jpg" alt=""
                                        class="img-fluid rounded-circle" width="120" height="120">
                                    <div class="d-flex align-items-center justify-content-center my-4 gap-3">
                                        <input type="file" class="form-control">

                                    </div>
                                    <p class="mb-0">Di bolehkan hanya JPG or PNG. Berukuran maksimal 5Mb</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card w-100 position-relative overflow-hidden">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-semibold">Ganti Password</h5>
                                <p class="card-subtitle mb-4">Untuk ganti password silahkan konfirmasi disini</p>
                                <form>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label fw-semibold">Password
                                            Lama</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                            value="">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label fw-semibold">Password
                                            Baru</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                            value="">
                                    </div>
                                    <div class="">
                                        <label for="exampleInputPassword1" class="form-label fw-semibold">Konfirmasi
                                            Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                            value="">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card w-100 position-relative overflow-hidden mb-0">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-semibold">Detail Profile</h5>
                                <p class="card-subtitle mb-4">Profile detail</p>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label for="exampleInputName" class="form-label fw-semibold">Masukkan
                                                    Nama</label>
                                                <input type="text" class="form-control" id="exampleInputName"
                                                    placeholder="Mathew Anderson">
                                            </div>
                                            <div class="mb-4">
                                                <label for="exampleInputEmail" class="form-label fw-semibold">Email</label>
                                                <input type="email" class="form-control" id="exampleInputEmail"
                                                    placeholder="info@modernize.com">
                                            </div>
                                            <div class="mb-4">
                                                <label for="exampleInputPhone" class="form-label fw-semibold">No Telpon</label>
                                                <input type="text" class="form-control" id="exampleInputPhone"
                                                    placeholder="+91 12345 65478">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label for="exampleInputAddress"
                                                    class="form-label fw-semibold">Alamat</label>
                                                <textarea class="form-control" id="exampleInputAddress"
                                                    placeholder="Jalan Pegangsaan Timur Nomor 14, RT 04 RW 05 Kel. Senayan, Kec. Kebayoran Baru, Jakarta Selatan, 10450"></textarea>
                                            </div>
                                            <div class="mb-4">
                                                <label for="exampleInputResume" class="form-label fw-semibold">Masukkan
                                                    Lamaran</label>
                                                <input type="file" class="form-control" id="exampleInputResume">
                                            </div>
                                            <div class="mb-4">
                                                <label for="exampleInputCV" class="form-label fw-semibold">Masukkan
                                                    CV</label>
                                                <input type="file" class="form-control" id="exampleInputCV">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                                            <button class="btn btn-primary">Save</button>
                                            <button class="btn btn-light-danger text-danger">Cancel</button>
                                        </div>
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
@endsection
