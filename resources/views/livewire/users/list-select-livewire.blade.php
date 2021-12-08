<div>
    <div class="py-2  mb-2 ">
        <input class="form-control" type="text" wire:model="search" placeholder="Search users">
    </div>
    <div class="row border py-2 rounded bg-light">
        @foreach ($users as $user)
            <div class="col-6 ">
                <div class="card {{$usersAssigned->where('id', $user->id)->count() > 0  ? 'border border-success': '' }}" wire:click="userSelect({{ $user->id }})">
                    <div class="card-body ">
                        {{ $user->name }} - {{ $user->id }}
                        @if($usersAssigned->where('id', $user->id)->count() > 0)
                            <div class="float-right ">
                                <i class="fal fa-check-circle text-success"></i>
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
