<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255, 'autocomplete' => 'off']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255, 'autocomplete' => 'off']) !!}
</div>

<!-- Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', null, ['class' => 'form-control','maxlength' => 255, 'autocomplete' => 'off']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 255, 'autocomplete' => 'off']) !!}
</div>

<!-- Profile Photo Path Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('1', 'Profile Photo Path:') !!}
    {!! Form::text('1', $user->profile_photo_path ?? null, ['class' => 'form-control','maxlength' => 2048,'maxlength' => 2048]) !!}
</div> --}}

<!-- Password Field -->
@if(isset($user))
<div class="col-sm-6" x-data="{show : false}">
        {!! Form::label('password', 'Contraseña:') !!}<br>
        <div>
            <template x-if="show">
                {!! Form::password('password', ['class' => 'form-control float-left','maxlength' => 255, 'maxlength' => 255, 'autocomplete' => 'off', 'autofocus', 'style' => 'width:90%', 'placeholder' => 'New Password' ]) !!}
            </template>
            <template x-if="show">
                <spam @click ="show = !show" class="btn btn-outline-danger float-right">x</spam>
            </template>
        </div>
        <template x-if="!show">
            <button class="btn btn-outline-primary w-100" @click.prevent="show = !show" >
                {{ __('Change Password') }}
                </button>
        </template>
    </div>
@else
    <div class="col-sm-6">
        {!! Form::label('password', 'Contraseña:') !!}
        {!! Form::password('password', ['class' => 'form-control float-left','maxlength' => 255, 'maxlength' => 255, 'autocomplete' => 'off', 'autofocus',  'placeholder' => 'New Password' ]) !!}
    </div>
@endif
    

@if(isset($user))
    <div class="col-md-6">
        <div x-data="{show : false}" >
            {!! Form::label('media', 'Image:') !!}<br>
            <div>
                <template x-if="show">
                    {!! Form::file('media', null, ['class' => 'form-control border','maxlength' => 2048,'maxlength' => 2048]) !!}
                </template>
                <template x-if="show">
                    <spam @click ="show = !show" class="btn btn-outline-danger float-right">x</spam>
                </template>
            </div>
            <template x-if="!show">
                <button class="btn btn-outline-primary w-100" @click.prevent="show = !show" >
                    {{ __('Change image') }}
                    </button>
            </template>
        </div>
        <br>
    </div>
    
    @if($user->profile_photo_path)
    <div class="col-md-6">
        <img src="{{ $user->profile_photo_path }}" alt="{{ $user->name }}" width="200">
    </div>
    @else
    <div class="col-md-6">
        <img src="https://ui-avatars.com/api/?name= {{ $user->name }}" alt="{{ $user->name }}" class="rounded-circle">
    </div>
    @endif
@else
    <div class="col-md-6">
        {!! Form::label('media', 'Image:') !!}<br>
        {!! Form::file('media', null, ['class' => 'form-control border','maxlength' => 2048,'maxlength' => 2048]) !!}
    </div>
@endif

@if($user->deleted_at != null)
    @livewire('user.restore',[
        'user' => $user
    ])
@endif

@php
    if( old('permissions') ){
        
        $permissionsOld = old('permissions');
        $permissions = collect();

        foreach ($permissionsOld as $p ) {
            $item = new stdClass();
            $item =  \App\Models\Permission::find($p);
            $permissions->push($item);
        }
    }

    if( old('roles') ){
        
        $rolesOld = old('roles');
        $roles = collect();

        foreach ($rolesOld as $r ) {
            $item = new stdClass();
            $item =  \App\Models\Role::find($r);
            $roles->push($item);
        }
    }
@endphp

<div class="col-md-12  mt-4 p-2">
    @livewire('roles.list-select-with-permissions',[
        'roles' => $roles ?? [],
        'permissions' => $permissions ?? [],
    ])
</div>



