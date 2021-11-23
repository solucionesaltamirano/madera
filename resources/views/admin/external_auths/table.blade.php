{!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered thead-dark']) !!}

@push('scripts')
    {!! $dataTable->scripts() !!}
    <script>
        $(function () {
            var dt = window.LaravelDataTables["dataTableBuilder"];
            //Cuando dibuja la tabla
            dt.on( 'draw.dt', function () {
                $(this).addClass('table-sm table-striped table-bordered table-hover thead-dark');
                $('[data-toggle="tooltip"]').tooltip();
            });
        })
    </script>
@endpush