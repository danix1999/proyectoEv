<?php 
    require_once("../../conexion/Conexion.php");
    

    class Categoria extends Conexion{

        public function __construct(){
            $this->db = parent::__construct();


        }
        public function list(){
        try {
            $table = $this->db->prepare("SELECT Codigo_Categoria ,Nombre_categoria, Descripcion_Categoria FROM categoria");
            $table->execute();
            $result = $table->fetchAll();
            return $result;

            } catch (Exception $e){
                throw $e;
                }
        }
     public function delete($id){
        try {

            $table = $this->db->prepare("DELETE FROM categoria WHERE Codigo_Categoria=:id");
            $table->bindParam(':id', $id);
            $table->execute();
            header('Location: ../vista/vistaCategoria.php');
        } catch (Exception $e){
            throw $e;
        }
        

     }

     public function edit($id, $nombre, $Descripcion){
        try {

            $table = $this->db->prepare("UPDATE categoria SET Nombre_categoria = :Nombre_categoria, Descripcion_Categoria = :Descripcion_Categoria  WHERE Codigo_Categoria=$id");
            $table->bindParam(':Nombre_categoria', $nombre);
            $table->bindParam(':Descripcion_Categoria', $Descripcion);

            $table->execute();
            header('Location: ../vista/vistaCategoria.php');
        } catch (Exception $e){
            throw $e;
        }
        

     }

     public function add( $nombre, $Descripcion){
        try {

            $table = $this->db->prepare("INSERT INTO categoria( Nombre_categoria, Descripcion_Categoria) VALUES (:cnombre, :cdescripcion)");

            $table->bindParam(':cnombre', $nombre);
            $table->bindParam(':cdescripcion', $Descripcion);
            $table->execute();
            header('Location: ../vista/vistaCategoria.php');
        } catch (Exception $e){
            throw $e;
        }
        

    }
}//end clase
?>
