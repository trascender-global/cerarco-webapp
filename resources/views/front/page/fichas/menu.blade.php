<div class="row mry-10">
    <div class="col-lg-12">
        <div class="card fondo-trans">
            <div class="card-body">
                <nav class="page__menu menu">
                    <ul class="menu__list r-list">
                        <li class="menu__group"><a href="{{ route('front.ficha.informacion_ficha', compact('modelo')) }}" class="menu__link r-link text-underlined active">DATOS GENERALES</a></li>
                        <li class="menu__group"><a href="{{ route('front.ficha.informacion_ficha', compact('modelo')) }}" class="menu__link r-link text-underlined">PIEZA CLAVE</li>
                        <li class="menu__group"><a href="{{ route('front.ficha.variante_forma', compact('modelo')) }}" class="menu__link r-link text-underlined">VARIANTES DE FORMA</a></li>
                        <li class="menu__group"><a href="{{ route('front.ficha.variante_decorativa', compact('modelo')) }}" class="menu__link r-link text-underlined">VARIANTES DECORATIVAS</a></li>
                        <li class="menu__group"><a href="{{ route('front.ficha.variante_arqueometrica', compact('modelo')) }}" class="menu__link r-link text-underlined">VARIANTE ARQUEOMÉTRICAS</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>