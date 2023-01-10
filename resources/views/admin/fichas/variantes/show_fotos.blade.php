<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button style="border: none;margin: 5px;" class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Fotografias</button>
    </li>
    <li class="nav-item" role="presentation">
      <button style="border: none;margin: 5px;" class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Dibujos</button>
    </li>
    <li class="nav-item" role="presentation">
      <button style="
      border: none;
      margin: 5px;
  " class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Mapa</button>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        @include('admin.fichas.variantes.pieza_clave.fotografias_pieza_clave', [
        'pieza_clave' => $pieza_clave,
    ])
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        @include('admin.fichas.variantes.pieza_clave.dibujos', [
        'pieza' => $pieza_clave,
    ])
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        @include('admin.fichas.variantes.pieza_clave.mapa', [
        'pieza_clave' => $pieza_clave,
    ])
    </div>
</div>