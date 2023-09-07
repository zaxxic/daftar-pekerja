<header class="app-header" style=" box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
    <nav class="navbar navbar-expand-xl navbar-light container-fluid px-0">
        <ul class="navbar-nav">
            <li class="nav-item d-none d-xl-block mr-4">
                <a class="logo" href="{{ route('dashboard') }}">
                    <img width="180px" src="assets/hummatech.png" alt="logo">
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

            /* Tambahkan aturan serupa untuk setiap tautan yang lain jika diperlukan */
        </style>
        <ul class="navbar-nav quick-links d-none d-xl-flex">
            <li class="nav-item dropdown-hover d-none d-xl-block">
                <a class="nav-link {{ request()->routeIs('dashboard-user') ? 'active' : '' }}"
                    href="{{ route('dashboard-user') }}">Dashboard</a>
            </li>
            <li class="nav-item dropdown-hover d-none d-xl-block">
                <a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}"
                    href="{{ route('profile') }}">Profile</a>
            </li>
            <li class="nav-item dropdown-hover d-none d-xl-block">
                <a class="nav-link {{ request()->routeIs('lowongan-user') ? 'active' : '' }}"
                    href="{{ route('lowongan-user') }}">Lowongan</a>
            </li>
        </ul>
        <div class="d-block d-xl-none mt-1 mb-2">
            <a href="index.html" class="text-nowrap nav-link">
                <img src="" width="180" alt="" />
            </a>
        </div>
        <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="p-2">
                <i class="ti ti-dots fs-7"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                <a href="javascript:void(0)"
                    class="nav-link round-40 p-1 ps-0 d-flex d-xl-none align-items-center justify-content-center"
                    type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                    aria-controls="offcanvasWithBothOptions">
                    <i class="ti ti-align-justified fs-7"></i>
                </a>
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">

                    <li class="nav-item dropdown">
                        <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="user-profile-img">

                                    @if (Auth::user()->foto == 'default.jpg')
                                        <div class="img-fluid rounded-circle"
                                            style="width: 120px; height: 120px; overflow: hidden;">
                                            <img src="{{ asset('foto_user/default/default.jpg') }}" class="img-fluid"
                                                style="width: 100%; height: auto;" alt="" />
                                        </div>
                                    @else
                                        <div
                                            style="width: 35px; height: 35px; border-radius: 50%; overflow: hidden; text-align: center; vertical-align: middle; line-height: 35px;">
                                            <img src="{{ asset('foto_user/' . Auth()->user()->foto) }}"
                                                style="max-width: 100%; max-height: 100%; vertical-align: middle;"
                                                alt="" />
                                        </div>
                                    @endif



                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                            aria-labelledby="drop1">
                            <div class="profile-dropdown position-relative" data-simplebar>
                                <div class="py-3 px-7 pb-0">
                                    <h5 class="mb-0 fs-5 fw-semibold">User Profil</h5>
                                </div>
                                <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                    <div
                                        style="width: 80px; height: 80px; border-radius: 50%; overflow: hidden; text-align: center; display: flex; justify-content: center; align-items: center;">
                                        <img src="{{ asset('foto_user/' . Auth()->user()->foto) }}"
                                            style="max-width: 125%; max-height: 125%;" alt="" />
                                    </div>

                                    <div class="ms-3">
                                        <h5 class="mb-1 fs-3">{{ Auth()->user()->name }}</h5>
                                        <p class="mb-0 d-flex text-dark align-items-center gap-2">
                                            <i class="ti ti-mail fs-5"></i>{{ Auth()->user()->email }}
                                        </p>
                                    </div>

                                </div>

                                <div class="d-grid py-4 px-7 pt-8">

                                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-primary">Keluar</button>
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
