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
    .masonry-column {
  padding: 0 1px;
}

.masonry-grid > div .thumbnail {
  margin: 5px 1px;
}
</style>

<div class="card">
    <div class="card-body">
        <div class="checkout-tabs">
            <div class="row">
                <div class="card-columns">
                        @foreach($modeloMetaData as $tab => $data)
                        @if($tab!='Bibliografía')
                        <div class="card" style="box-shadow: none">
                        <button type="button" class="model-title">
                            {{$tab}}
                        </button>
                            {{-- @include('admin.fichas.variantes.variantes.tab', ['first' => $loop->first, 'variante' => $variante, 'modelo' => 'modelo', 'tab' => $tab]) --}}
                            @foreach($data as $nombre => $campo)
                            <p>
                                <span class="model-description-title">{{ $nombre }}:</span>
                                <span class="model-description">{{ $campo['valor'] }}</span>
                            </p>
                            @endforeach
                        </div>
                        @endif
                            @endforeach
                        
                </div>
                @if( !empty($modelo->archivo ) && false)
                <a class="nav-link" href="{{ asset('assets/fichas/'.$modelo->id.'/'.$modelo->archivo) }}">
                    <p class="font-weight-bold mt-1 mb-1">Bajar Ficha</p>
                </a>
            @endif
                
            {{-- <div class="tab-pane fade" id="datos-variante-{{ $variante }}-modelo-mapa-y-cronología" role="tabpanel" aria-labelledby="datos-variante-tab-{{ $variante }}-modelo-mapa-y-cronología">
                <div class="shadow-none mb-0">
                    @include('front.fichas.variantes.pieza_clave.mapa',['pieza_clave'=>$modeloModel->piezasClave->first()])
                </div>
            </div>
            <div class="tab-pane fade" id="datos-variante-{{ $variante }}-modelo-fotografías-y-dibujos" role="tabpanel" aria-labelledby="datos-variante-tab-{{ $variante }}-modelo-fotografías-y-dibujos">
                <div class="shadow-none mb-0">
                    @include('front.fichas.variantes.pieza_clave.fotografias_modelo',['modelo' => $modelo, 'variante' => 'modelo'])
                </div>
            </div> --}}
                <!-- End before items -->
            </div>
        </div>
    </div>
</div>