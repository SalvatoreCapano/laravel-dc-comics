@php
    $footerLists = [
        [
            'title' => 'dc comics',
            'elements' => ['characters', 'comics', 'movies', 'tv', 'games', 'videos', 'news'],
        ],
        [
            'title' => 'shop',
            'elements' => ['shop DC', 'shop DC collectibles'],
        ],
        [
            'title' => 'dc',
            'elements' => ['terms of use', 'privacy polici', 'ad choices', 'advertising', 'jobs', 'subscriptions', 'talent workshops', 'CPSC', 'certificates', 'ratings', 'shop help', 'contact us'],
        ],
        [
            'title' => 'sites',
            'elements' => ['DC', 'MAD magazine', 'DC kids', 'DC universe', 'DC power visa'],
        ],
    ];
    $socialLinks = [
        [
            'name' => 'Facebook',
            'imgUrl' => 'footer-facebook.png',
        ],
        [
            'name' => 'Twitter',
            'imgUrl' => 'footer-twitter.png',
        ],
        [
            'name' => 'Youtube',
            'imgUrl' => 'footer-youtube.png',
        ],
        [
            'name' => 'Pinterest',
            'imgUrl' => 'footer-pinterest.png',
        ],
        [
            'name' => 'Periscope',
            'imgUrl' => 'footer-periscope.png',
        ],
    ];
@endphp

<footer>
    <div class="container">

        <section class="footerNav">
            <div class="container">
                <div class="textContainer">
                    @foreach ($footerLists as $footerList)
                        <div class="col">
                            <h3 class="footerListTitle">{{ $footerList['title'] }}</h3>

                            <ul class="footerList">

                                @foreach ($footerList['elements'] as $footerEl)
                                    <li>
                                        <a href="#">{{ $footerEl }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </div> <!-- /col-->
                    @endforeach
                </div> <!-- /textContainer-->
                <div class="imgContainer">
                    <img src="{{ Vite::asset('resources/images/dc-logo-bg.png') }}" alt="">
                </div> <!-- /imgContainer-->
            </div> <!-- /container-->
        </section>

        <section class="footerSocial">
            <div class="container">
                <button class="ctaBtn">
                    sign-up now!
                </button>
                <div class="socials">
                    <h3 class="ctaText">follow us</h3>
                    <div>
                        <ul class="socialList">
                            @foreach ($socialLinks as $el)
                                <li>
                                    <a href="#">
                                        <img src="{{ Vite::asset( 'resources/images/' ).$el['imgUrl'] }}" alt="">
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div> <!-- /container-->
        </section>

    </div> <!-- /container-->
</footer>