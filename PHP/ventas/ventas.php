<?php

require_once("Conexion.php");

class ventas extends Conexion{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function insertarVentas($fecha_venta, $total_venta, $id_cliente)
    {
        
        $tabla = $this->db->prepare("INSERT INTO ventas( fecha_venta, total_venta, id_cliente) VALUES (:cfecha, :ctotal, :cid_cliente)");

        $tabla->bindParam(':cfecha', $fecha_venta);
        $tabla->bindParam(':ctotal', $total_venta);
        $tabla->bindParam(':cid_cliente', $id_cliente);
        $tabla->execute();
    }

    public function getVentas(){//listar venta
    
        $rows = null;
        $tabla=$this->db->prepare("SELECT codigo_venta , id_cliente,fecha_venta, total_venta FROM ventas");
        $tabla->execute();
        while ($resultado = $tabla->fetch()) {
            $rows[] = $resultado;

        }return $rows;


    }

     public function actualizarventa($Codigo_venta,$Id_cliente, $fecha_venta, $total_venta){


         $tabla = $this->db->prepare("UPDATE ventas SET Id_cliente = :Id_cliente, fecha_venta = :fecha_venta, total_venta = :total_venta WHERE Codigo_venta=$Codigo_venta");

          $tabla->bindParam(':Id_cliente', $Id_cliente);
          $tabla->bindParam(':fecha_venta', $fecha_venta);
          $tabla->bindParam(':total_venta', $total_venta);
          $tabla->execute();
          return $tabla;
        

      }

    public function eliminarVenta($Codigo_Venta){
        $tabla = $this->db->prepare("DELETE FROM ventas WHERE Codigo_Venta= :Codigo_Venta");
        $tabla->bindParam(':Codigo_Venta',$Codigo_Venta);
        $tabla->execute();
        return $tabla;
    }
}
