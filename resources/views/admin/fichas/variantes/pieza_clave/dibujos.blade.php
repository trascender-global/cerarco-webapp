<!-- <div id="dropzone-dibujo-{{ $pieza->id }}" class="dropzone"></div> -->
<div class="row">

    <div class="col-lg-6 col-sm-12">
        <div class="form-group">
            <label for="horizontal-ficha-input" class="col-form-label">Dibujo</label>
            <div class="col-sm-12">
                <input type="file" accept="image/*" id="dibujo_foto_input_{{$pieza->id}}"  class="form-control" required>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-4">
       <div class="form-group">
        <label for="horizontal-ficha-input" class="col-form-label">Posición</label>
        <div class="col-sm-12">
            <input type="number" name="posicion_dibujo" class="form-control" id="dibujo_position_input_{{$pieza->id}}" required>
        </div>
    </div>
</div>
<div class="form-group justify-content-center" style="align-self: end;">
    <button type="button" id="btn_save_dibujo_{{$pieza->id}}" class="btn btn-primary w-md" >Subir</button>
</div>

</div>
<div class="row">
    <div class="col-12">
        <h3>Dibujos</h3>
    </div>
</div>
<div class="row">

 <div class="col-lg-12">
    <table class="table align-middle">
      <thead>
        <tr>
          <th scope="col">Imagen</th>
          <th scope="col">Posición</th>
          <th scope="col">Acción</th>
      </tr>
  </thead>
  <tbody id="content_dibujos_img_{{$pieza->id}}">
    @if($pieza_clave->dibujos->isNotEmpty())
    @include('admin.fichas.variantes.pieza_clave.render.foreach_dibujos')
    @endif
</tbody>
</table>
</div>
</div>

    


<script>
    $("#btn_save_dibujo_{{$pieza->id}}").on("click",function(){
        if ($("#dibujo_foto_input_{{$pieza->id}}")[0].files[0]) {
           $(this).attr('disabled', true); 
        var file=$("#dibujo_foto_input_{{$pieza->id}}")[0].files[0];
        var pos =$("#dibujo_position_input_{{$pieza->id}}").val();
        var datos = new FormData();
        datos.append('file', file);
        datos.append('posicion', pos);
        $.ajax({
    url: "{{ route('admin.ficha.subir_dibujos', $pieza) }}",
    type: "post",
    data: datos,
    cache: false,
    contentType: false,
    processData: false
}).done(function(res){
        $("#content_dibujos_img_{{$pieza->id}}").html(res);
        $("#btn_save_dibujo_{{$pieza->id}}").removeAttr("disabled");
        $("#dibujo_position_input_{{$pieza->id}}").val("");
        $("#dibujo_foto_input_{{$pieza->id}}").val("");
    }); 
}else{
    alert("Seleccione un archivo a subir");
}
        
    });
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