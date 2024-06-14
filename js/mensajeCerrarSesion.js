console.log("mensajeCerrarSesion.js cargado");
document.addEventListener('DOMContentLoaded', function() {
    // Seleccionar todos los enlaces del header principal
    const enlacesHeader1 = document.querySelectorAll('header .navbar a, header .header-icon a, .logo');
    
    enlacesHeader1.forEach(enlace => {
        enlace.addEventListener('click', function(event) {
            event.preventDefault(); // Evita que el enlace funcione normalmente
            if (confirm('Debes cerrar sesión antes de navegar a otra página. ¿Deseas cerrar sesión ahora?')) {
                // Si el usuario acepta, redirigir a la página de cierre de sesión
                window.location.href = '../procesos/cerrar_sesion.php';
            }
            // Si el usuario cancela, simplemente no hacer nada, lo que mantiene la navegación en la página actual
        });
    });
});