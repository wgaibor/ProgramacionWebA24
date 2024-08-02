<?php

function guardarProducto($arrayParametro){
    try {
        $arrayResponse = array();
        require "coneccionDB.php";

        $strSQL = " INSERT INTO info_producto (
                                                marca,
                                                modelo,
                                                descripcion,
                                                precio,
                                                estado,
                                                imagen)
                    VALUES (?, ?, ?, ?, ?, ?) ";
        $stmt   = $db->prepare($strSQL);
        $stmt->bind_param('ssssss', $marca,
                                    $modelo,
                                    $descripcion,
                                    $precio,
                                    $estado,
                                    $imagen);
        $marca          = $arrayParametro['marca'];
        $modelo         = $arrayParametro['modelo'];
        $descripcion    = $arrayParametro['descripcion'];
        $precio         = $arrayParametro['precio'];
        $estado         = "Activo";
        $imagen         = $arrayParametro['imagen'];

        $boolGuardar    = $stmt->execute();

        if($boolGuardar){
            $arrayResponse = array('mensaje'  => 'Se guardo correctamente',
                                'status'   => "OK",
                                'code'     => 200);
        } else {
            $arrayResponse = array('mensaje'  => 'Fallo el insert!!!',
                                'status'   => "ERROR",
                                'code'     => 500);
        }
        return $arrayResponse;
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }
    
}

function actualizarRegistro($arrayParametro){
    $arrayResponse = array();
    require "coneccionDB.php";

    $arrayArgumento = array('idProducto'  => $arrayParametro['idProducto']);
    $arrayRespuesta = buscarProductoXId($arrayArgumento);

    if(isset($arrayRespuesta['code']) && $arrayRespuesta['code'] == 500) {
        $arrayResponse = array('mensaje' => 'El registro no existe!',
                               'status'  => 'ERROR',
                               'code'    => 500);
        return $arrayResponse;
    }

    $strSQL = " UPDATE info_producto 
                SET marca           = ?,
                    modelo          = ?,
                    descripcion     = ?,
                    precio          = ?,
                    imagen          = ?
                WHERE idProducto = ?  ";
    $stmt   = $db->prepare($strSQL);
    $stmt->bind_param('sssssi', $strMarca,
                                $strModelo,
                                $strDescripcion,
                                $strPrecio,
                                $strImagen,
                                $intIdProducto);

    $strMarca       = $arrayParametro['marca'];
    $strModelo      = $arrayParametro['modelo'];
    $strDescripcion = $arrayParametro['descripcion'];
    $strPrecio      = $arrayParametro['precio'];
    $strImagen      = $arrayParametro['imagen'];
    $intIdProducto  = $arrayParametro['idProducto'];

    $boolActualizar = $stmt->execute();
    if($boolActualizar){
        $arrayResponse = array('mensaje'  => 'Se actualizo el registro',
                               'status'   => "OK",
                               'code'     => 200);
    } else {
        $arrayResponse = array('mensaje'  => 'Fallo la actualización',
                               'status'   => "OK",
                               'code'     => 200);
    }
    return $arrayResponse;
}

function buscarProductoXId($arrayParametro) {
    $arrayResponse = array();
    require "coneccionDB.php";

    $strSQL = " SELECT * FROM info_producto
                WHERE  idProducto = ?";
    $stmt   = $db->prepare($strSQL);
    $stmt->bind_param('i', $intIdProducto);
    $intIdProducto = $arrayParametro['idProducto'];

    $stmt->execute();
    $arrayResultado         = $stmt->get_result();
    $arrayResponse['data']  = $arrayResultado->fetch_all(MYSQLI_ASSOC);
    if(empty($arrayResponse['data'])) {
        $arrayResponse = array("mensaje"  => "No trajo registro",
                               "status"   => "ERROR",
                               "code"     => 500  );
    }
    return $arrayResponse;
 }

 function traerProductos() {
    $arrayResponse = array();
    require "coneccionDB.php";

    $strSQL = " SELECT * FROM info_producto ";
    $stmt = $db->prepare($strSQL);
    
    $stmt->execute();
    $arrayResultado                 = $stmt->get_result();
    $arrayResponse['productos']     = $arrayResultado->fetch_all(MYSQLI_ASSOC);
    return $arrayResponse;
 }

 function eliminarProducto($arrayParametro){
    $arrayResponse = array();

    $arrayArgumento = array('idProducto'    => $arrayParametro['idProducto']);
    $arrayResultado = buscarProductoXId($arrayArgumento);

    if(isset($arrayResultado['code']) && $arrayResultado['code'] == 500) {
        $arrayResponse = array("mensaje"    => "No existe el registro a eliminar",
                               "status"     => "ERROR",
                               "code"       => 500);
        return $arrayResponse;
    }

    require "coneccionDB.php";

    $strSQL = " UPDATE info_producto
                SET estado = ?
                WHERE idProducto = ?   ";
    $stmt = $db->prepare($strSQL);
    $stmt->bind_param('si', $strEstado,
                            $intProductoId );
    $strEstado      = "Eliminado";
    $intProductoId  = $arrayParametro['idProducto'];

    $boolEliminar = $stmt->execute();

    if($boolEliminar){
        $arrayResponse = array("mensaje"    => "Se elimino el registro correctamente",
                               "status"     => "OK",
                               "code"       => 200);
    } else {
        $arrayResponse = array("mensaje"    => "No se elimino el registro",
                               "status"     => "ERROR",
                               "code"       => 500);
    }
    return $arrayResponse;
 }