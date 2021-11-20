<x-admin-layout>
    <x-slot name="header">
        External Auth Details
    </x-slot>

    <x-slot name="pageHeader">
        External Auth Details
        <i class="fal fa-tachometer-slow"></i>
    </x-slot>

    <x-slot name="cardTitle">
        <i class="fal fa-eye"></i>
        <span class="ml-3">
            View details for External Auth
        </span>
    </x-slot>

    @include('adminlte-templates::common.errors')

    <div class="card">

        <div class="card-body">
            <div class="row">
                @include('admin.external_auths.show_fields')
            </div>
        </div>

        <div class="card-footer">
            <a class="btn btn-info float-right" href="{{ route('externalAuths.index') }}">
                <span class="mx-2">Back</span>
                <i class="fal fa-undo-alt"></i>
            </a>
            <a href="{{ route('externalAuths.edit', $externalAuth->id) }}" class="btn btn-outline-primary float-right mr-2">
                <span class="mx-2">Edit</span>
                <i class="fal fa-edit"></i>
            </a>
        </div>
    </div>
</x-admin-layout>