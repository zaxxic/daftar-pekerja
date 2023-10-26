<header class="app-header">
    <nav class="navbar navbar-expand-xl navbar-light container-fluid px-0">
        <ul class="navbar-nav">
            <li class="nav-item d-none d-xl-block mr-4">
                <a class="logo" href="{{ route('dashboard') }}">
                    <img width="180px" src="{{ asset('assets/hummatech.png') }}" alt="logo">
                </a>
            </li>
        </ul>
        <style>
            .navbar-nav .nav-item .nav-link.active1 {
                content: "";
                position: absolute;
                left: 0;
                right: 0;
                height: 36px;
                width: 100%;
                border-radius: 7px;
                z-index: -1;

                font-size: 0.875rem;
                position: relative;
                z-index: 2;
                transition: all 0.1s ease-in-out;
                color: #5d87ff !important;
            }

            @media (max-width:720px) {
                .hilang {
                    display: none;
                }

                .tengah {
                    display: flex;
                    margin-bottom: 2px;
                    justify-content: center;
                }
            }

            @media(min-width: 1300px) {
                .hilang-gambar {
                    display: none;
                }
            }

            .kecil {
                font-size: 12px;
            }

            /* Tambahkan aturan serupa untuk setiap tautan yang lain jika diperlukan */
        </style>
        <ul class="navbar-nav quick-links d-none d-xl-flex">
            <li class="nav-item dropdown-hover d-none d-xl-block">
                <a class="nav-link {{ request()->routeIs('dashboard-admin') ? 'active1' : '' }}"
                    href="{{ route('dashboard-admin') }}">Dashboard</a>
            </li>
            <li class="nav-item dropdown-hover d-none d-xl-block">
                <a class="nav-link {{ request()->routeIs('approval') ||  request()->routeIs('user.cv') ||  request()->routeIs('user.lamaran') ||  request()->routeIs('detail-user') ? 'active1' : '' }}"
                    href="{{ route('approval') }}">Approval</a>
            </li>
            <li class="nav-item dropdown-hover d-none d-xl-block">
                <a class="nav-link {{ request()->routeIs('lulus') ? 'active1' : '' }}"
                    href="{{ route('lulus') }}">Pekerja</a>
            </li>
            <li class="nav-item dropdown-hover d-none d-xl-block">
                <a class="nav-link {{ request()->routeIs('pekerja') ? 'active1' : '' }}"
                    href="{{ route('pekerja') }}">Pekerja Diterima</a>
            </li>
            <li class="nav-item dropdown-hover d-none d-xl-block">
                <a class="nav-link {{ request()->routeIs('pekerja-ditolak') ? 'active1' : '' }}"
                    href="{{ route('pekerja-ditolak') }}">Pekerja Ditolak</a>
            </li>
            <li class="nav-item dropdown-hover d-none d-xl-block">
                <a class="nav-link {{ request()->routeIs('pekerja-disimpan') ? 'active1' : '' }}"
                    href="{{ route('pekerja-disimpan') }}">Pekerja Disimpan</a>
            </li>
            <li class="nav-item dropdown-hover d-none d-xl-block">
                <a class="nav-link {{ request()->routeIs('lowongan.index') ? 'active1' : '' }}"
                    href="{{ route('lowongan.index') }}">Lowongan</a>
            </li>
        </ul>


        <div class=" navbar-collapse justify-content-end" id="navbarNav">
            <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                <a href="javascript:void(0)"
                    class="nav-link round-40 p-1 ps-0 d-flex d-xl-none align-items-center justify-content-center"
                    type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                    aria-controls="offcanvasWithBothOptions">
                    <i class="ti ti-align-justified fs-7"></i>
                </a>


                <ul class="navbar-nav flex-row  align-items-center justify-content-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="user-profile-img">

                                    <img src="{{ asset('assets/logo.png') }}" style="width: 35px; height: 35px;" />


                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                            aria-labelledby="drop1">
                            <div class="profile-dropdown position-relative" data-simplebar>
                                <div class="py-3 px-7 pb-0">
                                    <h5 class="mb-0 fs-5 fw-semibold">Admin Profil</h5>
                                </div>

                                <div class="row align-items-center py-9 mx-2 border-bottom">
                                    <div class="col-12 col-md-3 tengah ">
                                        <div
                                            style="width: 60px; height: 60px; border-radius: 50%; overflow: hidden; text-align: center; vertical-align: middle; line-height: 35px;">

                                            <img src="{{ asset('assets/logo.png') }}" class="img-fluid rounded-circle"
                                                style="width: 100%; height: 100%;" alt="" />
                                        </div>
                                    </div>

                                    <div class=" col-12 col-md-9">
                                        <h5 class="mb-1 row fs-3 tengah"> <i
                                                class="ti col-1 ti-user fs-5 me-1 hilang"></i>
                                            <p class="kecil col-10 tengah">Admin</p>
                                        </h5>
                                        <span class="mb-0 row text-dark align-items-center  tengah "
                                            style="max-width:100%; overflow: hidden">
                                            <i class="ti ti-mail col-1 fs-5 me-1 hilang"></i>
                                            <p class="kecil col-10 tengah">
                                                {{ Auth()->user()->email }}</p>
                                        </span>
                                    </div>

                                </div>

                                <div class="d-grid py-4 px-7 pt-8">
                                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-primary btn-block">Keluar</button>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
