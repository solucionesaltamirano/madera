<x-admin-layout>
    <x-slot name="header">
        Chat
    </x-slot>
    <x-slot name="pageHeader">
        Chat
        <i class="fal fa-comments"></i>
    </x-slot>
    <x-slot name="cardTitle">
        <i class="fal fa-comments"></i>
        <span class="mx-2">
            Select a contact 
        </span>
    </x-slot>
    <x-slot name="cardButton">
        <a href="{{ route('auth.chat-room') }}" class="btn btn-outline-primary float-right">
            <span class="mx-2">Chat Room</span>
            <i class="fal fa-users-class"></i>
        </a>
    </x-slot>

    {{-- body --}}
    
        @include('flash::message')
        @livewire('chat-livewire')
</x-admin-layout>