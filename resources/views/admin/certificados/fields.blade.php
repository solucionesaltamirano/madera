@livewire('cliente-empresas', [
    'clienteSelected' => $certificado->cliente_id ?? null,
    'empresaSelected' => $certificado->empresa_id ?? null,
])

<!-- Descripcion Field -->
<div class="form-group col-sm-4">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Humedad Field -->
<div class="form-group col-sm-4">
    {!! Form::label('humedad', 'Humedad:') !!}
    {!! Form::number('humedad', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Inicio Field -->
<div class="form-group col-sm-4">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    {!! Form::date('fecha_inicio', today(), ['class' => 'form-control','id'=>'fecha_inicio']) !!}
</div>

<!-- Hora Inicio Field -->
<div class="form-group col-sm-4">
    {!! Form::label('hora_inicio', 'Hora Inicio:') !!}
    {!! Form::time('hora_inicio', now(), ['class' => 'form-control']) !!}
</div>

<!-- Temperatura Inicio Field -->
<div class="form-group col-sm-4">
    {!! Form::label('temperatura_inicio', 'Temperatura Inicio:') !!}
    {!! Form::number('temperatura_inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Fin Field -->
<div class="form-group col-sm-4">
    {!! Form::label('fecha_fin', 'Fecha Fin:') !!}
    {!! Form::date('fecha_fin', today(), ['class' => 'form-control','id'=>'fecha_fin']) !!}
</div>

<!-- Hora Fin Field -->
<div class="form-group col-sm-4">
    {!! Form::label('hora_fin', 'Hora Fin:') !!}
    {!! Form::time('hora_fin', now(), ['class' => 'form-control']) !!}
</div>

<!-- Temperatura Fin Field -->
<div class="form-group col-sm-4">
    {!! Form::label('temperatura_fin', 'Temperatura Fin:') !!}
    {!! Form::number('temperatura_fin', null, ['class' => 'form-control']) !!}
</div>