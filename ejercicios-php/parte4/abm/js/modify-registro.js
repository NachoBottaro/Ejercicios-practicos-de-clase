function completarFormAuto(idAuto) {
    $.ajax({
        type: "get",
        url: "php/get-json-auto.php",
        data: {
            IdAutoMod: idAuto
        },
        success: function(respuestaDelServer) {
            // alert(respuestaDelServer);
            var objJson = JSON.parse(respuestaDelServer);
            $('#idModAuto').val(objJson.id);
            $('#inputMarca-modal-modif').val(objJson.marca);
            $('#modeloMod').val(objJson.modelo);
            $('#descripMod').val(objJson.descripcion);
            $('#anoMod').val(objJson.anio);
            $('#valorMod').val(objJson.valor);
            // $('#pdfMod').val(objJson.archivo_binario);   

        }

    });
}

// function todoListoParaModify(){
//     if(document.getElementById('form-modify').checkValidity()){
//         $('#enviarFormModify').prop('disabled', false);
//     }
//     else {
//         $('#enviarFormModify').prop('disabled', true);
//     }
// }