<?php
session_start();
?>

<!-- contenedor de la barra de navegacion y del contenedor de la cedula -->
<div class="header2">
    <!-- barra de navegacion de los tramites -->
    <ul class="navbar2">
        <li><a href="inicio-con-registro.php">INICIO</a></li>
        <li><a href="#">TRÁMITES Y SERVICIOS</a></li>
        <li><a href="mis-predios.php">MIS PREDIOS</a></li>
        <li><a href="mis-tramites.php">MIS TRÁMITES</a></li>
    </ul>

    <!-- contenedor del numero de cedula del usuario y submenu para cerrar sesion -->
    <div class="cc-usuario">
        <a id="cerrar_sesion" href="#">
            <i class='bx bx-user-pin'></i>
            <p>CC</p>
            <p><?php echo $_SESSION['id_cc'] ?></p>
            <i class="bx bx-chevron-down iluminar_icono"></i>
            
        </a>
        <!-- SUBMENU CERRAR SESION -->
        <ul class="submenu2">
                <li><a href="../procesos/cerrar_sesion.php">Cerrar sesión</a></li>
         </ul>
    </div>
</div>

<!-- archivo java scrip -->
<script src="../../js/main.js"></script>