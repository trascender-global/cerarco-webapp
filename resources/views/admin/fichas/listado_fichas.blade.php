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
        @slot('title') Listado Fichas @endslot
        @slot('li_1') Fichas @endslot
        @slot('li_2') Listado Fichas @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.ficha.listado_busqueda') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-check mb-3">
                                    <div class="mb-3">
                                        <label class="form-check-label gris" for="exampleRadios1">Área Geográfica</label>
                                        <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="" name="area_geografica[]">
                                            <option disabled>Select</option>
                                            @foreach(\App\Models\ListaValores::areasGeograficas()->get() as $data)
                                                <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-check-label gris" for="exampleRadios2">Subregion Geográfica</label>
                                        <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="" name="sub_region_geografica[]">
                                            <option disabled>Select</option>
                                            @foreach(\App\Models\ListaValores::subRegionGeografica()->get() as $data)
                                                <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-check-label gris" for="exampleRadios3">Departamento</label>
                                        <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="" name="departamentos[]">
                                            <option disabled>Select</option>
                                            @foreach(\App\Models\ListaValores::departamentos()->get() as $data)
                                                <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-check-label gris" for="exampleRadios7-1">Confiabilidad del modelo</label>
                                        <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="" name="confiabilidad_modelo[]">
                                            <option disabled>Select</option>
                                            @foreach(\App\Models\ListaValores::confiabilidadModelo()->get() as $data)
                                                <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-info btn-block">Buscar</button>
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
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Listado de Fichas</h4>

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
                                <th>Tratamiento Superficie</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($modelos as $modelo)
                                <tr>
                                    <td>{{ $modelo->codigo }}</td>
                                    <td>{{ $modelo->piezasClave->first()->datos()->busqueda(config('busqueda.area_geografica'))->get()->first()->getAttribute('valor') }}</td>
                                    <td>{{ $modelo->piezasClave->first()->datos()->busqueda(config('busqueda.sub_region_geografica'))->get()->first()->getAttribute('valor') }}</td>
                                    <td>{{ $modelo->piezasClave->first()->datos()->busqueda(config('busqueda.departamento'))->get()->first()->getAttribute('valor') }}</td>
                                    <td>{{ $modelo->piezasClave->first()->datos()->busqueda(config('busqueda.clasificacion_existente'))->get()->first()->getAttribute('valor') }}</td>
                                    <td>{{ $modelo->piezasClave->first()->datos()->busqueda(config('busqueda.confiabilidad_modelo'))->get()->first()->getAttribute('valor') }}</td>
                                    <td>{{ $modelo->piezasClave->first()->datos()->busqueda(config('busqueda.decoracion_1'))->get()->first()->getAttribute('valor') }}</td>
                                    <td>{{ $modelo->piezasClave->first()->datos()->busqueda(config('busqueda.decoracion_2'))->get()->first()->getAttribute('valor') }}</td>
                                    <td>{{ $modelo->piezasClave->first()->datos()->busqueda(config('busqueda.decoracion_3'))->get()->first()->getAttribute('valor') }}</td>
                                    <td>@if($modelo->piezasClave->first()->datos()->busqueda(config('busqueda.tratamiento_superficie'))->get()->first())
                                        {{ $modelo->piezasClave->first()->datos()->busqueda(config('busqueda.tratamiento_superficie'))->get()->first()->getAttribute('valor') }}
                                    @endif
                                        </td>
                                    <td>
                                        <a class="btn btn-sm btn-info btn-rounded waves-effect waves-light" href="{{ route( 'admin.ficha.editar_ficha', compact('modelo')) }}">
                                            <i class="mdi mdi-pencil d-block font-size-16"></i>
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
    </script>

@endsection
