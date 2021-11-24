<x-admin-layout>
    <x-slot name="header">
        Edit User
    </x-slot>
    <x-slot name="pageHeader">
        Edit User
        <i class="fal fa-tachometer-slow"></i>
    </x-slot>
    <x-slot name="cardTitle">
        <i class="fal fa-edit"></i>
        <span class="ml-3 w-100">
            Change data for Edit User
        </span>
    </x-slot>
    @include('adminlte-templates::common.errors')
    <div class="card">
        {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch', 'files' => true]) !!}
        <div class="card-body">
            <div class="row">
                @include('admin.users.fields')
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-outline-primary float-right">
                <span class="px-2">Save</span>
                <i class="fal fa-save"></i>
            </button>
            <a href="{{ route('users.index') }}" class="btn btn-outline-danger float-right mr-2" >
                <span class="px-2">Cancel</span>
                <i class="fal fa-ban"></i>
            </a>
        </div>
        {!! Form::close() !!}
    </div>
</x-admin-layout>