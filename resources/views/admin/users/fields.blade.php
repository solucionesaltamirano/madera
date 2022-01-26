<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Profile Photo Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('1', 'Profile Photo Path:') !!}
    {!! Form::text('1', $user->profile_photo_path, ['class' => 'form-control','maxlength' => 2048,'maxlength' => 2048]) !!}
</div>

<!-- Password Field -->
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
    
<div class="col-12 border-bottom pt-4 mb-4"></div>

<div class="col-md-6">
    @if($user->getMedia()->last() != null)
        ultimo media library: {{ $user->getMedia()->last()->getFullUrl() }} 
    @endif
    
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


    @if($user->profile_photo_path)
        <img src="{{ $user->profile_photo_path }}" alt="{{ $user->name }}" width="200">
    @else
        <img src="https://ui-avatars.com/api/?name= {{ $user->name }}" alt="{{ $user->name }}" class="rounded-circle">
    @endif

</div>