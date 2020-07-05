<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla roles
 -->
<?php
include( "../modelo/conexion.php" );
include( "../modelo/roles.php" );
$nombre = $_POST['nombre'];
echo roles( $conexion, $nombre );
?>