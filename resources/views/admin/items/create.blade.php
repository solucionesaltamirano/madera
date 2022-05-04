<x-admin-layout>
    <x-slot name="header">
        Create Item
    </x-slot>
    <div class="card card-primary card-outline min-vh-100">
        <div class="card-header">
            <div class="card-title ">
                <h4>
                    <i class="fal fa-layer-plus"></i>
                    <span class="ml-3">
                        Insert data for new Item
                    </span>
                </h4>
            </div>
        </div>
        <div class="card-body">
            @include('adminlte-templates::common.errors')
            <div class="card">
                {!! Form::open(['route' => 'items.store']) !!}
                <div class="card-body">
                    <div class="row">
                        @include('admin.items.fields')
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-primary float-right">
                        <span class="px-2">Save</span>
                        <i class="fal fa-save"></i>
                    </button>
                    <a href="{{ route('items.index') }}" class="btn btn-outline-danger float-right mr-2" >
                        <span class="px-2">Cancel</span>
                        <i class="fal fa-ban"></i>
                    </a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</x-admin-layout>