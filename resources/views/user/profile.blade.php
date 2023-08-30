@extends('layouts1.app')
@section('content')
<div class="card-body">
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
                            <form action="" method="POST" enctype="multipart/form-data">
                                {{-- <form action="{{ route('update-profile') }}" method="POST"> --}}
                                @method('PUT')
                                @csrf
                                <h5 class="card-title fw-semibold">Ubah Prifile</h5>
                                <p class="card-subtitle mb-4">Ubah photo profile silahkan masukkan di sini</p>
                                <div class="text-center">
                                    <img src="{{asset('storage/public/foto_user/' . $user->foto)}}" alt="" class="img-fluid rounded-circle" style="width: 120px; height:120px;">
                                    <div class="d-flex align-items-center justify-content-center my-4 gap-3">
                                        <input type="file" name="foto" class="form-control" id="exampleInputResume">
                                    </div>
                                    <p class="mb-0">Dibolehkan JPG atau PNG. Ukuran maksimal photo 5Mb</p>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button class="btn btn-light-danger text-danger">Cancel</button>
                                    </div>
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
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="exampleInputName" class="form-label fw-semibold">Masukkan
                                            Nama</label>
                                        <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="exampleInputName" placeholder="Mathew Anderson">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputEmail" class="form-label fw-semibold">Email</label>
                                        <input type="email" value="{{ $user->email }}" name="email" class="form-control" id="exampleInputEmail" placeholder="info@modernize.com">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPhone" class="form-label fw-semibold">No
                                            Telpon</label>
                                        <input type="text" name="no_telp" value="{{ $user->no_telp }}" class="form-control" id="exampleInputPhone" placeholder="+91 12345 65478">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="exampleInputAddress" class="form-label fw-semibold">Alamat</label>
                                        <textarea name="alamat" class="form-control" id="exampleInputAddress" placeholder="Jalan Pegangsaan Timur Nomor 14, RT 04 RW 05 Kel. Senayan, Kec. Kebayoran Baru, Jakarta Selatan, 10450">{{ $user->alamat }}</textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputResume" class="form-label fw-semibold">Masukkan
                                            Lamaran</label>
                                        <div class=" d-flex justify-content-between">
                                            <div class="col-9">
                                                <input type="file" name="lamaran" class="form-control" id="exampleInputResume">
                                            </div>
                                            <a href="{{ route('user.lamaran', $user->id) }}" target="_blank" class="btn btn-primary" target="_blank">Lihat Lamaran</a>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputCV" class="form-label fw-semibold">Masukkan
                                            CV</label>
                                        <div class=" d-flex justify-content-between">
                                            <div class="col-9">
                                                <input type="file" class="form-control" id="exampleInputCV">
                                            </div>
                                            <a href="{{ route('user.cv', $user->id) }}" target="_blank" class="btn btn-primary" target="_blank">Lihat CV</a>
                                        </div>
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
                    </div>
                </div>
                </form>
            </div>

        </div>
    </div>


</div>
@endsection