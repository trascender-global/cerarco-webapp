@extends('layouts.master_front')

@section('title') CATÁLOGO DE CERÁMICA ARQUEOLÓGICO DE COLOMBIA @endsection

@section('content')

    @component('common-components.breadcrumb-front')
        @slot('title') Foro @endslot
        @slot('seccion') Foro @endslot
    @endcomponent

    <div class="site-wrapper-reveal border-bottom">
        <div class="blog-page-wrapper section-space--pt_60 section-space--pb_120">
            <div class="container">
                <div class="row flex-column flex-md-row">
                    <div>
                        <span class="order-title ml-1 ml-md-5">Ordenar por:</span>
                        <button type="button" class="most-comments-btn d-block d-md-inline">
                            Fichas más comentadas
                        </button>
                        <button type="button" class="new-comments-btn d-block d-md-inline">
                            Fichas con comentarios recientes
                        </button>
                    </div>
                </div>

                <!-- Comment card -->
                <div class="card flex-column flex-md-row mt-2 mt-md-4 ml-1 ml-md-4">
                    <div class="card-description">
                        <p class="card-p-primary">CCsin1</p>
                        <p class="card-p-secondary">Copa de pedestal cilindrico</p>
                        <img class="card-description-img" src="..." alt="Imagen de ficha">
                        <button type="button" class="card-description-btn d-block mt-2 mt-md-3">
                            Ver ficha
                        </button>
                    </div>
                    <div class="card-body">
                        <button type="button" class="interact-btn d-flex justify-content-center align-items-center">
                            <img src="{{ asset('assets/svg/like-icon.svg') }}" alt="Like icon" class="p-1">
                            <span class="number-count">58</span>
                        </button>
                        <p class="description mt-2 mt-md-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <hr class="horizontal-line">
                        <div class="row flex-column flex-md-row">
                            <div class="col-8 description description-title">
                                User name
                            </div>
                            <div class="col-5 col-md-3">
                                <button type="button" class="date-comment-btn d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('assets/svg/clock-icon.svg') }}" alt="Message icon" class="p-1">
                                        Hace 1 día
                                </button>
                            </div>
                            <div class="col-1">
                                <button type="button" class="messages-btn d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/svg/message-grey-icon.svg') }}" alt="Message icon" class="p-1">
                                    5
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End comment card -->
            </div>
        </div>
    </div>

@endsection

@section('css')

    <style>
        @media (max-width: 768px) {
            .most-comments-btn {
                margin: 10px 0px 10px 0px !important;
            }
            .new-comments-btn {
                margin: 10px 0px 10px 0px !important;
            }
            .card-description {
                width: 100% !important;
                border-radius: 13px !important;
            }
        }

        .card {
            border-radius: 13px !important;
        }

        .most-comments-btn {
            background-color: #3366CC;
            border: 1px solid #3366CC;
            border-radius: 16px;
            text-align: center;
            font-size: 19px;
            color: #FFFFFF;
            margin: 0px 10px 0px 15px;
        }

        .most-comments-btn:hover {
            background-color: #3366CC60;
            border: 1px solid #3366CC60;
        }

        .most-comments-btn:active {
            background-color: #3366CC;
            border: 1px solid #3366CC90;
        }

        .new-comments-btn {
            background-color: #E4EDFF;
            border: 1px solid #3366CC;
            border-radius: 16px;
            text-align: center;
            font-size: 19px;
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
        
        .order-title {
            font-size: 19px;
            color: #113B8F;
        }

        .card-description {
            width: 32%;
            background: #E4EDFF;
            border-radius: 13px 0px 0px 13px;
            padding: 22px;
        }

        .card-p {
            font-size: 25px;
            color: #113B8F;
        }

        .card-p-primary {
            font-weight: 600;
        }

        .card-p-secondary {
            font-weight: 300;
        }

        .card-description-img {
            width: 100%;
            height: 80%;
        }

        .card-description-btn {
            width: 100%;
            background-color: #E4EDFF;
            border: 1px solid #3366CC;
            border-radius: 9px;
            text-align: center;
            font-size: 17px;
            color: #3366CC;
        }

        .card-description-btn:hover {
            background-color: #E4EDFF40;
            border: 1px solid #3366CC40;
            color: #3366CC40;
        }

        .card-description-btn:active {
            background-color: #E4EDFF90;
            border: 1px solid #3366CC90;
            color: #3366CC;
        }

        .card-body {
            border-radius: 0px 13px 13px 0px !important;
        }

        .interact-btn {
            background: #FFFFFF;
            border: none;
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

        .horizontal-line {
            width: 100%;
            border: 2px solid #F1ECEC;
            background-color: #F1ECEC;
        }

        .description {
            color: #67696E;
            font-size: 17px;
        }

        .description-title {
            font-weight: 600;
        }

        .date-comment-btn {
            background-color: #FFFFFF;
            border: none;
            text-align: center;
            font-size: 13px;
            color: #A3A3A3;
            cursor: text !important;
        }

        .messages-btn {
            background-color: #FFFFFF;
            border: none;
            text-align: center;
            font-size: 13px;
            color: #A3A3A3;
        }
    </style>

@endsection