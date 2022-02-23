<!-- <div id="dropzone-subir-fotos-{{ $varianteCodigo }}-{{ $variante }}" class="dropzone">
</div> -->

<div class="row">
    
    <div class="col-lg-6 col-sm-12">
        <div class="form-group">
            <label for="horizontal-ficha-input" class="col-form-label">Fotografias</label>
            <div class="col-sm-12">
                <input type="file" accept="image/*" id="variante_foto_input_{{$varianteCodigo}}_{{$variante}}"  class="form-control" required>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-4">
       <div class="form-group">
        <label for="horizontal-ficha-input" class="col-form-label">Posición</label>
        <div class="col-sm-12">
            <input type="number" class="form-control" id="variante_input_posicion_{{$varianteCodigo}}_{{$variante}}" required>
        </div>
    </div>
</div>
<div class="form-group justify-content-center" style="align-self: end;">
    <button type="button" id="btn_save_variante_{{$varianteCodigo}}_{{$variante}}" class="btn btn-primary w-md" >Subir</button>
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
  <tbody id="variante_content_fotos_img_{{$varianteCodigo}}_{{$variante}}">
    @if($modelo->fotosVariante->isNotEmpty())
    @include('admin.fichas.variantes.pieza_clave.render.foreach_fotos_variantes')
    @endif
</tbody>
</table>
</div>
</div>



<script>

     $("#btn_save_variante_{{$varianteCodigo}}_{{$variante}}").on("click",function(){
        if ($("#variante_foto_input_{{$varianteCodigo}}_{{$variante}}")[0].files[0]) {
            $(this).attr('disabled', true); 
    var file=$("#variante_foto_input_{{$varianteCodigo}}_{{$variante}}")[0].files[0];
    var pos =$("#variante_input_posicion_{{$varianteCodigo}}_{{$variante}}").val();
    var datos = new FormData();
    datos.append('file', file);
    datos.append('posicion', pos);
    $.ajax({
        url: "{{ route('admin.ficha.subir_fotos_variante', compact('modelo','variante','varianteCodigo')) }}",
        type: "post",
        data: datos,
        cache: false,
        contentType: false,
        processData: false
    }).done(function(res){
        $("#variante_content_fotos_img_{{$varianteCodigo}}_{{$variante}}").html(res);
        $("#btn_save_variante_{{$varianteCodigo}}_{{$variante}}").removeAttr("disabled");
        $("#variante_foto_input_{{$varianteCodigo}}_{{$variante}}").val("");
        $("#variante_input_posicion_{{$varianteCodigo}}_{{$variante}}").val("");
    });
}else{
    alert("Seleccione un archivo a subir");
}
    
});
   $(document).on('change','.position_input_variante_{{$variante}}',function() {
    var datos = new FormData();
    datos.append('id', $(this).data("foto"));
    datos.append('posicion', $(this).val());
    $.ajax({
        url: "{{ route('admin.ficha.mover_fotos_variante', compact('modelo','variante','varianteCodigo')) }}",
        type: "post",
        data: datos,
        cache: false,
        contentType: false,
        processData: false
    }).done(function(res){
        $("#variante_content_fotos_img_{{$varianteCodigo}}_{{$variante}}").html(res);
    });
});
    // $("#dropzone-subir-fotos-{{ $varianteCodigo }}-{{ $variante }}").dropzone({
    //     url: "{{ route('admin.ficha.subir_fotos_variante', compact('modelo','variante','varianteCodigo')) }}",
    //     headers: {
    //         'x-csrf-token': CSRF_TOKEN,
    //     },
    //     timeout: 60000,
    // });
</script>