<!-- <div id="dropzone-dibujo-{{ $pieza->id }}" class="dropzone"></div> -->
<div class="row">
    <div class="col-12">
        <h4>Dibujos {{$pieza_clave->pieza_clave}}</h4>
    </div>
    <div class="col-12">
        <div class="row m-3" id="dibujos_content_fotos_img" >
            @include('admin.fichas.variantes.pieza_clave.render.foreach_dibujos')
        </div>
    </div>
</div>


<script>
    
    $(document).on('change','.position-input',function() {
        var datos = new FormData();
        datos.append('id', $(this).data("foto"));
        datos.append('posicion', $(this).val());
        $.ajax({
    url: "{{ route('admin.ficha.mover_dibujos', $pieza) }}",
    type: "post",
    data: datos,
    cache: false,
    contentType: false,
    processData: false
}).done(function(res){
        $("#content_dibujos_img_{{$pieza->id}}").html(res);
    });
    });
    
    
    
    // $("div#dropzone-dibujo-{{ $pieza->id }}").dropzone({
    //     url: "{{ route('admin.ficha.subir_dibujos', $pieza) }}",
    //     headers: {
    //         'x-csrf-token': CSRF_TOKEN,
    //     },
    //     timeout: 60000,
    // })
</script>