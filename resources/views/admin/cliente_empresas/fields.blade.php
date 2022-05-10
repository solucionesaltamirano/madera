<!-- Cliente Id Field -->
@role('ADMIN')
    <div class="form-group col-sm-12">
        {!! Form::label('cliente_id', 'Cliente:') !!}
        <select class="form-control" name="cliente_id">
            <option value="">Seleccione un cliente</option>
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}" {{ auth()->user()->empresa()->first()->id == $cliente->id ? 'selected' : '' }} >{{ $cliente->nombre_empresa }}</option>
            @endforeach
        </select>
    </div>
@else
    <input type="hidden" name="cliente_id" value="{{ auth()->user()->empresa()->first()->id }}">
@endrole

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre Empresa:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>