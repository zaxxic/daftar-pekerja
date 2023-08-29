@extends('layouts.app')
@section('content')
<div class="card p-4" style="width: 100%; height:auto;">
    <div class="row">
        <div class="col-md-6 col-lg-6 mt-">
            <h5> Buat Lowongan</h5>
        </div>
        <div class="col-md-6 col-lg-6 d-flex justify-content-end">
            <div>
                <a href="javascript:void(0)" class="btn btn-danger rounded-2" > <p class="mb-0 ">Batal</p></a>
                <a href="javascript:void(0)" class="btn btn-primary rounded-2"> <p class="mb-0">Simpan</p></a>
            </div>
        </div>
    </div>
    <form action="" method="post">
        <div class="row">
            <div class="col-6">
                <label class="mt-5" for="judul">Judul Lowongan </label> <br>
                <input class="col-10" type="text" name="" id="">
            </div>
            <div class="col-6">
                <label class="mt-5" for="judul">Divisi </label> <br>
                <select name="" class="col-10" style="" id="">
                <option value="">aa</option>
                <option value="">b</option>
                <option value="">c</option>
               </select>
            </div>
            <div class="col-6">
                <label class="mt-5" for="judul">Batas Lowongan </label> <br>
                <input class="col-10" type="text" name="" id="">
            </div>
            <div class="col-6">
                <label class="mt-5" for="judul">Pekerjaan </label> <br>
                <input class="col-10" type="text" name="" id="">
            </div>
            <div class="col-6">
                <label class="mt-5" for="judul">Slot</label> <br>
                <input class="col-10" type="text" name="" id="">
            </div>
            <div class="col-6">
                <label class="mt-5" for="judul"> Gaji </label> <br>
                <input class="col-10" type="text" name="" id="">
            </div>
            <div class="col-6">
                <label class="mt-5" for="judul">Tipe pekerjaan  </label> <br>
                <select name="" class="col-10" style="" id="">
                    <option value="">aa</option>
                    <option value="">b</option>
                   </select>
            </div>
            <div class="col-6">
                <label class="mt-5" for="judul">lokasi </label> <br>
                <input class="col-10" type="text" name="" id="">
            </div>
        </div>
    </form>
</div>
@endsection
