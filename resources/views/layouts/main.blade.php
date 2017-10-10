<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>BGLAZ.COM - Personsal Website of Brian Glaz</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">        

        {{--  <link rel="manifest" href="site.webmanifest">  --}}
        {{--  <link rel="apple-touch-icon" href="icon.png">  --}}
        <!-- Place favicon.ico in the root directory -->

        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Merriweather" rel="stylesheet">
        <script src="https://use.fontawesome.com/066baa518b.js"></script>
        <link rel="stylesheet" href="css/all.css">
    </head>
    <body>
        @include('partials/header')
        <main>
            @yield('content')
        </main>
        <script src="js/app.js"></script>
    </body>
</html>