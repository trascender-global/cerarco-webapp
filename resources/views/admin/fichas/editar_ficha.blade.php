@extends('layouts.master')

@section('title')
    @lang('translation.EditarFicha')
@endsection
@section('head_add')
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/browser-image-compression@2.0.0/dist/browser-image-compression.js"></script>
@endsection
@section('content')
    @component('common-components.breadcrumb')
        @slot('title')
            Fichas
        @endslot
        @slot('li_1')
            Fichas
        @endslot
        @slot('li_2')
            Editar Ficha
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Ficha: <em id="codigo_modelo_main">{{ $modelo->codigo }}</em></h4>
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
                                <form method="POST" action="{{ route('admin.ficha.salvar_ficha', $modelo) }}"
                                    id="formEditarFicha">
                                    @csrf
                                    @include('admin.fichas.variantes.foreach-pieza_clave', [
                                        'piezas_clave' => $modelo->piezasClave,
                                        'modelo' => $modelo,
                                    ])
                                </form>
                            </div>

                            <div class="tab-pane" id="modelo">
                                {{-- {{$modelo->getModelo()}} --}}
                                @include('admin.fichas.variantes.modelo', [
                                    'modeloMetaData' => $modelo->getModelo(),
                                    'variante' => 'modelo',
                                    'modeloModel' => $modelo,
                                ])
                            </div>

                            <div class="tab-pane" id="variante-de-forma">
                                @include('admin.fichas.variantes.variante', [
                                    'modeloMetaData' => $modelo->metadata_forma,
                                    'variante' => 'forma',
                                    'modeloModel' => $modelo,
                                ])
                            </div>

                            <div class="tab-pane" id="variante-decorativa">
                                @include('admin.fichas.variantes.variante', [
                                    'modeloMetaData' => $modelo->metadata_decorativa,
                                    'variante' => 'decorativa',
                                    'modeloModel' => $modelo,
                                ])
                            </div>

                            <div class="tab-pane" id="variante-arqueometrica">
                                @include('admin.fichas.variantes.variante', [
                                    'modeloMetaData' => $modelo->metadata_arqueometrica,
                                    'variante' => 'arqueometrica',
                                    'modeloModel' => $modelo,
                                ])
                            </div>
                            <div id="contenedor_fotos_mapa">
                                @include('admin.fichas.variantes.show_fotos', [
                                    'pieza_clave' => $modelo->piezasClave()->first(),
                                ])
                            </div>

                        </div>

                        {{-- <div class="tab-pane fade" id="fotografias-general-{{ $pieza_clave }}" role="tabpanel"
                            aria-labelledby="fotografias-general-tab-{{ $pieza_clave }}">
                            <div class="shadow-none mb-0">
                                @include('admin.fichas.variantes.pieza_clave.fotografias_pieza_clave', [
                                    'pieza_clave' => $pieza,
                                ])
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dibujos-general-{{ $pieza_clave }}" role="tabpanel"
                            aria-labelledby="dibujos-general-tab-{{ $pieza_clave }}">
                            <div class="shadow-none mb-0">
                                @include('admin.fichas.variantes.pieza_clave.dibujos', [
                                    'pieza_clave' => $pieza,
                                ])
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mapa-general-{{ $pieza_clave }}" role="tabpanel"
                            aria-labelledby="mapa-general-tab-{{ $pieza_clave }}">
                            <div class="shadow-none mb-0">
                                @include('admin.fichas.variantes.pieza_clave.mapa', [
                                    'pieza_clave' => $pieza,
                                ])
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-success" id="btnAddPiezaClave"
        style="z-index: 1000;position: fixed;right: 10px;bottom: 10px">AGREAGAR PIEZA CLAVE</button>
@endsection

@section('script')
    <script src="{{ asset('assets/libs/twitter-bootstrap-wizard/twitter-bootstrap-wizard.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-wizard.init.js') }}"></script>
    <script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/ecommerce-select2.init.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

    <script>
        var modeloID = {{ $modelo->id }}
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        ///////////Cambiar contendor de imagenes y mapa//////////
        $(document).on('click', '.pieza_clave_link', function() {
            var id = $(this).data("id")
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.ficha.show_fotos') }}',
                data: {
                    id: id
                },
                success: function(data, status, xhr) { // success callback function
                    $('#contenedor_fotos_mapa').html(data)
                },
                error: function(jqXhr, textStatus, errorMessage) { // error callback 
                }
            });
        })
        ///////////Boton para activar input file piezas claves fotos//////////////
        $(document).on('click', '.btn_add_foto_pieza', function() {
            var id = $(this).data("id")
            $('#pieza_clave_foto_input_' + id).click()
        })
        ///////////Evento change para cargar una foto en pieza clave//////
        $(document).on('change', '.input_foto_pieza_clave', function() {
            var id = $(this).data("id")
            if ($("#pieza_clave_foto_input_" + id)[0].files[0]) {
                var files = $("#pieza_clave_foto_input_" + id)[0].files;
                files.forEach(file1 => {
                    const promise = handleImageUpload(file1);
                    promise.then((file) => {
                        var datos = new FormData();
                        datos.append('file', file);
                        datos.append('id', id)
                        datos.append('pos', $('.pieza_clave_foto_content').length)
                        $.ajax({
                            url: "{{ route('admin.ficha.subir_fotos_pieza_clave') }}",
                            type: "post",
                            data: datos,
                            cache: false,
                            contentType: false,
                            processData: false
                        }).done(function(res) {
                            $("#pieza_clave_content_fotos_img").html(res);
                            $("#pieza_clave_foto_input_" + id).val("");
                        });
                    })
                })

            } else {
                alert("Seleccione un archivo a subir");
            }
        })
        ///////////Boton para activar input file variantes fotos//////////////
        $(document).on('click', '.btn_add_foto_variante', function() {
            var id = $(this).data("id")
            $('#variante_foto_input_' + id).click()
        })
        ///////////Evento change para cargar una foto en variante//////
        $(document).on('change', '.input_foto_variante', function() {
            var modelo = $(this).data("modelo")
            var variante = $(this).data("variante")
            var codigo = $(this).data("codigo")
            if ($("#variante_foto_input_" + variante)[0].files[0]) {
                var files = $("#variante_foto_input_" + variante)[0].files;
                files.forEach(file1 => {
                    const promise = handleImageUpload(file1);
                    promise.then((file) => {
                        var datos = new FormData();
                        datos.append('file', file);
                        datos.append('posicion', $('.variante_foto_content_' + variante).length)
                        datos.append('codigo', codigo);
                        $.ajax({
                            url: `{{ route('admin.ficha.subir_fotos_variante') }}/${modelo}/${variante}`,
                            type: "post",
                            data: datos,
                            cache: false,
                            contentType: false,
                            processData: false
                        }).done(function(res) {
                            $("#variante_content_fotos_img_" + variante).html(res);
                            $("#variante_foto_input_" + variante).val("");
                        });
                    })
                })

            } else {
                alert("Seleccione un archivo a subir");
            }
        })
        ///////////Boton para activar input file dibujos//////////////
        $(document).on('click', '.btn_add_foto_dibujo', function() {
            var id = $(this).data("id")
            $('#dibujo_foto_input_' + id).click()
        })
        ///////////Evento change para cargar una foto en variante//////
        $(document).on('change', '.input_foto_dibujo', function() {
            var id = $(this).data("id")
            if ($("#dibujo_foto_input_" + id)[0].files[0]) {

                var files = $("#dibujo_foto_input_" + id)[0].files;
                files.forEach(file1 => {
                    const promise = handleImageUpload(file1);
                    promise.then((file) => {
                        const promise = handleImageUpload(file1);
                        promise.then((file) => {
                            var datos = new FormData();
                            datos.append('file', file);
                            datos.append('posicion', $('#dibujos_content_fotos_img').length)
                            $.ajax({
                                url: `{{ route('admin.ficha.subir_dibujos') }}/${id}`,
                                type: "post",
                                data: datos,
                                cache: false,
                                contentType: false,
                                processData: false
                            }).done(function(res) {
                                $("#dibujos_content_fotos_img").html(res);
                            });
                        });
                    })
                });


            } else {
                alert("Seleccione un archivo a subir");
            }
        })

        ////////Evento click para agregar mas piezas clave///////////////
        $('#btnAddPiezaClave').on('click', function() {
            var btn = $(this)
            btn.prop('disabled', true)
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.ficha.render', ['type' => 'edit']) }}',
                data: {
                    modelo: modeloID,
                    index: $('#content_tab_header li').length + 1
                },
                success: function(data, status, xhr) { // success callback function
                    $('#content_tab_header').append(data.header)
                    $('#content_tab_body').append(data.body)
                    loadNamePiezas()
                    btn.prop('disabled', false)
                },
                error: function(jqXhr, textStatus, errorMessage) { // error callback 
                    btn.prop('disabled', false)
                }
            });
        })

        $(document).on('change', '.form-check-input.variante', function() {
            var id = $(this).data('id')
            var number = $(this).data('index')
            var type = $(this).data('type')
            var check = $(this).is(':checked')
            var codigo = ''
            switch (type) {
                case 'forma':
                    if (check) {
                        codigo =
                            `${$('#codigo_modelo_main').text()}-${String.fromCharCode((number) + 'A'.charCodeAt(0))}`
                        $(`#dg-variantes-forma-asociada_${id}`).val(codigo)
                    } else {
                        $(`#dg-variantes-forma-asociada_${id}`).val(``)
                    }

                    break;
                case 'decorativa':
                    if (check) {
                        codigo = `${$('#codigo_modelo_main').text()}-${number+1}`
                        $(`#dg-variante-decorativa-asociada_${id}`).val(codigo)
                    } else {
                        $(`#dg-variante-decorativa-asociada_${id}`).val('')
                    }

                    break;
                default:
                    if (check) {
                        codigo = `${$('#codigo_modelo_main').text()}-${romanize(number+1)}`
                        $(`#dg-variante-arqueometrica-asociada_${id}`).val(codigo)
                    } else {
                        $(`#dg-variante-arqueometrica-asociada_${id}`).val('')
                    }

                    break;
            }
            changeVariante(type, check, id, codigo);
        })

        function changeVariante(variante, check, piezaclave, codigo) {
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.ficha.change_variante') }}',
                data: {
                    'variante': variante,
                    'modelo': modeloID,
                    'piezaclave': piezaclave,
                    'check': check,
                    'codigo': codigo
                },
                success: function(data, status, xhr) { // success callback function
                    switch (variante) {
                        case 'forma':
                            $('#variante-de-forma').html(data.render)
                            $('#modelo').html(data.modelo)
                            break;
                        case 'decorativa':
                            $('#variante-decorativa').html(data.render)
                            $('#modelo').html(data.modelo)
                            break;
                        default:
                            $('#variante-arqueometrica').html(data.render)
                            $('#modelo').html(data.modelo)
                            break;
                    }
                    loadNamePiezas()
                },
                error: function(jqXhr, textStatus, errorMessage) { // error callback 
                }
            });
        }
        //////Funcion para convertir entero a numero romano///////
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
        $(document).on('click', '.borrar_foto_modelo', function() {
            let element = $(this);
            $.ajax({
                method: 'POST',
                url: "{{ route('admin.ficha.borrar_foto') }}/" + $(this).data('foto'),
            }).done(function() {
                $("#modelo_foto_content_" + element.data('foto')).fadeOut('50', function() {
                    $(this).remove();
                });
            })
        })

        $(document).on('click', '.borrar_foto_variante', function() {
            let id = $(this).data('foto');
            $.ajax({
                method: 'POST',
                url: "{{ route('admin.ficha.borrar_foto_variante') }}/" + id,
            }).done(function() {
                $("#variante_foto_content_" + id).fadeOut('50', function() {
                    $(this).remove();
                });
            })
        })

        $(document).on("click", ".borrar_foto_pieza_clave", function() {
            let id = $(this).data('foto');
            $.ajax({
                method: 'POST',
                url: "{{ route('admin.ficha.borrar_foto_pieza_clave') }}/" + id,
            }).done(function() {

                $("#pieza_clave_foto_content_" + id).fadeOut('50', function() {
                    $(this).remove();
                });
            })
        })

        $(document).on("click", ".borrar_dibujo_pieza_clave", function() {
            let element = $(this);
            $.ajax({
                method: 'POST',
                url: "{{ route('admin.ficha.borrar_dibujo_pieza_clave') }}/" + $(this).data('foto'),
            }).done(function() {
                $("#pieza_clave_dibujo_content_" + element.data('foto')).fadeOut('50', function() {
                    $(this).remove();
                });
            })
        })

        $('.actualizar_dato_variante').change(function() {
            let element = $(this);
            $.ajax({
                method: 'POST',
                url: "{{ route('admin.ficha.actualizar_dato_variante') }}",
                data: {
                    modelo: element.data('modelo'),
                    campo: element.data('campo'),
                    variante: element.data('variante'),
                    seccion: element.data('seccion'),
                    tab: element.data('tab'),
                    valor: element.val(),
                },
            }).done(function(data) {
                Toast.fire({
                    icon: 'success',
                    title: 'Datos actualizados correctamente!'
                })
            })
        })
        loadNamePiezas()

        function loadNamePiezas() {
            var text = $('#codigo_modelo_main').text()
            $('input[name*=dg-codigo-modelo]').attr('readonly', true)
            $('input[name*=dg-variantes-forma-asociada]').attr('readonly', true)
            $('input[name*=dg-variante-decorativa-asociada]').attr('readonly', true)
            $('input[name*=dg-variante-arqueometrica-asociada]').attr('readonly', true)
            $('input[name*=dg-codigo-modelo]').each(function(i) {
                $(this).val(text)
                $(this).change()
                $('#pieza_clave_codigo_' + (i + 1)).val(`${text}-PC${(i+1)}`)
            })
            var len = $('#content_tab_header li').length
            $('.btn-delete-pieza').each(function(i) {
                $(this).css('display', 'none')
            })

            if (len > 1)
                $('.btn-delete-pieza').last().css('display', 'block')

        }

        function salvarFicha(element) {
            $.ajax({
                url: "{{ route('admin.ficha.modificarCampo') }}/?pieza=" + element.data('pieza_clave') +
                    '&slug=' + element.attr('name') + '&val=' + element.val(),
                method: 'POST',
                success: function(data, status, xhr) { // success callback function
                    Toast.fire({
                        icon: 'success',
                        title: 'Datos actualizados correctamente!'
                    })
                }
            })
        }
        $(document).on('change', '#formEditarFicha input', function() {
            if (!$(this).data("type") && $(this).attr('name') != 'dg-codigo-modelo') {
                salvarFicha($(this));
            }
        });
        $(document).on('change', '#formEditarFicha textarea', function() {
            salvarFicha($(this));
        });
        $(document).on('change', '#formEditarFicha select', function() {
            salvarFicha($(this));
        });
        $(document).on('click', '.btn-delete-pieza', function() {
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.ficha.delete_pieza') }}',
                data: {
                    'pieza': $(this).data('id'),
                },
                success: function(data, status, xhr) { // success callback function
                    $("#content_tab_header").find("li:last").remove();
                    $("#content_tab_body").find("form:last").remove();
                    loadNamePiezas()
                },
                error: function(jqXhr, textStatus, errorMessage) { // error callback 
                }
            });

        })
        async function handleImageUpload(file) {
            const imageFile = file;

            const options = {
                maxSizeMB: 1,
                maxWidthOrHeight: 1920,
                useWebWorker: true
            }
            try {
                const compressedFile = await imageCompression(imageFile, options);
                console.log(
                    `originalFile size ${imageFile.size / 1024 / 1024} MB - compressedFile size ${compressedFile.size / 1024 / 1024} MB`
                );
                return compressedFile;
            } catch (error) {
                console.log(error);
            }

        }
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
