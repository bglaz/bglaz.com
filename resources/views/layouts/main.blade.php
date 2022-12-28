<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>BGlaz.com - Personsal Website &amp; portfolio of Brian Glaz</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">        

        {{--  <link rel="manifest" href="site.webmanifest">  --}}
        {{--  <link rel="apple-touch-icon" href="icon.png">  --}}
        <!-- Place favicon.ico in the root directory -->

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Merriweather" rel="stylesheet">
        <script src="https://use.fontawesome.com/066baa518b.js"></script>
        @vite(['node_modules/normalize.css/normalize.css', 'resources/assets/sass/app.scss', 'resources/assets/js/app.js'])
    </head>
    <body>
        @include('partials/header')
        <main>
            @yield('content')
        </main>
        @include('partials/footer')
    </body>
</html>