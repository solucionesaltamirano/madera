<x-admin-layout>
    <x-slot name="header">
        Menus
    </x-slot>
    <x-slot name="pageHeader">
        Menus
        <i class="fal fa-handshake"></i>
    </x-slot>
    <x-slot name="cardTitle">
        <i class="fal fa-table"></i>
        <span class="mx-2">
            Menus
        </span>
    </x-slot>
    {{-- @can('menus.create') --}}
        <x-slot name="cardButton">
            <a href="{{ route('menus.create') }}" class="btn btn-outline-primary float-right">
                <span class="mx-2">New</span>
                <i class="fal fa-layer-plus"></i>
            </a>
        </x-slot>
    {{-- @endcan --}}

    {{-- body --}}
    <div class="px-1">
        @include('flash::message')
        @include('admin.menus.table')
    </div>
</x-admin-layout>