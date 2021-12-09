<div>
    <div class="row pb-2">
        <div class=" col-8">
            <input class="form-control" type="text" wire:model="search" placeholder="Search users">
        </div>
        <div class=" col-2">
            <div class="form-control btn btn-outline-primary" wire:click="selectAll">Select all</div>
        </div>
        <div class=" col-2 ">
            <div class="form-control btn btn-outline-info" wire:click="unselectAll">Unselect all</div>
        </div>
    </div>
    <div class="row border py-2 rounded bg-light">
        @foreach ($users as $user)
            <div class="col-12 col-sm-4  ">
                <div class="w-100 my-2" wire:click="userSelect({{ $user->id }})">
                    <div class="w-100 btn {{$usersAssigned->where('id', $user->id)->count() <= 0  ? ' btn-outline-secondary': 'btn btn-success' }} ">
                        {{ $user->name }} - {{ $user->id }}
                        @if($usersAssigned->where('id', $user->id)->count() > 0)
                            <div class="float-right ">
                                <i class="fal fa-check-circle "></i>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @foreach ($usersAssigned as $user)
        <input type="hidden" name="users[]" value="{{ $user['id'] }}">
    @endforeach
</div>
