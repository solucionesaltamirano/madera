{!! Form::open(['route' => ['businessConfigurations.destroy', $id], 'method' => 'delete', 'class' => 'deleteConfirm']) !!}
    <div class="d-flex justify-content-around">
        @can('businessConfigurations.index')
            <a href="{{ route('businessConfigurations.show', $id) }}" class='btn btn-outline-dark btn-sm '>
                <i class="fal fa-eye"></i>
            </a>
        @endcan
        @can('businessConfigurations.edit')
            <a href="{{ route('businessConfigurations.edit', $id) }}" class='btn btn-outline-primary btn-sm'>
                <i class="fal fa-edit"></i>
            </a>
        @endcan
        @can('businessConfigurations.destroy')
            {!! Form::button('<i class="fad fa-trash-alt"></i>', [
                'type' => 'submit',
                'class' => 'btn btn-outline-danger btn-sm',
            ]) !!}
        @endcan
    </div>
{!! Form::close() !!}

@include('partials.confirm-delete')