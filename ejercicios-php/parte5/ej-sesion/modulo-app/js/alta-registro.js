$(document).ready(function () {
    var formAlta = document.getElementById("form-alta");

    var newMarca = document.getElementById("newMarca");
    var newModelo = document.getElementById("newModelo");
    var newDescrip = document.getElementById("newDescrip");
    var newAno = document.getElementById("newAno");
    var newValor = document.getElementById("newValor");

    var btnReset = document.getElementById("resetFormAlta");
    var btnAgregar = document.getElementById("enviarFormAlta");

    btnReset.disabled = true;
    btnAgregar.disabled = true;
 

    btnReset.onclick = function () {
        newMarca.value = 0;
        newModelo.value = "";
        newDescrip.value = "";
        newAno.value = "";
        newValor.value = "";

        btnReset.disabled = true;
    };

    formAlta.onkeyup = function () {
        if (newMarca.value !== 0 || newModelo.value !== "" ||  newDescrip.value !== "" || newAno.value !== "" || newValor.value !== 0) {
            btnReset.disabled = false;
        } else {
            btnReset.disabled = true;
        }

         if (newMarca.value !== 0 && newModelo.value !== "" &&  newDescrip.value !== "" && newAno.value !== "" && newValor.value > 0) {
            btnAgregar.disabled = false;
            
        } else {
            btnAgregar.disabled = true;
          
        }
    };

    $('#enviarFormAlta').click(function (event) {
        event.preventDefault();
        if (confirm("¿Estás seguro de dar de alta el auto?")) {


            var form = new FormData($('#form-alta')[0]);
            var objAjax = $.ajax({
                type: "post",
                url: "php/alta-registro.php",
                enctype: 'multipart/form-data',

                data: {

                    marca: document.getElementById('newMarca').value,
                    modelo: document.getElementById('newModelo').value,
                    descripcion: document.getElementById('newDescrip').value,
                    ano: document.getElementById('newAno').value,
                    valor: document.getElementById('newValor').value,

                },
                success: function (respuestaDelServer) {
                    $("#ventanaServer").removeClass('modal-hidden');
                    $('#serverResponseDiv').empty();
                    $('#serverResponseDiv').text(respuestaDelServer);
                }

            });

        }
    });


});
