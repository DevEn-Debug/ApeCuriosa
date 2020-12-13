<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>L'Ape Curiosa</title>
        <link rel="icon" href="img/comb.png" type="image/icon type">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">


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
