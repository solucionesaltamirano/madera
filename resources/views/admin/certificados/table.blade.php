{!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered table-sm text-sm']) !!}

@push('scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}
    <script>
        $(function () {
            var dt = window.LaravelDataTables["dataTableBuilder"];
            dt.on( 'draw.dt', function () {
                $(this).addClass('table-sm table-striped table-bordered table-hover text-sm ');
                $('[data-toggle="tooltip"]').tooltip();
            });
        })
    </script>
@endpush

@push('styles')
    @include('layouts.datatables_css')
@endpush