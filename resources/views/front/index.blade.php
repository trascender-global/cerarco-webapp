@extends('layouts.master_front')

@section('title') CATÁLOGO DE CERÁMICA ARQUEOLÓGICO DE COLOMBIA @endsection

@section('content')
    <div class="container-fluid mt-3 px-0 mb-3">
        @include('front.carousel')
    </div>
    @include('front.about_us')
    @include('front.banner')
@endsection
