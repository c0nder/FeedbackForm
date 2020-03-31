<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <link rel="stylesheet" href="/css/main.css">

        @yield('head')
    </head>
    <body>
        <div class="wrapper">
            <div class="container-col center-items">
                <div id="app">
                    @yield('content')
                </div>
            </div>
        </div>

        @yield('scripts')
    </body>
</html>
