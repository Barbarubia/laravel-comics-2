<section class="content-menu-2">
    <ul class="container-narrow">
        @php
            $contentmenu = config('contentmenu')
        @endphp

        @foreach ($contentmenu['menu2'] as $menuitem)
            <li>
                <a href="{{ $menuitem['href'] }}">
                    <span>{{ $menuitem['text'] }}</span>
                    {{-- Icona inserita con CSS Sprites --}}
                    <span class="icon {{ $menuitem['iconClass'] }}"></span>
                    {{-- <img src="../images/{{ $menuitem['img'] }}" alt="{{ $menuitem['text'] }}"> --}}
                </a>
            </li>
        @endforeach
    </ul>
</section>

