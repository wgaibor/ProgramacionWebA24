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
        $arrayResponse = actualizarProducto($arrayRequest['data']);
        break;
    case 'obtenerProducto':
        $arrayResponse = obtenerProducto($arrayRequest['data']);
        break;
    case 'eliminarProducto':
        $arrayResponse = eliminarProducto($arrayRequest['data']);
        break;
    default:
    $arrayResponse = array("mensaje"    => "OP no existe",
                           "status"     => "ERROR",
                           "code"       => 500);
}
echo json_encode($arrayResponse, JSON_UNESCAPED_UNICODE);
