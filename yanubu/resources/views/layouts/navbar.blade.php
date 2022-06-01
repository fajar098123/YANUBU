<div className="Navbar">
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
      <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/"><img src={{ asset('assets/img/yanubu.png') }} alt="" class="img-fluid" /></a></h1>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href={{ url('/') }}>Home</a></li>
            <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href={{ url('sejarah-visi-misi') }}>Sejarah, Visi & Misi</a></li>
                <li><a href="/profilpengurus">Profil Pengurus</a></li>
              </ul>
            </li>
            {{-- <li><a class="nav-link scrollto" href="/fasilitas">Fasilitas</a></li> --}}
            <li><a class="nav-link scrollto" href={{ url('galeri') }}>Galeri</a></li>
            <li><a class="nav-link scrollto" href={{ url('artikel') }}>Artikel</a></li>
            <li class="dropdown"><a href="#"><span>Download</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li>
                    <a href="#">
                        <span>Brosur Pendaftaran</span>
                        <i class="bx bxs-download bx-sm mt-1"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Formulir Pendaftaran</span>
                        <i class="bx bxs-download bx-sm mt-1"></i>
                    </a>
                </li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href={{ url('kontak') }}>Kontak</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

        <!-- .navbar -->

      </div>
    </header>

    <!-- End Header -->

  </div>
