<?php

require "../conection-db.php";
sleep(1);

$idAuto = isset($_POST["id"]) ? $_POST["id"] : '';
$marca = isset($_POST["marca"]) ? $_POST["marca"] : '';
$modelo = isset($_POST["modelo"]) ? $_POST["modelo"] : '';
$ano = isset($_POST["ano"]) ? $_POST["ano"] : '';
$descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : '';
$valor = isset($_POST["valor"]) ? $_POST["valor"] : '';

// $pdf = isset($_FILES["pdf"]) ? $_FILES["pdf"] : '';



$sql = "UPDATE autos 
        SET marca=:marca, modelo=:modelo, anio=:ano, descripcion=:descripcion, valor=:valor /*, 
            archivo_binario=:pdf*/
        WHERE id=:idAuto";
$respuestaServer = "";

try {
    $stmt = $dbh->prepare($sql);
    $respuestaServer .= "<br />Preparación Exitosa";
} catch (PDOException $e) {
    $respuestaServer .= "<br />Error al preparar la consulta: " . $e->getMessage();
}
try {
    $stmt->bindParam(':idAuto', $idAuto);
    $stmt->bindParam(':marca', $marca);
    $stmt->bindParam(':modelo', $modelo);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':valor', $valor);

    // if (!empty($pdf) && $pdf["error"] == 0) {
    //     $pdfData = file_get_contents($pdf["tmp_name"]);
    //     $stmt->bindParam(':pdf', $pdf, PDO::PARAM_LOB);
    // } else {
    //     $pdfData = null; // Si no se proporciona un archivo, establece el valor en nulo
    //     $stmt->bindParam(':pdf', $pdf, PDO::PARAM_LOB);
    //     $respuestaServer .= "<br />No se subió ningún archivo PDF.";
    // }



    $respuestaServer .= "<br />Bind exitoso!";
} catch (PDOException $e) {
    $respuestaServer .= "<br />Error al bindear: " . $e->getMessage();
}
try {
    $stmt->execute();
    $respuestaServer .= "<br />Ejecución Exitosa!";
} catch (PDOException $e) {
    $respuestaServer .= "<br />Error al ejecutar: " . $e->getMessage();
}

$dbh = null;

echo $respuestaServer;






?>

