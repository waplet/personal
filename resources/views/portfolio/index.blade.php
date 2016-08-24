@extends('base')

@section('content')
    <div class="container portfolio">
        @forelse ($products as $product)
        <div class="col-sm-4 col-xs-6">
            <div class="portfolio__block">
                <div class="portfolio__block__image">
                    <a href="{{ url('/portfolio/' . $product->slug) }}">
                        <img src="{{ url($product->getFeaturedImage()) }}"
                             class="img-responsive"/>
                    </a>
                </div>
                <div class="portfolio__block__info">
                    <h3 class="portfolio__block__title"><a href="{{ url('/portfolio/' . $product->slug) }}" class="">{{ $product->title }}</a></h3>
                    <p>
                        <span class="portfolio__block__price bg-success">{{ $product->price ? $product->price . ' €' : 'Free'}}</span>
                    </p>
                    <a href="{{ url($product->url) }}" class="btn btn-default">Download</a>
                </div>
            </div>
        </div>
        @empty
            <h3>Sorry, currently we have no products</h3>
        @endforelse
    </div>
@endsection