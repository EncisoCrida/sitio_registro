<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla tipo de documento
 -->
<?php
include( "../modelo/conexion.php" );
include( "../modelo/tipo_documentos.php" );
$nombre = $_POST['nombre'];
echo tipo_documento( $conexion, $nombre );
?>