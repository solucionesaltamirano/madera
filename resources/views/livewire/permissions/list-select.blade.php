<div>
    <div class="row pb-2">
        <div class="col-12 col-sm-8 mb-2">
            <input class="form-control" type="text" wire:model="search" placeholder="Search Permission">
        </div>
        <div class=" col-12 col-sm-2 mb-2">
            <div class="form-control btn btn-outline-primary" wire:click="selectAll">Select all</div>
        </div>
        <div class="col-12 col-sm-2 ">
            <div class="form-control btn btn-outline-danger" wire:click="unselectAll">Unselect all</div>
        </div>
    </div>
    <div class="row border py-2 rounded bg-light">
        @foreach ($permissions as $permission)
            <div class="col-12 col-sm-4 ">
                <div class="w-100 my-1" wire:click="permissionselect({{ $permission->id }})">
                    <div class="text-left w-100 btn {{$permissionsAssigned->where('id', $permission->id)->count() <= 0  ? ' btn-outline-secondary': 'btn-success' }} ">
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

    
    @foreach ($permissionsAssigned as $permission)
        <input type="hidden" name="permissions[]" value="{{ $permission['id'] }}">
    @endforeach
</div>