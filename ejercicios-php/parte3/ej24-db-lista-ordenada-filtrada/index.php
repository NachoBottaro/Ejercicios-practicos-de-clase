<!doctype html>
<html lang="en">

<head>
    <title>Ejercicio 24</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="encabezado">
            <h2>Ejercicio 24: </h2>
        </div>
        <div class="bottones-tabla">
            <input type="text" placeholder="Ordenar por.." id="inputOrdenar">
            <button id="btnAgregarDatos" class="btn btn-success">Cargar Datos</button>
            <button id="btnVaciarDatos" class="btn btn-warning">Vaciar datos</button>
            <button id="btnLimpiarFiltros" class="btn btn-primary">Limpiar Filtros</button>

        </div>
    </header>
    <main>
        <section class="main-container">
            <div class="container-thead">
                <table>
                    <thead>
                        <tr>
                            <th id="columna-id">ID</th>
                            <th id="columna-marca">MARCA</th>
                            <th id="columna-modelo">MODELO</th>
                            <th id="columna-ano">AÑO</th>
                            <th id="columna-precio">VALOR</th>
                            <th id="columna-descripcion">DESCRICION</th>
                            <th id="columna-pdf">PDF</th>
                        </tr>
                        <tr>
                            <th><input type="text" id="inputId" ></th>
                            <th><select name="marca" id="inputMarca">
                            </select></th>
                            <th><input type="text" id="inputModelo"></th>
                            <th><input type="date" id="inputAno"></th>
                            <th><input type="number" id="inputPrecio"></th>
                            <th><input type="text" id="inputDescripcion"></th>
                            <th></th>
                        </tr>
                    </thead>

                </table>
            </div>
            <div class="container-tbody">
                <table>
                    <tbody id="contenido-tbody">
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    <footer>
        <div class="container-footer">
            <div class="container-pie-tabla">
                <h4>Pie</h4>
            </div>
            <div class="botton-volver">
                <a href="../index.html" id="volver" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>

    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    
</body>

</html>