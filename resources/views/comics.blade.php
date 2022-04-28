@extends('template.base')

@section('title', 'Comics')

@section('content')
    <div class="container comics-container">
        <h1 class="title">Current Series</h1>
        <div class="cards-container">
            @foreach ($comics as $comic)
                <div class="comic-card">
                    <div class="serie-thumb">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    </div>
                    <span class="serie-title">{{ $comic['series'] }}</span>
                </div>
            @endforeach
        </div>
        <button>Load More</button>
    </div>
@endsection
