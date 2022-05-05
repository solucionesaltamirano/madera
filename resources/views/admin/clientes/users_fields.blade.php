{{-- {{ $user->min_role }} --}}

<div class="form-group col-sm-12">
    <h2>Datos de Usuario</h2>
</div>

<!-- Email Field -->
<div class="form-group col-sm-4">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 255, 'autocomplete' => 'nope']) !!}
</div>

<!-- Username Field -->
<div class="form-group col-sm-4">
    {!! Form::label('username', 'Usuario:') !!}
    {!! Form::text('username', null, ['class' => 'form-control', 'maxlength' => 255, 'autocomplete' => 'nope']) !!}
</div>


<!-- Password Field -->
@if (isset($user))
    <div class="col-sm-4" x-data="{ show: false }">
        {!! Form::label('password', 'Contraseña:') !!}<br>
        <div>
            <template x-if="show">
                {!! Form::password('password', ['class' => 'form-control float-left', 'maxlength' => 255, 'maxlength' => 255, 'autocomplete' => 'off', 'autofocus', 'style' => 'width:90%', 'placeholder' => 'New Password']) !!}
            </template>
            <template x-if="show">
                <spam @click="show = !show" class="btn btn-outline-danger float-right">x</spam>
            </template>
        </div>
        <template x-if="!show">
            <button class="btn btn-outline-primary w-100" @click.prevent="show = !show">
                {{ __('Change Password') }}
            </button>
        </template>
    </div>
@else
    <div class="col-sm-4">
        {!! Form::label('password', 'Contraseña:') !!}
        {!! Form::password('password', ['class' => 'form-control float-left', 'maxlength' => 255, 'maxlength' => 255, 'autocomplete' => 'off', 'autofocus', 'placeholder' => 'New Password']) !!}
    </div>
@endif


@if (isset($user))
    <div class="col-md-6">
        <div x-data="{ show: false }">
            {!! Form::label('media', 'Image:') !!}<br>
            <div>
                <template x-if="show">
                    {!! Form::file('media', null, ['class' => 'form-control border', 'maxlength' => 2048, 'maxlength' => 2048]) !!}
                </template>
                <template x-if="show">
                    <spam @click="show = !show" class="btn btn-outline-danger float-right">x</spam>
                </template>
            </div>
            <template x-if="!show">
                <button class="btn btn-outline-primary w-100" @click.prevent="show = !show">
                    {{ __('Change image') }}
                </button>
            </template>
        </div>
        <br>
    </div>

    @if ($user->profile_photo_path)
        <div class="col-md-6">
            <img src="{{ $user->profile_photo_path }}" alt="{{ $user->name }}" width="200">
        </div>
    @else
        <div class="col-md-6">
            <img src="https://ui-avatars.com/api/?name= {{ $user->name }}" alt="{{ $user->name }}"
                class="rounded-circle">
        </div>
    @endif
@else
    <div class="col-md-6">
        {!! Form::label('media', 'Logo Empresa:') !!}<br>
        <input type="file" accept="image/png, image/jpeg" name="media" id="media" class="">
    </div>
@endif
