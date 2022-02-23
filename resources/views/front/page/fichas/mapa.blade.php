<div class="customer-zone mb-30">
    <div class="card fondo-trans">
        <div class="card-body">
            <div id="mapa" style="width: auto; height: 600px;"></div>
        </div>
    </div>
</div>
<script>
    mapboxgl.accessToken = '{{ env('MAP_TOKEN') }}';
    var map = new mapboxgl.Map({
        container: 'mapa',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-74.04, 4.107],
        zoom: 4.6
    });

    @foreach($modelo->piezasClave as $piezaClave)
    @foreach($piezaClave->puntos as $punto)
    var popup_{{ $punto->id }} = new mapboxgl.Popup()
        .setHTML(
            '<strong>Modelo</strong> <a href="{{ route('front.ficha.informacion_ficha', compact('modelo')) }}">{!! $modelo->codigo !!}</a><br /><strong>Pieza Clave</strong> <a href="{{ route('front.ficha.informacion_ficha', compact('modelo')) }}">{!! $piezaClave->pieza_clave !!}</a><a href="{{ route('front.ficha.informacion_ficha', compact('modelo')) }}"><img class="img-responsive" src="@if( $piezaClave->fotos->isEmpty() ){{ asset('assets/images/sample.png')}} @else {{ $piezaClave->fotos->random()->foto }} @endif"></a>'
        )
    var marker_{{ $punto->id }} = new mapboxgl.Marker()
        .setLngLat([ {{ $punto->lng }}, {{ $punto->lat }} ])
        .setPopup(popup_{{ $punto->id }})
        .addTo(map);
    @endforeach
    @endforeach
</script>