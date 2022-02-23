@extends('layouts.master')

@section('title') @lang('translation.UploadFile') @endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') Subir Ficha @endslot
        @slot('li_1') Fichas @endslot
        @slot('li_2') Subir Ficha @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">

                    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.ficha.subir_archivo_ficha') }}" id="form_subir">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-ficha-input" class="col-sm-3 col-form-label">Ficha</label>
                            <div class="col-sm-9">
                                <input type="file" name="ficha[]" class="form-control" id="horizontal-ficha-input" multiple>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md" onclick=" $('#form_subir').submit(); $(this).attr('disabled', true) ">Subir</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
