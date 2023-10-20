<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="landpage.css">
    <title>{{ config('app.name') }}</title>

    <script src="https://kit.fontawesome.com/0418b2283a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link id="theme1" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/vs2015.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>

    <!-- and it's easy to individually load additional languages -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/languages/go.min.js"></script>

    <script>hljs.highlightAll();</script>
    

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400&display=swap');

        
    </style>
</head>

<body class="antialiased h-screen  bg-darkfundo scrollbar-thin scrollbar-rounded-lg hover:scrollbar-thumb-maincolor-300 scrollbar-thumb-menubg scrollbar-track-transparent">
    @include('layouts.navigation')
    <!--Conteúdo da página-->
    {{ $slot }}

</body>
<script src="scriptlandpage.js">

</script>
</html>