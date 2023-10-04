@extends('layouts.app')
@section('content')
<div class="card p-4" style="width: 100%; height:auto;">
    <form action="{{ route('lowongan.update', $lowongan->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-6 col-lg-6 mt-">
                <h5> Edit Lowongan</h5>
            </div>

        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <label class="mt-5" for="judul">Judul Lowongan </label> <br>
                <input placeholder="Judul" class="col-12 col-md-10 rounded-1 form-control" type="text" name="judul" value="{{ $lowongan->judul }}" id="">
                @error('judul')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-12 col-md-6">
                <label class="mt-5" for="devisi">Divisi </label> <br>
                <select name="devisi" class="col-12 col-md-10 rounded-1 form-control" style="" id="">
                    @foreach ($divisi as $data)
                    <option value="{{ $data->id }}" {{ $data->id === $lowongan->devisi_id ? 'selected' : '' }}>
                        {{ $data->divisi }}
                    </option>
                    @endforeach
                </select>
                @error('devisi')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-12 col-md-6">
                <label class="mt-5" for="judul">Batas Lowongan </label> <br>
                <input placeholder="Batas" class="col-12 col-md-10 rounded-1 form-control" type="date" name="batas" value="{{ $lowongan->batas }}" id="">
                @error('batas')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-12 col-md-6">
                <label class="mt-5" for="judul">Posisi </label> <br>
                <input placeholder="Posisi" class="col-12 col-md-10 rounded-1 form-control" type="text" name="pekerjaan" value="{{ $lowongan->pekerja }}" id="">
                @error('pekerjaan')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-12 col-md-6">
                <label class="mt-5" for="judul">Slot</label> <br>
                <input placeholder="Slot" class="col-12 col-md-10 rounded-1 form-control" type="number" name="slot" value="{{ $lowongan->slot }}" id="">
                @error('slot')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-12 col-md-6">
                <label class="mt-5" for="judul"> Gaji </label> <br>
                <input placeholder="Gaji" class="col-12 col-md-10 rounded-1 form-control" type="number" name="gaji" value="{{ $lowongan->gaji }}" id="">
                @error('gaji')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-12 col-md-6">
                <label class="mt-5" for="judul">Tipe pekerjaan </label> <br>
                <select name="tipe" class="col-12 col-md-10 rounded-1 form-control" id="tipe">
                    <option value="kontrak" {{ old('tipe', $lowongan->tipe) == 'kontrak' ? 'selected' : '' }}>kontrak</option>
                    <option value="permanen" {{ old('tipe', $lowongan->tipe) == 'permanen' ? 'selected' : '' }}>permanen</option>
                </select>
                @error('tipe')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-12 col-md-6">
                <label class="mt-5" for="judul">lokasi </label> <br>
                <input placeholder="Lokasi" class="col-12 col-md-10 rounded-1 form-control" type="text" name="lokasi" value="{{ $lowongan->lokasi }}" id="">
                @error('lokasi')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group col-12">
                <label class="mt-5" for="judul">syarat </label> <br>
                @error('content')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Konten Post">{!! $lowongan->syarat !!}</textarea> {{-- <input placeholder="" class="col-12 col-md-10 rounded-1 form-control" type="text" name="lokasi" id=""> --}}
            </div>

        </div>
        <div class="col-md-12 col-lg-12 d-flex justify-content-end">
            <div>
                <a href="{{ route('lowongan.index') }}" class="btn btn-danger rounded-2 me-2">
                    <p class="mb-0">Batal</p>
                </a>
                <button type="submit" class="btn btn-primary rounded-2">
                    <p class="mb-0">Simpan</p>
                </button>
            </div>
        </div>
    </form>

</div>
@endsection