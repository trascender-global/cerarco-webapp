<div class="card">
    <div class="card-body">
        <div class="checkout-tabs">
            <div class="row">
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
            </div>
        </div>
    </div>
</div>