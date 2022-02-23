
@foreach($modelo->fotos()->variante($variante)->orderBy('posicion')->get() as $foto)
    <tr id="modelo_foto_content_{{$foto->id}}">
      <td><img class="img" width="70" height="70" src="{{ $foto->name }}" data-holder-rendered="true"></td>
      <td class="align-middle"><input type="number"  class="form-control position_input_modelo" id="dibujo-position-input" value="{{ $foto->posicion }}" data-foto="{{$foto->id }}"></td>
      <td class="align-middle">
        <button type="button"
                        class="btn btn-light position-relative p-0 avatar-xs rounded-circle alert-danger borrar_foto_modelo"
                        data-foto="{{ $foto->id }}">
                    <span class="avatar-title  bg-transparent text-reset"><i class="bx bx-trash-alt"></i></span>
                </button></td>
    </tr>
            
        @endforeach