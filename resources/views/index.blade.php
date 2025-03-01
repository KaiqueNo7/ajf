<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AJF Imóveis | Os melhores imóveis do Rio de Janeiro</title>
        <meta name="description" content="Encontre as melhores oportunidades de imóvel, de forma simples, rápida e sem burocracia.">
        <link rel="icon" href="{{ asset('/storage/logo.ico') }}" type="image/x-icon">

        <script src="https://kit.fontawesome.com/631534c44e.js" crossorigin="anonymous"></script>
       
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        @php
            function normalizeString($string)
            {
                $string = preg_replace('/[^a-zA-Z0-9\s]/', '', $string);

                $string = str_replace(' ', '-', $string);
            
                $string = strtolower($string);
                return $string;
            } 
        @endphp

        @include('partials.header')

        @include('partials.home')

        @include('partials.principal-properties')

        @include('partials.about')

        @include('partials.footer')
    </body>  
</html>
