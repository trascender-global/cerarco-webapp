@extends('layouts.master_front')

@section('title') CATÁLOGO DE CERÁMICA ARQUEOLÓGICO DE COLOMBIA @endsection

@section('content')

    <div class="site-wrapper-reveal">

        <div class="site-wrapper-reveal border-bottom">
            <div class="error-page-area section-space--ptb_90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 ml-auto mr-auto">
                            <div class="error-page-content text-center section-space--ptb_90">
                                <i class="icon icon-confused"></i>
                                <h1 class="mb-20">Hubo un Error</h1>
                                <p class="description">Parece que pagina ha expirado. Quizás la <a href="{{ route('front.buscador.busqueda') }}">búsqueda</a> pueda ayudar o volver a <a href="{{ route('front.index') }}">Inicio</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection