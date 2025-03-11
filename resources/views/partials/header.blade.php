<header class="fixed top-0 left-0 w-full z-50 px-12 py-7">
    <div class="h-20 flex xl:justify-between lg:justify-between justify-center items-center bg-gray-800 shadow-lg rounded-full py-4 px-6">
        <livewire:button-search />

        <div class="flex justify-end gap-4 items-center">
            <a href="{{ route('home') }}"><img class="size-14" src="{{ asset('/storage/logo.png') }}" alt="Logo AJF Imóveis"></a>
        </div>
    </div>
</header>