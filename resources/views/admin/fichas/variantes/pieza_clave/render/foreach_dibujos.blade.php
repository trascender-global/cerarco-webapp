<div id="dibujos_draggable" class="row dibujos_draggable" style="display: flex">
    @foreach ($pieza_clave->dibujos()->piezaClave($pieza_clave->id)->orderBy('posicion')->get() as $foto)
        <div id="pieza_clave_dibujo_content_{{ $foto->id }}"
            style="margin: 5px;width: 90px;position: relative;padding: 0px 10px;text-align: center;background: white;box-shadow: 1px 1px 15px -5px black;border-radius: 10px;"
            data-posicion="{{ $foto->posicion }}" class="dibujo_foto_content_{{ $pieza_clave->id }}"
            data-id="{{ $foto->id }}">
            <img class="img move" width="70" height="70" src="{{ $foto->foto }}" data-holder-rendered="true" />
            <button type="button" style="position: absolute;right: -5px;"
                class="btn btn-light p-0 avatar-xs rounded-circle alert-danger borrar_dibujo_pieza_clave "
                data-foto="{{ $foto->id }}">
                <span class="avatar-title  bg-transparent text-reset"><i class="bx bx-trash-alt"></i></span>
            </button>
        </div>
    @endforeach
</div>
<div style="width: 85px;text-align: center;margin: 5px;">
    <input style="display: none" type="file" accept="image/*" data-id="{{ $pieza_clave->id }}" multiple
        id="dibujo_foto_input_{{ $pieza_clave->id }}" class="form-control input_foto_dibujo">
    <img width="70" height="70" style="opacity: 0.6;cursor: pointer;" class="btn_add_foto_dibujo"
        data-id="{{ $pieza_clave->id }}"
        src="data:image/png;base64,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" />
</div>


<script>
    function updateOrdenDibujos() {
        var orden = [];
        $("#dibujos_draggable div").each(function(index, element) {
            orden.push({
                "id": $(this).data('id'),
                'index': index
            })
        });
        $.ajax({
            type: 'POST',
            url: "{{ route('admin.ficha.mover_dibujos') }}",
            data: {
                '_token': $('input[name=_token]').val(),
                'orden': orden
            },
            success: function(data) {

            },
            error: function(xhr, status) {},
        });
    }
    $("#dibujos_draggable").sortable({
        handle: '.move',
        update: function(event, ui) {
            updateOrdenDibujos()
            console.log('update')
        }
    });
    $("#dibujos_draggable").disableSelection();
</script>
