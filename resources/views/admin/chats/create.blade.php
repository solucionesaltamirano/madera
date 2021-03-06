<x-admin-layout>
    <x-slot name="header">
        Create Chat
    </x-slot>
    <x-slot name="pageHeader">
        Create Chat
        <i class="fal fa-tachometer-slow"></i>
    </x-slot>
    <x-slot name="cardTitle">
        <i class="fal fa-layer-plus"></i>
        <span class="ml-3">
            Insert data for new Chat
        </span>
    </x-slot>
    @include('adminlte-templates::common.errors')
    <div class="card">
        {!! Form::open(['route' => 'chats.store']) !!}
        <div class="card-body">
            <div class="row">
                @include('admin.chats.fields')
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-outline-primary float-right">
                <span class="px-2">Save</span>
                <i class="fal fa-save"></i>
            </button>
            <a href="{{ route('chats.index') }}" class="btn btn-outline-danger float-right mr-2" >
                <span class="px-2">Cancel</span>
                <i class="fal fa-ban"></i>
            </a>
        </div>
        {!! Form::close() !!}
    </div>
</x-admin-layout>