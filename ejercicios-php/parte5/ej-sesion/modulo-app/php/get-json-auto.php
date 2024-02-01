<?php
 include('../validar-sesion.php');
require "../conection-db.php";

$IdAutoMod = isset($_GET["IdAutoMod"]) ? $_GET["IdAutoMod"] : '';
$serverResponse = "";

if (!empty($IdAutoMod)) {
    $sql = "SELECT * FROM autos WHERE id=:IdAutoMod";

    // Proceso de preparación, binding y ejecución
    try {
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':IdAutoMod', $IdAutoMod);
        $stmt->execute();

        // Utiliza fetch para obtener una fila de resultados
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $objAuto = new stdClass();
            $objAuto->id = $result["id"];
            $objAuto->marca = $result["marca"];
            $objAuto->modelo = $result["modelo"];
            $objAuto->anio = $result["anio"];
            $objAuto->valor = $result["valor"];
            $objAuto->descripcion = $result["descripcion"];
            // $objAuto->archivo_binario = $result["archivo_binario"];

            $serverResponse .= json_encode($objAuto);
            $dbh = null;

        } else {
            $serverResponse .= "Null";
        }
    } catch (PDOException $e) {
        $serverResponse .= "Error: " . $e->getMessage();
    }
} else {
    $serverResponse .= "Empty";
}

echo $serverResponse;

?>