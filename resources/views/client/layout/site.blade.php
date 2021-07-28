@extends('client.layout.main')

@section('head')
    <link
            rel="stylesheet"
            type="text/css"
            href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link href="/favicon.ico" rel="shortcut icon">

    <link rel="stylesheet" href="{{ asset('../client/style.css?v=51') }}" />
    @if(app()->getLocale() === 3) 
    // Language Russia
    <link rel="stylesheet" href="{{ asset('../client/font_ru.css?v=51') }}" />
    @elseif(app()->getLocale() === 2)
    // Language English
    <link rel="stylesheet" href="{{ asset('../client/font_en.css?v=51') }}" />
    @else 
    // Language Georgia
    <link rel="stylesheet" href="{{ asset('../client/font_ge.css?v=51') }}" />
    @endif
    @yield('subhead')
@endsection

@section('content')
    @include('client.layout.partial.header')

    @yield('wrapper')

    @include('client.layout.partial.footer')

    <script
            type="text/javascript"
            src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
            type="text/javascript"
            src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script
            type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script src="{{asset('client/general.js')}}"></script>
    <script src="{{asset('client/slide.js')}}"></script>
    <script src="{{asset('client/heroslide.js')}}"></script>
@endsection

