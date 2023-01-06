@extends('layouts.master_front')

@section('title') CATÁLOGO DE CERÁMICA ARQUEOLÓGICO DE COLOMBIA @endsection

@section('content')

<style>
    @media (max-width: 768px) {
        .time-line {
            margin: 10px 0px 10px 0px !important;
        }
        .cards-container {
            width: auto !important;
            max-height: 240px !important;
        }
        .card-img {
            width: 70px !important;
            height: 70px !important;
        }
        .bibliography-content {
            width: 100% !important;
        }
        .bibliography-title {
            margin: 5px 0px 0px 0px !important;
        }
        .code-title {
            margin: 15px 0px 0px 0px !important;
        }
        .description {
            margin: 20px 0px 0px 0px !important;
        }
        .forum-title {
            margin: 5px 0px 0px 0px !important;
        }
        .forum-input-container {
            margin: 0px 0px 0px -15px !important;
        }
        .forum-input {
            width: 100% !important;
            margin: 5px 0px 0px 0px !important;
        }
        .most-voted-btn {
            margin: 10px 5px 0px 0px !important;
        }
        .new-comments-btn {
            margin: 10px 5px 10px 0px !important;
        }
    }

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

    .root-card {
        background-color: #E4EDFF;
        font-family: 'Poppins', sans-serif;
    }

    .info-card {
        border-radius: 16px;
        margin: 32px 32px 14px 32px;
    }

    .card-title {
        font-size: 30px !important;
        color: #113B8F;
    }

    .card-name {
        font-size: 25px;
        font-weight: 600;
        color: #113B8F;
        margin-top: 21px;
    }

    .card-description {
        font-size: 17px;
        font-weight: 300;
        color: #82858B;
        margin-top: 8px;
    }

    .description-title {
        font-size: 17px;
        font-weight: 600;
        color: #113B8F;
        margin-top: 39px;
    }

    .description {
        font-size: 17px;
        font-weight: 300;
        color: #82858B;
        margin-top: 39px;
    }

    .low-confiability {
        width: 87px;
        height: 25px;
        background-color: #FFC7C787;
        border: none;
        border-radius: 13px;
        text-align: center;
        font-size: 15px;
        color: #EC1313;
        cursor: text !important;
    }

    .mid-confiability {
        width: 87px;
        height: 25px;
        background-color: #FFCF9859;
        border: none;
        border-radius: 13px;
        text-align: center;
        font-size: 15px;
        color: #F38200;
        cursor: text !important;
    }

    .high-confiability {
        width: 87px;
        height: 25px;
        background-color: #66E2832B;
        border: none;
        border-radius: 13px;
        text-align: center;
        font-size: 15px;
        color: #34B752;
        cursor: text !important;
    }

    .outlined-blue {
        height: 25px;
        background-color: #E4EDFF;
        border: 1px solid #3366CC;
        border-radius: 13px;
        text-align: center;
        font-size: 15px;
        color: #3366CC;
        cursor: text !important;
    }

    .map-img {
        max-width: 99%;
        max-height: 99%;
        border-radius: 13px;
    }

    .main-card-img {
        max-width: 99%;
        max-height: 99%;
        border-radius: 13px;
    }

    .cards-container {
        display: grid !important;
        grid-template-columns: repeat(1, 1fr) !important;
        grid-template-rows: repeat(1, 1fr) !important;
        max-width: 180px;
        max-height: 305px;
        overflow: scroll;
        overflow-x: hidden;
        align-items: center;
        justify-items: center;
        border-radius: 13px !important;
    }

    .card-img {
        width: 120px;
        height: 71px;
    }

    .time-line {
        margin: 35px 0px 57px 0px;
    }

    .pills-card {
        border-radius: 16px;
        margin: 14px 32px 14px 32px;
    }

    .bibliography-card {
        border-radius: 16px;
        margin: 17px 32px 17px 32px;
    }
    
    .bibliography-content {
        width: 50%;
    }

    .bibliography-title {
        font-size: 25px;
        color: #113B8F;
        margin: 39px 0px 98px 39px;
    }

    .code-title {
        font-size: 25px;
        color: #113B8F;
        margin: 39px 0px 98px 48px;
    }

    .forum-card {
        border-radius: 16px;
        margin: 17px 32px 146px 32px;
    }

    .forum-title {
        font-size: 25px;
        color: #113B8F;
        margin: 37px 0px 0px 0px;
    }

    .forum-input {
        background-color: #E4EDFF;
        border: none;
        border-radius: 13px;
        width: 75%;
        padding: 10px;
        margin: 37px 0px 0px 0px;
    }

    .send-btn {
        height: 25px;
        background-color: #E4EDFF;
        border: none;
        border-radius: 13px;
        text-align: center;
        font-size: 15px;
        color: #113B8F;
    }

    .horizontal-line {
        width: 100%;
        border: 5px solid #E2E2E2;
        background-color: #E2E2E2;
    }

    .forum-description-title {
        font-size: 15px;
        color: #113B8F;
    }

    .comments-number {
        background-color: #FFFFFF;
        border: none;
        text-align: center;
        cursor: text !important;
    }

    .most-voted-btn {
        background-color: #3366CC;
        border: 1px solid #3366CC;
        border-radius: 13px;
        text-align: center;
        font-size: 15px;
        color: #FFFFFF;
        margin: 0px 10px 0px 15px;
    }

    .most-voted-btn:hover {
        background-color: #3366CC60;
        border: 1px solid #3366CC60;
    }

    .most-voted-btn:active {
        background-color: #3366CC;
        border: 1px solid #3366CC90;
    }

    .new-comments-btn {
        background-color: #E4EDFF;
        border: 1px solid #3366CC;
        border-radius: 13px;
        text-align: center;
        font-size: 15px;
        color: #3366CC;
    }

    .new-comments-btn:hover {
        background-color: #E4EDFF60;
        border: 1px solid #3366CC60;
    }

    .new-comments-btn:active {
        background-color: #E4EDFF;
        border: 1px solid #3366CC90;
    }

    .comment-card {
        border: 3px solid #E2E2E2;
        border-radius: 13px;
    }

    .comment-card-primary {
        width: 75%;
        margin: 40px 0px 0px 0px;
    }

    .comment-card-seconday {
        width: 70%;
        margin: 51px 0px 51px 105px;
    }

    .comment-card-seconday::before {
        content: " ";
        width: 16px;
        height: 24%;
        border-left: 2px solid #C6C6C6;
        border-bottom: 2px solid #C6C6C6;
        border-bottom-left-radius: 8px;
        position: absolute;
        bottom: 15%;
        margin-left: -30px;
    }

    .user-name-title {
        font-size: 17px;
        font-weight: 600;
        color: #113B8F;
        margin: 0px 0px 2px 0px;
    }

    .post-date-title {
        font-size: 13px;
        font-weight: 600;
        color: #82858B;
    }

    .number-count {
        width: 28px;
        height: 22px;
        background-color: #E4EDFF;
        border-radius: 5px;
        font-size: 13px;
        font-weight: 600;
        text-align: center;
        color: #3366CC;
    }

    .interact-btn {
        background: #FFFFFF;
        border: none;
    }

    .reply-title {
        font-size: 13px;
        font-weight: 600;
        color: #3366CC;
        margin: 0px 4px 0px 4px;
    }
</style>

<div class="root-card row">
    <div class="col-lg-12">
        <div class="info-card card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title mb-4">{{ $modelo->codigo }}</h4>
                        <button type="button" class="outlined-blue d-flex justify-content-center align-items-center">
                            <img src="{{ asset('assets/svg/message-icon.svg') }}" alt="Message icon" class="p-1">
                            X Temas
                        </button>
                        <p class="card-name">Copa de pedestal cilíndrico</p>
                        <p class="card-description">Plato aquillado o cuenco con pedestal evertido en la parte superior. Decoración geométrica excisa.</p>
                        @php
                            $descriptions = array (
                            array("Nombres conocidos","Copa de pedestal tubular"),
                            array("Área geográfica","Costa Caribe"),
                            array("Subregión geográfica","Valles del Río Sinú y Alto San Jorge"),
                            array("Departamento","Córdoba, Magdalena"),
                            array("Clasificación existente","Complejo Betací"),
                            array("Integridad del modelo","Piezas completas"),
                            array("Función","Ritual ceremonial"),
                            array("Cronología","1300-1500 d.C."),
                            array("Cronología relativa","Tardío"),
                            );
                        @endphp
                        @foreach($descriptions as $description)
                            <p>
                                <span class="description-title">{{ $description[0] }}</span>
                                <span class="description">{{ $description[1] }}</span>
                            </p>
                        @endforeach
                        <span class="description-title">Confiabilidad del modelo:</span>
                        <button type="button" class="low-confiability">
                            Baja
                        </button>
                        <button type="button" class="mid-confiability">
                            Media
                        </button>
                        <button type="button" class="high-confiability">
                            Alta
                        </button>
                        <span class="description-title">Modelos relacionados:</span>
                        <button type="button" class="outlined-blue">
                            CCsin2
                        </button>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <img src="https://media.istockphoto.com/id/1285728481/vector/belarus-russia-countries-isolated-on-world-map.jpg?b=1&s=612x612&w=0&k=20&c=46nBkIP1cRlWVjyt5B02Co1Pqwcor4Wpl3vALiLWKKU=" class="map-img d-block mt-4 mt-md-0" alt="">
                            <p class="time-line">Línea de tiempo</p>
                            <div class="row">
                                <div class="d-none d-md-inline col">
                                    <img src="https://cdn.shopify.com/s/files/1/1079/2686/products/cs695-8c_large.JPG?v=1571325822" class="main-card-img mt-4 mt-md-0" alt="">
                                </div>
                                <div class="col cards-container">
                                    <ul class="nav nav-pills nav-fill">
                                        @for ($i = 0; $i < 8; $i++)
                                            <li class="nav-item">
                                                <a href="#" class="@if($i==0) active @endif nav-link" data-toggle="tab" aria-current="page">
                                                    <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" class="card-img mx-auto d-block" alt="">
                                                </a>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pills-card card">
            <div class="card-body">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item tabs-busqueda">
                        <a href="#modelo" class="nav-link tab_modelo active" data-toggle="tab" aria-current="page">Modelo</a>
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
        <div class="bibliography-card card">
            <div class="card-body">
                <div class="d-flex flex-column flex-md-row align-items-start">
                    <div class="bibliography-content d-flex flex-column flex-md-row">
                        <span class="bibliography-title">
                            Bibliografía
                        </span>
                        <div class="description ml-5">
                            <span>
                                Reichel-Dolmatoff, G., & Reichel-Dolmatoff, A. (1957). Reconocimiento arqueológico de la hoya del río Sinú. Revista Colombiana De Antropología, 6, 31–149
                            </span>
                        </div>
                    </div>
                    <div class="bibliography-content d-flex flex-column flex-md-row">
                        <span class="code-title">
                            Código interno
                        </span>
                        <div class="description w-50 ml-5">
                            <span>
                                M.O-C12620
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="forum-card card">
            <div class="card-body">
                <div class="row flex-column flex-md-row">
                    <div class="col col-md-1">
                        <h1 class="forum-title">Foro</h1>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-column flex-md-row">
                            <div class="col forum-input-container">
                                <textarea class="forum-input" placeholder="Escribe tu aporte"></textarea>
                                <button type="button" class="send-btn">
                                    Publicar
                                </button>
                            </div>
                        </div>
                        <div class="d-none d-md-flex flex-md-column col-11">
                            <hr class="horizontal-line">
                        </div>
                        <div class="d-flex flex-column">
                            <div>
                                <button type="button" class="comments-number forum-description-title d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('assets/svg/message-icon.svg') }}" alt="Message icon" class="p-1">
                                        X Temas
                                </button>
                            </div>
                            <div class="flex-column flex-md-row">
                                <span class="forum-description-title ml-1 ml-md-5">Ordenar por:</span>
                                <button type="button" class="most-voted-btn d-block d-md-inline">
                                    Más votados
                                </button>
                                <button type="button" class="new-comments-btn d-block d-md-inline">
                                    Nuevos
                                </button>
                            </div>
                            <div class="comment-card comment-card-primary ml-2 ml-md-0 mb-2 mb-md-3">
                                <div class="row flex-column flex-md-row">
                                    <div class="col-7">
                                        <p class="user-name-title ml-2 ml-md-3">User name</p>
                                        <p class="post-date-title ml-2 ml-md-3">Hace 1 día</p>
                                    </div>
                                    <div class="col-1 mt-2 mt-md-0 mr-md-1 mb-0 ml-1 ml-md-4">
                                        <button type="button" class="interact-btn d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('assets/svg/like-icon.svg') }}" alt="Like icon" class="p-1">
                                            <span class="number-count">58</span>
                                        </button>
                                    </div>
                                    <div class="col-2 mt-2 mt-md-0 mb-0 ml-1 ml-md-3">
                                        <button type="button" class="interact-btn d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('assets/svg/share-arrow.svg') }}" width="24" height="24" alt="Like icon" class="p-1">
                                            <span class="reply-title">Responder</span>
                                            <span class="number-count">1</span>
                                        </button>
                                    </div>  
                                </div>
                                <div class="">
                                    <p class="description ml-2 ml-md-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ipsum urna, blandit eu felis eu, dictum pretium ipsum. Nam vel velit faucibus, bibendum nibh a, iaculis mi. Donec velit purus, posuere eu magna mattis, varius efficitur justo.</p>
                                </div>
                            </div>
                            <div class="comment-card comment-card-seconday d-none d-md-block">
                                <div class="row flex-column flex-md-row">
                                    <div class="col-10">
                                        <p class="user-name-title ml-2 ml-md-3">User name</p>
                                        <p class="post-date-title ml-2 ml-md-3">Hace 1 día</p>
                                    </div>
                                    <div class="col-1 mr-md-1 mt-2 mt-md-0 mb-0">
                                        <button type="button" class="interact-btn d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('assets/svg/like-icon.svg') }}" alt="Like icon" class="p-1">
                                            <span class="number-count">58</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="">
                                    <p class="description ml-2 ml-md-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ipsum urna, blandit eu felis eu, dictum pretium ipsum. Nam vel velit faucibus, bibendum nibh a, iaculis mi. Donec velit purus, posuere eu magna mattis, varius efficitur justo.</p>
                                </div>
                            </div>
                        </div>
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
<link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet' />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

<link rel="stylesheet" href="{{ asset( 'assets/css/bootstrap-slider.css' ) }}">
<link rel="stylesheet" href="{{ asset( 'assets/css/buscador_front.css' ) }}">
@endsection