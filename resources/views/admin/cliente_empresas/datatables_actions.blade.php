{!! Form::open(['route' => ['clienteEmpresas.destroy', $id], 'method' => 'delete', 'class' => 'deleteConfirm']) !!}
    <div class="d-flex justify-content-around">
        @can('clienteEmpresas.index')
            <a href="{{ route('clienteEmpresas.show', $id) }}" class='btn btn-outline-dark btn-sm' data-toggle="tooltip" data-placement="top" title="Ver">
                <i class="fal fa-eye"></i>
            </a>
        @endcan
        @can('clienteEmpresas.edit')
            <a href="{{ route('clienteEmpresas.edit', $id) }}" class='btn btn-outline-primary btn-sm' data-toggle="tooltip" data-placement="top" title="Editar">
                <i class="fal fa-edit"></i>
            </a>
        @endcan
        @can('clienteEmpresas.destroy')
            {!! Form::button('<i class="fad fa-trash-alt"></i>', [
                'type' => 'submit',
                'class' => 'btn btn-outline-danger btn-sm',
                'data-toggle'=> 'tooltip',
                'data-placement'=>'top',
                'title'=> 'Borrar',
            ]) !!}
        @endcan
    </div>
{!! Form::close() !!}

@include('partials.confirm-delete')