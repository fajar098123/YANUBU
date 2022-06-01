@extends('layouts.app')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up"
                data-aos-delay="200">
                <h1>Selamat Datang</h1>
                <h2 class="col-lg-5 d-flex flex-column">di Website <span>Yayasan Nurul Burhan</span> Bondowoso</h2>
                <div class="d-flex justify-content-center">
                    <a href="https://www.instagram.com/yayasan_nurul_burhan/" target="_blank" class="btn-sosmed"><i
                            class="bx bxl-instagram-alt"></i><span>yayasan_nurul_burhan</span></a>
                    <a href="https://www.youtube.com/c/YayasanNurulBurhan" class="btn-sosmed"><i
                            class='bx bxl-youtube'></i><span>Yayasan Nurul Burhan</span></a>
                    <a href="https://www.facebook.com/yayasan.nurulburhan" class="btn-sosmed"><i
                            class='bx bxl-facebook-square'></i><span>Yayasan Nurul Burhan</span></a>
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <!-- ======= Profile Section ======= -->

    {{-- <section class="wrapper">
        <div class="container">

            <div class="row">
                <div class="col-md-3 pb-2">
                    <div class="card text-white card-has-bg click-col  shadow"
                        style="background-image: url({{asset('assets/img/img1.png')}})">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <h4 class="card-title mt-0 "><a class="text-white" herf="#">PPI PUTRA - NURUL BURHAN</a>
                                </h4>
                                <p class="card-meta mb-2">Untuk Info lebih lengkap terkait PPI PUTRA - NURUL BURHAN dapat di
                                    lihat di sini</p>
                                <a class="" href="#">
                                    <h5 class="d-inline">Baca Selengkapnya</h5><i
                                        class='bx bxs-chevron-right bx-xs'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb-2">
                    <div class="card text-white card-has-bg click-col shadow"
                        style="background-image: url({{asset('assets/img/img2.png')}})">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <h4 class="card-title mt-0 "><a class="text-white" herf="#">PPI PUTRA - NURUL BURHAN</a>
                                </h4>
                                <p class="card-meta mb-2">Untuk Info lebih lengkap terkait PPI PUTRA - NURUL BURHAN dapat di
                                    lihat di sini</p>
                                <a class="" href="#">
                                    <h5 class="d-inline">Baca Selengkapnya</h5><i
                                        class='bx bxs-chevron-right bx-xs'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb-2">
                    <div class="card text-white card-has-bg click-col shadow"
                        style="background-image: url({{asset('assets/img/img3.png')}})">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <h4 class="card-title mt-0 "><a class="text-white" herf="#">PPI PUTRA - NURUL BURHAN</a>
                                </h4>
                                <p class="card-meta mb-2">Untuk Info lebih lengkap terkait PPI PUTRA - NURUL BURHAN dapat di
                                    lihat di sini</p>
                                <a class="" href="#">
                                    <h5 class="d-inline">Baca Selengkapnya</h5><i
                                        class='bx bxs-chevron-right bx-xs'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb-2">
                    <div class="card text-white card-has-bg click-col shadow"
                        style="background-image: url('{{asset('assets/img/img4.png')}}')">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <h4 class="card-title mt-0 "><a class="text-white" herf="#">PPI PUTRA - NURUL BURHAN</a>
                                </h4>
                                <p class="card-meta mb-2">Untuk Info lebih lengkap terkait PPI PUTRA - NURUL BURHAN dapat di
                                    lihat di sini</p>
                                <a class="" href="#">
                                    <h5 class="d-inline">Baca Selengkapnya</h5><i
                                        class='bx bxs-chevron-right bx-xs'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ======= Blog Section ======= -->

    <section id="title" class="d-flex align-items-center">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="title-section">
                    <h1>ARTIKEL</h1>
                </div>
                <div class="read-more d-flex align-items-center">
                    <a class="btn-read-more" href="{{ url('/artikel')}}">
                        <h5 class="d-inline">Baca Selengkapnya</h5>
                        <i class='bx bxs-chevron-right bx-xs'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="cards-wrapper-blog">
        @foreach($dtArtikel as $artikel)
        <div class="card-grid-space">
            <a class="card-blog" href="#" style="--bg-img: url('{{ $artikel->thumbnail }}')">
                <div>
                    <h1>{{ $artikel->judul }}</h1>
                    <p>{{ Str::limit($artikel->content, 75, '...') }}</p>
                    <div class="date">{{ Str::limit($artikel->updated_at, 10,' ') }}</div>
                    <div class="tags">
                        <div class="tag">{{ $artikel->author }}</div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </section>

    <!-- ======= Gallery Section ======= -->

    <section id="title" class="d-flex align-items-center">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="title-section">
                    <h1>GALERI</h1>
                </div>
                <div class="read-more d-flex align-items-center">
                    <a class="btn-read-more" href="{{ url('/galeri')}}">
                        <h5 class="d-inline">Lihat Selengkapnya</h5>
                        <i class='bx bxs-chevron-right bx-xs'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="cards-wrapper-gallery">
        {{-- @foreach ($dtGaleri as $galeri)
        <div class="card-grid-space">
            <a class="card-gallery" href="{{ asset($galeri->foto) }}" target="_blank" style="--bg-img: url({{ asset($galeri->foto) }})">
                <div>
                    <h6>{{ $galeri->caption }}</h6>
                </div>
            </a>
        </div>
        @endforeach --}}
        <div class="card-grid-space">
            <a class="card-gallery" href="#" style="--bg-img: url({{asset('assets/img/img3.png')}})">
                <div>
                    <h6>Links, images and about file paths</h6>
                </div>
            </a>
        </div>
        <div class="card-grid-space">
            <a class="card-gallery" href="#" style="--bg-img: url({{asset('assets/img/img3.png')}})">
                <div>
                    <h6>Links, images and about file paths</h6>
                </div>
            </a>
        </div>
    </section>

    <!-- ======= Youtube Section ======= -->

    <section id="youtube">
        <div class="container">
            <div class="row m-2">
                <div class="col-md-8">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/6P0IHXfU3ps"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <h4>
                        Official Youtube Channel Yayasan Nurul Burhan
                    </h4>
                    <hr>
                    <hr>
                </div>
            </div>
        </div>
    </section>

    <section id="title" class="d-flex align-items-center">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="title-section">
                    <h1>TESTIMONI</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption">
                        <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code,
                            I don't know what will.This was the very best explanation of frameworks for brginners
                            that I've ever seen.
                        </p>
                        <img src="{{asset('assets/img/testi1.jpeg')}}">
                        <div id="image-caption">Nick Doe</div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code,
                            I don't know what will.This was the very best explanation of frameworks for brginners
                            that I've ever seen.</p>
                        <img src="{{asset('assets/img/testi1.jpeg')}}">
                        <div id="image-caption">Cromption Greves</div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code,
                            I don't know what will.This was the very best explanation of frameworks for brginners
                            that I've ever seen.</p>
                        <img src="{{asset('assets/img/testi1.jpeg')}}">
                        <div id="image-caption">Harry Mon</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
