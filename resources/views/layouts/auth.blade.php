<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('meta-title') | Authentications</title>

        <!-- Favicon -->
        <link href="{{ asset('favicon.ico') }}" rel="icon" type="image/x-icon">

        <!-- Bootstrap -->
        <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Auth Style -->
        <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
    </head>

    <body class="text-center">

        @yield('form-open')        

            <img class="mb-4" src="{{ asset('img/logo.png') }}" alt="" width="150">

            <h1 class="h3 mb-3 font-weight-normal">@yield('title')</h1>

            @yield('content')

            <p class="mt-5 mb-3 text-muted">{!! config('app.copyright') !!}</p>
        
        @yield('form-close')        

        <!-- jQuery -->
        <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    </body>

</html>
