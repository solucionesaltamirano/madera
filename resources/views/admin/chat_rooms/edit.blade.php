<x-admin-layout>
    <x-slot name="header">
        Edit Chat Room
    </x-slot>
    <x-slot name="pageHeader">
        Edit Chat Room
        <i class="fal fa-tachometer-slow"></i>
    </x-slot>
    <x-slot name="cardTitle">
        <i class="fal fa-edit"></i>
        <span class="ml-3 w-100">
            Change data for Edit Chat Room
        </span>
    </x-slot>
    @include('adminlte-templates::common.errors')
    <div class="card">
        {!! Form::model($chatRoom, ['route' => ['chatRooms.update', $chatRoom->id], 'method' => 'patch']) !!}
        <div class="card-body">
            <div class="row">
                @include('admin.chat_rooms.fields')
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-outline-primary float-right">
                <span class="px-2">Save</span>
                <i class="fal fa-save"></i>
            </button>
            <a href="{{ route('chatRooms.index') }}" class="btn btn-outline-danger float-right mr-2" >
                <span class="px-2">Cancel</span>
                <i class="fal fa-ban"></i>
            </a>
        </div>
        {!! Form::close() !!}
    </div>
</x-admin-layout>