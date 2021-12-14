<x-admin-layout>
    <x-slot name="header">
        Order items list
    </x-slot>

    <div class="card card-primary card-outline ">
        <div class="card-header ">
            <h3 class="card-title">Order items list</h3>
        </div>
        <div class="card-body">
            @include('flash::message')
            @livewire('menus.menu-has-items-livewire')
        </div>
    </div>
</x-admin-layout>