@extends('base')

@section('content')
    <div class="col-xs-12 col-xs-offset-0 col-sm-4 col-sm-offset-4">
        <!--  https://www.iconfinder.com/iconsets/social-flat -->
        <div class="row contact_row">
            <p>Hello,</p>
            <p>My name is <b>Māris</b>, but on the world wide web I prefer naming myself <b>waplet</b>.</p>
            <p>In 2016 I graduated University of Latvia, Faculty of Computing - <b>BSc Computer Science</b>
            <hr/>
            <p>I have made my career as a <b>Web Developer</b> and topics I am involved in are: <b>PHP, MySQL</b>,
                <span class="half-bold">Symfony, Laravel, Linux</span>, payment gateways, Python, etc.
                Basically everything that is or may come handy as a web developer.
                But that does not mean that I do not want to learn new things. I would really like to try my hand at electronics/hardware.
            </p>
            <p>As a developer I like to create my everyday life easier. All of my open-source apps can be found at my
                <a href="{{ url('http://github.com/waplet') }}">github</a> profile. But I have listed my works also
                in <a href="{{ url('/portfolio') }}">portfolio</a> section</p>
            <hr/>
            <p>If You find me interesting, You can always contact me in any of social sites listed below</p>
        </div>
        <div class="row contact_row">
            <div class="contact_row__block">
                <a href="{{ url('http://github.com/waplet') }}">
                    <img class="contact_row__block__icon" src="{{ asset('images/github.png') }}"/>
                </a>
                <div class="contact_row__block__slider slider-github">Github</div>
            </div>
        </div>
        <div class="row text-center contact_row">
            <div class="contact_row__block">
                <a href="{{ url('https://lv.linkedin.com/in/waplet') }}">
                    <img class="contact_row__block__icon" src="{{ asset('images/linkedin.png') }}"/>
                </a>
                <div class="contact_row__block__slider slider-linkedin">LinkedIn</div>
            </div>
        </div>
        <div class="row text-center contact_row">
            <div class="contact_row__block">
                <a href="{{ url('http://twitter.com/@waplet') }}">
                    <img class="contact_row__block__icon" src="{{ asset('images/twitter.png') }}"/>
                </a>
                <div class="contact_row__block__slider slider-twitter">Twitter</div>
            </div>
        </div>
        <div class="row text-center contact_row">
            <div class="contact_row__block">
                <a href="{{ url('http://facebook.com/waplet') }}">
                    <img class="contact_row__block__icon" src="{{ asset('images/facebook.png') }}"/>
                </a>
                <div class="contact_row__block__slider slider-facebook">Facebook</div>
            </div>
        </div>
    </div>
@endsection