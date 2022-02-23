@extends('layouts.master-without-nav')

@section('title')
Recuperar Password
@endsection

@section('body')
<body>
@endsection

@section('content')
    <div class="home-btn d-none d-sm-block">
        <a href="{{route('front.index')}}" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-soft-primary">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary"> Recuperar Password</h5>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="/{{asset('assets/images/profile-img.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="p-2">
                            <form class="form-horizontal" method="POST" action="{{ route('admin.password.email') }}">
                                @csrf
                                    <div class="form-group">
                                        <label for="email">Correo Electronico</label>
                                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" @if(old('email')) value="{{ old('email') }}" @endif  id="email" placeholder="Correo Electronico" autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-12 text-right">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Recuperar</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p> <a href="{{route('admin.login')}}" class="font-weight-medium text-primary">Entrar aqui</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
