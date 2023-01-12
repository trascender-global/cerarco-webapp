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
                            <span class="order-title-19 ml-1 ml-md-5">Ordenar por:</span>
                            <button type="button" class="solid-blue-btn filter-comments-19 d-block d-md-inline">
                                Fichas más comentadas
                            </button>
                            <button type="button" class="outlined-blue-btn filter-comments-19 d-block d-md-inline">
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
                            <div class="d-flex justify-content-center justify-content-md-start align-items-center">
                                <button type="button" class="interact-btn d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('assets/svg/like-icon.svg') }}" alt="Like icon" class="p-1">
                                    <span class="number-count">58</span>
                                </button>
                                <button type="button" class="interact-btn d-flex justify-content-center align-items-center" data-toggle="modal" data-target=".forum-modal">
                                    <img src="{{ asset('assets/svg/share-arrow.svg') }}" width="24" height="24" alt="Like icon" class="p-1">
                                    <span class="reply-title">Responder</span>
                                </button>
                            </div>
                            <p class="description mt-2 mt-md-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <hr class="horizontal-line">
                            <div class="row flex-column flex-md-row">
                                <div class="col-8 description description-title ml-2 ml-md-0">
                                    User name
                                </div>
                                <div class="col-7 col-md-3">
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

            <!-- Forum modal -->
            <div class="modal fade forum-modal" tabindex="-1" role="dialog" aria-labelledby="forumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-container" role="document">
                    <div class="modal-content">
                        <div class="modal-top">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row flex-column flex-md-row">
                                    <div class="col-2 d-none d-md-flex justify-content-end align-items-start">
                                        <button type="button" class="interact-btn like-vertical d-none d-md-block mt-md-2">
                                            <p class="mb-0">
                                                <img src="{{ asset('assets/svg/like-icon.svg') }}" alt="Like icon">
                                            </p>
                                            <p class="number-count">58</p>
                                        </button>
                                    </div>
                                    <div class="col">
                                        <div class="row flex-column flex-md-row">
                                            <div class="col">
                                                <p class="comment-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ipsum urna, blandit eu felis eu, dictum pretium ipsum.</p>
                                            </div>
                                        </div>
                                        <div class="row flex-column flex-md-row">
                                            <div class="col-5 col-md-3 mt-3 mt-md-0 ml-2 ml-md-0">
                                                <p class="user-name-title-20">User name</p>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <button type="button" class="date-comment-btn d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('assets/svg/clock-icon.svg') }}" alt="Message icon" class="p-0 p-md-1">
                                                    Hace 1 día
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row flex-column flex-md-row mt-5 mt-md-0 mb-4 mb-md-0">
                                            <div class="col forum-input-container">
                                                <textarea class="forum-input" placeholder="Escribe tu aporte"></textarea>
                                                <div class="row flex-column align-items-end">
                                                    <p>
                                                        <button type="button" class="solid-blue-btn send-btn">
                                                            Publicar
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row flex-column flex-md-row mt-2 mt-md-3 mb-2 mb-md-5">
                                            <div class="col">
                                                <span class="order-title-15">Ordenar por:</span>
                                                <button type="button" class="solid-blue-btn filter-comments-15 d-block d-md-inline">
                                                    Más votados
                                                </button>
                                                <button type="button" class="outlined-blue-btn filter-comments-15 d-block d-md-inline">
                                                    Nuevos
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row flex-column flex-md-row">
                                            <div class="comment-card ml-2 ml-md-0 mb-2 mb-md-3">
                                                <div class="row flex-column flex-md-row pl-1 pl-md-3">
                                                    <div class="col">
                                                        <p class="user-name-title-17 mb-2">User name</p>
                                                        <p class="post-date-title-17 mb-2 mb-md-4">Hace 1 día</p>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row flex-column flex-md-row justify-content-center justify-content-md-end mr-2 mr-md-3">
                                                            <button type="button" class="interact-btn d-flex justify-content-start justify-content-md-center align-items-center ml-2 ml-md-0">
                                                                <img src="{{ asset('assets/svg/like-icon.svg') }}" alt="Like icon" class="p-1">
                                                                <span class="number-count">58</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row flex-column flex-md-row pl-1 pl-md-3">
                                                    <div class="col">
                                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ipsum urna, blandit eu felis eu, dictum pretium ipsum. Nam vel velit faucibus, bibendum nibh a, iaculis mi. Donec velit purus, posuere eu magna mattis, varius efficitur justo.</p>
                                                    </div>
                                                </div>
                                            </div>
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

@section('css')

    <style>
        @media (max-width: 768px) {
            .solid-blue-btn {
                margin: 10px 0px 10px 0px !important;
            }
            .outlined-blue-btn {
                margin: 10px 0px 10px 0px !important;
            }
            .modal-dialog-container {
                max-width: 85% !important;
                margin: 1.75rem auto !important;
            }
            .comment-title {
                font-size: 23px !important;
            }
            .card-description {
                width: 100% !important;
                border-radius: 13px !important;
            }
            .forum-input-container {
                margin: 0px 0px 0px -15px !important;
            }
            .forum-input {
                width: 100% !important;
                margin: 5px 0px 0px 0px !important;
            }
        }

        @media (min-width: 992px) {
            .modal-dialog-container {
                max-width: 85% !important;
            }
        }

        .card {
            border-radius: 13px !important;
        }

        .solid-blue-btn {
            background-color: #3366CC;
            border: 1px solid #3366CC;
            text-align: center;
            margin: 0px 10px 0px 15px;
            color: #FFFFFF;
        }

        .solid-blue-btn:hover {
            background-color: #3366CC60;
            border: 1px solid #3366CC60;
        }

        .solid-blue-btn:active {
            background-color: #3366CC;
            border: 1px solid #3366CC90;
        }

        .outlined-blue-btn {
            background-color: #E4EDFF;
            border: 1px solid #3366CC;
            text-align: center;
            color: #3366CC;
        }

        .outlined-blue-btn:hover {
            background-color: #E4EDFF60;
            border: 1px solid #3366CC60;
        }
        
        .outlined-blue-btn:active {
            background-color: #E4EDFF;
            border: 1px solid #3366CC90;
        }

        .order-title-19 {
            font-size: 19px;
            color: #113B8F;
        }

        .filter-comments-19 {
            border-radius: 16px;
            font-size: 19px;
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

        .like-vertical {
            background: #E4EDFF;
            border: 1px solid #E4EDFF;
            border-radius: 5px;
        }

        .reply-title {
            font-size: 13px;
            font-weight: 600;
            color: #3366CC;
            margin: 0px 4px 0px 4px;
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
            font-size: 20px;
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

        .forum-modal {
            background-color: #113B8F85;
            opacity: 1;
        }

        .modal-container {
            width: 95% !important;
            height: 70% !important;
        }

        .modal-top {
            display: flex;
            justify-content: flex-end;
            padding: 1rem 1rem;
            border-top-left-radius: calc(.3rem - 1px);
            border-top-right-radius: calc(.3rem - 1px);
        }

        .comment-title {
            font-size: 32px;
            font-weight: 600;
            color: #67696E;
        }

        .user-name-title-20 {
            font-size: 20px;
            font-weight: 600;
            color: #113B8F;
        }

        .user-name-title-17 {
            font-size: 17px;
            font-weight: 600;
            color: #113B8F;
        }

        .post-date-title-17 {
            font-size: 13px;
            font-weight: 600;
            color: #82858B;
        }

        .forum-input {
            background-color: #E4EDFF;
            border: none;
            border-radius: 13px;
            width: 100%;
            padding: 10px;
            margin: 37px 0px 0px 0px;
        }

        .send-btn {
            border-radius: 8px;
            font-size: 20px;
        }

        .order-title-15 {
            font-size: 15px;
            color: #113B8F;
        }

        .filter-comments-15 {
            border-radius: 13px;
            font-size: 15px;
        }

        .comment-card {
            border: 3px solid #E2E2E2;
            border-radius: 13px;
        }
    </style>

@endsection