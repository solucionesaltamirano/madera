<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- External Auth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('external_auth', 'External Auth:') !!}
    {!! Form::text('external_auth', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- External Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('external_id', 'External Id:') !!}
    {!! Form::text('external_id', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- External Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('external_email', 'External Email:') !!}
    {!! Form::text('external_email', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- External Avatar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('external_avatar', 'External Avatar:') !!}
    {!! Form::text('external_avatar', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>