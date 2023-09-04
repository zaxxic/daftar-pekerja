<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
  <nav class="sidebar-nav scroll-sidebar">
    <div class="offcanvas-header justify-content-between">
      <img width="200" src="{{asset('assets/hummas.png')}}" alt="" class="img-fluid">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body profile-dropdown mobile-navbar" data-simplebar="" data-simplebar>
      <ul id="sidebarnav">
        <li class="sidebar-item">
          <a class="sidebar-link nav-link {{ request()->routeIs('dashboard-admin') ? 'active' : '' }}" href="{{ route('dashboard-admin') }}" aria-expanded="false">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                <path fill="currentColor" d="M3 3h8v8H3V3Zm2 2v4v-4Zm8-2h8v8h-8V3Zm2 2v4v-4ZM3 13h8v8H3v-8Zm2 2v4v-4Zm11-2h2v3h3v2h-3v3h-2v-3h-3v-2h3v-3Zm-1-8v4h4V5h-4ZM5 5v4h4V5H5Zm0 10v4h4v-4H5Z" />
              </svg>
            </span>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link nav-link {{ request()->routeIs('approval') ? 'active' : '' }}" href="{{ route('approval') }}" aria-expanded="false">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                <path fill="currentColor" d="M22 5.18L10.59 16.6l-4.24-4.24l1.41-1.41l2.83 2.83l10-10L22 5.18zm-2.21 5.04c.13.57.21 1.17.21 1.78c0 4.42-3.58 8-8 8s-8-3.58-8-8s3.58-8 8-8c1.58 0 3.04.46 4.28 1.25l1.44-1.44A9.9 9.9 0 0 0 12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10c0-1.19-.22-2.33-.6-3.39l-1.61 1.61z" />
              </svg>
            </span>
            <span class="hide-menu">Approval</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link nav-link {{ request()->routeIs('pekerja') ? 'active' : '' }}" href="{{ route('pekerja') }}" aria-expanded="false">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                <path fill="currentColor" d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2s-2-.9-2-2s.9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4s4-1.79 4-4s-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
              </svg>
            </span>
            <span class="hide-menu">Pekerja</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link nav-link {{ request()->routeIs('pekerja-ditolak') ? 'active' : '' }}" href="{{ route('pekerja-ditolak') }}" aria-expanded="false">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                <path fill="currentColor" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zM4 12c0-4.42 3.58-8 8-8c1.85 0 3.55.63 4.9 1.69L5.69 16.9A7.902 7.902 0 0 1 4 12zm8 8c-1.85 0-3.55-.63-4.9-1.69L18.31 7.1A7.902 7.902 0 0 1 20 12c0 4.42-3.58 8-8 8z" />
              </svg>
            </span>
            <span class="hide-menu">Pekerja Ditolak</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link nav-link {{ request()->routeIs('lowogan.index') ? 'active' : '' }}" href="{{ route('lowongan.index') }}" aria-expanded="false">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                <path fill="currentColor" d="m11.99 18.54l-7.37-5.73L3 14.07l9 7l9-7l-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7l-9 7l1.63 1.27L12 16zm0-11.47L17.74 9L12 13.47L6.26 9L12 4.53z" />
              </svg>
            </span>
            <span class="hide-menu">Lowongan</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>