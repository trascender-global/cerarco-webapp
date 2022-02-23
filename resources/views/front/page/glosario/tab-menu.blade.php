<li class="nav-item waves-effect waves-light">
    <a class="nav-link btn-outline-gold button-tab @if($firstLoop) active @endif" data-toggle="tab" href="#tab-{{$menu->id}}" role="tab">
        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
        <span class="d-none d-sm-block">{{ $menu->nombre }}</span>
    </a>
</li>