<x-admin-layout>
    <x-slot name="header">
        Create Items From Routes
    </x-slot>

    <div class="card card-primary card-outline ">
        <div class="card-header ">
            <h3 class="card-title">Create Items From Routes</h3>
        </div>
        <div class="card-body">
            @include('flash::message')
            @livewire('items.from-routes-livewire')
        </div>
    </div>
</x-admin-layout>