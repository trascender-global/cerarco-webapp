@extends('layouts.master_front')

@section('title') CATÁLOGO DE CERÁMICA ARQUEOLÓGICO DE COLOMBIA @endsection

@section('content')

    <div class="checkout-main-area section-space--ptb_20 bg-rojolight">
        <div class="headrow fondo-rojo">
            <div class="col-lg-12">
                <h2 class="whitetitle">{{ getFichasModeloNombre($modelo) }}</h2>
                <h3 class="whitetitle">{{ $modelo->codigo }}</h2>
                    <h4 class="whitetitle">PIEZA CLAVE</h2>
            </div>

            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 whitetitle small"></h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Inicio</a></li>
                            <li class="breadcrumb-item active">{{ $modelo->codigo }}</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col">
                <ul class="nav nav-pills nav-fill mb-3 px-4 mx-auto" id="pills-tab" role="tablist">
                    <li class="nav-item px-1">
                        <a class="nav-link active btn btn-warning text-uppercase btn-block" id="pills-data-tab" data-toggle="pill" href="#pills-data" role="tab" aria-controls="pills-data" aria-selected="true">
                            DATOS GENERALES
                        </a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link btn btn-warning text-uppercase btn-block" id="pills-descripcion-tab" data-toggle="pill" href="#pills-descripcion" role="tab" aria-controls="pills-descripcion" aria-selected="false">
                            DESCRIPCIÓN FORMAL
                        </a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link btn btn-warning text-uppercase btn-block" id="pills-decoracion-tab" data-toggle="pill" href="#pills-decoracion" role="tab" aria-controls="pills-decoracion" aria-selected="false">
                            DECORACIÓN
                        </a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link btn btn-warning text-uppercase btn-block" id="pills-desctech-tab" data-toggle="pill" href="#pills-desctech" role="tab" aria-controls="pills-desctech" aria-selected="false">
                            DESCRIPCIÓN TÉCNICA
                        </a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link btn btn-warning text-uppercase btn-block" id="pills-mapa-tab" data-toggle="pill" href="#pills-mapa" role="tab" aria-controls="pills-mapa" aria-selected="false">
                            MAPA Y CRONOLOGÍA
                        </a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link btn btn-warning text-uppercase btn-block" id="pills-img-tab" data-toggle="pill" href="#pills-img" role="tab" aria-controls="pills-img" aria-selected="false">
                            IMÁGENES
                        </a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link btn btn-warning text-uppercase btn-block" id="pills-bibliografia-tab" data-toggle="pill" href="#pills-bibliografia" role="tab" aria-controls="pills-bibliografia" aria-selected="false">
                            BIBLIOGRAFÍA
                        </a>
                    </li>
                </ul>

                <div class="tab-content px-4 mb-3" id="pills-tabContent">
                    <div class="tab-pane fade show active pb-4 pl-4 pr-4" id="pills-data" role="tabpanel" aria-labelledby="pills-data-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <span class="d-block"><b>NOMBRE</b></span>
                                <span>{{ getFichasModeloNombre($modelo) }}</span>
                            </div>
                            <div class="col-md-6">
                                <span class="d-block"><b>DESCRIPCIÓN FORMAL(RESUMEN)</b></span>
                                <span>{{ getFichasModeloDescripcion($modelo) }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <span class="d-block"><b>CÓDIGO DE MODELO</b></span>
                                <span>{{ $modelo->codigo }}</span>
                            </div>
                            <div class="col-md-6">
                                <span class="d-block"><b>VARIANTES DE MODELO ASOCIADA</b></span>
                                <span>{{ getFichasModeloVarianteModeloAsociada($modelo) }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <span class="d-block"><b>VARIANTES DECORATIVA ASOCIADA</b></span>
                                <span>{{ getFichasModeloVarianteDecorativaAsociada($modelo) }}</span>
                            </div>
                            <div class="col-md-6">
                                <span class="d-block"><b>ÁREA GEOGRÁFICA</b></span>
                                <span>{{ getFichasModeloAreaGeografica($modelo) }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <span class="d-block"><b>SUBREGIÓN GEOGRÁFICA</b></span>
                                <span>{{ getFichasModeloSubRegionGeografica($modelo) }}</span>
                            </div>
                            <div class="col-md-6">
                                <span class="d-block"><b>DEPARTAMENTO</b></span>
                                <span>{{ getFichasModeloDepartamento($modelo) }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <span class="d-block"><b>MUNICIPIO DE HALLAZGO</b></span>
                                <span>{{ getFichasModeloMunicipioHallazgo($modelo) }}</span>
                            </div>
                            <div class="col-md-6">
                                <span class="d-block"><b>SITIO ARQUELÓGICO DE HALLAZGO</b></span>
                                <span>{{ getFichasModeloSitioArqueologicoHallazgo($modelo)}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <span class="d-block"><b>CLASIFICACIÓN EXISTENTE</b></span>
                                <span>{{ getFichasModeloClasificacionExistente($modelo) }}</span>
                            </div>
                            <div class="col-md-6">
                                <span class="d-block"><b>CONFIABILIDAD DEL MODELO</b></span>
                                <span>{{ getFichasModeloConfiabilidadModelo($modelo) }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <span class="d-block"><b>MODELO CONFORMADO POR PIEZAS PROCEDENTES DE:</b></span>
                                <span>{{ getFichasModeloConformadoPiezasProcedentes($modelo) }}</span>
                            </div>
                            <div class="col-md-6">
                                <span class="d-block"><b>INTEGRIDAD DE LA PIEZA</b></span>
                                <span>{{ getFichasModeloIntegridadPieza($modelo) }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <span class="d-block"><b>FUNCIÓN PRIMARIA</b></span>
                                <span>{{ getFichasModeloFuncionPrimaria($modelo) }}</span>
                            </div>
                            <div class="col-md-6">
                                <span class="d-block"><b>CONTEXTO</b></span>
                                <span>{{ getFichasModeloContexto($modelo) }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-warning waves-effect waves-light col-lg-12">
                                <i class="fa fa-exclamation-triangle"></i>CONFIABILIDAD {{ getFichasModeloConfiabilidad($modelo) }}
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane fade pl-4 pr-4" id="pills-descripcion" role="tabpanel" aria-labelledby="pills-descripcion-tab">
                        @foreach(array_merge($detalle['Descripción formal'] ?? [] ,$detalle['Descripción formal '] ?? [])   as $titulo => $campo)
                            @if($loop->odd || $loop->first)
                                <div class="row">
                                    @endif
                                    <div class="col-md-6">
                                        <span class="d-block"><b>{{ $titulo }}</b></span>
                                        <span>{{ $campo['valor'] ?: '---' }}</span>
                                    </div>
                                    @if($loop->even || $loop->last)
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane fade pl-4 pr-4" id="pills-decoracion" role="tabpanel" aria-labelledby="pills-decoracion-tab">
                        @foreach($detalle['Decoración'] ?? [] as $titulo => $campo)
                            @if($loop->odd || $loop->first)
                                <div class="row">
                                    @endif
                                    <div class="col-md-6">
                                        <span class="d-block"><b>{{ $titulo }}</b></span>
                                        <span>{{ $campo['valor'] ?: '---' }}</span>
                                    </div>
                                    @if($loop->even || $loop->last)
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane fade pl-4 pr-4" id="pills-desctech" role="tabpanel" aria-labelledby="pills-desctech-tab">
                        @foreach($detalle['Descripción técnica'] ?? [] as $titulo => $campo)
                            @if($loop->odd || $loop->first)
                                <div class="row">
                                    @endif
                                    <div class="col-md-6">
                                        <span class="d-block"><b>{{ $titulo }}</b></span>
                                        <span>{{ $campo['valor'] ?: '---' }}</span>
                                    </div>
                                    @if($loop->even || $loop->last)
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane fade pl-4 pr-4" id="pills-mapa" role="tabpanel" aria-labelledby="pills-mapa-tab">
                        @include('front.page.fichas.mapa')
                        <div class="container-fluid p-3">
                            <!-- Range slider: -->
                            <input
                                    id="ex23"
                                    type="text"
                                    data-slider-ticks="[0, 500, 1000, 1500, 2000, 2500, 3000, 3500, 4000, 4100, 4200, 4300, 4400, 4500, 4600, 4700, 4800, 4900, 5000, 5100, 5200, 5300, 5400, 5500, 5600, 5700, 5800, 5900, 6000, 6100, 6200, 6300, 6400, 6500, 6600, 6700, 6800, 6900, 7000, 7100, 7200, 7300, 7400, 7500, 7600, 7700, 7800]"
                                    data-slider-step="100"
                                    data-slider-ticks-snap-bounds="200"
                                    data-slider-ticks-tooltip="true"
                                    data-slider-handle="custom"
                                    ticks_positions="[0, 6, 13, 19, 26, 32, 38, 45, 51, 53, 54, 55, 56, 58, 59, 60, 62, 63, 64, 65, 67, 68, 69, 71, 72, 73, 74, 76, 77, 78, 79, 81, 82, 83, 85, 86, 87, 88, 90, 91, 92, 94, 95, 96, 97, 99, 100]"/>
                        </div>
                    </div>
                    <div class="tab-pane fade pl-4 pr-4" id="pills-img" role="tabpanel" aria-labelledby="pills-img-tab">
                        <div class="product-details-images-2 slider-lg-image-2">
                            @each('front.page.buscador.fotos', $modelo->fotosPiezasClave, 'foto')
                        </div>
                        <div class="product-details-thumbs-2 slider-thumbs-2">
                            @each('front.page.buscador.fotos_slider', $modelo->fotosPiezasClave, 'foto')
                        </div>
                    </div>
                    <div class="tab-pane fade pl-4 pr-4" id="pills-bibliografia" role="tabpanel" aria-labelledby="pills-bibliografia-tab">
                        @foreach($detalle['Bibliografía'] ?? [] as $titulo => $campo)
                            @if($loop->odd || $loop->first)
                                <div class="row">
                                    @endif
                                    <div class="col-md-6">
                                        <span class="d-block"><b>{{ $titulo }}</b></span>
                                        <span>{{ $campo['valor'] ?: '---' }}</span>
                                    </div>
                                    @if($loop->even || $loop->last)
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        @include('front.page.fichas.menu', compact('modelo'))
    </div>

@endsection

@section('script')

    @include('front.page.fichas.assets_mapa')

    <!-- bs custom file input plugin -->
    <script src="{{ asset('assets/libs/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/form-element.init.') }}js"></script>

    <script id="rendered-js">
        // image gallery
        // init the state from the input
        $(".image-checkbox").each(function () {
            if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
                $(this).addClass('image-checkbox-checked');
            } else {
                $(this).removeClass('image-checkbox-checked');
            }
        });

        // sync the state to the input
        $(".image-checkbox").on("click", function (e) {
            $(this).toggleClass('image-checkbox-checked');
            var $checkbox = $(this).find('input[type="checkbox"]');
            $checkbox.prop("checked", !$checkbox.prop("checked"))

            e.preventDefault();
        });

        new Slider("#ex23", {
            ticks: [0, 500, 1000, 1500, 2000, 2500, 3000, 3500, 4000, 4100, 4200, 4300, 4400, 4500, 4600, 4700, 4800, 4900, 5000, 5100, 5200, 5300, 5400, 5500, 5600, 5700, 5800, 5900, 6000, 6100, 6200, 6300, 6400, 6500, 6600, 6700, 6800, 6900, 7000, 7100, 7200, 7300, 7400, 7500, 7600, 7700, 7800],
            ticks_positions: [0, 6, 13, 19, 26, 32, 38, 45, 51, 53, 54, 55, 56, 58, 59, 60, 62, 63, 64, 65, 67, 68, 69, 71, 72, 73, 74, 76, 77, 78, 79, 81, 82, 83, 85, 86, 87, 88, 90, 91, 92, 94, 95, 96, 97, 99, 100],
            ticks_snap_bounds: 200,
            ticks_labels: ['6000 a.C', '', '', '', '', '', '', '', '2000 a.C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1800 d.C.'],
            formatter: function (value) {
                if (Array.isArray(value)) {
                    var first = value[0] - 6000;
                    var last = value[1] - 6000;

                    if (first < 0) {
                        first = Math.abs(first) + ' a.C';
                    } else {
                        first = first + ' d.C'
                    }

                    if (last < 0) {
                        last = Math.abs(last) + ' a.C';
                    } else {
                        last = last + ' d.C';
                    }

                    return first + ' a ' + last;
                } else {
                    if ((value - 6000) < 0) {
                        return Math.abs(value - 6000) + ' a.C.';
                    } else {
                        return (value - 6000) + ' d.C.';
                    }
                }
            },
            ticks_tooltip: true,
            step: 100,
            value: [500, 500]
        });

    </script>

@endsection

@section('head_script')
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <script src="{{ asset( 'assets/js/vendor/bootstrap-slider.js' ) }}"></script>
@endsection

@section('css')
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet'/>
    <link rel="stylesheet" href="{{ asset( 'assets/css/bootstrap-slider.css' ) }}"/>
@endsection
