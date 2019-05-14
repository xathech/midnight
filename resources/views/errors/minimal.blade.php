<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #200040;
                font-family: 'Nunito', sans-serif;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .message {
                font-size: 28px;
                text-align: center;
            }
        </style>
    </head>
    <body class="text-light">
        <div class="flex-center position-ref full-height">
            <h1 class="border-right border-warning px-3 text-center display-1">
                @yield('code')
            </h1>

            <div class="message p-3">
                <div>@yield('message')</div>
                <a class="btn btn-outline-warning mt-2" href="{{ route('home') }}">{{ __('Go back') }}</a>
            </div>
        </div>
    </body>
</html>
