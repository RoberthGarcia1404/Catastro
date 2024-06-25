<?php
session_start();
include_once 'conexion.php';

function generarNumeroRadicado() {
    $año = date('Y');
    $secuencia = str_pad(rand(1, 999999), 6, '0', STR_PAD_LEFT);
    return "{$año}-{$secuencia}";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_id = $_SESSION['id_cc'];
    $tramite = $_POST['tramite'];
    $tipoTramite = $_POST['tipoTramite'];
    $fecha = date('Y-m-d');
    $radicado = generarNumeroRadicado();
    $numero_predial = '13001010100000'; // Dato duro

    // Insertar el trámite en la base de datos
    $sql = "INSERT INTO tramites (usuario_id, tramite, estado, fecha, radicado, numero_predial) VALUES (?, ?, 'Para asignación', ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('issss', $usuario_id, $tramite, $fecha, $radicado, $numero_predial);
    
    if ($stmt->execute()) {
        $tramite_id = $stmt->insert_id;

        // Subir documentos
        $documentos = $_FILES['documentos'];
        $carpetaDestino = '../../archivos_Usuarios/crear_tramites/';
        foreach ($documentos['tmp_name'] as $key => $tmp_name) {
            $nombreArchivo = $documentos['name'][$key];
            $rutaDestino = $carpetaDestino . basename($nombreArchivo);

            if (move_uploaded_file($tmp_name, $rutaDestino)) {
                $sqlDoc = "INSERT INTO documentos_tramites (tramite_id, nombre_documento, archivo_path) VALUES (?, ?, ?)";
                $stmtDoc = $conexion->prepare($sqlDoc);
                $stmtDoc->bind_param('iss', $tramite_id, $nombreArchivo, $rutaDestino);
                $stmtDoc->execute();
                $stmtDoc->close();
            }
        }

        echo "Trámite creado con éxito. Número de radicado: {$radicado}";
    } else {
        echo "Error al crear el trámite: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
}
?>
