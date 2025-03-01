<header class="fixed top-0 left-0 w-full z-50 px-12 py-7">
    <div class="w-100 h-20 flex xl:justify-between lg:justify-between justify-center items-center bg-gray-800 shadow-lg rounded-full py-4 px-6">
        <div class="w-full max-w-2xl min-w-[350px] text-white rounded-full h-full xl:flex lg:flex md:flex justify-start pl-5 bg-slate-600 items-center hidden">
            <i class="fa fa-search"></i>
            <input type="text" class="w-full bg-transparent border-none placeholder:text-white focus:outline-none focus:ring-0" placeholder="Buscar imóveis">
        </div>
        <div class="flex justify-end gap-4 items-center">
            <a href="{{ route('home') }}"><img class=" size-14" src="{{ asset('/storage/logo.png') }}" alt="Logo AJF Imóveis"></a>
        </div>
    </div>
</header>