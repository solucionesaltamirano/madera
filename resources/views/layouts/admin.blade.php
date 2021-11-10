@extends('adminlte::page')

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
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}"/>
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script src="//unpkg.com/alpinejs" defer></script>
@stop





