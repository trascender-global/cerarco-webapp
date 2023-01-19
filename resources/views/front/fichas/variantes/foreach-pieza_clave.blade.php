<div class="checkout-tabs">
    <div class="row">
        <div class="d-flex flex-column flex-md-row justify-content-center justify-content-md-start align-items-center align-items-md-start">
            <div class="variants-container pieza-clave-variant ml-sm-1 ml-md-2 mr-sm-1 mr-md-5">
                <ul class="nav nav-pills nav-fill">
                    @foreach($piezas_clave as $pieza_clave)
                    <li class="nav-item">
                        <a class="variant-container nav-link @if($loop->first) active @endif " 
                            data-toggle="tab" href="#pieza_clave_data_{{ md5($pieza_clave->id) }}"
                            data-pieza_id="{{$pieza_clave->id}}"
                            data-modelo="{{$modelo->id}}"
                            data-type="pieza"
                            role="tab">
                            @if( !empty($pieza_clave->dibujo))
                                <img src="{{ $pieza_clave->dibujo }}" alt="" class="variant-img mx-auto d-none d-md-block">
                            @endif
                            <span style="white-space: nowrap;font-size: 12px">{{ $pieza_clave->pieza_clave }}</span>
                        </a>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="tab-content p-3 text-muted">
                @foreach($piezas_clave as $pieza_clave)
                    <div class="tab-pane @if($loop->first) active @endif" id="pieza_clave_data_{{ md5($pieza_clave->id) }}" role="tabpanel">
                        <div class="row">
                            <div class="card-columns">
                                @include('front.fichas.variantes.pieza_clave',['piezas_clave_datos'=>$pieza_clave->datos,'pieza_clave'=>$pieza_clave->pieza_clave,'modelo'=>$modelo,'pieza'=>$pieza_clave, 'variante' => 'pieza_clave'])
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>