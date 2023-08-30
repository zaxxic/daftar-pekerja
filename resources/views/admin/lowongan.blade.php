@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="mb-4 d-flex gap-2 justify-content-start col-md-6 ">
            <a href="{{ route('lowongan.create') }}" class="btn btn-primary">Tambah</a>
            <input type="text" class="border border-2 p-1 rounded" placeholder="cari lowongan ">
        </div>
        <div class="d-flex justify-content-end gap-2 col-md-6  ">
            <div>
                <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">Tambah Divisi</a>
            </div>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                            <h4 class="modal-title" id="myLargeModalLabel">
                                Tambah Devisi
                            </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="d-flex justify-content-center">
                                    <input type="text" name="devisi" id="devisi" class="" autofocus
                                        placeholder="masukan " style="width: 95%">
                                </div>
                            </form>
                            {{-- <h4>Overflowing text to show scroll behavior</h4>
                <p>
                    Praesent commodo cursus magna, vel scelerisque
                    nisl consectetur et. Vivamus sagittis lacus vel
                    augue laoreet rutrum faucibus dolor auctor.
                </p>
                <p>
                    Aenean lacinia bibendum nulla sed consectetur.
                    Praesent commodo cursus magna, vel scelerisque
                    nisl consectetur et. Donec sed odio dui. Donec
                    ullamcorper nulla non metus auctor fringilla.
                </p> --}}
                        </div>
                        <div class="modal-footer">
                            <button type="button"
                                class="btn btn-light-danger text-danger font-medium waves-effect text-start"
                                data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a href="javascript:void(0)" class="btn text-white" style="background-color: #13DEB9">DIvisi</a>
            </div>
        </div>
    </div>


    <div class="row">
        @forelse ($data as $item)
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted d-flex align-items-center">{{ $item->pekerja }}</h6>
                        <p class="card-text pt-2">
                            {!! $item->syarat !!}
                        </p>
                        <p class="card-text pt-2"> Gaji : {{ $item->gaji }}</p>
                        <p class="card-text pt-2">
                            {{ $item->batas }}
                        </p>
                        <div class="row">
                            <div class="col-6">
                                <a href="#" class="text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="26"
                                        height="26" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"
                                            d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3" />
                                    </svg></a>
                                <a href="#" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="26" height="26" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"
                                            d="M4 20h4L18.5 9.5a2.828 2.828 0 1 0-4-4L4 16v4m9.5-13.5l4 4" />
                                    </svg></a>
                                <a href="{{ route('lowongan.show', ['id' => $lowongan->id]) }}" class="text-warning"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"
                                            d="M4 20h4L18.5 9.5a2.828 2.828 0 1 0-4-4L4 16v4m9.5-13.5l4 4" />
                                    </svg></a>
                            </div>
                            <div class="col-6 d-flex justify-content-end ">
                                <a href="#" class="text-success"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="26" height="26" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M20 12a8 8 0 0 1-8 8a8 8 0 0 1-8-8a8 8 0 0 1 8-8c.76 0 1.5.11 2.2.31l1.57-1.57A9.822 9.822 0 0 0 12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10M7.91 10.08L6.5 11.5L11 16L21 6l-1.41-1.42L11 13.17l-3.09-3.09Z" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            belum ada data
        @endforelse

    </div>
@endsection
