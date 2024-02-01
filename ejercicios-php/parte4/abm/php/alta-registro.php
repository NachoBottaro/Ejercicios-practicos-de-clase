<?php

require "../conection-db.php";
sleep(1);


$marca = isset($_POST["marca"]) ? $_POST["marca"] : '';
$modelo = isset($_POST["modelo"]) ? $_POST["modelo"] : '';
$ano = isset($_POST["ano"]) ? $_POST["ano"] : '';
$descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : '';
$valor = isset($_POST["valor"]) ? $_POST["valor"] : '';
// $pdf = isset($_POST["pdf"]) ? $_POST["pdf"] : '';

$sql = "INSERT INTO autos (marca, modelo, anio, valor, descripcion) 
        VALUES (:marca, :modelo, :ano, :valor, :descripcion)";



$respuestaServer = "";

try {
    $stmt = $dbh->prepare($sql);
    $respuestaServer .= "<br />Preparación Exitosa";
} catch (PDOException $e) {
    $respuestaServer .= "<br />Error al preparar la consulta: " . $e->getMessage();
}
try {
    
    $stmt->bindParam(':marca', $marca);
    $stmt->bindParam(':modelo', $modelo);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':valor', $valor);
    // $stmt->bindParam(':pdf', $pdf);
    $respuestaServer .= "<br />Bind exitoso!";
} catch (PDOException $e) {
    $respuestaServer .= "<br />Error al bindear: " . $e->getMessage();
}
try {
    $stmt->execute();
    $respuestaServer .= "<br />Ejecución Exitosa! Auto dado de alta exitosamente!";
} catch (PDOException $e) {
    $respuestaServer .= "<br />Error al ejecutar: " . $e->getMessage();
}

$dbh = null;

echo $respuestaServer;
?>