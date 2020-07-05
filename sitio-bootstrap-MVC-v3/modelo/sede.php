<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla sede
 -->
<?php
/**
 * Funcion de ingreso de datos a la tabla sede
 * 
 * @param   var       variable de conexion a la base de datos
 * @param   texto     nombre de la gema
 * @param   texto     direccion de la sede
 * @param   texto     telefono de contacto de la sede
 * 
 * @return  numero    1 para exito 0 para error 
 */
function sede($conexion, $nombre, $direccion, $telefono)
{
    $salida = "";
    $sql = " INSERT INTO `re_covid19`.`sede` (`nombre_sede`, `direccion`, `telefono`)";
    $sql.= "VALUES ('$nombre', '$direccion', '$telefono');";
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