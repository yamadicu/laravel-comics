@extends ('layout.app')

@section ('title-page') 
    Laravel Comics | Home
@endsection

@section( 'comics' )

    <div class="content">
        <div id="jumbo">
            <img src="resources\images\jumbotron.jpg" alt="">
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

@endsection