<div>
    {{-- <div class="py-4">
        
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
    </x-modal> --}}
     
        @foreach ($groups as $group)
                <div class="card card-primary card-outline">
                    <div class="card-title border">GRUPO: {{ $group != '' ? $group : 'USUARIO FINAL'  }}</div>
                    <div class="card-body">
                        @foreach ($moduls->where('group', $group) as $modul)
                            @if($modul->name != $group)
                                <div class="card card-success card-outline">
                                    <div class="card-title border">MODULO: {{ $modul->name }}</div>
                                    <div class="card-body">
                                        <div class="row ">
                                            @foreach ($routLists->where('group', $group)->where('modul', $modul->name) as $route)
                                                <div class="col-3 ">
                                                    <div class="btn btn-outline-primary">
                                                        <div>METODO: {{ $route->name }}</div>
                                                        <div>MIDDLEWARD'S: {{ implode(', ',$route->middleware) }}</div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        
                                    </div>
                                </div>
                            @else
                            <div class="row pb-3">
                                @foreach ($routLists->where('group', $group)->where('modul', $modul->name) as $route)
                                    <div class="col-3 ">
                                        <div class="btn btn-outline-primary">
                                            <div>METODO: {{ $route->name }}</div>
                                            <div>MIDDLEWARD'S: {{ implode(', ',$route->middleware) }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
        @endforeach
    

</div>
