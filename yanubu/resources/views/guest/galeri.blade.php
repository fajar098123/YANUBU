@extends('layouts.app')
@section('content')
{{-- <div class="container-fluid"> --}}

   <div class="body-galeri">


       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        {{-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

        <div class="tz-gallery">
            <section id="title" class="d-flex align-items-center">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <div class="title-section1">
                            <h1>Galeri</h1>
                        </div>
                    </div>
                </div>
            </section>

    <div class="container gallery-container">

            <div class="row">
    
                <div class="col-sm-12 col-md-4">
                    <a class="lightbox" href="{{asset('assets/img/bridge.jpg')}}">
                        <img src="{{asset('assets/img/bridge.jpg')}}" alt="Bridge">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{asset('assets/img/park.jpg')}}">
                        <img src="{{asset('assets/img/park.jpg')}}" alt="Park">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{asset('assets/img/tunnel.jpg')}}">
                        <img src="{{asset('assets/img/tunnel.jpg')}}" alt="Tunnel">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{asset('assets/img/traffic.jpg')}}">
                        <img src="{{asset('assets/img/traffic.jpg')}}" alt="Traffic">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{asset('assets/img/traffic.jpg')}}">
                        <img src="{{asset('assets/img/traffic.jpg')}}" alt="Coast">
                    </a>
                </div> 
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{asset('assets/img/traffic.jpg')}}">
                        <img src="{{asset('assets/img/traffic.jpg')}}" alt="Rails">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{asset('assets/img/traffic.jpg')}}">
                        <img src="{{asset('assets/img/traffic.jpg')}}" alt="Traffic">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{asset('assets/img/traffic.jpg')}}">
                        <img src="{{asset('assets/img/traffic.jpg')}}" alt="Coast">
                    </a>
                </div> 
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{asset('assets/img/traffic.jpg')}}">
                        <img src="{{asset('assets/img/traffic.jpg')}}" alt="Rails">
                    </a>
                </div>
    
            </div>
    
        </div>
    
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script> baguetteBox.run('.tz-gallery'); </script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script> --}}

    


{{-- </div> --}}
</div>
@endsection