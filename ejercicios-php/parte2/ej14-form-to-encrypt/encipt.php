<?php
$mensaje = $_POST['mensaje'];

if (isset($_POST['mensaje']) && $_POST['mensaje'] != '') {
    $mensaje_Encriptado_Md5 = md5($mensaje);
    $mensaje_Encriptado_sha1 = sha1($mensaje);

    echo "<p>Menaje: " . $mensaje . "</p>" .
        "<p><span style='color: #ff8b01'> Mensaje encriptado en md5 </span>(128 bits o 15 pares hexadeimales): " . $mensaje_Encriptado_Md5 . "</p>";
    echo "<hr>";
        echo "<p>Menaje: " . $mensaje . "</p>" .
        "<p><span style='color: #ff8b01'>Mensaje encriptado en sha1 </span>(160 bits o 20 pares hexadeimales): " . $mensaje_Encriptado_sha1 . "</p>";
} else {
    echo "Error en la encritacion del mensaje";
}

?>