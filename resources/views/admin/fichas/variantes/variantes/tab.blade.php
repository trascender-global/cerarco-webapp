<a class="nav-link @if($first) active @endif"
   id="datos-variante-tab-{{ $variante }}-{{ $modelo }}-{{ \Illuminate\Support\Str::kebab($tab) }}" data-toggle="pill"
   href="#datos-variante-{{ $variante }}-{{ $modelo }}-{{ \Illuminate\Support\Str::kebab($tab) }}"
   role="tab" aria-controls="datos-variante-{{ $variante }}-{{ \Illuminate\Support\Str::kebab($tab) }}"
   aria-selected="true">
    <p class="font-weight-bold mt-1 mb-1">{{ !empty(trim($tab)) ? $tab : '---' }}</p>
</a>