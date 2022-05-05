<x-admin-layout>
    <x-slot name="header">
        Bienvenido!!!
    </x-slot>
    {{-- slot Body --}}
    <div class="card card-primary card-outline min-vh-100">
        <div class="card-header">
            <div class="card-title  ">
                <h4>
                    <i class="fal fa-table"></i>
                    <span class="mx-2 ">
                        Bienvenido {{ auth()->user()->empresa()->first()->nombre_empresa ?? auth()->user()->name }}
                    </span>
                </h4>
            </div>

        </div>
        <div class="card-body px-1 px-sm-4">
            <div class="px-1">
                <div class="row">
                    
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>