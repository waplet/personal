@extends('base')

@section('content')
    <div class="container portfolio">
        @forelse ($products as $product)
            <div class="row ">
                <div class="col-sm-8 col-sm-offset-2 portfolio__row">
                    {{ $product->title }}
                </div>
            </div>
        @empty
            <h2 class="text-center">Sorry, currently we have no products</h2>
        @endforelse
    </div>
@endsection