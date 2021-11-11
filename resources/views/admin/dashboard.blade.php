<x-admin-layout>
    <x-slot name="header">
        Dashboard CAS
        <i class="fal fa-tachometer-slow"></i>
    </x-slot>

    <x-slot name="cardButton">
        <a href="#" class="btn btn-outline-primary btn-sm float-right">
            <i class="fal fa-plus-circle"></i>
            Nuevo
        </a>
    </x-slot>

    <x-slot name="cardTitle">
        <i class="fal fa-browser"></i> 
        <span class="mx-3">
            TITULO
        </span>
    </x-slot>

    {{-- this is the content of the card --}}
    Cuerpo
    @livewire('test')
    {{-- this is the content of the card --}}
    
</x-admin-layout>