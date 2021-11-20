{!! Form::open(['route' => ['externalAuths.destroy', $id], 'method' => 'delete', 'class' => 'deleteConfirm' ]) !!}
    <div class="d-flex justify-content-around">
        {{-- @can('external_auths.show') --}}
            <a href="{{ route('externalAuths.show', $id) }}" class='btn btn-outline-dark btn-sm '>
                <i class="fal fa-eye"></i>
            </a>
        {{-- @endcan --}}
        {{-- @can('external_auths.edit') --}}
            <a href="{{ route('externalAuths.edit', $id) }}" class='btn btn-outline-primary btn-sm'>
                <i class="fal fa-edit"></i>
            </a>
        {{-- @endcan --}}
        {{-- @can('external_auths.destroy') --}}
            {!! Form::button('<i class="fad fa-trash-alt"></i>', [
                'type' => 'submit',
                'class' => 'btn btn-outline-danger btn-sm',
            ]) !!}
        {{-- @endcan --}}
    </div>
{!! Form::close() !!}

@include('partials.confirm-delete')