@extends('adminlte::page')

@if (isset($header))
    @section('title')
        {{ $header }}
    @endsection

    @section('content_header')
        <h4 class="">{{ $header }}</h4>
    @stop
@else
    @section('title', 'Dashboard')

    @section('content_header')
        <h1>Dashboard</h1>
    @stop
@endif

@section('content')
    {{ $slot }}
@stop

@section('css')
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}"/>
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script src="//unpkg.com/alpinejs" defer></script>
    @livewireScripts
@stop





