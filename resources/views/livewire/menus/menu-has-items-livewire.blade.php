<div>
    <div class="py-4">
        <x-laravel-blade-sortable::sortable>
            @foreach ($routeLists->where('name', 'index') as $route)
                <a href="{{ route($route->route) }}" class="btn btn-primary px-2">
                    {{ $route->modul }}
                </a>
            @endforeach
        </x-laravel-blade-sortable::sortable>
    </div>

    <x-laravel-blade-sortable::sortable>
        @foreach ($groups as $group)
            <div class="card card-primary card-outline">
                <div class="card-title border">GRUPO: {{ $group != '' ? $group : 'USUARIO FINAL'  }}</div>
                <div class="card-body">
                    <x-laravel-blade-sortable::sortable>
                    @foreach ($modules->where('group', $group) as $modul)
                        @if($modul->name != $group)
                            <div class="card card-success card-outline">
                                <div class="card-title border">MODULO: {{ $modul->name }}</div>
                                <div class="card-body">
                                    
                                        <x-laravel-blade-sortable::sortable>
                                            @foreach ($routeLists->where('group', $group)->where('modul', $modul->name)->where('name', '!=', 'index') as $route)
                                                <div class="w-100 ">
                                                    <div class="border">
                                                        <div>METODO: {{ $route->name }}</div>
                                                        {{-- <div>MIDDLEWARD'S: {{ implode(', ',$route->middleware) }}</div> --}}
                                                    </div>
                                                </div>
                                            @endforeach
                                        </x-laravel-blade-sortable::sortable>
                                </div>
                            </div>
                        @else
                        <div class="row pb-3">
                            <x-laravel-blade-sortable::sortable>
                                @foreach ($routeLists->where('group', $group)->where('modul', $modul->name) as $route)
                                    <div class="w-100 ">
                                        <div class="border">
                                            <div>METODO: {{ $route->name }}</div>
                                            {{-- <div>MIDDLEWARD'S: {{ implode(', ',$route->middleware) }}</div> --}}
                                        </div>
                                    </div>
                                @endforeach
                            </x-laravel-blade-sortable::sortable>
                        </div>
                        @endif
                    @endforeach
                </x-laravel-blade-sortable::sortable>
                </div>
            </div>
        @endforeach
    </x-laravel-blade-sortable::sortable>
</div>
