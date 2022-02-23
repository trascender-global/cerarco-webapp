@extends('layouts.master_front')

@section('title') CATÁLOGO DE CERÁMICA ARQUEOLÓGICO DE COLOMBIA @endsection

@section('content')

    @component('common-components.breadcrumb-front')
        @slot('title') {{ $titulo }} @endslot
        @slot('seccion') {{ $titulo }} @endslot
    @endcomponent

    <div class="site-wrapper-reveal border-bottom">
        <div class="blog-page-wrapper section-space--pt_30 section-space--pb_120">
            <div class="container">

                <div class="masonry-activation ">
                    <div class="row clearfix mesonry-list">
                        <div class="col-lg-12 masonary-item">
                            <div class="single-blog-item mt-40">
                                <div class="site-wrapper-reveal">
                                    <div class="container">
                                        {!! $contenido->contenido !!}
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