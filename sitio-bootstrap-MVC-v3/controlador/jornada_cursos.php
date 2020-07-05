<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla jornada_cursos
 -->
<?php
include( "../modelo/conexion.php" );
include( "../modelo/jornada_cursos.php" );
$nombre = $_POST['nombre'];
echo clientes( $conexion, $nombre );
?>