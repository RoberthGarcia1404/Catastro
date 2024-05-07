<?php include_once 'header.php'; ?>

<!-- contenedor de la barra de navegacion y del contenedor de la cedula -->
<div class="header2">
    <!-- barra de navegacion de los tramites -->
    <ul class="navbar2">
        <li><a href="inicio-con-registro.php">INICIO</a></li>
        <li><a href="">TRÁMITES Y SERVICIOS</a></li>
        <li><a href="">MIS PREDIOS</a></li>
        <li><a href="">MIS TRÁMITES</a></li>
    </ul>

    <!-- contenedor del numero de cedula del usuario y submenu para cerrar sesion -->
    <div class="cc-usuario">
        <a href="#"> 
            <i class='bx bx-user-pin'></i>
            <p> CC </p>
            <p> 1002522987 </p> <i class="bx bx-chevron-down iluminar_icono"></i>
        </a>
    </div>
</div>

<section style="margin-top:-15px;">
    <h3 class="titulo-tramites titulos-principales">Trámites y servicios disponibles</h3>
    <div class="contenedor-tramites-servicios grid-tramites">
    <div class="cuadros-tramites">
    <a href="https://tramites.igac.gov.co/geltramitesyservicios/conversionNrosPrediales/convertirNrosPrediales.seam" target="blanck">
        <span class="icon-container"><i class='bx bxs-file-find'></i></span>
        <p>Consulte aquí el NÚMERO PREDIAL NACIONAL</p>
    </a>
</div>
<div class="cuadros-tramites">
    <a href="">
        <span class="icon-container"><i class='bx bx-loader-circle'></i></span>
        <p>Consulte el estado del trámite</p>
    </a>
</div>
<div class="cuadros-tramites">
    <a href="">
        <span class="icon-container"><i class='bx bx-home-alt-2'></i></span>
        <p>Consulte sus predios</p>
    </a>
</div>
<div class="cuadros-tramites">
    <a href="">
        <span class="icon-container"><i class='bx bx-receipt'></i></span>
        <p>Consulte aquí sus trámites</p>
    </a>
</div>

</section>



<?php include_once 'footer.php'; ?>