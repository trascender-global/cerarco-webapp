<div class="col-lg-12 pr-0 pl-0">
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                @foreach($piezas_clave as $pieza_clave)
                    <li class="nav-item">
                        <a class="nav-link @if($loop->first) active @endif " data-toggle="tab" href="#pieza_clave_data_{{ $pieza_clave->id }}" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">{{ $pieza_clave->pieza_clave }}</span>
                            @if( !empty($pieza_clave->dibujo))
                                <img src="{{ $pieza_clave->dibujo }}" alt="" class="avatar-sm">
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>

            <div class="tab-content p-3 text-muted">
                @foreach($piezas_clave as $pieza_clave)
                    <div class="tab-pane @if($loop->first) active @endif" id="pieza_clave_data_{{ $pieza_clave->id }}" role="tabpanel">
                        @include('admin.fichas.variantes.pieza_clave',['piezas_clave_datos'=>$pieza_clave->datos,'pieza_clave'=>$pieza_clave->pieza_clave,'modelo'=>$modelo,'pieza'=>$pieza_clave])
                    </div>
                    <script>
                        function salvarFicha(element) {
                            $.post("{{ route('admin.ficha.modificarCampo') }}/?pieza=" + element.data('pieza_clave') +
                                '&slug=' + element.attr('id') + '&val=' + element.val());
                        }
                    </script>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    $('#formEditarFicha input').keyup(function() {
        salvarFicha($(this));
    });

    $('#formEditarFicha textarea').keyup(function() {
        salvarFicha($(this));
    });

    $('#formEditarFicha select').change(function() {
        salvarFicha($(this));
    });
</script>