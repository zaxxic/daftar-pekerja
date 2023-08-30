@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="row">
            <div class="col-md-6 lg-6 sm-6 d-flex">
                <button class="btn btn-success text-white mr-1" type="submit"><a href="{{ route('lowongan.create') }}"
                        class="text-white">Tambah</a></button>
                <form>
                    <input class="form-control me-5" type="search" placeholder="Cari Lowongan" aria-label="Search">
                </form>
            </div>
            <div class="col-12 d-flex">
                <div>
                    <a href="javascript:void(0)" class="btn btn-primary me-2" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Tambah Divisi</a>
                </div>
                <div>
                    <a href="javascript:void(0)" class="btn text-white" style="background-color: #13DEB9"
                        data-bs-toggle="modal" data-bs-target="#staBackdrop">Divisi</a>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4 lg-4 sm-12">
                <div class="employers-listing-sidebar">
                    <form class="search-form">
                        <div class="form-group">
                            <select class="form-control">
                                <option value="1">UX/UI Designer</option>
                                <option value="2">Web Developer</option>
                                <option value="3">Web Designer</option>
                                <option value="4">Software Developer</option>
                                <option value="5">SEO</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade" style="height: auto" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="myLargeModalLabel">
                            Tambah Devisi
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('divisi.store') }}" method="post">
                        @csrf
                        <div class="modal-body">

                            <div class="d-flex justify-content-center">
                                <input type="text" name="divisi" id="devisi" class="form-control" autofocus
                                    placeholder="masukan " style="width: 95%">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit"
                                class="btn btn-light-success text-success font-medium waves-effect text-start">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" style="height: auto" id="staBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="myLargeModalLabel">
                            Devisi Yang Ada
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="row p-3 ">
                        @forelse ($divisi as $items)
                            <div class="col-4 flex justify-content-center">
                                <div class="col-12 d-flex justify-content-between  border border-2 ">
                                    {{ $items->divisi }}
                                    <form action="{{ route('divisi.destroy', $items->id) }}" method="post"
                                        class="text-danger">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="  border-0" style="background:none;">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="18"
                                                height="18" viewBox="0 0 24 24">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>

                            </div>

                        @empty
                        @endforelse


                    </div>
                </div>
            </div>
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
                                <form action="{{ route('lowongan.destroy', $item->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-danger"
                                        style="background: none; border: none; padding: 0;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                            viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </form>

                                <a href="{{ route('lowongan.show', $item->id) }}" class="text-warning"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"
                                            d="M4 20h4L18.5 9.5a2.828 2.828 0 1 0-4-4L4 16v4m9.5-13.5l4 4" />
                                    </svg></a>
                                <a href="{{ route('lowongan.edit', $item->id) }}" class="text-warning"><svg
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
