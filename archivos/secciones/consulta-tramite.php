<?php include_once 'header.php'; ?>

<?php include_once 'header2.php'; ?>

<section  style="margin-top:-15px;">
    <h3 class="titulo-tramites titulos-principales">Consulta Estado de Trámites </h3>
    <div class="contenedor-formulario-radicacion">
        <form action="procesar_radicacion.php" method="post">
            <label for="radicacion">Número de radicación:</label>
            <input type="text" id="radicacion" name="radicacion" placeholder="Ingrese número de radicación" required>
            <button type="submit">Consultar</button>
        </form>

    </div>



</section>

<?php include_once 'footer.php'; ?>