<header class="fixed top-0 left-0 w-full z-50 p-2">
    <div class="w-100 flex xl:justify-between lg:justify-between justify-center items-center bg-gray-800 shadow-lg rounded-md py-2 px-4">
        <div class="xl:flex lg:flex md:lg:flex justify-start gap-4 items-center text-white w-full hidden">
            <a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Início</a>
            <a href="#"><i class="fa-solid fa-chart-simple"></i> Calcule seu financiamento</a>
            <a href="tel:+5521995131494"><i class="fa-brands fa-whatsapp"></i> (21) 99513-1494</a>
        </div>
        <a href="{{ route('home') }}"><img class="size-16" src="{{ asset('/storage/logo.png') }}" alt="Logo AJF Imóveis"></a>
    </div>
</header>