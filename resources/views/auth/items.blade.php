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
            @livewire('items.list-select-livewire', [
                'items' => \App\Models\Item::all(),
                'all' => true,
            ])
        </div>
    </div>
    
        
    
</x-admin-layout>