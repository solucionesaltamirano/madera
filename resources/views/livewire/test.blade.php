<div>
    <div class="py-4 container">
        
        <img src="{{  auth()->user()->profile_photo_path  }}" alt=""><br>
        {{ auth()->user() }}
    </div>
    <div x-data="data={countAlpine : @entangle('count')}">
        <button type="button"  wire:click='increment' class="btn btn-outline-danger " data-toggle="button" role="button" >
            AUMENTAR Livewire
        </button>
        <button type="button" class="btn btn-outline-info" @click="countAlpine = countAlpine + 1" >
            AUMENTAR Alpine
        </button>
        <div>
            Livewire: {{ $count }}
        </div>
        <div>
            Alpine: <span x-text="countAlpine"></span>
        </div>

        <div wire:click="notifyEvent" class="btn btn-warning">
            NOTIFICAR
        </div>

        @if($notification)
            <div class="alert alert-success">
                TRUE
            </div>
        @endif

        <div class="btn btn-outline-success"x-on:click="$wire.emit('showToast', 'TITLE SUCCESS')">success</div>
        <div class="btn btn-outline-danger" x-on:click="$wire.emit('showToast', 'TITLE ERROR', 'error')">error</div>
        <div class="btn btn-outline-warning" x-on:click="$wire.emit('showToast', 'TITLE WARNING', 'warning')">warning</div>
        <div class="btn btn-outline-info" x-on:click="$wire.emit('showToast', 'TITLE INFO', 'info')">info</div>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

    @livewire('partial.toast', [
        'title' => 'This is info Toast',
        'icon' => 'info',
    ])

    <x-modal>

        <x-slot name="title">
            Modal title
        </x-slot>

        <x-slot name="body">
            Modal body text goes here.
        </x-slot>

        <x-slot name="footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </x-slot>
    </x-modal>
    
    
</div>
