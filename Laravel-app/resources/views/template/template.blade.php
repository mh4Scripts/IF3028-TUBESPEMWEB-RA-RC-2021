<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        {{-- <script type="text/javascript" src="{{asset('js/basee.js')}}"></script> --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/template.css') }}">
        @yield('style')
    </head>
<body>
    @yield('content')
    @yield('js')
    @include('include.script')
    <script type="text/javascript" src="{{asset('js/ajax.js')}}"></script>
</body>
</html>