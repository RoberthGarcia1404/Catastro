<?php
session_start();
include_once '../procesos/conexion.php';
include_once '../procesos/verificar_sesion.php';
include_once 'header.php';
include_once 'header2.php';

if (!isset($_SESSION['radicacion'])) {
    echo "<script> window.location.href='consulta-tramite.php';</script>";
    exit();
}

$radicacion = $_SESSION['radicacion'];

// Consulta para obtener los datos del trámite
$stmt = $conexion->prepare("SELECT * FROM tramites WHERE radicado = ?");
$stmt->bind_param("s", $radicacion);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $tramite = $result->fetch_assoc();
} else {
    echo "<script>alert('Número de radicación no encontrado.'); window.location.href='consulta-tramite.php';</script>";
    exit();
}

$stmt->close();
$conexion->close();
?>

<section style="margin-top:-15px;">
    <h3 class="titulo-tramites titulos-principales">Consulta Estado de Trámites </h3>
    <div class="grid-tramites">
        <table>
            <thead>
                <tr>
                    <th>Número de Radicación</th>
                    <th>Fecha de Radicación</th>
                    <th>Estado del Trámite</th>
                    <th>Oficina</th>
                    <th>Documento</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo htmlspecialchars($tramite['radicado']); ?></td>
                    <td><?php echo htmlspecialchars($tramite['fecha']); ?></td>
                    <td><?php echo htmlspecialchars($tramite['estado']); ?></td>
                    <td>Centro administrartivo, bloque 2,Primer Piso</td> <!-- Ajusta según tu estructura de base de datos -->
                    <td class="icono-descarga"><i class='bx bx-download'></i></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php include_once 'footer.php'; ?>
<script src="../../js/mensajeCerrarSesion.js"></script>