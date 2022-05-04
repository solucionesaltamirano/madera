<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $cliente->user_id }}</p>
</div>

<!-- Codigo Field -->
<div class="col-sm-12">
    {!! Form::label('codigo', 'Codigo:') !!}
    <p>{{ $cliente->codigo }}</p>
</div>

<!-- Nombre Empresa Field -->
<div class="col-sm-12">
    {!! Form::label('nombre_empresa', 'Nombre Empresa:') !!}
    <p>{{ $cliente->nombre_empresa }}</p>
</div>

<!-- Direccion Field -->
<div class="col-sm-12">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $cliente->direccion }}</p>
</div>

<!-- Fecha Registro Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_registro', 'Fecha Registro:') !!}
    <p>{{ $cliente->fecha_registro }}</p>
</div>

<!-- Fecha Vencimiento Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_vencimiento', 'Fecha Vencimiento:') !!}
    <p>{{ $cliente->fecha_vencimiento }}</p>
</div>

<!-- Nombre Representante Legal Field -->
<div class="col-sm-12">
    {!! Form::label('nombre_representante_legal', 'Nombre Representante Legal:') !!}
    <p>{{ $cliente->nombre_representante_legal }}</p>
</div>

