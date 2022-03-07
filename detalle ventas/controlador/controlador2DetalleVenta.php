<?php 
    require_once('../modelo/modeloDetalleVentas.php');

        
        $modeloDetalleVentaProducto = new DetalleVenta();
           

                
                $codigo_venta = $_GET['codigo_venta'];
                $descripcion = $_GET['descripcion'];
                $cantidad = $_GET['cantidad'];
                $precio = $_GET['precio'];
                $descuento = $_GET['descuento'];
      
                

                
                $lastVenta = $modeloDetalleVentaProducto->listaComprado($codigo_venta,$descripcion,$cantidad,$precio,$descuento,$id_producto);
                $modeloDetalleVentaProducto->listaVenta($lastVenta,$id_cliente,$total_venta);
            
        

?>