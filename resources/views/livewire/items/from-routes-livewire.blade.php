<div>

    Rutas: {{ $routeLists->count() }}
    Items: {{ $items->count() }}

    <form action="{{ route('auth.items-from-routes-save') }}" method="post">
        {{ csrf_field() }}
    @foreach ($groups as $group)
        <div class="card card-primary card-outline">
            <div class="card-title border">
                Group {{ $group != '' ? $group : 'Only Auth'  }}
            </div>
            <div class="card-body">
                @foreach ($modules->where('group', $group) as $module)
                    @if($module->name != $group)
                        <div class="card card-success card-outline">
                            <div class="card-title border">Module {{ $module->name }}</div>
                            <div class="card-body">
                                @foreach ($routeLists->where('group', $group)->where('module', $module->name)->where('name', '!=', 'show')->whereNotIn('route', $items->pluck('route')) as $route)
                                    <div class="w-100 border rounded my-2 row py-2">
                                        <div class="col-3">
                                            <b>Name:</b>
                                            <input 
                                                type="text" 
                                                class="form-control" 
                                                placeholder="Item name"
                                                value="{{ $module->name }} {{ $route->name == 'index' ? '' : $route->name }}" 
                                                name="items_array[{{ $route->id }}][name]" 
                                                {{-- wire:model="items_array.{{$route->id }}.name" --}}
                                            >
                                        </div>
                                        <div class="col-3">
                                            <b>Route:</b>
                                            <input 
                                                type="text" 
                                                class="form-control" 
                                                placeholder="Route"
                                                value="{{ $module->name }}.{{ $route->name }}" 
                                                name="items_array[{{$route->id }}][route]" 
                                                readonly
                                                {{-- wire:model="items_array.{{$route->id }}.route" --}}
                                            >
                                        </div>
                                        <div class="col-3">
                                            <b>Description:</b>
                                            <input 
                                                type="text" 
                                                class="form-control" 
                                                placeholder="Description"
                                                value="{{ $route->name == 'index' ? 'Show al '. $module->name : '' }}{{ $route->name == 'create' ? 'Create a new '. $module->name : '' }}"
                                                name="items_array[{{$route->id }}][description]" 
                                                {{-- wire:model="items_array.{{$route->id }}.description" --}}
                                            >
                                        </div>
                                        <div class="col-3">
                                            <b>Icon:</b>
                                            <input 
                                                type="text" 
                                                class="form-control" 
                                                placeholder="Description"
                                                name="items_array[{{ $route->id }}][icon]" 
                                                value="{{ $route->name == 'index' ? '<i class="fal fa-table"></i>' : ''}}{{ $route->name == 'create' ? '<i class="fal fa-layer-plus"></i>' : ''}}"
                                                {{-- wire:model="items_array.{{ $route->id }}.icon" --}}
                                            >
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="pb-3">
                            @foreach ($routeLists->where('group', $group)->where('module', $module->name)->whereNotIn('route', $items->pluck('route')) as $route)    
                                <div class="w-100 border rounded my-2 row py-2">
                                    <div class="col-3">
                                        <b>Name:</b>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            placeholder="Item name"
                                            value="{{ $route->name }}" 
                                            name="items_array[{{ $route->id }}][name]" 
                                            {{-- wire:model="items_array.{{ $route->id }}.name" --}}
                                        >
                                    </div>
                                    <div class="col-3">
                                        <b>Route:</b>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            placeholder="Route"
                                            value="{{ $module->name }}.{{ $route->name }}" 
                                            name="items_array[{{ $route->id }}][route]" 
                                            readonly
                                            {{-- wire:model="items_array.{{ $route->id }}.route" --}}
                                        >
                                    </div>
                                    <div class="col-3">
                                        <b>Description:</b>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            placeholder="Description"
                                            name="items_array[{{ $route->id }}][description]" 
                                            {{-- wire:model="items_array.{{ $route->id }}.description" --}}
                                        >
                                    </div>
                                    <div class="col-3">
                                        <b>Icon:</b>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            placeholder="Description"
                                            name="items_array[{{ $route->id }}][icon]" 
                                            value="{{ $route->name === 'index' ? '<i class="fal fa-layer-plus"></i>' : '' }}"
                                            {{-- wire:model="items_array.{{ $route->id }}.icon" --}}
                                        >
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
    <button class="btn btn-outline-primary" type="submit">Save</button></form>

    {{-- <div class="btn btn-outline-primary" wire:click="saveItems">
        SAVE ITEMS
    </div> --}}
                

    

    @foreach ($items as $item)
        <div>
            <a href="{{ route($item->route) }}">{{ $loop->iteration }} - {!! $item->icon !!}{{ $item->name }}</a>
        </div>
    @endforeach
</div>
