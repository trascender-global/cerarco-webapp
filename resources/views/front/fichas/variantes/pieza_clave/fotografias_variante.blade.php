<?php $P = App\Models\PiezaClave::find($pieza_clave); ?>
@if (
    $P->fotos()->piezaClave($pieza_clave)->count() >= 1 ||
        $P->dibujos()->piezaClave($pieza_clave)->count() >= 1)
    @php $hash = Illuminate\Support\Str::random(40); @endphp

    <div id="{{ $hash . '_1' }}" class="carousel slide" data-ride="carousel" style="border-radius: 15px;width: 100%">
        <ol class="carousel-indicators">
            <?php $index = 0; ?>

            @foreach ($P->fotos()->piezaClave($pieza_clave)->orderBy('posicion')->get() as $foto)
                <li data-target="#{{ $hash . '_1' }}" data-slide-to="{{ $index }}"
                    class="@if ($loop->first) active @endif"></li>
                <?php $index = $index + 1; ?>
            @endforeach
            @foreach ($P->dibujos()->piezaClave($pieza_clave)->orderBy('posicion')->get() as $foto)
                <li data-target="#{{ $hash . '_1' }}" data-slide-to="{{ $index }}"></li>
                <?php $index = $index + 1; ?>
            @endforeach
            @foreach ($modelo->fotosVariante()->variante($variante)->codigo($varianteCodigo)->orderBy('posicion')->get() as $foto)
                <li data-target="#{{ $hash . '_1' }}" data-slide-to="{{ $index }}" class=""></li>
                <?php $index = $index + 1; ?>
            @endforeach
        </ol>
        <div class="carousel-inner">
            <?php $index = 0; ?>
            @foreach ($P->fotos()->piezaClave($pieza_clave)->orderBy('posicion')->get() as $foto)
                <div class="carousel-item @if ($index === 0) active @endif">
                    <img class="d-block w-100 " src="{{ $foto->foto }}" alt="First slide"
                        style="height: 358px;object-fit: contain">
                </div>
                <?php $index = $index + 1; ?>
            @endforeach
            @foreach ($P->dibujos()->piezaClave($pieza_clave)->orderBy('posicion')->get() as $foto)
                <div class="carousel-item @if ($index === 0) active @endif">
                    <img class="d-block w-100 " src="{{ $foto->foto }}" alt="First slide"
                        style="height: 358px;object-fit: contain">
                </div>
                <?php $index = $index + 1; ?>
            @endforeach
            @foreach ($modelo->fotosVariante()->variante($variante)->codigo($varianteCodigo)->orderBy('posicion')->get() as $foto)
                <div class="carousel-item @if ($index === 0) active @endif">
                    <img class="d-block w-100" src="{{ $foto->foto }}" alt="First slide"
                        style="height: 358px;object-fit: contain">
                </div>
                <?php $index = $index + 1; ?>
            @endforeach
        </div>
        @if (
            $P->fotos()->piezaClave($pieza_clave)->count() > 1 ||
                $P->dibujos()->piezaClave($pieza_clave)->count() > 1)
            <a class="carousel-control-prev" href="#{{ $hash . '_1' }}" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#{{ $hash . '_1' }}" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        @endif
        <button type="button" class="btn btn-primary" data-toggle="modal"
            data-target="#varianteModal_{{ $variante }}_{{ $varianteCodigo }}"
            style="
        position: absolute;
        top: 10px;
        right: 10px;
        border-radius: 15px;
        z-index: 1000;">
            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M5,5H10V7H7V10H5V5M14,5H19V10H17V7H14V5M17,14H19V19H14V17H17V14M10,17V19H5V14H7V17H10Z" />
            </svg>
        </button>
    </div>


    <!-- Modal -->
    <div class="modal modal-fullscreen fade" id="varianteModal_{{ $variante }}_{{ $varianteCodigo }}"
        tabindex="-1" role="dialog" aria-labelledby="portfolioModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content" style="background: black;">
                <a data-dismiss="modal" aria-label="Close"
                    style="
            position: absolute;
            color: white;
            right: 5px;
            top: 5px;
            z-index: 2;
        ">

                    <svg style="width:24px;height:24px;float: right;margin-right: 20px;">
                        <path fill="currentColor"
                            d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
                    </svg>
                </a>
                <div class="modal-body">
                    <?php $index = 0; ?>
                    <div id="{{ $hash }}" class="carousel slide" data-ride="carousel" data-interval="false"
                        style="height: 100vh !important">
                        <ol class="carousel-indicators">

                            @foreach ($P->fotos()->piezaClave($pieza_clave)->orderBy('posicion')->get() as $foto)
                                <li data-target="#{{ $hash }}" data-slide-to="{{ $index }}"
                                    class="@if ($loop->first) active @endif"></li>
                                <?php $index = $index + 1; ?>
                            @endforeach

                            @foreach ($P->dibujos()->piezaClave($pieza_clave)->orderBy('posicion')->get() as $foto)
                                <li data-target="#{{ $hash }}" data-slide-to="{{ $index }}"></li>
                                <?php $index = $index + 1; ?>
                            @endforeach

                            @foreach ($modelo->fotosVariante()->variante($variante)->codigo($varianteCodigo)->orderBy('posicion')->get() as $foto)
                                <li data-target="#{{ $hash }}" data-slide-to="{{ $index }}"
                                    class=""></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            <?php $index = 0; ?>
                            @foreach ($P->fotos()->piezaClave($pieza_clave)->orderBy('posicion')->get() as $foto)
                                <div class="carousel-item @if ($index == 0) active @endif"
                                    style="height: 100vh !important">
                                    <img class="d-block w-100 " src="{{ $foto->foto }}" alt="First slide"
                                        style="height: 100vh !important;object-fit: contain">
                                </div>
                                <?php $index = $index + 1; ?>
                            @endforeach
                            @foreach ($P->dibujos()->piezaClave($pieza_clave)->orderBy('posicion')->get() as $foto)
                                <div class="carousel-item @if ($index == 0) active @endif"
                                    style="height: 100vh !important">
                                    <img class="d-block w-100 " src="{{ $foto->foto }}" alt="First slide"
                                        style="height: 100vh !important;object-fit: contain">
                                </div>
                                <?php $index = $index + 1; ?>
                            @endforeach
                            @foreach ($modelo->fotosVariante()->variante($variante)->codigo($varianteCodigo)->orderBy('posicion')->get() as $foto)
                                <div class="carousel-item @if ($index == 0) active @endif"
                                    style="height: 100vh !important">
                                    <img class="d-block w-100" src="{{ $foto->foto }}" alt="First slide"
                                        style="height: 100vh !important;object-fit: contain">
                                </div>
                                <?php $index = $index + 1; ?>
                            @endforeach

                        </div>

                        @if (
                            $P->fotos()->piezaClave($pieza_clave)->count() > 1 ||
                                $P->dibujos()->piezaClave($pieza_clave)->count() > 1)
                            <a class="carousel-control-prev" href="#{{ $hash }}" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#{{ $hash }}" role="button"
                                data-slide="next">
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
