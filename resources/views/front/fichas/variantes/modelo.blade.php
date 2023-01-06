<style>
    @media (max-width: 768px) {
        .model-title {
            height: auto !important;
            margin: 0px 20px 26px 30px !important;
        }
    }

    .model-title {
        height: auto;
        background-color: #00867026;
        border: none;
        border-radius: 13px;
        text-align: center;
        font-size: 20px;
        color: #008670;
        cursor: text !important;
        margin: 0px 0px 26px 0px;
    }

    .model-description-title {
        font-size: 17px;
        font-weight: 600;
        color: #008670;
        margin-top: 39px;
    }

    .model-description {
        font-size: 17px;
        font-weight: 300;
        color: #82858B;
        margin-top: 39px;
    }

    .line {
        border-left: 5px solid #E2E2E2;
        height: 524px;
        margin: 10px 0px 41px 0px;
    }
</style>

<div class="card">
    <div class="card-body">
        <div class="checkout-tabs">
            <div class="row">
                <div class="d-flex flex-column flex-md-row">
                    <div class="col-md-4 ml-sm-1 ml-md-2">
                        <button type="button" class="model-title">
                            Descripción formal
                        </button>
                        @php
                            $descriptions = array (
                            array("Forma Base","Copa"),
                            array("Boca","Circular"),
                            array("Borde","Evertido, Recto"),
                            array("Labio","Concavo"),
                            array("Cuello","Evertido"),
                            array("Hombro","Angular"),
                            array("Cuerpo","Arquillado, Semiesférico"),
                            array("Soporte","Cilíndrico, Pedestal"),
                            array("Observaciones","El cuerpo de la copa es un plato aquillado de borde evertido o un cuenco aquillado o semiglobular. Cuando el cuerpo es un plato aquillado, la decoración excisa se encuentra sólo en el soporte; cuando es un cuenco la decoración se encuentra también en el borde"),
                            );
                        @endphp
                        @foreach($descriptions as $description)
                            <p>
                                <span class="model-description-title">{{ $description[0] }}:</span>
                                <span class="model-description">{{ $description[1] }}</span>
                            </p>
                        @endforeach
                    </div>
                    <div class="line d-none d-md-block"></div>
                    <div class="col-md-4 ml-sm-1 ml-md-4">
                        <button type="button" class="model-title">
                            Decoración
                        </button>
                        @php
                            $descriptions = array (
                            array("Forma Base","Copa"),
                            array("Boca","Circular"),
                            array("Borde","Evertido, Recto"),
                            array("Labio","Concavo"),
                            array("Cuello","Evertido"),
                            array("Hombro","Angular"),
                            array("Cuerpo","Arquillado, Semiesférico"),
                            array("Soporte","Cilíndrico, Pedestal"),
                            array("Observaciones","El cuerpo de la copa es un plato aquillado de borde evertido o un cuenco aquillado o semiglobular. Cuando el cuerpo es un plato aquillado, la decoración excisa se encuentra sólo en el soporte; cuando es un cuenco la decoración se encuentra también en el borde"),
                            );
                        @endphp
                        @foreach($descriptions as $description)
                            <p>
                                <span class="model-description-title">{{ $description[0] }}:</span>
                                <span class="model-description">{{ $description[1] }}</span>
                            </p>
                        @endforeach
                    </div>
                    <div class="line d-none d-md-block"></div>
                    <div class="col-md-3 ml-sm-1 ml-md-4">
                        <button type="button" class="model-title">
                            Descripción Técnica
                        </button>
                        @php
                            $descriptions = array (
                            array("Forma Base","Copa"),
                            array("Boca","Circular"),
                            array("Borde","Evertido, Recto"),
                            array("Labio","Concavo"),
                            array("Cuello","Evertido"),
                            array("Hombro","Angular"),
                            array("Cuerpo","Arquillado, Semiesférico"),
                            array("Soporte","Cilíndrico, Pedestal"),
                            array("Observaciones","El cuerpo de la copa es un plato aquillado de borde evertido o un cuenco aquillado o semiglobular. Cuando el cuerpo es un plato aquillado, la decoración excisa se encuentra sólo en el soporte; cuando es un cuenco la decoración se encuentra también en el borde"),
                            );
                        @endphp
                        @foreach($descriptions as $description)
                            <p>
                                <span class="model-description-title">{{ $description[0] }}:</span>
                                <span class="model-description">{{ $description[1] }}</span>
                            </p>
                        @endforeach
                    </div>
                </div>

                <!-- Before items -->
                <div class="col-xl-2 col-sm-3">
                    <div class="nav flex-column nav-pills" id="datos-variante-{{ $variante }}" role="tablist" aria-orientation="vertical">
                        @foreach($modeloMetaData as $tab => $data)
                            @include('admin.fichas.variantes.variantes.tab', ['first' => $loop->first, 'variante' => $variante, 'modelo' => 'modelo', 'tab' => $tab])
                        @endforeach
                        @include('admin.fichas.variantes.variantes.tab', ['first' => false, 'variante' => $variante, 'modelo' => 'modelo', 'tab' => 'Fotografías y Dibujos'])
                        @include('admin.fichas.variantes.variantes.tab', ['first' => false, 'variante' => $variante, 'modelo' => 'modelo', 'tab' => 'Mapa y Cronología'])
                        @if( !empty($modelo->archivo ) && false)
                            <a class="nav-link" href="{{ asset('assets/fichas/'.$modelo->id.'/'.$modelo->archivo) }}">
                                <p class="font-weight-bold mt-1 mb-1">Bajar Ficha</p>
                            </a>
                        @endif
                    </div>
                </div>
                <div class="col-xl-10 col-sm-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content text-muted" id="datos-variante-{{ $variante }}-content">
                                @foreach($modeloMetaData as $tab => $data)
                                    <div class="tab-pane fade show @if($loop->first) active @endif" id="datos-variante-{{ $variante }}-modelo-{{ \Illuminate\Support\Str::kebab($tab) }}" role="tabpanel" aria-labelledby="datos-variante-tab-{{ $variante }}-modelo-{{ \Illuminate\Support\Str::kebab($tab) }}">
                                        <div class="shadow-none mb-0">
                                            <div class="form-group row">
                                                @foreach($data as $nombre => $campo)
                                                    @include('front.fichas.variantes.pieza_clave.campos_dos_columnas_modelo' , ['nombre' => $nombre, 'campo'=> $campo, 'dato' => $campo, 'border' => 'border-bottom border-white', 'padding' => 'pb-3', 'variante'=> $variante, 'modelo' => $modeloModel, 'seccion' => $tab , 'tab' => '' ])
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="tab-pane fade" id="datos-variante-{{ $variante }}-modelo-mapa-y-cronología" role="tabpanel" aria-labelledby="datos-variante-tab-{{ $variante }}-modelo-mapa-y-cronología">
                                    <div class="shadow-none mb-0">
                                        @include('front.fichas.variantes.pieza_clave.mapa',['pieza_clave'=>$modeloModel->piezasClave->first()])
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="datos-variante-{{ $variante }}-modelo-fotografías-y-dibujos" role="tabpanel" aria-labelledby="datos-variante-tab-{{ $variante }}-modelo-fotografías-y-dibujos">
                                    <div class="shadow-none mb-0">
                                        @include('front.fichas.variantes.pieza_clave.fotografias_modelo',['modelo' => $modelo, 'variante' => 'modelo'])
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End before items -->
            </div>
        </div>
    </div>
</div>