@extends('layouts.master')

@section('title')
    @lang('Crear Ficha')
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title')
            Crear Ficha
        @endslot
        @slot('li_1')
            Fichas
        @endslot
        @slot('li_2')
            Crear Ficha
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="basic-pills-wizard" class="twitter-bs-wizard">
                        <ul class="twitter-bs-wizard-nav">
                            <li class="nav-item">
                                <a href="#pieza-clave" class="nav-link" data-toggle="tab">
                                    <span class="step-number mr-2">1</span>
                                    Pieza Clave</a>
                            </li>
                            <li class="nav-item">
                                <a href="#modelo" class="nav-link" data-toggle="tab">
                                    <span class="step-number mr-2">2</span>
                                    Modelo</a>
                            </li>

                            <li class="nav-item">
                                <a href="#variante-de-forma" class="nav-link" data-toggle="tab">
                                    <span class="step-number mr-2">3</span>
                                    Variantes de Forma</a>
                            </li>
                            <li class="nav-item">
                                <a href="#variante-decorativa" class="nav-link" data-toggle="tab">
                                    <span class="step-number mr-2">4</span>
                                    Variantes Decorativas</a>
                            </li>
                            <li class="nav-item">
                                <a href="#variante-arqueometrica" class="nav-link" data-toggle="tab">
                                    <span class="step-number mr-2">5</span>
                                    Variantes Arqueométricas</a>
                            </li>

                        </ul>
                        <div class="tab-content twitter-bs-wizard-tab-content">
                            <div class="tab-pane" id="pieza-clave">
                                @include('admin.fichas.create.pieza_clave_foreach')
                            </div>

                            <div class="tab-pane" id="modelo">
                            </div>

                            <div class="tab-pane" id="variante-de-forma">
                            </div>

                            <div class="tab-pane" id="variante-decorativa">
                            </div>

                            <div class="tab-pane" id="variante-arqueometrica">
                            </div>
                            <div class="col-xl-12">
                                <a class="btn btn-info btn-block">Salvar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
@section('script')
    <script src="{{ asset('assets/libs/twitter-bootstrap-wizard/twitter-bootstrap-wizard.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-wizard.init.js') }}"></script>
    <script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/ecommerce-select2.init.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

    <script>
        // $(document).on('submit', '.pieza_clave_form',function (evt) {
        //     evt.preventDefault();

        //     console.log(evt)
        // });
        // $(document).on('click','.save_pieza_clave',function(){
        //     var id=$(this).data("id")
        //     alert(id)
        //     $(`#pieza_clave_data_${id}`).submit()
        // })
    </script>
@endsection

@section('head_script')
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
@endsection

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/dropzone.css" rel="stylesheet" type="text/css" />
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />

    <style>
        .marker_map {
            background-image: url('mapbox-icon.png');
            background-size: cover;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
        }
    </style>
@endsection
