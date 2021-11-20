<x-admin-layout>
    <x-slot name="header">
        User External Auth
    </x-slot>

    <x-slot name="pageHeader">
            User External Auth
            <i class="fal fa-handshake"></i>
    </x-slot>

    <x-slot name="cardTitle">
        <i class="fal fa-table"></i>
        <span class="mx-2">
            User External Auth
        </span>
    </x-slot>

    <x-slot name="cardButton">
        <a href="{{ route('externalAuths.create') }}" class="btn btn-outline-primary float-right">
            <span class="mx-2">New</span>
            <i class="fal fa-layer-plus"></i>
        </a>
    </x-slot>

    {{-- body --}}
    <div class="px-1">
        @include('flash::message')
        @include('admin.external_auths.table')
    </div>
</x-admin-layout>



