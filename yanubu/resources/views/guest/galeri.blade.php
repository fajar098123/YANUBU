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
                @foreach ($dtGaleri as $galeri)
                <div class="col-sm-12 col-md-4">
                    <a class="lightbox" href="{{ asset($galeri->foto) }}">
                        <img src="{{ asset($galeri->foto) }}" alt="{{ $galeri->caption }}">
                    </a>
                    <p class="page-description">{{ $galeri->caption }}</p>
                </div>
                @endforeach
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
