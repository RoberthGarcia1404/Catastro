<?php include_once 'header.php'; ?>

<section style="margin-top:4rem;">
  <h3 class="titulo-tramites titulos-principales">Registrarse</h3>
  <section class="contenedor-parrafo">
    <p class="parrafo-estilo">
      A continuación, ingresa tus datos. Estos deben ser diligenciados tal y como aparecen en tu documento de identidad.
      <br>
      Los campos marcados con * son obligatorios.
    </p>
  </section>

  <div class="registro-contenedor">
    <div class="registro">
      <div class="registro-izquierda">
        <form>
          <div class="campo">
            <label for="tipo_identificacion">Tipo de Identificación *</label>
            <select id="tipo_identificacion" name="tipo_identificacion">
              <option value="cedula">Cédula de Ciudadanía</option>
              <option value="tarjeta_identidad">Tarjeta de Identidad</option>
              <option value="otro">Otro</option>
            </select>
          </div>
          <div class="campo">
            <label for="fecha_expedicion">Fecha de Expedición *</label>
            <div class="input-icon">
              <input type="date" id="fecha_expedicion" name="fecha_expedicion">
            </div>
          </div>
          <div class="campo">
            <label for="primer_nombre">Primer Nombre *</label>
            <input type="text" id="primer_nombre" name="primer_nombre">
          </div>
          <div class="campo">
            <label for="segundo_nombre">Segundo Nombre</label>
            <input type="text" id="segundo_nombre" name="segundo_nombre">
          </div>
          <div class="campo">
            <label for="primer_apellido">Primer Apellido *</label>
            <input type="text" id="primer_apellido" name="primer_apellido">
          </div>
          <div class="campo">
            <label for="segundo_apellido">Segundo Apellido</label>
            <input type="text" id="segundo_apellido" name="segundo_apellido">
          </div>
        </form>
      </div>

      <div class="registro-derecha">
        <form id="form-registro">
          <div class="campo">
            <label for="correo">Correo Electrónico *</label>
            <input type="email" id="correo" name="correo">
          </div>
          <div class="campo">
            <label for="confirmar_correo">Confirmar Correo Electrónico *</label>
            <input type="email" id="confirmar_correo" name="confirmar_correo">
          </div>
          <div class="campo">
            <label for="celular">Número de Celular *</label>
            <input type="tel" id="celular" name="celular">
          </div>
          <div class="campo">
            <label for="pais">País *</label>
            <select id="pais" name="pais">
              <option value="colombia" selected>Colombia</option>
              <option value="otro">Otro</option>
            </select>
          </div>
          <div class="campo">
            <label for="departamento">Departamento *</label>
            <select id="departamento" name="departamento">
              <!-- Aquí debes agregar los departamentos de Colombia -->
            </select>
          </div>
          <div class="campo">
            <label for="municipio">Municipio *</label>
            <select id="municipio" name="municipio">
              <!-- Aquí se cargarán los municipios según el departamento seleccionado -->
            </select>
          </div>
          <div class="campo">
            <label for="zona_rural">¿Vives en Zona Rural?</label>
            <input type="checkbox" id="zona_rural" name="zona_rural">
          </div>
        </form>
      </div>
    </div>

    <div class="botones">
         <button><a  href="inicioSesion.php" class="boton-cancelar">Cancelar</a></button>
         <button type="submit" form="form-registro" class="boton-registrarse">Registrarse</button>
    </div>

  </div>
</section>

<?php include_once 'footer.php'; ?>
