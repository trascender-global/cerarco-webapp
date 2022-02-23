@extends('layouts.master')

@section('title') {{ \Illuminate\Support\Str::upper($titulo) }} @endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') {{ $titulo }} @endslot
        @slot('li_1') Contenido @endslot
        @slot('li_2') {{ $titulo }} @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route( $ruta , ['contenido' => $contenido->id ?? '' ] ) }}" method="post">
                        @csrf
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Titulo</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $contenido->titulo ?? $titulo }}" name="titulo">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Contenido</label>
                            <div class="col-md-10">
                                <textarea id="elm1" name="contenido">{!! $contenido->contenido ?? '' !!}</textarea>
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

@section('script')
    <script>
        var urlTinymceUpdateImage = '{{ route('admin.image.upload') }}';

        @if(isset($contenido))
        var dropzone = $("#dropzone-imagen").dropzone({
            url: "{{ route( 'admin.contenido.subir_imagen' , ['contenido' => $contenido->id ?? '' ] ) }}",
            headers: {
                'x-csrf-token': CSRF_TOKEN,
            },
            timeout: 60000,
        });
        @endif

    </script>
    <script src="{{ asset('assets/libs/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-editor.init.js') }}"></script>
@endsection

@section('head_script')
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
@endsection

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/dropzone.css" rel="stylesheet" type="text/css"/>
@endsection