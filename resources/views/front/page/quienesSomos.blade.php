@extends('layouts.master_front')

@section('title') CATÁLOGO DE CERÁMICA ARQUEOLÓGICO DE COLOMBIA @endsection

@section('content')

    @component('common-components.breadcrumb-front')
        @slot('title') ¿Quiénes somos? @endslot
        @slot('seccion') ¿Quiénes somos? @endslot
    @endcomponent

    <div class="site-wrapper-reveal border-bottom">

        <div class="about-us-pages-area">
            <div class="banner-video-area overflow-hidden section-space--pt_90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner">
                                <img src="{{ asset('assets/images/banners/video-about.jpg') }}" alt="">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="our-customer-suppoer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <!-- Single Support Item Start -->
                            <div class="single-support-item">
                                <div class="header-support">
                                    <div class="icon">
                                        <i class="far fa-user-circle"></i>
                                    </div>
                                    <h6><a href="javascript:void(0)" style="cursor: default ">Alberto Sarcina:</a></h6>
                                </div>
                                <div class="iconbox-desc">
                                    <p>Idea, realización y coordinación general del proyecto</p>
                                </div>
                            </div>
                            <!-- Single Support Item End -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <!-- Single Support Item Start -->
                            <div class="single-support-item">
                                <div class="header-support">
                                    <div class="icon">
                                        <i class="far fa-user-circle"></i>
                                    </div>
                                    <h6><a href="javascript:void(0)" style="cursor: default ">Fernando Montejo:</a></h6>
                                </div>
                                <div class="iconbox-desc">
                                    <p>Coordinador del grupo de Patrimonio del ICANH</p>
                                </div>
                            </div>
                            <!-- Single Support Item End -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <!-- Single Support Item Start -->
                            <div class="single-support-item">
                                <div class="header-support">
                                    <div class="icon">
                                        <i class="far fa-user-circle"></i>
                                    </div>
                                    <h6><a href="javascript:void(0)" style="cursor: default ">Juliana Campuzano: </a></h6>
                                </div>
                                <div class="iconbox-desc">
                                    <p>Asistente en la coordinación, responsable de las fichas (2019-2021)</p>
                                </div>
                            </div>
                            <!-- Single Support Item End -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <!-- Single Support Item Start -->
                            <div class="single-support-item">
                                <div class="header-support">
                                    <div class="icon">
                                        <i class="far fa-user-circle"></i>
                                    </div>
                                    <h6><a href="javascript:void(0)" style="cursor: default ">Equipo:</a></h6>
                                </div>
                                <div class="iconbox-desc">
                                    <p>
                                        <li>Jennifer Gutiérrez: Dibujo arqueológico de la cerámica (2018-2021)</li>
                                        <li>Ángela Bacca: Dibujo arqueológico de la cerámica (2018-2021)</li>
                                        <li>Yoryette Bastidas: Dibujo arqueológico de la cerámica (2019-2021)</li>
                                        <li>Javier La Rotta: Fotografía en laboratório de la cerámica (2019-2021)</li>
                                    </p>
                                </div>
                            </div>
                            <!-- Single Support Item End -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="perfection-area section-space--pt_90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="perfection-dec mr-lg-5">
                                <h5 class="mb-10">Qué es el catálogo:</h5>
                                <p>El Catálogo de Cerámica Arqueológica de Colombia es un proyecto del Instituto
                                    Colombiano de Antropología e Historia – ICANH, cofinanciado por la Embajada Suiza en
                                    Colombia, que surge de la necesidad de reunir en un solo lugar los conocimientos
                                    sobre la cerámica prehispánica hasta ahora producidos por los arqueólogos que han
                                    trabajado en el territorio colombiano y sus áreas aledañas. Los estudios sobre la
                                    cerámica prehispánica de Colombia están en su gran mayoría ubicados en artículos de
                                    revistas especializadas, muchas veces de muy difícil localización, cuando no se
                                    trata de informes finales que reposan únicamente en Bogotá, en la sede del ICANH.
                                    Esto impide un trabajo viable de investigación sobre la cerámica por parte de
                                    cualquier estudioso del campo, que resida en una ciudad de Colombia o en el
                                    exterior.
                                    Estamos realizando el Catálogo en colaboración con las Universidades de Colombia y
                                    con los expertos en cerámica prehispánica (nacionales e internacionales), con la
                                    voluntad de construir un instrumento académico para el estudio de la Arqueología de
                                    Colombia que sea flexible, abierto a todas las miradas especializadas en el campo de
                                    la cerámica que tenga una base sólida desde un principio y una posibilidad de irse
                                    ampliando y perfeccionando en el transcurso del tiempo.
                                    No hemos querido basarnos en las tipologías cerámicas existentes, ya que en muchos
                                    casos estas están en contraste la una con la otra y suelen utilizar términos
                                    distintos para referirse a una misma cosa o, al contrario, el mismo término para
                                    significar dos cosas distintas. Hemos preferido irnos hacia lo básico, con la
                                    descripción morfológica y técnica de las piezas cerámicas a partir del concepto de
                                    modelo que reúne vasijas con forma, acabado, pasta y procedencia geográfica
                                    parecidas y comparables. A partir de esta información, cada arqueólogo podrá
                                    realizar su tipología, que tenga en cuenta los criterios que más les parezcan
                                    adecuados.
                                    El Catálogo está conformado por fichas interrelacionadas entre ellas, que describen
                                    las variantes de forma, de decoración, de los aspectos tecnológicos y arqueométricos
                                    de cada modelo cerámico, indicando la procedencia geográfica y la cronología. El
                                    aparato gráfico es riguroso y homogéneo, respetando los estándares internacionales
                                    para la documentación gráfica y fotográfica de la cerámica arqueológica.

                                </p>

                                <p><strong>Han colaborado también:</strong></p>
                                    <li>Laura Acevedo: Dibujo arqueológico de la cerámica y asistente en la coordinación (2018)</li>
                                    <li>Harrison Gallego: Asistente en la coordinación (2017)</li>
                                    <li>Edwin Rico: Asistente en la coordinación (2017)</li>
                                    <li>Milton García: Fotografía en laboratório de la cerámica (2018)</li>
                                    <li>Victoria Báez, Ana María Paez, Daniel Laverde (Universidad Externado de Colombia, 2017):</li>                                    
                                    <li>Edgar Bernal (Universidad de Caldas): Pasantía (2020-2021)</li>
                                    <li>Alejandro Villa, Darío González (Universidad del Magdalena): Pasantes (2017)</li>
                                    <li>Diana Mendoza: Fichas de modelos y glosario  (2019)</li>
                                <br />

                                <p><strong>Un agradecimiento especial a:</strong> </p>
                                    <li>Francisco Romano, Clemencia Plazas, Pedro Argüello, Ángela Cadena, Ana María Groot, Sneider Rojas, Ana María Falchetti, Marcela Jaramillo, Jaime Pardo, Leonor Herrera, Juanita Sáenz, Patricia Ramirez, Victor González, Doris Rojas, Carlos López, Santiago Giraldo, Wilhelm Londoño, Angela Escobar, Deyanira Mendez y a todas las otras arqueólogas y arqueólogos que con su trabajo han contribuido directamente o indirectamente a este proyecto. Además tenemos que agradecer a todas las poblaciones indígenas del territorio que ahora llamamos Colombia, antiguas y presentes, que han realizado los increíbles objetos que presentamos en este catálogo.

</li>
                                    

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner-preduct-wrapper section-space--pt_90">
                <div class="container">
                    <div class="row row--6">
                        <div class="col-lg-8 col-md-8">
                            <div class="banner-product-image mt-10">
                                <a href="javascript:void(0)" style="cursor: default">
                                    <img src="assets/images/banners/im-md-1-780x770.jpg" class="img-fluid"
                                            alt="Banner images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="banner-product-image mt-10">
                                <a href="javascript:void(0)" style="cursor: default">
                                    <img src="assets/images/banners/im-md-2-380x380.jpg" class="img-fluid"
                                            alt="Banner images">
                                </a>
                            </div>
                            <div class="banner-product-image mt-10">
                                <a href="javascript:void(0)" style="cursor: default">
                                    <img src="assets/images/banners/im-md-3.jpg" class="img-fluid" alt="Banner images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="banner-product-image mt-10">
                                <a href="javascript:void(0)" style="cursor: default">
                                    <img src="assets/images/banners/im-md-4-380x380.jpg" class="img-fluid"
                                            alt="Banner images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="banner-product-image mt-10">
                                <a href="javascript:void(0)" style="cursor: default">
                                    <img src="assets/images/banners/im-md-5-780x380.jpg" class="img-fluid"
                                            alt="Banner images">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')

    <style>
        .perfection-dec p {
            text-align: justify;
        }
    </style>

@endsection