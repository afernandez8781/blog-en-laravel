@extends('admin.layout')

@section('header')
    <h1>
        USUARIOS
        <small>Listado</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Usuarios</li>
    </ol>
@stop

@section('content')

    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Listado de usuarios</h3>
            @can('create', $users->first())
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary pull-right">
                    <i class="fa fa-plus"></i>Crear usuario
                </a>
            @endcan
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="users-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->getRoleNames()->implode(', ') }}</td>
                            <td>
                                @can('view', $user)
                                    <a href="{{ route('admin.users.show', $user) }}"
                                       class="btn btn-xs btn-default"
                                    ><i class="fa fa-eye"></i></a>
                                @endcan
                                
                                @can('update', $user)
                                    <a href="{{ route('admin.users.edit', $user) }}"
                                       class="btn btn-xs btn-info"
                                    ><i class="fa fa-pencil"></i></a>
                                @endcan

                                @can('delete', $user)
                                    <form method="POST"
                                          action="{{ route('admin.users.destroy', $user) }}"
                                          style="display: inline;">
                                        {{ csrf_field() }} {{ method_field('DELETE') }}
                                        <button class="btn btn-xs btn-danger"
                                            onclick="return confirm('¿Estás seguro de querer eliminar este usuario?')"
                                        ><i class="fa fa-times"></i></button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                </tbody>
                    @endforeach
            </table>
        </div>
        <!-- /.box-body -->
    </div>
{{--/.box--}}
@stop

@push('styles')
    <link rel="stylesheet" href="/adminlte/plugins/datatables/dataTables.bootstrap.css">
@endpush

@push('scripts')

<!-- Datatables js -->
    <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>

    <script>
        $(function() {
            $("#users-table").DataTable();
        });
    </script>

@endpush