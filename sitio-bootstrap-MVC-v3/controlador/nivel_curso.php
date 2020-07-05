<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla nivel de curso
 -->
<?php
include( "../../modelo/conexion.php" );
include( "../../modelo/nivel_curso.php" );
$nombre = $_POST['nombre'];
echo nivel_curso( $conexion, $nombre );
?>