@extends('template.base')

@section('title', 'Comics')

@section('content')
    <section class="main-content main-content-comics">
        <div class="container comics-container">
            <h1 class="title">Current Series</h1>
            <div class="cards-container">
                @foreach ($comics as $comic)
                    <div class="comic-card">
                        <a href="{{ route('comic', $comic['id']) }}">
                            <div class="serie-thumb">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                            </div>
                            <span class="serie-title">{{ $comic['series'] }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
            <button>Load More</button>
        </div>
    </section>

    @include('partials.menucontent')
@endsection
