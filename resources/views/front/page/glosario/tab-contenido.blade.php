<div class="tab-pane @if($first === true) active @endif " id="tab-{{$menu->id}}" role="tabpanel">
    <p class="mb-0">
        @if($contenidos->isEmpty())
            {!! $menu->contenido->contenido ?? '' !!}
        @else
            @foreach($contenidos as $contenido)
                {{ ($contenido->glosario_menu_id === $menu->id) ? $contenido->contenido : '' }}
            @endforeach
        @endif
    </p>
</div>