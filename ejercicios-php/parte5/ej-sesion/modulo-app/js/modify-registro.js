function completarFormAuto(idAuto) {
    $.ajax({
        type: "get",
        url: "php/get-json-auto.php",
        data: {
            IdAutoMod: idAuto
        },
        success: function (respuestaDelServer) {
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


$(document).ready(function () {
    var formModi = document.getElementById("form-modify");

    var marcaMod = document.getElementById("inputMarca-modal-modif");
    var modeloMod = document.getElementById("modeloMod");
    var descripMod = document.getElementById("descripMod");
    var anoMod = document.getElementById("anoMod");
    var valorMod = document.getElementById("valorMod");


    var btnEnviarModi = document.getElementById("enviarFormModify");

    btnEnviarModi.disabled = true;




    formModi.onkeyup = function () {


        if (marcaMod.value !== 0 && modeloMod.value !== "" && descripMod.value !== "" && anoMod.value !== "" && valorMod.value > 0) {
            btnEnviarModi.disabled = false;

        } else {
            btnEnviarModi.disabled = true;

        }
    };




});
