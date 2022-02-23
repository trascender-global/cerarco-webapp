@php $nombre = $nombre ?? ( $campo->campo ?? $campo['campo'] ); @endphp
<div class="col-md-6 mb-4 {{ $padding ?? '' }} {{ $border ?? '' }} ">
    <div class="row mb-2">
        <div class="col-md-4">
            <label for="example-text-input" class="col-form-label font-weight-bolder">{{ $nombre }}</label>
        </div>
        <div class="col-md-8">
            @include('admin.fichas.variantes.pieza_clave.data_form',['nombre' => $nombre, 'campo'=>$campo, 'dato' => $dato, 'pieza_clave' => ($pieza_clave ?? null)])
        </div>
    </div>
</div>