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
            Chats
        </span>
    </x-slot>

    {{-- body --}}
    
        @include('flash::message')
        @livewire('chat-room-livewire')
    
</x-admin-layout>