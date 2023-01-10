<div class="checkout-tabs">
    <div class="row">
        <div class="col-xl-2 col-sm-3">
            <div class="nav flex-column nav-pills" id="info-pieza" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="datos-generales-general-tab-{{ $index }}" data-toggle="pill" href="#datos-generales-general-{{ $index }}"
                        role="tab" aria-controls="datos-generales-general-{{ $index }}" aria-selected="true">
                    <p class="font-weight-bold mt-1 mb-1">Datos Generales</p>
                </a>
                <a class="nav-link" id="pieza-clave-general-tab-{{ $index }}" data-toggle="pill" href="#pieza-clave-general-{{ $index }}" role="tab"
                        aria-controls="pieza-clave-general-{{ $index }}" aria-selected="false">
                    <p class="font-weight-bold mt-1 mb-1">Cronología</p>
                </a>
                <a class="nav-link" id="fragmento-general-tab-{{ $index }}" data-toggle="pill" href="#fragmento-general-{{ $index }}" role="tab"
                        aria-controls="fragmento-general-{{ $index }}" aria-selected="false">
                    <p class="font-weight-bold mt-1 mb-1">Fragmento</p>
                </a>
                <a class="nav-link" id="contexto-general-tab-{{ $index }}" data-toggle="pill" href="#contexto-general-{{ $index }}" role="tab"
                        aria-controls="contexto-general-{{ $index }}" aria-selected="false">
                    <p class="font-weight-bold mt-1 mb-1">Contexto</p>
                </a>
                <a class="nav-link" id="descripcion-formal-general-tab-{{ $index }}" data-toggle="pill" href="#descripcion-formal-general-{{ $index }}" role="tab"
                        aria-controls="descripcion-formal-general-{{ $index }}" aria-selected="false">
                    <p class="font-weight-bold mt-1 mb-1">Descripción Formal</p>
                </a>
                <a class="nav-link" id="pieza-clave-decoracion-tab-{{ $index }}" data-toggle="pill" href="#pieza-clave-decoracion-{{ $index }}" role="tab"
                        aria-controls="pieza-clave-decoracion-{{ $index }}" aria-selected="false">
                    <p class="font-weight-bold mt-1 mb-1">Decoración</p>
                </a>
                <a class="nav-link" id="descripcion-tecnica-general-tab-{{ $index }}" data-toggle="pill" href="#descripcion-tecnica-general-{{ $index }}" role="tab"
                        aria-controls="descripcion-tecnica-general-{{ $index }}" aria-selected="false">
                    <p class="font-weight-bold mt-1 mb-1">Descripción Técnica</p>
                </a>
                <a class="nav-link" id="petrografia-general-tab-{{ $index }}" data-toggle="pill" href="#petrografia-general-{{ $index }}" role="tab"
                        aria-controls="petrografia-general-{{ $index }}" aria-selected="false">
                    <p class="font-weight-bold mt-1 mb-1">Petrografía</p>
                </a>
                <a class="nav-link" id="difraccion-rayos-x-general-tab-{{ $index }}" data-toggle="pill" href="#difraccion-rayos-x-general-{{ $index }}" role="tab"
                        aria-controls="difraccion-rayos-x-general-{{ $index }}" aria-selected="false">
                    <p class="font-weight-bold mt-1 mb-1">Difracción de rayos X</p>
                </a>
                <a class="nav-link" id="microscopio-electronico-de-barrido-tab-{{ $index }}" data-toggle="pill" href="#microscopio-electronico-de-barrido-{{ $index }}" role="tab"
                        aria-controls="microscopio-electronico-de-barrido-{{ $index }}" aria-selected="false">
                    <p class="font-weight-bold mt-1 mb-1">Microscopio electronico</p>
                </a>
               
                
            </div>
        </div>
        <div class="col-xl-10 col-sm-9">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content" id="info-pieza-content">
                        <div class="row">
                        <div class="col-12 d-flex mb-5">
                            <div class="form-check mr-5">
                                <input class="form-check-input variante" type="checkbox" data-id="{{$index}}" data-type="forma" value="" id="CheckForma_{{$index}}">
                                <label class="form-check-label" for="CheckForma_{{$index}}">
                                  Variante forma
                                </label>
                              </div>
                              <div class="form-check mr-5">
                                <input class="form-check-input variante" type="checkbox" data-id="{{$index}}" data-type="decorativo" value="" id="Checkdecoracion_{{$index}}">
                                <label class="form-check-label" for="Checkdecoracion_{{$index}}">
                                  Variante decorativo
                                </label>
                              </div><div class="form-check mr-5">
                                <input class="form-check-input variante" type="checkbox" data-id="{{$index}}" data-type="arqueometrica" value="" id="Checkdarqueometricas_{{$index}}">
                                <label class="form-check-label" for="Checkdarqueometricas_{{$index}}">
                                  Variante arqueometrica
                                </label>
                              </div>
                        </div>
                    </div>
                        <div class="tab-pane fade show active" id="datos-generales-general-{{ $index }}" role="tabpanel"
                                aria-labelledby="datos-generales-general-tab-{{ $index }}">
                            <div class="shadow-none mb-0">
                                <div class="form-group row">
                                    @foreach(\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.datos_generales'))->campos as $campo)
                                        @include('admin.fichas.create.campos_dos_columnas' , ['campo'=>$campo, 'dato' => '' , 'pieza_clave' => $index ])
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pieza-clave-general-{{ $index }}" role="tabpanel"
                                aria-labelledby="pieza-clave-general-tab-{{ $index }}">
                            <div class="shadow-none mb-0">
                                @foreach(\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.cronologia'))->campos as $campo)
                                    @include('admin.fichas.create.campos' , ['campo'=>$campo, 'dato' => '' , 'pieza_clave' => $index ])
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="fragmento-general-{{ $index }}" role="tabpanel"
                                aria-labelledby="fragmento-general-tab-{{ $index }}">
                            <div class="shadow-none mb-0">
                                @foreach(\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.fragmento'))->campos as $campo)
                                    @include('admin.fichas.create.campos' , ['campo'=>$campo, 'dato' => '' , 'pieza_clave' => $index ])
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contexto-general-{{ $index }}" role="tabpanel"
                                aria-labelledby="contexto-general-tab-{{ $index }}">
                            <div class="shadow-none mb-0">
                                @foreach(\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.contexto'))->campos as $campo)
                                    @include('admin.fichas.create.campos' , ['campo'=>$campo, 'dato' => '' , 'pieza_clave' => $index ])
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="descripcion-formal-general-{{ $index }}" role="tabpanel"
                                aria-labelledby="descripcion-formal-general-tab-{{ $index }}">
                            <div class="shadow-none mb-0">
                                <div class="form-group row">
                                    @foreach(\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.descripcion_formal'))->campos as $campo)
                                        @include('admin.fichas.create.campos_dos_columnas' , ['campo'=>$campo, 'dato' => '' , 'pieza_clave' => $index ])
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pieza-clave-decoracion-{{ $index }}" role="tabpanel"
                                aria-labelledby="pieza-clave-decoracion-tab-{{ $index }}">
                            <div class="shadow-none mb-0">
                                <div class="form-group row">
                                    @foreach(\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.decoracion'))->campos as $campo)
                                        @include('admin.fichas.create.campos_dos_columnas' , ['campo'=>$campo, 'dato' => '' , 'pieza_clave' => $index ])
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="descripcion-tecnica-general-{{ $index }}" role="tabpanel"
                                aria-labelledby="descripcion-tecnica-general-tab-{{ $index }}">
                            <div class="shadow-none mb-0">
                                <div class="form-group row">
                                    @foreach(\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.descripcion_tecnica'))->campos as $campo)
                                        @include('admin.fichas.create.campos_dos_columnas' , ['campo'=>$campo, 'dato' =>'' , 'pieza_clave' => $index ])
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="petrografia-general-{{ $index }}" role="tabpanel"
                                aria-labelledby="petrografia-general-tab-{{ $index }}">
                            <div class="shadow-none mb-0">
                                @foreach(\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.petrografia'))->campos as $campo)
                                    @include('admin.fichas.create.campos' , ['campo'=>$campo, 'dato' => '' , 'pieza_clave' => $index ])
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="difraccion-rayos-x-general-{{ $index }}" role="tabpanel"
                                aria-labelledby="ifraccion-rayos-x-general-tab">
                            <div class="shadow-none mb-0">
                                @foreach(\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.difracion_rayos_x'))->campos as $campo)
                                    @include('admin.fichas.create.campos' , ['campo'=>$campo, 'dato' => '' , 'pieza_clave' => $index ])
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="microscopio-electronico-de-barrido-{{ $index }}" role="tabpanel"
                                aria-labelledby="microscopio-electronico-de-barrido">
                            <div class="shadow-none mb-0">
                                @foreach(\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.microscopio_electronico_de_barrido'))->campos as $campo)
                                    @include('admin.fichas.create.campos' , ['campo'=>$campo, 'dato' => '' , 'pieza_clave' => $index ])
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>