<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('new.property') }}">
                <div class="w-60 h-56 my-4 bg-gray-700 shadow-lg rounded-lg flex justify-center items-center text-white flex-col border border-transparent hover:border-white transition-all">
                    Adicionar imóvel
                    <i class="fa-solid fa-circle-plus my-2 text-3xl"></i>
                </div>
            </a>


            <livewire:viewsGraph />
        </div>
    </div>
</x-app-layout>
