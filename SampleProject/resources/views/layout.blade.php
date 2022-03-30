<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <!-- <link rel="stylesheet" href="{{ asset('/css/haed.css') }}"> -->
    　
</head>
    <body>
        <div class="header">
            @include('header')
        </div>
        <div class="container">
        @yield('content')      
        </div>
    </body>
</html>
