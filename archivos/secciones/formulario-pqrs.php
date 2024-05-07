<?php include_once 'header.php'; ?>

<section class="margen-superior-section">
    <h1 class="titulos-principales centrar">FORMULARIO DE COMENTARIOS Y RECLAMACIONES</h1>
    <p class=" parrafos-principales">Este formulario te permite proporcionar tus Peticiones, Quejas, Reclamos y Sugerencias sobre nuestros productos o servicios. Puedes completar los siguientes campos.</p>

    <div class="contenedor-formulario">
        <form action="../procesos/registro_formulario_pqrs.php" method="post" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required><br>

            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" required><br>

            <label for="cedula">Cédula:</label>
            <input type="text" name="cedula" pattern="[0-9]+" required><br>

            <label for="telefono">Número de Teléfono:</label>
            <input type="tel" name="telefono" pattern="[0-9]+" required><br>

            <label for="correo">Correo:</label>
            <input type="email" name="correo" required><br>


            <label for="archivo">Evidencia (Archivo):</label>
            <input type="file" name="archivo" accept=".pdf, .doc, .jpg, .png "><br>

            <label for="contacto">Método de Contacto:</label>
            <select name="contacto" required>
                <option value="whatsapp">WhatsApp</option>
                <option value="correo">Correo Electrónico</option>
                <option value="telefono">Llamada Telefónica</option>
            </select><br>
            <label for="comentario">Comentario:</label>
            <textarea name="comentario" rows="4" required></textarea><br>

            <button type="submit" name="enviar">Enviar</button>


        </form>
    </div>


</section>

<?php include_once 'footer.php'; ?>