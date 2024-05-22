<?php
session_start();
include_once 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitización y Validación de Datos utilizando alternativas modernas
    $tipo_identificacion = htmlspecialchars($_POST['tipo_identificacion']);
    $numero_documento = filter_var($_POST['numero-documento'], FILTER_VALIDATE_INT);
    $fecha_expedicion = htmlspecialchars($_POST['fecha_expedicion']);
    $primer_nombre = htmlspecialchars($_POST['primer_nombre']);
    $segundo_nombre = isset($_POST['segundo_nombre']) ? htmlspecialchars($_POST['segundo_nombre']) : '';
    $primer_apellido = htmlspecialchars($_POST['primer_apellido']);
    $segundo_apellido = isset($_POST['segundo_apellido']) ? htmlspecialchars($_POST['segundo_apellido']) : '';
    $correo = filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL);
    $confirmar_correo = filter_var($_POST['confirmar_correo'], FILTER_VALIDATE_EMAIL);
    $telefono = htmlspecialchars($_POST['telefono']);
    $pais = htmlspecialchars($_POST['pais']);
    $departamento = isset($_POST['departamento']) ? htmlspecialchars($_POST['departamento']) : '';
    $municipio = isset($_POST['municipio']) ? htmlspecialchars($_POST['municipio']) : '';
    $direccion_domicilio = htmlspecialchars($_POST['direccion-domicilio']);
    $zona_rural = isset($_POST['zona_rural']) ? 1 : 0;
    $vereda = isset($_POST['vereda']) ? htmlspecialchars($_POST['vereda']) : '';
    $contraseña = $_POST['contraseña'];
    $confirmar_contraseña = $_POST['comfirmar-contraseña'];

    // Verificar si los correos coinciden
    if ($correo !== $confirmar_correo) {
        die("Los correos electrónicos no coinciden.");
    }

    // Verificar si las contraseñas coinciden
    if ($contraseña !== $confirmar_contraseña) {
        die("Las contraseñas no coinciden.");
    }

    // Verificar si el número de documento ya está registrado
    $stmt = $conexion->prepare("SELECT id_cc FROM usuarios WHERE id_cc = ?");
    $stmt->bind_param("i", $numero_documento);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        die("El número de identificación ya está registrado.");
    }
    $stmt->close();

    // Verificar si el correo electrónico ya está registrado
    $stmt = $conexion->prepare("SELECT correo FROM usuarios WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        die("El correo electrónico ya está registrado.");
    }
    $stmt->close();

    // Hash de la contraseña
    $contraseña_hashed = password_hash($contraseña, PASSWORD_DEFAULT);

    // Preparar la consulta de inserción
    $sql = "INSERT INTO usuarios (id_cc, tipo_identificacion, fecha_expedicion, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, correo, telefono, pais, departamento, municipio, direccion_domicilio, zona_rural, vereda, contraseña) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conexion->prepare($sql);
    if ($stmt === false) {
        die("Error en la preparación de la consulta: " . $conexion->error);
    }

    // Vincular parámetros
    $stmt->bind_param("issssssssssssiss", $numero_documento, $tipo_identificacion, $fecha_expedicion, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $correo, $telefono, $pais, $departamento, $municipio, $direccion_domicilio, $zona_rural, $vereda, $contraseña_hashed);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Registro exitoso
        header("Location: ../secciones/inicioSesion.php");
        exit();
    } else {
        // Error en el registro
        die("Error en la ejecución de la consulta: " . $stmt->error);
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $conexion->close();
} else {
    // Si el método de solicitud no es POST
    header("Location: registro.php");
    exit();
}
?>
