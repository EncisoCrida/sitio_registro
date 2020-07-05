<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla log_clientes
 -->
<?php
include( "../modelo/conexion.php" );
include( "../modelo/log_clientes.php" );
$idClinte = $_POST['idClinte'];
$novedad = $_POST['novedad'];
echo log_clientes( $conexion, $idClinte, $novedad );
?>