<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>App Name - @yield('title')</title>
    @livewireStyles
</head>
    <body>
        @if(Route::currentRouteName() == 'login')
            @yield('content')
        @else
            <x-menu>
                @yield('content')
            </x-menu>
        @endif
        @livewireScripts
    </body>
</html>
