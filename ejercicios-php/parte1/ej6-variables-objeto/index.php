<!doctype html>
<html lang="en">

<head>
    <title>Ejercico 5</title>
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
        <div class="titulo">
            <h1>Ejercicio php 6: Variables de tipo objeto</h1><br>
        </div>
    </header>
    <main>
        <section class="main-container">
            <?php

            $objAuto1 = new stdclass;
            $objAuto1->marca = "Porsche";
            $objAuto1->modelo = "911 GT3";
            $objAuto1->velocidad_maxima = 318;
            $objAuto1->precio = 300000;

            echo "<h1 style='color:  #a569bd  '>\$objAuto1</h1>";

            foreach ($objAuto1 as $key => $value) {
                echo "<p> <span style='color: #1abc9c'>" . $key . "</span>: " . $value . "</p>";
            }

            echo "<h3>Tipo de <span style='color: #a569bd'>\$objAuto1</span>: " . gettype($objAuto1) . "</h3>";

            echo "<hr>";

            echo "<h2>Definimos arreglo de autos</h2>";

            $arreglo_autos = [$objAuto1];

            echo "<h3 style='color: #1abc9c '>\$arreglo_autos: " . gettype($arreglo_autos) .  "</h3>";

            $objAuto2 = new stdclass;
            $objAuto2->marca = "Nissan";
            $objAuto2->modelo = "Gtr r35 nismo";
            $objAuto2->velocidad_maxima = 315;
            $objAuto2->precio = 150000;

            array_push($arreglo_autos, $objAuto2);

            echo "<table style='border: 1px solid black; background-color:red'> 
                <tr><th style='border: 1px solid black; '>Marca</th>
                <th style='border: 1px solid black; '>Modelo</th>
                <th style='border: 1px solid black; '>Velocidad Maxima</th>
                <th style='border: 1px solid black; '>Precio</th></tr>";
            foreach ($arreglo_autos as $auto) {
                echo "<tr><td style='border: 1px solid black; '>" . $auto->marca . "</td>" .
                    "<td style='border: 1px solid black; '>" . $auto->modelo . "</td>" .
                    "<td style='border: 1px solid black; '>" . $auto->velocidad_maxima . "</td>" .
                    "<td style='border: 1px solid black; '>" . $auto->precio . "</td></tr>";
            }
            echo "</table><br>";

            echo "<p>Cantidad de autos: " . count($arreglo_autos);

            echo "<hr>";

            $objAutos = new stdclass;
            echo "<h2>Creación de objeto <span style='color:  #a569bd'>\$objAutos</span> con dos atributos array arreglo_autos y cantidad De Autos</h2>";

            $objAutos->autos = $arreglo_autos;
            $objAutos->cantidadAutos = count($arreglo_autos);

            echo "Cantidad de autos: " . $objAutos->cantidadAutos;

            echo "<h2>Producción de un JSON: JsonAutos</h2>";

            $jsonAutos = json_encode($objAutos);

            echo $jsonAutos;

            ?>


        </section>
    </main>
    <footer>

    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>