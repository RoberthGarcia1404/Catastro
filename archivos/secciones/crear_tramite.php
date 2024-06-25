<?php include_once '../procesos/verificar_sesion.php'; ?>
<?php include_once 'header.php'; ?>
<?php include_once 'header2.php'; ?>


<link rel="stylesheet" href="../../css/crear_tramite.css">

<section style="margin-top:-15px;">
    <h3 class="titulo-tramites titulos-principales">Crear Trámite</h3>
    <p class="parrafos-principales" style="margin-top:-1.5rem; font-size: 1.14rem;">
        A continuación podrá crear un trámite para el predio seleccionado.
    </p>

    <div class="contenedor-tramites">
        <!-- Contenedor para mensajes de error -->
        <div id="errorMessage" class="error-message-container"></div>
        <form id="tramiteForm" action="../procesos/crear_tramites.php" method="POST" enctype="multipart/form-data">
            <div class="opciones_tramites">
                <div>
                    <input type="hidden" id="tramiteNombre" name="tramiteNombre">
                    <input type="hidden" id="tipoTramiteNombre" name="tipoTramiteNombre">

                    <label for="tramite">Trámite *</label>
                    <select id="tramite" name="tramite" required>
                        <option value="">Seleccionar...</option>
                    </select>
                </div>

                <div id="tipoTramiteContainer" style="display: none;">
                    <label for="tipoTramite">Tipo de trámite *</label>
                    <select id="tipoTramite" name="tipoTramite" required>
                        <option value="">Seleccionar...</option>
                    </select>
                </div>
            </div>

            <div id="documentosContainer" style="display: none;">
                <!-- Campos de documentos serán cargados dinámicamente -->
            </div>

            <div class="botones">
                <button type="button" onclick="limpiarFormulario()">Limpiar</button>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>


</section>

<?php include_once 'footer.php'; ?>

<script src="../../js/tramites.js"></script>
<script src="../../js/mensajeCerrarSesion.js"></script>