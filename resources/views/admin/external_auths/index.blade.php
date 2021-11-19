<x-admin-layout>
    <x-slot name="header">
        User External Auth
    </x-slot>

    <x-slot name="pageHeader">
        User External Auth
        <i class="fal fa-tachometer-slow"></i>
    </x-slot>

    <x-slot name="cardTitle">
        <i class="fal fa-browser"></i> 
        <span class="mx-3">
            User External Auth
        </span>
    </x-slot>

    <x-slot name="cardButton">
        <a href="{{ route('externalAuths.create') }}" class="btn btn-outline-primary btn-sm float-right">
            <i class="fal fa-plus-circle"></i>
            New
        </a>
    </x-slot>

    {{-- body --}}
    <div class="px-1">
        @include('flash::message')
        @include('admin.external_auths.table')
    </div>
</x-admin-layout>



