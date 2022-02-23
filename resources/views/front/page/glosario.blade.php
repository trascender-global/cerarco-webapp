@extends('layouts.master_front')

@section('title') CATÁLOGO DE CERÁMICA ARQUEOLÓGICO DE COLOMBIA @endsection

@section('content')

    <div class="checkout-main-area section-space--ptb_90 bg-white">
        <div class=" headrow">
            <div class="col-lg-12">
                <h2 class="goldentitle">GLOSARIO</h2>
            </div>
        </div>

        <div class="row mry-10">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                            <div class="menus">
                                @foreach($menus as $menu)
                                <a class="btn btn-outline-gold waves-effect waves-light btn-lg mb-10 button-glosario @if($loop->first) button-glosario-active @endif"
                                        href="#" data-slug="{{ $menu->id }}">{{ $menu->nombre }}</a>
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="customer-zone mb-30">
                    <div class="card fondo-trans ">
                        <div class="card-body">
                            <div class="card dorado">
                                @foreach($menus as $menu)
                                    <div class="card-body tab-data @if (!$loop->first) tab-data-hide @endif" id="tab-{{ $menu->id }}" role="tablist">

                                    <h4 class="card-title goldentitle">{{ $menu->nombre }}</h4>
                                    <p class="card-title-desc"></p>

                                    <ul class="nav nav-pills nav-justified" role="tablist">
                                        @foreach($menu->subMenus as $subMenu)
                                            @include('front.page.glosario.tab-menu',['menu' => $subMenu, 'firstLoop' => $loop->first ])
                                        @endforeach
                                    </ul>
                                    <div class="tab-content p-3 text-muted">
                                        @foreach($menu->subMenus as $menu)
                                            @include('front.page.glosario.tab-contenido',['menu' => $menu, 'contenidos' => $contenidos, 'first' => $loop->first ])
                                        @endforeach
                                    </div>

                                </div>
                                @endforeach
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $('.button-glosario').click(function(){
            $('.tab-data').addClass('tab-data-hide');
            $('#tab-'+$(this).data('slug')).removeClass('tab-data-hide');
            $('.button-glosario').removeClass('button-glosario-active')
            $(this).addClass('button-glosario-active')
        });
    </script>
@endsection

@section('css')
    <style>
        div.menus a {
            overflow: hidden
        }

        .tab-data-hide {
            display: none
        }

        .button-tab {
            height: 100%
        }

        .button-glosario-active {
            background: #ddb148!important;
            color: #666!important;
            text-align: left!important;
            font-weight: 700!important
        }
    </style>
@endsection