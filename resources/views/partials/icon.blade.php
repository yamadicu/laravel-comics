<?php 

$icons =[
    [
        "nome"=> "digital comics",
        "path"=> "resources/images/buy-comics-digital-comics.png"
    ], 
    [
        "nome"=> "dc merchandise",
        "path"=> "resources/images/buy-comics-merchandise.png"
    ], 
    [
        "nome"=> "subscription",
        "path"=> "resources/images/buy-comics-subscriptions.png"
    ],
    [
        "nome"=> "comics shop location",
        "path"=> "resources/images/buy-comics-shop-locator.png"
    ], 
    [
        "nome"=> "dc power visa",
        "path"=> "resources/images/buy-dc-power-visa.svg"
    ],
]

?>


<div id="bg-blue">
        <div class="merch">
            <ul>
                @foreach( $icons as $elem)
                <li>
                    <img src="{{ $elem['path'] }}">
                    <span class="icon-text white">{{ $elem['nome'] }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>