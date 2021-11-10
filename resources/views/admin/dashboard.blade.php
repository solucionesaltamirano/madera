<x-admin-layout>
    <x-slot name="header">
        HEADER
    </x-slot>

    <x-slot name="buttonHeader">
        <i class="fal fa-plus-circle"></i>
        Nuevo
    </x-slot>

    <x-slot name="cardTitle">
        <i class="fal fa-browser"></i> 
        <span class="mx-3">
            TITULO
        </span>
    </x-slot>

    <div class="">
        Cuerpo
        @livewire('test')
    </div>

    

</x-admin-layout>