@extends('layouts.master')

@section('title') Nuevo Menu @endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') Nuevo Menu@endslot
        @slot('li_1') Glosario @endslot
        @slot('li_2') Nuevo Menu @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header mb-4 ">
                    <div class="card-title">
                        @if(is_null($menu->getAttribute('id')))
                            Nuevo Menu Titulo
                        @else
                            SubMenu para - {{ $menu->getAttribute('nombre') }}
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route( 'admin.glosario.salvar_nuevo_menu', compact('menu') ) }}"
                            method="post">
                        @csrf
                        <div class="mb-3 row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                                            value="{{ old('nombre') }}" name="nombre" id="nombre">
                                    @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <button type="submit" class="btn btn-primary w-md">Guardar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection