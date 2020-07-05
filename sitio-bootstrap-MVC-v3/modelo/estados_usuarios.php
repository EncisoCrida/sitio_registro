<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla estados_usuario
 -->
<?php
/**
 * Funcion de ingreso de datos a la tabla estados_usuario
 * 
 * @param   var       variable de conexion a la base de datos
 * @param   texto     Nombre del estado
 * 
 * @return  numero    1 para exito 0 para error 
 */
function clientes( $conexion, $nomEstado )
{
    $salida = "";
    $sql = "INSERT INTO `re_covid19`.`estados_usuarios` (`nombre_estado`)";
    $sql.= "VALUES ('$nomEstado');";
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