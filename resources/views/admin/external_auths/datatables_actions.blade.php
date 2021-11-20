{!! Form::open(['route' => ['externalAuths.destroy', $id], 'method' => 'delete']) !!}
    <div class="d-flex justify-content-around">
        <a href="{{ route('externalAuths.show', $id) }}" class='btn btn-outline-dark btn-sm  '>
            <i class="fal fa-eye"></i>
        </a>
        <a href="{{ route('externalAuths.edit', $id) }}" class='btn btn-outline-primary btn-sm'>
            <i class="fal fa-edit"></i>
        </a>
        {!! Form::button('<i class="fad fa-trash-alt"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-outline-danger btn-sm',
            'onclick' => "return confirm('Are you sure?')"
        ]) !!}
    </div>
{!! Form::close() !!}
