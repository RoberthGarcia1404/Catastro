<?php include_once '../procesos/verificar_sesion.php'; ?>
<?php include_once 'header.php'; ?>
<?php include_once 'header2.php'; ?>
<?php include_once '../procesos/conexion.php'; ?>

<?php
// Obtener el ID del usuario de la sesión
$usuario_id = $_SESSION['id_cc'];
$sql = "SELECT primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, tipo_identificacion FROM usuarios WHERE id_cc = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param('i', $usuario_id);
$stmt->execute();
$result = $stmt->get_result();
$usuario = $result->fetch_assoc();

// Cerrar la conexión y la declaración
$stmt->close();
$conexion->close();
?>

<section style="margin-top:-15px;">
    <h3 class="titulo-tramites titulos-principales">Detalles del predio</h3>
    <p class=" parrafos-principales" style="margin-top:-1.5rem; font-size: 1.14rem;">A continuación podrá consultar el datalle del predio seleccionado.</p>

    <p class="parrafos-principales estilo-terciario-parrafos ">Propietarios</p>
    <div class="contenedor-tablas">
        <table>
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Tipo de Documento</th>
                    <th>Número de Documento</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo strtoupper(htmlspecialchars($usuario['primer_nombre'] . ' ' . $usuario['segundo_nombre'] . ' ' . $usuario['primer_apellido'] . ' ' . $usuario['segundo_apellido'], ENT_QUOTES, 'UTF-8')); ?></td>
                    <td><?php echo strtoupper(htmlspecialchars($usuario['tipo_identificacion'], ENT_QUOTES, 'UTF-8')); ?></td>
                    <td><?php echo strtoupper(htmlspecialchars($usuario_id, ENT_QUOTES, 'UTF-8')); ?></td>
                </tr>
            </tbody>
        </table>

    </div>
    <p class="parrafos-principales estilo-terciario-parrafos ">Construcciones</p>
    <div class="contenedor-tablas">
        <table>
            <thead>
                <tr>
                    <th>Área (m²)</th>
                    <th>Número de Baños</th>
                    <th>Número de Habitaciones</th>
                    <th>Número de Locales</th>
                    <th>Número de Pisos</th>
                    <th>Puntaje</th>
                    <th>Uso</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>182</td>
                    <td>2</td>
                    <td>4</td>
                    <td>0</td>
                    <td>2</td>
                    <td>39</td>
                    <td>53</td>
                </tr>
            </tbody>
        </table>
    </div>
    <p class="parrafos-principales estilo-terciario-parrafos ">Terrenos</p>
    <div class="contenedor-tablas">
        <table>
            <thead>
                <tr>
                    <th>Área (m²)</th>
                    <th>Zona Física</th>
                    <th>Zona Geo-Económica</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>190</td>
                    <td>32</td>
                    <td>40</td>
                </tr>
            </tbody>
        </table>
    </div>




</section>

<?php include_once 'footer.php'; ?>
<script src="../../js/mensajeCerrarSesion.js"></script>