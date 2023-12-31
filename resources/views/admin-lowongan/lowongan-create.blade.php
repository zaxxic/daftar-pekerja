@extends('layouts.app')
@section('content')
    <div class="card p-4" style="width: 100%; height:auto;">
        <form action="{{ route('lowongan.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <h5> Buat Lowongan</h5>
                </div>

            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <label class="mt-5" for="judul">Judul Lowongan </label> <br>
                    <input placeholder="judul lowongan" class="col-12 col-md-10 rounded-1 form-control" type="text"
                        name="judul" value="{{ old('judul') }}" id="">
                    @error('judul')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label class="mt-5" for="devisi">Divisi </label> <br>
                    <select name="devisi" class="col-12 col-md-10 rounded-1 form-select" style="" id="">
                        @foreach ($divisi as $data)
                            <option value="{{ $data->id }}" {{ $data->id === old('devisi') ? 'selected' : '' }}>
                                {{ $data->divisi }}</option>
                        @endforeach
                    </select>
                    @error('devisi')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label class="mt-5" for="judul">Batas Lowongan </label> <br>
                    <input placeholder="batas lowongan" class="col-12 col-md-10 rounded-1 form-control" type="date"
                        name="batas" value="{{ old('batas') }}" id="">
                    @error('batas')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label class="mt-5" for="judul">Posisi </label> <br>
                    <input placeholder="Posisi" class="col-12 col-md-10 rounded-1 form-control" type="text"
                        name="pekerjaan" value="{{ old('pekerjaan') }}" id="">
                    @error('pekerjaan')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label class="mt-5" for="judul">Slot</label> <br>
                    <input placeholder="Solt " class="col-12 col-md-10 rounded-1 form-control" type="number" name="slot"
                        min="0" value="{{ old('slot') }}" id="">
                    @error('slot')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label class="mt-5" for="judul"> Gaji </label> <br>
                    <input placeholder="Gaji" class="col-12 col-md-10 rounded-1 form-control" type="number" name="gaji"
                        min="0" value="{{ old('gaji') }}" placeholder=" ">
                    @error('gaji')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label class="mt-5" for="judul">Tipe pekerjaan </label> <br>
                    <select name="tipe" class="col-12 col-md-10 rounded-1 form-select" style="" id="">
                        <option value="kontrak" {{ 'kontrak' === old('tipe') ? 'selected' : '' }}>kontrak</option>
                        <option value="permanen" {{ 'permanen' === old('tipe') ? 'selected' : '' }}>permanen</option>
                    </select>
                    @error('tipe')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label class="mt-5" for="judul">Lokasi </label> <br>
                    <input placeholder="Lokasi" class="col-12 col-md-10 rounded-1 form-control" type="text"
                        name="lokasi" value="{{ old('lokasi') }}" id="">
                    @error('lokasi')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-12">
                    <label class="mt-5" for="judul">Syarat </label> <br>
                    @error('content')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <textarea class="form-control rounded-1 @error('content') is-invalid @enderror" name="content" rows="5"
                        placeholder="Masukkan Konten Post">{{ old('content') }}</textarea>
                </div>

            </div>
            <div class="col-md-12 col-lg-12 d-flex justify-content-end mt-3">
                <div>
                    <a href="{{ route('lowongan.index') }}" class="btn btn-danger rounded-2 me-2">
                        <p class="mb-0 ">Batal</p>
                    </a>
                    <button type="submit" class="btn btn-primary rounded-2">
                        <p class="mb-0">Simpan</p>
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
