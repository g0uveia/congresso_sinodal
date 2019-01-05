<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/jquery.mask.min.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
        <title></title>
    </head>
    <body>
        @include('navbar')
        @yield('content')
    </body>
</html>
