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
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 py-2">
                <img src="{{ asset('assets/img/nurul-burhan.jpeg') }}" class="img1 shadow rounded" alt="">
            </div>
            <div class="col-lg-9 d-flex align-items-center py-2">
                <p>Pesantren pelajar islam ‘’NURUL BURHAN’’ pesantren ini berada di bawah naungan Yayasan Nurul Burhan (YANUBU )yang terletak di daerah yang subur karena dikelilingi persawahan, sebelah utara berbatasan dengan Madrasah Aliyah Negeri (MAN) Bondowoso, sebelah timur berbatasan dengan kompleks pemakaman, sebelah barat dan selatan berbatasan dengan  area persawahan. Pesantren Pelajar Islam Nurul Burhan yang terletak di area perkotaan Kelurahan Badean Kabupaten Bondowoso tampak begitu asri dengan suasana alam persawahan yang jauh dari kesan perkotaan yang dikenal dengan panas dan gerah.  </p>
            </div>
            <div class="col-lg-8 d-flex align-items-center py-2">
                <p>Sejatinya, KH. Imam Barmawi Burhan-lah pendiri sekaligus pengasuh di pesantren ini. Berawal dari obsesi beliau untuk menciptakan generasi muda yang Qur’ani dalam rangka menciptakan kader-kader penerus ulama dan pemimpin bangsa. Terbersitlah keinginan beliau untuk mendirikan sebuah  pesantren yang mengutamakan ilmun hal namun tetap berprofesi sebagai pelajar pada awal-awal tahun 2005. Akhirya terpilihlah sebuah lahan kosong di sebelah selatan MAN Bondowoso. </p>
            </div>
            <div class="col-lg-4 py-2">
                <img src="{{ asset('assets/img/kh-imam-barnawi.jpeg') }}" class="img2 shadow rounded" alt="">
            </div>
            <div class="col-lg-12 py-2">
                <p>Pada awal pendiriannya, Pesantren Pelajar Islam Nurul Burhan ini mendapat tantangan berupa tanah yang ditempati dikuasai oleh seorang cina. Tapi, Alhamdulillah, dengan niat ikhlas lillahita’ala dan mengagungkan ilmu Allah semata, tanah itu dapat dibeli untuk tujuan mendirikan pesantren pelajar islam. Pada awal tahun 2006, santri yang mondok di pesantren ini sebanyak 33 santri, hingga tahun ini santri yang telah dan sedang mondok di pesantren ini sebanyak 501 santri. termasuk di dalamnya santri-santri yang mengenyam di bangku Madrasah Tsanawiyah (MTs), sekolah menengah pertama (SMP), Sekolah Menengah Kejuruan (SMK), Madrasah Aliyah (MA) dan juga Mahasiswa</p>
            </div>
            <div class="col-lg-12 d-flex justify-content-center py-2">
                <img src="{{ asset('assets/img/pengurus.jpg') }}" class="img3 shadow rounded" alt="">
            </div>
            <div class="col-lg-12 d-flex align-items-center py-2">
                <p>Siapa sangka, yang pada awalnya berupa lahan sepi, gelap dan terkenal ‘angker’ menurut animo masyarakat sekitar, kini berubah menjadi bagian dari mercusuar peradaban islam di daerah bondowoso. Pada awal berdirinya, pesantren ini masih berdiri sebagai bangunan kumuh dimana sarana dan prasarana-nya masih terbatas. Tapi seiring berjalannya waktu, sedikit demi sedikit pesantren ini mulai berkembang. Pembangunan yang dilakukan terus berkelanjutan hingga saat ini, di tahun 2019 sarana dan prasarana yang ada sudah cukup untuk memenuhi kebutuhan para santri. Sarana dan prasarana tersebut diantaranya : 13 kamar untuk santri, musholla, ruang sholawat, perpustakaan, Ruang tamu, 14 kamar mandi santri, jemuran, Lapangan, dan Gedung Sumber. Ditambah satu ruangan baru yakni Ruang Kesehatan.</p>
            </div>
            <div class="col-lg-12 visi-misi">
                <h4 class="text-center">5 Ciri Khas (Visi Misi) pesantren</h4>
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item">Tiada hari tanpa al Qur’an</li>
                    <li class="list-group-item">Tiada waktu tanpa sholat berjamaah</li>
                    <li class="list-group-item">Tiada hari tanpa sholawat</li>
                    <li class="list-group-item">Tidak berperilaku yang tidak diridloi Allah swt</li>
                    <li class="list-group-item">Membiasakan pola hidup bersih</li>
                </ol>
            </div>
        </div>

    </div>
</section>

@endsection
