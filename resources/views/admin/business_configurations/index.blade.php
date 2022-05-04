<x-admin-layout>
    <x-slot name="header">
        Business Configurations
    </x-slot>
    {{-- slot Body--}}
    <div class="card card-primary card-outline min-vh-100">
        <div class="card-header">
            <div class="card-title ">
                <h4>
                    <i class="fal fa-table"></i>
                    <span class="mx-2 ">
                        Business Configurations
                    </span>
                </h4>
            </div>
            @can('businessConfigurations.create')
            <div class="float-right">
                <a href="{{ route('businessConfigurations.create') }}" class="btn btn-sm btn-outline-primary float-right">
                    <span class="mx-2">New</span>
                    <i class="fal fa-layer-plus"></i>
                </a>
            </div>
            @endcan
        </div>
        <div class="card-body px-1 px-sm-4">
            <div class="px-1">
                @include('flash::message')
                @push('scripts')
                    @include('layouts.datatables_js')
                @endpush
                @push('styles')
                    @include('layouts.datatables_css')
                @endpush
                @include('admin.business_configurations.table')
            </div>
        </div>
    </div>    
</x-admin-layout>