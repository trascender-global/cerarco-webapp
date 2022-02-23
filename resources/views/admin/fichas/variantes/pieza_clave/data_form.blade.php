@php $nombre = $nombre ?? '' @endphp
@if(is_array($dato))
    @include('admin.fichas.variantes.pieza_clave.data', ['nombre' => $nombre, 'dato'=>$dato, 'variante' => $variante, 'modelo' => $modelo])
@elseif($campo->textarea === 1)
    @include('admin.fichas.variantes.pieza_clave.textarea', ['nombre' => $nombre, 'campo'=>$campo, 'dato' => $dato, 'pieza_clave' => $pieza_clave ?? null])
@elseif($campo->lista !== 0)
    @include('admin.fichas.variantes.pieza_clave.select', ['nombre' => $nombre, 'campo'=>$campo, 'dato' => $dato, 'pieza_clave' => $pieza_clave ?? null])
@else
    @include('admin.fichas.variantes.pieza_clave.input', ['nombre' => $nombre, 'campo'=>$campo, 'dato' => $dato, 'pieza_clave' => $pieza_clave ?? null])
@endif