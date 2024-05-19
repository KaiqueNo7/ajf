<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <a href="{{ route('new.property') }}">
                <div class="w-60 h-56 my-4 bg-gray-700 shadow-lg rounded-lg flex justify-center items-center text-white flex-col border border-transparent hover:border-white transition-all">
                    Adicionar imóvel
                    <i class="fa-solid fa-circle-plus my-2 text-3xl"></i>
                </div>
            </a>
        </div>
    </div>
</x-app-layout>
