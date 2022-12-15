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

        <div class="row">
            <div class="col-12">
                @include('errors.mensajes')
            </div>
            <!-- Formularios -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('front.buscador.busqueda') }}">
                            @csrf
                            <h5 class="font-size-12 goldentitle"><i class="mdi mdi-location"></i> Buscar por palabra</h5>
                            <div class="form-inline">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="busqueda_palabra">
                                    <div class="input-group-append">
                                        <button class="btn btn-light buscar" type="submit"><i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div id="accordion" class="custom-accordion">
                                <div class="card mb-1 shadow-none">
                                    <a href="#collapse1" class="text-dark collapsed buscador" data-buscador="buscador_gris" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1" onclick="clearForms('buscador_gris')" id="buscador_areas">
                                        <div class="card-header tabmenu" id="headingOne">
                                            <span class="m-0 font-size-12">Caracteristicas generales
                                                <i class="fas fa-caret-right float-right"></i></span>
                                        </div>
                                    </a>
                                    <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="form-check mb-3">
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios1">Área Geográfica</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple"
                                                            data-placeholder=""
                                                            name="area_geografica[]">
                                                        <option disabled>Seleccione</option>
                                                        @foreach(getAreasGeograficas() as $data)
                                                            <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios2">Subregion Geográfica</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple"
                                                            data-placeholder=""
                                                            name="sub_region_geografica[]">
                                                        <option disabled>Seleccione</option>
                                                        @foreach(getSubRegionGeografica() as $data)
                                                            <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios3">Departamento</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple"
                                                            data-placeholder=""
                                                            name="departamentos[]">
                                                        <option disabled>Seleccione</option>
                                                        @foreach(getDepartamentos() as $data)
                                                            <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios1-2">Municipio de Hallazgo</label>
                                                    <input type="text" class="form-control" name="funcion_primaria" value="">
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios1-2">Funcion Primaria</label>
                                                    <input type="text" class="form-control" name="municipio_hallazgo" value="">
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios1-2">Cronología relativa</label>
                                                    <input type="text" class="form-control" name="cronologia_relativa" value="">
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios6">Confiabilidad del modelo</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple"
                                                            data-placeholder=""
                                                            name="confiabilidad_modelo[]">
                                                        <option disabled>Seleccione</option>
                                                        @foreach(getConfiabilidadModelo() as $data)
                                                            <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-1 shadow-none">
                                    <a href="#collapse2" class="text-dark collapsed buscador" data-buscador="buscador_gris" data-toggle="collapse" aria-expanded="false" aria-controls="collapse2" onclick="clearForms('buscador_gris')">
                                        <div class="card-header tabmenu" id="headingTwo">
                                                <span class="m-0 font-size-12">
                                                    Descripcion formal
                                                    <i class="fas fa-caret-right float-right"></i>
                                                </span>
                                        </div>
                                    </a>
                                    <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"> 
                                        <div class="card-body">
                                            <div class="form-check mb-3">
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios3">Forma Base</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple"
                                                            data-placeholder=""
                                                            name="desc_formal_forma_base[]">
                                                        <option disabled>Seleccione</option>
                                                        @foreach(getFormaBase() as $data)
                                                            <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios8-1">Decoración 1</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple"
                                                            data-placeholder=""
                                                            name="desc_formal_decoracion_1[]">
                                                        <option disabled>Seleccione</option>
                                                        @foreach(getDecoracion() as $data)
                                                            <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios8-1">Decoración 2</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple"
                                                            data-placeholder=""
                                                            name="desc_formal_decoracion_2[]">
                                                        <option disabled>Seleccione</option>
                                                        @foreach(getDecoracion() as $data)
                                                            <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios8-1">Decoración 3</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple"
                                                            data-placeholder=""
                                                            name="desc_formal_decoracion_3[]">
                                                        <option disabled>Seleccione</option>
                                                        @foreach(getDecoracion() as $data)
                                                            <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios10-1">Tratamiento de la Superficie</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple"
                                                            data-placeholder=""
                                                            name="desc_formal_tratamiento_superficie[]">
                                                        <option disabled>Seleccione</option>
                                                        @foreach(getTratamientoSuperficie() as $data)
                                                            <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-1 shadow-none" a>
                                    <a href="#collapse3" class="text-dark collapsed buscador" data-buscador="buscador_gris" data-toggle="collapse" aria-expanded="false" aria-controls="collapse3" onclick="clearForms('buscador_gris')">
                                        <div class="card-header tabmenu" id="headingThree">
                                                <span class="m-0 font-size-12">
                                                    Descripción Técnica
                                                    <i class="fas fa-caret-right float-right"></i>
                                                </span>
                                        </div>
                                    </a>
                                    <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="form-check mb-3">
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios1-2">Color Pasta
                                                        <small>(Rango Minimo)- Nombre Munsell</small></label>
                                                    <input type="text" class="form-control" name="desc_tec_min_nombre_munsell" value="">
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios1-2">Color Pasta
                                                        <small>(Rango Maximo)- Nombre Munsell</small></label>
                                                    <input type="text" class="form-control" name="desc_tec_max_nombre_munsell" value="">
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios5-2">Acabado de la Superficie Externa</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple"
                                                            data-placeholder=""
                                                            name="desc_tec_acabado_superficie_externa[]">
                                                        <option disabled>Seleccione</option>
                                                        @foreach(getAcabadoSuperficie() as $data)
                                                            <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios6-2">Tecnica de Manufactura</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple"
                                                            data-placeholder=""
                                                            name="desc_tec_tecnica_manufactura[]">
                                                        <option disabled>Seleccione</option>
                                                        @foreach(getTecnicaManufactura() as $data)
                                                            <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios8-2">Textura externa</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple"
                                                            data-placeholder=""
                                                            name="desc_tec_textura_externa[]">
                                                        <option disabled>Seleccione</option>
                                                        @foreach(getTexturas() as $data)
                                                            <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios9-2">Ambiente de cocción 1</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple"
                                                            data-placeholder=""
                                                            name="desc_tec_ambiente_coccion_1[]">
                                                        <option disabled>Seleccione</option>
                                                        @foreach(getAmbienteCoccion() as $data)
                                                            <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios9-2">Composición Inorgánica (Antiplástico)</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple"
                                                            data-placeholder=""
                                                            name="desc_tec_composicion_inorganica[]">
                                                        <option disabled>Seleccione</option>
                                                        @foreach(getComposicionInorganicaAntiplastico() as $data)
                                                            <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios9-2">Composición Orgánica (Antiplástico)</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple"
                                                            data-placeholder=""
                                                            name="desc_tec_composicion_organica[]">
                                                        <option disabled>Seleccione</option>
                                                        @foreach(getComposicionOrganicaAntiplastico() as $data)
                                                            <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios9-2">Forma Granos (Antiplástico)</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple"
                                                            data-placeholder=""
                                                            name="desc_tec_forma_granos[]">
                                                        <option disabled>Seleccione</option>
                                                        @foreach(getFormaGranosAntiplastico() as $data)
                                                            <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-1 shadow-none">
                                    <a href="#collapse4" class="text-dark collapsed buscador" data-buscador="buscador_blanco" data-toggle="collapse" aria-expanded="false" aria-controls="collapse4" onclick="clearForms('buscador_blanco')">
                                        <div class="card-header" id="heading4">
                                                <span class="m-0 font-size-12">
                                                    LISTA DE MODELOS CERÁMICOS
                                                    <i class="fas fa-caret-right float-right"></i>
                                                </span>
                                        </div>
                                    </a>
                                    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="form-check mb-3">
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios1">Código Modelo</label>
                                                    <input type="text" class="form-control" name="lista_modelos_codigo_modelo" value="">
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios6">Variante de Forma</label>
                                                    <input type="text" class="form-control" name="lista_modelos_variante_forma" value="">
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios6">Variante Decorativa</label>
                                                    <input type="text" class="form-control" name="lista_modelos_variante_decorativa" value="">
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios6">Variante Arqueometrica</label>
                                                    <input type="text" class="form-control" name="lista_modelos_variante_arqueometrica" value="">
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios2">Pieza Clave</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple"
                                                            data-placeholder=""
                                                            name="lista_modelos_pieza_clave[]">
                                                        <option disabled>Seleccione</option>
                                                        @foreach(\App\Models\PiezaClave::all() as $data)
                                                            <option value="{{ $data->id }}">{{ $data->pieza_clave }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-1 shadow-none">
                                    <a href="#collapse5" class="text-dark collapsed buscador" data-buscador="buscador_dorado" data-toggle="collapse" aria-expanded="false" aria-controls="collapse5" onclick="clearForms('buscador_dorado')">
                                        <div class="card-header golden" id="heading5">
                                                <span class="m-0 font-size-12">
                                                    Clasificaciones existentes
                                                    <i class="fas fa-caret-right float-right"></i>
                                                </span>
                                        </div>
                                    </a>
                                    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="form-check mb-3">
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios1">Área Geográfica</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple"
                                                            data-placeholder=""
                                                            name="clasificaciones_existentes_area_geografica[]"
                                                            id="clasificaciones_existentes_area_geografica">
                                                        <option disabled>Seleccione</option>
                                                        @foreach(getAreasGeograficas() as $data)
                                                            <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios2">Subregion Geográfica</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple"
                                                            data-placeholder=""
                                                            name="clasificaciones_existentes_sub_region_geografica[]"
                                                            id="clasificaciones_existentes_sub_region_geografica">
                                                        <option disabled>Seleccione</option>
                                                        @foreach(getSubRegionGeografica() as $data)
                                                            <option value="{{ $data->slug }}">{{ $data->valor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label class="form-check-label gris" for="exampleRadios3">Clasificacion Existente</label>
                                                    <select class="select2 form-control select2-multiple"
                                                            data-placeholder=""
                                                            multiple="multiple"
                                                            name="clasificaciones_existentes_name[]"
                                                            id="clasificaciones_existentes">
                                                        <option disabled>Seleccione</option>
                                                      
                                                    </select>

                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning waves-effect waves-light col-lg-4">BUSCAR</button>
                            <input type="hidden" name="cronologia_bajo" id="cronologia_bajo"/>
                            <input type="hidden" name="cronologia_alto" id="cronologia_alto"/>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End formularios -->

            <!-- Mapa -->
            <div class="col-lg-7 offset-lg-1 text-center">
                <div class="row text-center">

                   <input type="checkbox" name="" id="active_stoke" value="Activar limites" checked>
                   <label>Activar limites departamentales</label>  
                </div>
               
                @include('front.page.buscador.mapa')

                <div class="container-fluid p-3" style="margin-top: 0px;">
                    <!-- Range slider: -->
                    <input
                            id="buscador_cronologia"
                            type="text"
                            data-slider-ticks="[0, 500, 1000, 1500, 2000, 2500, 3000, 3500, 4000, 4100, 4200, 4300, 4400, 4500, 4600, 4700, 4800, 4900, 5000, 5100, 5200, 5300, 5400, 5500, 5600, 5700, 5800, 5900, 6000, 6100, 6200, 6300, 6400, 6500, 6600, 6700, 6800, 6900, 7000, 7100, 7200, 7300, 7400, 7500, 7600, 7700, 7800]"
                            data-slider-step="100"
                            data-slider-ticks-snap-bounds="200"
                            data-slider-ticks-tooltip="true"
                            data-slider-handle="custom"
                            ticks_positions="[0, 6, 13, 19, 26, 32, 38, 45, 51, 53, 54, 55, 56, 58, 59, 60, 62, 63, 64, 65, 67, 68, 69, 71, 72, 73, 74, 76, 77, 78, 79, 81, 82, 83, 85, 86, 87, 88, 90, 91, 92, 94, 95, 96, 97, 99, 100]"/>
                </div>
            </div>
            <!-- End mapa -->
        </div>
    </div>
    <!-- Fin del contenido de la página -->
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            // With JQuery
            $(".image-checkbox").each(function () {
                if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
                    $(this).addClass('image-checkbox-checked');
                } else {
                    $(this).removeClass('image-checkbox-checked');
                }
            });

            $("#clasificaciones_existentes_sub_region_geografica").on("change",function(){
                var formData = new FormData();
                formData.append("_token",$('input[name="_token"]').val());
                formData.append("clasificaciones_existentes_area_geografica",$("#clasificaciones_existentes_area_geografica").val());
                formData.append("clasificaciones_existentes_sub_region_geografica",$("#clasificaciones_existentes_sub_region_geografica").val());

                $.ajax({
                    type: 'POST',
                    url: "{{ route('front.buscador.select') }}",
                    data: formData,  
                        processData: false,  // tell jQuery not to process the data
      contentType: false, // Al atributo data se le asigna el objeto FormData.
      success: function(data) {
        $('#clasificaciones_existentes').html(data);


    },error : function(xhr, status) {

    }
});
                
            });
            $("#clasificaciones_existentes_area_geografica").on("change",function(){
                var formData = new FormData();
                formData.append("_token",$('input[name="_token"]').val());
                formData.append("clasificaciones_existentes_area_geografica",$("#clasificaciones_existentes_area_geografica").val());
                formData.append("clasificaciones_existentes_sub_region_geografica",$("#clasificaciones_existentes_sub_region_geografica").val());

                $.ajax({
                    type: 'POST',
                    url: "{{ route('front.buscador.select') }}",
                    data: formData,  
                        processData: false,  // tell jQuery not to process the data
      contentType: false, // Al atributo data se le asigna el objeto FormData.
      success: function(data) {
        $('#clasificaciones_existentes').html(data);


    },error : function(xhr, status) {

    }
});
                });

            $("#active_stoke").on("change",function(){
                if ($(this).is(":checked")) {
                    $('#image_active').css("visibility","initial");
                   // $('polygon').css('stroke','#00000050');
                    
                }else{
                    $('#image_active').css("visibility","hidden");
                     //$('polygon').css('stroke','#00000060');
                }
               
            });

            $(".image-checkbox").on("click", function (e) {
                $(this).toggleClass('image-checkbox-checked');
                var $checkbox = $(this).find('input[type="checkbox"]');
                $checkbox.prop("checked", !$checkbox.prop("checked"))
                e.preventDefault();
            });

            // Configura los select con select2
            $(".select2").select2();

            let slider = new Slider("#buscador_cronologia", {
                ticks: [0, 500, 1000, 1500, 2000, 2500, 3000, 3500, 4000, 4100, 4200, 4300, 4400, 4500, 4600, 4700, 4800, 4900, 5000, 5100, 5200, 5300, 5400, 5500, 5600, 5700, 5800, 5900, 6000, 6100, 6200, 6300, 6400, 6500, 6600, 6700, 6800, 6900, 7000, 7100, 7200, 7300, 7400, 7500, 7600, 7700, 7800],
                ticks_positions: [0, 6, 13, 19, 26, 32, 38, 45, 51, 53, 54, 55, 56, 58, 59, 60, 62, 63, 64, 65, 67, 68, 69, 71, 72, 73, 74, 76, 77, 78, 79, 81, 82, 83, 85, 86, 87, 88, 90, 91, 92, 94, 95, 96, 97, 99, 100],
                ticks_snap_bounds: 200,
                ticks_labels: ['6000 a.C', '', '', '', '', '', '', '', '2000 a.C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1800 d.C.'],
                formatter: function (a) {
                    if (Array.isArray(a)) {
                        let r = a[0] - 6e3, e = a[1] - 6e3;
                        return 0 > r ? r = Math.abs(r) + " a.C" : r += " d.C", 0 > e ? e = Math.abs(e) + " a.C" : e += " d.C", r + " a " + e
                    }
                    return 0 > a - 6e3 ? Math.abs(a - 6e3) + " a.C." : a - 6e3 + " d.C."
                },
                ticks_tooltip: true,
                step: 100,
                value: [0, 7800],
            });

            valores_cronologia(slider.getValue());
            slider.on('slide', function (value) {
                valores_cronologia(value);
            });
        });

        function valores_cronologia(a) {
            let r = a[0] - 6e3,
                e = a[1] - 6e3;
            $("#cronologia_bajo").val(r), $("#cronologia_alto").val(e)
        }

        function clearForms(buscador) {

            $('.buscador').map(function () {
                if ($(this).data('buscador') !== buscador) {
                    $(this).parent().find('input').val('')
                    $(this).parent().find('textarea').val('')
                    $(this).parent().find('select').val(null).trigger('change')
                }
            })

        }

    </script>

@endsection

@section('css')
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet'/>
    <link rel="stylesheet" href="{{ asset( 'assets/css/bootstrap-slider.css' ) }}"/>
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
    <script src="{{ asset( 'assets/js/vendor/bootstrap-slider.js' ) }}"></script>
@endsection
