<?php
$arraypage = [
    [
        'url'=> '/',
        'name'=> 'home',
        'stato'=> false
    ], [
        'url'=> '/',
        'name'=> 'comics',
        'stato'=> true
    ], [
        'url'=> '/',
        'name'=> 'movies',
        'stato'=> false
    ], [
        'url'=> '/',
        'name'=> 'tv',
        'stato'=> false
    ], [
        'url'=> '/',
        'name'=> 'games',
        'stato'=> false
    ], [
        'url'=> '/',
        'name'=> 'collectibles',
        'stato'=> false
    ], [
        'url'=> '/',
        'name'=> 'videos',
        'stato'=> false
    ], [
        'url'=> '/',
        'name'=> 'fans',
        'stato'=> false
    ], [
        'url'=> '/',
        'name'=> 'news',
        'stato'=> false
    ], [
        'url'=> '/',
        'name'=> 'shop',
        'stato'=> false
    ],
]
?>

<header>
    <nav>
        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="logo dc">
        <ul>
            @foreach( $arraypage as $elem )
            <li>
                <a href="{{ $elem['url'] }}">{{ $elem['name'] }}</a>
            </li>
            @endforeach
        </ul>
    </nav>
</header>