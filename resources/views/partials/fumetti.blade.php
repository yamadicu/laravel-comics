
<div class="content">
    <div id="jumbo">
        <div class="container">
            <div id="serie">
                <span>current series</span>
            </div>
            <div id="cont-fumetti">
                <div class="row">
                    @foreach( $comics as $elem)
                    <div class="col-2">
                        <div class="card">
                            <img src="{{ $elem['thumb'] }}" alt="">
                            <div class="card-body">
                                <h6 class="card-title">{{ $elem['series'] }}</h6>
                                <p class="card-text">{{ $elem['price'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div id="load-cont">
                <div>
                    <span class="white">load more</span>
                </div>
            </div>
        </div>
    </div>
</div>

