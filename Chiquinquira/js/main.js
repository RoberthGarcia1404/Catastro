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


