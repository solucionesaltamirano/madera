<div>

    Rutas: {{ $routeLists->count() }}
    Permissions: {{ $permissions->count() }}

    <form action="{{ route('permissions.from-routes-save') }}" method="post">
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
                                @foreach ($routeLists->where('group', $group)->where('module', $module->name)->where('name', '!=', 'show')->whereNotIn('route', $permissions->pluck('name')->toArray()) as $route)
                                    <div class="w-100 border rounded my-2 row py-2 bg-light border-primary">
                                        <div class="col-3">
                                            <b>Name:</b>
                                            <input 
                                                type="text" 
                                                class="form-control" 
                                                placeholder="Item name"
                                                value="{{ $module->name }}.{{ $route->name }}" 
                                                name="items_array[{{ $route->id }}][name]"
                                                readonly
                                                {{-- wire:model="items_array.{{$route->id }}.name" --}}
                                            >
                                        </div>
                                        <div class="col-3 ">
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
                                                value="{{ $route->name == 'index' ? 'Show all '. $module->name : '' }}{{ $route->name == 'create' ? 'Create a '. $module->name : '' }}{{ $route->name == 'edit' ? 'Edit a '. $module->name : '' }}{{ $route->name == 'destroy' ? 'Erase a '. $module->name : '' }}"
                                                name="items_array[{{$route->id }}][description]" 
                                                {{-- wire:model="items_array.{{$route->id }}.description" --}}
                                            >
                                        </div>
                                        <div class="col-3">
                                            <b>Guard Name:</b>
                                            <input 
                                                type="text" 
                                                class="form-control" 
                                                placeholder="Guard Name"
                                                value="web"
                                                name="items_array[{{$route->id }}][guard_name]" 
                                            >
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="pb-3">
                            @foreach ($routeLists->where('group', $group)->where('module', $module->name)->whereNotIn('route', $permissions->pluck('name')) as $route)    
                                <div class="w-100 border rounded my-2 row py-2  bg-light border-primary">
                                    <div class="col-3">
                                        <b>Name:</b>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            placeholder="Item name"
                                            value="{{ $module->name }}.{{ $route->name }}" 
                                            name="items_array[{{ $route->id }}][name]" 
                                            readonly
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
                                        <b>Guard Name:</b>
                                            <input 
                                                type="text" 
                                                class="form-control" 
                                                placeholder="Guard Name"
                                                value="web"
                                                name="items_array[{{$route->id }}][guard_name]" 
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
                

    

    @foreach ($permissions as $item)
        <div>
            {{-- <a href="{{ route($item->route) }}">{{ $loop->iteration }} - {!! $item->icon !!}{{ $item->name }}</a> --}}
        </div>
    @endforeach
</div>
