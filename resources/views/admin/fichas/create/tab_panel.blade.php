<div class="tab-pane @if($index==1) active @endif pieza_clave_form" id="pieza_clave_data_{{$index}}" role="tabpanel">
 
  <input type="hidden" value="{{$index}}" name="pieza_clave_index_{{$index}}"/>
  <input type="hidden" value="-PC{{$index}}" name="pieza_clave_codigo_{{$index}}" id="pieza_clave_codigo_{{$index}}"/>

    @include('admin.fichas.create.pieza_clave',['index'=>$index])
</div>