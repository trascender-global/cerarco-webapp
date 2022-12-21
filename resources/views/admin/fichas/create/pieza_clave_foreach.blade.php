<div class="col-lg-12 pr-0 pl-0">
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                @include('admin.fichas.create.tab_header',['index'=>1])
                @include('admin.fichas.create.tab_header',['index'=>2])
                @include('admin.fichas.create.tab_header',['index'=>3])
            </ul>

            <div class="tab-content p-3 text-muted">
                @include('admin.fichas.create.tab_panel',['index'=>1])
                @include('admin.fichas.create.tab_panel',['index'=>2])
                @include('admin.fichas.create.tab_panel',['index'=>3])
            </div>
        </div>
    </div>
</div>