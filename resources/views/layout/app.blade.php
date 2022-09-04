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
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles
</head>
    <body x-data="{errorLogin: true}">
        @if(Route::currentRouteName() == 'login' && \Illuminate\Support\Facades\Auth::check() == false)
            @yield('content')
        @elseif(Route::currentRouteName() != 'login' && \Illuminate\Support\Facades\Auth::check() == true)
            <x-menu>
                @yield('content')
            </x-menu>
        @endif
        @livewireScripts
    </body>
</html>
