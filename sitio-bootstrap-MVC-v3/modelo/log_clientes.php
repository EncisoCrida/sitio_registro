<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla log_clientes
 -->
<?php
/**
 * Funcion de ingreso de datos a la tabla log_clientes
 * 
 * @param   var       variable de conexion a la base de datos
 * @param   texto     id del cliente (logiado)
 * @param   texto     novedad realizada en el sistema
 * 
 * @return  numero    1 para exito 0 para error
 */
function log_clientes( $conexion, $idClinte, $novedad )
{
    $salida = "";
    $sql = " INSERT INTO `re_covid19`.`log_clientes` (`id_cliente`, `fecha`, `novedad`)";
    $sql.= "VALUES ('$idClinte', now(), '$novedad');";
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