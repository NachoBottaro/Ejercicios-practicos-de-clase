<?php

    include('validar-sesion.php');

?>


<!doctype html>
<html lang="en">

<head>
    <title>Ejercicio Sesion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="style.css">
</head>

<body">
    <header id="header">
        <div class="encabezado">
            <h2>Abm autos: </h2>
        </div>
        <div class="bottones-tabla">
            <input type="text" placeholder="Ordenar por.." id="inputOrdenar">
            <button id="btnAgregarDatos" class="btn btn-success">Cargar Datos</button>
            <button id="btnVaciarDatos" class="btn btn-warning">Vaciar datos</button>
            <button id="btnLimpiarFiltros" class="btn btn-info">Limpiar Filtros</button>
            <button id="btnAltaRegistro" class="btn btn-outline-success">Alta Registro</button>
            <button id="btnCerrarSesion" class="btn btn-danger">Cerrar sesion</button>

        </div>
    </header>
    <main>
        <section class="main-container" id="main-conteiner">
            <div class="container-table">
                <table>
                    <thead>
                        <tr>
                            <th id="id">ID</th>
                            <th id="marca">MARCA</th>
                            <th id="modelo">MODELO</th>
                            <th id="anio">AÑO</th>
                            <th id="valor">VALOR</th>
                            <th id="descripcion">DESCRICION</th>
                            <th id="arcivo_binario">PDF</th>
                            <th id="columna-btn-Modi">Modificacion</th>
                            <th id="columna-btn-Baja">Bajas</th>
                        </tr>
                        <tr>
                            <th id="id"><input type="text" id="inputId"></th>
                            <th id="marca"><select name="marca" id="inputMarca">
                                </select></th>
                            <th id="modelo"><input type="text" id="inputModelo"></th>
                            <th id="anio"><input type="date" id="inputAno"></th>
                            <th id="valor"><input type="number" id="inputPrecio"></th>
                            <th id="descripcion"><input type="text" id="inputDescripcion"></th>
                            <th id="arcivo_binario"></th>
                            <th id="columna-btn-Modi"></th>
                            <th id="columna-btn-Baja"></th>
                        </tr>
                    </thead>
                    <tbody id="contenido-tbody" class="tbody-content">
                    </tbody>

                </table>
            </div>

        </section>

        <section class="modal-windows">

            <div id="ventanaAltaRegistro" class="formABM modal-hidden">
                <div class="container-button-x">
                    <button id="btnCloseModalAlta" class="buttonClose">X</button>
                </div>
                <div class="container-form">
                    <h3>Formulario Alta Auto</h3>
                    <hr>
                    <form id="form-alta">
                        <div class="form-container">
                            <div class="form-column">
                                <label for="idAltaAuto">Id Auto:</label>
                                <input type="text" id="idAltaAuto" name="idAltaAuto" disabled>

                                <label for="newMarca" id="newLabelMarca">Marca:</label>
                                <select id="newMarca" name="newMarca">
                                    <!-- se añaden las marcas aca con js -->
                                </select>

                                <label for="newModelo" id="newModeloLabel">Modelo:</label>
                                <input type="text" id="newModelo" name="newModelo" required>
                            </div>

                            <div class="form-column">

                                <label for="newDescrip" id="newDescriLabel">Descripción:</label>
                                <textarea id="newDescrip" name="newDescrip" required></textarea>

                                <label for="newAno">Año:</label>
                                <input type="date" id="newAno" name="newAno" required>

                                <label for="newValor" id="newLabelValor">Valor:</label>
                                <input type="number" id="newValor" name="newValor" required>

                                <!-- <label for="newPdf">Pdf:</label>
                            <input type="file" id="newPdf" name="newPdf"> -->
                            </div>
                        </div>

                        <div class="center-button">
                            <button id="enviarFormAlta" class="btn btn-success">ENVIAR</button>
                            <button id="resetFormAlta" class="btn btn-warning">Reset</button>
                        </div>
                    </form>|
                </div>

            </div>

            <div id="ventanaModif" class="formABM modal-hidden">
                <div class="container-button-x">
                    <button id="closeModifyRegisterDiv" class="buttonClose">X</button>
                </div>

                <h3>Formulario de Modificación</h3>
                <hr>
                <form id="form-modify" method="POST" enctype="multipart/form-data">
                    <div class="form-container">
                        <div class="form-column">
                            <label for="idModAuto">Id Auto:</label>
                            <input type="text" id="idModAuto" name="idModAuto" disabled>

                            <label for="inputMarca" id="typeModLabel">Marca:</label>
                            <select id="inputMarca-modal-modif" name="inputMarca" required>
                                <!-- se añaden las marcas aca con js -->
                            </select>

                            <label for="modeloMod" id="modeloModLabel">Modelo:</label>
                            <input type="text" id="modeloMod" name="modeloMod" required>
                        </div>

                        <div class="form-column">

                            <label for="descripMod" id="descripModLabel">Descripción:</label>
                            <textarea id="descripMod" name="descripMod" required></textarea>

                            <label for="anoMod">Año:</label>
                            <input type="date" id="anoMod" name="anoMod" required>

                            <label for="valorMod" id="valorModLabel">Valor:</label>
                            <input type="number" id="valorMod" name="valorMod" required>

                            <!-- <label for="pdfMod">Pdf:</label>
                            <input type="file" id="pdfMod" name="pdfMod" required> -->
                        </div>
                    </div>

                    <div class="center-button">
                        <button id="enviarFormModify" class="btn btn-success" disabled>ENVIAR</button>
                    </div>
                </form>
            </div>

            <div id="ventanaServer" class="server modal-hidden">
                <div class="container-button-x">
                    <button id="closeServerResponse" class="buttonClose">X</button>
                </div>
                
                <h3>Respuesta del Servidor</h3>
                <hr>
                <div id="serverResponseDiv"></div>
            </div>

        </section>
    </main>
    <footer id="footer">
        <div class="container-footer">
            <div class="container-pie-tabla">
                <h4>Pie</h4>
            </div>
            <div class="botton-volver">
                <a href="../../index.html" id="volver" class="btn btn-primary">Volver</a>
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
    <script src="js/modify-registro.js"></script>
    <script src="js/baja-registro.js"></script>
    <script src="js/alta-registro.js"></script>

    </body>

</html>