@extends('template.base')

@section('title', 'Comic')

@section('content')

    <section class="thumb-comic">
        <div class="container-narrow">
            <div class="thumb-container">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <span class="label label-comic-book">Comic Book</span>
                <span class="label label-view-gallery">View Gallery</span>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container-narrow">
            <h1>{{ $comic['title'] }}</h1>
        </div>
    </section>

    @include('partials.menucontent2')
@endsection
