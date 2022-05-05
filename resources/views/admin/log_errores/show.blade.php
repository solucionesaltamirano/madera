<x-admin-layout>
    <x-slot name="header">
        Log Errore Details
    </x-slot>
    <div class="card card-primary card-outline min-vh-100">
        <div class="card-header">
            <div class="card-title ">
                <h4>
                    <i class="fal fa-eye"></i>
                    <span class="ml-3">
                        Detalle de Log Errore
                    </span>
                </h4>
            </div>
        </div>
        <div class="card-body">
            @include('adminlte-templates::common.errors')
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @include('admin.log_errores.show_fields')
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-info float-right" href="{{ route('logErrores.index') }}">
                        <span class="mx-2">Regresar</span>
                        <i class="fal fa-undo-alt"></i>
                    </a>
                    @can('logErrores.edit')
                        <a href="{{ route('logErrores.edit', $logErrore->id) }}" class="btn btn-outline-primary float-right mr-2">
                            <span class="mx-2">Edit</span>
                            <i class="fal fa-edit"></i>
                        </a>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>