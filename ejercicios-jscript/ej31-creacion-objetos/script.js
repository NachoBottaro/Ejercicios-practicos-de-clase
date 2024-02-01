
var container = document.getElementById('container');
var btnCrear = document.getElementById('btnCrear');
var btnLimpiar = document.getElementById('btnLimpiar');
var btnInfo = document.getElementById('btnInfo');

btnCrear.addEventListener('click', function () {
    var nuevoDiv = document.createElement('div');
    nuevoDiv.className = "container-elemento-creado";

    var objCreado = "<h1>Elemento creado: " + (container.childNodes.length + 1) + "</h1>";

    nuevoDiv.innerHTML = objCreado;
    container.appendChild(nuevoDiv);
});


btnLimpiar.addEventListener('click', function () {
    while (container.childNodes.length>0) {
        container.removeChild(container.childNodes[0]);
    }
});

btnInfo.addEventListener('click', function () {
    alert("Cantidad de objetos creador: " + container.childNodes.length)
});
