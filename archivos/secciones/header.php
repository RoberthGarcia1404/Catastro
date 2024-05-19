<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Catastro Chiquinquirá</title>

  <link rel="stylesheet" href="../../css/acordeonn.css" />
  <link rel="stylesheet" href="../../css/estilos.css" />
  <link rel="stylesheet" href="../../css/listas.css">
  <link rel="stylesheet" href="../../css/formulario-pqrs.css">
  <link rel="stylesheet" href="../../css/inicio-sesion.css">
  <link rel="stylesheet" href="../../css/tramites.css">
  <link rel="stylesheet" href="../../css/tablas.css">
  <!-- iconos de la pagina -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="icon" href="../../imagenes/Logo-Catastro-Chiquinquira.png" type="image/png">
</head>

<body>
  <!-- Barra de navehgacion -->
  <header>
    <a href="../../index.php" class="logo">
      <img src="../../imagenes/Logo-Catastro-Chiquinquira.png" alt="" />
    </a>

    <!--Menu Icono -->
    <i class="bx bx-menu" id="menu-icono"></i>

    <!-- links -->
    <ul class="navbar">
      <li><a href="../../index.php">Inicio</a></li>
      <li>
        <a href="#inicio" id="productos-servicios">Productos y Servidos
          <i class="bx bx-chevron-down iluminar_icono"></i></a>
        <ul class="submenu">
          <li><a href="tramites-catastrales.php">Trámites Catastrales</a></li>
          <li><a href="productos-catastrales.php">Productos Catastrales</a></li>
          <li><a href="observatorio-inmobiliario.php">Observatorio Inmoviliario</a></li>
        </ul>
      </li>
      <li>
        <a href="#multicato" id="multicarto">Trámites<i class="bx bx-chevron-down iluminar_icono"></i></a>
        <ul class="submenu">
          <li><a href="inicioSesion.php">Servicio Con Registro</a></li>
        </ul>
      </li>
      <li>
        <a href="#Datos Abiertos" id="datos-abiertos">Datos Abiertos <i class="bx bx-chevron-down iluminar_icono"></i>
        </a>
        <ul class="submenu">
          <li><a href="documentos.php">Documentos</a></li>
          <li><a href="datos-alfanumericos.php">Datos Alfanumericos</a></li>
          <li><a href="datos-geograficos.php">Datos Geográficos</a></li>
        </ul>
      </li>
      <li>
        <a href="geoportal.php">Geoportal</a>
      </li>
      <li>
      <li>
        <a href="contacto.php">Contacto</a>
      </li>
    </ul>
    <!-- contenedor de icono de buscar y inicio de sesion -->
    <div class="header-icon">
      <a href="formulario-pqrs.php" title="Formulario de reclamos"><i class='bx bx-comment-edit'></i></a>
      <a href="preguntas-frecuentes.php" title="Preguntas Frecuentes"><i class='bx bx-help-circle'></i></a>
      <!--  <a href="../../Login y Registro/Inicio_De_Sesion.php" target="_blank"
          ><i class="bx bx-user" id="iniciar-sesion-icono"></i
        ></a> -->
      <i class="bx bx-search" id="buscar-icono"></i>
    </div>

    <!-- barra de buscar -->
    <div class="search-box">
      <input type="search" name="" id="" placeholder="Buscar Aqui" />
    </div>
  </header>