<div>
    <div x-data="data={countAlpine : @entangle('count')}">
        <button type="button"  wire:click='increment' class="btn btn-outline-danger " data-toggle="button" role="button" aria-pressed="true">
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
    </div>
</div>
