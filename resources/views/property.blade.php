<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AJF Imóveis | {{ $property->name }}</title>
        <meta name="description" content="Encontre as melhores oportunidades de imóvel, de forma simples, rápida e sem burocracia.">
        <link rel="icon" href="{{ asset('/storage/logo.ico') }}" type="image/x-icon">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        @include('partials.header')
        
        @include('partials.property.home')

        @include('partials.property.about')
        
        @include('partials.property.contact-info')

        @include('partials.property.characteristics')

        @include('partials.footer')
    </body>    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mySwiper = new Swiper('#principal-slide', {
                slidesPerView: 1,
                effect: "fade",
                loop: true,
                pagination: {
                    el: '#swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });

        function inserirMapa(endereco) {
            var enderecoEncoded = encodeURIComponent(endereco);

            var url = `https://www.google.com/maps?q=${enderecoEncoded}&output=embed`;

            var iframe = document.createElement('iframe');
            iframe.width = '100%';
            iframe.height = '400';
            iframe.style.border = '0';
            iframe.style.borderRadius  = '1em';
            iframe.src = url;
            iframe.allowFullscreen = true;


            var mapaContainer = document.getElementById('mapa-container');
            mapaContainer.innerHTML = '';
            mapaContainer.appendChild(iframe);
        }

        var endereco = '{{ $property->address }}';

        inserirMapa(endereco);
    </script>
</html>
