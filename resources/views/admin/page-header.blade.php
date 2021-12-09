<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-6">
                @if(isset($pageHeader))
                    <h1 class="m-0 ">
                        {{ $pageHeader }}
                    </h1>
                @endif
                
            </div><!-- /.col -->
            @if(isset($breadcrumbs))
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        @foreach($breadcrumbs as $breadcrumb)
                            @if($breadcrumb['active'])
                                <li class="breadcrumb-item active">{{ $breadcrumb['name'] }}</li>
                            @else
                                <li class="breadcrumb-item"><a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a></li>
                            @endif
                        @endforeach
                    </ol>
                </div><!-- /.col -->
            @endif
            {{-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div> --}}
            <!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->