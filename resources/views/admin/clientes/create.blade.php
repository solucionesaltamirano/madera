<x-admin-layout>
    <x-slot name="header">
        Create Cliente
    </x-slot>
    <div class="card card-primary card-outline min-vh-100">
        <div class="card-header">
            <div class="card-title ">
                <h4>
                    <i class="fal fa-layer-plus"></i>
                    <span class="ml-3">
                        Datos de nuevo Cliente
                    </span>
                </h4>
            </div>
        </div>
        <div class="">
            @include('adminlte-templates::common.errors')
            {!! Form::open(['route' => 'clientes.store','class' => 'wait-on-submit', 'autocomplete' => 'off', 'files' => true  ]) !!}
                @livewire('clientes.create')
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-primary float-right">
                        <span class="px-2">Guardar</span>
                        <i class="fal fa-save"></i>
                    </button>
                    <a href="{{ route('clientes.index') }}" class="btn btn-outline-danger float-right mr-2" >
                        <span class="px-2">Cancelar</span>
                        <i class="fal fa-ban"></i>
                    </a>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</x-admin-layout>