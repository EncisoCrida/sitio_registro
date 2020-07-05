<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla roles
 -->
<?php
/**
 * Funcion de ingreso de datos a la tabla roles
 * 
 * @param   var       variable de conexion a la base de datos
 * @param   texto     nombre del rol
 * 
 * @return  numero    1 para exito 0 para error
 */
function roles( $conexion, $nombre )
{
    $salida = "";
    $sql = " INSERT INTO `re_covid19`.`roles` (`nombre_rol`)";
    $sql.= "VALUES ('$nombre');";
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