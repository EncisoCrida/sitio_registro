<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla curso
 -->
<?php
include( "../modelo/conexion.php" );
include( "../modelo/curso.php" );
$numCurso = $_POST['numCurso'];
$nombre = $_POST['nombre'];
$idNivelCurso = $_POST['idNivelCurso'];
$idJornadaCurso = $_POST['idJornadaCurso'];
echo clientes($conexion, $numCurso, $nombre, $idNivelCurso, $idJornadaCurso);
?>