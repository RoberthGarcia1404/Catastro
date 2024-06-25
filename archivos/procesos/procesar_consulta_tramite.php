<?php
session_start();
include_once 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radicacion = $_POST['radicacion'];

    // Consulta para verificar si el número de radicación existe
    $stmt = $conexion->prepare("SELECT * FROM tramites WHERE radicado = ?");
    $stmt->bind_param("s", $radicacion);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['radicacion'] = $radicacion;
        header("Location: ../secciones/estado-tramite.php");
    } else {
        echo "<script>alert('Número de radicación no encontrado.'); window.location.href='../secciones/consulta-tramite.php';</script>";
    }

    $stmt->close();
    $conexion->close();
} else {
    header("Location: ../secciones/consulta-tramite.php");
    exit();
}
?>
