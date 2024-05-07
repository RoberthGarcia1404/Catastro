<?php
$conexion = new mysqli('localhost', 'root', '' ,'catastro_chiquinquira');

if($conexion -> connect_errno){
    echo 'No se pudo conectar con la base de datos';
}
?>