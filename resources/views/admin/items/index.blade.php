<x-admin-layout>
    <x-slot name="header">
        Items
    </x-slot>
    <x-slot name="pageHeader">
        Items
        <i class="fal fa-handshake"></i>
    </x-slot>
    <x-slot name="cardTitle">
        <i class="fal fa-table"></i>
        <span class="mx-2">
            Items
        </span>
    </x-slot>
    {{-- @can('items.create') --}}
        <x-slot name="cardButton">
            <a href="{{ route('items.create') }}" class="btn btn-outline-primary float-right">
                <span class="mx-2">New</span>
                <i class="fal fa-layer-plus"></i>
            </a>
        </x-slot>
    {{-- @endcan --}}

    {{-- body --}}
    <div class="px-1">
        @include('flash::message')
        @include('admin.items.table')
    </div>
</x-admin-layout>