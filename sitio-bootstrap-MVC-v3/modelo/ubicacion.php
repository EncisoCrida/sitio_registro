<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla ubicacion
 -->
<?php
/**
 * Funcion de ingreso de datos a la tabla ubicacion
 * 
 * @param   var       variable de conexion a la base de datos
 * @param   texto     nombre de la ubicacion
 * @param   texto     descripcion de la ubicacion 
 * @param   texto     id de la sede a la que pertenese la ubicacion
 * 
 * @return  numero    1 para exito 0 para error 
 */
function ubicacion( $conexion, $nombre, $descripcion, $idSede )
{
    $salida = "";
    $sql = " INSERT INTO `re_covid19`.`ubicacion` (`nombre_ubicacion`, `descripcion`, `id_sede`) ";
    $sql.= "VALUES ('$nombre', '$descripcion', '$idSede');";
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