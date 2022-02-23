@if($modelo->fotos->isNotEmpty() && $modelo->fotos()->variante($variante)->count() > 0 )
    @php $hash = Illuminate\Support\Str::random(40); @endphp
    <div class="row">
        <div class="col-lg-9"></div>
        <div class="col-lg-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modeloModal">
            Pantalla Completa
            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M5,5H10V7H7V10H5V5M14,5H19V10H17V7H14V5M17,14H19V19H14V17H17V14M10,17V19H5V14H7V17H10Z" /></svg>
        </button>
            
        </div>
    </div>
    <div id="{{ $hash.'1' }}" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($modelo->fotos()->variante($variante)->orderBy('posicion')->get() as $foto)
                <li data-target="#{{ $hash.'1' }}" data-slide-to="{{ $loop->index }}" class="@if( $loop->first ) active @endif"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($modelo->fotos()->variante($variante)->orderBy('posicion')->get() as $foto)
                <div class="carousel-item @if( $loop->first ) active @endif">
                    <img class="d-block w-100" src="{{ $foto->name }}" alt="First slide" >
                </div>
            @endforeach
        </div>
        @if( $modelo->fotos()->variante($variante)->count() > 1 )
            <a class="carousel-control-prev" href="#{{ $hash.'1' }}" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#{{ $hash.'1' }}" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        @endif
    </div>
    <!-- Modal -->
    <div class="modal modal-fullscreen fade" id="modeloModal" tabindex="-1" role="dialog" aria-labelledby="portfolioModalLabel" aria-hidden="true">

      <div class="modal-dialog" role="document">

        <div class="modal-content" style="background: black;">
            <a  data-dismiss="modal" aria-label="Close">
                
                <svg style="width:24px;height:24px;float: right;margin-right: 20px;">
                    <path fill="currentColor" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
                </svg>
            </a>
            <div class="modal-body">

                <div id="{{$hash}}" class="carousel slide" data-ride="carousel" data-interval="false">
                    <ol class="carousel-indicators">
                        @foreach($modelo->fotos()->variante($variante)->orderBy('posicion')->get() as $foto)
                        <li data-target="#{{ $hash }}" data-slide-to="{{ $loop->index }}" class="@if( $loop->first ) active @endif"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
            @foreach($modelo->fotos()->variante($variante)->orderBy('posicion')->get() as $foto)
                <div class="carousel-item @if( $loop->first ) active @endif">
                    <img class="d-block w-100" src="{{ $foto->name }}" alt="First slide" >
                </div>
            @endforeach
        </div>

                    @if($modelo->fotos()->variante($variante)->count() > 1)
                    <a class="carousel-control-prev" href="#{{ $hash }}" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#{{ $hash }}" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                    @endif
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endif