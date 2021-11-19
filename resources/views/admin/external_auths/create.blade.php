<x-admin-layout>
    <x-slot name="header">
        Create External Auth
    </x-slot>

    <x-slot name="pageHeader">
        Create External Auth
        <i class="fal fa-tachometer-slow"></i>
    </x-slot>

    <x-slot name="cardTitle">
        <i class="fal fa-browser"></i> 
        <span class="mx-3">
            Insert data for new Create External Auth
        </span>
    </x-slot>
    @include('adminlte-templates::common.errors')

    <div class="card">

        {!! Form::open(['route' => 'externalAuths.store']) !!}

        <div class="card-body">

            <div class="row">
                @include('admin.external_auths.fields')
            </div>

        </div>

        <div class="card-footer">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            <a href="{{ route('externalAuths.index') }}" class="btn btn-default">Cancel</a>
        </div>

        {!! Form::close() !!}
    </div>
</x-admin-layout>