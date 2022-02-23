<div class="col-xs-12 col-sm-6 col-md-6 nopad text-center">
    <label class="imagen_resultados">
        <a href="{{ route('front.ficha.informacion_ficha', ['modelo'=>$resultado]) }}">
            <img class="img-responsive" src="@if( $resultado->fotosPiezasClave->isEmpty() ){{ asset('assets/images/sample.png')}} @else {{ $resultado->fotosPiezasClave->random()->foto }} @endif"></a>
        <i class="fa fa-check hidden"></i>
    </label>
</div>