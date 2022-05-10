<div class="table-responsive ">
    <table class="table table-striped table-bordered dataTable no-footer table-sm table-hover" id="users-table">
        <thead>
        <tr>
            <th>codigo</th>
            <th>Empresa</th>
            <th>Representante</th>
            <th>Contacto</th>
            <th>Email</th>
            <th>Username</th>
            <th class="not-export-col">Logo</th>
            <th class="not-export-col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    @if($user->empresa->first())
                        {{ $user->empresa->first()->codigo }} 
                    @endif
                </td>
                <td>
                    @if($user->empresa->first())
                        <a target="blank_" href="{{ route('clientes.edit', $user->empresa->first()->id) }}" >
                            {{ $user->empresa->first()->nombre_empresa }} 
                        </a>
                    @endif
                </td>
                <td>{{ $user->name }}</td>
                <td>
                    @if($user->empresa->first())
                        <a href="tel:{{ $user->empresa->first()->telefonos()->get()->first()->telefono }}" class="btn btn-success">{{ $user->empresa->first()->telefonos()->get()->first()->telefono }}</a>
                        <p class="">{{ $user->empresa->first()->telefonos()->get()->first()->nombre }}</p>
                        <p class="">{{ $user->empresa->first()->telefonos()->get()->first()->puesto ?? '' }}</p>
                    @endif
                </td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->username }}</td>
                
                <td>
                    <div class="d-flex justify-content-center w-100" >
                        <img width="40px" height="40px" class="rounded-circle" src="{{ $user->profile_photo_path ? $user->profile_photo_path : 'https://ui-avatars.com/api/?name='. $user->name }}" alt="{{ $user->name }}">
                    </div>
                </td>
                <td width="120" x-data="" >
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete', 'class' => 'deleteConfirm']) !!}
                        <div class='d-flex justify-content-around'>
                            @can('users.index')
                                <a href="{{ route('users.show', [$user->id]) }}"
                                class='btn btn-outline-dark btn-sm'>
                                    <i class="far fa-eye"></i>
                                </a>
                            @endcan
                            @can('users.edit')    
                                <a href="{{ route('users.edit', [$user->id]) }}"
                                class='btn btn-outline-primary btn-sm'>
                                    <i class="far fa-edit"></i>
                                </a>
                            @endcan
                            @can('users.destroy')
                                @if(\App\Models\User::find($user->id))
                                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class='far fa-trash-alt'></i></button>
                                @else
                                    <a href="{{ route('users.edit', $user->id) }}" class='btn btn-outline-secondary btn-sm disabled'>
                                        <i class="fad fa-trash-alt"></i>
                                    </a>
                                @endif
                            @endcan
                        </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script>
    
</script>

@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        var user = '{{ auth()->user()->name }}'
        var today = '{{ now()->format("d/m/Y H:i") }}'
        $('.deleteConfirm').submit(function(e){
            e.preventDefault()
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        })

        $('#users-table').DataTable({
            language: {
                url: "https://cdn.datatables.net/plug-ins/1.11.4/i18n/es_es.json"
            },
            responsive: true,
            autoWidth: false,
            stateSave: true,
            dom: '<"row mb-2"<"col-sm-12 col-md-6" B><"col-sm-12 col-md-6" f>>rt<"row "<"col-sm-6  pt-1" l><" col-sm-6 pb-2   text-right" i><"col-sm-12 float-right" p>>',
            buttons: [
                {
                    extend: 'collection',
                    className: 'btn btn-default btn-sm',
                    text: '<i class="fal fa-download"></i> Export',
                    buttons: [
                        { 
                            extend: 'excelHtml5', 
                            text:'<span class="btn btn-outline-success btn-block btn-sm">Excel <i class="fad fa-file-csv"></i></span>',
                            exportOptions: {
                                columns: ":visible:not(.not-export-col)",
                            },
                            orientation: 'landscape',
                            pageSize: 'LETTER',
                        },
                        {
                            extend: 'pdfHtml5',
                            text:'<span class="btn btn-outline-danger btn-block btn-sm ">PDF <i class="fad fa-file-csv"></i></span>',
                            exportOptions: {
                                columns: ":visible:not(.not-export-col)",
                            },
                            orientation: 'landscape',
                            pageSize: 'LETTER',
                            messageTop: 'Generate by ' + this.user + ' on ' + this.today,
                            messageBottom: '',
                            footer: true
                        },
                    ]
                },
                {
                    extend: 'print',
                    text:'<i class="fal fa-print"></i> Print',
                    className: 'btn btn-default btn-sm',
                    exportOptions: {
                        columns: ":visible:not(.not-export-col)",
                    },
                    orientation: 'landscape',
                    pageSize: 'LETTER',
                    messageTop: 'Generate by ' + this.user + ' on ' + this.today,
                },
                {
                    text:'<i class="fal fa-undo"></i> Reset',
                    className: 'btn btn-default btn-sm',
                    action: function (e, dt, button, config) {
                        dt.search('');
                        dt.columns().search('');
                        dt.draw();
                    }
                },
                {
                    extend: 'colvis',
                    text:'Visibility',
                    className: 'btn btn-default btn-sm'
                },
            ],
        });
    </script>
@endpush