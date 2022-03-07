<?php

require_once("Conexion.php");

class Productos extends Conexion{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function insertarProductos($Nombre_Producto, $Marca_Producto, $Descripcion_Producto,$Valor_unitario_Producto,$Iva_Producto,$Codigo_categoria)
    {
        
        $tabla = $this->db->prepare("INSERT INTO producto( Nombre_Producto, Marca_Producto , Descripcion_Producto , Valor_unitario_Producto, Iva_Producto, Codigo_categoria) VALUES (:Nombre_Producto, :Marca_Producto, :Descripcion_Producto, :Valor_unitario_Producto, :Iva_Producto, :Codigo_categoria)");

        $tabla->bindParam(':Nombre_Producto', $Nombre_Producto);
        $tabla->bindParam(':Marca_Producto', $Marca_Producto);
        $tabla->bindParam(':Descripcion_Producto', $Descripcion_Producto);
        $tabla->bindParam(':Valor_unitario_Producto', $Valor_unitario_Producto);
        $tabla->bindParam(':Iva_Producto', $Iva_Producto);
        $tabla->bindParam(':Codigo_categoria', $Codigo_categoria);
        $tabla->execute();
    }

    public function getProducto(){//listar 
    
        $rows = null;
        $tabla=$this->db->prepare("SELECT Id_Producto,Nombre_Producto, Marca_Producto , Descripcion_Producto , Valor_unitario_Producto, Iva_Producto, Codigo_categoria FROM producto");
        $tabla->execute();
        while ($resultado = $tabla->fetch()) {
            $rows[] = $resultado;

        }return $rows;


    }

     public function actualizarProductos($Nombre_Producto, $Marca_Producto, $Descripcion_Producto,$Valor_unitario_Producto,$Iva_Producto,$Codigo_categoria,$Id_Producto){


         $tabla = $this->db->prepare("UPDATE producto SET Nombre_Producto = :Nombre_Producto, Marca_Producto = :Marca_Producto, Descripcion_Producto = :Descripcion_Producto, Valor_unitario_Producto = :Valor_unitario_Producto, Iva_Producto = :Iva_Producto,Codigo_categoria = :Codigo_categoria   WHERE Id_Producto=$Id_Producto");

          $tabla->bindParam(':Nombre_Producto', $Nombre_Producto);
          $tabla->bindParam(':Marca_Producto', $Marca_Producto);
          $tabla->bindParam(':Descripcion_Producto', $Descripcion_Producto);
          $tabla->bindParam(':Valor_unitario_Producto', $Valor_unitario_Producto);
          $tabla->bindParam(':Iva_Producto', $Iva_Producto);
          $tabla->bindParam(':Codigo_categoria', $Codigo_categoria);
          $tabla->execute();
          return $tabla;
        

      }

    public function eliminarProducto($Id_Producto){
        $tabla = $this->db->prepare("DELETE FROM producto WHERE Id_Producto= :Id_Producto");
        $tabla->bindParam(':Id_Producto',$Id_Producto);
        $tabla->execute();
        return $tabla;
    }
}
