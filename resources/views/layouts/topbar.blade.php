<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="#" class="logo logo-">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo.png')}}" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo.png')}}" alt="" height="70">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

        </div>

        <div class="d-flex">

            @if(false)
            <div class="dropdown d-none d-sm-inline-block">
                <button type="button" class="btn header-item waves-effect"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @switch(Session::get('lang'))
                    @case('ru')
                    <img src="{{ asset('assets/images/flags/russia.jpg')}}" alt="Header Language" height="16"> <span class="align-middle">Russian</span>
                    @break
                    @case('it')
                    <img src="{{ asset('assets/images/flags/italy.jpg')}}" alt="Header Language" height="16"> <span class="align-middle">Italian</span>
                    @break
                    @case('de')
                    <img src="{{ asset('assets/images/flags/germany.jpg')}}" alt="Header Language" height="16"> <span class="align-middle">German</span>
                    @break
                    @case('es')
                    <img src="{{ asset('assets/images/flags/spain.jpg')}}" alt="Header Language" height="16"> <span class="align-middle">Spanish</span>
                    @break
                    @default
                    <img src="{{ asset('assets/images/flags/us.jpg')}}" alt="Header Language" height="16"> <span class="align-middle">English</span>
                    @endswitch
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="{{ url('index/en') }}" class="dropdown-item notify-item">
                        <img src="{{ asset('assets/images/flags/us.jpg')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">English</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/es') }}" class="dropdown-item notify-item">
                        <img src="{{ asset('assets/images/flags/spain.jpg')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/de') }}" class="dropdown-item notify-item">
                        <img src="{{ asset('assets/images/flags/germany.jpg')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/it') }}" class="dropdown-item notify-item">
                        <img src="{{ asset('assets/images/flags/italy.jpg')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                    </a>
                    dropdown d-none d-lg-inline-block ml-1
                    <!-- item-->
                    <a href="{{ url('index/ru') }}" class="dropdown-item notify-item">
                        <img src="{{ asset('assets/images/flags/russia.jpg')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>
            @endif

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-none d-xl-inline-block ml-1">{{ucfirst(Auth::user()->name)}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item text-danger" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> @lang('translation.Logout') </a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>
