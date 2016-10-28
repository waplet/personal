@extends('layouts.sidebar')

@section('layout_content')
    <div class="portfolio">
        @forelse ($products as $product)
        <div class="col-xs-6 col-lg-4 nopadding">
            <div class="portfolio__block">
                <div class="portfolio__block__image">
                    <a href="{{ url('/portfolio/' . $product->slug) }}">
                        <img src="{{ url($product->getFeaturedImage()) }}"
                             class="img-responsive"/>
                    </a>
                    <div class="portfolio__block__overlay">
                        <a class="portfolio__block__overlay__title" href="{{ url('/portfolio/' . $product->slug) }}">{{ $product->title }}</a>
                        <p class="portfolio__block__overlay__description">{{ $product->description }}</p>
                    </div>
                </div>
                {{--<div class="portfolio__block__info">--}}
                    {{--<h3 class="portfolio__block__info__title"><a href="{{ url('/portfolio/' . $product->slug) }}" class="">{{ $product->title }}</a></h3>--}}
                    {{--<div class="row">--}}
                        {{--<span class="portfolio__block__info__price {{ $product->price ? 'bg-warning' : 'bg-success' }} btn">{{ $product->price ? $product->price : 'Free'}}</span>--}}
{{--                        <a href="{{ $product->price ? url('/contact-me') : url($product->url) }}" class="btn btn-default">{{ $product->price ? 'Purchase' : 'Download' }}</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
        @empty
            <h2 class="text-center">Sorry, currently we have no products</h2>
        @endforelse
    </div>
@endsection

@section('sidebar_content')
    Sidebar
@endsection