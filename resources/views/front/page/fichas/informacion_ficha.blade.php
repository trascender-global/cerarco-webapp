@extends('layouts.master_front')

@section('title')
    CATÁLOGO DE CERÁMICA ARQUEOLÓGICO DE COLOMBIA
@endsection

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

            /* .bibliography-title {
                    margin: 5px 0px 0px 0px !important;
                } */

            .code-title {
                margin: 15px 0px 0px 0px !important;
            }

            /* .description {
                    margin: 20px 0px 0px 0px !important;
                } */

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
            /* margin-top: 39px; */
        }

        .description {
            font-size: 17px;
            font-weight: 300;
            color: #82858B;
            align-self: center
                /* margin-top: 39px; */
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
            width: 100%;
        }

        .bibliography-title {
            font-size: 25px;
            color: #113B8F;
            /* margin: 39px 0px 98px 39px; */
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
            width: 100%;
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


        .new-comments-btn.active {
            background-color: #3366CC;
            border: 1px solid #3366CC90;
            color: white
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
            color: #3366CC;
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
            position: relative;
        }

        .comment-card-seconday::before {
            content: " ";
            width: 16px;
            height: 145%;
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

        @media (max-width: 768px) {
            .variant-title {
                height: auto !important;
                margin: 20px 20px 26px 30px !important;
            }

            .variants-container {
                width: auto !important;
                max-height: 240px !important;
            }

            .variant-container {
                height: auto !important;
                margin: 10px 19px 10px 22px !important;
            }
        }

        .variants-container {
            display: grid !important;
            grid-template-columns: repeat(1, 1fr) !important;
            grid-template-rows: repeat(1, 1fr) !important;
            max-width: 180px;
            max-height: 700px;
            overflow: scroll;
            overflow-x: hidden;
            align-items: center;
            justify-items: center;
            border-radius: 13px !important;
        }

        .forma-variants-container {
            background-color: #FFDEDC !important;
        }

        .decorativa-variants-container {
            background-color: #FFEEDA !important;
        }

        .arqueometrica-variants-container {
            background-color: #E2DAA17A !important;
        }

        .variant-container {
            width: 120px !important;
            height: 137px;
            background-color: #FFFFFF !important;
            border-radius: 13px !important;
            margin: 17px 19px 17px 22px;
            font-size: 16px;
        }

        .variant-img {
            width: 99%;
            height: 85%;
            background-color: #FFFFFF;
        }

        .variant-title {
            height: auto;
            border: none;
            border-radius: 13px;
            text-align: center;
            font-size: 20px;
            font-weight: 600;
            cursor: text !important;
            margin: 0px 0px 21px 0px;
        }

        .variant-description-title {
            font-size: 17px;
            font-weight: 600;
            margin-top: 39px;
        }

        .variant-description {
            font-size: 17px;
            font-weight: 300;
            color: #82858B;
            margin-top: 39px;
        }

        .forma-variant {
            background-color: #FFDEDC;
            color: #F53B2E;
        }

        .decorativa-variant {
            background-color: #FFEEDA;
            color: #FF8800;
        }

        .arqueometrica-variant {
            background-color: #E2DAA17A;
            color: #C2AA09;
        }

        .pieza-clave-variant {
            background-color: #D2E7F5D1;
            color: #357BAA;
        }

        .pieza-clave-description-title {
            font-size: 17px;
            font-weight: 600;
            color: #357BAA;
            margin-top: 35px;
        }

        .pieza-clave-description {
            font-size: 17px;
            font-weight: 300;
            color: #82858B;
            margin-top: 35px;
        }
    </style>
    @csrf
    <div class="root-card row">
        <div class="col-lg-12">
            <div class="info-card card">
                <div class="card-body" id="content_head_info">
                    @include('front.fichas.variantes.header_info', [
                        'type' => 'modelo',
                        'title' => '',
                        'modelo' => $modelo,
                        'pieza' => $modelo->piezasClave->first(),
                        'variante' => 'forma',
                        'modeloCodigo' => 'CCsab74-A',
                        'pieza_clave_id_' => $modelo->piezasClave->first()->id,
                    ])
                </div>
            </div>
            <div class="pills-card card">
                <div class="card-body">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item tabs-busqueda">
                            <a href="#modelo" data-id="modelo" data-modelo="{{ $modelo->id }}"
                                class="nav-link tab_modelo active tab_link_main" data-toggle="tab"
                                aria-current="page">Modelo</a>
                        </li>
                        <li class="nav-item tabs-busqueda">
                            <a href="#variante-de-forma" data-id="variante-de-forma"
                                class="nav-link tab_forma tab_link_main" data-toggle="tab" aria-current="page">Variantes de
                                Forma</a>
                        </li>
                        <li class="nav-item tabs-busqueda">
                            <a href="#variante-decorativa" data-id="variante-decorativa"
                                class="nav-link tab_decorativa tab_link_main" data-toggle="tab"
                                aria-current="page">Variantes Decorativas</a>
                        </li>
                        <li class="nav-item tabs-busqueda">
                            <a href="#variante-arqueometrica" data-id="variante-arqueometrica"
                                class="nav-link tab_arqueometrica tab_link_main" data-toggle="tab"
                                aria-current="page">Variantes Arqueométricas</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pieza-clave" data-id="pieza-clave" class="nav-link tab_pieza_clave tab_link_main"
                                aria-current="page" data-toggle="tab">Pieza Clave</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane tab_modelo active" id="modelo">
                            @include('front.fichas.variantes.modelo', [
                                'modeloMetaData' => $modelo->getModelo(),
                                'variante' => 'modelo',
                                'modeloModel' => $modelo,
                            ])
                        </div>

                        <div class="tab-pane tab_forma" id="variante-de-forma">
                            @include('front.fichas.variantes.variante', [
                                'modeloMetaData' => $modelo->metadata_forma,
                                'variante' => 'forma',
                                'modeloModel' => $modelo,
                            ])
                        </div>

                        <div class="tab-pane tab_decorativa" id="variante-decorativa">
                            @include('front.fichas.variantes.variante', [
                                'modeloMetaData' => $modelo->metadata_decorativa,
                                'variante' => 'decorativa',
                                'modeloModel' => $modelo,
                            ])
                        </div>

                        <div class="tab-pane tab_arqueometrica" id="variante-arqueometrica">
                            @include('front.fichas.variantes.variante', [
                                'modeloMetaData' => $modelo->metadata_arqueometrica,
                                'variante' => 'arqueometrica',
                                'modeloModel' => $modelo,
                            ])
                        </div>

                        <div class="tab-pane tab_pieza_clave" id="pieza-clave">
                            @include('front.fichas.variantes.foreach-pieza_clave', [
                                'piezas_clave' => $modelo->piezasClave,
                                'modelo' => $modelo,
                            ])
                        </div>
                    </div>
                </div>
            </div>
            <div class="bibliography-card card">
                <div class="card-body">
                    <div class="align-items-start">
                        <div class="d-flex">
                            <span class="bibliography-title">
                                Bibliografía
                            </span>
                            <div class="description ml-5">
                                <span>
                                    {{ $modelo->getModelo()['Bibliografía']['Bibliografía']['valor'] }}
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
                            @if (Auth::user())
                                <div class="d-flex flex-column flex-md-row">
                                    <div class="col-lg-10 col-12 forum-input-container">
                                        <textarea id="input_comment" class="forum-input" placeholder="Escribe tu aporte"></textarea>
                                        <button id="btn_send_comment" type="button" class="send-btn"
                                            style="
                                    position: absolute;
                                    right: 15px;
                                    bottom: 12px;
                                ">
                                            Publicar
                                        </button>
                                    </div>
                                </div>
                            @else
                                <div class="d-flex flex-column flex-md-row">
                                    <div class="col forum-input-container">
                                        Debes iniciar sesión o registrate, para poder hacer aportes
                                    </div>
                                </div>
                            @endif
                            <div class="d-none d-md-flex flex-md-column col-11">
                                <hr class="horizontal-line">
                            </div>
                            <div class="d-flex flex-column">
                                <div>
                                    <button type="button"
                                        class="comments-number forum-description-title d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('assets/svg/message-icon.svg') }}" alt="Message icon"
                                            class="p-1">
                                            @php
                                                $forum=App\Models\Forum::where('modelo_id', $modelo->id)->first();
                                            @endphp
                                            @if($forum) 
                                            {{$forum->forum_topics()->count()}}
                                            @else
                                            0
                                            @endif
                                         Temas
                                    </button>
                                </div>
                                <div class="flex-column flex-md-row">
                                    <span class="forum-description-title ml-1 ml-md-5">Ordenar por:</span>
                                    <button type="button" class="new-comments-btn d-block d-md-inline active" data-id="more">
                                        Más votados
                                    </button>
                                    <button type="button" class="new-comments-btn d-block d-md-inline" data-id="new">
                                        Nuevos
                                    </button>
                                </div>
                                <div id="content_main_comment">
                                    @if ($forum)
                                         @php
                                    $topics=$forum->forum_topics()->withCount('likes')->orderBy('likes_count','DESC')->get(); @endphp
                                    @foreach ($topics as $topic)
                                        @include('front.page.fichas.foro.comment_main')
                                    @endforeach
                                    @endif
                                   

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- comment modal -->
    <div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="commentModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4>Deja tu comentario</h4>
                    <div class="row">
                        <div class="col-12 forum-input-container">
                            <textarea id="input_message" class="forum-input" placeholder="Escribe tu comentario"></textarea>
                            <button id="btn_send_message" type="button" class="send-btn"
                                style="position: absolute;right: 15px;bottom: 12px;">
                                Publicar
                            </button>
                        </div>
                    </div>
                    <input id="input_id_topic" type="hidden"/>
                    <input id="input_id_forum" type="hidden"/>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('head_script')
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap-slider.js') }}"></script>
    <script>
        $(document).on('click', '.tab_link_main', function() {
            var id = $(this).data("id")
            if (id == "modelo") {
                var datos = new FormData();
                datos.append('_token', $('input[name=_token]').val());
                datos.append('modelo_id', $(this).data("modelo"));
                datos.append('type', 'modelo');
                $.ajax({
                    url: "{{ route('front.ficha.render_ficha') }}",
                    type: "post",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false
                }).done(function(res) {
                    $("#content_head_info").html(res);
                });
                return;
            }
            if (id == "pieza-clave") {
                var datos = new FormData();
                $(`#${id} .variant-container`).each(function(e) {
                    if ($(this).hasClass('active')) {
                        datos.append('modelo_id', $(this).data("modelo"));
                        datos.append('pieza_id', $(this).data("pieza_id"));
                    }
                })
                datos.append('_token', $('input[name=_token]').val());
                datos.append('type', 'pieza');
                $.ajax({
                    url: "{{ route('front.ficha.render_ficha') }}",
                    type: "post",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false
                }).done(function(res) {
                    $("#content_head_info").html(res);
                });
                return
            }
            $(`#${id} .variant-container`).each(function(e) {
                if ($(this).hasClass('active')) {
                    var datos = new FormData();
                    datos.append('_token', $('input[name=_token]').val());
                    datos.append('modelo_id', $(this).data("modelo"));
                    datos.append('codigo', $(this).data("codigo"));
                    datos.append('pieza_id', $(this).data("pieza_id"));
                    datos.append('variante', $(this).data("variante"));
                    datos.append('type', 'variante');
                    $.ajax({
                        url: "{{ route('front.ficha.render_ficha') }}",
                        type: "post",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false
                    }).done(function(res) {
                        $("#content_head_info").html(res);
                    });
                }
            })


        })
        $(document).on('click', '.variant-container.nav-link', function() {
            var datos = new FormData();
            datos.append('_token', $('input[name=_token]').val());
            datos.append('type', $(this).data("type"));
            datos.append('modelo_id', $(this).data("modelo"));
            datos.append('codigo', $(this).data("codigo"));
            datos.append('pieza_id', $(this).data("pieza_id"));
            datos.append('variante', $(this).data("variante"));
            $.ajax({
                url: "{{ route('front.ficha.render_ficha') }}",
                type: "post",
                data: datos,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(res) {
                $("#content_head_info").html(res);
            });
        })
        $(document).on('click', '#btn_send_comment', function() {
            var text = $('#input_comment')
            if(text.val()=='')
            return alert('Escribe algo para comentar')
            var datos = new FormData();
            datos.append('_token', $('input[name=_token]').val());
            datos.append('text', text.val());
            datos.append('modelo', {{ $modelo->id }})
            datos.append('codigo', '{{ $modelo->codigo }}')
            $.ajax({
                url: "{{ route('front.ficha.send_comment') }}",
                type: "post",
                data: datos,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(res) {
                $("#content_main_comment").append(res);
                text.val('')
            });
        })
        $(document).on('click', '.btn_like_topic', function() {
            var id_topic = $(this).data("id")
            var id_forum = $(this).data("forum")
            var img=$(this).find("img")
            var span=$(this).find("span")
            @if (Auth::user())
                var datos = new FormData();
                datos.append('_token', $('input[name=_token]').val());
                datos.append('id', id_topic)
                datos.append('forum', id_forum)

                $.ajax({
                    url: "{{ route('front.ficha.like_topic') }}",
                    type: "post",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false
                }).done(function(res) {
                    if(res.state){
                        img.attr("src","{{ asset('assets/svg/like-icon-blue.svg') }}");
                    }else{
                        img.attr("src","{{ asset('assets/svg/like-icon.svg') }}");
                    }
                    span.text(res.count)
                });
            @else
                alert('Debes estar logueado para dar like')
            @endif
        })
        $(document).on('click', '.btn_message_topic', function() {
            var id_topic = $(this).data("id")
            var forum=$(this).data("forum")
            @if (Auth::user())
                $('#commentModal').modal('show')
               $('#input_id_topic').val(id_topic)
               $('#input_id_forum').val(forum)
            @else
                alert('Debes estar logueado para poder comentar')
            @endif
        })
        $(document).on('click', '#btn_send_message', function() {
            var id_topic = $('#input_id_topic').val()
            var id_forum = $('#input_id_forum').val()
            var span=$(`#number_count_topic_${id_topic}`)
            var text=$('#input_message')
                var datos = new FormData();
                datos.append('_token', $('input[name=_token]').val());
                datos.append('id', id_topic)
                datos.append('forum', id_forum)
                datos.append('text', text.val())
                $.ajax({
                    url: "{{ route('front.ficha.message_topic') }}",
                    type: "post",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false
                }).done(function(res) {
                    $(`#comment_${id_topic}`).append(res.render)
                    span.text(res.count)
                    text.val('')
                    $('#commentModal').modal('hide')
                });
        })
        $(document).on('click','.btn_like_message',function(){
            var id_topic = $(this).data("id")
            var id_forum = $(this).data("forum")
            var img=$(this).find("img")
            var span=$(this).find("span")
            @if (Auth::user())
                var datos = new FormData();
                datos.append('_token', $('input[name=_token]').val());
                datos.append('id', id_topic)
                datos.append('forum', id_forum)

                $.ajax({
                    url: "{{ route('front.ficha.like_message') }}",
                    type: "post",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false
                }).done(function(res) {
                    if(res.state){
                        img.attr("src","{{ asset('assets/svg/like-icon-blue.svg') }}");
                    }else{
                        img.attr("src","{{ asset('assets/svg/like-icon.svg') }}");
                    }
                    span.text(res.count)
                });
            @else
                alert('Debes estar logueado para dar like')
            @endif
        })
        $(document).on('click','.new-comments-btn',function(){
            var type=$(this).data("id")
            $('.new-comments-btn').each(function(i){
                $(this).removeClass('active')
            })
            $(this).addClass('active')
            var datos = new FormData();
                datos.append('_token', $('input[name=_token]').val());
                datos.append('type', type)
                datos.append('modelo',{{$modelo->id}})
                $.ajax({
                    url: "{{ route('front.ficha.render_ficha_comment') }}",
                    type: "post",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false
                }).done(function(res) {
                    $('#content_main_comment').html(res)
                });
        })
    </script>
@endsection


@section('css')
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet' />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/buscador_front.css') }}">
@endsection
