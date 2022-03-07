<?php 
    require_once("../../conexion/Conexion.php");
    

    class Cliente extends Conexion{
        
        public function __construct(){
            $this->db = parent::__construct();


        }
        
        public function login($correo_cliente, $password){
            $table = $this->db->prepare("SELECT Id_cliente, correo_cliente, password FROM clientes WHERE correo_cliente = :correo_cliente AND password = :password");
            $table->bindParam(':correo_cliente', $correo_cliente);
            $table->bindParam(':password', $password);
            $table->execute();
            if ($table->rowCount()==1) {
               $result = $table->fetch();
                                       
                    $_SESSION['correo_cliente']= $result["correo_cliente"];
                    $_SESSION['password']= $result["password"];
                    return true;    
                }else{
                    return false;
                }
            

        }

        public function obtenerIdCliente($correo_cliente){
            $table = $this->db->prepare("SELECT Id_cliente FROM clientes WHERE correo_cliente = :correo_cliente");
            $table->bindParam(':correo_cliente', $correo_cliente);
            $table->execute();
            if ($table->rowCount()==1) {
               $result = $table->fetch();                                
                return $result["Id_cliente"];
            }
            

        }
        
    }//end clase

    // $modeloCliente = new Cliente();
    // $modeloCliente->login("carlos@gmail.com","12345");
    //print_r($modeloCliente);

?>