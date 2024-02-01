// Obtener elementos por su ID
const mesInput = document.getElementById("mes");
const diaInput = document.getElementById("dia");

// Agregar eventos onkeyup a los elementos
mesInput.onkeyup = function() {
    const valor = mesInput.value;
    const numeroMes = parseInt(valor);

    if (isNaN(numeroMes) || numeroMes < 1 || numeroMes > 12) {
        alert("Por favor, ingresa un número de mes válido (1-12).");
        mesInput.value = "";
    }
};

diaInput.onkeyup = function() {
    const valor = diaInput.value;
    const numeroDia = parseInt(valor);

    if (isNaN(numeroDia) || numeroDia < 1 || numeroDia > 31) {
        alert("Por favor, ingresa un número de día válido (1-31).");
        diaInput.value = "";
    }
};
