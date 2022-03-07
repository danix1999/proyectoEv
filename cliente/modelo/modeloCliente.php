<?php 
    require_once("../../conexion/Conexion.php");
    

    class clientes extends Conexion{

        public function __construct(){
            $this->db = parent::__construct();


        }
        public function list(){
        try {
            $table = $this->db->prepare("SELECT Id_cliente,Cedula_Cliente, nombre_cliente, apellidos_cliente, correo_cliente, password , celular_cliente, direccion_cliente FROM clientes");
            $table->execute();
            $result = $table->fetchAll();
            return $result;

            } catch (Exception $e){
                throw $e;
                }
        }
     public function delete($id){
        try {

            $table = $this->db->prepare("DELETE FROM clientes WHERE Id_cliente=:id");
            $table->bindParam(':id', $id);
            $table->execute();
            header('Location: ../vista/vistaCliente.php');
        } catch (Exception $e){
            throw $e;
        }
        

     }

     public function edit($id,$Cedula_Cliente, $nombre_cliente, $apellidos_cliente, $correo_clientes,$password , $celular_clientes, $direccion_clientes){
        try {

            $table = $this->db->prepare("UPDATE clientes SET Cedula_Cliente = :Cedula_Cliente, nombre_cliente = :nombre_cliente, apellidos_cliente = :apellidos_cliente, correo_cliente = :correo_cliente,password=:password, celular_cliente = :celular_cliente, direccion_cliente = :direccion_cliente  WHERE Id_cliente=$id");
            $table->bindParam(':Cedula_Cliente', $Cedula_Cliente);
            $table->bindParam(':nombre_cliente', $nombre_cliente);
            $table->bindParam(':apellidos_cliente', $apellidos_cliente);
            $table->bindParam(':correo_cliente', $correo_clientes);
            $table->bindParam(':password', $password);

            $table->bindParam(':celular_cliente', $celular_clientes);
            $table->bindParam(':direccion_cliente', $direccion_clientes);

            $table->execute();
            header('Location: ../vista/vistaCliente.php');
        } catch (Exception $e){
            throw $e;
        }
        

     }

     public function add( $Cedula_Cliente, $nombre_cliente, $apellidos_cliente, $correo_clientes,$password , $celular_clientes, $direccion_clientes){
        try {

            $table = $this->db->prepare("INSERT INTO clientes( Cedula_Cliente, nombre_cliente, apellidos_cliente, correo_cliente,password, celular_cliente, direccion_cliente ) VALUES ( :Cedula_Cliente, :nombre_cliente, :apellidos_cliente, :correo_cliente,:password, :celular_cliente, :direccion_cliente)");

            $table->bindParam(':Cedula_Cliente', $Cedula_Cliente);
            $table->bindParam(':nombre_cliente', $nombre_cliente);
            $table->bindParam(':apellidos_cliente', $apellidos_cliente);
            $table->bindParam(':password', $password);
            $table->bindParam(':correo_cliente', $correo_clientes);
            $table->bindParam(':celular_cliente', $celular_clientes);
            $table->bindParam(':direccion_cliente', $direccion_clientes);
            $table->execute();
            header('Location: ../vista/vistaCliente.php');
        } catch (Exception $e){
            throw $e;
        }
        

    }
}//end clase
?>
