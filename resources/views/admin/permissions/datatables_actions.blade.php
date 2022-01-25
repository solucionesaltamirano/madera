{!! Form::open(['route' => ['permissions.destroy', $id], 'method' => 'delete', 'class' => 'deleteConfirm']) !!}
    <div class="d-flex justify-content-around">
        {{-- @can('permissions.show') --}}
            <a href="{{ route('permissions.show', $id) }}" class='btn btn-outline-dark btn-sm '>
                <i class="fal fa-eye"></i>
            </a>
        {{-- @endcan --}}
        {{-- @can('permissions.edit') --}}
            <a href="{{ route('permissions.edit', $id) }}" class='btn btn-outline-primary btn-sm'>
                <i class="fal fa-edit"></i>
            </a>
        {{-- @endcan --}}
        {{-- @can('permissions.destroy') --}}
            {!! Form::button('<i class="fad fa-trash-alt"></i>', [
                'type' => 'submit',
                'class' => 'btn btn-outline-danger btn-sm',
            ]) !!}
        {{-- @endcan --}}
    </div>
{!! Form::close() !!}

@include('partials.confirm-delete')