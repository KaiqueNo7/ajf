<x-mail::message>
# Dados do cliente

O client
@foreach($dadosClient as $key => $value)
    <li><strong>{{ $key }}:</strong> {{ $value }}</li>
@endforeach

{{ config('app.name') }}
</x-mail::message>
