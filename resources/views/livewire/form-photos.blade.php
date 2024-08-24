<div>
    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-4 my-4" id="photo-grid">
        @foreach ($photosProperty as $photo)
            <div class="relative w-full h-48" data-id="{{ $photo->id }}">
                <img src="{{ asset('storage/' . $photo->photo) }}" alt="foto do imóvel" class="absolute w-full h-full left-0 top-0 object-contain z-0 bg-gray-800">
                <button type="button" wire:click='delete({{ $photo->id }})' wire:confirm="Tem certeza?" class="absolute bottom-3 left-3"><i class="fa-solid fa-trash text-red-500 hover:text-red-400"></i></button>
            </div>
        @endforeach
    </div>


    <form wire:submit="save({{ $propertyId }})">
        <label for="file_input" class="block mb-2 text-sm font-medium text-white">Anexar fotos</label>
        <input id="file_input" type="file" wire:model="photos" multiple accept="image/*" class="block w-full text-sm text-slate-500
        file:mr-4 file:py-2 file:px-4
        file:rounded file:border-0
        file:text-sm file:font-semibold
        file:bg-orange-50 file:text-orange-700
        hover:file:bg-orange-100
      ">
        <div class="text-slate-500 my-2" wire:loading>Carregando...</div>

        @error('photos.*') <span class="error">{{ $message }}</span> @enderror
        @if ($photos)
            <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded transition mt-2">Confirmar</button>
        @endif
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var el = document.getElementById('photo-grid');
        var sortable = Sortable.create(el, {
            animation: 150,
            onEnd: function (evt) {
                var order = [];
                el.querySelectorAll('[data-id]').forEach(function (element) {
                    order.push(element.getAttribute('data-id'));
                });
                @this.call('updateOrder', order);
            }
        });
    });
</script>
