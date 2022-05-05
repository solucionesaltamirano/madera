<x-admin-layout>
    <x-slot name="header">
        Clientes
    </x-slot>
    {{-- slot Body--}}
    <div class="card card-primary card-outline min-vh-100">
        <div class="card-header">
            <div class="card-title ">
                <h4>
                    <i class="fal fa-table"></i>
                    <span class="mx-2 ">
                        Clientes
                    </span>
                </h4>
            </div>
            @can('clientes.create')
            <div class="float-right">
                <a href="{{ route('clientes.create') }}" class="btn btn-sm btn-outline-primary float-right">
                    <span class="mx-2">Agregar</span>
                    <i class="fal fa-layer-plus"></i>
                </a>
            </div>
            @endcan
        </div>
        <div class="card-body px-1 px-sm-4">
            <div class="px-1">
                @include('flash::message')
                @include('admin.clientes.table')
            </div>
        </div>
    </div>    
</x-admin-layout>