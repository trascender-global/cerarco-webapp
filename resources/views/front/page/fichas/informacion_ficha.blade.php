@extends('layouts.master_front')

@section('title') CATÁLOGO DE CERÁMICA ARQUEOLÓGICO DE COLOMBIA @endsection

@section('content')

<style>
       .modal.modal-fullscreen .modal-dialog {
  width: 100vw;
  height: 100vh;
  margin: 0;
  padding: 0;
  max-width: none; 
}

.modal.modal-fullscreen .modal-content {
  height: auto;
  height: 100vh;
  border-radius: 0;
  border: none; 
}

.modal.modal-fullscreen .modal-body {
  overflow-y: auto; 
}

    </style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Ficha: <em>{{ $modelo->codigo }}</em></h4>
                    <ul class="nav nav-pills">
                        <li class="nav-item tabs-busqueda">
                            <a href="#modelo" class="nav-link active tab_modelo" data-toggle="tab" aria-current="page">Modelo</a>
                        </li>
                        <li class="nav-item tabs-busqueda">
                            <a href="#variante-de-forma" class="nav-link tab_forma" data-toggle="tab" aria-current="page">Variantes de Forma</a>
                        </li>
                        <li class="nav-item tabs-busqueda">
                            <a href="#variante-decorativa" class="nav-link tab_decorativa" data-toggle="tab" aria-current="page">Variantes Decorativas</a>
                        </li>
                        <li class="nav-item tabs-busqueda">
                            <a href="#variante-arqueometrica" class="nav-link tab_arqueometrica" data-toggle="tab" aria-current="page">Variantes Arqueométricas</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pieza-clave" class="nav-link tab_pieza_clave" aria-current="page" data-toggle="tab">Pieza Clave</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane tab_modelo active" id="modelo">
                            @include('front.fichas.variantes.modelo',['modeloMetaData'=>$modelo->metadata_modelo, 'variante' => 'modelo', 'modeloModel' => $modelo])
                        </div>

                        <div class="tab-pane tab_forma" id="variante-de-forma">
                            @include('front.fichas.variantes.variante',['modeloMetaData'=>$modelo->metadata_forma, 'variante' => 'forma', 'modeloModel' => $modelo])
                        </div>

                        <div class="tab-pane tab_decorativa" id="variante-decorativa">
                            @include('front.fichas.variantes.variante',['modeloMetaData'=>$modelo->metadata_decorativa, 'variante' => 'decorativa', 'modeloModel' => $modelo])
                        </div>

                        <div class="tab-pane tab_arqueometrica" id="variante-arqueometrica">
                            @include('front.fichas.variantes.variante',['modeloMetaData'=>$modelo->metadata_arqueometrica, 'variante' => 'arqueometrica', 'modeloModel' => $modelo])
                        </div>

                        <div class="tab-pane tab_pieza_clave" id="pieza-clave">
                            @include('front.fichas.variantes.foreach-pieza_clave',['piezas_clave'=>$modelo->piezasClave,'modelo'=>$modelo])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('head_script')
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset( 'assets/js/vendor/bootstrap-slider.js' ) }}"></script>
@endsection


@section('css')
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet'/>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link rel="stylesheet" href="{{ asset( 'assets/css/bootstrap-slider.css' ) }}">
    <link rel="stylesheet" href="{{ asset( 'assets/css/buscador_front.css' ) }}">

@endsection

