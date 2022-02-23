@extends('layouts.master')

@section('title') Listado Usuarios @endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') Crear Usuarios @endslot
        @slot('li_1') Usuarios @endslot
        @slot('li_2') Crear Usuarios @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            @if ($errors->any())
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-danger">
                            <strong>Se presentaron varios errores</strong><br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <form action="@if(isset($user)){{ route('admin.usuarios.actualizar', compact('user')) }}@else{{ route('admin.usuarios.salvar') }}@endif" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-check mb-3">
                                    <div class="mb-3">
                                        <label class="form-check-label gris" for="">Nombre</label>
                                        <input class="form-control  @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') ?? ($user->name ?? '') }}"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-check-label gris" for="">Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? ($user->email ?? '') }}"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-check-label gris" for="">Rol</label>
                                        <select class="form-control @error('rol') is-invalid @enderror" name="rol">
                                            <option value="">Seleccione el rol</option>
                                            @foreach(\App\Models\Role::noSuperAdmin()->get() as $rol)
                                                <option value="{{ $rol->id }}" @if( (old('rol') ?? ($user->role_id ?? '')) == $rol->id ) selected @endif >{{ $rol->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-check-label gris" for="">Password</label>
                                        <input class="form-control" type="password" name="password"/>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-info btn-block">@if(isset($user))Editar @else Crear @endif</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection