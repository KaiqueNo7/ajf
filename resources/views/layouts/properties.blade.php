<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto">

                    <a href="{{ route('new.property') }}">Adicionar novo</a>

                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                            <tr>
                                <th></th>
                                <th scope="col" class="px-6 py-3">Nome do imóvel</th>
                                <th scope="col" class="px-6 py-3">ID do Imóvel</th>
                                <th scope="col" class="px-6 py-3">Status</th>
                                <th scope="col" class="px-6 py-3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($properties as $property)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">
                                    <a href="edit/{{ $property->id }}">edit</a>
                                </td>
                                <td class="px-6 py-4">
                                    {{ $property->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $property->id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $property->address }}
                                </td>
                                <td class="px-6 py-4">
                                {{-- {{ $property->additionalInformation->text }} --}}
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-6 py-4">Nenhum imóvel encontrado.</td>
                            </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
