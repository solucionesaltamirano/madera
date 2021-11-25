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
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<div>
    @if($user->getMedia()->last() != null)
        ultimo media library: {{ $user->getMedia()->last()->getFullUrl() }} 
    @endif
    
    @if($user->profile_photo_path)
        {!! Form::file('media', null, ['class' => 'form-control','maxlength' => 2048,'maxlength' => 2048]) !!}
        <img src="{{ $user->profile_photo_path }}" alt="{{ $user->name }}" width="200">
    @else
        {!! Form::file('media', null, ['class' => 'form-control','maxlength' => 2048,'maxlength' => 2048]) !!}
        <img src="https://ui-avatars.com/api/?name= {{ $user->name }}" alt="{{ $user->name }}" class="rounded-circle">
    @endif

</div>