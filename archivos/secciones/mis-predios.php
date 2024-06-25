<?php include_once '../procesos/verificar_sesion.php'; ?>
<?php include_once 'header.php'; ?>
<?php include_once 'header2.php'; ?>

<section style="margin-top:-15px;">
    <h3 class="titulo-tramites titulos-principales">Consultar Predios</h3>
    <p class=" parrafos-principales" style="margin-top:-1.5rem; font-size: 1.14rem;">A continuación podrá consultar los predios que tiene asociados.</p>
    <div class="contenedor-tablas">
        <table>
            <thead>
                <tr>
                    <th>Número Predial</th>
                    <th>Avalúo (COP)</th>
                    <th>Área Terreno (m²)</th>
                    <th>Área Construcción (m²)</th>
                    <th>Matrícula</th>
                    <th>Dirección</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>13001010100000</td>
                    <td>405785000</td>
                    <td>190</td>
                    <td>182</td>
                    <td>060-37835</td>
                    <td>Cra 9 #19-27</td>
                    <td class="accion-iconos-tabla">
                        <span>
                            <a href="detalles-predios.php" title="Ver detalle"><i class='bx bx-search-alt-2'></i></a>

                        </span>
                        <a href="crear_tramite.php" title="Crear Tramite"><i class='bx bxs-add-to-queue'></i></a>
                        </span>

                    </td>
                </tr>

            </tbody>
        </table>
    </div>




</section>

<?php include_once 'footer.php'; ?>
<script src="../../js/mensajeCerrarSesion.js"></script>