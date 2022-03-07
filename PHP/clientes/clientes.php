<?php

require_once("Conexion.php");

class Clientes extends Conexion{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function insertarClientes($cedula, $nombre, $apellido, $correo, $celular, $direccion)
    {
        
        $tabla = $this->db->prepare("INSERT INTO clientes( Cedula_Cliente, nombre_cliente, apellidos_cliente, correo_cliente, celular_cliente, direccion_cliente ) VALUES ( :Cedula_Cliente, :nombre_cliente, :apellidos_cliente, :correo_cliente, :celular_cliente, :direccion_cliente)");

        $tabla->bindParam(':Cedula_Cliente', $cedula); 
        $tabla->bindParam(':nombre_cliente', $nombre);
        $tabla->bindParam(':apellidos_cliente', $apellido);
        $tabla->bindParam(':celular_cliente', $celular);
        $tabla->bindParam(':correo_cliente', $correo);
        $tabla->bindParam(':direccion_cliente', $direccion);
        $tabla->execute();
    }

    public function getClientes(){//listar clientes
    
        $rows = null;
        $tabla=$this->db->prepare("SELECT Cedula_Cliente, nombre_cliente, apellidos_cliente, correo_cliente, celular_cliente, direccion_cliente FROM clientes");
        $tabla->execute();
        while ($resultado = $tabla->fetch()) {
            $rows[] = $resultado;

        }return $rows;


    }

    public function actualizarCliente($Id_cliente, $Cedula_Cliente, $nombre_cliente, $apellidos_clientes, $correo_clientes, $celular_clientes, $direccion_clientes){


         $tabla = $this->db->prepare("UPDATE clientes SET Cedula_Cliente = :Cedula_Cliente, nombre_cliente = :nombre_cliente, apellidos_cliente = :apellidos_cliente, correo_cliente = :correo_cliente, celular_cliente = :celular_cliente, direccion_cliente = :direccion_cliente  WHERE Id_cliente=$Id_cliente");

         $tabla->bindParam(':Cedula_Cliente', $Cedula_Cliente);
         $tabla->bindParam(':nombre_cliente', $nombre_cliente);
         $tabla->bindParam(':apellidos_cliente', $apellidos_clientes);
         $tabla->bindParam(':correo_cliente', $correo_clientes);
         $tabla->bindParam(':celular_cliente', $celular_clientes);
         $tabla->bindParam(':direccion_cliente', $direccion_clientes);
         $tabla->execute();
         return $tabla;
        

     }

    public function eliminarCliente($Id_cliente){
        $tabla = $this->db->prepare("DELETE FROM clientes WHERE Id_cliente= :Id_cliente");
        $tabla->bindParam(':Id_cliente',$Id_cliente);
        $tabla->execute();
        return $tabla;
    }
}
