<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla estados_usuario
 -->
<?php
include( "../modelo/conexion.php" );
include( "../modelo/estados_usuarios.php" );
$nomEstado = $_POST['nomEstado'];
echo clientes( $conexion, $nomEstado );
?>