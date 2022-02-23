@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Login')
@endsection

@section('body')

    <body>
    @endsection

    @section('content')
        <div class="home-btn d-none d-sm-block">
            <a href="{{ route('front.index') }}" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="card-body pt-0">
                                @error('email')
                                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                @enderror
                                <div class="p-2">
                                    <form class="form-horizontal" method="POST" action="{{ route('admin.login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="username">@lang('validation.attributes.email')</label>
                                            <input name="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" @if (old('email')) value="{{ old('email') }}" @endif id="username"
                                            placeholder="Enter username" autocomplete="email" autofocus>
                                        </div>

                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password" name="password"
                                                class="form-control  @error('password') is-invalid @enderror"
                                                id="userpassword" placeholder="Enter password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        </div>

                                        <div class="mt-3">
                                            <button class="btn btn-primary btn-block waves-effect waves-light"
                                                type="submit">Entrar</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <a href="{{ route('admin.password.request') }}" class="text-muted"><i class="mdi mdi-lock mr-1"></i>
                                                Olvido la contraseña?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="mt-5 text-center">
                            <p> <a href="{{route('admin.login')}}" class="font-weight-medium text-primary">Entrar aqui</a></p>
                            <p><a href="{{route('admin.register')}}" class="font-weight-medium text-primary">Registrese</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
