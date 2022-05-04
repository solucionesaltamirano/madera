<!-- Cliente Id Field -->
<div class="col-sm-12">
    {!! Form::label('cliente_id', 'Cliente Id:') !!}
    <p>{{ $clienteTelefono->cliente_id }}</p>
</div>

<!-- Telefono Field -->
<div class="col-sm-12">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $clienteTelefono->telefono }}</p>
</div>

<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $clienteTelefono->nombre }}</p>
</div>

<!-- Puesto Field -->
<div class="col-sm-12">
    {!! Form::label('puesto', 'Puesto:') !!}
    <p>{{ $clienteTelefono->puesto }}</p>
</div>

