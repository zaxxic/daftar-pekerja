<header class="app-header">
    <nav class="navbar navbar-expand-xl navbar-light container-fluid px-0">
        <ul class="navbar-nav">
            <li class="nav-item d-none d-xl-block mr-4">
                <a class="logo" href="{{ route('dashboard') }}">
                    <img width="180px" src="assets/hummas.png" alt="logo">
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

        <div class="d-block d-xl-none mt-1 mb-2">
            <a href="index.html" class="text-nowrap nav-link">
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg"
                    width="180" alt="" />
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
                    <div class="col-12">
                        <li class="nav-item dropdown">
                            <div class="d-flex align-items-center">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-primary mt- justify-content-center"
                                        sty>Log
                                        Out</button>
                                </form>
                            </div>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</header>
