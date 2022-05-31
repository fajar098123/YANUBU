@extends('layouts.app')

@section('content')
<section id="title" class="d-flex align-items-center">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="title-section">
                <h1>ARTIKEL</h1>
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
                <div class="date">6 Oct 2017</div>
                <div class="tags">
                    <div class="tag">{{ $artikel->author }}</div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</section>
@endsection
