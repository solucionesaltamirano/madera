<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $header }} | {{ config('app.name', 'Laravel') }}</title>

        @include('admin.link-style')
    
        <!-- Alpine js -->
        <script src="//unpkg.com/alpinejs" defer></script>

        <!-- livewire -->
        @livewireScripts

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        @include('admin.preloader')

        <!-- Navbar -->
        @include('admin.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">
                                Dashboard 
                                <i class="fal fa-tachometer-slow"></i>
                            </h1>
                            
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid border">
                    @livewire('test')
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('admin.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @include('admin.javascritp')
</body>

</html>





{{-- @extends('adminlte::page')

@if (isset($header))
    @section('title')
        {{ $header }} | {{ config('app.name') }}
    @endsection

    @section('content_header')
    <div class="row ">
        <div class="col-sm-4 col-lg-10 ">
            <h4 class="pt-2 ">
                {{ $header }}
            </h4>
        </div>
        <div class="col-sm-12 col-lg-2 align-center">
            <button class="btn btn-outline-primary btn-block" data-toggle="tooltip" data-placement="top" title="Tooltip on top"> 
                {{ $buttonHeader }}
            </button>
        </div>
    </div>
    @stop
@else
    @section('title', 'Dashboard')

    @section('content_header')
        <h1>Dashboard</h1>
    @stop
@endif

@section('content')

    <div class="card card-primary card-outline min-vh-100">
        <div class="card-header">
            <div class="card-title">
                {{ $cardTitle }}
            </div>
        </div>
        <div class="card-body ">
            {{ $slot }}
        </div>
    </div>
@stop

@section('right-sidebar')

@endsection

@section('footer')
    Aca va el Footer
@endsection

@section('css')
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}"/> --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
{{-- @stop

@section('js')
    <script src="//unpkg.com/alpinejs" defer></script>
@stop --}}
