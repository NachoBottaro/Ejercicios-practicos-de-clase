// Seleccionar el elemento formulario
const form = document.getElementById('form');

// Seleccionar los campos de entrada
const nombre_producto = document.getElementById('nombre-producto');
const categoria_producto = document.getElementById('categoria-producto');

// Función que se ejecuta cuando se hace clic en el botón de enviar del formulario
form.addEventListener('submit', (event) => {
    event.preventDefault();

    if (nombre_producto.value.trim() === '') {
        alert('Por favor, ingresa el nombre del producto');
        return false;
    }

    if (categoria_producto.value.trim() === '') {
        alert('Por favor, ingresa la categoría del producto');
        return false;
    }

    // Enviar el formulario
    const confirmacion = confirm("¿Está seguro de enviar?");
    if (confirmacion === true) {
        form.submit();
    } else {
        return false;
    }
});
