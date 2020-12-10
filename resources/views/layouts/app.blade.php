<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>L'Ape Curiosa</title>
        <link rel="icon" href="img/comb.png" type="image/icon type">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;1,100;1,200&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <script src="{{ asset('js/app.js') }}" ></script>
    </head>
<body>
    <div id="app">
        <img class="logo" src="img/comb2.png" alt="404">
        <main>
            @yield('content')
        </main>
        @include('partials.footer')
    </div>
</body>

</html>
