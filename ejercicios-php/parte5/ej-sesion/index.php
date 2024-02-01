<?php
session_start();

if (!isset($_SESSION['idSesion'])) {
    header('Location: login.php');
    exit();
} else {
    header('Location: modulo-app/index.php');
    exit();
}
?>
