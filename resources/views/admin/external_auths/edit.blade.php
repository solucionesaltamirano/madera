<x-admin-layout>
    <x-slot name="header">
        Edit External Auth
    </x-slot>
    <x-slot name="pageHeader">
        Edit External Auth
        <i class="fal fa-tachometer-slow"></i>
    </x-slot>
    <x-slot name="cardTitle">
        <i class="fal fa-edit"></i>
        <span class="ml-3 w-100">
            Change data for Edit External Auth
        </span>
    </x-slot>
    @include('adminlte-templates::common.errors')
    <div class="card">
        {!! Form::model($externalAuth, ['route' => ['externalAuths.update', $externalAuth->id], 'method' => 'patch']) !!}
        <div class="card-body">
            <div class="row">
                @include('admin.external_auths.fields')
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-outline-primary float-right">
                <span class="px-2">Save</span>
                <i class="fal fa-save"></i>
            </button>
            <a href="{{ route('externalAuths.index') }}" class="btn btn-outline-danger float-right mr-2" >
                <span class="px-2">Cancel</span>
                <i class="fal fa-ban"></i>
            </a>
        </div>
        {!! Form::close() !!}
    </div>
</x-admin-layout>