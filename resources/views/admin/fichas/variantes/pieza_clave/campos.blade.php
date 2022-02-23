  <div class="form-group row">
      <label for="example-text-input" class="col-md-2 col-form-label">{{ $campo->campo }}</label>
      <div class="col-md-10">
          @include('admin.fichas.variantes.pieza_clave.data_form',['campo'=>$campo, 'dato' => $dato, 'pieza_clave' => $pieza_clave ?? null])
      </div>
  </div>