<div>
    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-4">
        @foreach ($photosProperty as $photo)
        <div class="relative w-full h-48">
            <img src="{{ asset('storage/' . $photo->photo) }}" alt="foto do imóvel" class="absolute w-full h-full left-0 top-0 object-contain z-0 bg-gray-800">
            <button type="button" wire:click='delete({{ $photo->id }})' class="absolute bottom-3 left-3"><i class="fa-solid fa-trash text-red-500 hover:text-red-400"></i></button>
        </div>
        @endforeach
    </div>


    <form wire:submit="save({{ $propertyId }})">
        <input type="file" wire:model="photos" multiple accept="image/*">
    
        @error('photos.*') <span class="error">{{ $message }}</span> @enderror
    
        <button type="submit">Save photo</button>
    </form>
</div>