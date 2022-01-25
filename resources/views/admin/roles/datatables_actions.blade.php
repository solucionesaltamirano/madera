{!! Form::open(['route' => ['roles.destroy', $id], 'method' => 'delete', 'class' => 'deleteConfirm']) !!}
    <div class="d-flex justify-content-around">
        {{-- @can('roles.show') --}}
            <a href="{{ route('roles.show', $id) }}" class='btn btn-outline-dark btn-sm '>
                <i class="fal fa-eye"></i>
            </a>
        {{-- @endcan --}}
        {{-- @can('roles.edit') --}}
            <a href="{{ route('roles.edit', $id) }}" class='btn btn-outline-primary btn-sm'>
                <i class="fal fa-edit"></i>
            </a>
        {{-- @endcan --}}
        {{-- @can('roles.destroy') --}}
            {!! Form::button('<i class="fad fa-trash-alt"></i>', [
                'type' => 'submit',
                'class' => 'btn btn-outline-danger btn-sm',
            ]) !!}
        {{-- @endcan --}}
    </div>
{!! Form::close() !!}

@include('partials.confirm-delete')