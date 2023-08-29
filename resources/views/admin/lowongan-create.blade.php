@extends('layouts.app')
@section('content')
<div class="card p-4" style="width: 100%; height:auto;">
    <form action="{{route('lowongan.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-md-6 col-lg-6 mt-">
            <h5> Buat Lowongan</h5>
        </div>
        <div class="col-md-6 col-lg-6 d-flex justify-content-end">
            <div>
                <a href="javascript:void(0)" class="btn btn-danger rounded-2" > <p class="mb-0 ">Batal</p></a>
                <button type="submit" class="btn btn-primary rounded-2"> <p class="mb-0">Simpan</p></button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label class="mt-5" for="judul">Judul Lowongan </label> <br>
            <input class="col-10" type="text" name="judul" id="">
        </div>
        <div class="col-6">
            <label class="mt-5" for="devisi">Divisi </label> <br>
            <select name="devisi" class="col-10" style="" id="">
            <option value="a">aa</option>
            <option value="b">b</option>
            <option value="c">c</option>
            </select>
        </div>
        <div class="col-6">
            <label class="mt-5" for="judul">Batas Lowongan </label> <br>
            <input class="col-10" type="text" name="batas" id="">
        </div>
        <div class="col-6">
            <label class="mt-5" for="judul">Pekerjaan </label> <br>
            <input class="col-10" type="text" name="pekerjaan" id="">
        </div>
        <div class="col-6">
            <label class="mt-5" for="judul">Slot</label> <br>
            <input class="col-10" type="text" name="slot" id="">
        </div>
        <div class="col-6">
            <label class="mt-5" for="judul"> Gaji </label> <br>
            <input class="col-10" type="text" name="gaji" id="">
        </div>
        <div class="col-6">
            <label class="mt-5" for="judul">Tipe pekerjaan  </label> <br>
            <select name="tipe" class="col-10" style="" id="">
                <option value="kontrak">aa</option>
                <option value="permanen">b</option>
                </select>
        </div>
        <div class="col-6">
            <label class="mt-5" for="judul">lokasi </label> <br>
            <input class="col-10" type="text" name="lokasi" id="">
        </div>
        <div class="form-group col-12">
            <label class="mt-5" for="judul">syarat </label> <br>
            <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Konten Post">{{ old('content') }}</textarea>            {{-- <input class="col-10" type="text" name="lokasi" id=""> --}}
        </div>

    </div>
    </form>
</div>
@endsection
