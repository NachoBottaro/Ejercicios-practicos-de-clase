<?php

sleep(4);

$clave = $_POST["clave"];

$encriptarMd5 = md5($clave);
$encriptarSha1 = sha1($clave);

$result = "Clave a encriptar: " . $clave . "<br>";
$result = $result . "Clave encriptada en MD5 (128 bits o 16 pares hexadecimales) <br>";
$result = $result . $encriptarMd5 . "<br />";
$result = $result . "Clave encriptada en SHA1 (160 bits o 20 pares hexadecimales) <br>";
$result = $result . $encriptarSha1 . "<br>";

echo ($result);

?>