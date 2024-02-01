var container = document.getElementById('container');

var btnTipo1 = document.getElementById('tipo1');
var btnTipo2 = document.getElementById('tipo2');
var btnTipo3 = document.getElementById('tipo3');
var btnTipo4 = document.getElementById('tipo4');

btnTipo1.addEventListener('click', function(){
    container.className = "div-container-tipo1"
})

btnTipo2.addEventListener('click', function(){
    container.className = "div-container-tipo2"
})

btnTipo3.addEventListener('click', function(){
    container.className = "div-container-tipo3"
})

btnTipo4.addEventListener('click', function(){
    container.className = "div-container-tipo4"
})