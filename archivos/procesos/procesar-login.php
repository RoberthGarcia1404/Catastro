<?php
session_start();
include_once 'conexion.php';
header('Content-Type: application/json');


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    // Sanitizar y validar los datos recibidos
    $tipoAcceso = mysqli_real_escape_string($conexion, strip_tags(trim($_POST['tipoAcceso'])));
    $identificacion = mysqli_real_escape_string($conexion, strip_tags(trim($_POST['identificacion'])));
    $password = mysqli_real_escape_string($conexion, strip_tags(trim($_POST['password'])));

    // Verificar si los campos están vacíos
    if (empty($tipoAcceso) || empty($identificacion) || empty($password)) {
        echo json_encode(['status' => 'error', 'message' => 'Todos los campos son obligatorios.']);
        exit();
    }

    // Preparar la consulta para verificar el usuario
    $query = $conexion->prepare("SELECT id_cc, contraseña FROM usuarios WHERE id_cc = ? AND tipo_identificacion = ?");
    if (!$query) {
        die("Error en la preparación de la consulta: " . $conexion->error);
    }

    $query->bind_param("is", $identificacion, $tipoAcceso);
    $query->execute();

    if ($query->num_rows > 0) {
        $query->bind_result($id_cc, $hashed_password);
        $query->fetch();
        
        // Verificar la contraseña
        if (password_verify($password, $hashed_password)) {
            // Autenticación exitosa
            $_SESSION['id_cc'] = $id_cc;
            $_SESSION['tipo_identificacion'] = $tipoAcceso;
            echo '<script>window.location.href = "../secciones/inicio-con-registro.php";</script>';
        } else {
            // Contraseña incorrecta
            echo json_encode(['status' => 'error', 'message' => 'Contraseña incorrecta.']);
            exit();
        }
    } else {
        // Usuario no encontrado
        echo json_encode(['status' => 'error', 'message' => 'Usuario no encontrado.']);
        exit();
    }

    // Cerrar la declaración
    $query->close();
} else {
    // Si el método de solicitud no es POST
    echo json_encode(['status' => 'error', 'message' => 'Método de solicitud no válido.']);
    header("Location: ../secciones/inicioSesion.php");
    exit();
}
?>
