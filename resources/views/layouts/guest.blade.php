@props(['login'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Code Assist') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-branco antialiased">
    
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-darkfundo">
        <div class="grid grid-cols-2 w-full h-full">
        <div class="justify-self-end justify-item-center max-w-lg h-full pr-20">
@if($login == true)
        <h1 class="text-maincolor-100 uppercase text-center align-top text-4xl">Faça seu login</h1>
        <img src="{{ asset('images/login.png') }}" class="w-full " alt="" >
@else
        <h1 class="text-maincolor-100 uppercase text-center align-top text-4xl">Cadastre-se</h1>
        <img src="{{ asset('images/register.png') }}" class="w-full " alt="" >
@endif  
        
        
        
        </div>
        <div class="pl-20">
        <div class="max-w-md px-10 py-10 bg-menubg items-center dark:bg-menubg shadow-md overflow-hidden sm:rounded-lg">
        <div class="flex justify-center items-center">
        <a href="/" class="text-center">
            <img src="{{ asset('images/logobranco.png') }}" alt="Code Assist" width="100px" height="100px">
        </a>
        </div>
                <div class="font-medium text-sm text-green-600 dark:text-green-400"></div>
                {{ $slot }}
            </div>
        </div>
        </div>
    </body>
</html>
