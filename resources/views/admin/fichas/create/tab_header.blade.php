<li class="nav-item">
    <a class="nav-link @if($index==1) active @endif" style="
    display: flex;
    justify-content: center;" data-toggle="tab" href="#pieza_clave_data_{{$index}}" role="tab">
        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
        <span class="d-none d-sm-block" id="title_pieza_clave_{{$index}}">
            -PC{{$index}}
        </span>
        <span class="btn-delete-pieza" style="
        background: red;
        cursor: pointer;
        padding: 0px 4px;
        border-radius: 50%;
        font-size: 9px;
        color: white;
        margin-top: -16px;
        align-self: center;
        display: none"  data-id="{{$index}}" id="title_pieza_clave_delete_{{$index}}">
            X
        </span>
            {{-- <img id="dibujo_pieza_clave_{{$index}}" src="" alt="" class="avatar-sm" /> --}}
    </a>
</li>