@if(($dato->valor ?? ($dato['valor'] ?? '')) !== '')
    <div class="col-md-6 mb-4 {{ $padding ?? '' }} {{ $border ?? '' }} ">
        <div class="row mb-2">
            <div class="col-md-4">
                <label for="example-text-input" class="col-form-label font-weight-bolder">{{ str_replace('()', '', str_replace('promedio', '', ($campo->campo ?? $campo['campo']))) }}</label>
            </div>
            <div class="col-md-8">
                @include('front.fichas.variantes.pieza_clave.input', ['campo'=>$campo, 'dato' => $dato, 'pieza_clave' => $pieza_clave ?? null])
            </div>
        </div>
    </div>
@endif