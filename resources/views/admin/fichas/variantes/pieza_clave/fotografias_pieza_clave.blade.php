<!-- <div id="dropzone-subir-fotos-{{ $pieza_clave->pieza_clave }}" class="dropzone"></div> -->
<div class="row">
    <div class="col-12">
        <h4>Fotografias {{$pieza_clave->pieza_clave}}</h4>
    </div>
    <div class="col-12">
        <div class="row m-3" id="pieza_clave_content_fotos_img">
            @include('admin.fichas.variantes.pieza_clave.render.foreach_pieza_clave_fotos')
        </div>
    </div>
</div>
@php 
    $forma=$pieza_clave->datos()->where('posicion',5)->first()->valor;
@endphp
@if($forma!='')
<div class="row">
    <div class="col-12">
        <h4>Fotografias {{$forma}}</h4>
    </div>
    <div class="col-12">
        <div class="row m-3" id="variante_content_fotos_img_forma">
            @include('admin.fichas.variantes.pieza_clave.render.foreach_fotos_variantes',['modelo'=>$pieza_clave->modelo,'variante'=>'forma', 'varianteCodigo'=>$forma])
        </div>
    </div>
</div>
@endif
@php 
    $decorativa=$pieza_clave->datos()->where('posicion',6)->first()->valor;
@endphp
@if($decorativa!='')
<div class="row">
    <div class="col-12">
        <h4>Fotografias {{$decorativa}}</h4>
    </div>
    <div class="col-12">
        <div class="row m-3" id="variante_content_fotos_img_decorativa">
            @include('admin.fichas.variantes.pieza_clave.render.foreach_fotos_variantes',['modelo'=>$pieza_clave->modelo,'variante'=>'decorativa', 'varianteCodigo'=>$decorativa])
        </div>
    </div>
</div>
@endif
@php 
    $arqueometrica=$pieza_clave->datos()->where('posicion',7)->first()->valor;
@endphp
@if($arqueometrica!='')
<div class="row">
    <div class="col-12">
        <h4>Fotografias {{$arqueometrica}}</h4>
    </div>
    <div class="col-12">
        <div class="row m-3" id="variante_content_fotos_img_arqueometrica">
            @include('admin.fichas.variantes.pieza_clave.render.foreach_fotos_variantes',['modelo'=>$pieza_clave->modelo,'variante'=>'arqueometrica', 'varianteCodigo'=>$arqueometrica])
            
        </div>
    </div>
</div>
@endif


<script>
 
//     $(document).on('change','.position_input_pieza_clave',function() {
//         var datos = new FormData();
//         datos.append('id', $(this).data("foto"));
//         datos.append('posicion', $(this).val());
//         $.ajax({
//     url: "{{ route('admin.ficha.mover_fotos_pieza_clave', compact('pieza_clave')) }}",
//     type: "post",
//     data: datos,
//     cache: false,
//     contentType: false,
//     processData: false
// }).done(function(res){
//         $("#pieza_clave_content_fotos_img_{{$pieza_clave->pieza_clave}}").html(res);
//     });
//     });
    
     //$("#dropzone-subir-fotos-{{ $pieza_clave->pieza_clave }}").dropzone({
//        url: "{{ route('admin.ficha.subir_fotos_pieza_clave', compact('pieza_clave')) }}",
     //   headers: {
     //       'x-csrf-token': CSRF_TOKEN,
   //     },
  //      timeout: 60000,
//    });
    
</script>