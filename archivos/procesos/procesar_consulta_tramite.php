<?php
session_start();
include_once 'conexion.php';

$response = ['status' => 'error', 'message' => 'Número de radicación no encontrado.'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radicacion = $_POST['radicacion'];

    // Consulta para verificar si el número de radicación existe
    $stmt = $conexion->prepare("SELECT * FROM tramites WHERE radicado = ?");
    $stmt->bind_param("s", $radicacion);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['radicacion'] = $radicacion;
        $response['status'] = 'success';
        $response['message'] = 'Número de radicación encontrado. Redirigiendo...';
    }

    $stmt->close();
    $conexion->close();
}

echo json_encode($response);
?>