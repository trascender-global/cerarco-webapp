@extends('layouts.master_front')

@section('title') {{ $titulo }}: {{ $contenido->titulo }} @endsection

@section('content')

    @component('common-components.breadcrumb-front')
        @slot('title') {{ $titulo_plural }} @endslot
        @slot('seccion') {{ $contenido->titulo }} @endslot
    @endcomponent

    <div class="site-wrapper-reveal border-bottom">
        <div class="blog-page-wrapper section-space--pt_60 section-space--pb_120">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            {{ $contenido->titulo }}
                        </div>
                    </div>
                    <div class="card-body">
                        {!! $contenido->contenido !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection