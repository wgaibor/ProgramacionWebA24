<?php
require "funciones.php";
$objRequest     = file_get_contents('php://input');
$arrayRequest   = json_decode($objRequest, true);

$arrayResponse = array();
switch($arrayRequest['op']) {
    case 'guardarProducto':
        $arrayResponse = guardarProducto($arrayRequest['data']);
        break;
    case 'actualizarProducto':
        $arrayResponse = actualizarRegistro($arrayRequest['data']);
        break;
    case 'buscarItem':
        $arrayResponse = traerProductos();
        break;
    case 'eliminarItem':
        $arrayResponse = eliminarProducto($arrayRequest['data']);
        break;
    default:
    $arrayResponse = array('mensaje'  => 'Operación no existe',
                          'status'   => "ERROR",
                          'code'     => 500);
}
echo json_encode($arrayResponse, JSON_UNESCAPED_UNICODE);