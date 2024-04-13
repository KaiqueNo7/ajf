<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Novo imóvel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
               <form action="">
                <input type="text" name="name" placeholder="name">
                <input type="text" name="status" placeholder="status">
                <input type="text" name="project" placeholder="project">
                <input type="text" name="plant" placeholder="plant">
                <input type="text" name="size" placeholder="size">
                <input type="text" name="bedrooms" placeholder="bedrooms">
                <input type="text" name="bathrooms" placeholder="bathrooms">
                <input type="text" name="address" placeholder="address">
                <input type="text" name="maps" placeholder="maps">
               </form>
            </div>
        </div>
    </div>
</x-app-layout>
