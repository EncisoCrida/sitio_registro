<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla jornada_cursos
 -->
<?php
/**
 * Funcion de ingreso de datos a la tabla jornada_curso
 * 
 * @param   var       variable de conexion a la base de datos
 * @param   texto     el nombre de la jornada
 *
 * @return  numero    1 para exito 0 para error
 */
function clientes( $conexion, $nombre )
{
    $salida = "";
    $sql = " INSERT INTO `re_covid19`.`jornada_curso` (`nombre_jornada`) ";
    $sql.= " VALUES ('$nombre'); ";
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