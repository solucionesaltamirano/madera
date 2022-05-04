<x-admin-layout>
    <x-slot name="header">
        Chat Room
    </x-slot>
    {{-- <x-slot name="pageHeader">
        Chat Room
        <i class="fal fa-users-class"></i>
    </x-slot> --}}
    <x-slot name="cardTitle">
        <i class="fal fa-users-class"></i>
        <span class="mx-2">
            Selec a Chat Room
        </span>
    </x-slot>

    <x-slot name="cardButton">
        <a href="{{ route('auth.chat') }}" class="btn btn-sm btn-outline-primary float-right">
            <span class="mx-2">Private Chat</span>
            <i class="fal fa-comments"></i>
        </a>
    </x-slot>

    {{-- body --}}
    
        @include('flash::message')
        @livewire('chat-room-livewire')
    
</x-admin-layout>