@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @if (isset($header))
        {{ $header }}
    @endif
@stop

@section('content')
    {{ $slot }}
@stop

@section('css')
    
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
    <script> console.log('Hi!'); </script>
    @livewireScripts
@stop





