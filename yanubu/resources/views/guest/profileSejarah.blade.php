@extends('layouts.app')

@section('content')
<section id="title" class="d-flex align-items-center mt-4">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="title-section">
                <h1>SEJARAH YAYASAN NURUL BURHAN</h1>
            </div>
        </div>
    </div>
</section>

<section id="sejarah" class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <img src="{{ asset('assets/img/nurul-burhan.jpeg') }}" class="img1 shadow rounded" alt="">
            </div>
            <div class="col-lg-9 d-flex align-items-center">
                <p>Pesantren pelajar islam ‘’NURUL BURHAN’’ pesantren ini berada di bawah naungan Yayasan Nurul Burhan (YANUBU )yang terletak di daerah yang subur karena dikelilingi persawahan, sebelah utara berbatasan dengan Madrasah Aliyah Negeri (MAN) Bondowoso, sebelah timur berbatasan dengan kompleks pemakaman, sebelah barat dan selatan berbatasan dengan  area persawahan. Pesantren Pelajar Islam Nurul Burhan yang terletak di area perkotaan Kelurahan Badean Kabupaten Bondowoso tampak begitu asri dengan suasana alam persawahan yang jauh dari kesan perkotaan yang dikenal dengan panas dan gerah.  </p>
            </div>
        </div>
    </div>
</section>

@endsection
