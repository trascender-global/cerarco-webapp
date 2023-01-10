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
                    <div class="d-flex mb-3" style="align-items: center;">
                        <h5 class="">Ficha: </h5>
                        <input class="form-control ml-2" style="width: 200px" type="text" id="codigo_modelo_main"
                            placeholder="Codigo modelo" value="" />
                    </div>

                    <div id="basic-pills-wizard" class="twitter-bs-wizard">
                        <ul class="twitter-bs-wizard-nav">
                            <li class="nav-item">
                                <a href="#pieza-clave" class="nav-link" data-toggle="tab">
                                    <span class="step-number mr-2">1</span>
                                    Pieza Clave</a>
                            </li>
                           

                        </ul>
                        <div class="tab-content twitter-bs-wizard-tab-content">
                            <div class="tab-pane" id="pieza-clave">
                                @include('admin.fichas.create.pieza_clave_foreach')
                            </div>
                            <div class="col-xl-12">
                                <button id="btnSaveAll" class="btn btn-info btn-block">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-success" id="btnAddPiezaClave"
        style="z-index: 1000;position: fixed;right: 10px;bottom: 10px">AGREAGAR PIEZA CLAVE</button>
    <!-- end row -->
@endsection
@section('script')
    <script src="{{ asset('assets/libs/twitter-bootstrap-wizard/twitter-bootstrap-wizard.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-wizard.init.js') }}"></script>
    <script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/ecommerce-select2.init.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

    <script>
            $('input[name*=dg-codigo-modelo]').attr('readonly', true)
            $('input[name*=dg-variantes-forma-asociada]').attr('readonly', true)
            $('input[name*=dg-variante-decorativa-asociada]').attr('readonly', true)
            $('input[name*=dg-variante-arqueometrica-asociada]').attr('readonly', true)
            
        $('#btnAddPiezaClave').on('click', function() {
           var btn= $(this)
           btn.prop('disabled',true)
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.ficha.render',["type"=>"create"]) }}',
                data: {
                    index: $('#content_tab_header li').length + 1
                },
                success: function(data, status, xhr) { // success callback function
                    $('#content_tab_header').append(data.header)
                    $('#content_tab_body').append(data.body)
                    loadNamePiezas()
                    btn.prop('disabled',false)
                },
                error: function(jqXhr, textStatus, errorMessage) { // error callback 
                    $('p').append('Error: ' + errorMessage);
                    btn.prop('disabled',false)
                }
            });
        })
        $(document).on('click', '.btn-delete-pieza', function() {
            $("#content_tab_header").find("li:last").remove();
            $("#content_tab_body").find("form:last").remove();
            loadNamePiezas()
        })
        $(document).on('change', '.form-check-input.variante', function() {
            var id = $(this).data('id')
            var type = $(this).data('type')
            var check=$(this).is(':checked')
            switch (type) {
                case 'forma':
                    check ? $(`#dg-variantes-forma-asociada_${id}`).val(
                        `${$('#codigo_modelo_main').val()}-${String.fromCharCode((id-1) + 'A'.charCodeAt(0))}`) 
                        :
                        $(`#dg-variantes-forma-asociada_${id}`).val(``)
                    break;
                case 'decorativo':
                    check ? $(`#dg-variante-decorativa-asociada_${id}`).val(
                        `${$('#codigo_modelo_main').val()}-${id}`)
                        :$(`#dg-variante-decorativa-asociada_${id}`).val('')
                    break;
                default:
                    check ? $(`#dg-variante-arqueometrica-asociada_${id}`).val(
                        `${$('#codigo_modelo_main').val()}-${romanize(id)}`)
                        :
                        $(`#dg-variante-arqueometrica-asociada_${id}`).val('')
                    break;
            }
        })
        $(document).on('keyup', '#codigo_modelo_main', function() {
            loadNamePiezas()
        })

        function loadNamePiezas() {
            var text = $('#codigo_modelo_main').val()
            $('input[name*=dg-codigo-modelo]').attr('readonly', true)
            $('input[name*=dg-variantes-forma-asociada]').attr('readonly', true)
            $('input[name*=dg-variante-decorativa-asociada]').attr('readonly', true)
            $('input[name*=dg-variante-arqueometrica-asociada]').attr('readonly', true)
            $('input[name*=dg-codigo-modelo]').each(function(i) {
                $(this).val(text)
                $(this).change()
                $('#pieza_clave_codigo_'+(i+1)).val(`${text}-PC${(i+1)}`)
            })
            var len = $('#content_tab_header li').length
            for (let index = 1; index <= len; index++) {
                $(`#title_pieza_clave_delete_${index}`).css('display', 'none')
            }
            if (len > 1)
                $(`#title_pieza_clave_delete_${len}`).css('display', 'block')

        }
        $(document).on('change', 'input[name*=dg-codigo-modelo]', function() {
            $('#title_pieza_clave_' + $(this).data("pieza_clave")).text(
                `${$(this).val()}-PC${$(this).data("pieza_clave")}`)
                $('.form-check-input.variante').change()
        })

        function romanize(num) {
            if (isNaN(num))
                return NaN;
            var digits = String(+num).split(""),
                key = ["", "C", "CC", "CCC", "CD", "D", "DC", "DCC", "DCCC", "CM",
                    "", "X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC",
                    "", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX"
                ],
                roman = "",
                i = 3;
            while (i--)
                roman = (key[+digits.pop() + (i * 10)] || "") + roman;
            return Array(+digits.join("") + 1).join("M") + roman;
        }
        $('#btnSaveAll').on('click',function(){
            var len = $('#content_tab_header li').length
            //for (let index = 1; index <= len; index++) {
                saveForm(len)
            //}
        })
        function saveForm(len){
           var form= $(`#content_tab_body`).serializeArray();
            $.ajax({
                type: 'POST',
                url: "{{ route('admin.ficha.save_pieza_clave')}}/"+len,
                data:form,
                success: function(data, status, xhr) { // success callback function
                 location.href=`${$('#codigo_modelo_main').val()}/editar_ficha`
                   console.log(data)
                },
                error: function(jqXhr, textStatus, errorMessage) { // error callback 
                    
                }
            });
        }

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
