<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-4 gap-4 sm:p-6 lg:p-8">
        <a class="w-full" href="{{ route('new.property') }}">
            <div class="h-full bg-gray-700 shadow-lg rounded-lg flex justify-center items-center text-white flex-col border border-transparent hover:border-white transition-all">
                Adicionar imóvel
                <i class="fa-solid fa-circle-plus my-2 text-3xl"></i>
            </div>
        </a>

        <livewire:viewsGraph />
    </div>
</x-app-layout>
