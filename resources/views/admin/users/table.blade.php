<div class="table-responsive ">
    <table class="table table-striped table-bordered dataTable no-footer table-sm table-hover" id="users-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Phone</th>
            <th>Profile Photo Path</th>
            <th class="not-export-col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->phone }}</td>
                <td>
                    <div class="d-flex justify-content-center w-100" >
                        <img width="40px" height="40px" class="rounded-circle" src="{{ $user->profile_photo_path ? $user->profile_photo_path : 'https://ui-avatars.com/api/?name='. $user->name }}" alt="{{ $user->name }}">
                    </div>
                </td>
                <td width="120" x-data="" >
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete', 'class' => 'deleteConfirm']) !!}
                        <div class='d-flex justify-content-around'>
                            <a href="{{ route('users.show', [$user->id]) }}"
                            class='btn btn-outline-dark btn-sm'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('users.edit', [$user->id]) }}"
                            class='btn btn-outline-primary btn-sm'>
                                <i class="far fa-edit"></i>
                            </a>
                            <button type="submit" class="btn btn-outline-danger btn-sm"><i class='far fa-trash-alt'></i></button>
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
                    // Swal.fire(
                    //     'Deleted!',
                    //     'Your file has been deleted.',
                    //     'success'
                    // )
                    this.submit();
                }
            })
        })

        $('#users-table').DataTable({
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
                            extend: 'excel', 
                            text:'<span class="btn btn-outline-success btn-block btn-sm">Excel <i class="fad fa-file-csv"></i></span>',
                            exportOptions: {
                                columns: ":visible:not(.not-export-col)",
                            },
                            orientation: 'landscape',
                            pageSize: 'LETTER',
                        },
                        {
                            extend: 'pdf',
                            text:'<span class="btn btn-outline-danger btn-block btn-sm ">PDF <i class="fad fa-file-csv"></i></span>',
                            exportOptions: {
                                columns: ":visible:not(.not-export-col)",
                            },
                            orientation: 'landscape',
                            pageSize: 'LETTER',
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