<div id="mapa_{{ $pieza_clave->pieza_clave }}" style="width: auto; height: 400px;"></div>

<div class="col-md-6 mb-4">
    <div class="row mt-2">
        <div class="col-md-4">
            <label for="example-text-input" class="col-form-label font-weight-bolder">Numero de Puntos</label>
        </div>
        <div class="col-md-8">
            <input class="form-control" type="number" value="{{ $pieza_clave->puntos->count() === 0 ? 1 : $pieza_clave->puntos->count() }}" id="puntos_mapa_{{ $pieza_clave->pieza_clave }}" name="des-for-diametro-hueco-promedio">
        </div>
    </div>
</div>

<script>
    mapboxgl.accessToken = '{{ env('MAP_TOKEN') }}';
    var map_{{ $pieza_clave->id }} = new mapboxgl.Map({
        container: 'mapa_{{ $pieza_clave->pieza_clave }}',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-74.04, 4.107],
        zoom: 4
    });

    var currentMarkers_{{ $pieza_clave->id }} = [];
    @foreach($pieza_clave->puntos as $punto)

    var marker = new mapboxgl.Marker({
        draggable: true
    }).setLngLat([ {{ $punto->lng }}, {{ $punto->lat }} ])
        .addTo(map_{{ $pieza_clave->id }});
    currentMarkers_{{ $pieza_clave->id }}.push(marker);
    marker.on('dragend', createDragEvent);

    @endforeach

    map_{{ $pieza_clave->id }}.on('click', (event) => {

        if (currentMarkers_{{ $pieza_clave->id }} !== null) {
            for (var i = currentMarkers_{{ $pieza_clave->id }}.length - $('#puntos_mapa_{{ $pieza_clave->pieza_clave }}').val(); i >= 0; i--) {
                currentMarkers_{{ $pieza_clave->id }}.pop().remove();
            }
        }

        let lng = event.lngLat.lng;
        let lat = event.lngLat.lat;
        let marker = new mapboxgl.Marker({
            draggable: true
        })
            .setLngLat([lng, lat])
            .addTo(map_{{ $pieza_clave->id }});
        currentMarkers_{{ $pieza_clave->id }}.push(marker);

        var puntos = getPuntos(currentMarkers_{{ $pieza_clave->id }});
        marker.on('dragend', (e) => {
            dragMarker_{{ $pieza_clave->id }}(marker)
        });
        ajax_mapa_{{ $pieza_clave->id }}(puntos);

    })

    function dragMarker_{{ $pieza_clave->id }}(marker){
        for (let i = 0; i < currentMarkers_{{ $pieza_clave->id }}.length; i++) {
            if (currentMarkers_{{ $pieza_clave->id }}[i].getElement() === marker.getElement()) {
                currentMarkers_{{ $pieza_clave->id }}[i] = marker;
            }
        }
        var puntos = getPuntos(currentMarkers_{{ $pieza_clave->id }});
        ajax_mapa_{{ $pieza_clave->id }}(puntos);
    }

    function getPuntos(markers) {
        return markers.map(function (element) {
            var punto = element.getLngLat();
            return {'lat': punto.lat, 'lng': punto.lng};
        });
    }

    function createDragEvent() {
        dragMarker_{{ $pieza_clave->id }}(marker)
    }

    function ajax_mapa_{{ $pieza_clave->id }}(puntos) {
        $.ajax({
            method: "POST",
            url: "{{ route('admin.ficha.agregar_puntos', compact('pieza_clave')) }}/" + JSON.stringify(puntos),
        })
    }
</script>