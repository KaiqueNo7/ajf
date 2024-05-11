<div class="">
    <form wire:submit='{{ $formAction }}'>

        <label for="nome">Nome</label>
        <input type="text" wire:model='name' placeholder="nome">
        @error('name') <span class="error">{{ $message }}</span> @enderror 

        <label for="status">Status</label>
        <input type="text" wire:model='status' placeholder="status">
        @error('status') <span class="error">{{ $message }}</span> @enderror 

        <label for="project">Projeto</label>
        <input type="text" wire:model='project' placeholder="projeto">
        @error('project') <span class="error">{{ $message }}</span> @enderror 

        <label for="plant">Planta</label>
        <input type="text" wire:model='plant' placeholder="planta">
        @error('plant') <span class="error">{{ $message }}</span> @enderror 

        <label for="size">Metragem</label>
        <input type="text" wire:model='size' placeholder="metragem">
        @error('size') <span class="error">{{ $message }}</span> @enderror 

        <label for="bedrooms">Quartos</label>
        <input type="text" wire:model='bedrooms' placeholder="quartos">
        @error('bedrooms') <span class="error">{{ $message }}</span> @enderror 

        <label for="bathrooms">Banheiros</label>
        <input type="text" wire:model='bathrooms' placeholder="banheiros">
        @error('bathrooms') <span class="error">{{ $message }}</span> @enderror 

        <label for="address">Endereço</label>
        <input type="text" wire:model='address' placeholder="endereço">
        @error('address') <span class="error">{{ $message }}</span> @enderror 

        <label for="maps">Google Maps Link</label>
        <input type="text" wire:model='maps' placeholder="maps">
        @error('maps') <span class="error">{{ $message }}</span> @enderror 
        <button class="text-white" type="submit">{{ $action }}</button>
    </form>