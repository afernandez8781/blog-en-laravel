@extends('admin.layout')

@section('content')
    <h1>Dashboard</h1>
    <p>Usuario autenticado: {{ auth()->user()->email }}</p>
@stop