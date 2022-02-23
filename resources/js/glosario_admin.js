$('#datatable input').keyup(function () {
    $.post(urlGlosario + '/' + $(this).data('id'),
        {titulo: $(this).val()}, function () {})
})
