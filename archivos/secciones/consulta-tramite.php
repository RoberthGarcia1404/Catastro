<?php include_once '../procesos/verificar_sesion.php'; ?>
<?php include_once 'header.php'; ?>
<?php include_once 'header2.php'; ?>
<?php include 'ventana_modal.php'; ?>

<section style="margin-top:-15px;">
    <h3 class="titulo-tramites titulos-principales">Consulta Estado de Trámites </h3>
    <div class="contenedor-formulario-radicacion">
        <form id="radicacionForm" action="" method="post">
            <label for="radicacion">Número de radicación:</label>
            <input type="text" id="radicacion" name="radicacion" placeholder="Ingrese número de radicación" required>
            <button type="submit">Consultar</button>
        </form>

    </div>



</section>
<script>
    document.getElementById('radicacionForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(this);

        fetch('../procesos/procesar_consulta_tramite.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                openModal(data.message);
                if (data.status === 'success') {
                    setTimeout(function() {
                        window.location.href = 'estado-tramite.php';
                    }, 2000); // Redirigir después de 2 segundos
                }
            })
            .catch(error => {
                openModal('Ocurrió un error al procesar la consulta.');
                console.error('Error:', error);
            });
    });
</script>
<script src="../../js/ventana_modal.js"></script>
<script src="../../js/mensajeCerrarSesion.js">
</script><?php include_once 'footer.php'; ?>