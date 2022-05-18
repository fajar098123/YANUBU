@extends('layouts.app')

@section('content')
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <section id="title" class="d-flex align-items-center">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <div class="title-section">
                            <h1>KONTAK KAMI</h1>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row my-4">
                <div class="col-lg-7 mt-5 mt-lg-0  d-flex align-items-stretch">
                    <div class="info">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.783321694025!2d113.80855591437788!3d-7.917688081010034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6dcd8d16e5aeb%3A0x3f3a7d6097fafea5!2sPPI.%20NURUL%20BURHAN%20BADEAN!5e0!3m2!1sid!2sid!4v1652882185133!5m2!1sid!2sid"
                            width="580" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Jl. Khairil Anwar No.278 B, Tegalbatu Utara, Badean, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68214</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>
                        <div class="image">
                            <img src="/assets/img/yanubu.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
