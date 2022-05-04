<x-admin-layout>
    <x-slot name="header">
        Create Permissions from existing Routes
    </x-slot>

    <div class="card card-primary card-outline ">
        <div class="card-header ">
            <h3 class="card-title">Create Permissions from existing Routes</h3>
        </div>
        <div class="card-body">
            @include('flash::message')
            @livewire('permissions.from-routes')
        </div>
    </div>
</x-admin-layout>