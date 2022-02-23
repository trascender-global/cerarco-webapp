@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Register')
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
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Registro</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="p-2">
                                    <form method="POST" class="form-horizontal mt-4" action="{{ route('admin.register.create') }}"
                                            enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="useremail">Correo Electronico</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ old('email') }}" id="useremail" name="email" required
                                                    placeholder="Ingrese correo electronico">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="username">Nombre</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                value="{{ old('name') }}" required name="name" id="username"
                                                placeholder="Enter username">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="userpassword">Contraseña</label>
                                            <input type="password"
                                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                                    required id="userpassword" placeholder="Ingrese Contraseña">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="userpassword">Confirmar Contraseña</label>
                                            <input id="password-confirm" type="password" name="password_confirmation"
                                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                                    required placeholder="Ingrese Contraseña">
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit"> Registro </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="mt-5 text-center">
                            <p>
                                <a href="{{route('admin.login')}}" class="font-weight-medium text-primary">Entrar aqui</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection
