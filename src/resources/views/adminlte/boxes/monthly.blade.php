@extends('adminlte.boxes.box')

@section('header')

    @include('adminlte.boxes.headers.monthly')

@stop

@section('content')

    @yield('content')

@stop