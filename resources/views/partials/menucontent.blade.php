<section class="content-menu">
    <ul class="container">
        @php
            $contentmenu = config('contentmenu')
        @endphp

        @foreach ($contentmenu['menu1'] as $menuitem)
            <li>
                <a href="{{ $menuitem['href'] }}">
                    <img src="../images/{{ $menuitem['img'] }}" alt="{{ $menuitem['text'] }}">
                    <span>{{ $menuitem['text'] }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</section>
