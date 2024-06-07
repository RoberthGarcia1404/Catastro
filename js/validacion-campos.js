// --------------------------VALIDACION DE CORREOS--------------------------------------

document.getElementById('form-registro').addEventListener('submit', function (event) {
    // Previene el envío del formulario por defecto
    event.preventDefault(); 

    // Refresca la validación de correos para asegurar que se capturan cambios de último momento
    validarCorreos();

    var correo = document.getElementById('correo');
    var confirmarCorreo = document.getElementById('confirmar_correo');
    var errorMensajeCorreo = document.getElementById('confirmar-correo-error');

    // Verificar que los correos coincidan antes de permitir el envío del formulario
    if (correo.value !== confirmarCorreo.value) {
        errorMensajeCorreo.style.display = 'block'; // Asegura que el mensaje de error sea visible
        return; // Detiene el envío del formulario
    } else {
        errorMensajeCorreo.style.display = 'none';
    }

    // Refresca la validación de contraseñas para asegurar que se capturan cambios de último momento
    validarContraseñas();

    var contraseña = document.getElementById('contraseña');
    var confirmarContraseña = document.getElementById('comfirmar-contraseña');
    var errorMensajeContraseña = document.getElementById('verificar-contraseña-error');

    // Verificar que las contraseñas coincidan antes de permitir el envío del formulario
    if (contraseña.value !== confirmarContraseña.value) {
        errorMensajeContraseña.style.display = 'block'; // Asegura que el mensaje de error sea visible
        return; // Detiene el envío del formulario
    } else {
        errorMensajeContraseña.style.display = 'none';
    }

    // Validar todos los campos obligatorios antes de enviar el formulario
    var formIsValid = validarFormulario();
    if (!formIsValid) {
        openModal('Todos los campos obligatorios deben ser completados.');
        return; // No enviar el formulario si no es válido
    }

    // Si todo es válido, proceder a enviar el formulario
    enviarFormulario();
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

// Función de validación de contraseñas
function validarContraseñas() {
    var contraseña = document.getElementById('contraseña');
    var confirmarContraseña = document.getElementById('comfirmar-contraseña');
    var errorMensaje = document.getElementById('verificar-contraseña-error');

    if (contraseña.value.trim() && confirmarContraseña.value.trim()) {
        if (contraseña.value !== confirmarContraseña.value) {
            errorMensaje.style.display = 'block'; // Muestra el mensaje de error
            errorMensaje.textContent = "Las contraseñas no coinciden"; // Mensaje de error personalizado
        } else {
            errorMensaje.style.display = 'none'; // Oculta el mensaje de error
        }
    } else {
        errorMensaje.style.display = 'none'; // Oculta el mensaje de error si alguno de los campos está vacío
    }
}

// Función de validación de campos obligatorios
function validarFormulario() {
    var camposRequeridos = [
        { id: 'numero-documento', errorId: 'documento-error' },
        { id: 'fecha_expedicion', errorId: 'fecha-error' },
        { id: 'primer_nombre', errorId: 'nombre-error' },
        { id: 'primer_apellido', errorId: 'apellido-error' },
        { id: 'correo', errorId: 'correo-error' },
        { id: 'confirmar_correo', errorId: 'confirmacion-correo-error' },
        { id: 'telefono', errorId: 'phone-error' },
        { id: 'departamento', errorId: 'departamento-error' },
        { id: 'municipio', errorId: 'municipio-error' },
        { id: 'direccion-domicilio', errorId: 'direccion-error' },
        { id: 'contraseña', errorId: 'contraseña-error' },
        { id: 'comfirmar-contraseña', errorId: 'confirmar-contraseña-error' }
    ];

    var formIsValid = true;

    camposRequeridos.forEach(function (campo) {
        var inputElement = document.getElementById(campo.id);
        var errorElement = document.getElementById(campo.errorId);

        if (inputElement && errorElement) {
            if (inputElement.value.trim() === '') {
                errorElement.style.display = 'block';
                formIsValid = false;
            } else {
                errorElement.style.display = 'none';
            }
        }
    });

    return formIsValid;
}

// Agrega listeners a ambos campos de correo electrónico
var correo = document.getElementById('correo');
var confirmarCorreo = document.getElementById('confirmar_correo');
correo.addEventListener('input', validarCorreos);
confirmarCorreo.addEventListener('input', validarCorreos);

// Agrega listeners a ambos campos de contraseña
var contraseña = document.getElementById('contraseña');
var confirmarContraseña = document.getElementById('comfirmar-contraseña');
contraseña.addEventListener('input', validarContraseñas);
confirmarContraseña.addEventListener('input', validarContraseñas);

// Agrega listeners a los campos obligatorios para validación en tiempo real
document.addEventListener("DOMContentLoaded", function () {
    var camposRequeridos = [
        { id: 'numero-documento', errorId: 'documento-error' },
        { id: 'fecha_expedicion', errorId: 'fecha-error' },
        { id: 'primer_nombre', errorId: 'nombre-error' },
        { id: 'primer_apellido', errorId: 'apellido-error' },
        { id: 'correo', errorId: 'correo-error' },
        { id: 'confirmar_correo', errorId: 'confirmacion-correo-error' },
        { id: 'telefono', errorId: 'phone-error' },
        { id: 'departamento', errorId: 'departamento-error' },
        { id: 'municipio', errorId: 'municipio-error' },
        { id: 'direccion-domicilio', errorId: 'direccion-error' },
        { id: 'contraseña', errorId: 'contraseña-error' },
        { id: 'comfirmar-contraseña', errorId: 'confirmar-contraseña-error' }
    ];

    camposRequeridos.forEach(function (campo) {
        var inputElement = document.getElementById(campo.id);
        var errorElement = document.getElementById(campo.errorId);

        if (inputElement && errorElement) {
            inputElement.addEventListener('input', function () {
                if (inputElement.value.trim() !== '') {
                    errorElement.style.display = 'none';
                } else {
                    errorElement.style.display = 'block';
                }
            });
        }
    });
});

// Función para enviar el formulario al servidor
function enviarFormulario() {
    const formData = new FormData(document.getElementById('form-registro'));
    formData.append('registro', 'true'); // Añade manualmente el campo 'registro'

    fetch('../procesos/registro_usuarios.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        openModal(data.message);
        if (data.status === 'success') {
            setTimeout(function() {
                window.location.href = 'inicioSesion.php'; // Redirige después de 1.5 segundos
            }, 1500); // 1500 milisegundos = 1.5 segundos
        }
    })
    .catch(error => console.error('Error:', error));
}
