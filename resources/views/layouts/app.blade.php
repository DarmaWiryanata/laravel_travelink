<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Destino</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Destino project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/fontawesome-free-5.14.0-web/css/all.min.css') }}">
        @yield('css')

        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>

    <div class="super_container">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </div>

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('css/bootstrap4/popper.js') }}"></script>
    @yield('js')
    </body>
</html>