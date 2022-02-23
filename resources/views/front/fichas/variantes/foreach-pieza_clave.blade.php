<div class="col-lg-12 pr-0 pl-0">
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                @foreach($piezas_clave as $pieza_clave)
                    <li class="nav-item">
                        <a class="nav-link @if($loop->first) active @endif " data-toggle="tab" href="#pieza_clave_data_{{ md5($pieza_clave->id) }}" role="tab">
                            <span class="d-none d-sm-block">{{ $pieza_clave->pieza_clave }}</span>
                            @if( !empty($pieza_clave->dibujo))
                                <img src="{{ $pieza_clave->dibujo }}" alt="" class="avatar-sm" style="height:100px">
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>

            <div class="tab-content p-3 text-muted">
                @foreach($piezas_clave as $pieza_clave)
                    <div class="tab-pane @if($loop->first) active @endif" id="pieza_clave_data_{{ md5($pieza_clave->id) }}" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                @include('front.fichas.variantes.pieza_clave',['piezas_clave_datos'=>$pieza_clave->datos,'pieza_clave'=>$pieza_clave->pieza_clave,'modelo'=>$modelo,'pieza'=>$pieza_clave, 'variante' => 'pieza_clave'])
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>