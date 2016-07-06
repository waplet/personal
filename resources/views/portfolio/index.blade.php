@extends('base')

@section('content')
    <div class="container portfolio">
        <div clas="row">
            <div class="col-sm-4 col-xs-6">
                <div class="portfolio__block">
                    <div class="portfolio__block__image">
                        <a href="#">
                            <img src="https://lovescode.com/theme/lovescode/img/parallax/code.jpg"
                                 class="img-responsive"/>
                        </a>
                    </div>
                    <div class="portfolio__block__info">
                        <h3 class="portfolio__block__title"><a href="#" class="">FirstData Latvia plugin</a></h3>
                        <p>
                            <span class="portfolio__block__price bg-success">FREE</span>
                        </p>
                        <a href="#" class="btn btn-default">Download</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="portfolio__block">
                    <div class="portfolio__block__image">
                        <a href="#">
                            <img src="https://lovescode.com/theme/lovescode/img/parallax/code.jpg"
                                 class="img-responsive"/>
                        </a>
                    </div>
                    <div class="portfolio__block__info">
                        <h3 class="portfolio__block__title"><a href="#" class="">FirstData Latvia plugin</a></h3>
                        <p>
                            <span class="portfolio__block__price bg-danger"><b>25€</b></span>
                        </p>
                        <a href="#" class="btn btn-default">Buy</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="portfolio__block">
                    <div class="portfolio__block__image">
                        <a href="#">
                            <img src="https://lovescode.com/theme/lovescode/img/parallax/code.jpg"
                                 class="img-responsive"/>
                        </a>
                    </div>
                    <div class="portfolio__block__info">
                        <h3 class="portfolio__block__title"><a href="#" class="">FirstData Latvia plugin</a></h3>
                        <p>
                            <span class="portfolio__block__price bg-danger"><b>50€</b></span>
                        </p>
                        <a href="#" class="btn btn-default">Buy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection