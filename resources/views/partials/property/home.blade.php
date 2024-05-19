<section class="w-full h-screen relative flex justify-start items-end px-5 py-10">
    <img src="{{ asset('storage/' . $property->image) }}" alt="Rio de Janeiro" class="absolute w-full h-full left-0 top-0 object-cover z-0">
    <div class="relative z-20">
        <h1 class="text-white text-5xl font-light">{{ $property->name }}</h1>
        <p class="text-white">{{ $property->project }}</p>
        <div class="flex justify-start items-center gap-4 mt-4">
            <x-button-link>{{ $property->status }}</x-button-link>
            <x-button-link>Fale com corretor</x-button-link>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 w-full h-96 z-10 bg-gradient-to-t from-slate-900 to-transparent"></div>
</section>