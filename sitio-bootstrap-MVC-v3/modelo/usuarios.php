<!-- 
    Autor : Cristian Enciso  (Enciso_Crida)
    Funcion de ingreso de datos para la tabla usuarios
 -->
<?php
/**
 * Funcion de ingreso de datos a la tabla usuarios
 * 
 * @param   var       variable de conexion a la base de datos
 * @param   texto     el nombre del usuario
 * @param   texto     id del tipop de documento del usuario
 * @param   texto     id del rol del usuario
 * @param   texto     documento del usuario
 * @param   texto     id del estado del usuario
 * @param   texto     id del curso del usuario
 * 
 * @return  numero    1 para exito 0 para error
 */
function usuarios($conexion, $nombre, $idTipo_doc, $idRol, $documento, $idEstado, $idCurso)
{
    $salida = "";
    $sql = " INSERT INTO `re_covid19`.`usuario` (`nombre_usuario`, `id_tipo_documente`, `id_rol`, `documento`, `id_estado`, `id_curso`)";
    $sql.= "VALUES ('$nombre', '$idTipo_doc', '$idRol', '$documento', '$idEstado', '$idCurso');";
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