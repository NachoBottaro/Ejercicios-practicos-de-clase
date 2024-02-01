// Función de eliminación de un auto
function eliminarAuto(idAutoBaja) {
    if (confirm("¿Está seguro de eliminar el auto?")) {
        var objAjax = $.ajax({
            type: "post",
            url: "php/baja-registro.php",
            data: {
                IdAutoBaja: idAutoBaja
            },
            success: function (respuestaDelServer) {
                alert(respuestaDelServer);
                $("#ventanaServer").removeClass('modal-hidden');
                $('#serverResponseDiv').empty();
                $('#serverResponseDiv').text(respuestaDelServer);
            }
        })
    }
}