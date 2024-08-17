<x-app-layout>
    <div class="grid grid-cols-4 gap-4 sm:p-6 lg:p-8">
        <div class="h-28 bg-gray-700 shadow-lg rounded-lg p-3 relative">
            <h2 class="text-xl font-normal text-white">Imóveis cadastrados</h2>
            <p class="text-3xl font-bold text-orange-500 my-2">{{ $countProperties }}</p>

            <div class="flex justify-center items-center absolute top-5 right-5 w-10 h-10 bg-blue-400 rounded-xl">
                <i class="fa-solid fa-home text-blue-800"></i>
            </div>
        </div>

        <div class="h-28 bg-gray-700 shadow-lg rounded-lg p-3 relative">
            <h2 class="text-xl font-normal text-white">Total de visualizações</h2>
            <p class="text-3xl font-bold text-orange-500 my-2">{{ $countViews }}</p>

            <div class="flex justify-center items-center absolute top-5 right-5 w-10 h-10 bg-green-400 rounded-xl">
                <i class="fa-solid fa-chart-line text-green-800"></i>
            </div>
        </div>

        <div class="h-28 bg-gray-700 shadow-lg rounded-lg p-3 relative">
            <h2 class="text-xl font-normal text-white">Mais visto</h2>
            <p class="text-3xl font-bold text-orange-500 my-2">{{ $moreViews }}</p>

            <div class="flex justify-center items-center absolute top-5 right-5 w-10 h-10 bg-yellow-400 rounded-xl">
                <i class="fa-solid fa-star text-yellow-800"></i>
            </div>
        </div>

        <div class="h-28 bg-gray-700 shadow-lg rounded-lg p-3 relative">
            <h2 class="text-xl font-normal text-white">Visualizações hoje</h2>
            <p class="text-3xl font-bold text-orange-500 my-2">{{ $countViewsToday }}</p>

            <div class="flex justify-center items-center absolute top-5 right-5 w-10 h-10 bg-red-400 rounded-xl">
                <i class="fa-solid fa-calendar-day text-red-800"></i>
            </div>
        </div>

        <a class="w-full" href="{{ route('new.property') }}">
            <div class="h-full bg-gray-700 shadow-lg rounded-lg flex justify-center items-center text-white flex-col border border-transparent hover:border-white transition-all">
                Adicionar imóvel
                <i class="fa-solid fa-circle-plus my-2 text-3xl"></i>
            </div>
        </a>

        <livewire:viewsGraph />
    </div>
</x-app-layout>
