<?php

/** $product Product */
?>
@extends('base')

@section('content')
<div class="container">
    <div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
        <div class="row">
                <h3>{{ $product->title }}</h3>
        </div>
        <div class="row">
            <div class="col-sm-6">
                {{ $product->description }}
            </div>
        </div>
    </div>
</div>
@endsection
