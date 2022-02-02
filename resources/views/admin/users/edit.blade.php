<x-admin-layout>
    <x-slot name="header">
        Edit User
    </x-slot>
    <div class="card card-primary card-outline min-vh-100">
        <div class="card-header">
            <div class="card-title ">
                <h4>
                    <i class="fal fa-edit"></i>
                    <span class="ml-3">
                        Edit User
                    </span>
                </h4>
            </div>
            @if(isset($user->deleted_at) )
                    <div class="float-right">
                        @livewire('user.restore',[
                            'user' => $user
                        ])
                    </div>
                @endif
        </div>
        <div class="card-body">
            @include('adminlte-templates::common.errors')
            <div class="card">
                {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}
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
        </div>
    </div>
</x-admin-layout>