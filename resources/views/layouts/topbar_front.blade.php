<div class="header header-sticky">
    <div class="container-fluid container-fluid--cp-60">
        <div class="row align-items-center">
            <div class="col-6 col-md-4">
                <div class="logo d-block d-lg-none d-flex justify-content-between align-items-center mb-2">
                    <a href="index.html"><img src="{{ asset('assets/images/logos/logo.png') }}" alt="" class="img-fluid p-1"></a>
                    <button type="button" id="mobileSidebarCollapse" class="d-inline d-lg-none btn btn-dark rounded px-3">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-6">
            <div class="col-lg-8 col-md-8 col-6">
                        <div class="header-right-side text-right">
                            <div class="header-left-search d-none d-md-block">
                                <a href="/buscador">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </div>
                            <div class="header-right-items d-none d-md-block">
                                <a href="{{route('admin.login')}}" >
                                    <i class="icon-user"></i>
                                </a>
                            </div>
                            <div class="header-right-items d-none d-md-block">
                                <a href="{{ url('/') }}" class="header-cart">
                                    <i class="icon-home"></i>
                                </a>
                            </div>

                            <div class="header-right-items d-block d-md-none">
                                <a href="javascript:void(0)" class="search-icon" id="search-overlay-trigger">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </div>
                        </div>
                    </div>
        </div>
        </div>
    </div>
</div>
