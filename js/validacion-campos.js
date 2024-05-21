// --------------------------VALIDACION DE CORREOS--------------------------------------

document.getElementById('form-registro').addEventListener('submit', function(event) {
    // Refresca la validación de correos para asegurar que se capturan cambios de último momento
    validarCorreos();
  
    var correo = document.getElementById('correo');
    var confirmarCorreo = document.getElementById('confirmar_correo');
    var errorMensaje = document.getElementById('confirmar-correo-error');
  
    // Verificar que los correos coincidan antes de permitir el envío del formulario
    if (correo.value !== confirmarCorreo.value) {
        errorMensaje.style.display = 'block'; // Asegura que el mensaje de error sea visible
        event.preventDefault(); // Detiene el envío del formulario
    }
  });
  
  // Función de validación de correos
  function validarCorreos() {
    var correo = document.getElementById('correo');
    var confirmarCorreo = document.getElementById('confirmar_correo');
    var errorMensaje = document.getElementById('confirmar-correo-error');
  
    if (correo.value.trim() && confirmarCorreo.value.trim()) {
        if (correo.value !== confirmarCorreo.value) {
            errorMensaje.style.display = 'block'; // Muestra el mensaje de error
            errorMensaje.textContent = "Verifica que los Correos Electronicos Coincidan"; // Mensaje de error personalizado
        } else {
            errorMensaje.style.display = 'none'; // Oculta el mensaje de error
        }
    } else {
        errorMensaje.style.display = 'none'; // Oculta el mensaje de error si alguno de los campos está vacío
    }
  }
  
  // Agrega listeners a ambos campos de correo electrónico
  var correo = document.getElementById('correo');
  var confirmarCorreo = document.getElementById('confirmar_correo');
  correo.addEventListener('input', validarCorreos);
  confirmarCorreo.addEventListener('input', validarCorreos);
  


// ----------------------VALIDACION DE CAMPOS------------------------------------------




document.addEventListener("DOMContentLoaded", function () {
    // Lista de campos requeridos y sus mensajes de error asociados
    var camposRequeridos = [
        { id: 'numero-documento', errorId: 'documento-error' },
        { id: 'fecha_expedicion', errorId: 'fecha-error' },
        { id: 'primer_nombre', errorId: 'nombre-error' },
        { id: 'primer_apellido', errorId: 'apellido-error' },
        { id: 'correo', errorId: 'correo-error' },
        { id: 'confirmar_correo', errorId: 'new-correo-error' },
        { id: 'telefono', errorId: 'phone-error' },
        { id: 'departamento', errorId: 'departamento-error' },
        { id: 'municipio', errorId: 'municipio-error' },
        { id: 'direccion-domicilio', errorId: 'direccion-error' } // Asegúrate de que existe este ID en tu HTML
    ];
  
    camposRequeridos.forEach(function(campo) {
        var inputElement = document.getElementById(campo.id);
        var errorElement = document.getElementById(campo.errorId);
  
        if (inputElement && errorElement) {
            inputElement.addEventListener('input', function() {
                if (inputElement.value.trim() !== '') {
                    errorElement.style.display = 'none';
                } else {
                    errorElement.style.display = 'block';
                }
            });
        }
    });
  });