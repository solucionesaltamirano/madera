<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $role->name }}</p>
</div>

<!-- Guard Name Field -->
<div class="col-sm-12">
    {!! Form::label('guard_name', 'Guard Name:') !!}
    <p>{{ $role->guard_name }}</p>
</div>

<div class="card card-primary card-outline min-vh-100 col-12">
    <div class="card-header">
        <div class="card-title w-100">
            <div class="row ">
                <div class="col strong pt-1">
                    <i class="fal fa-users-medical"></i>
                    <span class="ml-3">
                        Permissions Access
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body px-1 px-sm-4">
        <div>
            <div class="row border py-2 rounded bg-light">
                @foreach ($permissions as $permission)
                    <div class="col-12 col-sm-4 ">
                        <div class="w-100 my-1" >
                            <div class="text-left w-100 btn {{$permissionsAssigned->where('id', $permission->id)->count() <= 0  ? ' btn-outline-secondary': 'btn btn-success' }} ">
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
    </div>
</div>