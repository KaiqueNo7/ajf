<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link :href="route('edit.id', $propertyId)" :active="request()->routeIs('edit.id')" wire:navigate>
        Principal
    </x-nav-link>
    <x-nav-link :href="route('additional-infos.id', $propertyId)" :active="request()->routeIs('additional-infos.id')" wire:navigate>
        Informações adicionais
    </x-nav-link>
    <x-nav-link :href="route('photos.id', $propertyId)" :active="request()->routeIs('photos.id')" wire:navigate>
        Imagens
    </x-nav-link>
</div>