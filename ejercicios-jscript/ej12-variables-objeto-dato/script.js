const mostrarTablaBtn = document.getElementById("mostrar-tabla");
const ocultarTablaBtn = document.getElementById("ocultar-tabla");
const tabla = document.getElementById("tabla");
const nombreInput = document.getElementById("nombre-producto");
const categoriaInput = document.getElementById("categoria-producto");
const fechaInput = document.querySelector("input[type='date']");
const tablaBody = document.querySelector(".table tbody");

// Crear un array para almacenar productos
const productos = [];

// Manejar el clic en el botón "Mostrar tabla"
mostrarTablaBtn.addEventListener("click", function () {
    tabla.style.display = "block";
});

// Manejar el clic en el botón "Ocultar tabla"
ocultarTablaBtn.addEventListener("click", function () {
    tabla.style.display = "none";
});

// Manejar el clic en el botón "Agregar"
document.querySelector(".container-inputs button").addEventListener("click", function () {
    // Obtener los valores de los inputs
    const nombre = nombreInput.value;
    const categoria = categoriaInput.value;
    const fechaVencimiento = fechaInput.value;

    // Validar que se ingresen valores
    if (nombre.trim() === "" || categoria.trim() === "" || fechaVencimiento.trim() === "") {
        alert("Por favor, complete todos los campos.");
        return;
    }

    // Crear un nuevo objeto de producto
    const producto = {
        nombre: nombre,
        categoria: categoria,
        fechaVencimiento: fechaVencimiento,
    };

    // Agregar el producto al array de productos
    productos.push(producto);

    // Limpiar los campos de entrada
    nombreInput.value = "";
    categoriaInput.value = "";
    fechaInput.value = "";

    // Llamar a una función para agregar productos a la tabla
    agregarProductosATabla();
});

// Función para agregar productos a la tabla
function agregarProductosATabla() {
    // Limpiar la tabla antes de agregar nuevos productos
    tablaBody.innerHTML = "";

    // Recorrer el array de productos y agregar cada producto a la tabla
    productos.forEach((producto) => {
        const fila = document.createElement("tr");
        fila.innerHTML = `
          <td>${producto.nombre}</td>
          <td>${producto.categoria}</td>
          <td>${producto.fechaVencimiento}</td>
        `;
        tablaBody.appendChild(fila);
    });
}

