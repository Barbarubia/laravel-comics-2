@extends('template.base')

@section('title', 'Comic')

@section('content')

    <section class="thumb-comic">
        <div class="container-narrow">
            <div class="thumb-container">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <span class="label label-type">{{ $comic['type'] }}</span>
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

    <section class="comic-details">
        <div class="container-narrow">
            <div class="column-left">
                <div class="row">
                    <h2>Talent</h2>
                </div>
                <div class="row">
                    <div class="column-left">
                        <h3>Art by:</h3>
                    </div>
                    <div class="column-right">
                        @foreach ($comic['artists'] as $artist)
                            <span class="list-artists">{{ $artist }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="column-left">
                        <h3>Written by:</h3>
                    </div>
                    <div class="column-right">
                        @foreach ($comic['writers'] as $writer)
                            <span class="list-writers">{{ $writer }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="column-right">
                <div class="row">
                    <h2>Specs</h2>
                </div>
                <div class="row">
                    <div class="column-left">
                        <h3>Series:</h3>
                    </div>
                    <div class="column-right">
                        <span class="text-series">{{ $comic['series'] }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="column-left">
                        <h3>U.S. Price:</h3>
                    </div>
                    <div class="column-right">
                        <span><strong>{{ $comic['price'] }}</strong></span>
                    </div>
                </div>
                <div class="row">
                    <div class="column-left">
                        <h3>On Sale Date:</h3>
                    </div>
                    <div class="column-right">
                        <span><strong>{{ $comic['sale_date'] }}</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.menucontent2')
@endsection
