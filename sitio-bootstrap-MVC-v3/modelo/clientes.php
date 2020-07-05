<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla clientes
 -->
<?php
/**
 * Funcion de ingreso de datos a la tabla clientes
 * 
 * @param   var       variable de conexion a la base de datos
 * @param   texto     el nombre del cliente
 * @param   texto     tipo de documento del cliente
 * @param   texto     documento del cliente
 * @param   texto     gmail del cliente
 * @param   texto     password de acceso del cliente
 * @param   texto     rol del cliente
 * @param   texto     telefono del cliente
 * 
 * @return  numero    1 para exito 0 para error
 */
function clientes($conexion, $nombre, $tipo_doc, $documento, $gamil, $password, $rol, $telefono)
{
    $salida = "";
    $sql = "INSERT INTO `re_covid19`.`clientes` (`nombre_cliente`, `id_tipo_documento`, `documento`, `email`, `password`, `id_rol`, `telefono`)";
    $sql.= "VALUES ('$nombre', '$tipo_doc', '$documento', '$gmail', '$password', '$rol', '$telefono');";
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