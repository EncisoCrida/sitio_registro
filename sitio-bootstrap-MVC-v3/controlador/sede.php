<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla sede
 -->
<?php
include( "../modelo/conexion.php" );
include( "../modelo/sede.php" );
$nombre = $_POST['nombre']; 
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
echo sede($conexion, $nombre, $direccion, $telefono);
?>