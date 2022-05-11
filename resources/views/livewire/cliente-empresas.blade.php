<div class="col-sm-12 row">
    @role('ADMIN')
        <div class="form-group col-sm-12">
            {!! Form::label('cliente_id', 'Cliente:') !!}
            <select class="form-control" name="cliente_id" wire:model="clienteSelected">
                <option value="">Seleccione un cliente</option>
                @foreach ($clientes as $empresa)
                    <option value="{{ $empresa->id }}">
                        {{ $empresa->codigo }} - 
                        {{ $empresa->nombre_empresa }} 
                    </option>
                @endforeach
            </select>
        </div>
    @else
        <input type="hidden" name="cliente_id" wire:model='clienteSelected'>
    @endrole


    <!-- Empresa Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('empresa_id', 'Empresa:') !!}
        <select class="form-control" name="empresa_id" wire:model="empresaSelected">
            <option value="0">Seleccione una empresa</option>
            @foreach ($empresas as $empresa)
                <option value="{{ $empresa->id }}">
                    {{ $empresa->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Empresa Destino -->
    <div class="form-group col-sm-6">
        {!! Form::label('destino', 'Destino:') !!}
        {!! Form::text('destino', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200, 'wire:model' => 'destino']) !!}
    </div>

    <input type="hidden" name="destino_2" value="{{ $empresa->direccion }}">
</div>
