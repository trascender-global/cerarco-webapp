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
            color: #3366CC;
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
    @component('common-components.breadcrumb-front')
        @slot('title')
            Foro
        @endslot
        @slot('seccion')
            Foro
        @endslot
    @endcomponent

    <div class="site-wrapper-reveal border-bottom">
        <div class="blog-page-wrapper section-space--pt_60 section-space--pb_120">
            <div class="container">
                <div class="row flex-column flex-md-row">
                    <div>
                        <span class="order-title ml-1 ml-md-5">Ordenar por:</span>
                        <button type="button" class="new-comments-btn most-comments-btn d-block d-md-inline active"
                            data-id="more">
                            Fichas más comentadas
                        </button>
                        <button type="button" class="new-comments-btn d-block d-md-inline" data-id="new">
                            Fichas con comentarios recientes
                        </button>
                    </div>
                </div>
                <div id="content_main">
                    @php
                        // $forums=App\Models\Forum::orderBy('created_at','DESC')->get();
                        $forums= App\Models\Forum::withCount(['topic_messages'])->orderBy('topic_messages_count','DESC')->get()
                    @endphp
                    @foreach ($forums as $forum)
                        @include('front.page.foro.forum')
                    @endforeach
                </div>


            </div>
        </div>
    </div>
@endsection
@section('head_script')
    <script>
        $(document).on('click', '.new-comments-btn', function() {
            var type = $(this).data("id")
            $('.new-comments-btn').each(function(i) {
                $(this).removeClass('active')
            })
            $(this).addClass('active')
            var datos = new FormData();
            datos.append('_token', $('input[name=_token]').val());
            datos.append('type', type)
            $.ajax({
                url: "{{ route('front.ficha.render_foro_comment') }}",
                type: "post",
                data: datos,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(res) {
                $('#content_main').html(res)
            });
        })
    </script>
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
            color: #3366CC;
        }

        .new-comments-btn.active {
            background-color: #3366CC;
            border: 1px solid #3366CC90;
            color: #FFFFFF;
        }

        .order-title {
            font-size: 19px;
            color: #113B8F;
        }

        .card-description {
            width: 32%;
            border-radius: 13px 0px 0px 13px;
            padding: 22px;
        }

        .card-p {
            font-size: 22px;
            color: #113B8F;
            margin: 0px
        }

        .card-p-primary {
            font-weight: 600;

        }

        .card-p-secondary {
            font-weight: 300;
        }

        .card-description-img {
            width: 100%;
            border-radius: 10px
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
