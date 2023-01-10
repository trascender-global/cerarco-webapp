<div class="col-lg-12 pr-0 pl-0">
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-custom nav-justified" id="content_tab_header" role="tablist">
                @foreach ($piezas_clave as $pieza_clave)
                    @include('admin.fichas.variantes.tab_header')
                @endforeach
            </ul>

            <div class="tab-content p-3 text-muted" id="content_tab_body">
                @foreach ($piezas_clave as  $pieza_clave)
                    @include('admin.fichas.variantes.tab_panel')
                @endforeach
            </div>
        </div>
    </div>
</div>


