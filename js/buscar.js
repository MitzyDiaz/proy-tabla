$(obtener_registros());

function obtener_registros(proyecto) {
    $.ajax({
            url: 'tables.php',
            type: 'POST',
            dataType: 'html',
            data: { proyecto: proyecto },
        })
        .done(function(resultado) {
            $("#tabla_resultados").html(resultado);
        })
}
$(document).on('keyup', '#termino', function() {
    var valorBusqueda = $(this).val();
    if (valorBusqueda != "") {
        obtener_registros(valorBusqueda);
    } else {
        obtener_registros();
    }
});