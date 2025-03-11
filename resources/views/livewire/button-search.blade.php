<div class="w-2/3 relative">
    <div class="text-white rounded-full h-full xl:flex lg:flex md:flex justify-start pl-5 bg-slate-600 items-center hidden">
        <i class="fa fa-search"></i>
        <input type="text" wire:model.live="search" class="w-full bg-transparent border-none placeholder:text-white focus:outline-none focus:ring-0" placeholder="Buscar imóveis">
    </div>

    @if ($searchProperties->isNotEmpty())
        <ul class="absolute top-12 left-0 w-full bg-slate-700 shadow-lg rounded-lg overflow-hidden">
            @foreach ($searchProperties as $searchProperty)
                <li class="border-b last:border-none" wire:key="{{ $searchProperty->id }}">
                    <a class="flex p-2 hover:bg-slate-500 transition" href='{{ $searchProperty->url }}'>
                        <p class="text-gray-300 font-semibold">{{ $searchProperty->name }}</p>
                        <p class="text-gray-200 text-sm">{{ $searchProperty->location }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</div>