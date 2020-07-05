<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla bitacora_registro
 -->
<?php
include( "../modelo/conexion.php" );
include( "../modelo/bitaora_registro.php" );
$idUsuario = $_POST['idUsuario'];
$idUbicacion = $_POST['idUbicacion'];
$idEstadoUsuario = $_POST['idEstadoUsuario'];
bitacora_registro($conexion, $idUsuario, $idUbicacion, $idEstadoUsuario);
?>