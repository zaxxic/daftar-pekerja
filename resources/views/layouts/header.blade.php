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
            .navbar-nav .nav-item .nav-link.active {
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
            @media(min-width: 1300px){
                .hilang {
                    display: none;
                }
            }

            /* Tambahkan aturan serupa untuk setiap tautan yang lain jika diperlukan */
        </style>
        <ul class="navbar-nav quick-links d-none d-xl-flex">
            <li class="nav-item dropdown-hover d-none d-xl-block">
                <a class="nav-link {{ request()->routeIs('dashboard-admin') ? 'active' : '' }}"
                    href="{{ route('dashboard-admin') }}">Dashboard</a>
            </li>
            <li class="nav-item dropdown-hover d-none d-xl-block">
                <a class="nav-link {{ request()->routeIs('approval') ? 'active' : '' }}"
                    href="{{ route('approval') }}">Approval</a>
            </li>
            <li class="nav-item dropdown-hover d-none d-xl-block">
                <a class="nav-link {{ request()->routeIs('pekerja') ? 'active' : '' }}"
                    href="{{ route('pekerja') }}">Pekerja</a>
            </li>
            <li class="nav-item dropdown-hover d-none d-xl-block">
                <a class="nav-link {{ request()->routeIs('pekerja-ditolak') ? 'active' : '' }}"
                    href="{{ route('pekerja-ditolak') }}">Pekerja Ditolak</a>
            </li>
            <li class="nav-item dropdown-hover d-none d-xl-block">
                <a class="nav-link {{ request()->routeIs('lowongan.index') ? 'active' : '' }}"
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

                <a href="#" class=" hilang">
                    <img src="{{ asset('assets/hummatech.png') }}" width="120" alt="" />
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
                                <div class="py-3 px-7 pb-0"> <!-- Teks di tengah -->
                                    <h5 class="mb-0 fs-5 fw-semibold">Admin Profil</h5>
                                </div>
                                <div class="d-flex align-items-center py-9 mx-7 border-bottom">

                                    <div class="ms-3"> <!-- Teks di tengah -->
                                        <h5 class="mb-1 fs-3"><i
                                                class="ti ti-user fs-5 me-1"></i>Admin</h5>
                                        <p class="mb-0 d-flex text-dark align-items-center gap-2">
                                            <i class="ti ti-mail fs-5"></i>{{ Auth()->user()->email }}
                                        </p>
                                    </div>

                                </div>

                                <div class="d-grid py-4 px-7 pt-8"> <!-- Tombol logout memanjang -->
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
