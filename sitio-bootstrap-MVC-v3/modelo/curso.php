<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla curso
 -->
<?php
/**
 * Funcion de ingreso de datos a la tabla curso
 * 
 * @param   var       variable de conexion a la base de datos
 * @param   texto     numero de curso
 * @param   texto     nombre del curso
 * @param   texto     id del nivel del curso
 * @param   texto     id de la joenada del curso
 * @return  numero    1 para exito 0 para error
 */
function clientes($conexion, $numCurso, $nombre, $idNivelCurso, $idJornadaCurso)
{
    $salida = "";
    $sql = "INSERT INTO `re_covid19`.`curso` (`numero_curso`, `nombre_curso`, `id_nivel_curso`, `id_jornada_curso`)m";
    $sql.= "VALUES ('$nombre', '$numCurso', '$nombre', '$idNivelCurso', '$idJornadaCurso');";
    $insert = mysqli_query($conexion, $sql);
    
    if( mysqli_num_rows($insert) > 0 )
    {
        $salida = 1;
    }else{
        $salida = 0;
    }

    return $salida;
}
?>