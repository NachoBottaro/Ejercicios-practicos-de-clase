<?php
 require 'modulo-app/conection-db.php';

$nombreUsuario = isset($_POST['nombre-usuario']) ? $_POST['nombre-usuario'] : '';
$contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';

$contrasena_encriptada  = md5($contrasena);

$sql = "SELECT idusuario, username, session_counter FROM usuario WHERE username=:nombreUsuario AND contrasena=:contrasena";

try {
    $stmt = $dbh->prepare($sql);
} catch (PDOException $e) {

}
try {
    $stmt->bindParam(':nombreUsuario', $nombreUsuario);
    $stmt->bindParam(':contrasena', $contrasena_encriptada);
} catch (PDOException $e) {

}
try {
    $stmt->execute();
} catch (PDOException $e) {

}

if ($stmt->rowCount() > 0) {
    // Usuario válido se redirecciona a la aplicación

    session_start();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $countSession = $result['session_counter'];
    
    // creo un nuevo identificador para la sesión
    $_SESSION['idSesion'] = session_create_id();
    
    $_SESSION['login'] = $nombreUsuario;
    $_SESSION['countSession'] = $countSession;
    
    $countSession += 1;
    $sql = "UPDATE usuario SET session_counter=:newCount WHERE idusuario=:id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':newCount', $countSession);
    $stmt->bindParam(':id', $result['idusuario']);
    $stmt->execute();

    header('Location: modulo-app/index.php');
    exit;
} else {
    
    header('Location: index.php');
    exit;
} 

?>