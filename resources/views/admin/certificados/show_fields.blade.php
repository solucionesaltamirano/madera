@role('ADMIN')
    <!-- Cliente Id Field -->
    <div class="col-sm-3">
        {!! Form::label('cliente_id', 'Cliente:') !!}
        <p>{{ $certificado->cliente->nombre_empresa }}</p>
    </div>

    <!-- Empresa Id Field -->
    <div class="col-sm-3">
        {!! Form::label('empresa_id', 'Empresa:') !!}
        <p>{{ $certificado->empresa->first()->nombre }}</p>
    </div>
@else
    <!-- Empresa Id Field -->
    <div class="col-sm-6">
        {!! Form::label('empresa_id', 'Empresa:') !!}
        <p>{{ $certificado->empresa->first()->nombre }}</p>
    </div>

@endrole



<!-- Secuencial Field -->
<div class="col-sm-3">
    {!! Form::label('secuencial', 'Secuencial:') !!}
    <p>{{ $certificado->secuencial }}</p>
</div>

<!-- Fecha Field -->
<div class="col-sm-3">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $certificado->fecha->format('d/m/Y') }}</p>
</div>

<!-- Descripcion Field -->
<div class="col-sm-4">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $certificado->descripcion }}</p>
</div>

<!-- Cantidad Field -->
<div class="col-sm-4">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $certificado->cantidad }}</p>
</div>

<!-- Humedad Field -->
<div class="col-sm-4">
    {!! Form::label('humedad', 'Humedad:') !!}
    <p>{{ $certificado->humedad }}</p>
</div>

<!-- Fecha Inicio Field -->
<div class="col-sm-3">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    <p>{{ $certificado->fecha_inicio->format('d/m/Y') }} {{ $certificado->hora_inicio }}</p>
</div>

<!-- Fecha Fin Field -->
<div class="col-sm-3">
    {!! Form::label('fecha_fin', 'Fecha Fin:') !!}
    <p>{{ $certificado->fecha_fin->format('d/m/Y') }} {{ $certificado->hora_fin }}</p>
</div>


<!-- Temperatura Inicio Field -->
<div class="col-sm-3">
    {!! Form::label('temperatura_inicio', 'Temperatura Inicio:') !!}
    <p>{{ $certificado->temperatura_inicio }}</p>
</div>

<!-- Temperatura Fin Field -->
<div class="col-sm-3">
    {!! Form::label('temperatura_fin', 'Temperatura Fin:') !!}
    <p>{{ $certificado->temperatura_fin }}</p>
</div>

