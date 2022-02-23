@extends('layouts.master')

@section('title') {{ $titulo }} @endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') {{ $titulo }} @endslot
        @slot('li_1') Contenido @endslot
        @slot('li_2') {{ $titulo }} @endslot
    @endcomponent


    <div class="row">

        @include('errors.mensajes')

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3 row">
                        <a href="{{ route( $nueva_ruta ) }}" class="btn btn-primary w-md">{{ $nuevo }}</a>
                    </div>

                    <h4 class="card-title">{{ $titulo }}</h4>
                    <table id="datatable" class="table table-bordered table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Usuario</th>
                            <th>Fecha Creada</th>
                            <th>Editar</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($contenidos as $contenido)
                            <tr>
                                <td>{{ $contenido->titulo }}</td>
                                <td>{{ $contenido->usuario->name }}</td>
                                <td>{{ $contenido->created_at }}</td>
                                <td>
                                    <a style="float: left" class="btn btn-info btn-rounded waves-effect waves-light" href="{{ route( $link_editar , ['contenido' => $contenido ] ) }}" data-toggle="tooltip" data-placement="top" title="Editar">
                                        <i class="mdi mdi-pencil d-block font-size-16"></i>
                                    </a>
                                    <form style="float: left" action="{{ route( $link_borrar , ['contenido' => $contenido] ) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-rounded waves-effect waves-light" href="{{ route( $link_borrar , ['contenido' => $contenido ] ) }}" data-toggle="tooltip" data-placement="top" title="Borrar">
                                            <i class="mdi mdi-eraser d-block font-size-16"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/datatables/datatables.min.css') }}">
    <style>
        input.form-control {
            width: 90%;
        }
    </style>
@endsection

@section('script')

    <script src="{{ asset('assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

@endsection