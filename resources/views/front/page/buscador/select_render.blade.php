<option disabled>Seleccione</option>
<?php $array=array(); ?>
   @foreach( $resultados as $modelo )
    @foreach($modelo->piezasClave as $pieza_clave)
    <?php array_push($array, $pieza_clave->id); ?>
        
    @endforeach
            
    @endforeach    

@foreach(App\Models\PiezaClaveDato::where('posicion',13)->whereIn('pieza_clave_id',$array)->groupBy('valor')->get() as $data)
                                                            <option value="{{$data->valor}}">{{ $data->valor }}</option>
                                                        @endforeach
