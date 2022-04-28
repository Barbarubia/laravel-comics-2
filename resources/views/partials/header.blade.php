<header>

    <div class="header-top">
        <div class="container">
            <ul>
                <li>
                    <a href="#">DC Power<sup>SM</sup> Visa <i class="fa-regular fa-registered"></i></a>
                </li>
                <li>
                    <a href="#">Additional DC Sites</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/dc-logo.png') }}" alt="Logo">
                </a>
            </div>
            <div class="menu">
                <ul>
                    @php
                        $headermenu = config('headermenu')
                    @endphp

                    @foreach ($headermenu as $menuitem)
                        <li class="{{ in_array(Route::currentRouteName(), $menuitem['route']) ? 'active' : '' }}">
                            <a href="{{ route($menuitem['route'][0]) }}">{{ $menuitem['route'][0] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="search">
                <input type="text" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </div>

</header>
