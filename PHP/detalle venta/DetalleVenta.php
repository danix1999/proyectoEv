<?php

require_once("Conexion.php");

class DetalleVenta extends Conexion{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function insertarDetalleVenta($codigo_venta, $descripcion, $cantidad, $precio, $descuento, $id_producto)
    {
        
        $tabla = $this->db->prepare("INSERT INTO detalle_venta( codigo_venta, descripcion, cantidad, precio, descuento,id_producto ) VALUES ( :codigo_venta, :descripcion, :cantidad, :precio, :descuento, :id_producto)");

        $tabla->bindParam(':codigo_venta', $codigo_venta); 
        $tabla->bindParam(':descripcion', $descripcion);
        $tabla->bindParam(':cantidad', $cantidad);
        $tabla->bindParam(':precio', $precio);
        $tabla->bindParam(':descuento', $descuento);
        $tabla->bindParam(':id_producto', $id_producto);
        $tabla->execute();
    }

    public function getDetalleVenta(){//listar clientes
    
        $rows = null;
        $tabla=$this->db->prepare("SELECT codigo_venta, descripcion, cantidad, precio, descuento, id_producto FROM detalle_venta");
        $tabla->execute();
        while ($resultado = $tabla->fetch()) {
            $rows[] = $resultado;
        }return $rows;


    }

    public function actualizarDetalleVenta($codigo_venta,$descripcion, $cantidad, $precio, $descuento, $id_producto){


         $tabla = $this->db->prepare("UPDATE detalle_venta SET descripcion = :descripcion, cantidad = :cantidad, precio = :precio, descuento = :descuento, id_producto = :id_producto  WHERE codigo_venta = $codigo_venta");

         $tabla->bindParam(':descripcion', $descripcion);
         $tabla->bindParam(':cantidad', $cantidad);
         $tabla->bindParam(':precio', $precio);
         $tabla->bindParam(':descuento', $descuento);
         $tabla->bindParam(':id_producto', $id_producto);
         $tabla->execute();
         return $tabla;
        

     }

    public function eliminarDetalleVenta($codigo_venta){
        $tabla = $this->db->prepare("DELETE FROM detalle_venta WHERE codigo_venta= :codigo_venta");
        $tabla->bindParam(':codigo_venta',$codigo_venta);
        $tabla->execute();
        return $tabla;
    }
}
