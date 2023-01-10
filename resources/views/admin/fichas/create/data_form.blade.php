@php $nombre = $nombre ?? '' @endphp
@if(is_array($dato))
    @include('admin.fichas.create.data', ['nombre' => $nombre, 'dato'=>$dato, 'variante' => $variante, 'modelo' => $modelo,'pieza_clave' => $index])
@elseif($campo->textarea === 1)
    @include('admin.fichas.create.textarea', ['nombre' => $nombre, 'campo'=>$campo, 'dato' => $dato, 'pieza_clave' => $index])
@elseif($campo->lista !== 0)
    @include('admin.fichas.create.select', ['nombre' => $nombre, 'campo'=>$campo, 'dato' => $dato, 'pieza_clave' => $index])
@else
    @include('admin.fichas.create.input', ['nombre' => $nombre, 'campo'=>$campo, 'dato' => $dato, 'pieza_clave' => $index])
@endif