<li class="nav-item">
    <a class="nav-link   @if (isset($loop)) @if ($loop->first) 
            active @endif
    @endif
         pieza_clave_link" data-id="{{$pieza_clave->id}}"
        data-toggle="tab" href="#pieza_clave_data_{{ $pieza_clave->id }}" role="tab"
        style="
        display: flex;
         justify-content: center;">
        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
        <span class="d-none d-sm-block">{{ $pieza_clave->pieza_clave }}</span>
        @if (!empty($pieza_clave->dibujo))
            <img src="{{ $pieza_clave->dibujo }}" alt="" class="avatar-sm">
        @endif
        <span class="btn-delete-pieza"
            style="
        background: red;
        cursor: pointer;
        padding: 0px 4px;
        border-radius: 50%;
        font-size: 9px;
        color: white;
        margin-top: -16px;
        align-self: center;
        display: none"
            data-id="{{ $pieza_clave->id }}" id="title_pieza_clave_delete_{{ $pieza_clave->id }}">
            X
        </span>
    </a>
</li>
