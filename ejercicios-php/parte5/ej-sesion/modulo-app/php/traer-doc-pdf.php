<?php
 include('../validar-sesion.php');
require "../conection-db.php";

$idAuto = isset($_POST["idAuto"]) ? $_POST["idAuto"] : '';
$respuestaServer = "";

$sql = "SELECT id, archivo_binario FROM autos WHERE id = :idAuto";

try {
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':idAuto', $idAuto);
    $stmt->execute();

    $respuestaServer .= "<br />Preparación y ejecución exitosa!";

    $objAuto = new stdClass();
    while ($fila = $stmt->fetch()) {
        $objAuto->id = $fila["id"];
        $objAuto->archivo_binario = base64_encode($fila["archivo_binario"]);
    }

    $salidaJson = json_encode($objAuto, JSON_INVALID_UTF8_SUBSTITUTE);

} catch (PDOException $e) {
    $respuestaServer .= "<br />Error: " . $e->getMessage();
}

$dbh = null;

echo $salidaJson;
?>
