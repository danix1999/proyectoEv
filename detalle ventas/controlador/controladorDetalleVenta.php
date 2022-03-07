<?php 
    require_once('../modelo/modeloDetalleVentas.php');
    session_start();

        echo "saludos";

        
        $modeloDetalleVenta = new DetalleVenta();
        
        

        /*if ($modeloDetalleVenta->list()) {
            // header('Location: ../vista/login3.php');
            echo "lista DetalleVenta";
        }else{
            // header('Location: ../vista/login2.php');
            echo "lista no retornada";
        }*/

        if (isset($_REQUEST["btnAccion"])) {
            if($_POST['codigo_venta']){
                $id_producto = $_POST['Id_Producto']; 
                $id = $_POST['codigo_venta'];
                $Descripcion = $_POST['descripcion'];
                $Cantidad = $_POST['cantidad'];
                $Precio = $_POST['precio'];
                $Descuento = $_POST['descuento'];               
                $modeloDetalleVenta->edit($id,$Descripcion, $Cantidad, $Precio, $Descuento, $id_producto);
            } else{
                $id_cliente = $_SESSION['id_cliente'];
                $Valor_unitario_Producto = $_GET['Valor_unitario_Producto'];
                $Iva_Producto = $_GET['Iva_Producto'];
                $id_producto = $_POST['Id_Producto']; 
                $Descripcion = $_POST['descripcion'];
                $Cantidad = $_POST['cantidad'];
                $Precio = $_POST['precio'];
                $Descuento = $_POST['descuento'];
                $lastId = $modeloDetalleVenta->addVenta($id_cliente, date('Y-m-d'), $Cantidad*(($Precio*0.19)+$Precio));
                $modeloDetalleVenta->add($lastId,$Descripcion, $Cantidad, $Precio, $Descuento, $id_producto);
            }
            $modeloDetalleVentaProducto = new DetalleVenta();
                
            // $codigo_venta = $_GET['codigo_venta'];
            // $descripcion = $_GET['descripcion'];
            // $cantidad = $_GET['cantidad'];
            // $precio = $_GET['precio'];
            // $descuento = $_GET['descuento'];
            // $id_producto = $_GET['id_producto'];
            
        // $modeloDetalleVentaProducto->listVenta($codigo_venta,$descripcion,$cantidad,$precio,$descuento,$id_producto);
        $modeloDetalleVentaProducto->listVenta();
           
        }

session_destroy();
?>