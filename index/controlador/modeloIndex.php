<?php 
   require_once('Conexion.php');
   //require_once("../../conexion/Conexion.php");


    class Index extends Conexion{

        public function __construct(){
            $this->db = parent::__construct();

    }
    public function listarCategorias(){
        try {
            $table = $this->db->prepare("SELECT Codigo_Categoria, Nombre_categoria, Descripcion_Categoria FROM categoria");
            $table->execute();
            $result = $table->fetchAll();
            return $result;

            } catch (Exception $e){
                throw $e;

                }
    }

    public function listarProductos(){
        try {
            $table = $this->db->prepare("SELECT Id_Producto, Nombre_Producto FROM producto");
            $table->execute();
            $result = $table->fetchAll();
            return $result;

            } catch (Exception $e){
                throw $e;

                }
    }


    public function verProductoCategoria($Id_categoria){
        $rows = null;
        $table = $this->db->prepare("SELECT Id_Producto, Nombre_Producto, Marca_Producto,Valor_Unitario_Producto,categoria.Codigo_Categoria "
        ."FROM producto,categoria WHERE producto.Codigo_categoria = categoria.Codigo_Categoria AND categoria.Codigo_Categoria = :id_categoria");
        $table->bindParam(':id_categoria', $Id_categoria);
        $table->execute();
        while ($result = $table->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }



    

}//end clase
            
?>