<x-admin-layout>
    <x-slot name="header">
        Item Details
    </x-slot>
    <div class="card card-primary card-outline min-vh-100">
        <div class="card-header">
            <div class="card-title ">
                <h4>
                    <i class="fal fa-eye"></i>
                    <span class="ml-3">
                        View details for Item
                    </span>
                </h4>
            </div>
        </div>
        <div class="card-body">
            @include('adminlte-templates::common.errors')
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @include('admin.items.show_fields')
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-info float-right" href="{{ route('items.index') }}">
                        <span class="mx-2">Back</span>
                        <i class="fal fa-undo-alt"></i>
                    </a>
                    {{-- @can('items.edit')     --}}
                        <a href="{{ route('items.edit', $item->id) }}" class="btn btn-outline-primary float-right mr-2">
                            <span class="mx-2">Edit</span>
                            <i class="fal fa-edit"></i>
                        </a>
                    {{-- @endcan --}}
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>