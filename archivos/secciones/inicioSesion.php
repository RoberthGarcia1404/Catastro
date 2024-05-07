<?php include_once 'header.php'; ?>



<section class="margen-superior-section grid imagen-fondo">

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
    <form action="procesar_login.php" method="POST" class="formulario-login" enctype="multipart/form-data">
        <h2>Inicio de sesión</h2>
        <label for="">Los campos marcados con * son obligatorios.</label>

        <label for="tipoAcceso">Tipo de acceso*</label>
        <select name="tipoAcceso" id="tipoAcceso" required onchange="cambiarTextoIdentificador()">
            <option value="cedulaCiudadania">Cédula de ciudadanía</option>
            <option value="cedulaExtranjeria">Cédula de extranjería</option>
            <option value="permisoEspecialPermanencia">Permiso especial de permanencia</option>
        </select>

        <label for="identificacion" id="identificacionLabel">Cédula de ciudadanía*</label>
        <input type="text" id="identificacion" name="identificacion" required>

        <label for="password">Contraseña*</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Continuar</button>

        <p>¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
    </form>
</div>

<script>
    function cambiarTextoIdentificador() {
        var tipoAcceso = document.getElementById("tipoAcceso").value;
        var identificacionLabel = document.getElementById("identificacionLabel");
        
        if (tipoAcceso === "cedulaCiudadania") {
            identificacionLabel.textContent = "Cédula de ciudadanía*";
        } else if (tipoAcceso === "cedulaExtranjeria") {
            identificacionLabel.textContent = "Cédula de extranjería*";
        } else if (tipoAcceso === "permisoEspecialPermanencia") {
            identificacionLabel.textContent = "Permiso especial de permanencia*";
        }
    }

    // Llamamos a la función para que se ejecute al cargar la página por si el usuario selecciona algo antes de cargar el script
    cambiarTextoIdentificador();
</script>


</section>




<?php include_once 'footer.php'; ?>