@extends('template.base')

@section('title', 'Comic')

@section('content')
    <section class="main-content">
        <div class="container">
            <h1>{{ $comic['title'] }}</h1>
        </div>
    </section>

    @include('partials.menucontent2')
@endsection
