<div class="header header-sticky">
    <div class="container-fluid container-fluid--cp-60">
        <div class="row align-items-center">
            <div class="col-6 col-md-4">
                @if(Auth::user())
                    <div class="d-none d-lg-flex">
                        <h4 class="welcome-title">Bienvenido, {{ Auth::user()->name }}</h4>
                    </div>
                @endif
                <div class="logo d-block d-lg-none d-flex justify-content-between align-items-center mb-2">
                    <a href="index.html"><img src="{{ asset('assets/images/logos/logo.png') }}" alt="" class="img-fluid p-1"></a>
                    <button type="button" id="mobileSidebarCollapse" class="d-inline d-lg-none btn btn-dark rounded px-3">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-6">
                <div class="col-lg-8 col-md-8 col-8">
                    <div class="header-right-side text-right">
                        <div class="header-left-search d-none d-md-block">
                            <a href="/buscador">
                                <i class="icon-magnifier"></i>
                            </a>
                        </div>
                        <div class="header-right-items d-none d-md-block">
                            <a href="{{ url('/') }}" class="header-cart">
                                <i class="icon-home"></i>
                            </a>
                        </div>
                        @if(!Auth::user())
                            <div class="header-right-items d-none d-md-block">
                                <a data-toggle="modal" data-target="#loginModal">
                                    <i class="icon-user"></i>
                                </a>
                            </div>
                        @else
                            <div class="header-right-items d-none d-md-block">
                                <button type="button" class="logout-btn btn rounded d-none d-md-flex mr-1" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <img src="{{ asset('assets/svg/logout-icon.svg') }}" alt="Logout icon">
                                </button>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        @endif

                        <div class="d-flex d-md-none justify-content-between">
                            <div class="header-right-items">
                                <a href="javascript:void(0)" class="search-icon" id="search-overlay-trigger">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </div>
                            @if(!Auth::user())
                                <div class="header-right-items">
                                    <a data-toggle="modal" data-target="#loginModal">
                                        <i class="icon-user"></i>
                                    </a>
                                </div>
                            @else
                                <div class="header-right-items">
                                    <button type="button" class="logout-btn btn rounded d-flex d-md-none" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <img src="{{ asset('assets/svg/logout-icon.svg') }}" alt="Logout icon">
                                    </button>
                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Login modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex flex-column flex-md-row">
                    <div class="modal-image d-none d-md-flex">
                        <img src="{{ asset('assets/images/logos/logo.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="overflow-hidden modal-form">
                        <div class="modal-header">
                            <h3 class="col-12 modal-title text-center">Iniciar sesión
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </h3>
                        </div>
                        @error('email')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                        <div class="p-2">
                            <form class="form-horizontal" method="POST" action="{{ route('admin.login') }}">
                                @csrf
                                <div class="form-group">
                                    <input name="email" type="text" class="form-control @error('email') is-invalid @enderror autofill-input" @if (old('email')) value="{{ old('email') }}" @endif id="login-email" placeholder="" autocomplete="email" required>
                                    <label for="email" id="email-label">Correo electrónico</label>
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror autofill-input" id="login-password" placeholder="" required>
                                    <label for="password" id="password-label">Ingresa tu contraseña</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mt-4 mb-4 text-center">
                                    <a href="{{ route('admin.password.request') }}" class="text-muted"><i class="mdi mdi-lock mr-1"></i>
                                        ¿Ha olvidado su contraseña?</a>
                                </div>

                                <div id="modal-login-footer">
                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal" data-toggle="modal" data-target="#createModal">Crear cuenta</button>
                                    <button type="submit" class="btn btn-primary">Ingresar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End login modal -->

<!-- Create account modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex flex-column flex-md-row">
                    <div class="modal-image d-none d-md-flex">
                        <img src="{{ asset('assets/images/logos/logo.png') }}" class="card-img-top" alt="...">
                    </div>

                    <div class="overflow-hidden modal-form">
                        <div class="modal-header">
                            <h3 class="col-12 modal-title text-center">Crear una cuenta
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </h3>
                        </div>
                        <div class="p-2">
                            <form method="POST" action="{{ route('admin.register.create') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror autofill-input" value="{{ old('email') }}" id="create-email" name="email" placeholder="" required>
                                    <label for="email" id="email-label">Correo electrónico</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror autofill-input" value="{{ old('name') }}" required name="name" id="name" placeholder="">
                                    <label for="name" id="name-label">Nombre</label>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror autofill-input" name="password" required id="create-password" placeholder="">
                                    <label for="password" id="password-label">Contraseña</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="password-confirm" type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror autofill-input" name="password" required placeholder="">
                                    <label for="password-confirm" id="password-confirm-label">Confirmación de contraseña</label>
                                </div>

                                <div id="modal-create-footer">
                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Prefiero iniciar sesión</button>
                                    <button type="submit" class="btn btn-primary">Registrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End create account modal -->

<style>
    .welcome-title {
        margin-left: -30px;
    }

    .welcome-title::first-letter {
        font-size: 1.5rem;
        font-weight: bold;
        color: #DDB148;
    }

    .logout-btn {
        width: 30px;
        height: 36px;
        background-color: white;
        border: 1px solid #505d69;
        justify-content: center;
        align-items: center;
    }

    .logout-btn:hover {
        border: 1px solid #DDB148;
    }

    .logout-btn:active {
        background-color: #ffffff80;
        border: 1px solid #DDB14880;
    }

    .modal-image {
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        border-top-right-radius: 0;
        border-bottom-left-radius: calc(0.25rem - 1px);
    }

    .modal-form {
        width: 50%;
        border-top-right-radius: 0;
        border-bottom-left-radius: calc(0.25rem - 1px);
    }

    @media (max-width: 768px) {
        .modal-image {
            width: 0%;
        }
        .modal-form {
            width: 100%;
        }
    }

    @media (min-width: 992px) {
        .modal-image {
            width: 50%;
            justify-content: center;
            align-items: center;
        }

        .modal-form {
            width: 50%;
        }
    }

    @media (min-width: 1200px) {
        .modal-image {
            width: 50%;
            justify-content: center;
            align-items: center;
        }

        .modal-form {
            width: 50%;
        }
    }

    .form-group {
        position: relative;
        margin-bottom: 25px;
    }

    .autofill-input:-webkit-autofill,
    .autofill-input:-webkit-autofill:hover,
    .autofill-input:-webkit-autofill:focus,
    .autofill-input:-webkit-autofill:active {
        -webkit-box-shadow: 0 0 0 30px white inset !important;
    }

    #email-label,
    #name-label,
    #password-label,
    #password-confirm-label {
        position: absolute;
        top: 6px;
        left: 13px;
        color: #83879a;
        font-weight: lighter;
        cursor: text;
        transition: 0.2s ease-in-out;
        pointer-events: none;
    }

    #login-email:focus~#email-label,
    #login-email:not(:focus):valid~#email-label,
    #create-email:focus~#email-label,
    #create-email:not(:focus):valid~#email-label,
    #name:focus~#name-label,
    #name:not(:focus):valid~#name-label,
    #login-password:focus~#password-label,
    #login-password:not(:focus):valid~#password-label,
    #create-password:focus~#password-label,
    #create-password:not(:focus):valid~#password-label,
    #password-confirm:focus~#password-confirm-label,
    #password-confirm:not(:focus):valid~#password-confirm-label {
        color: #000000;
        font-weight: bolder;
        font-size: 11px;
        padding-left: 4px;
        padding-right: 4px;
        top: -10px;
        left: 10px;
        background-color: #fff;
        pointer-events: none;
    }

    #modal-login-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 15px;
        border-top: 1px solid #eff2f7;
        border-bottom-right-radius: calc(0.3rem - 1px);
        border-bottom-left-radius: calc(0.3rem - 1px);
    }

    #modal-create-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 40px;
        padding-top: 15px;
        border-top: 1px solid #eff2f7;
        border-bottom-right-radius: calc(0.3rem - 1px);
        border-bottom-left-radius: calc(0.3rem - 1px);
    }
</style>