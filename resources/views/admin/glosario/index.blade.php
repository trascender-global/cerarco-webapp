@extends('layouts.master')

@section('title') Listado Glosario @endsection

@section('css')
    {{-- DataTables --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/datatables/datatables.min.css') }}">
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') Listado Glosario @endslot
        @slot('li_1') Glosario @endslot
        @slot('li_2') Menus Glosario @endslot
    @endcomponent

    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Glosario</h4>
                <table id="datatable" class="table table-bordered table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Menu</th>
                    </tr>
                    <tr>
                        <a class="btn btn-success btn-rounded waves-effect waves-light" href="{{ route( 'admin.glosario.nuevo_menu') }}"><i class="mdi mdi-plus d-block font-size-16"></i></a>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($menus as $menu)
                        <tr>
                            <td >
                                <input type="text" class="form-control" data-id="{{ $menu->id }}" value="{{ $menu->nombre }}"/>
                            </td>
                            <td >
                                <a class="btn btn-success btn-rounded waves-effect waves-light" href="{{ route( 'admin.glosario.nuevo_menu', compact('menu')) }}"><i class="mdi mdi-plus d-block font-size-16"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <table class="table mb-0">
                                    @foreach($menu->subMenus as $subMenu)
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" data-id="{{ $subMenu->id }}" value="{{ $subMenu->nombre }}"/>
                                            </td>
                                            <td>
                                                @if($subMenu->titulo !== true )
                                                    <a class="btn btn-info btn-rounded waves-effect waves-light"
                                                            href="{{ route( 'admin.glosario.editar_menu' , ['menu' => $subMenu ] ) }}">
                                                        <i class="mdi mdi-pencil d-block font-size-16"></i>
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                </table>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection

@section('script')

    <script src="{{ asset('assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
    <script src="{{ asset('assets/js/glosario_admin.min.js') }}"></script>

    <script>
        const urlGlosario = '{{ route('admin.glosario.salvar_menu_titulo') }}';
    </script>

@endsection