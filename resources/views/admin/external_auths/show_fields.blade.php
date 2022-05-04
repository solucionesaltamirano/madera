<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $externalAuth->user_id }}</p>
</div>

<!-- External Auth Field -->
<div class="col-sm-12">
    {!! Form::label('external_auth', 'External Auth:') !!}
    <p>{{ $externalAuth->external_auth }}</p>
</div>

<!-- External Id Field -->
<div class="col-sm-12">
    {!! Form::label('external_id', 'External Id:') !!}
    <p>{{ $externalAuth->external_id }}</p>
</div>

<!-- External Email Field -->
<div class="col-sm-12">
    {!! Form::label('external_email', 'External Email:') !!}
    <p>{{ $externalAuth->external_email }}</p>
</div>

<!-- External Avatar Field -->
<div class="col-sm-12">
    {!! Form::label('external_avatar', 'External Avatar:') !!}
    <p>{{ $externalAuth->external_avatar }}</p>
</div>

