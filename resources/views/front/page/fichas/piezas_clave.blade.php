@extends('layouts.master_front')

@section('title') CATÁLOGO DE CERÁMICA ARQUEOLÓGICO DE COLOMBIA @endsection

@section('content')

    <div class="checkout-main-area section-space--ptb_90 bg-rosalight">
        <div class="headrow fondo-rosa">
            <div class="col-lg-12">
                <h2 class="whitetitle">CATÁLOGO DE CERÁMICA ARQUEOLÓGICA DE COLOMBIA</h2>
            </div>

            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 whitetitle small">VARIANTE DE FORMA</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Inicio</a></li>
                            <li class="breadcrumb-item active">{{ $modelo->codigo }}</li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">DESCRIPCIÓN</a></li>
                            <li class="breadcrumb-item active">VARIANTE DE FORMA</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mry-10">
            @foreach($modelo->piezasClave as $piezaClave)
                <div class="col-lg-3">
                    <div class="customer-zone mb-30">
                        <div class="card fondo-trans">
                            <div class="card-body">
                                <h5 class="font-size-12"></h5>
                                <div class="table-responsive">
                                    <div id="contents">
                                        <div id="v2">
                                            <div id="demo-wrapper">
                                                <div id="demo-left">
                                                    <div id="vWrapper">
                                                        <div id="carouselv_{{ $piezaClave->id }}">
                                                            @foreach($piezaClave->fotos as $foto)
                                                                <div>
                                                                    <img alt="" src="{{ $foto->foto }}"/><br/>
                                                                    <span class="thumbnail-text"><a href="#">{{ $piezaClave->pieza_clave }}</a></span>
                                                                </div>
                                                            @endforeach
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
            @endforeach
        </div>
    </div>


    @include('front.page.fichas.menu', compact('modelo'))
    </div>

@endsection

@section('script')

    <script src="{{ asset('aassets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jsCarousel/jsCarousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            @foreach($modelo->piezasClave as $piezaClave)
            $('#carouselv_{{ $piezaClave->id }}').jsCarousel({
                onthumbnailclick: function (src) {
                    alert(src);
                }, autoscroll: true, masked: false, itemstodisplay: 3, orientation: 'v'
            });
            @endforeach
        });
    </script>
@endsection

@section('head_script')
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
@endsection

@section('css')
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet'/>
    <link href='{{ asset('assets/libs/jsCarousel/jsCarousel.css') }}' rel='stylesheet' />
@endsection