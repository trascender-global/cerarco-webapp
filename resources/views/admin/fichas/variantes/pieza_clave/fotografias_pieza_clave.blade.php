<!-- <div id="dropzone-subir-fotos-{{ $pieza_clave->pieza_clave }}" class="dropzone"></div> -->

<div class="row">
    
    <div class="col-lg-6 col-sm-12">
        <div class="form-group">
            <label for="horizontal-ficha-input" class="col-form-label">Fotografias</label>
            <div class="col-sm-12">
                <input type="file" accept="image/*" id="pieza_clave_foto_input_{{$pieza_clave->pieza_clave}}"  class="form-control" required>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-4">
       <div class="form-group">
        <label for="horizontal-ficha-input" class="col-form-label">Posición</label>
        <div class="col-sm-12">
            <input type="number" class="form-control" id="pieza_clave_input_posicion_{{$pieza_clave->pieza_clave}}" required>
        </div>
    </div>
</div>
<div class="form-group justify-content-center" style="align-self: end;">
    <button type="button" id="btn_save_pieza_clave_{{$pieza_clave->pieza_clave}}" class="btn btn-primary w-md" >Subir</button>
</div>

</div>
<div class="row">
    <div class="col-12">
        <h3>Fotografias</h3>
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
  <tbody id="pieza_clave_content_fotos_img_{{$pieza_clave->pieza_clave}}">
    @if($pieza_clave->fotos->isNotEmpty())
    @include('admin.fichas.variantes.pieza_clave.render.foreach_pieza_clave_fotos')
    @endif
</tbody>
</table>
</div>
</div>


<script>
    $("#btn_save_pieza_clave_{{$pieza_clave->pieza_clave}}").on("click",function(){

 if ($("#pieza_clave_foto_input_{{$pieza_clave->pieza_clave}}")[0].files[0]) {
    $(this).attr('disabled', true); 
        var file=$("#pieza_clave_foto_input_{{$pieza_clave->pieza_clave}}")[0].files[0];
        var pos =$("#pieza_clave_input_posicion_{{$pieza_clave->pieza_clave}}").val();
        var datos = new FormData();
        datos.append('file', file);
        datos.append('posicion', pos);
        $.ajax({
    url: "{{ route('admin.ficha.subir_fotos_pieza_clave', compact('pieza_clave')) }}",
    type: "post",
    data: datos,
    cache: false,
    contentType: false,
    processData: false
}).done(function(res){
        $("#pieza_clave_content_fotos_img_{{$pieza_clave->pieza_clave}}").html(res);
        $("#btn_save_pieza_clave_{{$pieza_clave->pieza_clave}}").removeAttr("disabled");
        $("pieza_clave_foto_input_{{$pieza_clave->pieza_clave}}").val("");
        $("#pieza_clave_input_posicion_{{$pieza_clave->pieza_clave}}").val("");
    });
}else{
    alert("Seleccione un archivo a subir");
}
        
    });
    $(document).on('change','.position_input_pieza_clave',function() {
        var datos = new FormData();
        datos.append('id', $(this).data("foto"));
        datos.append('posicion', $(this).val());
        $.ajax({
    url: "{{ route('admin.ficha.mover_fotos_pieza_clave', compact('pieza_clave')) }}",
    type: "post",
    data: datos,
    cache: false,
    contentType: false,
    processData: false
}).done(function(res){
        $("#pieza_clave_content_fotos_img_{{$pieza_clave->pieza_clave}}").html(res);
    });
    });
    
     //$("#dropzone-subir-fotos-{{ $pieza_clave->pieza_clave }}").dropzone({
//        url: "{{ route('admin.ficha.subir_fotos_pieza_clave', compact('pieza_clave')) }}",
     //   headers: {
     //       'x-csrf-token': CSRF_TOKEN,
   //     },
  //      timeout: 60000,
//    });
    
</script>