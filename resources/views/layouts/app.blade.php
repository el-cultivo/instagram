<!doctype html>
<html lang="{{ app()->getLocale() }}" style="height: 100%;">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('images/favicon/apple-touch-icon-57x57.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/favicon/apple-touch-icon-114x114.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/favicon/apple-touch-icon-72x72.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/favicon/apple-touch-icon-144x144.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('images/favicon/apple-touch-icon-60x60.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('images/favicon/apple-touch-icon-120x120.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('images/favicon/apple-touch-icon-76x76.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('images/favicon/apple-touch-icon-152x152.png') }}" />
        <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-196x196.png') }}" sizes="196x196" />
        <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-96x96.png') }}" sizes="96x96" />
        <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-32x32.png') }}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-16x16.png') }}" sizes="16x16" />
        <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-128.png') }}" sizes="128x128" />
        <meta name="application-name" content="&nbsp;"/>
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="{{ asset('images/favicon/mstile-144x144.png') }}" />
        <meta name="msapplication-square70x70logo" content="{{ asset('images/favicon/mstile-70x70.png') }}" />
        <meta name="msapplication-square150x150logo" content="{{ asset('images/favicon/mstile-150x150.png') }}" />
        <meta name="msapplication-wide310x150logo" content="{{ asset('images/favicon/mstile-310x150.png') }}" />
        <meta name="msapplication-square310x310logo" content="{{ asset('images/favicon/mstile-310x310.png') }}" />


        <title>Instagram - El Cultivo</title>
    </head>
    <body style="display: flex; flex-direction: column; height: 100%;">

        <div>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <a href="https://elcultivo.mx" class="d-inline-block my-4">
                            <img src="{{ url('images/logo.png') }}" width="250" alt="">
                        </a>
                    </div>
                </div>
                <hr class="mt-0">
            </div>
        </div>

        <div class="container" style="flex: 1;">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="m-0 p-0" style="list-style: none;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')

        </div>

        <div>
            <div class="container">
                <hr class="mb-0">
                <div class="row">
                    <div class="col text-center">
                        <a href="https://elcultivo.mx" class="d-inline-block my-4">
                            <img src="{{ url('images/logo-footer.png') }}" width="120" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>
