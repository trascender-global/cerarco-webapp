@if(($dato->valor ?? ($dato['valor'] ?? '')) !== '')
    <div class="col-md-6 mb-4 {{ $padding ?? '' }} {{ $border ?? '' }}" id="{{ md5($dato->id??$dato['id']) }}">
        <div class="row mb-2">
            <div class="col-md-4">
                <label for="example-text-input" class="col-form-label font-weight-bolder">{{ $nombre ?? ( $campo->campo ?? $campo['campo'] ) }}</label>
            </div>
            <div class="col-md-8">
                @include('front.fichas.variantes.pieza_clave.input', ['campo'=>$campo, 'dato' => $dato, 'pieza_clave' => $pieza_clave ?? null])
            </div>
        </div>
    </div>
    @if(strstr(\Illuminate\Support\Str::lower(($campo->campo ?? $campo['campo']) ) , 'pieza clave por' ))
        @if($variante !== 'modelo' || $variante !== 'forma' || $variante !== 'decorativa')
            <script>
                $('#{{ md5($dato->id??$dato['id']) }}').remove()
            </script>
        @endif
    @endif
@endif