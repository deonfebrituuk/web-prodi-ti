<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('dashboard.index' ) }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li> --}}
      <!-- End Dashboard Nav -->

      <li class="nav-heading">Pages</li>
      {{-- {{ dd(request()->is('data-mahasiswa')) }} --}}
      <li class="nav-item " >
        <a class="nav-link {{ request()->is('data-mahasiswa/*') || request()->is('data-mahasiswa') ? '' : 'collapsed' }}" href="{{ route('data-mahasiswa.index') }}">
          <i class="bi bi-person"></i>
          <span>Mahasiswa</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link {{ request()->is('data-dosen/*') || request()->is('data-dosen') ? '' : 'collapsed' }}" href="{{ route('data-dosen.index') }}">
           <i class="bi bi-person"></i>
          <span>Dosen</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link nav-link {{ request()->is('data-kegiatan/*') || request()->is('data-kegiatan') ? '' : 'collapsed' }}" href="{{ route('data-kegiatan.index') }}">
          <i class="bi bi-calendar-event"></i>
          <span>Kegiatan</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link nav-link {{ request()->is('data-profil/*') || request()->is('data-profil') ? '' : 'collapsed' }}" href="{{ route('data-profil.index') }}">
          <i class="bi bi-calendar-event"></i>
          <span>Profil Prodi</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link nav-link {{ request()->is('data-tentang/*') || request()->is('data-tentang') ? '' : 'collapsed' }}" href="{{ route('data-tentang.index') }}">
          <i class="bi bi-calendar-event"></i>
          <span>Tentang Prodi</span>
        </a>
      </li><!-- End Contact Page Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li> --}}
      <!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('logout.post') }}">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li> --}}
      <!-- End Error 404 Page Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li> --}}
      <!-- End Blank Page Nav -->

    </ul>

  </aside>