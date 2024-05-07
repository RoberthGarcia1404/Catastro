<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del formulario Panel Administrador</title>
    <!-- Enlazar el archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>


    <?php
        require_once("archivos/procesos/conexion.php");
        $sql = "select * from formulario_pqrs";
        $resultado = $conexion->query($sql);
    ?>


    <div class="container">
        <h1 class="text-center">Datos del formulario Panel Administrador</h1>
        <br>
        <!-- Crear una tabla con Bootstrap para mostrar los datos -->
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cédula</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Metodo Contacto</th>
                    <th>Comentario</th>
                    <th>Archivo</th>
                </tr>
            </thead>
            <tbody>
                <?php  while($registro = $resultado->fetch_assoc()): ?> 
                <tr>
                    <td><?php echo $registro['nombre']; ?></td>
                    <td><?php echo $registro['apellido']; ?></td>
                    <td><?php echo $registro['cedula']; ?></td>
                    <td><?php echo $registro['telefono']; ?></td>
                    <td><?php echo $registro['correo']; ?></td>
                    <td><?php echo $registro['contacto']; ?></td>
                    <td><?php echo $registro['comentario']; ?></td>
                    <td><a href="<?php echo $registro['archivo_path']; ?>" target="_blank">Descargar</a></td>
                </tr>
                <?php endwhile; ?> 
                


            </tbody>
        </table>
        <?php $conexion->close();?>
    </div>
    <!-- Enlazar los archivos JS de Bootstrap y sus dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
