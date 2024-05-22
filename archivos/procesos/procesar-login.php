<?php
session_start();
include_once 'conexion.php';

if (isset($_POST['login'])) {
    // Sanitizar y validar los datos recibidos
    $tipoAcceso = mysqli_real_escape_string($conexion, strip_tags(trim($_POST['tipoAcceso'])));
    $identificacion = mysqli_real_escape_string($conexion, strip_tags(trim($_POST['identificacion'])));
    $password = mysqli_real_escape_string($conexion, strip_tags(trim($_POST['password'])));

    // Verificar si los campos están vacíos
    if (empty($tipoAcceso) || empty($identificacion) || empty($password)) {
        echo '<div class="alert alert-danger" role="alert">Todos los campos son obligatorios.</div>';
        exit();
    }

    // Preparar la consulta para verificar el usuario
    $query = $conexion->prepare("SELECT id_cc, contraseña FROM usuarios WHERE id_cc = ? AND tipo_identificacion = ?");
    if (!$query) {
        die("Error en la preparación de la consulta: " . $conexion->error);
    }

    $query->bind_param("is", $identificacion, $tipoAcceso);
    $query->execute();
    $query->store_result();

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
            echo '<div class="alert alert-danger" role="alert">Contraseña incorrecta.</div>';
        }
    } else {
        // Usuario no encontrado
        echo '<div class="alert alert-danger" role="alert">Usuario no encontrado.</div>';
    }

    // Cerrar la declaración
    $query->close();
} else {
    // Si el método de solicitud no es POST
    header("Location: ../secciones/inicioSesion.php");
    exit();
}
?>
