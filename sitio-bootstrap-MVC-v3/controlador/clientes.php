<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla clientes
 -->
<?php
include( "../modelo/conexion.php" );
include( "../modelo/clientes.php" );
$nombre = $_POST['nombre']; 
$tipo_doc = $_POST['tipo_doc']; 
$documento = $_POST['documento'];
$gamil = $_POST['gmail'];
$password = $_POST['password']; 
$rol = $_POST['rol'];
$telefono = $_POST['telefono'];
echo clientes($conexion, $nombre, $tipo_doc, $documento, $gamil, $password, $rol, $telefono);
?>