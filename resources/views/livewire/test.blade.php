<div>
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

        <div class="btn btn-outline-success"x-on:click="$wire.emit('showToast', 'TITLE SUCCESS')">success</div>
        <div class="btn btn-outline-danger" x-on:click="$wire.emit('showToast', 'TITLE ERROR', 'error')">error</div>
        <div class="btn btn-outline-warning" x-on:click="$wire.emit('showToast', 'TITLE WARNING', 'warning')">warning</div>
        <div class="btn btn-outline-info" x-on:click="$wire.emit('showToast', 'TITLE INFO', 'info')">info</div>
    </div>

    @livewire('partial.toast', [
        'title' => 'This is info Toast',
        'icon' => 'info',
    ])
</div>
