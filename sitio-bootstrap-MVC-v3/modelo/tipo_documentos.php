<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla tipo de documento
 -->
<?php
/**
 * Funcion de ingreso de datos a la tabla tipo de documento
 * 
 * @param   var       variable de conexion a la base de datos
 * @param   texto     nombre del tipo de documento
 * 
 * @return  numero    1 para exito 0 para error
 */
function tipo_documento( $conexion, $nombre )
{
    $salida = "";
    $sql = " INSERT INTO `re_covid19`.`tipo_documentos` (`nombre_tipo_documento`)";
    $sql.= "VALUES ('$nombre');";
    $insert = mysqli_query($conexion, $sql);
    
    if( mysqli_num_rows($insert) > 0 )
    {
        $salida = "Registro echo con exito";
    }else{
        $salida = "Registro fallido";
    }

    return $salida;
}
?>