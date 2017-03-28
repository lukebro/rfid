<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bulma.css') }}"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>RFID | @yield("title")</title>
    </head>
    <body>
        <section class="hero is-primary is-bold is-fullheight">
            <div class="hero-head">
                <header class="nav">
                    <div class="container">
                        <div class="nav-center" style="align-items: center;">
                            <span class="icon is-medium">
                                <i class="fa fa-database" aria-hidden="true"></i>
                            </span>
                            <span><h1 class="title is-4">RFID</h1></span>
                        </div>
                        @yield("nav")
                    </div>
                </header>
            </div>
            <div class="hero-body">
                <div class="container has-text-centered">
                    @yield("content")
                </div>
            </div>
        </section>
    </body>
</html>
