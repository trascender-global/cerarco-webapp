<style>
    .pieza-clave-variant {
        background-color: #D2E7F5D1;
        color: #357BAA;
    }
    
    .pieza-clave-description-title {
        font-size: 17px;
        font-weight: 600;
        color: #357BAA;
        margin-top: 35px;
    }

    .pieza-clave-description {
        font-size: 17px;
        font-weight: 300;
        color: #82858B;
        margin-top: 35px;
    }
</style>

<div class="checkout-tabs">
    <div class="row">
        <div class="d-flex flex-column flex-md-row justify-content-center justify-content-md-start align-items-center align-items-md-start">
            <div class="variants-container pieza-clave-variant ml-sm-1 ml-md-2 mr-sm-1 mr-md-5">
                <ul class="nav nav-pills nav-fill">
                    @for ($i = 0; $i < 5; $i++)
                        <li class="nav-item">
                            <a href="#" class="variant-container @if($i==0) active @endif nav-link" data-toggle="tab" aria-current="page">
                                <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" class="variant-img mx-auto d-none d-md-block" alt="">
                                CCsin{{$i}}
                            </a>
                        </li>
                    @endfor
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-md-4 mb-2 mb-md-4 mt-2 mt-md-3">
                    <button type="button" class="variant-title pieza-clave-variant">
                        Datos generales
                    </button>
                    @php
                        $descriptions = array (
                        array("Resumen","Copa con boca circular, borde evertido, labio biselado externamente, cuerpo aquillado, fondo cóncavo y pedestal"),
                        array("Alto","20,6 cm"),
                        );
                    @endphp
                    @foreach($descriptions as $description)
                        <p>
                            <span class="pieza-clave-description-title">{{ $description[0] }}:</span>
                            <span class="pieza-clave-description">{{ $description[1] }}</span>
                        </p>
                    @endforeach
                </div>
                <div class="col-md-4 mb-2 mb-md-4 mt-2 mt-md-3">
                    <button type="button" class="variant-title pieza-clave-variant">
                        Fragmento
                    </button>
                    @php
                        $descriptions = array (
                        array("Resumen","Copa con boca circular, borde evertido, labio biselado externamente, cuerpo aquillado, fondo cóncavo y pedestal"),
                        array("Alto","20,6 cm"),
                        );
                    @endphp
                    @foreach($descriptions as $description)
                        <p>
                            <span class="pieza-clave-description-title">{{ $description[0] }}:</span>
                            <span class="pieza-clave-description">{{ $description[1] }}</span>
                        </p>
                    @endforeach
                </div>
                <div class="col-md-4 mb-2 mb-md-4 mt-2 mt-md-3">
                    <button type="button" class="variant-title pieza-clave-variant">
                        Contexto
                    </button>
                    @php
                        $descriptions = array (
                        array("Resumen","Copa con boca circular, borde evertido, labio biselado externamente, cuerpo aquillado, fondo cóncavo y pedestal"),
                        array("Alto","20,6 cm"),
                        );
                    @endphp
                    @foreach($descriptions as $description)
                        <p>
                            <span class="pieza-clave-description-title">{{ $description[0] }}:</span>
                            <span class="pieza-clave-description">{{ $description[1] }}</span>
                        </p>
                    @endforeach
                </div>
                <div class="w-100"></div>
                <div class="col-md-4 mb-2 mb-md-4 mt-2 mt-md-3">
                    <button type="button" class="variant-title pieza-clave-variant">
                        Descripción formal
                    </button>
                    @php
                        $descriptions = array (
                        array("Resumen","Copa con boca circular, borde evertido, labio biselado externamente, cuerpo aquillado, fondo cóncavo y pedestal"),
                        array("Alto","20,6 cm"),
                        );
                    @endphp
                    @foreach($descriptions as $description)
                        <p>
                            <span class="pieza-clave-description-title">{{ $description[0] }}:</span>
                            <span class="pieza-clave-description">{{ $description[1] }}</span>
                        </p>
                    @endforeach
                </div>
                <div class="col-md-4 mb-2 mb-md-4 mt-2 mt-md-3">
                    <button type="button" class="variant-title pieza-clave-variant">
                        Decoración
                    </button>
                    @php
                        $descriptions = array (
                        array("Resumen","Copa con boca circular, borde evertido, labio biselado externamente, cuerpo aquillado, fondo cóncavo y pedestal"),
                        array("Alto","20,6 cm"),
                        );
                    @endphp
                    @foreach($descriptions as $description)
                        <p>
                            <span class="pieza-clave-description-title">{{ $description[0] }}:</span>
                            <span class="pieza-clave-description">{{ $description[1] }}</span>
                        </p>
                    @endforeach
                </div>
                <div class="col-md-4 mb-2 mb-md-4 mt-2 mt-md-3">
                    <button type="button" class="variant-title pieza-clave-variant">
                        Descripción técnica
                    </button>
                    @php
                        $descriptions = array (
                        array("Resumen","Copa con boca circular, borde evertido, labio biselado externamente, cuerpo aquillado, fondo cóncavo y pedestal"),
                        array("Alto","20,6 cm"),
                        );
                    @endphp
                    @foreach($descriptions as $description)
                        <p>
                            <span class="pieza-clave-description-title">{{ $description[0] }}:</span>
                            <span class="pieza-clave-description">{{ $description[1] }}</span>
                        </p>
                    @endforeach
                </div>
                <div class="w-100"></div>
                <div class="col-md-4 mb-2 mb-md-4 mt-2 mt-md-3">
                    <button type="button" class="variant-title pieza-clave-variant">
                        Petografía
                    </button>
                    @php
                        $descriptions = array (
                        array("Resumen","Copa con boca circular, borde evertido, labio biselado externamente, cuerpo aquillado, fondo cóncavo y pedestal"),
                        array("Alto","20,6 cm"),
                        );
                    @endphp
                    @foreach($descriptions as $description)
                        <p>
                            <span class="pieza-clave-description-title">{{ $description[0] }}:</span>
                            <span class="pieza-clave-description">{{ $description[1] }}</span>
                        </p>
                    @endforeach
                </div>
                <div class="col-md-4 mb-2 mb-md-4 mt-2 mt-md-3">
                    <button type="button" class="variant-title pieza-clave-variant">
                        Rayos X
                    </button>
                    @php
                        $descriptions = array (
                        array("Resumen","Copa con boca circular, borde evertido, labio biselado externamente, cuerpo aquillado, fondo cóncavo y pedestal"),
                        array("Alto","20,6 cm"),
                        );
                    @endphp
                    @foreach($descriptions as $description)
                        <p>
                            <span class="pieza-clave-description-title">{{ $description[0] }}:</span>
                            <span class="pieza-clave-description">{{ $description[1] }}</span>
                        </p>
                    @endforeach
                </div>
                <div class="col"></div>
            </div>
        </div>
        
        <!-- Before view -->
        <div class="d-block">
            <div class="col-xl-2 col-sm-3">
                <div class="nav flex-column nav-pills" id="info-pieza" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="datos-generales-general-tab-{{ $pieza_clave }}" data-toggle="pill" href="#datos-generales-general-{{ $pieza_clave }}"
                            role="tab" aria-controls="datos-generales-general-{{ $pieza_clave }}" aria-selected="true">
                        <p class="font-weight-bold mt-1 mb-1">Datos Generales</p>
                    </a>
                    <a class="nav-link" id="fragmento-general-tab-{{ $pieza_clave }}" data-toggle="pill" href="#fragmento-general-{{ $pieza_clave }}" role="tab"
                            aria-controls="fragmento-general-{{ $pieza_clave }}" aria-selected="false">
                        <p class="font-weight-bold mt-1 mb-1">Fragmento</p>
                    </a>
                    <a class="nav-link" id="contexto-general-tab-{{ $pieza_clave }}" data-toggle="pill" href="#contexto-general-{{ $pieza_clave }}" role="tab"
                            aria-controls="contexto-general-{{ $pieza_clave }}" aria-selected="false">
                        <p class="font-weight-bold mt-1 mb-1">Contexto</p>
                    </a>
                    <a class="nav-link" id="descripcion-formal-general-tab-{{ $pieza_clave }}" data-toggle="pill" href="#descripcion-formal-general-{{ $pieza_clave }}" role="tab"
                            aria-controls="descripcion-formal-general-{{ $pieza_clave }}" aria-selected="false">
                        <p class="font-weight-bold mt-1 mb-1">Descripción Formal</p>
                    </a>
                    <a class="nav-link" id="pieza-clave-decoracion-tab-{{ $pieza_clave }}" data-toggle="pill" href="#pieza-clave-decoracion-{{ $pieza_clave }}" role="tab"
                            aria-controls="pieza-clave-decoracion-{{ $pieza_clave }}" aria-selected="false">
                        <p class="font-weight-bold mt-1 mb-1">Decoración</p>
                    </a>
                    <a class="nav-link" id="descripcion-tecnica-general-tab-{{ $pieza_clave }}" data-toggle="pill" href="#descripcion-tecnica-general-{{ $pieza_clave }}" role="tab"
                            aria-controls="descripcion-tecnica-general-{{ $pieza_clave }}" aria-selected="false">
                        <p class="font-weight-bold mt-1 mb-1">Descripción Técnica</p>
                    </a>
                    <a class="nav-link" id="petrografia-general-tab-{{ $pieza_clave }}" data-toggle="pill" href="#petrografia-general-{{ $pieza_clave }}" role="tab"
                            aria-controls="petrografia-general-{{ $pieza_clave }}" aria-selected="false">
                        <p class="font-weight-bold mt-1 mb-1">Petrografía</p>
                    </a>
                    <a class="nav-link" id="difraccion-rayos-x-general-tab-{{ $pieza_clave }}" data-toggle="pill" href="#difraccion-rayos-x-general-{{ $pieza_clave }}" role="tab"
                            aria-controls="difraccion-rayos-x-general-{{ $pieza_clave }}" aria-selected="false">
                        <p class="font-weight-bold mt-1 mb-1">Difracción de rayos X</p>
                    </a>
                    <a class="nav-link" id="fotografias-general-tab-{{ $pieza_clave }}" data-toggle="pill" href="#fotografias-general-{{ $pieza_clave }}" role="tab"
                            aria-controls="fotografias-general-{{ $pieza_clave }}" aria-selected="false">
                        <p class="font-weight-bold mt-1 mb-1">Fotografías</p>
                    </a>
                    <a class="nav-link" id="dibujos-general-tab-{{ $pieza_clave }}" data-toggle="pill" href="#dibujos-general-{{ $pieza_clave }}" role="tab"
                            aria-controls="dibujos-general-{{ $pieza_clave }}" aria-selected="false">
                        <p class="font-weight-bold mt-1 mb-1">Dibujos</p>
                    </a>
                    <a class="nav-link" id="mapa-general-tab-{{ $pieza_clave }}" data-toggle="pill" href="#mapa-general-{{ $pieza_clave }}" role="tab"
                            aria-controls="mapa-general-{{ $pieza_clave }}" aria-selected="false">
                        <p class="font-weight-bold mt-1 mb-1">Mapa y Cronología</p>
                    </a>
                </div>
            </div>
            <div class="col-xl-10 col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="info-pieza-content">
                            <div class="tab-pane fade show active" id="datos-generales-general-{{ $pieza_clave }}" role="tabpanel"
                                    aria-labelledby="datos-generales-general-tab-{{ $pieza_clave }}">
                                <div class="shadow-none mb-0">
                                    <div class="form-group row">
                                        @foreach(\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.datos_generales'))->campos as $campo)
                                            @include('front.fichas.variantes.pieza_clave.campos_dos_columnas' , ['campo'=>$campo, 'dato' => $piezas_clave_datos->where('posicion',$campo->id)->first() , 'pieza_clave' => $pieza ])
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="fragmento-general-{{ $pieza_clave }}" role="tabpanel"
                                    aria-labelledby="fragmento-general-tab-{{ $pieza_clave }}">
                                <div class="shadow-none mb-0">
                                    @foreach(\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.fragmento'))->campos as $campo)
                                        @include('front.fichas.variantes.pieza_clave.campos' , ['campo'=>$campo, 'dato' => $piezas_clave_datos->where('posicion',$campo->id)->first() , 'pieza_clave' => $pieza ])
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contexto-general-{{ $pieza_clave }}" role="tabpanel"
                                    aria-labelledby="contexto-general-tab-{{ $pieza_clave }}">
                                <div class="shadow-none mb-0">
                                    @foreach(\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.contexto'))->campos as $campo)
                                        @include('front.fichas.variantes.pieza_clave.campos' , ['campo'=>$campo, 'dato' => $piezas_clave_datos->where('posicion',$campo->id)->first() , 'pieza_clave' => $pieza ])
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="descripcion-formal-general-{{ $pieza_clave }}" role="tabpanel"
                                    aria-labelledby="descripcion-formal-general-tab-{{ $pieza_clave }}">
                                <div class="shadow-none mb-0">
                                    <div class="form-group row">
                                        @foreach(\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.descripcion_formal'))->campos as $campo)
                                            @include('front.fichas.variantes.pieza_clave.campos_dos_columnas' , ['campo'=>$campo, 'dato' => $piezas_clave_datos->where('posicion',$campo->id)->first() , 'pieza_clave' => $pieza ])
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pieza-clave-decoracion-{{ $pieza_clave }}" role="tabpanel"
                                    aria-labelledby="pieza-clave-decoracion-tab-{{ $pieza_clave }}">
                                <div class="shadow-none mb-0">
                                    <div class="form-group row">
                                        @foreach(\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.decoracion'))->campos as $campo)
                                            @include('front.fichas.variantes.pieza_clave.campos_dos_columnas' , ['campo'=>$campo, 'dato' => $piezas_clave_datos->where('posicion',$campo->id)->first() , 'pieza_clave' => $pieza ])
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="descripcion-tecnica-general-{{ $pieza_clave }}" role="tabpanel"
                                    aria-labelledby="descripcion-tecnica-general-tab-{{ $pieza_clave }}">
                                <div class="shadow-none mb-0">
                                    <div class="form-group row">
                                        @foreach(\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.descripcion_tecnica'))->campos as $campo)
                                            @include('front.fichas.variantes.pieza_clave.campos_dos_columnas' , ['campo'=>$campo, 'dato' => $piezas_clave_datos->where('posicion',$campo->id)->first() , 'pieza_clave' => $pieza ])
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="petrografia-general-{{ $pieza_clave }}" role="tabpanel"
                                    aria-labelledby="petrografia-general-tab-{{ $pieza_clave }}">
                                <div class="shadow-none mb-0">
                                    @foreach(\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.petrografia'))->campos as $campo)
                                        @include('front.fichas.variantes.pieza_clave.campos' , ['campo'=>$campo, 'dato' => $piezas_clave_datos->where('posicion',$campo->id)->first() , 'pieza_clave' => $pieza ])
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="difraccion-rayos-x-general-{{ $pieza_clave }}" role="tabpanel"
                                    aria-labelledby=d"ifraccion-rayos-x-general-tab">
                                <div class="shadow-none mb-0">
                                    @foreach(\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.difracion_rayos_x'))->campos as $campo)
                                        @include('front.fichas.variantes.pieza_clave.campos' , ['campo'=>$campo, 'dato' => $piezas_clave_datos->where('posicion',$campo->id)->first() , 'pieza_clave' => $pieza ])
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="fotografias-general-{{ $pieza_clave }}" role="tabpanel"
                                    aria-labelledby="fotografias-general-tab-{{ $pieza_clave }}">
                                <div class="shadow-none mb-0">
                                    @include('front.fichas.variantes.pieza_clave.fotografias_pieza_clave',['pieza_clave'=>$pieza])
                                </div>
                            </div>
                            <div class="tab-pane fade" id="dibujos-general-{{ $pieza_clave }}" role="tabpanel"
                                    aria-labelledby="dibujos-general-tab-{{ $pieza_clave }}">
                                <div class="shadow-none mb-0">
                                    @include('front.fichas.variantes.pieza_clave.dibujos',['pieza_clave'=>$pieza])
                                </div>
                            </div>
                            <div class="tab-pane fade" id="mapa-general-{{ $pieza_clave }}" role="tabpanel"
                                    aria-labelledby="mapa-general-tab-{{ $pieza_clave }}">
                                <div class="shadow-none mb-0">
                                    @include('front.fichas.variantes.pieza_clave.mapa',['pieza_clave'=>$pieza])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End before view -->
    </div>
</div>