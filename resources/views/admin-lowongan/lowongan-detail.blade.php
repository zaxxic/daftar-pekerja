@extends('layouts.app')
@section('content')
<div class="" style="width: 100%; height:auto;">
    <form action="{{route('lowongan.store')}}" method="post" enctype="multipart/form-data">
        @csrf
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
                                    <input type="text" class="form-control" id="exampleInputtext" value="Manajemen Keuangan">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Divisi</label>
                                    <input type="email" class="form-control" id="exampleInputtext" value="Admin">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Pekerjaan</label>
                                    <input type="text" class="form-control" id="exampleInputtext" value="Admin">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Gaji</label>
                                    <input type="text" class="form-control" id="exampleInputtext" value="Rp 120.000.00">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Tipe Pekerjaan</label>
                                    <input type="text" class="form-control" id="exampleInputtext" value="Akuntansi">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Batas Lowongan</label>
                                    <input type="text" class="form-control" id="exampleInputtext" value="16">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Slot</label>
                                    <input type="text" class="form-control" id="exampleInputtext" value="12">
                                </div>
                                <div class="">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Lokasi</label>
                                    <textarea style="height: 131px;"" type="text" class="form-control" id="exampleInputtext">Jl. Kutilang No.666, Gg Gurame, kelurahan pelabuhan lawu, kecamatan atlantis utara, kota balikpapan, Kota Yang Telah Lama Hilang, Kota Atlantis</textarea>
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
                                    <textarea style="height: 200px;" type="text" class="form-control" id="exampleInputtext">Status bukan pelajar, Ijazah minimal sma/smk, berpengalaman dalam bidang keuangan selama kurang lebih 20 tahun, mampu menghandle tugas, softskill yang mencukupi, sopan santun, taat beribadah kepada tuhan YME, bebas narkoba, bebas rokok, tidak wibu,  move on dari mantan terindah kalau tidak punya mantan auto keterima dan satu yang paling penting dan tidak boleh ketinggalan adalah HARUS NGEFANS SAMA TRISQI kalau sudah ngefans auto hidup 20 tahun kedepan bakal terjamin. </textarea>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-12 d-flex justify-content-end">
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary rounded-2">
                        <p class="mb-0">Kembali</p>
                    </button>
                </div>
            </div>
    </form>
</div>
@endsection