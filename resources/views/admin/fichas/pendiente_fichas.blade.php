@extends('layouts.master')

@section('title') @lang('translation.UploadFile') @endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/select2/select2.min.css') }}">

    <style>
        input.form-control {
            width: 90%;
        }
    </style>
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') Fichas Pendientes @endslot
        @slot('li_1') Fichas @endslot
        @slot('li_2') Fichas Pendientes @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Listado de Fichas Pendientes</h4>

                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Codigo Modelo</th>
                                <th>Area Geografica</th>
                                <th>Sub Region Geografica</th>
                                <th>Departamento</th>
                                <th>Clasificacion Existente</th>
                                <th>Confiabilidad Modelo</th>
                                <th>Decoracion 1</th>
                                <th>Decoracion 2</th>
                                <th>Decoracion 3</th>
                                <th>Usuario</th>
                                @if (Auth::user()->role_id!=4)
                                    <th>Aceptar</th>
                                <th>Eliminar</th>
                                @endif
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($modelos as $modelo)
                                <tr id="tr_{{$modelo->id}}">
                                    <td><a href="{{ route( 'admin.ficha.editar_ficha', compact('modelo')) }}">{{ $modelo->codigo }}</a></td>
                                    <td>{{ $modelo->piezasClave->first()->datos()->busqueda(config('busqueda.area_geografica'))->get()->first()->getAttribute('valor') }}</td>
                                    <td>{{ $modelo->piezasClave->first()->datos()->busqueda(config('busqueda.sub_region_geografica'))->get()->first()->getAttribute('valor') }}</td>
                                    <td>{{ $modelo->piezasClave->first()->datos()->busqueda(config('busqueda.departamento'))->get()->first()->getAttribute('valor') }}</td>
                                    <td>{{ $modelo->piezasClave->first()->datos()->busqueda(config('busqueda.clasificacion_existente'))->get()->first()->getAttribute('valor') }}</td>
                                    <td>{{ $modelo->piezasClave->first()->datos()->busqueda(config('busqueda.confiabilidad_modelo'))->get()->first()->getAttribute('valor') }}</td>
                                    <td>{{ $modelo->piezasClave->first()->datos()->busqueda(config('busqueda.decoracion_1'))->get()->first()->getAttribute('valor') }}</td>
                                    <td>{{ $modelo->piezasClave->first()->datos()->busqueda(config('busqueda.decoracion_2'))->get()->first()->getAttribute('valor') }}</td>
                                    <td>{{ $modelo->piezasClave->first()->datos()->busqueda(config('busqueda.decoracion_3'))->get()->first()->getAttribute('valor') }}</td>
                                    <td>{{$modelo->usuario->name}}
                                        </td>
                                        @if (Auth::user()->role_id!=4)
                                        <td>
                                        <a class="btn btn-sm btn-success btn-rounded waves-effect waves-light btn_accept" data-id="{{$modelo->id}}">
                                            <i class="mdi mdi-check d-block font-size-16"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route( 'admin.ficha.borrar_ficha', compact('modelo')) }}" onsubmit="confirm('Desea borrar esta ficha?')" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light" href="">
                                                <i class="mdi mdi-close d-block font-size-16"></i>
                                            </button>
                                        </form>
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            {{ $modelos->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <!-- Plugins js -->
    <script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>

    <script>
        $('.select2').select2()
        $(document).on('click','.btn_accept',function(){
            var modelo=$(this).data("id")
            if(confirm('Desea aceptar esta ficha?')){
                var datos = new FormData();
            datos.append('_token', $('input[name=_token]').val());
            datos.append('modelo', modelo)
            $.ajax({
                url: "{{ route('admin.ficha.accept_ficha') }}",
                type: "post",
                data: datos,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(res) {
                $(`#tr_${modelo}`).remove()
            });
            }
        })
    </script>

@endsection
