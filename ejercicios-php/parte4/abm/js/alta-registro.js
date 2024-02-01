$(document).ready(function () {
    // var formAlta = document.getElementById("form-alta");
    // var newMarca = document.getElementById("newMarca");
    // var newModelo = document.getElementById("newModelo");
    // var newAno = document.getElementById("newAno");
    // var newValor = document.getElementById("newValor");
    // var newDescrip = document.getElementById("newDescrip");
    // var btnEnviar = $('#enviarFormAlta');
    // var btnReset = $('#resetFormAlta');

    // btnEnviar.prop('disabled', true); // Usamos prop() para habilitar/deshabilitar el botón
    // btnReset.prop('disabled', true); // Usamos prop() para habilitar/deshabilitar el botón

    // btnReset.click(function () {
    //     newMarca.value = 0;
    //     newModelo.val("");
    //     newAno.val("");
    //     newValor.val("");
    //     newDescrip.val(0);
    //     btnReset.prop('disabled', true);
    // });

    // if (formAlta.checkValidity()) {
    //     btnEnviar.prop('disabled', false);
    // }


    // 
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
