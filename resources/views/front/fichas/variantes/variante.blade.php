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
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</div>