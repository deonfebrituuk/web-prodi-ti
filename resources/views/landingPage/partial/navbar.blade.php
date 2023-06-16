          <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">
                      Teknik<span class="fs-5">Informatika</span></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('home') }} " class="nav-item nav-link {{ request()->is('home') ? 'active' : '' }} ">Home</a>
                        <a href="{{ route('profil') }}" class="nav-item nav-link {{ request()->is('profil') ? 'active' : '' }}">Profil</a>
                        <a href="{{ route('mahasiswa') }}" class="nav-item nav-link {{ request()->is('mahasiswa') ? 'active' : '' }}">Mahasiswa</a>
                        <a href="{{ route('dosen') }}" class="nav-item nav-link {{ request()->is('dosen') ? 'active' : '' }}">Dosen</a>
                        <a href="{{ route('kegiatan') }}" class="nav-item nav-link {{ request()->is('kegiatan') ? 'active' : '' }}">Kegiatan</a>
                        <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div> --}}
                        {{-- <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
                    </div>
                    {{-- <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                    <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Pro Version</a> --}}
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">{{ $profil->visi }}</h1>
                            <p class="text-white pb-3 animated zoomIn">
                                {{$profil->misi}}
                            </p>
                            {{-- <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Free Quote</a>
                            <a href="" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a> --}}
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>