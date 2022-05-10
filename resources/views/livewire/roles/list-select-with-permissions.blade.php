<div class="">
    <div class="text-center">
        <h3>Select roles and permissions</h3>
    </div>
    <div class="border border-primary rounded p-4 mt-2 bg-light">
        <h3>Roles</h3>
        <div class="row pb-2">
            <div class="col-12 col-sm-8 mb-2">
                <input class="form-control border-primary   " type="text" wire:model="searchRole" placeholder="Search Roles">
            </div>
            <div class=" col-12 col-sm-2 mb-2">
                <div class="form-control btn btn-outline-primary" wire:click="selectAllRoles">Select all Roles</div>
            </div>
            <div class="col-12 col-sm-2 ">
                <div class="form-control btn btn-outline-danger" wire:click="unselectAllRoles">Unselect all Roles</div>
            </div>
        </div>
        <span>Roles Selected</span>
        <div style="height: 20vh" class="row border py-2 rounded bg-white overflow-auto border-primary mx-0" >
            @foreach ($roles as $role)
                <div class="col-12 col-sm-4 ">
                    <div class="w-100 my-1" wire:click="rolesSelect({{ $role->id }})">
                        <div class="text-left w-100 btn {{$rolesAssigned->where('id', $role->id)->count() <= 0  ? ' btn-outline-secondary': 'btn-success' }} ">
                            {{ $role->name }} - {{ $role->id }}
                            @if($rolesAssigned->where('id', $role->id)->count() > 0)
                                <div class="float-right ">
                                    <i class="fal fa-check-circle "></i>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @hasanyrole('SUPERADMIN|DEV')
        <div class="border border-primary rounded p-4 mt-2 bg-light">
            <h3>Permissions</h3>
            <div class="row pb-2">
                <div class="col-12 col-sm-6 mb-2">
                    <input class="form-control border-primary" type="text" wire:model="searchPermission" placeholder="Search Permission">
                </div>
                <div class=" col-12 col-sm-3 mb-2">
                    <div class="form-control btn btn-outline-primary text-sm" wire:click="selectAllPermissions">Select all Permissions</div>
                </div>
                <div class="col-12 col-sm-3 ">
                    <div class="form-control btn btn-outline-danger text-sm" wire:click="unselectAllPermissions">Unselect all Permissions</div>
                </div>
            </div>
            <span>Permissions Selected</span>
            <div style="height: 40vh" class="row border border-primary py-2 rounded bg-white overflow-auto mx-0" >
                @foreach ($permissions as $permission)
                    @php
                        $btn = 'btn-outline-secondary';
                        $btn = $permissionsAssigned->where('id', $permission->id)->where('role', false)->count() > 0 ? 'btn-warning' : $btn;
                        $btn = $permissionsAssigned->where('id', $permission->id)->where('role', true)->count() > 0  ? 'btn-success' : $btn ;
                    @endphp

                    <div class="col-12 col-sm-4 ">
                        <div class="w-100 my-1" wire:click="permissionSelect({{ $permission->id }})">
                            <div class="text-left w-100 btn {{ $btn }} ">
                                {{ $permission->description }} - {{ $permission->id }}
                                @if($permissionsAssigned->where('id', $permission->id)->count() > 0)
                                    <div class="float-right ">
                                        <i class="fal fa-check-circle "></i>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endhasanyrole
    
    @foreach ($permissionsFromUser as $permission)
        <input type="hidden" name="permissions[]" value="{{ $permission['id'] }}">
    @endforeach

    @hasanyrole('SUPERADMIN|DEV')
        @foreach ($rolesAssigned as $role)
            <input type="hidden" name="roles[]" value="{{ $role['id'] }}">
        @endforeach
    @endhasanyrole
</div>