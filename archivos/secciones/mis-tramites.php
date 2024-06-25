<?php include_once '../procesos/verificar_sesion.php';?>
<?php include_once 'header.php'; ?>
<?php include_once 'header2.php'; ?>
<?php include_once '../procesos/conexion.php'; ?>

<section style="margin-top:-15px;">
    <h3 class="titulo-tramites titulos-principales">Consultar Trámites</h3>
    <p class="parrafos-principales" style="margin-top:-1.5rem; font-size: 1.14rem;">A continuación podrá consultar los trámites que tiene asociados.</p>
    <div class="contenedor-tablas">
        <table style="white-space: normal;">
            <thead>
                <tr>
                    <th style="width: 40%;">Trámite</th>
                    <th style="width: 20%;">Estado</th>
                    <th style="width: 10%;">Fecha</th>
                    <th style="width: 20%;">Radicado</th>
                    <th style="width: 10%;">Número predial</th>
                    <th>Motivo de devolución</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Obtener el ID del usuario de la sesión
                $usuario_id = $_SESSION['id_cc'];

                // Consultar los trámites asociados al usuario
                $sql = "SELECT tramite, estado, fecha, radicado, numero_predial, motivo_devolucion FROM tramites WHERE usuario_id = ?";
                $stmt = $conexion->prepare($sql);
                $stmt->bind_param('i', $usuario_id);
                $stmt->execute();
                $result = $stmt->get_result();

                // Iterar sobre los resultados y generar las filas de la tabla
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td style='width: 40%;'>{$row['tramite']}</td>";
                    echo "<td style='width: 20%;'>{$row['estado']}</td>";
                    echo "<td style='width: 10%;'>{$row['fecha']}</td>";
                    echo "<td style='width: 20%;'>{$row['radicado']}</td>";
                    echo "<td style='width: 10%;'>{$row['numero_predial']}</td>";
                    echo "<td>{$row['motivo_devolucion']}</td>";
                    echo "</tr>";
                }

                // Cerrar la conexión y la declaración
                $stmt->close();
                $conexion->close();
                ?>
            </tbody>
        </table>
    </div>
</section>

<?php include_once 'footer.php'; ?>
<script src="../../js/mensajeCerrarSesion.js"></script>
