@extends('layouts.app')
@section('content')
<div class="" style="width: 100%; height:auto;">

        <div class="row">

        </div>
        <div class="col-12">
            <div class="card w-100 position-relative overflow-hidden mb-0">
                <div class="card-body p-4">
                <h3 class="fw-semibold mb-5 text-center">Detail Lowongan</h3>
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Judul Lowongan</label>
                                    <div class="border-2 border-bottom mt-2">{{$data->judul}}</div>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Divisi</label>
                                    <div class="border-2 border-bottom mt-2">{{$data->Division->divisi}}</div>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Pekerjaan</label>
                                    <div class="border-2 border-bottom mt-2">{{$data->pekerja}}</div>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Gaji</label>
                                    <div class="border-2 border-bottom mt-2">{{$data->gaji}}</div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Batas Lowongan</label>
                                    <div class="border-2 border-bottom mt-2">{{$data->batas}}</div>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Slot</label>
                                    <div class="border-2 border-bottom mt-2">{{$data->slot}}</div>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Lokasi</label>
                                    <div class="border-2 border-bottom mt-2">{{$data->lokasi}}</div>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Tipe Pekerjaan</label>
                                    <div class="border-2 border-bottom mt-2">{{$data->tipe}}</div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 mt-4">
            <div class="card w-100 position-relative overflow-hidden mb-0">
                <div class="card-body p-4">
                    <form>
                        <div class="">
                            <label for="exampleInputPassword1" class="form-label fw-semibold">Syarat & Ketentuan</label>
                            <div class="">{!!$data->syarat!!}</div>
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
