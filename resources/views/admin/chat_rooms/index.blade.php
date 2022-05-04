<x-admin-layout>
    <x-slot name="header">
        Chat Rooms
    </x-slot>
    <x-slot name="pageHeader">
        Chat Rooms
        <i class="fal fa-handshake"></i>
    </x-slot>
    <x-slot name="cardTitle">
        <i class="fal fa-table"></i>
        <span class="mx-2">
            Chat Rooms
        </span>
    </x-slot>
    @can('chatRooms.create')
        <x-slot name="cardButton">
            <a href="{{ route('chatRooms.create') }}" class="btn btn-outline-primary float-right">
                <span class="mx-2">New</span>
                <i class="fal fa-layer-plus"></i>
            </a>
        </x-slot>
    @endcan

    {{-- body --}}
    <div class="px-1">
        @include('flash::message')
        @push('scripts')
            @include('layouts.datatables_js')
        @endpush
        @push('styles')
            @include('layouts.datatables_css')
        @endpush
        @include('admin.chat_rooms.table')
    </div>
</x-admin-layout>