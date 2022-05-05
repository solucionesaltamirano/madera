{!! Form::open(['route' => ['users.destroy', $id], 'method' => 'delete', 'class' => 'deleteConfirm']) !!}
    <div class="d-flex justify-content-around">
        @can('users.index')
            <a href="{{ route('users.show', $id) }}" class='btn btn-outline-dark btn-sm' data-toggle="tooltip" data-placement="top" title="Ver">
                <i class="fal fa-eye"></i>
            </a>
        @endcan
        @can('users.edit')
            <a href="{{ route('users.edit', $id) }}" class='btn btn-outline-primary btn-sm' data-toggle="tooltip" data-placement="top" title="Editar">
                <i class="fal fa-edit"></i>
            </a>
        @endcan
        @can('users.destroy')
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