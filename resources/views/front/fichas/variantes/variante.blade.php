<style>
    @media (max-width: 768px) {
        .variant-title {
            height: auto !important;
            margin: 20px 20px 26px 30px !important;
        }
        .variants-container {
            width: auto !important;
            max-height: 240px !important;
        }
        .variant-container {
            height: auto !important;
            margin: 10px 19px 10px 22px !important;
        }
    }

    .variants-container {
        display: grid !important;
        grid-template-columns: repeat(1, 1fr) !important;
        grid-template-rows: repeat(1, 1fr) !important;
        max-width: 169px;
        max-height: 700px;
        overflow: scroll;
        overflow-x: hidden;
        align-items: center;
        justify-items: center;
        border-radius: 13px !important;
    }

    .forma-variants-container {
        background-color: #FFDEDC !important;
    }

    .decorativa-variants-container {
        background-color: #FFEEDA !important;
    }

    .arqueometrica-variants-container {
        background-color: #E2DAA17A !important;
    }

    .variant-container {
        width: 120px !important;
        height: 137px;
        background-color: #FFFFFF !important; 
        border-radius: 13px !important;
        margin: 17px 19px 17px 22px;
        font-size: 16px; 
    }

    .variant-img {
        width: 99%;
        height: 85%;
        background-color: #FFFFFF; 
    }

    .variant-title {
        height: auto;
        border: none;
        border-radius: 13px;
        text-align: center;
        font-size: 20px;
        font-weight: 600;
        cursor: text !important;
        margin: 0px 0px 21px 0px;
    }

    .variant-description-title {
        font-size: 17px;
        font-weight: 600;
        margin-top: 39px;
    }

    .variant-description {
        font-size: 17px;
        font-weight: 300;
        color: #82858B;
        margin-top: 39px;
    }

    .forma-variant {
        background-color: #FFDEDC;
        color: #F53B2E;
    }

    .decorativa-variant {
        background-color: #FFEEDA;
        color: #FF8800;
    }

    .arqueometrica-variant {
        background-color: #E2DAA17A;
        color: #C2AA09;
    }
</style>

<div class="card">
    <div class="card-body">
        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
            @foreach($modeloMetaData as $modelo => $data)
            @if(!empty(trim($modelo)))
                <li class="nav-item">
                        <a class="nav-link @if($loop->first) active @endif " data-toggle="tab" href="#{{ $variante }}-{{ $modelo }}" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">{{ !empty(trim($modelo)) ? $modelo : '---' }}</span>
                        </a>
                    </li>
            @endif

            @endforeach
        </ul> 

        <div class="tab-content p-3 text-muted">
            @foreach($modeloMetaData as $modelo => $info)
               @if(!empty(trim($modelo))) 
                <div class="tab-pane @if($loop->first) active @endif" id="{{ $variante }}-{{ $modelo }}" role="tabpanel">
                    <div class="checkout-tabs">
                        <div class="row">
                            @php
                                $variante = "arqueometrica";
                            @endphp
                            @if ($variante == "forma")
                                <!-- New variante forma view -->
                                <div class="d-flex flex-column flex-md-row justify-content-center justify-content-md-start align-items-center align-items-md-start">
                                    <div class="variants-container forma-variants-container ml-sm-1 ml-md-2 mr-sm-1 mr-md-5">
                                        <ul class="nav nav-pills nav-fill">
                                            @for ($i = 0; $i < 8; $i++)
                                                <li class="nav-item">
                                                    <a href="#" class="variant-container @if($i==0) active @endif nav-link" data-toggle="tab" aria-current="page">
                                                        <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" class="variant-img mx-auto d-none d-md-block" alt="">
                                                        CCsin{{$i}}
                                                    </a>
                                                </li>
                                            @endfor
                                        </ul>
                                    </div>
                                    <div class="ml-sm-1 ml-md-5">
                                        <button type="button" class="variant-title forma-variant">
                                            Descripción formal
                                        </button>
                                        @php
                                            $descriptions = array (
                                            array("Resumen","Copa con boca circular, borde evertido, labio biselado externamente, cuerpo aquillado, fondo cóncavo y pedestal"),
                                            array("Alto","20,6 cm"),
                                            array("Ancho","21 cm"),
                                            array("Espesor","0,84 cm"),
                                            array("Espesor en el borde","0,84 cm"),
                                            array("Espesor en el cuerpo","0,84 cm"),
                                            array("Espesor en la base","0,84 cm"),
                                            array("Forma base","Olla"),
                                            array("Boca","Circular"),
                                            array("Borde","Recto reformado externamente"),
                                            array("Cuello","Recto"),
                                            array("Fondo","Plano"),
                                            array("Base","Plana"),
                                            );
                                        @endphp
                                        @foreach($descriptions as $description)
                                            <p>
                                                <span class="variant-description-title forma-variant">{{ $description[0] }}:</span>
                                                <span class="variant-description">{{ $description[1] }}</span>
                                            </p>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- End new variante forma view -->
                            @elseif ($variante == "decorativa")
                                <!-- New variante decorativa view -->
                                <div class="d-flex flex-column flex-md-row justify-content-center justify-content-md-start align-items-center align-items-md-start">
                                    <div class="variants-container decorativa-variants-container ml-sm-1 ml-md-2 mr-sm-1 mr-md-5">
                                        <ul class="nav nav-pills nav-fill">
                                            @for ($i = 0; $i < 4; $i++)
                                                <li class="nav-item">
                                                    <a href="#" class="variant-container @if($i==0) active @endif nav-link" data-toggle="tab" aria-current="page">
                                                        <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" class="variant-img mx-auto d-none d-md-block" alt="">
                                                        CCsin{{$i}}
                                                    </a>
                                                </li>
                                            @endfor
                                        </ul>
                                    </div>
                                    <div class="ml-sm-1 ml-md-5">
                                        <button type="button" class="variant-title decorativa-variant">
                                            Decoración
                                        </button>
                                        @php
                                            $descriptions = array (
                                            array("Resumen","Excisiones anchas profundas, en el soporte. Una franja helicoidal con motivos geométricos que se extiende en la parte central cilíndrica del soporte y amplia franja con motivos geométricos repetitivos debajo de la quilla del soporte"),
                                            array("Decoración 1","Excisión"),
                                            array("Decoración 2","Incisión"),
                                            array("Posición de la decoración en la pieza","Parte central cilíndrica del soporte o pedestal - Debajo de la quilla de soporte"),
                                            array("Color engobe (código Munsell)","5YR 4/6 - 5YR5/6"),
                                            array("Color engobe (nombre Munsell)","Marrón claro"),
                                            array("Tratamiento de la superficie","Engobe"),
                                            array("Acabado de la superficie","Bruñido - Alisado"),
                                            array("Observaciones","La decoración excisa presenta generalmente elementos repetitivos contrapuestos"),
                                            );
                                        @endphp
                                        @foreach($descriptions as $description)
                                            <p>
                                                <span class="variant-description-title decorativa-variant">{{ $description[0] }}:</span>
                                                <span class="variant-description">{{ $description[1] }}</span>
                                            </p>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- End new variante decorativa view -->
                            @elseif ($variante == "arqueometrica")
                                <!-- New variante arqueometrica view -->
                                <div class="d-flex flex-column flex-md-row justify-content-center justify-content-md-start align-items-center align-items-md-start">
                                    <div class="variants-container arqueometrica-variants-container ml-sm-1 ml-md-2 mr-sm-1 mr-md-5 ">
                                        <ul class="nav nav-pills nav-fill">
                                            @for ($i = 0; $i < 4; $i++)
                                                <li class="nav-item">
                                                    <a href="#" class="variant-container @if($i==0) active @endif nav-link" data-toggle="tab" aria-current="page">
                                                        <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" class="variant-img mx-auto d-none d-md-block" alt="">
                                                        CCsin{{$i}}
                                                    </a>
                                                </li>
                                            @endfor
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-md-3 ml-sm-1 ml-md-5">
                                                <button type="button" class="variant-title arqueometrica-variant mt-md-3 mb-md-5">
                                                    Descripción técnica
                                                </button>
                                                @php
                                                    $descriptions = array (
                                                    array("Resumen","Excisiones anchas profundas, en el soporte. Una franja helicoidal con motivos geométricos que se extiende en la parte central cilíndrica del soporte y amplia franja con motivos geométricos repetitivos debajo de la quilla del soporte"),
                                                    array("Decoración 1","Excisión"),
                                                    array("Decoración 2","Incisión"),
                                                    array("Posición de la decoración en la pieza","Parte central cilíndrica del soporte o pedestal - Debajo de la quilla de soporte"),
                                                    array("Color engobe (código Munsell)","5YR 4/6 - 5YR5/6"),
                                                    array("Color engobe (nombre Munsell)","Marrón claro"),
                                                    array("Tratamiento de la superficie","Engobe"),
                                                    array("Acabado de la superficie","Bruñido - Alisado"),
                                                    array("Observaciones","La decoración excisa presenta generalmente elementos repetitivos contrapuestos"),
                                                    );
                                                @endphp
                                                @foreach($descriptions as $description)
                                                    <p>
                                                        <span class="variant-description-title arqueometrica-variant">{{ $description[0] }}:</span>
                                                        <span class="variant-description">{{ $description[1] }}</span>
                                                    </p>
                                                @endforeach
                                            </div>
                                            <div class="line d-none d-md-block"></div>
                                            <div class="col-md-3 ml-sm-1 ml-md-5">
                                                <button type="button" class="variant-title arqueometrica-variant mt-md-3 mb-md-5">
                                                    Petrografía
                                                </button>
                                                @php
                                                    $descriptions = array (
                                                    array("Resumen","Excisiones anchas profundas, en el soporte. Una franja helicoidal con motivos geométricos que se extiende en la parte central cilíndrica del soporte y amplia franja con motivos geométricos repetitivos debajo de la quilla del soporte"),
                                                    array("Decoración 1","Excisión"),
                                                    array("Decoración 2","Incisión"),
                                                    array("Posición de la decoración en la pieza","Parte central cilíndrica del soporte o pedestal - Debajo de la quilla de soporte"),
                                                    array("Color engobe (código Munsell)","5YR 4/6 - 5YR5/6"),
                                                    array("Color engobe (nombre Munsell)","Marrón claro"),
                                                    array("Tratamiento de la superficie","Engobe"),
                                                    array("Acabado de la superficie","Bruñido - Alisado"),
                                                    array("Observaciones","La decoración excisa presenta generalmente elementos repetitivos contrapuestos"),
                                                    );
                                                @endphp
                                                @foreach($descriptions as $description)
                                                    <p>
                                                        <span class="variant-description-title arqueometrica-variant">{{ $description[0] }}:</span>
                                                        <span class="variant-description">{{ $description[1] }}</span>
                                                    </p>
                                                @endforeach
                                            </div>
                                            <div class="line d-none d-md-block"></div>
                                            <div class="col-md-3 ml-sm-1 ml-md-5">
                                                <button type="button" class="variant-title arqueometrica-variant mt-md-3 mb-md-5">
                                                    Difracción de rayos X
                                                </button>
                                                @php
                                                    $descriptions = array (
                                                    array("Difractograma",""),
                                                    array("Decoración 1","Excisión"),
                                                    array("Decoración 2","Incisión"),
                                                    array("Posición de la decoración en la pieza","Parte central cilíndrica del soporte o pedestal - Debajo de la quilla de soporte"),
                                                    array("Color engobe (código Munsell)","5YR 4/6 - 5YR5/6"),
                                                    array("Color engobe (nombre Munsell)","Marrón claro"),
                                                    array("Tratamiento de la superficie","Engobe"),
                                                    array("Acabado de la superficie","Bruñido - Alisado"),
                                                    array("Observaciones","La decoración excisa presenta generalmente elementos repetitivos contrapuestos"),
                                                    );
                                                @endphp
                                                @foreach($descriptions as $description)
                                                    @if ($description[0] == "Difractograma")
                                                        <p>
                                                            <span class="variant-description-title arqueometrica-variant">{{ $description[0] }}:</span>
                                                            <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" class="variant-img mx-auto d-block" alt="">
                                                        </p>
                                                    @else
                                                        <p>
                                                            <span class="variant-description-title arqueometrica-variant">{{ $description[0] }}:</span>
                                                            <span class="variant-description">{{ $description[1] }}</span>
                                                        </p>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End new variante arqueometrica view -->
                            @endif

                            <!-- Before view -->
                            <div class="d-block">                                
                                <div class="col-xl-2 col-sm-3">
                                    <div class="nav flex-column nav-pills" id="datos-variante-{{ $variante }}-{{ $modelo }}" role="tablist" aria-orientation="vertical">
                                        @foreach($info as $tab => $data)
                                            @include('admin.fichas.variantes.variantes.tab', ['first' => $loop->first, 'variante' => $variante, 'modelo' => $modelo, 'tab' => $tab])
                                        @endforeach
                                        @include('admin.fichas.variantes.variantes.tab', ['first' => false, 'variante' => $variante, 'modelo' => $modelo, 'tab' => 'Fotografías y Dibujos'])
                                        @include('admin.fichas.variantes.variantes.tab', ['first' => false, 'variante' => $variante, 'modelo' => $modelo, 'tab' => 'Mapa y Cronología'])
                                    </div>
                                </div>
                                <div class="col-xl-10 col-sm-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="tab-content" id="datos-variante-{{ $variante }}-{{ $modelo }}-content">
                                                @foreach($info as $tab => $data)
                                                    <div class="tab-pane fade show @if($loop->first) active @endif" id="datos-variante-{{ $variante }}-{{ $modelo }}-{{ \Illuminate\Support\Str::kebab($tab) }}" role="tabpanel" aria-labelledby="datos-variante-tab-{{ $variante }}-{{ $modelo }}-{{ \Illuminate\Support\Str::kebab($tab) }}">
                                                        <div class="shadow-none mb-0">
                                                            <div class="form-group row">
                                                                @foreach($data as $nombre => $campo)
                                                                    @include('front.fichas.variantes.pieza_clave.campos_dos_columnas' , ['nombre' => $nombre, 'campo'=> $campo, 'dato' => $campo, 'border' => 'border-bottom border-white', 'padding' => 'pb-3', 'variante'=> $variante, 'modelo' => $modeloModel, 'seccion' => $tab , 'tab' => $modelo ])
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <div class="tab-pane fade" id="datos-variante-{{ $variante }}-{{ $modelo }}-fotografías-y-dibujos" role="tabpanel" aria-labelledby="datos-variante-tab-{{ $variante }}-{{ $modelo }}-fotografías-y-dibujos">
                                                    <div class="shadow-none mb-0">
                                                        <?php $pieza_clave_id_=0 ;?>
                                                        @foreach($info as $data)
                                                            @if($loop->first)
                                                                @foreach($data as $data_)
                                                                    @if($loop->first)
                                                                        @foreach($data_ as $d)
                                                                            @if($loop->first)
                                                                            <?php $pieza_clave_id_= $d;?>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        @endforeach
    
                                                        @include('front.fichas.variantes.pieza_clave.fotografias_variante',['modelo' => $modeloModel, 'variante' => $variante, 'varianteCodigo' => $modelo ,'pieza_clave'=>$pieza_clave_id_])
                                                    </div>
                                                </div>
    
                                                <div class="tab-pane fade" id="datos-variante-{{ $variante }}-{{ $modelo }}-mapa-y-cronología" role="tabpanel" aria-labelledby="datos-variante-tab-{{ $variante }}-{{ $modelo }}-mapa-y-cronología">
                                                    <div class="shadow-none mb-0">
                                                        @include('front.fichas.variantes.pieza_clave.mapa',['pieza_clave'=>$modeloModel->piezasClave->first()])
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End before view -->
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</div>