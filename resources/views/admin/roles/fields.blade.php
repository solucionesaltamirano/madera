<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Guard Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('guard_name', 'Guard Name:') !!}
    {!! Form::text('guard_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<div class="card card-primary card-outline min-vh-100 col-12">
    <div class="card-header">
        <div class="card-title w-100">
            <div class="row ">
                <div class="col strong pt-1">
                    <i class="fal fa-users-medical"></i>
                    <span class="ml-3">
                        Select Permissions
                    </span>
                </div>
            </div>
        </div>
    </div>

    @php
        if( old('permissions') ){
            
            $perm = old('permissions');
            $permissions = collect();

            foreach ($perm as $p ) {
                $item = new stdClass();
                $item->id =  $p;
                $permissions->push($item);
            }
        }
    @endphp

    <div class="card-body px-1 px-sm-4">
        @livewire('permissions.list-select',[
            'permissions' => $permissions ?? [],
        ])
    </div>
</div>