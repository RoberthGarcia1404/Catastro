<?php


if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contacto = $_POST['contacto'];
    $comentario = $_POST['comentario'];
    $ruta = "";
    $ruta2 = "";

    $nombre_base= "";
    $nombre_final = "";
    $subir_archivo= "";

    require_once('conexion.php');

    if($_FILES['archivo']){
        $nombre_base = basename($_FILES['archivo']['name']);
        $nombre_final = date("m-d-y")."_". date("h-i-s")."-".$nombre_base;
        $ruta = "../../archivos_formulario_pqrs/".$nombre_final;
        $ruta2 = "archivos_formulario_pqrs/".$nombre_final;

        $subir_archivo = move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta);
    }
    $stmt = $conexion->prepare("INSERT INTO formulario_pqrs (nombre, apellido, cedula, telefono, correo, contacto, comentario, archivo_path) VALUES (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss", $nombre, $apellido, $cedula, $telefono, $correo, $contacto, $comentario, $ruta2);
    $stmt->execute();
    $stmt->close();
    echo '<script>';
    echo 'alert("¡Tu formulario ha sido enviado correctamente!");';
    echo 'window.location.href = "' . getenv('HTTP_REFERER') . '";'; // Redirigir después de que el usuario haga clic en "Aceptar" en la ventana emergente
    echo '</script>';

}

?>




