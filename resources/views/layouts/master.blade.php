<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title')  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    @include('layouts.head')
</head>

@section('body')
    <body data-sidebar="dark">
@show
    <input id="url_global_site" value="{{url('')}}/" type="hidden" />
    <div id="layout-wrapper">
        @include('layouts.topbar')
        @include('layouts.sidebar')
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @include('errors.mensajes')
                    @yield('content')
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
    @if(false)
    @include('layouts.right-sidebar')
    @endif
    <div class="rightbar-overlay"></div>

    @include('layouts.footer-script')
</body>

</html>
