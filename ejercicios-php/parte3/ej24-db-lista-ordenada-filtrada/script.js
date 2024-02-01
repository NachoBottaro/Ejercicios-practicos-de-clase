$(document).ready(function () {
    $("#inputMarca").empty();
    $.ajax({
        url: 'salida-json-marcas.php',
        type: 'POST',

        success: function (respuesta) {
            alert(respuesta);
            
            var objOption0 = document.createElement("option");
            objOption0.setAttribute("value", "0");
            objOption0.innerHTML = "Seleccione una Marca";
            document.getElementById("inputMarca").appendChild(objOption0);

            objJson = JSON.parse(respuesta);
            objJson.marcas.forEach(function (marca) {
                var objOpcion = document.createElement("option");
                objOpcion.setAttribute("value", marca.descripcion);
                objOpcion.innerHTML = marca.descripcion;
                document.getElementById("inputMarca").appendChild(objOpcion);
            })
        }
    });

    $("#btnAgregarDatos").click(function () {
        $("#contenido-tbody").empty();
        $("#contenido-tbody").html("<h2>Obteniendo Datos...</h2>");

        $.ajax({
            type: 'get',
            url: 'salida-json-autos.php',
            data: {
                inputOrdenar: $("#inputOrdenar").val(),
                inputId: $("#inputId").val(),
                inputMarca: $("#inputMarca").val(),
                inputModelo: $("#inputModelo").val(),
                inputAno: $("#inputAno").val(),
                inputPrecio: $("#inputPrecio").val(),
                inputDescripcion: $("#inputDescripcion").val(),
             
            },

            success: function (respuesta) {
                $("#contenido-tbody").empty();
                alert(respuesta);
                objJson = JSON.parse(respuesta);
                objJson.autos.forEach(function (auto) {
                    const objTr = document.createElement("tr");
                    for (var propiedad in auto) {
                        var objTd = document.createElement("td");
                        objTd.classList.add("td-container");
                        objTd.textContent = auto[propiedad];
                        objTr.appendChild(objTd);
                    }
                    $("#contenido-tbody").append(objTr);
                })
            }
        });
    });

    $("#btnVaciarDatos").click(function () {
        $("#contenido-tbody").empty();

    });


    $("#btnLimpiarFiltros").click(function () {
        $("#inputId").val("");
        $("#inputMarca").val("0");
        $("#inputModelo").val("");
        $("#inputAno").val("");
        $("#inputPrecio").val("");
        $("#inputDescripcion").val("");
      
        $("#inputOrdenar").val("");

    
    });


});