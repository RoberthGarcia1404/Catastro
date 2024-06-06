<?php include_once 'header.php'; 
include 'ventana_modal.php'; 
?>

<section style="padding-bottom: 5rem;" class="margen-superior-section grid imagen-fondo">
    <div class="contenedor-informacion">
        <h2 class="titulo">Bienvenido al Servicio de Autenticación Digital</h2>
        <div class="contenido-lista">
            <span><i class='bx bx-check'></i> Accede a trámites y servicios del Estado colombiano con un único usuario y contraseña.</span>
            <br>
            <span><i class='bx bx-check'></i> Ingresa al sistema con tu número de identificación y contraseña.</span>
        </div>
        <div class="contenido-informacion">
            <span>
                <i class='bx bx-id-card'></i>
                <div>
                    <h3 class="subtitulo-h3">Acceso con documento de identidad</h3>
                    Debes ser colombiano y mayor de edad. Con un solo registro, tendrás mayor cobertura para realizar trámites y servicios
                </div>
            </span>
        </div>
    </div>

    <div class="login-container">
        <form action="../procesos/procesar-login.php" method="POST" class="formulario-login" enctype="multipart/form-data" id="form-inisioSesion">
            <h2>Inicio de sesión</h2>
            <label for="">Los campos marcados con * son obligatorios.</label>

            <label for="tipoAcceso">Tipo de acceso*</label>
            <select name="tipoAcceso" id="tipoAcceso" required onchange="cambiarTextoIdentificador()">
                <option value="cedula_ciudadania">Cédula de ciudadanía</option>
                <option value="cedula_extranjera">Cédula de extranjería</option>
                <option value="permiso_permanencia">Permiso especial de permanencia</option>
                <option value="permiso_proteccion">Permiso de protección temporal</option>
            </select>

            <label for="identificacion" id="identificacionLabel">Cédula de ciudadanía*</label>
            <input type="number" id="identificacion" name="identificacion" required>

            <label for="password">Contraseña*</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="login" id="submit-btn">Continuar</button>

            <p>¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
        </form>
    </div>

    <script>
        function cambiarTextoIdentificador() {
            var tipoAcceso = document.getElementById("tipoAcceso").value;
            var identificacionLabel = document.getElementById("identificacionLabel");
            
            if (tipoAcceso === "cedula_ciudadania") {
                identificacionLabel.textContent = "Cédula de ciudadanía*";
            } else if (tipoAcceso === "cedula_extranjera") {
                identificacionLabel.textContent = "Cédula de extranjería*";
            } else if (tipoAcceso === "permiso_permanencia") {
                identificacionLabel.textContent = "Permiso especial de permanencia*";
            } else if (tipoAcceso === "permiso_proteccion") {
                identificacionLabel.textContent = "Permiso de protección temporal*";
            }
        }
        cambiarTextoIdentificador();
    </script>
</section>

<!-- Activación de la ventana modal -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('submit-btn').addEventListener('click', function(event) {
        event.preventDefault(); // Evita el envío normal del formulario
        const formData = new FormData(document.getElementById('form-inisioSesion')); // Crear un nuevo FormData con los datos del formulario
        formData.append('login', 'true'); // Añade manualmente el campo 'login' para que sea reconocido en el servidor

        fetch('../procesos/procesar-login.php', { // Envía los datos del formulario a procesar-login.php usando el método POST
            method: 'POST',
            body: formData
        })
        .then(response => response.json()) // Parsear la respuesta del servidor como JSON
        .then(data => {
            openModal(data.message); // Mostrar el mensaje en el modal
            if (data.status === 'success') { // Si el inicio de sesión fue exitoso
                setTimeout(function() { // Esperar 1 segundo
                    window.location.href = 'inicio-con-registro.php'; // Redirigir a inicio-con-registro.php
                }, 1300); // 1000 milisegundos = 1 segundo
            }
        })
        .catch(error => console.error('Error:', error)); // Manejar cualquier error que ocurra durante la solicitud
    });
});
</script>



<?php include_once 'footer.php'; ?>
<script src="../../js/ventana_modal.js"></script>
