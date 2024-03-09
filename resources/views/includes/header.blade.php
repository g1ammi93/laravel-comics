<header>
    <div class="container div-header">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo Dc comics">
        <ul class="ul-header">
            @foreach (config('header_nav') as $nav)
                <li>
                    <a href="{{ config($nav['url']) }}"
                        class="{{ request()->routeIs($nav['url']) ? 'active' : '' }} a-header">{{ $nav['text'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</header>
