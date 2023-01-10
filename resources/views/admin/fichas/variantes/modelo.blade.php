<div class="card">
    <div class="card-body">
        <div class="checkout-tabs">
            <div class="row">
                <div class="col-xl-2 col-sm-3">
                    <div class="nav flex-column nav-pills" id="datos-variante-{{ $variante }}" role="tablist"
                         aria-orientation="vertical">
                        @foreach($modeloMetaData as $tab => $data)
                            @include('admin.fichas.variantes.variantes.tab', ['first' => $loop->first, 'variante' => $variante, 'modelo' => 'modelo', 'tab' => $tab])
                        @endforeach
                        {{-- @include('admin.fichas.variantes.variantes.tab', ['first' => false, 'variante' => $variante, 'modelo' => 'modelo', 'tab' => 'Fotografias']) --}}
                    </div>
                </div>
                <div class="col-xl-10 col-sm-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content text-muted" id="datos-variante-{{ $variante }}-content">
                                @foreach($modeloMetaData as $tab => $data)
                                    <div class="tab-pane fade show @if($loop->first) active @endif"
                                         id="datos-variante-{{ $variante }}-modelo-{{ \Illuminate\Support\Str::kebab($tab) }}"
                                         role="tabpanel"
                                         aria-labelledby="datos-variante-tab-{{ $variante }}-modelo-{{ \Illuminate\Support\Str::kebab($tab) }}">
                                        <div class="shadow-none mb-0">
                                            <div class="form-group row">
                                                @foreach($data as $nombre => $campo)
                                                    @include('admin.fichas.variantes.pieza_clave.campos_dos_columnas' , ['nombre' => $nombre,  'campo'=> $campo, 'dato' => $campo, 'border' => 'border-bottom border-white', 'padding' => 'pb-3', 'variante'=> $variante, 'modelo' => $modeloModel, 'seccion' => $tab , 'tab' => '' ])
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="tab-pane fade" id="datos-variante-{{ $variante }}-modelo-fotografias" role="tabpanel"
                                     aria-labelledby="datos-variante-tab-{{ $variante }}-modelo-fotografias">
                                    <div class="shadow-none mb-0">
                                        @include('admin.fichas.variantes.pieza_clave.fotografias_modelo',['modelo' => $modelo, 'variante' => 'modelo'])
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>