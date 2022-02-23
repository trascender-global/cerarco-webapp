@extends('layouts.master_front')

@section('title') CATÁLOGO DE CERÁMICA ARQUEOLÓGICO DE COLOMBIA @endsection

@section('content')

    <div class="checkout-main-area section-space--ptb_90 bg-verdelight">
        <div class="headrow fondo-verde">
            <div class="col-lg-12">
                <h2 class="whitetitle">{{ getFichasModeloNombre($modelo) }}</h2>
                <h3 class="whitetitle">{{ $modelo->codigo }}</h2>
                <h4 class="whitetitle">PIEZA CLAVE</h2>
            </div>

            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 whitetitle small">VARIANTE DE FORMA</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('front.index') }}">INICIO</a></li>
                            <li class="breadcrumb-item active">{{ $codigo }}</li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">DESCRIPCIÓN</a></li>
                            <li class="breadcrumb-item active">VARIANTE DE FORMA</li>
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
                        <a class="nav-link btn btn-warning text-uppercase btn-block" id="pills-descripcion-tab" data-toggle="pill" href="#pills-descripcion" role="tab" aria-controls="pills-descripcion" aria-selected="true">
                            DESCRIPCIÓN FORMAL
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
                        @foreach($detalle['Descripción Formal'] ?? [] as $titulo => $campo)
                            @if($loop->odd || $loop->first)
                                <div class="row">
                                    @endif
                                    <div class="col-md-6">
                                        <span class="d-block"><b>{{ $loop->first ? 'NOMBRE' : $titulo }}</b></span>
                                        <span>{{ $loop->first ? getFichasModeloNombre($modelo)  : ($campo['valor'] ?: '---') }}</span>
                                    </div>
                                    @if($loop->even || $loop->last)
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane fade pl-4 pr-4" id="pills-descripcion" role="tabpanel" aria-labelledby="pills-descripcion-tab">
                        @foreach($detalle['Descripción Formal'] ?? [] as $titulo => $campo)
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
                                    ticks_positions="[0, 6, 13, 19, 26, 32, 38, 45, 51, 53, 54, 55, 56, 58, 59, 60, 62, 63, 64, 65, 67, 68, 69, 71, 72, 73, 74, 76, 77, 78, 79, 81, 82, 83, 85, 86, 87, 88, 90, 91, 92, 94, 95, 96, 97, 99, 100]" />
                        </div>
                    </div>
                    <div class="tab-pane fade pl-4 pr-4" id="pills-img" role="tabpanel" aria-labelledby="pills-img-tab">
                        <div class="product-details-images-2 slider-lg-image-2">
                            @each('front.page.buscador.fotos', $fotos, 'foto')
                        </div>
                        <div class="product-details-thumbs-2 slider-thumbs-2">
                            @each('front.page.buscador.fotos_slider', $fotos, 'foto')
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

@section('head_script')
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
@endsection

@section('css')
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet'/>
@endsection