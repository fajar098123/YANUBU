<div className="Navbar">
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
      <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/"><img src={{ asset('assets/img/yanubu.png') }} alt="" class="img-fluid" /></a></h1>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="/">Home</a></li>
            <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href={{ url('sejarah-visi-misi') }}>Sejarah, Visi & Misi</a></li>
                <li><a href="#">Profil Pengurus</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="/fasilitas">Fasilitas</a></li>
            <li><a class="nav-link scrollto" href="/galeri">Galeri</a></li>
            <li><a class="nav-link scrollto" href="/artikel">Artikel</a></li>
            <li class="dropdown"><a href="#"><span>Download</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="#"><span>Brosur Pendaftaran</span><i class='bx bxs-download bx-sm mt-1'></i></a></li>
                <li class="dropdown"><a href="#"><span>Formulir Pendaftaran</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="/kontak">Kontak</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

        <!-- .navbar -->

      </div>
    </header>

    <!-- End Header -->

  </div>
