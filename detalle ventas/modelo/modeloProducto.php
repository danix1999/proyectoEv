<?php 
    require_once("../../conexion/Conexion.php");
    

    class Producto extends Conexion{

        public function __construct(){
            $this->db = parent::__construct();


        }
        public function list(){
        try {
            $table = $this->db->prepare("SELECT Id_Producto, Nombre_Producto, Marca_Producto , Descripcion_Producto , Valor_unitario_Producto, Iva_Producto, producto.Codigo_categoria  FROM producto , categoria where categoria.Codigo_Categoria = producto.Codigo_categoria");
            $table->execute();
            $result = $table->fetchAll();
            return $result;

            } catch (Exception $e){
                throw $e;
                }
        }
        
        public function getProducto($Id_Producto){
            try {
                $table = $this->db->prepare(
                    "SELECT Id_Producto, Nombre_Producto, Marca_Producto , Descripcion_Producto , Valor_unitario_Producto, Iva_Producto, producto.Codigo_categoria  "
                    ."FROM producto , categoria where categoria.Codigo_Categoria = producto.Codigo_categoria "
                    . "AND Id_Producto = :id_producto"
                );
                $table->bindParam(':id_producto', $Id_Producto);
                $table->execute();
                $result = $table->fetchAll();
                return $result;
    
                } catch (Exception $e){
                    throw $e;
                    }
            }
     public function delete($id){
        try {

            $table = $this->db->prepare("DELETE FROM producto WHERE Id_Producto=:id");
            $table->bindParam(':id', $id);
            $table->execute();
            header('Location: ../vista/vistaProducto.php');
        } catch (Exception $e){
            throw $e;
        }
        

     }

     public function edit($id,$Nombre_Producto, $Marca_Producto, $Descripcion_Producto, $Valor_unitario_Producto ,$Iva_Producto ,$Codigo_categoria){
        try {

            $table = $this->db->prepare("UPDATE producto SET Nombre_Producto = :Nombre_Producto, Marca_Producto = :Marca_Producto, Descripcion_Producto = :Descripcion_Producto, Valor_unitario_Producto = :Valor_unitario_Producto, Iva_Producto = :Iva_Producto,Codigo_categoria = :Codigo_categoria   WHERE Id_Producto=$id");
            $table->bindParam(':Nombre_Producto', $Nombre_Producto);
            $table->bindParam(':Marca_Producto', $Marca_Producto);
            $table->bindParam(':Descripcion_Producto', $Descripcion_Producto);
            $table->bindParam(':Valor_unitario_Producto', $Valor_unitario_Producto);
            $table->bindParam(':Iva_Producto', $Iva_Producto);
            $table->bindParam(':Codigo_categoria', $Codigo_categoria);
            $table->execute();
            header('Location: ../vista/vistaProducto.php');
        } catch (Exception $e){
            throw $e;
        }
        

     }

     public function add( $Nombre_Producto, $Marca_Producto, $Descripcion_Producto, $Valor_unitario_Producto ,$Iva_Producto ,$Codigo_categoria){
        try {
            $table = $this->db->prepare("INSERT INTO producto (Nombre_Producto, Marca_Producto , Descripcion_Producto , Valor_unitario_Producto, Iva_Producto, Codigo_categoria) VALUES (:Nombre_Producto,:Marca_Producto, :Descripcion_Producto ,:Valor_unitario_Producto ,:Iva_Producto ;:Codigo_categoria) ");
            $table->bindParam(':Nombre_Producto', $Nombre_Producto);
            $table->bindParam(':Marca_Producto', $Marca_Producto);
            $table->bindParam(':Descripcion_Producto', $Descripcion_Producto);
            $table->bindParam(':Valor_unitario_Producto', $Valor_unitario_Producto);
            $table->bindParam(':Iva_Producto', $Iva_Producto);
            $table->bindParam(':Codigo_categoria', $Codigo_categoria);
            $table->execute();
            header('Location: ../vista/vistaProducto.php');
        } catch (Exception $e){
            throw $e;
        }
        

    }

    public function getIdCategoria(){
        try{
            $table = $this->db->prepare("SELECT Codigo_Categoria FROM categoria");
            $table->execute();
            $result = $table->fetchAll();
            return $result;
        } catch(Exception $e){
            throw $e;
        }

    }
    public function getNombreCategoria(){
        try{
            $table = $this->db->prepare("SELECT Nombre_categoria FROM categoria");
            $table->execute();
            $result = $table->fetchAll();
            return $result;
        } catch(Exception $e){
            throw $e;
        }
    }
}//end clase
?>

