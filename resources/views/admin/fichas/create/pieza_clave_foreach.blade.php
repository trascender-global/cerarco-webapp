<div class="col-lg-12 pr-0 pl-0">
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-custom nav-justified" id="content_tab_header" role="tablist">
                @include('admin.fichas.create.tab_header',['index'=>1])
            </ul>

            <form class="tab-content p-3 text-muted" id="content_tab_body">
                @csrf
                @include('admin.fichas.create.tab_panel',['index'=>1])
            </form>
        </div>
    </div>
</div>