<!doctype html>
<html lang="en">

<head>
    <title>Ejercico 2</title>
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
            <h1>Ejercicio php 2: include</h1><br>
        </div>
    </header>
    <main>
        <section class="main-container">
            <?php

            echo $array1;
            echo $array2;
            echo $array3;
            echo $array4;

            include 'variables.inc';
            include 'archivo.inc';


            echo "<hr>";
            echo "<p>Longitud de \$array1: " . count($array1) . "</p>";
            echo "<p>Longitud de \$array2: " . count($array2) . "</p>";
            echo "<p>Longitud de \$array3: " . count($array3) . "</p>";
            echo "<p>Longitud de \$array4: " . count($array4) . "</p>";

            echo "<h2>Datos de los 2 Array Asociativos</h2>";

            echo "<table style='border: 1px solid black; background-color:red'> 
                <tr><th style='border: 1px solid black'>Marca</th>
                <th style='border: 1px solid black'>Modelo</th>
                <th style='border: 1px solid black'>Velocidad maxima</th></tr>";
            foreach ($arrayAutos as $auto) {
                echo "<tr><td style='border: 1px solid black'>" . $auto["Marca"] . "</td><td style='border: 1px solid black'>" .
                    $auto["Modelo"] . "</td><td style='border: 1px solid black'>" .
                    $auto["VelocidadMaxima"] . "</td></tr>";
            }
            echo "</table>";

            echo "<p>La longitud de los Arrays Asociativos es: " . count($arrayAutos[0]) . "</p>"

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