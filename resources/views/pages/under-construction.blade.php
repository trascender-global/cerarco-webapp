@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Coming_Soon')
@endsection

@section('content')

    <div class="home-btn d-none d-sm-block">
        <a href="index" class="text-white"><i class="fas fa-home h2"></i></a>
    </div>

    <div class="my-5 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        @if(false)
                        <div class="row justify-content-center mt-5">
                            <div class="col-sm-4">
                                <div class="maintenance-img">
                                    <img src="{{asset('assets/images/maintenance.png')}}" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                        @endif
                        <h4 class="mt-5">@lang('translation.Coming_Soon')</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <!-- Plugins js -->
    <script src="{{ asset('assets/libs/jquery-countdown/jquery-countdown.min.js') }}"></script>

    <!-- Countdown js-->
    <script src="{{ asset('assets/js/pages/coming-soon.init.js') }}"></script>

@endsection
