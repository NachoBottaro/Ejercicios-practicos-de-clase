<?php
include ("conection-db.php");
$sql = "SELECT * FROM `marca`";
$stmt = $dbh->prepare($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();

$marcas=[];
while($fila = $stmt->fetch()){
    $objMarca = new stdClass();
    $objMarca->idmarca = $fila["idmarca"];
    $objMarca->descripcion = $fila["descripcion"];
    array_push($marcas,$objMarca);
}

$objMarcas = new stdClass();
$objMarcas->marcas = $marcas;
$objMarcas->cont = count($marcas);
$salidaJson = json_encode($objMarcas);
$dbh = null;
echo ($salidaJson);

?>