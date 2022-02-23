@extends('layouts.master_front')

@section('title') CATÁLOGO DE CERÁMICA ARQUEOLÓGICO DE COLOMBIA @endsection

@section('content')

    @component('common-components.breadcrumb-front')
        @slot('title') {{ $titulo }} @endslot
        @slot('seccion') {{ $titulo }} @endslot
    @endcomponent

    <div class="site-wrapper-reveal border-bottom">
        <div class="blog-page-wrapper section-space--pt_60 section-space--pb_120">
            <div class="container">

                <div class="masonry-activation ">
                    <div class="row clearfix mesonry-list">
                        @foreach($contenidos as $contenido)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 masonary-item">
                                <div class="single-blog-item mt-40">
                                    @if(!is_null($contenido->imagen))
                                        <div class="blog-thumbnail-box">
                                            <a href="#" class="thumbnail">
                                                <img src="{{ $contenido->imagen }}" class="img-fluid" onerror="">
                                            </a>
                                        </div>
                                    @endif
                                    <div class="blog-contents">
                                        <div class="meta-tag-box mb-10">
                                            <div class="meta date"><span>{{ $contenido->created_at }}</span></div>
                                        </div>
                                        <h6 class="blog-title-two"><a href="{{ route($url, ['contenido' => $contenido]) }}">{{ $contenido->titulo }}</a></h6>
                                        <div class="button-box mt-40">
                                            <a href="{{ route($url, ['contenido' => $contenido]) }}" class="btn btn--sm btn--border_1"> Leer Más </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection