@extends('layouts.master')

@section('title') @lang('translation.EditarFicha') @endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') Fichas @endslot
        @slot('li_1') Fichas @endslot
        @slot('li_2') Editar Ficha @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Ficha: <em>{{ $modelo->codigo }}</em></h4>
                    <div id="basic-pills-wizard" class="twitter-bs-wizard">
                        <ul class="twitter-bs-wizard-nav">
                            <li class="nav-item">
                                <a href="#pieza-clave" class="nav-link" data-toggle="tab">
                                    <span class="step-number mr-2">1</span>
                                    Pieza Clave</a>
                            </li>
                            <li class="nav-item">
                                <a href="#modelo" class="nav-link" data-toggle="tab">
                                    <span class="step-number mr-2">2</span>
                                    Modelo</a>
                            </li>

                            <li class="nav-item">
                                <a href="#variante-de-forma" class="nav-link" data-toggle="tab">
                                    <span class="step-number mr-2">3</span>
                                    Variantes de Forma</a>
                            </li>
                            <li class="nav-item">
                                <a href="#variante-decorativa" class="nav-link" data-toggle="tab">
                                    <span class="step-number mr-2">4</span>
                                    Variantes Decorativas</a>
                            </li>
                            <li class="nav-item">
                                <a href="#variante-arqueometrica" class="nav-link" data-toggle="tab">
                                    <span class="step-number mr-2">5</span>
                                    Variantes Arqueométricas</a>
                            </li>

                        </ul>
                        <div class="tab-content twitter-bs-wizard-tab-content">
                            <div class="tab-pane" id="pieza-clave">
                                <form method="POST" action="{{ route('admin.ficha.salvar_ficha', $modelo) }}" id="formEditarFicha">
                                    @csrf
                                    @include('admin.fichas.variantes.foreach-pieza_clave',['piezas_clave'=>$modelo->piezasClave,'modelo'=>$modelo])
                                </form>
                            </div>

                            <div class="tab-pane" id="modelo">
                                @include('admin.fichas.variantes.modelo',['modeloMetaData'=>$modelo->metadata_modelo, 'variante' => 'modelo', 'modeloModel' => $modelo])
                            </div>

                            <div class="tab-pane" id="variante-de-forma">
                                @include('admin.fichas.variantes.variante',['modeloMetaData'=>$modelo->metadata_forma, 'variante' => 'forma', 'modeloModel' => $modelo])
                            </div>

                            <div class="tab-pane" id="variante-decorativa">
                                @include('admin.fichas.variantes.variante',['modeloMetaData'=>$modelo->metadata_decorativa, 'variante' => 'decorativa', 'modeloModel' => $modelo])
                            </div>

                            <div class="tab-pane" id="variante-arqueometrica">
                                @include('admin.fichas.variantes.variante',['modeloMetaData'=>$modelo->metadata_arqueometrica, 'variante' => 'arqueometrica', 'modeloModel' => $modelo])
                            </div>
                            <div class="col-xl-12">
                                <a class="btn btn-info btn-block" href="{{ route( 'admin.ficha.editar_ficha', compact('modelo')) }}">Salvar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('assets/libs/twitter-bootstrap-wizard/twitter-bootstrap-wizard.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-wizard.init.js') }}"></script>
    <script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/ecommerce-select2.init.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

    <script>
        $(document).on('click','.borrar_foto_modelo',function() {
            let element = $(this);
            $.ajax({
                method: 'POST',
                url: "{{ route('admin.ficha.borrar_foto') }}/" + $(this).data('foto'),
            }).done(function() {
                $("#modelo_foto_content_"+element.data('foto')).fadeOut('50', function() {
                    $(this).remove();
                });
            })
        })

        $(document).on('click','.borrar_foto_variante',function() {
            let element = $(this);
            $.ajax({
                method: 'POST',
                url: "{{ route('admin.ficha.borrar_foto_variante') }}/" + $(this).data('foto'),
            }).done(function() {
                $("#variante_foto_content_"+element.data('foto')).fadeOut('50', function() {
                    $(this).remove();
                });
            })
        })

        $(document).on("click",".borrar_foto_pieza_clave",function() {
            let element = $(this);
            $.ajax({
                method: 'POST',
                url: "{{ route('admin.ficha.borrar_foto_pieza_clave') }}/" + $(this).data('foto'),
            }).done(function() {

                $("#pieza_clave_foto_content_"+element.data('foto')).fadeOut('50', function() {
                    $(this).remove();
                });
            })
        })

        $(document).on("click",".borrar_dibujo_pieza_clave",function() {
            let element = $(this);
            $.ajax({
                method: 'POST',
                url: "{{ route('admin.ficha.borrar_dibujo_pieza_clave') }}/" + $(this).data('foto'),
            }).done(function() {
                $("#pieza_clave_dibujo_content_"+element.data('foto')).fadeOut('50', function() {
                    $(this).remove();
                });
            })
        })

        $('.actualizar_dato_variante').keyup(function() {
            let element = $(this);
            $.ajax({
                method: 'POST',
                url: "{{ route('admin.ficha.actualizar_dato_variante') }}",
                data: {
                    modelo: element.data('modelo'),
                    campo: element.data('campo'),
                    variante: element.data('variante'),
                    seccion: element.data('seccion'),
                    tab: element.data('tab'),
                    valor: element.val(),
                },
            }).done(function(data) {})
        })
    </script>
@endsection

@section('head_script')
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
@endsection

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/dropzone.css" rel="stylesheet" type="text/css"/>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet'/>

    <style>
        .marker_map {
            background-image: url('mapbox-icon.png');
            background-size: cover;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
        }
    </style>

@endsection
