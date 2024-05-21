document.addEventListener("DOMContentLoaded", function () {
  initializePhoneNumberInput();
  initializeFormValidation();
  initializeCountrySelect();

  // Verificar si el país por defecto es Colombia y cargar departamentos
  const initialCountry = $("#pais").countrySelect(
    "getSelectedCountryData"
  ).iso2;
  if (initialCountry === "co") {
    loadColombianDepartments();
  }


// Check box vereda
  var checkbox = document.getElementById('zona_rural');
  var veredaContainer = document.querySelector('.vereda-container'); // Asegúrate de que apunta al contenedor que incluye tanto el label como el input

  // Función para controlar la visibilidad del contenedor de "vereda"
  function toggleVereda() {
      if (checkbox.checked) {
          veredaContainer.style.display = 'block';
      } else {
          veredaContainer.style.display = 'none';
      }
  }

  // Agregar listener al checkbox
  checkbox.addEventListener('change', toggleVereda);

  // Llamar a la función al cargar la página para establecer el estado inicial correcto
  toggleVereda();








});





// Inicializa el campo de número de teléfono
function initializePhoneNumberInput() {
  const input = document.querySelector("#telefono");
  const errorMsg = document.querySelector("#phone-error");

  const iti = window.intlTelInput(input, {
    initialCountry: "co",
    separateDialCode: true,
    utilsScript:
      "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  });

  // Ocultar el mensaje de error cuando el usuario comience a escribir
  input.addEventListener("input", function () {
    errorMsg.style.display = "none";
  });
}

// Inicializa la validación del formulario
function initializeFormValidation() {
  const input = document.querySelector("#telefono");
  const errorMsg = document.querySelector("#phone-error");

  document
    .querySelector("#form-registro")
    .addEventListener("submit", function (event) {
      const phoneNumber = input.value.replace(/\D/g, ""); // Eliminar todos los caracteres no numéricos

      // Verificar si el número tiene exactamente 10 dígitos y no contiene caracteres no numéricos
      if (!/^\d{10}$/.test(phoneNumber)) {
        event.preventDefault();
        errorMsg.style.display = "block";
      } else {
        errorMsg.style.display = "none";
      }
    });
}

// Inicializa el selector de país y maneja el cambio de país
function initializeCountrySelect() {
  $("#pais").countrySelect({
    defaultCountry: "co",
    responsiveDropdown: true,
  });

  $("#pais").on("change", function () {
    const selectedCountry = $("#pais").countrySelect(
      "getSelectedCountryData"
    ).iso2;
    if (selectedCountry === "co") {
      loadColombianDepartments();
    } else {
      resetDepartmentAndMunicipalitySelectors();
    }
  });
}

// Carga departamentos y municipios de Colombia
async function loadColombianDepartments() {
  try {
    const response = await fetch(
      "https://www.datos.gov.co/resource/xdk5-pm3f.json"
    );
    const data = await response.json();

    const departments = [...new Set(data.map((item) => item.departamento))];
    const municipalitiesByDepartment = {};

    departments.forEach((department) => {
      municipalitiesByDepartment[department] = data
        .filter((item) => item.departamento === department)
        .map((item) => item.municipio);
    });

    populateDepartmentSelector(departments, municipalitiesByDepartment);
  } catch (error) {
    console.error("Error fetching data:", error);
  }
}

// Población del selector de departamentos
function populateDepartmentSelector(departments, municipalitiesByDepartment) {
  $("#departamento").html(
    '<option value="">Seleccione un departamento</option>'
  );
  departments.forEach((department) => {
    $("#departamento").append(
      `<option value="${department}">${department}</option>`
    );
  });
  $("#departamento").prop("disabled", false);

  // Escuchar cambios en el selector de departamentos
  $("#departamento").on("change", function () {
    const selectedDepartment = $(this).val();
    populateMunicipalitySelector(
      selectedDepartment,
      municipalitiesByDepartment
    );
  });
}

// Población del selector de municipios
function populateMunicipalitySelector(department, municipalitiesByDepartment) {
  $("#municipio").html('<option value="">Seleccione un municipio</option>');
  if (municipalitiesByDepartment[department]) {
    municipalitiesByDepartment[department].forEach((municipality) => {
      $("#municipio").append(
        `<option value="${municipality}">${municipality}</option>`
      );
    });
    $("#municipio").prop("disabled", false);
  } else {
    $("#municipio").prop("disabled", true);
  }
}

// Restablecer selectores de departamentos y municipios
function resetDepartmentAndMunicipalitySelectors() {
  $("#departamento")
    .prop("disabled", true)
    .html('<option value="">Seleccione un departamento</option>');
  $("#municipio")
    .prop("disabled", true)
    .html('<option value="">Seleccione un municipio</option>');
}










