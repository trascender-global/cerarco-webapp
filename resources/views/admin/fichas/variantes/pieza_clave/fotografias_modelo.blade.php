<!-- <div id="dropzone-subir-fotos-{{ $modelo->codigo }}-{{ $variante }}" class="dropzone">
</div> -->

<div class="row">
    
    <div class="col-lg-6 col-sm-12">
        <div class="form-group">
            <label for="horizontal-ficha-input" class="col-form-label">Fotografias</label>
            <div class="col-sm-12">
                <input type="file" accept="image/*" id="modelo_foto_input"  class="form-control" required>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-4">
       <div class="form-group">
        <label for="horizontal-ficha-input" class="col-form-label">Posición</label>
        <div class="col-sm-12">
            <input type="number" class="form-control" id="modelo_input_posicion" required>
        </div>
    </div>
</div>
<div class="form-group justify-content-center" style="align-self: end;">
    <button type="button" id="btn_save_modelo" class="btn btn-primary w-md" >Subir</button>
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
  <tbody id="modelo_content_fotos_img">
    @if($modelo->fotos->isNotEmpty())
    @include('admin.fichas.variantes.pieza_clave.render.foreach_fotos')
    @endif
</tbody>
</table>
</div>
</div>



<script>
   $("#btn_save_modelo").on("click",function(){
    if ($("#modelo_foto_input")[0].files[0]) {
        $(this).attr('disabled', true); 
    var file=$("#modelo_foto_input")[0].files[0];
    var pos =$("#modelo_input_posicion").val();
    var datos = new FormData();
    datos.append('file', file);
    datos.append('posicion', pos);
    $.ajax({
        url: "{{ route('admin.ficha.subir_fotos', compact('modelo','variante')) }}",
        type: "post",
        data: datos,
        cache: false,
        contentType: false,
        processData: false
    }).done(function(res){
        $("#modelo_content_fotos_img").html(res);
        $("#btn_save_modelo").removeAttr("disabled");
        $("#modelo_foto_input").val("");
        $("#modelo_input_posicion").val("");
    });
}else{
    alert("Seleccione un archivo a subir");
}
    
});
   $(document).on('change','.position_input_modelo',function() {
    var datos = new FormData();
    datos.append('id', $(this).data("foto"));
    datos.append('posicion', $(this).val());
    $.ajax({
        url: "{{ route('admin.ficha.mover_fotos', compact('modelo','variante')) }}",
        type: "post",
        data: datos,
        cache: false,
        contentType: false,
        processData: false
    }).done(function(res){
        $("#modelo_content_fotos_img").html(res);
    });
});
    // $("#dropzone-subir-fotos-{{ $modelo->codigo }}-{{ $variante }}").dropzone({
    //     url: "{{ route('admin.ficha.subir_fotos', compact('modelo','variante')) }}",
    //     headers: {
    //         'x-csrf-token': CSRF_TOKEN,
    //     },
    //     timeout: 60000,
    // });
</script>