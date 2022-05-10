{!! Form::open(['route' => ['certificados.destroy', $id], 'method' => 'delete', 'class' => 'deleteConfirm']) !!}
    <div class="d-flex justify-content-around">
        @can('certificados.create')
            <a href="{{ route('certificados.emitPdf', encrypt( $id)) }}" class="btn btn-danger">
                <i class="fas fa-file-pdf"></i>
            </a>
        @endcan
        @can('certificados.index')
            <a href="{{ route('certificados.show', $id) }}" class='btn btn-outline-dark btn-sm' data-toggle="tooltip" data-placement="top" title="Ver">
                <i class="fal fa-eye"></i>
            </a>
        @endcan
        @can('certificados.edit')
            <a href="{{ route('certificados.edit', $id) }}" class='btn btn-outline-primary btn-sm' data-toggle="tooltip" data-placement="top" title="Editar">
                <i class="fal fa-edit"></i>
            </a>
        @endcan
        @can('certificados.destroy')
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