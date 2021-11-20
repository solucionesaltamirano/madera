<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $header }} | {{ config('app.name', 'Laravel') }}</title>

        @include('admin.link-style')

    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Preloader -->
            {{-- @include('admin.preloader') --}}

            <!-- Navbar -->
            @include('admin.navbar')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('admin.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @include('admin.page-header')

                <!-- Main content -->
                @include('admin.content')
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            @include('admin.footer')

            <!-- Control Sidebar -->
            @include('admin.control-sidebar')
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        @include('admin.javascritp')
    </body>

</html>
