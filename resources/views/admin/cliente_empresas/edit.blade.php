<x-admin-layout>
    <x-slot name="header">
        {{ __('Edit Cliente Empresa') }}
    </x-slot>
    <div class="card card-primary card-outline min-vh-100">
        <div class="card-header">
            <div class="card-title ">
                <h4>
                    <i class="fal fa-edit"></i>
                    <span class="ml-3">
                        {{ __('Edit Cliente Empresa') }}
                    </span>
                </h4>
            </div>
        </div>
        <div class="card-body">
            @include('adminlte-templates::common.errors')
            <div class="card">
                {!! Form::model($clienteEmpresa, ['route' => ['clienteEmpresas.update', $clienteEmpresa->id], 'method' => 'patch']) !!}
                <div class="card-body">
                    <div class="row">
                        @include('admin.cliente_empresas.fields')
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-primary float-right">
                        <span class="px-2">{{ __('Save') }}</span>
                        <i class="fal fa-save"></i>
                    </button>
                    <a href="{{ route('clienteEmpresas.index') }}" class="btn btn-outline-danger float-right mr-2" >
                        <span class="px-2">{{ __('Cancel') }}</span>
                        <i class="fal fa-ban"></i>
                    </a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</x-admin-layout>