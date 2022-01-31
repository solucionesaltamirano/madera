{!! Form::open(['route' => ['users.destroy', $id], 'method' => 'delete', 'class' => 'deleteConfirm']) !!}
    <div class="d-flex justify-content-around">
        {{-- @can('users.show') --}}
            <a href="{{ route('users.show', $id) }}" class='btn btn-outline-dark btn-sm '>
                <i class="fal fa-eye"></i>
            </a>
        {{-- @endcan --}}
        {{-- @can('users.edit') --}}
            <a href="{{ route('users.edit', $id) }}" class='btn btn-outline-primary btn-sm'>
                <i class="fal fa-edit"></i>
            </a>
        {{-- @endcan --}}
        {{-- @can('users.destroy') --}}
            @if(\App\Models\User::find($id) )
                {!! Form::button('<i class="fad fa-trash-alt"></i>', [
                    'type' => 'submit',
                    'class' => 'btn btn-outline-danger btn-sm',
                ]) !!}
            @else
                <a href="{{ route('users.edit', $id) }}" class='btn btn-outline-secondary btn-sm disabled'>
                    <i class="fad fa-trash-alt"></i>
                </a>
            @endif
        {{-- @endcan --}}

    </div>
{!! Form::close() !!}

@include('partials.confirm-delete')