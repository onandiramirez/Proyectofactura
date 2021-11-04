<?php

    header('Content-type: application/json');

    require_once("../config/conexion.php");
    require_once("../models/facturas.php");

    $Facturas = NEW  Facturas();
    $body = json_decode(file_get_contents("php://input"),true);

  switch($_GET["opciones"]){

    case "GetFacturas":

        $datos=$Facturas->get_Facturas();
        echo json_encode($datos);
    break;

    case "Getuno":
        $datos=$Facturas->get_Factura($body["ID"]);
        echo json_encode($datos);
    break;

    case "InsertarFactura":
        $datos=$Facturas->Insertar_Facturas($body["NUMERO_FACTURA"],$body["ID_SOCIO"],$body["FECHA_FACTURA"],$body["DETALLE"],$body["SUBTOTAL"],$body["TOTAL_ISV"],$body["TOTAL"],$body["FECHA_VENCIMIENTO"]);
        echo json_encode("Se a Insertado una Nueva factura");

    break;

    case "EliminarFactura":

        $datos=$Facturas->Eliminar_Factura($body["ID"]);
        echo json_encode("La Factura a sido Emininada");
    break;

    case "ActualizarFactura":
        
        $datos=$Facturas->Actualizar_Facturas($body["ID"],$body["NUMERO_FACTURA"],$body["ID_SOCIO"],$body["FECHA_FACTURA"],$body["DETALLE"],$body["SUBTOTAL"],$body["TOTAL_ISV"],$body["TOTAL"],$body["FECHA_VENCIMIENTO"],$body["ESTADO"]);
        echo json_encode("La Factura ha sido actualizada");

    break;

}
?>
