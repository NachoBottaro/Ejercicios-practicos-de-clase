<?php
$respuesta_estado = "";
$dbname = 'ej_redes';
$host = 'localhost';
$user = 'root';
$password = 'root';
try{
    $dsn = "mysql:host=$host;dbname=$dbname";
    $dbh = new PDO($dsn, $user, $password);
    $respuesta_estado = $respuesta_estado . "\nconexion exitosa";
}catch(PDOException $e){
    $respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();
};
?>