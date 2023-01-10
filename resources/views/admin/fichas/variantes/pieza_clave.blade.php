<div class="checkout-tabs">
    <div class="row">
        <div class="col-xl-2 col-sm-3">
            <div class="nav flex-column nav-pills" id="info-pieza" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="datos-generales-general-tab-{{ $pieza_clave }}" data-toggle="pill"
                    href="#datos-generales-general-{{ $pieza_clave }}" role="tab"
                    aria-controls="datos-generales-general-{{ $pieza_clave }}" aria-selected="true">
                    <p class="font-weight-bold mt-1 mb-1">Datos Generales</p>
                </a>
                <a class="nav-link" id="pieza-clave-general-tab-{{ $pieza_clave }}" data-toggle="pill"
                    href="#pieza-clave-general-{{ $pieza_clave }}" role="tab"
                    aria-controls="pieza-clave-general-{{ $pieza_clave }}" aria-selected="false">
                    <p class="font-weight-bold mt-1 mb-1">Cronología</p>
                </a>
                <a class="nav-link" id="fragmento-general-tab-{{ $pieza_clave }}" data-toggle="pill"
                    href="#fragmento-general-{{ $pieza_clave }}" role="tab"
                    aria-controls="fragmento-general-{{ $pieza_clave }}" aria-selected="false">
                    <p class="font-weight-bold mt-1 mb-1">Fragmento</p>
                </a>
                <a class="nav-link" id="contexto-general-tab-{{ $pieza_clave }}" data-toggle="pill"
                    href="#contexto-general-{{ $pieza_clave }}" role="tab"
                    aria-controls="contexto-general-{{ $pieza_clave }}" aria-selected="false">
                    <p class="font-weight-bold mt-1 mb-1">Contexto</p>
                </a>
                <a class="nav-link" id="descripcion-formal-general-tab-{{ $pieza_clave }}" data-toggle="pill"
                    href="#descripcion-formal-general-{{ $pieza_clave }}" role="tab"
                    aria-controls="descripcion-formal-general-{{ $pieza_clave }}" aria-selected="false">
                    <p class="font-weight-bold mt-1 mb-1">Descripción Formal</p>
                </a>
                <a class="nav-link" id="pieza-clave-decoracion-tab-{{ $pieza_clave }}" data-toggle="pill"
                    href="#pieza-clave-decoracion-{{ $pieza_clave }}" role="tab"
                    aria-controls="pieza-clave-decoracion-{{ $pieza_clave }}" aria-selected="false">
                    <p class="font-weight-bold mt-1 mb-1">Decoración</p>
                </a>
                <a class="nav-link" id="descripcion-tecnica-general-tab-{{ $pieza_clave }}" data-toggle="pill"
                    href="#descripcion-tecnica-general-{{ $pieza_clave }}" role="tab"
                    aria-controls="descripcion-tecnica-general-{{ $pieza_clave }}" aria-selected="false">
                    <p class="font-weight-bold mt-1 mb-1">Descripción Técnica</p>
                </a>
                <a class="nav-link" id="petrografia-general-tab-{{ $pieza_clave }}" data-toggle="pill"
                    href="#petrografia-general-{{ $pieza_clave }}" role="tab"
                    aria-controls="petrografia-general-{{ $pieza_clave }}" aria-selected="false">
                    <p class="font-weight-bold mt-1 mb-1">Petrografía</p>
                </a>
                <a class="nav-link" id="difraccion-rayos-x-general-tab-{{ $pieza_clave }}" data-toggle="pill"
                    href="#difraccion-rayos-x-general-{{ $pieza_clave }}" role="tab"
                    aria-controls="difraccion-rayos-x-general-{{ $pieza_clave }}" aria-selected="false">
                    <p class="font-weight-bold mt-1 mb-1">Difracción de rayos X</p>
                </a>
                <a class="nav-link" id="microscopio-electronico-de-barrido-tab-{{ $pieza_clave }}" data-toggle="pill"
                    href="#microscopio-electronico-de-barrido-{{ $pieza_clave }}" role="tab"
                    aria-controls="microscopio-electronico-de-barrido-{{ $pieza_clave }}" aria-selected="false">
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
                                    <input class="form-check-input variante" type="checkbox"
                                        data-id="{{ $pieza->id }}" data-type="forma" value=""
                                        id="CheckForma_{{ $pieza->id }}"
                                        @if(isset($loop)) 
                                            data-index={{$loop->index}}
                                        @else
                                            data-index={{$loop_}}
                                        @endif
                                        
                                        @if ($piezas_clave_datos->where('posicion', 5)->first()->valor != '') checked @endif>
                                    <label class="form-check-label" for="CheckForma_{{ $pieza->id }}">
                                        Variante forma
                                    </label>
                                </div>
                                <div class="form-check mr-5">
                                    <input class="form-check-input variante" type="checkbox"
                                        data-id="{{ $pieza->id }}" data-type="decorativa" value=""
                                        id="Checkdecoracion_{{ $pieza->id }}"
                                        @if(isset($loop)) 
                                            data-index={{$loop->index}}
                                        @else
                                            data-index={{$loop_}}
                                        @endif
                                        @if ($piezas_clave_datos->where('posicion', 6)->first()->valor != '') checked @endif>
                                    <label class="form-check-label" for="Checkdecoracion_{{ $pieza->id }}">
                                        Variante decorativo
                                    </label>
                                </div>
                                <div class="form-check mr-5">
                                    <input class="form-check-input variante" type="checkbox"
                                        data-id="{{ $pieza->id }}" data-type="arqueometrica" value=""
                                        id="Checkdarqueometricas_{{ $pieza->id }}"
                                        @if(isset($loop)) 
                                            data-index={{$loop->index}}
                                        @else
                                            data-index={{$loop_}}
                                        @endif
                                        @if ($piezas_clave_datos->where('posicion', 7)->first()->valor != '') checked @endif>
                                    <label class="form-check-label" for="Checkdarqueometricas_{{ $pieza->id }}">
                                        Variante arqueometrica
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="datos-generales-general-{{ $pieza_clave }}"
                            role="tabpanel" aria-labelledby="datos-generales-general-tab-{{ $pieza_clave }}">
                            <div class="shadow-none mb-0">
                                <div class="form-group row">
                                    @foreach (\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.datos_generales'))->campos as $campo)
                                        @include('admin.fichas.variantes.pieza_clave.campos_dos_columnas', [
                                            'campo' => $campo,
                                            'dato' => $piezas_clave_datos->where('posicion', $campo->id)->first(),
                                            'pieza_clave' => $pieza,
                                        ])
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pieza-clave-general-{{ $pieza_clave }}" role="tabpanel"
                            aria-labelledby="pieza-clave-general-tab-{{ $pieza_clave }}">
                            <div class="shadow-none mb-0">
                                @foreach (\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.cronologia'))->campos as $campo)
                                    @include('admin.fichas.variantes.pieza_clave.campos', [
                                        'campo' => $campo,
                                        'dato' => $piezas_clave_datos->where('posicion', $campo->id)->first(),
                                        'pieza_clave' => $pieza,
                                    ])
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="fragmento-general-{{ $pieza_clave }}" role="tabpanel"
                            aria-labelledby="fragmento-general-tab-{{ $pieza_clave }}">
                            <div class="shadow-none mb-0">
                                @foreach (\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.fragmento'))->campos as $campo)
                                    @include('admin.fichas.variantes.pieza_clave.campos', [
                                        'campo' => $campo,
                                        'dato' => $piezas_clave_datos->where('posicion', $campo->id)->first(),
                                        'pieza_clave' => $pieza,
                                    ])
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contexto-general-{{ $pieza_clave }}" role="tabpanel"
                            aria-labelledby="contexto-general-tab-{{ $pieza_clave }}">
                            <div class="shadow-none mb-0">
                                @foreach (\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.contexto'))->campos as $campo)
                                    @include('admin.fichas.variantes.pieza_clave.campos', [
                                        'campo' => $campo,
                                        'dato' => $piezas_clave_datos->where('posicion', $campo->id)->first(),
                                        'pieza_clave' => $pieza,
                                    ])
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="descripcion-formal-general-{{ $pieza_clave }}"
                            role="tabpanel" aria-labelledby="descripcion-formal-general-tab-{{ $pieza_clave }}">
                            <div class="shadow-none mb-0">
                                <div class="form-group row">
                                    @foreach (\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.descripcion_formal'))->campos as $campo)
                                        @include('admin.fichas.variantes.pieza_clave.campos_dos_columnas', [
                                            'campo' => $campo,
                                            'dato' => $piezas_clave_datos->where('posicion', $campo->id)->first(),
                                            'pieza_clave' => $pieza,
                                        ])
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pieza-clave-decoracion-{{ $pieza_clave }}" role="tabpanel"
                            aria-labelledby="pieza-clave-decoracion-tab-{{ $pieza_clave }}">
                            <div class="shadow-none mb-0">
                                <div class="form-group row">
                                    @foreach (\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.decoracion'))->campos as $campo)
                                        @include('admin.fichas.variantes.pieza_clave.campos_dos_columnas', [
                                            'campo' => $campo,
                                            'dato' => $piezas_clave_datos->where('posicion', $campo->id)->first(),
                                            'pieza_clave' => $pieza,
                                        ])
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="descripcion-tecnica-general-{{ $pieza_clave }}"
                            role="tabpanel" aria-labelledby="descripcion-tecnica-general-tab-{{ $pieza_clave }}">
                            <div class="shadow-none mb-0">
                                <div class="form-group row">
                                    @foreach (\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.descripcion_tecnica'))->campos as $campo)
                                        @include('admin.fichas.variantes.pieza_clave.campos_dos_columnas', [
                                            'campo' => $campo,
                                            'dato' => $piezas_clave_datos->where('posicion', $campo->id)->first(),
                                            'pieza_clave' => $pieza,
                                        ])
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="petrografia-general-{{ $pieza_clave }}" role="tabpanel"
                            aria-labelledby="petrografia-general-tab-{{ $pieza_clave }}">
                            <div class="shadow-none mb-0">
                                @foreach (\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.petrografia'))->campos as $campo)
                                    @include('admin.fichas.variantes.pieza_clave.campos', [
                                        'campo' => $campo,
                                        'dato' => $piezas_clave_datos->where('posicion', $campo->id)->first(),
                                        'pieza_clave' => $pieza,
                                    ])
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="difraccion-rayos-x-general-{{ $pieza_clave }}"
                            role="tabpanel" aria-labelledby="ifraccion-rayos-x-general-tab">
                            <div class="shadow-none mb-0">
                                @foreach (\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.difracion_rayos_x'))->campos as $campo)
                                    @include('admin.fichas.variantes.pieza_clave.campos', [
                                        'campo' => $campo,
                                        'dato' => $piezas_clave_datos->where('posicion', $campo->id)->first(),
                                        'pieza_clave' => $pieza,
                                    ])
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="microscopio-electronico-de-barrido-{{ $pieza_clave }}"
                            role="tabpanel" aria-labelledby="microscopio-electronico-de-barrido">
                            <div class="shadow-none mb-0">
                                @foreach (\App\Models\PiezaClaveCategorias::find(config('constants.pieza_clave_categorias.microscopio_electronico_de_barrido'))->campos as $campo)
                                    @include('admin.fichas.variantes.pieza_clave.campos', [
                                        'campo' => $campo,
                                        'dato' => $piezas_clave_datos->where('posicion', $campo->id)->first(),
                                        'pieza_clave' => $pieza,
                                    ])
                                @endforeach
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
