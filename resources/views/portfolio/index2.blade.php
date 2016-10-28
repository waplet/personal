@extends('layouts.sidebar')

@section('layout_content')
    <div class="portfolio">
        @forelse ($products as $product)
            <div class="row">
                <div class="portfolio__row">
                    {{ $product->title }}
                </div>
            </div>
        @empty
            <h2 class="text-center">Sorry, currently we have no products</h2>
        @endforelse
    </div>
@endsection

@section('sidebar_content')
    <div class="categories">
        <div class="categories__title">Categories</div>
        <div class="categories__content">
            <span class="category__item category__item--active">ASD</span>
            <span class="category__item">ASDFDF</span>
            <span class="category__item">Phalcon</span>
            <span class="category__item">Symfony</span>
            <span class="category__item">Laravel</span>
            <span class="category__item">Javascript</span>
            <span class="category__item">Haskell</span>
            <span class="category__item">Opensource</span>
        </div>
    </div>
@endsection