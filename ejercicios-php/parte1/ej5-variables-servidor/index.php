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
            <h1>Ejercicio php 5: Variables de servidor</h1><br>
        </div>
    </header>
    <main>
        <section class="main-container">
            <h2>Variables de Servidor</h2>

            <?php
             

            echo "<table style='border: 1px solid black; background-color: #ff8b01 '><tr><th style='border: 1px solid black; background-color: #ff8b01 '>Variable</th><th style='border: 1px solid black; background-color: #ff8b01 '>Valor</th></tr>" .
                "<tr><td style='border: 1px solid black; background-color: #ff8b01 '>\$SERVER_ADDR</td><td style='border: 1px solid black; background-color: #ff8b01 '>" . $_SERVER['SERVER_ADDR'] . "</td></tr>" .
                "<tr><td style='border: 1px solid black; background-color: #ff8b01 '>\$SERVER_PORT</td><td style='border: 1px solid black; background-color: #ff8b01 '>" . $_SERVER['SERVER_PORT'] . "</td></tr>" .
                "<tr><td style='border: 1px solid black; background-color: #ff8b01 '>\$SERVER_NAME</td><td style='border: 1px solid black; background-color: #ff8b01 '>" . $_SERVER['SERVER_NAME'] . "</td></tr>" .
                "<tr><td style='border: 1px solid black; background-color: #ff8b01 '>\$DOCUMENT_ROOT</td><td style='border: 1px solid black; background-color: #ff8b01 '>" . $_SERVER['DOCUMENT_ROOT'] . "</td></tr>" .
                "</table>";

            ?>

            <h2>Variables de Cliente</h2>

            <?php
            echo "<table style='border: 1px solid black; background-color: #ff8b01 '><tr><th style='border: 1px solid black; background-color: #ff8b01 '>Variable</th><th style='border: 1px solid black; background-color: #ff8b01 '>Valor</th></tr>" .
                "<tr><td style='border: 1px solid black; background-color: #ff8b01 '>\$REMOTE_ADDR</td><td style='border: 1px solid black; background-color: #ff8b01 '>" . $_SERVER['REMOTE_ADDR'] . "</td></tr>" .
                "<tr><td style='border: 1px solid black; background-color: #ff8b01 '>\$REMOTE_PORT</td><td style='border: 1px solid black; background-color: #ff8b01 '>" . $_SERVER['REMOTE_PORT'] . "</td></tr>" .
                "</table>";
            ?>

            <h2>Variables de Requerimiento.</h2>

            <?php
            echo "<table style='border: 1px solid black; background-color: #ff8b01 '><tr><th style='border: 1px solid black; background-color: #ff8b01 '>Variable</th><th style='border: 1px solid black; background-color: #ff8b01 '>Valor</th></tr>" .
                "<tr><td style='border: 1px solid black; background-color: #ff8b01 '>\$SERVER_PROTOCOL</td><td style='border: 1px solid black; background-color: #ff8b01 '>" . $_SERVER['SERVER_PROTOCOL'] . "</td></tr>" .
                "<tr><td style='border: 1px solid black; background-color: #ff8b01 '>\$REQUEST_METHOD</td><td style='border: 1px solid black; background-color: #ff8b01 '>" . $_SERVER['REQUEST_METHOD'] . "</td></tr>" .
                "<tr><td style='border: 1px solid black; background-color: #ff8b01 '>\$REQUEST_URI</td><td style='border: 1px solid black; background-color: #ff8b01 '>" . $_SERVER['REQUEST_URI'] . "</td></tr>" .
                "</table>";

            echo "<hr>";

            echo "<h3>Barrido de las llaves y valores de la variable \$_SERVER</h3>";

            foreach ($_SERVER as $key => $value) {
                echo "<p> <span style='color:  #1abc9c'>" . $key . "</span>: " . $value . "</p>";
            }

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