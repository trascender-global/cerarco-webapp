<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">
    @include('layouts.head_front')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
</head>
<body>
<header>
    <div class="header-gov">
        <a href="https://www.gov.co/home/" target="_blank">
            <div class="container">
                <div class="row offset-md-4t">
                    <img alt="mincultura" src="{{ asset('assets/images/logos/mincultura.png') }}" style="width:180px;height:39px;">
                </div>
            </div>
        </a>
    </div>
</header>
<div class="wrapper">
    <nav id="sidebar">
        @include('layouts.sidebar_front')
    </nav>
    <div id="content" class="container-fluid">
        @include('layouts.topbar_front')
        @include('partials.controls')
        <div class="page-content">
            @yield('content')
        </div>
    </div>
</div>

@include('layouts.footer_front')

@include('layouts.footer-script_front')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@yield('scripts')

<script>
    $('document').ready(function () {
        $('#mobileSidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            let texto = ($('#sidebar').attr('class') === 'active')
                ? 'Mostrar barra de navegación'
                : 'Esconder barra de navegación';
            $('#sidebarCollapseSpan').html(texto)
        });
        $('#toggle-contrast').on('click', function () {
            $('body').toggleClass('high-contrast');
        });
        $('#toggle-size').on('click', function () {
            $('body').toggleClass('big-font');
        });
    });
</script>
</body>
</html>
