<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/country-select-js/2.1.0/css/countrySelect.min.css" />

<?php include_once 'header.php'; ?>

<section style="margin-top:4rem;">
  <h3 class="titulos-principales">REGISTRARSE</h3>
  <p class="parrafos-principales">
    A continuación, ingresa tus datos. Estos deben ser diligenciados tal y como aparecen en tu documento de identidad.
    <br>
    Los campos marcados con * son obligatorios.
  </p>

  <div class="registro-contenedor">
    <div class="registro">
      <div class="registro-izquierda">
        <form id="form-izquierda">
          <div class="campo">
            <label for="tipo_identificacion">Tipo de Identificación *</label>
            <select id="tipo_identificacion" name="tipo_identificacion" required>
              <option value="cedula_ciudadania">Cédula de Ciudadanía</option>
              <option value="cedula_extranjera">Cédula Extranjera</option>
              <option value="permiso_permanencia">Permiso Especial de Permanencia</option>
              <option value="permiso_proteccion">Permiso de Protección Temporal</option>
            </select>
            <span class="error" id="identificacion-error">Este campo es obligatorio.</span>
          </div>



          <div class="campo">
            <label for="numero-documento">Número de identificación *</label>
            <input type="text" id="numero-documento" name="numero-documento" required>
            <span class="error" id="nombre-error">Este campo es obligatorio.</span>
          </div>

          <div class="campo">
            <label for="fecha_expedicion">Fecha de Expedición *</label>
            <div class="input-icon">
              <input type="date" id="fecha_expedicion" name="fecha_expedicion" required>
            </div>
            <span class="error" id="fecha-error">Este campo es obligatorio.</span>
          </div>



          <div class="campo">
            <label for="primer_nombre">Primer Nombre *</label>
            <input type="text" id="primer_nombre" name="primer_nombre" required>
            <span class="error" id="nombre-error">Este campo es obligatorio.</span>
          </div>


          <div class="campo">
            <label for="segundo_nombre">Segundo Nombre</label>
            <input type="text" id="segundo_nombre" name="segundo_nombre">
            <p class="parrafo-opcional">*Si tienes segundo nombre, diligencia este campo</p>
          </div>
          <div class="campo">
            <label for="primer_apellido">Primer Apellido *</label>
            <input type="text" id="primer_apellido" name="primer_apellido" required>
            <span class="error" id="apellido-error">Este campo es obligatorio.</span>
          </div>
          <div class="campo">
            <label for="segundo_apellido">Segundo Apellido</label>
            <input type="text" id="segundo_apellido" name="segundo_apellido">
            <p class="parrafo-opcional">*Si tienes segundo apellido, diligencia este campo</p>
          </div>
        </form>
      </div>

      <div class="registro-derecha">
        <form id="form-registro">
          <div class="campo">
            <label for="correo">Correo Electrónico *</label>
            <input type="email" id="correo" name="correo" required>
            <span class="error" id="correo-error">Este campo es obligatorio.</span>
          </div>
          <div class="campo">
            <label for="confirmar_correo">Confirmar Correo Electrónico *</label>
            <input type="email" id="confirmar_correo" name="confirmar_correo" required>
            <span class="error" id="confirmar-correo-error">Este campo es obligatorio.</span>
          </div>
          <div class="campo">
            <label for="telefono">Número de Celular *</label>
            <input type="tel" id="telefono" name="telefono" required>
            <span class="error" id="phone-error">Ingrese un número de teléfono válido</span>
          </div>
          <div class="campo">
            <label for="pais">País *</label>
            <input id="pais" name="pais" type="text" required>
            <span class="error" id="pais-error">Este campo es obligatorio.</span>
          </div>
          <div class="campo">
            <label for="departamento">Departamento *</label>
            <select id="departamento" name="departamento" required disabled>
              <option value="">Seleccione un departamento</option>
            </select>
            <span class="error" id="departamento-error">Este campo es obligatorio.</span>
          </div>
          <div class="campo">
            <label for="municipio">Municipio *</label>
            <select id="municipio" name="municipio" required disabled>
              <option value="">Seleccione un municipio</option>
            </select>
            <span class="error" id="municipio-error">Este campo es obligatorio.</span>
          </div>


          <div class="campo">
            <label for="direccion-domicilio">Dirección de Domicilio</label>
            <input type="text" id="direccion-domicilio" name="direccion-domicilio" required>
          </div>

          <div class="campo">
            <label for="zona_rural">¿Vives en Zona Rural?</label>
            <input type="checkbox" id="zona_rural" name="zona_rural">
          </div>
        </form>
      </div>
    </div>

    <div class="botones">
      <a href="inicioSesion.php" class="boton boton-cancelar">Cancelar</a>
      <button type="submit" form="form-registro" class="boton boton-registrarse" id="submit-btn">Registrarse</button>
    </div>
  </div>
</section>

<?php include_once 'footer.php'; ?>

<!-- JS del plugin intl-tel-input -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<!-- Incluir bibliotecas JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/country-select-js/2.1.0/js/countrySelect.min.js"></script>
<script src="../../js/validacion-campos.js"></script>
<script src="../../js/funcionalidades-registro.js"></script>


