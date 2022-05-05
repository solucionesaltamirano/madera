<x-admin-layout>
    <x-slot name="header">
        Edit Cliente Telefono
    </x-slot>
    <div class="card card-primary card-outline min-vh-100">
        <div class="card-header">
            <div class="card-title ">
                <h4>
                    <i class="fal fa-edit"></i>
                    <span class="ml-3">
                        Edit Cliente Telefono
                    </span>
                </h4>
            </div>
        </div>
        <div class="">
            @include('adminlte-templates::common.errors')
            {!! Form::model($clienteTelefono, ['route' => ['clienteTelefonos.update', $clienteTelefono->id], 'method' => 'patch']) !!}
            <div class="card-body">
                <div class="row">
                    @include('admin.cliente_telefonos.fields')
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-outline-primary float-right">
                    <span class="px-2">Guardar</span>
                    <i class="fal fa-save"></i>
                </button>
                <a href="{{ route('clienteTelefonos.index') }}" class="btn btn-outline-danger float-right mr-2" >
                    <span class="px-2">Cancelar</span>
                    <i class="fal fa-ban"></i>
                </a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</x-admin-layout>