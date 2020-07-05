<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla usuarios
 -->
<?php
include( "../modelo/conexion.php" );
include( "../modelo/usuarios.php" );
$nombre = $_POST['nombre']; 
$idTipo_doc = $_POST['idTipo_doc']; 
$idRol = $_POST['idRol'];
$documento = $_POST['documento'];
$idEstado = $_POST['idEstado'];
$idCurso = $_POST['idCurso'];
echo usuarios($conexion, $nombre, $idTipo_doc, $idRol, $documento, $idEstado, $idCurso);
?>