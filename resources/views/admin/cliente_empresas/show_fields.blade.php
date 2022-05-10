@role('ADMIN')
    <!-- Cliente Id Field -->
    <div class="col-sm-12">
        {!! Form::label('cliente_id', 'Cliente:') !!}
        <p>{{ $clienteEmpresa->cliente->nombre_empresa }}</p>
    </div>
@endrole

<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre Empresa:') !!}
    <p>{{ $clienteEmpresa->nombre }}</p>
</div>

<!-- Direccion Field -->
<div class="col-sm-12">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $clienteEmpresa->direccion }}</p>
</div>

