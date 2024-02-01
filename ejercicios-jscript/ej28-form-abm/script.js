var nombre = document.getElementById("nombre");
var posicion = document.getElementById("posicion");
var numero = document.getElementById("numero");
var form = document.getElementById("form");

var btnReset = document.getElementById("btn-reset");
var btnAgregar = document.getElementById("btn-agregar");
var btnModificar = document.getElementById("btn-modificar");
var btnBaja = document.getElementById("btn-baja");

btnReset.disabled = true;
btnAgregar.disabled = true;
btnModificar.disabled = true;
btnBaja.disabled = true;

btnReset.onclick = function() {
    nombre.value = "";
    posicion.value = "";
    numero.value = "";
    btnReset.disabled = true;
};

form.onkeyup = function() {
    if (nombre.value !== "" || posicion.value !== "" || numero.value !== "") {
        btnReset.disabled = false;
    } else {
        btnReset.disabled = true;
    }

    if (nombre.value !== "" && posicion.value !== "" && numero.value !== "" && numero.value <= 100 ) {
        btnAgregar.disabled = false;
        btnModificar.disabled = false;
        btnBaja.disabled = false;
    } else {
        btnAgregar.disabled = true;
        btnModificar.disabled = true;
        btnBaja.disabled = true;
    }
};
