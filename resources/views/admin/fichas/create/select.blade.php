<select class="custom-select" id="{{ $campo->slug }}_{{$index}}" name="{{ $campo->slug }}_{{$index}}" data-pieza_clave="{{ $pieza_clave->id ?? null }}">
    <option>Seleccione</option>
    @foreach(\App\Models\ListaValores::where('lista_id', $campo->lista)->get() as $valor)
        <option value="{{ $valor->slug }}"  @if( ($dato->valor_slug ?? '')  === $valor->slug) selected @endif  >{{ $valor->valor }}</option>
    @endforeach
</select>