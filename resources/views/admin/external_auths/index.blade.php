<x-admin-layout>
    <x-slot name="header">
        External Auths
    </x-slot>
    <x-slot name="pageHeader">
        External Auths
        <i class="fal fa-handshake"></i>
    </x-slot>
    <x-slot name="cardTitle">
        <i class="fal fa-table"></i>
        <span class="mx-2">
            External Auths
        </span>
    </x-slot>
    @can('externalAuths.create')
        <x-slot name="cardButton">
            <a href="{{ route('externalAuths.create') }}" class="btn btn-outline-primary float-right">
                <span class="mx-2">New</span>
                <i class="fal fa-layer-plus"></i>
            </a>
        </x-slot>
    @endcan

    {{-- body --}}
    <div class="px-1">
        @include('flash::message')
        @include('admin.external_auths.table')
    </div>
</x-admin-layout>