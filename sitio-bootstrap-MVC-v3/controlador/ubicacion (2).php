<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla ubicacion
 -->
<?php
include( "../modelo/conexion.php" );
include( "../modelo/ubicacion.php" );
$nombre = $_POST['nombre']; 
$descripcion = $_POST['descripcion'];
$idSede = $_POST['idSede'];
echo ubicacion( $conexion, $nombre, $descripcion, $idSede );
?>