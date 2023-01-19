<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active pt-5" style="background-image: url( '{{ asset('images/fondo1.png') }}' );min-height:500px;">
            
        </div>
        <div class="carousel-item pt-5" style="background-image: url( '{{ asset('assets/images/hero/home-left-sidebar-1.png') }}' );min-height:500px">
            <h1 class="d-block text-center text-light mt-5">CATÁLOGO DE CERÁMICA ARQUEOLÓGICA DE COLOMBIA</h1>
            <h3 class="d-block text-center mt-5 text-light w-75 mx-auto">El primer espacio virtual que reúne los conocimientos sobre cerámica prehispánica de Colombia</h3>
            <div class="d-block button-box text-center mt-5 d-flex justify-content-center">
                <a href="{{ route('front.buscador.home') }}" class="btn btn-lg btn-gold mr-3 d-flex align-items-center">
                    <span>BUSCADORES</span>
                    <i class="arrow_carrot-2right"></i>
                </a>
                <a href="{{ route('front.glosario.home') }}" class="btn btn-gold d-flex align-items-center">
                    <span>GLOSARIO</span>
                    <i class="arrow_carrot-2right"></i>
                </a>
            </div>
        </div>
        <div class="carousel-item pt-5" style="background-image: url( '{{ asset('assets/images/hero/home-left-sidebar-2.png') }}' );min-height:500px">
            <h1 class="d-block text-center text-light mt-5">CATÁLOGO DE CERÁMICA ARQUEOLÓGICA DE COLOMBIA</h1>
            <h3 class="d-block text-center mt-5 text-light w-75 mx-auto">Un espacio interactivo para el estudio y divulgación de la cerámica prehispánica de Colombia</h3>
            <div class="d-block button-box text-center mt-5 d-flex justify-content-center">
                <a href="{{ route('front.buscador.home') }}" class="btn btn-gold text-white mr-3 d-flex align-items-center">
                    <span>BUSCADORES</span>
                    <i class="arrow_carrot-2right"></i>
                </a>
                <a href="{{ route('front.glosario.home') }}" class="btn btn-gold d-flex align-items-center">
                    <span>GLOSARIO</span>
                    <i class="arrow_carrot-2right"></i>
                </a>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>
