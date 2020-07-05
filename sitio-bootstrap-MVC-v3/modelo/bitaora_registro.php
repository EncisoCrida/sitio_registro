<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla bitacora_registro
 -->
<?php
/**
 * Funcion de ingreso de datos a la tabla bitacora_registro
 * 
 * @param   var       variable de conexion a la base de datos
 * @param   texto     id del usuario
 * @param   texto     id ubicacion (se dirige)
 * @param   texto     id estado usuario (afuera o dentro deñ centro)
 * 
 * @return  numero    1 para exito 0 para error
 */
function bitacora_registro($conexion, $idUsuario, $idUbicacion, $idEstadoUsuario)
{
    $salida = "";
    $sql = " INSERT INTO `re_covid19`.`bitacora_registro` (`id_usuario`, `id_ubicacion`, `id_estado_usuario`, `fecha`)";
    $sql.= "VALUES ('$idUsuario', '$idUbicacion', '$idEstadoUsuario', now());";
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