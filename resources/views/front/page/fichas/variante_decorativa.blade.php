@extends('layouts.master_front')

@section('title') CATÁLOGO DE CERÁMICA ARQUEOLÓGICO DE COLOMBIA @endsection

@section('content')

    <div class="checkout-main-area section-space--ptb_90 bg-azullight">
        <div class="headrow fondo-azul">
            <div class="col-lg-12">
                <h2 class="whitetitle">CATÁLOGO DE CERÁMICA ARQUEOLÓGICA DE COLOMBIA</h2>
            </div>

            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 whitetitle small">VARIANTE DE FORMA</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Inicio</a></li>
                            <li class="breadcrumb-item active">{{ $modelo->codigo }}</li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">DESCRIPCIÓN</a></li>
                            <li class="breadcrumb-item active">VARIANTE DE FORMA</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mry-10">
            <div class="col-lg-4">
                <div class="customer-zone mb-30">
                    <div class="card fondo-trans">
                        <div class="card-body">
                            <h5 class="font-size-12"></h5>
                            <div class="row">
                                @foreach($fotos as $foto)
                                    <div class="col-xs-12 col-sm-6 col-md-6 nopad text-center">
                                        <label class="image-checkbox">
                                            <a href="{{ route('front.ficha.detalle_decorativa', ['modelo'=>$modelo, 'codigo' => (isset($foto['codigo']) &&!empty($foto['codigo'])) ? $foto['codigo'] : '-' ]) }}">
                                                <img class="img-responsive" src="{{ $foto['foto'] }}"/>
                                            </a>
                                            <i class="fa fa-check hidden"></i>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                @include('front.page.fichas.mapa')
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