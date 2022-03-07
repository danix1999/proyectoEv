<?php 
    require_once("../../conexion/Conexion.php");
    

    class Ventas extends Conexion{

        public function __construct(){
            $this->db = parent::__construct();


        }
        public function list(){
        try {
            $table = $this->db->prepare("SELECT codigo_venta , Id_cliente,fecha_venta, total_venta FROM ventas");
            $table->execute();
            $result = $table->fetchAll();
            return $result;

            } catch (Exception $e){
                throw $e;
                }
        }
     public function delete($id){
        try {

            $table = $this->db->prepare("DELETE FROM ventas WHERE codigo_venta=:id");
            $table->bindParam(':id', $id);
            $table->execute();
            header('Location: ../vista/vistaVenta.php');
        } catch (Exception $e){
            throw $e;
        }
        

     }

     public function edit($id,$Id_cliente, $fecha_venta, $total_venta){
        try {

            $table = $this->db->prepare("UPDATE ventas SET Id_cliente = :Id_cliente, fecha_venta = :fecha_venta, total_venta = :total_venta WHERE codigo_venta=$id");
            $table->bindParam(':Id_cliente', $Id_cliente);
            $table->bindParam(':fecha_venta', $fecha_venta);
            $table->bindParam(':total_venta', $total_venta);
            $table->execute();
            header('Location: ../vista/vistaVenta.php');
        } catch (Exception $e){
            throw $e;
        }
        

     }

     public function add( $Id_cliente, $fecha_venta, $total_venta){
        try {
            $table = $this->db->prepare("INSERT INTO ventas (Id_cliente, fecha_venta, total_venta) VALUES (:Id_cliente,:fecha_venta, :total_venta) ");
            $table->bindParam(':Id_cliente', $Id_cliente);
            $table->bindParam(':fecha_venta', $fecha_venta);
            $table->bindParam(':total_venta', $total_venta);
            $table->execute();
            header('Location: ../vista/vistaVenta.php');
        } catch (Exception $e){
            throw $e;
        }
        

    }

    public function getIdClient(){
        try{
            $table = $this->db->prepare("SELECT Id_cliente, Cedula_Cliente FROM Clientes");
            $table->execute();
            $result = $table->fetchAll();
            return $result;
        } catch(Exception $e){
            throw $e;
        }
    }
}//end clase
?>
