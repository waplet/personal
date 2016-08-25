@extends('base')

@section('content')
    <div class="col-xs-6 col-xs-offset-3">
        <!--  https://www.iconfinder.com/iconsets/social-flat -->
        <div class="row text-center">
            <a href="{{ url('http://github.com/waplet') }}">
                <img class="contact__icon" src="{{ asset('images/github.png') }}"/>
            </a>
        </div>
        <div class="row text-center">
            <a href="{{ url('http://facebook.com/waplet') }}">
                <img class="contact__icon" src="{{ asset('images/facebook.png') }}"/>
            </a>
        </div>
        <div class="row text-center">
            <a href="{{ url('http://twitter.com/@waplet') }}">
                <img class="contact__icon" src="{{ asset('images/twitter.png') }}"/>
            </a>
        </div>
    </div>
@endsection