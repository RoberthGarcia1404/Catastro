document.addEventListener("DOMContentLoaded", function() {
    const input = document.querySelector("#telefono");
    const errorMsg = document.querySelector("#phone-error");
  
    const iti = window.intlTelInput(input, {
      initialCountry: "co",
      separateDialCode: true,
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
    });
  
    // Validar el número de teléfono al enviar el formulario
    document.querySelector("#form-registro").addEventListener("submit", function(event) {
      const phoneNumber = input.value.replace(/\D/g, ''); // Eliminar todos los caracteres no numéricos
  
      // Verificar si el número tiene exactamente 10 dígitos y no contiene caracteres no numéricos
      if (!/^\d{10}$/.test(phoneNumber)) {
        event.preventDefault();
        errorMsg.style.display = 'block';
      } else {
        errorMsg.style.display = 'none';
      }
    });
  
    // Ocultar el mensaje de error cuando el usuario comience a escribir
    input.addEventListener("input", function() {
      errorMsg.style.display = 'none';
    });
  });










