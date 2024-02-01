<?php

require "../conection-db.php";
sleep(1);

$IdAutoBaja = isset($_POST["IdAutoBaja"]) ? $_POST["IdAutoBaja"] : '';
$respuestaServer_baja = "";

if (!empty($IdAutoBaja)) {
    $sql = "DELETE FROM autos WHERE id=:IdAutoBaja";

    // Proceso de preparación, binding y ejecución
    try {
        $stmt = $dbh->prepare($sql);
        $respuestaServer_baja .= "<br>Preparación Exitosa";
    } catch (PDOException $e) {
        $respuestaServer_baja .= "<br>" . $e->getMessage();
    }
    try {
        $stmt->bindParam(':IdAutoBaja', $IdAutoBaja);
        $respuestaServer_baja .= "<br>Binding Exitoso";
    } catch (PDOException $e) {
        $respuestaServer_baja .= "<br>" . $e->getMessage();
    }
    try {
        $stmt->execute();
        $respuestaServer_baja .= "<br>Eliminación Exitosa. ID Eliminado: " . $IdAutoBaja;
    } catch (PDOException $e) {
        $respuestaServer_baja .= "<br>" . $e->getMessage();
    }
} else {
    $respuestaServer_baja .= "Id vacío";
}

echo $respuestaServer_baja;

?>