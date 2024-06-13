let search = document.querySelector(".search-box");
document.querySelector("#buscar-icono").onclick = () => {
  search.classList.toggle("active");
  navbar.classList.remove("active");
};

let navbar = document.querySelector(".navbar");
document.querySelector("#menu-icono").onclick = () => {
  navbar.classList.toggle("active");
  search.classList.remove("active");
};

window.onscroll = () => {
  navbar.classList.remove("active");
  search.classList.remove("active");
};

//FUNCION PARA DESPLEGAR LOS SUBMENUS

function agregarComportamientoSubMenu(enlace, subMenu) {
  let timeoutID;

  function mostrarSubMenu() {
    if (!subMenu.classList.contains("show")) {
      subMenu.classList.add("show");
    }
  }

  function ocultarSubMenu() {
    subMenu.classList.remove("show");
  }

  enlace.addEventListener("mouseover", function () {
    mostrarSubMenu();
    clearTimeout(timeoutID);
  });

  enlace.addEventListener("mouseout", function () {
    timeoutID = setTimeout(ocultarSubMenu, tiempoEspera);
  });

  subMenu.addEventListener("mouseover", function () {
    clearTimeout(timeoutID);
  });

  subMenu.addEventListener("mouseout", function () {
    timeoutID = setTimeout(ocultarSubMenu, tiempoEspera);
  });
}

const tiempoEspera = 100;

// Aplicar la función a "Productos y Servicios"
agregarComportamientoSubMenu(
  document.getElementById("productos-servicios"),
  document.querySelector(".navbar li:nth-child(2) .submenu")
);

// Aplicar la función a "Datos Abiertos"
agregarComportamientoSubMenu(
  document.getElementById("datos-abiertos"),
  document.querySelector(".navbar li:nth-child(4) .submenu")
);

agregarComportamientoSubMenu(
  document.getElementById("multicarto"),
  document.querySelector(".navbar li:nth-child(3) .submenu")
);

//Aplicar la funciona a cerrar sesion en el header 2
agregarComportamientoSubMenu(
  document.getElementById("cerrar_sesion"),
  document.querySelector(".header2 .cc-usuario .submenu2")
);

/*HEADER 2 tramites con registro */
/* Estilo para la linea de el enlace permanesca activo */
// Espera a que todo el contenido del DOM esté completamente cargado antes de ejecutar el script
document.addEventListener('DOMContentLoaded', function() {
  
  // Obtiene el nombre del archivo actual de la URL
  // Ejemplo: si la URL es "http://ejemplo.com/inicio-con-registro.php",
  // la variable 'currentPage' será "inicio-con-registro.php"
  const currentPage = window.location.pathname.split('/').pop();
  
  // Selecciona todos los enlaces dentro de la barra de navegación con la clase 'navbar2'
  const navLinks = document.querySelectorAll('.navbar2 a');

  // Recorre cada enlace en la barra de navegación
  navLinks.forEach(link => {
    
      // Compara el atributo 'href' del enlace con el nombre de la página actual
      // Si coinciden, significa que este enlace apunta a la página actual
      if (link.getAttribute('href') === currentPage) {
          
          // Agrega la clase 'active' al enlace para que tenga los estilos definidos para el enlace activo
          link.classList.add('active');
      }
  });
});


