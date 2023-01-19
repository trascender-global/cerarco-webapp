@php $rand = rand() @endphp
<div id="mapa_{{ $pieza_clave->pieza_clave }}_{{ $rand }}" style="width: auto; height: 400px;border-radius: 15px"></div>

<div class="container-fluid p-3">
    <!-- Range slider: -->
    <input
            id="buscador_cronologia_{{ $pieza_clave->pieza_clave }}_{{ $rand }}"
            type="text"
            data-slider-ticks="[0, 500, 1000, 1500, 2000, 2500, 3000, 3500, 4000, 4100, 4200, 4300, 4400, 4500, 4600, 4700, 4800, 4900, 5000, 5100, 5200, 5300, 5400, 5500, 5600, 5700, 5800, 5900, 6000, 6100, 6200, 6300, 6400, 6500, 6600, 6700, 6800, 6900, 7000, 7100, 7200, 7300, 7400, 7500, 7600, 7700, 7800]"
            data-slider-step="100"
            data-slider-ticks-snap-bounds="200"
            data-slider-ticks-tooltip="true"
            data-slider-handle="custom"
            data-slider-disable="true"
            ticks_positions="[0, 6, 13, 19, 26, 32, 38, 45, 51, 53, 54, 55, 56, 58, 59, 60, 62, 63, 64, 65, 67, 68, 69, 71, 72, 73, 74, 76, 77, 78, 79, 81, 82, 83, 85, 86, 87, 88, 90, 91, 92, 94, 95, 96, 97, 99, 100]"/>
</div>

<script>
        mapboxgl.accessToken = 'pk.eyJ1IjoibHVtaWNhbWUzMyIsImEiOiJja3p3eDdqdmw0a21tMnZwYWJjcHZydnVkIn0.ju_prCiuR_L-7wWftgW4QQ';
        var map_{{ $pieza_clave->id }}_{{ $rand }} = new mapboxgl.Map({
            container: 'mapa_{{ $pieza_clave->pieza_clave }}_{{ $rand }}',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [-74.04, 4.107],
        zoom: 4
    });

    var currentMarkers_{{ $pieza_clave->id }}_{{ $rand }} = [];
    @foreach($pieza_clave->puntos as $punto)

    var marker = new mapboxgl.Marker({
        draggable: false
    }).setLngLat([ {{ $punto->lng }}, {{ $punto->lat }} ])
        .addTo(map_{{ $pieza_clave->id }}_{{ $rand }});
    currentMarkers_{{ $pieza_clave->id }}_{{ $rand }}.push(marker);

    @endforeach

    var slider_{{ $pieza_clave->id }}_{{ $rand }} = new Slider("#buscador_cronologia_{{ $pieza_clave->pieza_clave }}_{{ $rand }}", {
        ticks: [0, 500, 1000, 1500, 2000, 2500, 3000, 3500, 4000, 4100, 4200, 4300, 4400, 4500, 4600, 4700, 4800, 4900, 5000, 5100, 5200, 5300, 5400, 5500, 5600, 5700, 5800, 5900, 6000, 6100, 6200, 6300, 6400, 6500, 6600, 6700, 6800, 6900, 7000, 7100, 7200, 7300, 7400, 7500, 7600, 7700, 7800],
        ticks_positions: [0, 6, 13, 19, 26, 32, 38, 45, 51, 53, 54, 55, 56, 58, 59, 60, 62, 63, 64, 65, 67, 68, 69, 71, 72, 73, 74, 76, 77, 78, 79, 81, 82, 83, 85, 86, 87, 88, 90, 91, 92, 94, 95, 96, 97, 99, 100],
        ticks_snap_bounds: 200,
        ticks_labels: ['6000 a.C', '', '', '', '', '', '', '', '2000 a.C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1800 d.C.'],
        formatter: function (a) {
            if (Array.isArray(a)) {
                let r = a[0] - 6e3, e = a[1] - 6e3;
                return 0 > r ? r = Math.abs(r) + " a.C" : r += " d.C", 0 > e ? e = Math.abs(e) + " a.C" : e += " d.C", r + " a " + e
            }
            return 0 > a - 6e3 ? Math.abs(a - 6e3) + " a.C." : a - 6e3 + " d.C."
        },
        ticks_tooltip: true,
        step: 100,
        value: [ {{ calcular_cronologia_minimo($pieza_clave->datos_cronologia) }} , {{ calcular_cronologia_maximo($pieza_clave->datos_cronologia) }} ],
    });
    slider_{{ $pieza_clave->id }}_{{ $rand }}.disable();
</script>
