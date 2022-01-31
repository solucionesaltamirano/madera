<x-admin-layout>
    <x-slot name="header">
        User Details
    </x-slot>
    <x-slot name="pageHeader">
        User Details
        <i class="fal fa-tachometer-slow"></i>
    </x-slot>
    <x-slot name="cardTitle">
        <i class="fal fa-eye"></i>
        <span class="ml-3">
            View details for User
        </span>
    </x-slot>
    @include('adminlte-templates::common.errors')
    <div class="card">
        <div class="card-body">
            <div class="row">
                @include('admin.users.show_fields')
            </div>
        </div>
        <div class="card-footer">
            <a class="btn btn-info float-right" href="{{ route('users.index') }}">
                <span class="mx-2">Back</span>
                <i class="fal fa-undo-alt"></i>
            </a>
            @can('users.edit')    
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-primary float-right mr-2">
                    <span class="mx-2">Edit</span>
                    <i class="fal fa-edit"></i>
                </a>
            @endcan
        </div>
    </div>
</x-admin-layout>