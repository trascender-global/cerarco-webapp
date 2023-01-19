<div class="row">
    <div class="col">
        <h4 class="card-title mb-4" id="main-title">{{ $modelo->codigo }}</h4>
        {{-- <button type="button" class="outlined-blue d-flex justify-content-center align-items-center">
            <img src="{{ asset('assets/svg/message-icon.svg') }}" alt="Message icon" class="p-1">
            X Temas
        </button> --}}
        @php
            $m = $modelo->getModelo();
        @endphp
        <p class="card-name">{{ $m['Descripción']['Nombre']['valor'] }}</p>
        <p class="card-description">{{ $m['Descripción']['Descripción formal (resumen)']['valor'] }}</p>
        @php
            $descriptions = [['Nombres conocidos', 'Copa de pedestal tubular'], 
            ['Área geográfica', $m['Descripción']['Área geográfica']['valor']], 
            ['Subregión geográfica', $m['Descripción']['Subregión geográfica']['valor']],
             ['Departamento', $m['Descripción']['Departamento']['valor']], 
             ['Municipio de hallazgo', $m['Descripción']['Municipio de hallazgo']['valor']],
              ['Clasificación existente', $m['Descripción']['Clasificación existente']['valor']],
               ['Función', $m['Descripción']['Funcion Primaria']['valor']]
               ];
               try {
                    array_push($descriptions,['Cronología', $m['Cronología']['Fecha máxima']['valor'] . ' - ' . $m['Cronología']['Fecha mínima']['valor'] . ' ' . $m['Cronología']['Maxima AC-DC']['valor']]);
                    array_push($descriptions,['Cronología relativa', $m['Cronología']['Cronología relativa']['valor']]);
                } catch (\Throwable $th) {
                //throw $th;
               }
                
        @endphp

        @foreach ($descriptions as $description)
            <p>
                <span class="description-title">{{ $description[0] }}</span>
                <span class="description">{{ $description[1] }}</span>
            </p>
        @endforeach
        <p>
            <span class="description-title">Confiabilidad del modelo:</span>
            @switch($m['Descripción']['Confiabilidad del Modelo']['valor'])
                @case('Baja')
                    <button type="button" class="low-confiability">
                        Baja
                    </button>
                @break

                @case('Media')
                    <button type="button" class="mid-confiability">
                        Media
                    </button>
                @break

                @case('Alta')
                    <button type="button" class="high-confiability">
                        Alta
                    </button>
                @break

                @default
            @endswitch



        </p>
        {{-- <span class="description-title">Modelos relacionados:</span>
        <button type="button" class="outlined-blue">
            CCsin2
        </button> --}}
    </div>
    <div class="col-md-5">
        <div class="d-flex flex-column justify-content-center align-items-center">
            @if($title!='') <h4 class="card-title mb-4" id="main-title">{{$title}}</h4> @endif
            @switch($type)
                @case('pieza')
                    <div style="width: 100%">
                        @include('front.fichas.variantes.pieza_clave.mapa', ['pieza_clave' => $pieza])
                    </div>
                    <div class="row" style="width: 100%">
                        @include('front.fichas.variantes.pieza_clave.fotografias_pieza_clave', [
                            'pieza_clave' => $pieza,
                        ])
                    </div>
                @break
                @case('modelo')
                <div style="width: 100%">
                    @include('front.fichas.variantes.pieza_clave.mapa_modelo', ['modelo' => $modelo])
                </div>
                <div class="row" style="width: 100%">
                    @include('front.fichas.variantes.pieza_clave.fotografias_modelo',['modelo' => $modelo, 'variante' => 'modelo'])
                </div>
            @break
            @case('variante')
                    <div style="width: 100%">
                        @include('front.fichas.variantes.pieza_clave.mapa', ['pieza_clave' => $pieza])
                    </div>
                    <div class="row" style="width: 100%">
                        @include('front.fichas.variantes.pieza_clave.fotografias_variante',
                                                                [
                                                                    'modelo' => $modelo,
                                                                    'variante' => $variante,
                                                                    'varianteCodigo' => $modeloCodigo,
                                                                    'pieza_clave' => $pieza_clave_id_,
                                                                ])
                        
                    </div>
                @break
                @default
            @endswitch

        </div>
    </div>
</div>
{{-- @include('front.fichas.variantes.pieza_clave.fotografias_variante',
                                                [
                                                    'modelo' => $modelo,
                                                    'variante' => 'forma',
                                                    'varianteCodigo' => $modelo,
                                                    'pieza_clave' => $pieza_clave_id_,
                                                ]) --}}
{{-- <div class="d-none d-md-inline col">
                    <img src="https://cdn.shopify.com/s/files/1/1079/2686/products/cs695-8c_large.JPG?v=1571325822" class="main-card-img mt-4 mt-md-0" alt="">
                </div>
                <div class="col cards-container">
                    <ul class="nav nav-pills nav-fill">
                        @for ($i = 0; $i < 8; $i++)
                            <li class="nav-item">
                                <a href="#" class="@if ($i == 0) active @endif nav-link" data-toggle="tab" aria-current="page">
                                    <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" class="card-img mx-auto d-block" alt="">
                                </a>
                            </li>
                        @endfor
                    </ul>
                </div> --}}
