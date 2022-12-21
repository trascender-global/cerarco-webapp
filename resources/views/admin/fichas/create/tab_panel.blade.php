<form class="tab-pane pieza_clave_form" id="pieza_clave_data_{{$index}}" role="tabpanel">
  @csrf
  <input type="hidden" value="{{$index}}" name="pieza_clave_index"/>
    @include('admin.fichas.create.pieza_clave',['index'=>$index])
    <button type="subit" class="btn btn-primary save_pieza_clave" data-id="{{$index}}"> Guardar</button>
</form>