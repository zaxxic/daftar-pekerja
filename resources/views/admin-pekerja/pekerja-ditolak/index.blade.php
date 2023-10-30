@extends('layouts.app')
@section('content')
    <style>
        @media (max-width:600px) {
            .foto {
                display: flex;
                justify-content: center;
            }
        }
    </style>
    <style>
        @media (max-width: 600px) {

            .fotos {
                align-items: center;
                text-align: center;
                justify-content: center;

                border-radius: 10%;
            }
        }

        @media (max-width: 1080px) and (min-width: 760px) {
            .fotos {
                align-items: center;
                text-align: center;
                justify-content: center;
                border-radius: 10%;
                width: 100%;
            }
        }

        @media (max-width: 765px) {
            .titik-dua {
                display: none;
            }

            .text-detail {
                text-align: center
            }
        }
    </style>
     <link rel="stylesheet" href="{{asset('assets/dist/libs/daterangepicker/daterangepicker.css')}}">
    <div class="container-fluid">
        <!-- --------------------------------------------------- -->
        <!--  Form Basic Start -->
        <!-- --------------------------------------------------- -->

        <div class="card w-100 position-relative overflow-hidden">

            <div class="card-body p-4">
                <div v class="row">
                    <div class="mb-3 d-flex justify-content-between col-md-12 lg-12">

                        <form action="">
                            @csrf
                            <div class="input-group " style="height: 10px">
                                <input type="text" name="date" class="form-control p-1 showdropdowns" />
                                <button type="submit" style="width: 40px; height:auto; background-color:#549bff; border-radius: 0px 5px 5px 0px;" class="text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="8.5" cy="8.5" r="5"/><path d="M17.571 17.5L12 12"/></g></svg>
                                </button>
                              </div>
                        </form>
                        <form action="">
                            <div class="mb-3 d-flex  input-group">
                                <input type="search" class="form-control mt-0" name="cari" placeholder="Cari Pekerja..."
                                    style="height: 4%;" value="{{ $keyword }}">
                                    <button type="submit" style="width: 40px; height:auto;  background-color:#549bff; border-radius: 0px 5px 5px 0px;" class="text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="8.5" cy="8.5" r="5"/><path d="M17.571 17.5L12 12"/></g></svg>
                                    </button>
                            </div>
                        </form>
                    </div>


                </div>




                <div class="table-responsive rounded-2 mb-4">
                    <table class="table border text-nowrap customize-table mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th>
                                    <h6 class="fs-4 fw-semibold mb-0">User</h6>
                                </th>
                                <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Divisi</h6>
                                </th>
                                <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Posisi</h6>
                                </th>
                                <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Aksi</h6>
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($user as $row)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ asset('foto_user/' . $row->User->foto) }}" data-lightbox="image-1"
                                                data-title="Gambar Profil Anda"
                                                style="border-radius: 50%; overflow: hidden; width: 35px; height: 35px; display: flex; justify-content: center; align-items: center;">
                                                <img src="{{ asset('foto_user/' . $row->User->foto) }}"
                                                    style="max-width: 150%; max-height: 150%;" alt="" />
                                            </a>
                                            <div class="ms-3">
                                                <h6 class="fs-4 fw-semibold mb-0">{{ $row->User->name }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fw-normal">{{ $row->Vacancy->Division->divisi }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 fw-normal">{{ $row->Vacancy->pekerja }}</p>
                                    </td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30"
                                            viewBox="0 0 16 16" data-bs-toggle="modal"
                                            data-bs-target="#detail-user-{{ $row->id }}">
                                            <g fill="#5D87FF">
                                                <path
                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                <path
                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0a3.5 3.5 0 0 1-7 0z" />
                                            </g>
                                        </svg>
                                    </td>
                                </tr>
                                <style>
                                    .tepiborder {
                                        border: 1px solid #E1E1E1;
                                        border-radius: 5px;
                                        height: auto;
                                        padding: 4px;
                                        font-size: 12px;
                                    }

                                    .tepiborderGithub {
                                        border: 1px solid #000000;
                                        border-radius: 5px;
                                        height: auto;
                                        padding: 4px;
                                        font-size: 12px;
                                    }

                                    .fontlabel {
                                        color: #676767;
                                        font-family: Plus Jakarta Sans;
                                        font-size: 11px;
                                        font-style: normal;
                                        font-weight: 600;
                                    }

                                    .judul {
                                        color: #000;
                                        font-family: Plus Jakarta Sans;
                                        font-size: 18px;
                                        font-style: normal;
                                        font-weight: 700;
                                        line-height: 21px;
                                        /* 116.667% */
                                    }

                                    .nama {
                                        color: #343434;
                                        font-family: Plus Jakarta Sans;
                                        font-size: 16px;
                                        font-style: normal;
                                        font-weight: 700;
                                        line-height: 21px;
                                        /* 150% */
                                    }

                                    .email {
                                        color: #343434;
                                        font-family: Plus Jakarta Sans;
                                        font-size: 12px;
                                        font-style: normal;
                                        font-weight: 600;
                                        line-height: 21px;
                                        /* 190.909% */
                                    }

                                    .kata {
                                        color: #FFF;
                                        font-family: Plus Jakarta Sans;
                                        font-size: 13px;
                                        font-style: normal;
                                        font-weight: 800;
                                        line-height: 21px;
                                        /* 161.538% */
                                    }

                                    .github {
                                        color: #000;
                                        font-family: Plus Jakarta Sans;
                                        font-size: 13px;
                                        font-style: normal;
                                        font-weight: 700;
                                        line-height: 21px;
                                        /* 161.538% */
                                    }
                                </style>


                                <!-- Modal -->
                                <div class="modal fade" id="detail-user-{{ $row->id }}" tabindex="-1"
                                    aria-labelledby="bs-example-modal-xl" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content" style="border-radius: 20px">
                                            <div class="modal-header  d-flex align-items-center justify-content-end"
                                                style="border-radius: 20px 20px 0px 0px">
                                                <a type="button" class="text-black mr-2" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(2 2)"><circle cx="8.5" cy="8.5" r="8"/><path d="m5.5 5.5l6 6m0-6l-6 6"/></g></svg>
                                                </a>
                                            </div>
                                            <hr style="width: 100%; border-top: 1px solid #000000;" class="mt-0">
                                            <div class="modal-body" style="max-height: 530px; overflow-y: auto;">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-4 ">
                                                            <div class="tepi d-flex align-items-center justify-content-center rounded-circle"
                                                                style="">
                                                                <div
                                                                    class="  dalam border-4 d-flex align-items-center justify-content-center rounded-circle overflow-hidden">
                                                                    <img src="{{ asset('foto_user/' . $row->User->foto) }}"
                                                                        class="img-fluid rounded-circle"
                                                                        style="width: 200px; height: 200px; object-fit: cover; flex-shrink: 0;" />
                                                                </div>
                                                            </div>
                                                            <span class="nama d-flex justify-content-center mt-2">
                                                                {{ $row->User->name }}
                                                            </span>
                                                            <span class="email d-flex justify-content-center mt-1">
                                                                {{ $row->User->email }}
                                                            </span>
                                                            <div class=" row mt-2 gap-3 ">
                                                                @if ($row->User->LinkedIn)
                                                                <a href="{{$row->User->LinkedIn}}" target="blank" class="col-6 tepiborder d-flex text-white"
                                                                style=" align-items: center; background: #0A66C2;">

                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24">
                                                                            <path fill="currentColor"
                                                                                d="M18.336 18.339h-2.665v-4.177c0-.996-.02-2.278-1.39-2.278c-1.389 0-1.601 1.084-1.601 2.205v4.25h-2.666V9.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387c2.7 0 3.2 1.778 3.2 4.091v4.715ZM7.004 8.575a1.546 1.546 0 0 1-1.548-1.549a1.548 1.548 0 1 1 1.547 1.549Zm1.336 9.764H5.667V9.75H8.34v8.589ZM19.67 3H4.33C3.594 3 3 3.58 3 4.297v15.406C3 20.42 3.594 21 4.328 21h15.339C20.4 21 21 20.42 21 19.703V4.297C21 3.581 20.4 3 19.666 3h.003Z" />
                                                                        </svg>
                                                                        <span class="item-center kata">LinkedIn</span>

                                                                </a>
                                                                @else
                                                                <a id="tidakPunya" class="col-6 tepiborder d-flex text-white"
                                                                style=" align-items: center; background: #0A66C2;">

                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24">
                                                                            <path fill="currentColor"
                                                                                d="M18.336 18.339h-2.665v-4.177c0-.996-.02-2.278-1.39-2.278c-1.389 0-1.601 1.084-1.601 2.205v4.25h-2.666V9.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387c2.7 0 3.2 1.778 3.2 4.091v4.715ZM7.004 8.575a1.546 1.546 0 0 1-1.548-1.549a1.548 1.548 0 1 1 1.547 1.549Zm1.336 9.764H5.667V9.75H8.34v8.589ZM19.67 3H4.33C3.594 3 3 3.58 3 4.297v15.406C3 20.42 3.594 21 4.328 21h15.339C20.4 21 21 20.42 21 19.703V4.297C21 3.581 20.4 3 19.666 3h.003Z" />
                                                                        </svg>
                                                                        <span class="item-center kata">LinkedIn</span>

                                                                </a>

                                                                @endif
                                                                @if ($row->User->GitHub)
                                                                <a href="{{$row->User->GitHub}}" target="blank" class="col-5 tepiborderGithub d-flex"
                                                                style=" align-items: center; background: #ffffff;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24">
                                                                            <path fill="black"
                                                                                d="M12.001 2c-5.525 0-10 4.475-10 10a9.994 9.994 0 0 0 6.837 9.488c.5.087.688-.213.688-.476c0-.237-.013-1.024-.013-1.862c-2.512.463-3.162-.612-3.362-1.175c-.113-.288-.6-1.175-1.025-1.413c-.35-.187-.85-.65-.013-.662c.788-.013 1.35.725 1.538 1.025c.9 1.512 2.337 1.087 2.912.825c.088-.65.35-1.087.638-1.337c-2.225-.25-4.55-1.113-4.55-4.938c0-1.088.387-1.987 1.025-2.688c-.1-.25-.45-1.275.1-2.65c0 0 .837-.262 2.75 1.026a9.28 9.28 0 0 1 2.5-.338c.85 0 1.7.112 2.5.337c1.913-1.3 2.75-1.024 2.75-1.024c.55 1.375.2 2.4.1 2.65c.637.7 1.025 1.587 1.025 2.687c0 3.838-2.337 4.688-4.563 4.938c.363.312.676.912.676 1.85c0 1.337-.013 2.412-.013 2.75c0 .262.188.574.688.474A10.016 10.016 0 0 0 22 12c0-5.525-4.475-10-10-10Z" />
                                                                        </svg>
                                                                        <span class="item-center text-dark github">Github</span>
                                                                </a>
                                                                @else
                                                                <a id="tidakPunyaGithub" class="col-5 tepiborderGithub d-flex"
                                                                style=" align-items: center; background: #ffffff;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24">
                                                                            <path fill="black"
                                                                                d="M12.001 2c-5.525 0-10 4.475-10 10a9.994 9.994 0 0 0 6.837 9.488c.5.087.688-.213.688-.476c0-.237-.013-1.024-.013-1.862c-2.512.463-3.162-.612-3.362-1.175c-.113-.288-.6-1.175-1.025-1.413c-.35-.187-.85-.65-.013-.662c.788-.013 1.35.725 1.538 1.025c.9 1.512 2.337 1.087 2.912.825c.088-.65.35-1.087.638-1.337c-2.225-.25-4.55-1.113-4.55-4.938c0-1.088.387-1.987 1.025-2.688c-.1-.25-.45-1.275.1-2.65c0 0 .837-.262 2.75 1.026a9.28 9.28 0 0 1 2.5-.338c.85 0 1.7.112 2.5.337c1.913-1.3 2.75-1.024 2.75-1.024c.55 1.375.2 2.4.1 2.65c.637.7 1.025 1.587 1.025 2.687c0 3.838-2.337 4.688-4.563 4.938c.363.312.676.912.676 1.85c0 1.337-.013 2.412-.013 2.75c0 .262.188.574.688.474A10.016 10.016 0 0 0 22 12c0-5.525-4.475-10-10-10Z" />
                                                                        </svg>
                                                                        <span class="item-center text-dark github">Github</span>
                                                                </a>

                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-8 pr-0 row">
                                                            <div class="pr-0 col-12  judul">Profile User</div>

                                                            <div class="pr-0 col-6"  style="margin-top:5px">
                                                                <label for="" class="fontlabel"
                                                                    style="margin-bottom: 2px;">Jenis kelamin</label>
                                                                <div class="tepiborder">{{ $row->User->jenis_kelamin }}</div>
                                                            </div>
                                                            <div class="pr-0 col-6"  style="margin-top:5px">
                                                                <label for="" class="fontlabel"
                                                                    style="margin-bottom: 2px;">No.Telephone</label>
                                                                <div class="tepiborder">{{ $row->User->no_telp }}</div>
                                                            </div>
                                                            <div class="pr-0 col-6"  style="margin-top:5px">
                                                                <label for="" class="fontlabel"
                                                                    style="margin-bottom: 2px;">Divisi</label>
                                                                <div class="tepiborder">{{ $row->Vacancy->Division->divisi }}</div>
                                                            </div>
                                                            <div class="pr-0 col-6"  style="margin-top:5px">
                                                                <label for="" class="fontlabel"
                                                                    style="margin-bottom: 2px;">Posisi</label>
                                                                <div class="tepiborder">{{ $row->Vacancy->pekerja }}</div>
                                                            </div>
                                                            <div class="pr-0 col-12 " style="margin-top:5px">
                                                                <label for="" class="fontlabel"
                                                                    style="margin-bottom: 2px;">Alamat</label>
                                                                <div class="tepiborder">{{ $row->User->alamat }}</div>
                                                            </div>
                                                            <div class="pr-0 col-12 " style="margin-top:5px">
                                                                <label for="" class="fontlabel"
                                                                    style="margin-bottom: 2px;">Tanggal Penolakan </label>
                                                                <div class="tepiborder">{{ \Carbon\Carbon::parse($row->created_at)->locale('id')->isoFormat('D MMMM Y ') }}</div>
                                                            </div>
                                                            <div class="pr-0 col-12 " style="margin-top:5px">
                                                                <label for="" class="fontlabel"
                                                                    style="margin-bottom: 2px;">Alasan Penolakan</label>
                                                                <div class="tepiborder">{{$row->pesan}}</div>
                                                            </div>
                                                            <div class="pr-0 col-12  d-flex justify-content-end py-2">
                                                                <button type="button"
                                                                    class="btn btn-info text-white font-medium"
                                                                    data-bs-dismiss="modal">
                                                                    Tutup
                                                                </button>
                                                            </div>
                                                        </div>

                                                        {{-- <div class="col-12">
                                                            <div class="mb-3 text-center">
                                                                <!-- <div class="tepi justify-content-center linear-gradient align-items-center fotos align-items-center justify-content-center rounded-circle">
                                                                    <div class=" dalam  border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden">
                                                                        <img src="{{ asset('foto_user/' . $row->User->foto) }}" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;" />
                                                                    </div>
                                                                </div> -->
                                                                <div class="tepi d-flex align-items-center justify-content-center rounded-circle" style="">
                                                                    <div class="  dalam border-4 d-flex align-items-center justify-content-center rounded-circle overflow-hidden">

                                                                        <img src="{{ asset('foto_user/' . $row->User->foto) }}" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;" />
                                                                    </div>
                                                                </div>
                                                                <h4 class="mt-3 fw-semibold">{{ $row->User->name }}</h4>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-12 col-sm-12 pt-2" style="padding-right: 30px;">
                                                                                <div class="row mb-3">
                                                                                    <span class="col-12 col-md-3 text-detail  " style="font-weight: bold">Jenis Kelamin</span>
                                                                                    <span class="titik-dua col-1" style="font-weight: bold">:</span>
                                                                                    <span class="col-12 col-md-8 text-detail">{{ $row->User->jenis_kelamin }}</span>
                                                                                </div>
                                                                                <hr class="">

                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 col-sm-12 pt-2" style="padding-right: 30px;">

                                                                                <div class="row  mb-3">
                                                                                    <span class="col-12 col-md-3 text-detail " style="font-weight: bold">Tgl.
                                                                                        Tolak</span>
                                                                                    <span class="titik-dua col-1" style="font-weight: bold">:</span>
                                                                                    <span class="col-12 col-md-8 text-detail">{{ \Carbon\Carbon::parse($row->created_at)->locale('id')->isoFormat('D MMMM Y ') }}</span>
                                                                                </div>
                                                                                <hr class="">

                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 col-sm-12 pt-2" style="padding-right: 30px;">

                                                                                <div class="row  mb-3">
                                                                                    <span class="col-12 col-md-3 text-detail " style="font-weight: bold">No
                                                                                        Telp</span>
                                                                                    <span class="titik-dua col-1" style="font-weight: bold">:</span>
                                                                                    <span class="col-12 col-md-8 text-detail">{{ $row->User->no_telp }}</span>
                                                                                </div>
                                                                                <hr class="">
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 col-sm-12 pt-2" style="padding-right: 30px;">
                                                                                <div class="row mb-3">
                                                                                    <span class="col-12 col-md-3 text-detail " style="font-weight: bold" style="font-weight: bold">Email</span>
                                                                                    <span class="titik-dua col-1" style="font-weight: bold">:</span>
                                                                                    <span class="col-12 col-md-8 text-detail">{{ $row->User->email }}</span>
                                                                                </div>
                                                                                <hr class="">
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 col-sm-12 pt-2" style="padding-right: 30px;">

                                                                                <div class="row  mb-3">
                                                                                    <span class="col-12 col-md-3 text-detail " style="font-weight: bold">Divisi</span>
                                                                                    <span class="titik-dua col-1" style="font-weight: bold">:</span>
                                                                                    <span class="col-12 col-md-8 text-detail">{{ $row->Vacancy->Division->divisi }}</span>
                                                                                </div>
                                                                                <hr class="">
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 col-sm-12 pt-2" style="padding-right: 30px;">

                                                                                <div class="row  mb-3">
                                                                                    <span class="col-12 col-md-3 text-detail " style="font-weight: bold">Posisi</span>
                                                                                    <span class="titik-dua col-1" style="font-weight: bold">:</span>
                                                                                    <span class="col-12 col-md-8 text-detail">{{ $row->Vacancy->pekerja }}</span>
                                                                                </div>
                                                                                <hr class="">
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 col-sm-12 pt-2" style="padding-right: 30px;">

                                                                                <div class="row  mb-3">
                                                                                    <span class="col-12 col-md-3 text-detail " style="font-weight: bold">Alasan
                                                                                    </span>
                                                                                    <span class="titik-dua col-1" style="font-weight: bold">:</span>
                                                                                    <span class="col-12 col-md-8 text-detail">{{ $row->pesan }}</span>
                                                                                </div>
                                                                                <hr class="">
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 col-sm-12 pt-2" style="padding-right: 30px;">

                                                                                <div class="row  mb-3">
                                                                                    <span class="col-12 col-md-3 text-detail " style="font-weight: bold">Alamat</span>
                                                                                    <span class="titik-dua col-1" style="font-weight: bold">:</span>
                                                                                    <span class="col-12 col-md-8 text-detail">{{ $row->User->alamat }}</span>
                                                                                </div>
                                                                                <hr class="">
                                                                            </div>

                                                                            <!-- <div class="pt-2">
                                                                                <div class="row mb-3">
                                                                                    <div class="col-auto text-detail" style="font-weight: bold" id="alasanElement">
                                                                                        Alasan <span class="titik-dua laptop">:</span>
                                                                                    </div>
                                                                                    <div class="col pesan text-detail" id="pesanElement">
                                                                                        {{ $row->pesan }}
                                                                                    </div>
                                                                                </div>
                                                                                <hr>
                                                                            </div> -->


                                                                        </div>
                                                                    </div>
                                                                    <style>
                                                                        /* HR untuk tampilan di dalam (tablet dan hp) */
                                                                        @media (max-width: 760px) {
                                                                            hr.dalam {
                                                                                display: block;
                                                                            }

                                                                            hr.luar {
                                                                                display: none;
                                                                            }
                                                                        }

                                                                        @media (max-width: 600px) {
                                                                            hr.dalam {
                                                                                display: block;
                                                                            }

                                                                            hr.luar {
                                                                                display: none;
                                                                            }
                                                                        }

                                                                        /* HR untuk tampilan di luar (laptop) */
                                                                        @media (min-width: 1080px) {
                                                                            hr.dalam {
                                                                                display: none;
                                                                            }

                                                                            hr.luar {
                                                                                display: block;
                                                                            }

                                                                            span.laptop {
                                                                                margin-left: 83px;
                                                                            }

                                                                            div.pesan {
                                                                                margin-left: 35px;
                                                                            }
                                                                        }

                                                                        @media (max-width: 768px) {
                                                                            span.laptop {
                                                                                margin-left: 48px;
                                                                            }

                                                                            div.pesan {
                                                                                margin-left: 30px;
                                                                            }
                                                                        }
                                                                    </style>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            @empty
                                <div class="container">
                                    <div class="row d-flex">
                                        <div class="col">
                                            <tr>
                                                <td class="text-center" colspan="5">
                                                    <img src="{{ asset('assets/nodatas.png') }}" alt=""
                                                        width="280px">
                                                </td>
                                            </tr>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="col-lg-12">
                        <nav aria-label="Page navigation example" class="mt-3 justify-content-end">
                            <ul class="pagination justify-content-end">
                                {{ $user->appends(['cari' => request('cari')])->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>




        <!-- --------------------------------------------------- -->
        <!--  Form Basic End -->
        <!-- --------------------------------------------------- -->
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js
    "></script>
    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css
    " rel="stylesheet">
    <script>
        // Ambil elemen input pencarian
        const searchInput = document.querySelector('input[name="cari"]');

        // Tambahkan event listener untuk mendengarkan peristiwa klik pada ikon "x"
        searchInput.addEventListener('search', function(event) {
            // Setel nilai input pencarian menjadi kosong
            searchInput.value = '';


              // Ambil elemen input pencarian
            const searchInput = document.querySelector('input[name="cari"]');
            // Selanjutnya, Anda dapat memicu pencarian ulang atau tindakan lain yang sesuai.
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#tidakPunya').click( function(){
                Swal.fire(
                'Belum Memiliki',
                'User belum memiliki akun linkedIn',
                'info'
                );
            });

            $('#tidakPunyaGithub').click( function(){
                Swal.fire(
                'Belum Memiliki',
                'User belum memiliki akun GitHub',
                'info'
                );
            });
        });
    </script>
        <script src="{{asset('assets/dist/libs/bootstrap-material-datetimepicker/node_modules/moment/moment.js')}}"></script>
        <script src="{{asset('assets/dist/libs/daterangepicker/daterangepicker.js')}}"></script>
        <script>
          /*******************************************/
          // Show Dropdowns
          /*******************************************/
          $(".showdropdowns").daterangepicker({
            showDropdowns: true,
            locale: {
                format: "DD-MM-YYYY",
                applyLabel: "Pakai",
                cancelLabel: "Batal",
                daysOfWeek: ["Sen", "Sel", "Rab", "Kam", "Jum", "Sab", "Min"],
                monthNames: [
                "Januari",
                "Februari",
                "Maret",
                "April",
                "Mei",
                "Juni",
                "Juli",
                "Agustus",
                "September",
                "Oktober",
                "November",
                "Desember",
                ],
            },
          });
        </script>
@endsection
