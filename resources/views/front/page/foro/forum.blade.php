 <!-- Comment card -->
 @php
 $modelo=$forum->modelo;
 $dibujo=$modelo->fotosPiezasClave->first();
@endphp
<div class="card flex-column flex-md-row mt-2 mt-md-4 ml-1 ml-md-4" style="box-shadow: 0px 0px 20px 8px rgb(0 0 0 / 8%)">
<div class="card-description">
 <p class="card-p card-p-primary">{{$modelo->codigo}}</p>
 <p class="card-p card-p-secondary">{{$modelo->getModelo()['Descripción']['Nombre']['valor']}}</p>
 <img class="card-description-img" @if($dibujo) src="{{$dibujo->foto}}" @endif alt="Imagen de ficha">
 <a  href="{{ route('front.ficha.informacion_ficha', ['modelo'=>$modelo]) }}"
     class="card-description-btn d-block mt-2 mt-md-3">
     Ver ficha
 </a>
</div>
<div class="card-body">
 
 <div id="content_main_comment">
     @foreach (App\Models\Forum::where('modelo_id', $modelo->id)->first()->forum_topics()->orderBy('created_at','DESC')->take(2)->get() as $topic)
         @include('front.page.foro.comment')
     @endforeach

 </div>
</div>
</div>
<!-- End comment card -->