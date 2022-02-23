@extends('layouts.master')

@section('title') Listado Usuarios @endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') Listado Usuarios @endslot
        @slot('li_1') Usuarios @endslot
        @slot('li_2') Listado Usuarios @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.usuarios.busqueda') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-check mb-3">
                                    <div class="mb-3">
                                        <label class="form-check-label gris" for="exampleRadios3">Nombre</label>
                                        <input class="form-control" name="nombre" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-check-label gris" for="exampleRadios3">Email</label>
                                        <input class="form-control" name="email" />
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-info btn-block">Buscar</button>
                                    </div>
                                    <div class="mb-3">
                                        <a href="{{ route('admin.usuarios.crear') }}" class="btn btn-success btn-block">Crear Usuario</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table table-bordered table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a class="btn btn-sm btn-info btn-rounded waves-effect waves-light" href="{{ route('admin.usuarios.editar', compact('user')) }}">
                                        <i class="mdi mdi-pencil d-block font-size-16"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.usuarios.borrar', compact('user')) }}" onsubmit="confirm('Desea borrar esta usuario?')" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light" href="">
                                            <i class="mdi mdi-close d-block font-size-16"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="card">
                        <div class="card-body">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection