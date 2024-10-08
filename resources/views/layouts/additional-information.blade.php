<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">{{ $property->name ?? "Adicionando novo imóvel"; }}</h2>
            @if($property)
             <x-navigation-property :propertyId='$property->id'></x-navigation-property>
            @endif
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:form-additional-information :property_id="$property->id ?? ''">
        </div>
    </div>
</x-app-layout>

<script>
    function toggleInformation(id){
        let inputElement = document.getElementById(id);

        if (inputElement) {
            inputElement.classList.add('pointer-events-none');
            inputElement.focus();

            const length = inputElement.value.length;
                inputElement.setSelectionRange(length, length);
        }
    };
</script>