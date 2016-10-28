@extends('base')

@section('content')
    <div class="container">
        <div class="col-sm-9 content">@yield('layout_content')</div>
        <div class="col-sm-3 sidebar">@yield('sidebar_content')</div>
    </div>
@endsection