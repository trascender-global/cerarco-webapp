<div class="customer-zone mb-30">
    <div class="card fondo-trans">
        <div class="card-body">
            <div id="mapa_buscador" style="width: auto; height: 600px;"></div>
        </div>
    </div>
</div>
@if(isset($_POST['clasificaciones_existentes_area_geografica'])||isset($_POST['clasificaciones_existentes_sub_region_geografica'])||isset($_POST['clasificaciones_existentes_name']))
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoibHVtaWNhbWUzMyIsImEiOiJja3p3eDdqdmw0a21tMnZwYWJjcHZydnVkIn0.ju_prCiuR_L-7wWftgW4QQ';
        var map = new mapboxgl.Map({
            container: 'mapa_buscador',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [-74.04, 4.107],
            zoom: 4.6
        });

        @foreach( $resultados as $modelo )
                    @if(isset($_POST['clasificaciones_existentes_name']))
                                @if($modelo->piezasClave->first()->datos()->whereIn('valor',$_POST['clasificaciones_existentes_name'])->first())
                                    @foreach($modelo->piezasClave as $piezaClave)
                                        @foreach($piezaClave->puntos as $punto)
                                            var popup_{{ $punto->id }} = new mapboxgl.Popup()
                                            .setHTML(
                                            '<strong>Modelo</strong> <a href="{{ route('front.ficha.informacion_ficha', compact('modelo')) }}">{!! $modelo->codigo !!}</a><br /><strong>Pieza Clave</strong> <a href="{{ route('front.ficha.informacion_ficha', compact('modelo')) }}">{!! $piezaClave->pieza_clave !!}</a><a href="{{ route('front.ficha.informacion_ficha', compact('modelo')) }}"><img class="img-responsive" src="@if( $piezaClave->dibujo === '' ){{ asset('assets/images/sample.png')}} @else {{ $piezaClave->dibujo }} @endif"></a>'
                                            )
                                            var marker_{{ $punto->id }} = new mapboxgl.Marker()
                                            .setLngLat([ {{ $punto->lng }}, {{ $punto->lat }} ])
                                            .setPopup(popup_{{ $punto->id }})
                                            .addTo(map);
                                        @endforeach
                                    @endforeach
                                @endif
                    @else
                        @foreach($modelo->piezasClave as $piezaClave)
                            @foreach($piezaClave->puntos as $punto)
                                var popup_{{ $punto->id }} = new mapboxgl.Popup().setHTML(
                    '<strong>Modelo</strong> <a href="{{ route('front.ficha.informacion_ficha', compact('modelo')) }}">{!! $modelo->codigo !!}</a><br /><strong>Pieza Clave</strong> <a href="{{ route('front.ficha.informacion_ficha', compact('modelo')) }}">{!! $piezaClave->pieza_clave !!}</a><a href="{{ route('front.ficha.informacion_ficha', compact('modelo')) }}"><img class="img-responsive" src="@if( $piezaClave->dibujo === '' ){{ asset('assets/images/sample.png')}} @else {{ $piezaClave->dibujo }} @endif"></a>'
                    )
                    var marker_{{ $punto->id }} = new mapboxgl.Marker()
                    .setLngLat([ {{ $punto->lng }}, {{ $punto->lat }} ])
                    .setPopup(popup_{{ $punto->id }})
                    .addTo(map);
                @endforeach
            @endforeach
                    @endif
            
        @endforeach
    </script>
@else
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoibHVtaWNhbWUzMyIsImEiOiJja3p3eDdqdmw0a21tMnZwYWJjcHZydnVkIn0.ju_prCiuR_L-7wWftgW4QQ';
    var map = new mapboxgl.Map({
        container: 'mapa_buscador',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-74.04, 4.107],
        zoom: 4.6
    });

    @foreach( $resultados as $modelo )

        @foreach($modelo->piezasClave as $piezaClave)
            @foreach($piezaClave->puntos as $punto)
                var popup_{{ $punto->id }} = new mapboxgl.Popup()
                .setHTML(
                '<strong>Modelo</strong> <a href="{{ route('front.ficha.informacion_ficha', compact('modelo')) }}">{!! $modelo->codigo !!}</a><br /><strong>Pieza Clave</strong> <a href="{{ route('front.ficha.informacion_ficha', compact('modelo')) }}">{!! $piezaClave->pieza_clave !!}</a><a href="{{ route('front.ficha.informacion_ficha', compact('modelo')) }}"><img class="img-responsive" src="@if( $piezaClave->dibujo === '' ){{ asset('assets/images/sample.png')}} @else {{ $piezaClave->dibujo }} @endif"></a>'
                )
                var marker_{{ $punto->id }} = new mapboxgl.Marker()
                .setLngLat([ {{ $punto->lng }}, {{ $punto->lat }} ])
                .setPopup(popup_{{ $punto->id }})
                .addTo(map);
            @endforeach
        @endforeach
    @endforeach
</script>
@endif


