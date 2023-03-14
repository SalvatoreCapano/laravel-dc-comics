@php
    $navElements = [
        [
            'title' => 'characters',
            'link' => '#',
            'active' => false
        ],
        [
            'title' => 'comics',
            'link' => '/comics',
            'active' => true
        ],
        [
            'title' => 'movies',
            'link' => '/movies',
            'active' => false
        ],
        [
            'title' => 'TV',
            'link' => '#',
            'active' => false
        ],
        [
            'title' => 'games',
            'link' => '#',
            'active' => false
        ],
        [
            'title' => 'collectibles',
            'link' => '#',
            'active' => false
        ],
        [
            'title' => 'videos',
            'link' => '#',
            'active' => false
        ],
        [
            'title' => 'fans',
            'link' => '#',
            'active' => false
        ],
        [
            'title' => 'news',
            'link' => '#',
            'active' => false
        ],
        [
            'title' => 'shop',
            'link' => '#',
            'active' => false
        ],
    ];
@endphp

<header>
    <div class="container">

        <div class="imgContainer">
            <a href="/">
                <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo DC">
            </a>
        </div> <!-- /imgContainer-->

        <nav class="navbar">
            <ul>

                @foreach ($navElements as $el)
                    <li @if ($el['active']) class="active" @endif>
                        <a href="{{ $el['link'] }}">
                            {{ $el['title'] }}
                        </a>
                    </li>
                @endforeach

            </ul>
        </nav>

        <div class="searchbar">
            <input type="text" placeholder="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>

    </div> <!-- /container-->
</header>