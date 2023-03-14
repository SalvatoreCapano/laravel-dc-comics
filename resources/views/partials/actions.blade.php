<?php
$actions = [
    [
        'imgUrl' => 'buy-comics-digital-comics.png',
        'title' => 'digital comics',
    ],
    [
        'imgUrl' => 'buy-comics-merchandise.png',
        'title' => 'dc merchandise',
    ],
    [
        'imgUrl' => 'buy-comics-subscriptions.png',
        'title' => 'subscriptions',
    ],
    [
        'imgUrl' => 'buy-comics-shop-locator.png',
        'title' => 'comic shop locator',
    ],
    [
        'imgUrl' => 'buy-dc-power-visa.svg',
        'title' => 'dc power visa',
    ],
];
?>


<ul class="actionsList">
    @foreach ($actions as $action)    
    <li>
        <a href="#">
            <div class="imgContainer">
                <img src="{{ Vite::asset('resources/images/') . $action['imgUrl'] }}" alt="img">
            </div> <!-- /imgContainer-->
            <span class="textContainer">
                {{ $action['title'] }}
            </span> <!-- /textContainer-->
        </a>
    </li>
    @endforeach
</ul>