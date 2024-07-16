<?php
//bind variables
function guardarProducto($arrayParametros)
{
    $arrayResponse = array();
    require 'database.php';

    $strSql = "INSERT INTO info_producto (
                                            marca,
                                            modelo,
                                            descripcion,
                                            precio,
                                            estado,
                                            imagen)
                VALUES (?, ?, ?, ?, ?, ?)";
    $stmt   = $db->prepare($strSql);
    $stmt->bind_param('ssssss', $marca,
                                $modelo,
                                $descripcion,
                                $precio,
                                $estado,
                                $imagen);
    
    $marca      = $arrayParametros['marca'];
    $modelo     = $arrayParametros['modelo'];
    $descripcion= $arrayParametros['descripcion'];
    $precio     = $arrayParametros['precio'];
    $estado     = $arrayParametros['estado'];
    $imagen     = $arrayParametros['imagen'];

    $boolGuarda = $stmt->execute();

    if($boolGuarda){
        $arrayResponse = array("mensaje"    => "Se guardo correctamente",
                               "status"     => "OK",
                               "code"       => 200);
    } else {
        $arrayResponse = array("mensaje"    => "No se guardo!!!",
                               "status"     => "ERROR",
                               "code"       => 500);
    }
    return $arrayResponse;
}

function actualizarProducto($arrayParametros) {
    try {
        $arrayArgumento['idProducto'] = $arrayParametros['idProducto'];
        $arrayRespuesta = obtenerProducto($arrayArgumento);
        if(isset($arrayRespuesta['code']) && $arrayRespuesta['code'] == 500) {
            $arrayResponse = array("mensaje"    => "El registro no existe",
                                   "status"     => "ERROR",
                                   "code"       => 500);
            return $arrayResponse;
        }
        $arrayResponse = array();
        require "database.php";

        $strSql = "UPDATE info_producto
                    SET precio = ?
                    WHERE idProducto = ?";
        $oracion= $db->prepare($strSql);
        $oracion->bind_param('si', $strPrecio, 
                                   $intIdProducto);
        $strPrecio      = $arrayParametros['precio'];
        $intIdProducto  = $arrayParametros['idProducto'];

        $boolEliminar   = $oracion->execute();
        if($boolEliminar) {
            $arrayResponse = array("mensaje"    => "Se actualizo el registro correctamente",
                                   "status"     => "OK",
                                   "code"       => 200);
        } else {
            $arrayResponse = array("mensaje"    => "No se actualizo el registro",
                                   "status"     => "ERROR",
                                   "code"       => 500);
        }
        return $arrayResponse;
    } catch (\Throwable $th) {
        echo 'actualizarProducto()   '.$th->getMessage();
    }
}

function obtenerProducto($arrayParametros) {
    try {
        $arrayResponse = array();
        require "database.php";

        $strSql = " SELECT * FROM info_producto 
                    WHERE idProducto = ? ";
        $stmt   = $db->prepare($strSql);
        $stmt->bind_param('i', $intIdProducto);
        $intIdProducto = $arrayParametros['idProducto'];

        $stmt->execute();
        $arrayResultado         = $stmt->get_result();
        $arrayResponse['data']  = $arrayResultado->fetch_all(MYSQLI_ASSOC);
        if(empty($arrayResponse['data'])) {
            $arrayResponse = array("mensaje"    => "No trajo registro",
                                   "status"     => "ERROR",
                                   "code"       => 500);
        }
        return $arrayResponse;
    } catch (\Throwable $th) {
        echo 'obtenerProducto()   '.$th->getMessage();
    }
}

function eliminarProducto($arrayParametros) {
    try {
        $arrayArgumento['idProducto'] = $arrayParametros['idProducto'];
        $arrayRespuesta = obtenerProducto($arrayArgumento);
        if(isset($arrayRespuesta['code']) && $arrayRespuesta['code'] == 500) {
            $arrayResponse = array("mensaje"    => "El registro no existe",
                                   "status"     => "ERROR",
                                   "code"       => 500);
            return $arrayResponse;
        }
        $arrayResponse = array();
        require "database.php";

        $strSql = "UPDATE info_producto
                    SET estado = ?
                    WHERE idProducto = ? ";
        $oracion= $db->prepare($strSql);
        $oracion->bind_param('si',  $strEstado,
                                    $intIdProducto);
        $strEstado      = 'Eliminado';
        $intIdProducto  = $arrayParametros['idProducto'];

        $boolEliminar   = $oracion->execute();
        if($boolEliminar) {
            $arrayResponse = array("mensaje"    => "Se elimino el registro correctamente",
                                   "status"     => "OK",
                                   "code"       => 200);
        } else {
            $arrayResponse = array("mensaje"    => "No se elimino el registro",
                                   "status"     => "ERROR",
                                   "code"       => 500);
        }
        return $arrayResponse;
    } catch (\Throwable $th) {
        echo 'eliminarProducto()   '.$th->getMessage();
    }
}