<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
        <script src="{{asset('js/Chart.min.js')}}"></script>
        <script src="{{asset('js/donut.js')}}"></script>
        <title></title>
    </head>
    <body>
        <div class="cs-wrapper">
            @include('_includes.navbar')

            <div class="cs-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
