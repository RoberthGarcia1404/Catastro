<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['id_cc'])) {
    header("Location: ../secciones/inicioSesion.php");
    exit();
}
?>