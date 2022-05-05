<!-- User Id Field -->
<div class="form-group col-sm-12">
    <h2>Datos de Empresa</h2>
</div>

<!-- Codigo Field -->
<div class="form-group col-sm-4">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control','maxlength' => 8,'maxlength' => 8]) !!}
</div>

<!-- Nombre Empresa Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nombre_empresa', 'Nombre Empresa:') !!}
    {!! Form::text('nombre_empresa', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-4">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Fecha Registro Field -->
<div class="form-group col-sm-4">
    {!! Form::label('fecha_registro', 'Fecha Registro:') !!}
    {!! Form::date('fecha_registro', $cliente->fecha_registro ?? null, ['class' => 'form-control','id'=>'fecha_registro']) !!}
</div>



<!-- Fecha Vencimiento Field -->
<div class="form-group col-sm-4">
    {!! Form::label('fecha_vencimiento', 'Fecha Vencimiento:') !!}
    {!! Form::date('fecha_vencimiento', $cliente->fecha_vencimiento ?? null, ['class' => 'form-control','id'=>'fecha_vencimiento']) !!}
</div>



<!-- Nombre Representante Legal Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nombre_representante_legal', 'Nombre Representante Legal o Encargado:') !!}
    {!! Form::text('nombre_representante_legal', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>

<div class="form-group col-sm-12">
    @livewire('clientes.telefonos')
</div>
