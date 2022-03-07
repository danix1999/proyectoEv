<?php

require_once("Conexion.php");

class Categoria extends Conexion{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function insertarCategoria($nombre, $descripcion)
    {
        
        $tabla = $this->db->prepare("INSERT INTO categoria( Nombre_categoria, Descripcion_categoria) VALUES (:cnombre, :cdescripcion)");

        $tabla->bindParam(':cnombre', $nombre);
        $tabla->bindParam(':cdescripcion', $descripcion);
        $tabla->execute();
    }

    public function getCategoria(){//listar categorias
    
        $rows = null;
        $tabla=$this->db->prepare("SELECT Nombre_categoria, Descripcion_categoria FROM categoria");
        $tabla->execute();
        while ($resultado = $tabla->fetch()) {
            $rows[] = $resultado;

        }return $rows;


    }

    public function actualizarCategoria($Codigo_Categoria, $Nombre_categoria, $Descripcion_categoria){


         $tabla = $this->db->prepare("UPDATE categoria SET Nombre_categoria = :Nombre_categoria, Descripcion_categoria = :Descripcion_categoria WHERE Codigo_Categoria=$Codigo_Categoria");

         $tabla->bindParam(':Nombre_categoria', $Nombre_categoria);
         $tabla->bindParam(':Descripcion_categoria', $Descripcion_categoria);
         $tabla->execute();
         return $tabla;
        

     }

    public function eliminarCategoria($Codigo_Categoria){
        $tabla = $this->db->prepare("DELETE FROM categoria WHERE Codigo_Categoria= :Codigo_Categoria");
        $tabla->bindParam(':Codigo_Categoria',$Codigo_Categoria);
        $tabla->execute();
        return $tabla;
    }
}
