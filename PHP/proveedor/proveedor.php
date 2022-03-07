<?php

require_once("Conexion.php");

class Proveedor extends Conexion{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function insertarProveedor($nombre, $telefono, $direccion)
    {
        
        $tabla = $this->db->prepare("INSERT INTO proveedor( Nombre_Proveedor, Telefono_Proveedor, Direccion_Proveedor) VALUES (:cnombre, :ctelefono, :cdireccion)");

        $tabla->bindParam(':cnombre', $nombre);
        $tabla->bindParam(':ctelefono', $telefono);
        $tabla->bindParam(':cdireccion', $direccion);
        $tabla->execute();
    }

    public function getProveedores(){//listar proveedores
    
        $rows = null;
        $tabla=$this->db->prepare("SELECT Nombre_Proveedor, Telefono_Proveedor, Direccion_Proveedor FROM proveedor");
        $tabla->execute();
        while ($resultado = $tabla->fetch()) {
            $rows[] = $resultado;

        }return $rows;


    }

    public function actualizarProveedor($Codigo_proveedor, $Nombre_Proveedor, $Telefono_Proveedor, $Direccion_Proveedor){


         $tabla = $this->db->prepare("UPDATE proveedor SET Nombre_Proveedor = :Nombre_Proveedor, Telefono_Proveedor = :Telefono_Proveedor, Direccion_Proveedor = :Direccion_Proveedor WHERE Codigo_proveedor=$Codigo_proveedor");

         $tabla->bindParam(':Nombre_Proveedor', $Nombre_Proveedor);
         $tabla->bindParam(':Telefono_Proveedor', $Telefono_Proveedor);
         $tabla->bindParam(':Direccion_Proveedor', $Direccion_Proveedor);
         $tabla->execute();
         return $tabla;
        

     }

    public function eliminarProveedor($Codigo_proveedor){
        $tabla = $this->db->prepare("DELETE FROM proveedor WHERE Codigo_proveedor= :Codigo_proveedor");
        $tabla->bindParam(':Codigo_proveedor',$Codigo_proveedor);
        $tabla->execute();
        return $tabla;
    }
}
