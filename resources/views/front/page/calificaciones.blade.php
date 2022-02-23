@extends('layouts.master_front')

@section('title') CATÁLOGO DE CERÁMICA ARQUEOLÓGICO DE COLOMBIA @endsection

@section('content')
    <!-- Contenido de la página -->
    <div class="content">
        <div class="row my-3">
            <div class="col-lg-12">
                <h2 class="goldentitle">CATÁLOGO DE CERÁMICA ARQUEOLÓGICA DE COLOMBIA</h2>
            </div>
        </div>

        <div class="row d-flex w-100">
            <!-- Mapa -->
            <div class="col-lg-5 h-100 text-center flex-column">
                @include('front.page.buscador.mapa-ext', compact('resultados'))
            </div>
            <!-- End mapa -->

            <!-- Resultados -->
            <div class="col-lg-7 h-100 flex-column">
                <div class="customer-zone mb-30">
                    <div class="card fondo-trans">
                        <div class="card-body">
                            <h5 class="font-size-12 goldentitle">Resultados de la busqueda</h5>
                            <div class="row">
                                <div id="resultados">
                                    @foreach($resultados as $resultado)
                                        @if($loop->first || $loop->odd)
                                            <div class="row">
                                                @endif
                                                <div class="col-xs-12 col-sm-6 col-md-6 nopad text-center tooltip_busqueda" data-toggle="tooltip" data-placement="top" title="{{ $resultado->codigo }}" >
                                                    <label class="imagen_resultados">
                                                        <a href="{{ route('front.ficha.informacion_ficha', ['modelo'=>$resultado]) }}">
                                                            <img class="img-responsive" src="@if( $resultado->fotosPiezasClave->isEmpty() ){{ asset('assets/images/sample.png')}} @else {{ $resultado->fotosPiezasClave->first()->foto }} @endif"></a>
                                                        <i class="fa fa-check hidden"></i>
                                                    </label>
                                                </div>
                                                @if($loop->last || $loop->even)
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('front.buscador.home') }}" class="btn btn-warning waves-effect waves-light btn-block">Realizar otra búsqueda</a>
                </div>
            </div>
            <!-- End resultados -->
        </div>
    </div>
    <!-- Fin del contenido de la página -->
@endsection

@section('script')

    @include('front.page.fichas.assets_mapa')

    <script src="{{ asset('assets/libs/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-element.init.js') }}"></script>

    <script>
        $(document).ready(function() {

            $('.tooltip_busqueda').tooltip()

            $('.search').click(function() {
                // TODO: Realizar la búsqueda por palabra
                // alert($('input[name="term"]').val());
            });

            $('#resultados').after('<div id="nav" class="text-center"></div>');
            var rowsShown = 3;
            var rowsTotal = $('.imagen_resultados').length/2;
            var numPages = rowsTotal / rowsShown;
            for (i = 0; i < numPages; i++) {
                var pageNum = i + 1;
                $('#nav').
                    append('<a href="#" class="btn-outline-info" rel="' + i + '">&emsp;' + pageNum + '&emsp;</a> ');
            }
            $('#resultados .row').hide();
            $('#resultados .row').slice(0, rowsShown).show();
            $('#nav a:first').addClass('active');
            $('#nav a').bind('click', function(e) {
                e.preventDefault();
                $('#nav a').removeClass('active');
                $(this).addClass('active');
                var currPage = $(this).attr('rel');
                var startItem = currPage * rowsShown;
                var endItem = startItem + rowsShown;
                $('#resultados .row').css('opacity', '0').hide().slice(startItem, endItem).
                    css('display', 'flex').animate({
                    opacity: 1,
                }, 300);
            });

        });

        $('.image-checkbox').each(function() {
            if ($(this).find('input[type="checkbox"]').first().attr('checked')) {
                $(this).addClass('image-checkbox-checked');
            }
            else {
                $(this).removeClass('image-checkbox-checked');
            }
        });

        $('.image-checkbox').on('click', function(e) {
            $(this).toggleClass('image-checkbox-checked');
            var $checkbox = $(this).find('input[type="checkbox"]');
            $checkbox.prop('checked', !$checkbox.prop('checked'))
            e.preventDefault();
        });

        function clearForms(element) {
            let divId = $(element).attr('aria-controls');
            $('#' + divId + ' input').val('')
            $('#' + divId + ' textarea').val('')
            $('#' + divId + ' select').val(null).trigger('change')
        }

    </script>

@endsection

@section('css')
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet'/>

    <style>
        input.form-control {
            width: 90%;
        }

        .imagen_resultados {
            padding: 4px 4px 0 4px;
            margin-bottom: 0;
        }
    </style>
@endsection

@section('head_script')
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js''></script>
@endsection