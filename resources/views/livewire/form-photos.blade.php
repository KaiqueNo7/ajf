<div>
    @foreach ($photosProperty as $photo)
        <img src="{{ asset('storage/' . $photo->photo) }}" alt="foto do imóvel" style="max-width: 100px;">
        <button wire:click='delete({{ $photo->id }})'>Delete</button>
    @endforeach


    <form wire:submit="save({{ $propertyId }})">
        <input type="file" wire:model="photos" multiple>
    
        @error('photos.*') <span class="error">{{ $message }}</span> @enderror
    
        <button type="submit">Save photo</button>
    </form>
</div>