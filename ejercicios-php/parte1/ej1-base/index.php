<!doctype html>
<html lang="en">

<head>
  <title>Ejercico 1</title>
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
      <h1>Ejercicio php 1: Base</h1><br>
    </div>
  </header>
  <main>
    <section class="main-container">
      <div class="">
        <h3>Texto fuera de etiquetas php</h3>
        <p>Dr. Ing. h.c. F. Porsche Aktiengesellschaft, normalmente abreviado como Porsche AG,​ es un fabricante de
          automóviles alemán especializado en automóviles deportivos de lujo de alta gama, vehículos utilitarios
          deportivos (SUV) y sedanes. Es propiedad del Grupo Volkswagen, que a su vez es propiedad mayoritaria de
          Porsche Automobil Holding SE. Fue fundada en Stuttgart en 1931 por Ferdinand Porsche y su hijo Ferdinand Anton
          Ernst Porsche. </p>
        <hr>

        <?php
        echo "<h3> Texto dentro de etiquetas php usando sentencia <span style='color: #ff8b01'> echo </span></h3>";
        echo "<p> Dr. Ing. h.c. F. Porsche Aktiengesellschaft, normalmente abreviado como Porsche AG,​ es un fabricante de
          automóviles alemán especializado en automóviles deportivos de lujo de alta gama, vehículos utilitarios
          deportivos (SUV) y sedanes. Es propiedad del Grupo Volkswagen, que a su vez es propiedad mayoritaria de
          Porsche Automobil Holding SE. Fue fundada en Stuttgart en 1931 por Ferdinand Porsche y su hijo Ferdinand Anton
          Ernst Porsche. </p>";
        ?>
        <hr>

        <?php
        $variable1 = "perro";
        echo "<p>Sin usar concatenador - <span style='color: #ff8b01'>\$variable1</span> : $variable1</p>";
        echo "<p>Usando concatenador - <span style='color: #ff8b01'>\$variable1</span> : " . $variable1 . "</p>";

        echo "<hr>";

        $variableBooleanaTrue = true;
        $variableBooleanaFalse = false;

        echo "<p>Variable de tipo booleanas o logicas (Verdadero) <span style='color: #ff8b01'>\$variableBooleanaTrue</span>: " . $variableBooleanaTrue . "</p>";
        echo "<p>Variable de tipo booleanas o logicas (Falso) <span style='color: #ff8b01'>\$variableBooleanaFalse</span>: " . $variableBooleanaFalse . "</p>";

        echo "<hr>";

        define("Nueva_constante", "ValorConstante");

        echo "<p><span style='color: #ff8b01'>Nueva_Constante</span>: " . Nueva_constante . "</p>";
        echo "<p>Tipo de <span style='color: #ff8b01'>Nueva_Constante</span>: " . gettype(Nueva_constante) . "</p>";

        echo "<hr>";
        ?>

        <h3>Arrelgos:</h3>

        <?php
        $Nuevo_Arreglo = ["perro", "gato"];

        echo "<p><span style='color: #ff8b01'>\$Nuevo_Arreglo[0]:</span>: " . $Nuevo_Arreglo[0] . "</p>";
        echo "<p><span style='color: #ff8b01'>\$Nuevo_Arreglo[1]:</span>: " . $Nuevo_Arreglo[1] . "</p>";
        echo "<p>Tipo de <span style='color: #ff8b01'>\$Nuevo_Arreglo</span>: " . gettype($Nuevo_Arreglo) . "</p>";

        echo "<p>Se agregan dos elementos nuevos al array \$Nuevo_Arreglo</p>";
        array_push($Nuevo_Arreglo, "raton", "caballo");

        foreach ($Nuevo_Arreglo as $animal) {
          echo "<li>" . $animal . "</li>";
        };
        echo "<hr>";
        ?>

        <h3>Arreglo de dos dimensiones (diccionario)</h3>

        <?php
        $AutosAlemanes = ["Audi", "Bmw", "Porsche", "Alpina"];
        $AutosEeuu = ["Cadillac", "Dodge", "Chevrolet", "Chrysler"];
        $AutosJaponeses = ["Honda", "Nissan", "Mitsubishi", "Mazda"];
        $cont = 0;

        $MarcaDeAutos = [$AutosAlemanes, $AutosEeuu];
        array_push($MarcaDeAutos, $AutosJaponeses);

        echo "<p>El Array <span style='color: #ff8b01'>\$MarcaDeAutos</span> tiene el siguiente tipo: " . gettype($MarcaDeAutos) . "</p>";

        echo "<table style='border: 1px solid black;; background-color:red'> 
              <tr><th style='border: 1px solid black;'>Autos Alemanes</th>
              <th style='border: 1px solid black;'>Autos EEUU</th>
              <th style='border: 1px solid black;'>Autos Japonenes</th>";

        // foreach ($MarcaDeAutos as $marca) {
          
          
        //   foreach($marca as $auto){
        //     echo"<tr><td style='border: 1px solid #000000'>" . 
        //      . "</td><td style='border: 1px solid #000000'>" . 
        //     $palabra[1] . "</td><td style='border: 1px solid #000000'>" . 
        //     $palabra[2] . "</td><td style='border: 1px solid #000000'>" . 
        //     $palabra[3] . "</td></tr>";
        //   }

        //   if ($cont == 4){
            
        //   }
          
         
        // }

        
        
        echo "</table>";
        echo "<br>";
        echo "<p>El valor de <span style='color: #ff8b01'>\$MarcaDeAutos[1][3]:</span>: " . $MarcaDeAutos[1][3] . "</p>";
        echo "<p>Cantidad de elementos del Diccionario: " . count($MarcaDeAutos) . "</p>";
        echo "<hr>"
          ?>
        <h3>Variables tipo arreglo asociativo:</h3><br>

        <?php
        $auto = [
          "Marca" => "Porsche",
          "Modelo" => "911 GT3",
          "Precio" => 300000,
          "Potencia" => "510 CV",
          "VelocidadMaxima" => "318 km/h"
        ];

        echo "<h5>Datos del auto</h5>";
        echo "<p>Marca: " . $auto["Marca"] . "</p>";
        echo "<p>Modelo: " . $auto["Modelo"] . "</p>";
        echo "<p>Precio: " . $auto["Precio"] . "</p>";
        echo "<p>Potencia: " . $auto["Potencia"] . "</p>";
        echo "<p>Velocidad maxima: " . $auto["VelocidadMaxima"] . "</p>";
        echo "<br>";
        echo "<p>Tipo de dato: " . gettype($auto) . "</p>";
        echo "<hr>";
        ?>

        <h3>Expreciones aritmeticas</h3>

        <?php
        $numeroUno = 10;
        $numeroDos = 2;

        echo "<p>El valor de <span style='color: #ff8b01'>\$numeroUno</span> es: " . $numeroUno . "</p>";
        echo "<p>El valor de <span style='color: #ff8b01'>\$numeroDos</span> es: " . $numeroDos . "</p>";
        echo "<p>La variable <span style='color: #ff8b01'>\$numeroUno</span> es de tipo: " . gettype($numeroUno) . "</p>";
        echo "<p>La variable <span style='color: #ff8b01'>\$numeroDos</span> es de tipo: " . gettype($numeroDos) . "</p>";

        echo "<p>Ejemplo de una Suma (<span style='color: #ff8b01'>\$numeroUno</span> + <span style='color: #ff8b01'>\$numeroDos</span>): " . $numeroUno + $numeroDos . "</p>";
        echo "<p>Ejemplo de una Resta (<span style='color: #ff8b01'>\$numeroUno</span> - <span style='color: #ff8b01'>\$numeroDos</span>): " . $numeroUno - $numeroDos . "</p>";
        echo "<p>Ejemplo de una Multiplicación (<span style='color: #ff8b01'>\$numeroUno</span> * <span style='color: #ff8b01'>\$numeroDos</span>): " . $numeroUno * $numeroDos . "</p>";
        echo "<p>Ejemplo de una División (<span style='color: #ff8b01'>\$numeroUno</span> / <span style='color: #ff8b01'>\$numeroDos</span>): " . $numeroUno / $numeroDos . "</p>";
        ?>


      </div>
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