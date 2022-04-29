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

    <section class="main-content main-content-comic">
        <div class="container-narrow">
            <div class="column-left">

                <h1 class="comic-title">{{ $comic['title'] }}</h1>

                <div class="box-price-and-availability">
                    <div class="price-and-availability">
                        <div>
                            <span class="text-opaque">U.S. Price: </span>
                            <span>{{ $comic['price'] }}</span>
                        </div>
                        <span class="text-opaque">AVAILABLE</span>

                    </div>
                    <button>Check Availability <i class="fa-solid fa-caret-down"></i></button>
                </div>

                <p class="comic-description">{{ $comic['description'] }}</p>

            </div>
            <div class="column-right">
                <h3 class="adv-title">ADVERTISEMENT</h3>
                <img src="../images/adv.jpg" alt="Advertisement">
            </div>
        </div>
    </section>

    @include('partials.menucontent2')
@endsection
