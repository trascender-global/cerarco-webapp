@extends('layouts.master')

@section('title') Editar Menu @endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') Editar Menu - {{ $menu->nombre }} @endslot
        @slot('li_1') Glosario @endslot
        @slot('li_2') Editar Menu - {{ $menu->nombre }}  @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route( 'admin.glosario.salvar_menu' , ['contenido' => $menu->contenido ] ) }}"
                          method="post">
                        @csrf
                        <textarea id="elm1" name="contenido">{!! $menu->contenido->contenido !!}</textarea>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Guardar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <script>
        var urlTinymceUpdateImage = '{{ route('admin.image.upload') }}';
    </script>
    <script src="{{ asset('assets/libs/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-editor.init.js') }}"></script>

@endsection