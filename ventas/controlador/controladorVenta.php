<?php
    require_once('../modelo/modeloVenta.php');
    
    $modeloVentas = new Ventas();
    $Ventas = $modeloVentas->list();

    $clientes = $modeloVentas->getIdClient();

    if (isset($_REQUEST["btnAccion"])) {
        //echo "saludos";
        if($_POST['codigo_venta']){
            $id = $_POST['codigo_venta'];
            $Id_cliente = $_POST['Id_cliente'];
            $fecha_venta = $_POST['fecha_venta'];
            $total_venta = $_POST['total_venta'];
            $modeloVentas->edit($id,$Id_cliente, $fecha_venta, $total_venta);
        } else{
            $Id_cliente = $_POST['Id_cliente'];
            $fecha_venta = $_POST['fecha_venta'];
            $total_venta = $_POST['total_venta'];
            $modeloVentas->add($Id_cliente, $fecha_venta, $total_venta);
        }
    }

    if (isset($_GET['idDelete'])){
        $id = $_GET['idDelete'];
        echo $id;
        $modeloVentas->delete($id);
    }
?>