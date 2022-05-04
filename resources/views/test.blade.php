<x-admin-layout>
    <x-slot name="header">
        Test
    </x-slot>
    <x-slot name="pageHeader">
        Test
        <i class="fal fa-laptop-code"></i> {{-- icono --}}
    </x-slot>
    <x-slot name="cardTitle">
        <i class="fal fa-table"></i>
        <span class="mx-2">
            Test
        </span>
    </x-slot>

    {{-- body --}}
    @livewire('test')
</x-admin-layout>