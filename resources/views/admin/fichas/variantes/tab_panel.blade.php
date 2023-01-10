<div class="tab-pane @if (isset($loop)) @if ($loop->first) active @endif @endif"
    id="pieza_clave_data_{{ $pieza_clave->id }}" role="tabpanel">
    @include('admin.fichas.variantes.pieza_clave', [
        'piezas_clave_datos' => $pieza_clave->datos,
        'pieza_clave' => $pieza_clave->pieza_clave,
        'modelo' => $modelo,
        'pieza' => $pieza_clave,
    ])
</div>