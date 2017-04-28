<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <title>@yield("title") - RFID</title>
    </head>
    <body>
        @include('partials.nav')

        <section class="section">
            <div class="container">
                @yield('content')
            </div>
        </section>
    </body>
</html>
