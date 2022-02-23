<div class="logo d-none d-lg-block">
    <a href="{{ route('front.home') }}"><img src="{{ asset('assets/images/logos/logo.png') }}" alt=""></a>
</div>
<div class="mt-3 mt-lg-5 px-3">
    <a href="{{ route('front.index') }}" class="d-block">Inicio</a>
    <ul>
        <li class="has-children">
            <a href="{{ route('front.buscador.home') }}">Buscador General</a>
        </li>
        <li class="has-children">
            <a href="{{ route('front.glosario.home') }}">Glosario</a>
        </li>
        <li class="has-children">
            <a href="{{ route('front.quienes_somos') }}">¿Quiénes Somos?</a>
        </li>
        <li class="has-children">
            <a href="{{ route('front.como_usar_calalogo.como_usar_calalogo') }}">¿Cómo usar el catálogo?</a>
        </li>
        <li class="has-children">
            <a href="{{ route('front.talleres_virtules.talleres_virtules') }}">Talleres Virtuales</a>
        </li>
        <li class="has-children">
            <a href="{{ route('front.noticias.noticias') }}">Noticias</a>
        </li>
        @if(false)
        <li class="has-children">
            <a href="404_e">Fotogalería</a>
        </li>
            @endif
    </ul>
</div>
<div class="row mt-3 mt-lg-5 px-3 d-flex align-items-center">
    <div class="col-12 mx-auto">
        <a href="https://www.eda.admin.ch/bogota" target="_blank" title="Embajada de Suiza">
            <img src="{{ asset('assets/images/logos/logo_embajada_suiza.png') }}" alt="" class="img-fluid">
        </a>
    </div>
    <div class="col-12 mx-auto text-center">
        <a href="https://www.icanh.gov.co/" target="_blank" title="ICANH">
            <img src="{{ asset('assets/images/logos/logo-footer.png') }}" alt="">
        </a>
    </div>
</div>
