<x-admin-layout>
    <x-slot name="header">
        Item Details
    </x-slot>
    <x-slot name="pageHeader">
        Item Details
        <i class="fal fa-tachometer-slow"></i>
    </x-slot>
    <x-slot name="cardTitle">
        <i class="fal fa-eye"></i>
        <span class="ml-3">
            View details for Item
        </span>
    </x-slot>
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
</x-admin-layout>