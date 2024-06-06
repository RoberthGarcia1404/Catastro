<?php
session_start();
include_once 'conexion.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registro'])) {
    // Función para sanitizar entradas
    function sanitize_input($conexion, $input)
    {
        return mysqli_real_escape_string($conexion, strip_tags(trim($input)));
    }

    // Sanitización y Validación de Datos
    $tipo_identificacion = sanitize_input($conexion, $_POST['tipo_identificacion']);
    $numero_documento = sanitize_input($conexion, $_POST['numero-documento']);
    $fecha_expedicion = sanitize_input($conexion, $_POST['fecha_expedicion']);
    $primer_nombre = sanitize_input($conexion, $_POST['primer_nombre']);
    $segundo_nombre = isset($_POST['segundo_nombre']) ? sanitize_input($conexion, $_POST['segundo_nombre']) : '';
    $primer_apellido = sanitize_input($conexion, $_POST['primer_apellido']);
    $segundo_apellido = isset($_POST['segundo_apellido']) ? sanitize_input($conexion, $_POST['segundo_apellido']) : '';
    $correo = sanitize_input($conexion, $_POST['correo']);
    $confirmar_correo = sanitize_input($conexion, $_POST['confirmar_correo']);
    $telefono = sanitize_input($conexion, $_POST['telefono']);
    $pais = sanitize_input($conexion, $_POST['pais']);
    $departamento = isset($_POST['departamento']) ? sanitize_input($conexion, $_POST['departamento']) : '';
    $municipio = isset($_POST['municipio']) ? sanitize_input($conexion, $_POST['municipio']) : '';
    $direccion_domicilio = sanitize_input($conexion, $_POST['direccion-domicilio']);
    $zona_rural = isset($_POST['zona_rural']) ? 1 : 0;
    $vereda = isset($_POST['vereda']) ? sanitize_input($conexion, $_POST['vereda']) : '';
    $contraseña = sanitize_input($conexion, $_POST['contraseña']);
    $confirmar_contraseña = sanitize_input($conexion, $_POST['comfirmar-contraseña']);

    function redirect_with_message($message)
    {
        $_SESSION['modal_message'] = $message;
        header("Location: ../secciones/registro.php");
        exit();
    }


    // Verificar si los correos coinciden
    if ($correo !== $confirmar_correo) {
        redirect_with_message("Los correos electrónicos no coinciden.");
    }

    // Verificar si las contraseñas coinciden
    if ($contraseña !== $confirmar_contraseña) {
        redirect_with_message("Las contraseñas no coinciden.");
    }

    // Verificar si el número de documento ya está registrado
    $stmt = $conexion->prepare("SELECT id_cc FROM usuarios WHERE id_cc = ?");
    $stmt->bind_param("i", $numero_documento);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        redirect_with_message("El número de identificación ya está registrado.");
    }
    $stmt->close();

    // Verificar si el correo electrónico ya está registrado
    $stmt = $conexion->prepare("SELECT correo FROM usuarios WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        redirect_with_message("El correo electrónico ya está registrado.");
    }
    $stmt->close();

    // Hash de la contraseña
    $contraseña_hashed = password_hash($contraseña, PASSWORD_DEFAULT);

    // Preparar la consulta de inserción
    $sql = "INSERT INTO usuarios (id_cc, tipo_identificacion, fecha_expedicion, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, correo, telefono, pais, departamento, municipio, direccion_domicilio, zona_rural, vereda, contraseña) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conexion->prepare($sql);
    if ($stmt === false) {
        redirect_with_message("Error en la preparación de la consulta: " . $conexion->error);
    }

    // Vincular parámetros
    $stmt->bind_param("issssssssssssiss", $numero_documento, $tipo_identificacion, $fecha_expedicion, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $correo, $telefono, $pais, $departamento, $municipio, $direccion_domicilio, $zona_rural, $vereda, $contraseña_hashed);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        redirect_with_message("Registro exitoso.");
    } else {
        redirect_with_message("Error en la ejecución de la consulta: " . $stmt->error);
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $conexion->close();
} else {
    redirect_with_message("Método de solicitud no válido.");
}
