$(document).ready(function () {
    // $("#ventanaAltaRegistro").css("visibility", "hidden");
    // $("#ventanaModif").css("visibility", "hidden");
    // $("#ventanaServer").css("visibility", "hidden");

    // agrego las opciones en el select
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
                inputDescripcion: $("#inputDescripcion").val()

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
                        objTd.id = propiedad;


                        // si no toma como valor al archivo binario, le colocara el valor del
                        // valor que tome
                        objTd.textContent = auto[propiedad];

                        objTr.appendChild(objTd);
                    }

                    // agrego el boton para ver el pdf
                    var objTdVerPdf = document.createElement("td");
                    objTdVerPdf.classList.add("td-container", "botton-tabla");


                    var objBottonPdf = document.createElement("button");
                    objBottonPdf.classList.add("btn", "btn-primary");
                    objBottonPdf.textContent = "PDF";
                    // objBottonPdf.id = auto.archivo_binario;

                    objBottonPdf.onclick = function () {
                        lecturaArchivo(auto.id);
                    }

                    objTdVerPdf.appendChild(objBottonPdf);

                    objTr.appendChild(objTdVerPdf);


                    // creo los td para agregar los botones de modificar y eliminar
                    var objTdModi = document.createElement("td");
                    var objTdBaja = document.createElement("td");

                    // agrego estilo de css a ambos td
                    objTdModi.classList.add("td-container", "botton-tabla");
                    objTdBaja.classList.add("td-container", "botton-tabla");

                    objTdModi.id = "columna-btn-Modi";
                    objTdBaja.id = "columna-btn-Baja";

                    // creo los botones de modificar y eliminar
                    var objBottonModi = document.createElement("button");
                    var objBottonBaja = document.createElement("button");

                    // agrego estilo de css a ambos botones
                    objBottonModi.classList.add("btn", "btn-warning");
                    objBottonBaja.classList.add("btn", "btn-danger");

                    // asigno los id
                    objBottonModi.id = "btnModiRegistro";
                    objBottonBaja.id = "btnBajaRegistro";

                    // asigno a los botones el atributo idAuto  
                    objBottonModi.setAttribute("idAuto", auto.id);
                    objBottonBaja.setAttribute("idAuto", auto.id);


                    // les asigno a los bottones el texto respectivo a cada uno para 
                    // que aparezca cuando se muestra la tabla
                    objBottonModi.textContent = "Modificar";
                    objBottonBaja.textContent = "Eliminar";

                    objBottonModi.onclick = function () {
                        alert(auto.id);

                        $("#footer").addClass("contenedor-pasivo");
                        $("#header").addClass("contenedor-pasivo");
                        $("#main-conteiner").addClass("contenedor-pasivo");
                        $("#ventanaModif").removeClass("modal-hidden");
                        fillSelectModi();
                        $('#enviarFormModify').prop('disabled', false);
                        completarFormAuto(auto.id);
                        // todoListoParaModify()

                    };

                    objBottonBaja.onclick = function () {
                        alert(auto.id);
                        eliminarAuto(auto.id);
                    };

                    objTdModi.appendChild(objBottonModi);
                    objTdBaja.appendChild(objBottonBaja);

                    objTr.appendChild(objTdModi);
                    objTr.appendChild(objTdBaja);

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
        $("#inputPdf").val("");
        $("#inputOrdenar").val("");


    });

    // cuando se hace click en alta registro se habilita el form abm de alta registro
    $("#btnAltaRegistro").click(function () {
        $("#footer").addClass("contenedor-pasivo");
        $("#header").addClass("contenedor-pasivo");
        $("#main-conteiner").addClass("contenedor-pasivo");
        fillSelectAlta();

        $('#newMarca').val(0);
        $('#newModelo').val("");
        $('#newDescrip').val("");
        $('#newAno').val("");
        $('#newValor').val(0);

        $("#ventanaAltaRegistro").removeClass("modal-hidden");
    });

    // cerrar ventana alta registro
    $("#btnCloseModalAlta").click(function () {
        $("#footer").removeClass("contenedor-pasivo");
        $("#header").removeClass("contenedor-pasivo");
        $("#main-conteiner").removeClass("contenedor-pasivo");
        $("#ventanaAltaRegistro").addClass("modal-hidden");
    });

    $('#enviarFormModify').click(function (event) {
        event.preventDefault();
        if (confirm("¿Estás seguro de modificar el artículo?")) {
            

          
            var objAjax = $.ajax({
                type: "post",
                url: "php/modify-registro.php",
               
                data: {
                    id: document.getElementById('idModAuto').value,
                    marca: document.getElementById('inputMarca-modal-modif').value,
                    modelo: document.getElementById('modeloMod').value,
                    descripcion: document.getElementById('descripMod').value,
                    ano: document.getElementById('anoMod').value,
                    valor: document.getElementById('valorMod').value,
                    // pdf: document.getElementById('pdfMod').value

                },
                success: function (respuestaDelServer) {
                    $("#ventanaServer").removeClass('modal-hidden');
                    $('#serverResponseDiv').empty();
                    $('#serverResponseDiv').text(respuestaDelServer);
                }

            });

        }
    });

 
    

    $('#closeModifyRegisterDiv').click(function () {
        $("#footer").removeClass("contenedor-pasivo");
        $("#header").removeClass("contenedor-pasivo");
        $("#main-conteiner").removeClass("contenedor-pasivo");
        $("#ventanaModif").addClass("modal-hidden");
    });

    $('#closeServerResponse').click(function () {
        $("#ventanaServer").addClass('modal-hidden');
        $("#footer").removeClass("contenedor-pasivo");
        $("#header").removeClass("contenedor-pasivo");
        $("#main-conteiner").removeClass("contenedor-pasivo");
        $("#ventanaModif").addClass("modal-hidden");
        $("#ventanaAltaRegistro").addClass("modal-hidden");

    });


    // completar select de ventana modif
    function fillSelectModi() {
        $("#inputMarca").empty();
        $.ajax({
            url: 'salida-json-marcas.php',
            type: 'POST',

            success: function (respuesta) {
                alert(respuesta);

                var objOption0 = document.createElement("option");
                objOption0.setAttribute("value", "0");
                objOption0.innerHTML = "Seleccione una Marca";
                document.getElementById("inputMarca-modal-modif").appendChild(objOption0);

                objJson = JSON.parse(respuesta);
                objJson.marcas.forEach(function (marca) {
                    var objOpcion = document.createElement("option");
                    objOpcion.setAttribute("value", marca.descripcion);
                    objOpcion.innerHTML = marca.descripcion;
                    document.getElementById("inputMarca-modal-modif").appendChild(objOpcion);
                })
            }
        });
    }

    // completar select de ventana alta
    function fillSelectAlta() {
        $("#inputMarca").empty();
        $.ajax({
            url: 'salida-json-marcas.php',
            type: 'POST',

            success: function (respuesta) {
                alert(respuesta);

                var objOption0 = document.createElement("option");
                objOption0.setAttribute("value", "0");
                objOption0.innerHTML = "Seleccione una Marca";
                document.getElementById("newMarca").appendChild(objOption0);

                objJson = JSON.parse(respuesta);
                objJson.marcas.forEach(function (marca) {
                    var objOpcion = document.createElement("option");
                    objOpcion.setAttribute("value", marca.descripcion);
                    objOpcion.innerHTML = marca.descripcion;
                    document.getElementById("newMarca").appendChild(objOpcion);
                })
            }
        });
    }

    function lecturaArchivo(idAuto) {
        $.ajax({
            url: 'php/traer-doc-pdf.php',
            type: 'POST',
            data: {
                idAuto: idAuto
            },
            success: function (respuesta) {
                alert(respuesta);
                objDato = JSON.parse(respuesta);
                $("#ventanaServer").removeClass('modal-hidden');
                $('#serverResponseDiv').empty();
                $('#serverResponseDiv').html("<iframe width='100%' height='600px' src='data:application/pdf;base64," + objDato.archivo_binario + "'></iframe>");

            }
        });

    }

    $('#btnCerrarSesion').click(function () {
        location.href = "../sesion-destroy.php";
    });




});

