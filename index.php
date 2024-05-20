<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Catastro Chiquinquirá</title>
  <!-- iconos de la pagina -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="css/estilos.css" />
  <link rel="icon" href="imagenes/Logo-Catastro-Chiquinquira.png" type="image/png">


</head>

<body>
  <!-- Barra de navehgacion -->
  <header>
    <a href="index.php" class="logo">
      <img src="imagenes/Logo-Catastro-Chiquinquira.png" alt="" />
    </a>

    <!--Menu Icono -->
    <i class="bx bx-menu" id="menu-icono"></i>

    <!-- links -->
    <ul class="navbar">
      <li><a href="index.php">Inicio</a></li>
      <li>
        <a href="#inicio" id="productos-servicios">Productos y Servidos
          <i class="bx bx-chevron-down iluminar_icono"></i></a>
        <ul class="submenu">
          <li><a href="archivos\secciones\tramites-catastrales.php">Trámites Catastrales</a></li>
          <li><a href="archivos\secciones\productos-catastrales.php">Productos Catastrales</a></li>
          <li><a href="archivos\secciones\observatorio-inmobiliario.php">Observatorio Inmoviliario</a></li>
        </ul>
      </li>
      <li>
        <a href="#multicato" id="multicarto">Trámites<i class="bx bx-chevron-down iluminar_icono"></i></a>
        <ul class="submenu">
          <li><a href="archivos\secciones\inicioSesion.php">Servicio Con Registro</a></li>
          <!-- <a href="">Servicio Sin Registro</a></li> --><li>
        </ul>
      </li>
      <li>
        <a href="#Datos Abiertos" id="datos-abiertos">Datos Abiertos <i class="bx bx-chevron-down iluminar_icono"></i>
        </a>
        <ul class="submenu">
          <li><a href="archivos/secciones/documentos.php">Documentos</a></li>
          <li><a href="archivos/secciones/datos-alfanumericos.php">Datos Alfanumericos</a></li>
          <li><a href="archivos/secciones/datos-geograficos.php">Datos Geográficos</a></li>
        </ul>
      </li>
      <li>
        <a href="archivos\secciones\geoportal.php">Geoportal</a>
      </li>
      <li>
        <a href="archivos\secciones\contacto.php">Contacto</a>
      </li>
    </ul>
    <!-- contenedor de icono de buscar y inicio de sesion -->
    <div class="header-icon">

      <a href="archivos\secciones\formulario-pqrs.php" title="Formulario de reclamos"><i class='bx bx-comment-edit'></i></a>
      <a href="archivos\secciones\preguntas-frecuentes.php" title="Preguntas Frecuentes"><i class='bx bx-help-circle'></i></a>
      <!--  <a href="Login y Registro/Inicio_De_Sesion.php" target="_blank"><i class="bx bx-user" id="iniciar-sesion-icono"></i></a>-->
      <i class="bx bx-search" id="buscar-icono"></i>

    </div>

    <!-- barra de buscar -->
    <div class="search-box">
      <input type="search" name="" id="" placeholder="Buscar Aqui" />
    </div>
    
  </header>


  <!--Inicio o bienvenida -->
  <section class="inicio" id="inicio">
    <div class="inicio-texto">
      <h1>
        Catastro <br />
        Chiquinquirá
      </h1>
      <p>
        Gestor Castastral del municipio de Chiquinquirá.<br />
        Servicio catastral permanente, oportuno y con todos los estandares de
        calidad y tecnologia a la ciudadania.
      </p>
      <a href="archivos/secciones/inicioSesion.php" target="_blank" class="btn btn1">Iniciar Sesion</a>
    </div>
  </section>

  <section class="video-catastro">
    <iframe width="764" height="430" src="https://www.youtube.com/embed/jucMNfRII8E?autoplay=1&mute=1" title="Sí fue posible ser gestores catastrales" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </section>
  <!-- Sobre Catastro -->
  <section class="sobre-castastro" id="sobre">
    <div class="catastro-img">
      <img src="imagenes/Compromisos-del-municipio-Gestor-Catastral-Chiquinquira-768x768.png" alt="" />
    </div>
    <div class="texto-compromiso-catastro">
      <h2>Gestor Catastral <br />Municipio de Chiquinquirá</h2>
      <p>
        Mediante la Resolución 1591 del 19 de diciembre de 2022, previo al
        cumplimiento de los requisitos técnicos, jurídicos, económicos y
        financieros, el IGAC habilita como gestor catastral al municipio de
        Chiquinquirá para prestar el servicio público catastral en su
        territorio. Lo anterior, en concordancia con la normatividad nacional
        y con el propósito de dar cumplimiento al Plan Nacional de Desarrollo
        2018-2022 “Pacto por Colombia” (Artículo 79 de la Ley 1955 de 2019),
        en el cual se plantea que además del IGAC, los gestores habilitados,
        que podrán ser las entidades públicas nacionales o territoriales,
        incluyendo entre otros esquemas asociativos de entidades
        territoriales, también podrán prestar el servicio público catastral.
      </p>
      <a href="documentos_descargar\normativa_inicio\resoluciones\04-RES_1591-2022.pdf" target="_blank" rel="noopener noreferrer" class="btn">Resolución 1591 de 2021</a>
    </div>
  </section>

  <!-- Normativas -->
  <section class="normativas" id="normativas">
    <div class="titulo-normativas">
      <h2>Normativas</h2>
    </div>
    <!-- contenedor -->
    <div class="contenedor-normativas">
      <!-- leyes -->
      <div class="box">
        <img src="imagenes/normativas2.png" alt="" />
        <h3>Leyes</h3>
        <div class="contenido-boton">
          <a href="archivos/secciones/leyes.php">Ver Leyes</a>
        </div>
      </div>

      <!-- decretos -->
      <div class="box">
        <img src="imagenes/normativas2.png" alt="" />
        <h3>Decretos</h3>
        <div class="contenido-boton">
          <a href="archivos\secciones\decretos.php">Ver Decretos</a>
        </div>
      </div>

      <div class="box">
        <img src="imagenes/normativas2.png" alt="" />
        <h3>Resoluciones</h3>
        <div class="contenido-boton">
          <a href="archivos\secciones\resoluciones.php">Ver Resoluciones</a>
        </div>
      </div>

      <div class="box">
        <img src="imagenes/normativas2.png" alt="" />
        <h3>Conpes</h3>
        <div class="contenido-boton">
          <a href="archivos\secciones\conpes.php">Ver Conpes</a>
        </div>
      </div>
    </div>
  </section>
  

  <!--Sobre catastro-beneficios  -->
  <section class="sobre-castastro" id="sobre">
    <div class="texto-compromiso-catastro">
      <h2>¿QUÉ ES CATASTRO MULTIPROPÓSITO?</h2>
      <p>
        El catastro multipropósito se define como un sistema de información de
        la tierra basado en el predio, el cual excede los fines fiscales o
        tributarios, propios del catastro tradicional, en dos aspectos: (l)
        brindar seguridad jurídica por medio de la inscripción o
        representación de los intereses sobre la tierra, relacionados con su
        ocupación, valor, uso y urbanización; y (ll) apoyar las decisiones de
        ordenamiento territorial y de planeación económica, social y
        ambiental, mediante la integración de información sobre derechos,
        restricciones y responsabilidades, en concordancia con el principio de
        independencia legal.
      </p>
      <a href="documentos_descargar\normativa_inicio\conpes\Conpes3859CatastroMultipropósito.pdf" target="_blank" rel="noopener noreferrer" class="btn btn-beneficios" >Conpes 3859</a>
    </div>
    <div class="catastro-img">
      <img src="imagenes/Beneficios-del-municipio-1024x1024.png" alt="" />
    </div>
  </section>

  <section class="footer">
    <div class="footer-box">
      <h2>Catastro Chiquinquira</h2>
      <p>
        Este sitio cumple con el nivel de Accesibilidad Web A según los
        requisitos de conformidad de la WCAG 2.0 y NTC 5854. Para una correcta
        visualización y navegación en el sitio, se recomienda usar las últimas
        versiones de los siguientes navegadores Internet Explorer, Mozilla
        FireFox y Google Chrome.
      </p>
      <div class="social">
        <a href="https://www.facebook.com/AlChiquinquira" target="_blank">
          <img src="imagenes/Redes Sociales/facebook.png" class="hola" alt="" />
        </a>
        <a href="https://www.instagram.com/alchiquinquira/" target="_blank">
          <img src="imagenes/Redes Sociales/instagram.png" alt="" />
        </a>
        <a href="https://twitter.com/AlChiquinquira" target="_blank">
          <img src="imagenes/Redes Sociales/twitter.png" alt="" />
        </a>
        <a href="https://www.youtube.com/@alcaldiadechiquinquirapren2664" target="_blank">
          <img src="imagenes/Redes Sociales/youtube.png" alt="" />
        </a>
      </div>
    </div>
    <div class="footer-box">
      <h3>Soporte</h3>
      <li><a href="#inicio">Inicio</a></li>
      <li><a href="#">Geoportal</a></li>
      <li><a href="#">Multicarto Ciudadano</a></li>
      <li><a href="#">Datos Abiertos</a></li>
    </div>
    <div class="footer-box">
      <h3>Contacto</h3>
      <div class="contact">
        <span><i class="bx bxs-map"></i>Centro administrartivo Municipal, bloque
          2, Primer Piso/ Chiquinquirá - Boyacá</span>
        <span><i class="bx bxs-phone"></i>60(8) 7262531</span>
        <span><i class="bx bxs-time"></i>Lunes a Jueves de 8am a 12m y de 2pm a
          6pm</span>
        <span><i class="bx bxs-envelope"></i>gestorcatastral@chiquinquira-boyaca.gov.co</span>
      </div>
    </div>
    <div class="footer box">
      <img src="imagenes/si_es_posible.png" alt="" />
    </div>
  </section>
  <!-- Copyright -->
  <div class="copyright">
        <p>Copyright ©<span id="year"></span> Felipe Diaz, Diego Nuñez y Roberth Garcia</p>
    </div>

    <script>
        // JavaScript para actualizar el año automáticamente
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>
  <!-- archivo java scrip -->
  <script src="js/main.js"></script>
</body>

</html>