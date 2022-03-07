<?php 
    require_once("../../conexion/Conexion.php");
    

    class Proveedor extends Conexion{

        public function __construct(){
            $this->db = parent::__construct();


        }
        
        public function list(){
            /*
                Agregamos un bloque try catch para controlar las excepciones generadas en la consulta a BD y agregamos las columnas a la consulta SELECT
            */
            try {
                $table = $this->db->prepare("SELECT Codigo_proveedor, Nombre_proveedor, Telefono_Proveedor, Direccion_Proveedor FROM proveedor");
                $table->execute();
                $result = $table->fetchAll();
                return $result;
                // if ($table->rowCount()==1) {
                //    $result = $table->fetch();
                                           
                //         $_SESSION['correo_cliente']= $result["correo_cliente"];
                //         $_SESSION['password']= $result["password"];
                //         return true;    
                //     }else{
                //     return false;
                //     }
            } catch (Exception $e){
                throw $e;
            }
            

        }

        public function delete($id){
            try {

                $table = $this->db->prepare("DELETE FROM proveedor WHERE Codigo_proveedor=:id");
                $table->bindParam(':id', $id);
                $table->execute();
                header('Location: ../vista/vistaProveedor.php');
            } catch (Exception $e){
                throw $e;
            }
            

        }

        public function edit($id, $nombre, $telefono, $direccion){
            try {

                $table = $this->db->prepare("UPDATE proveedor SET Nombre_Proveedor = :Nombre_Proveedor, Telefono_Proveedor = :Telefono_Proveedor, Direccion_Proveedor = :Direccion_Proveedor WHERE Codigo_proveedor=$id");
                $table->bindParam(':Nombre_Proveedor', $nombre);
                $table->bindParam(':Telefono_Proveedor', $telefono);
                $table->bindParam(':Direccion_Proveedor', $direccion);
                $table->execute();
                header('Location: ../vista/vistaProveedor.php');
            } catch (Exception $e){
                throw $e;
            }
            

        }

         public function add($nombre, $telefono, $direccion){
            try {

                $table = $this->db->prepare("INSERT INTO proveedor(Nombre_Proveedor, Telefono_Proveedor, Direccion_Proveedor) VALUES (:cnombre, :ctelefono, :cdireccion)");

                $table->bindParam(':cnombre', $nombre);
                $table->bindParam(':ctelefono', $telefono);
                $table->bindParam(':cdireccion', $direccion);
                $table->execute();
                header('Location: ../vista/vistaProveedor.php');
            } catch (Exception $e){
                throw $e;
            }
            

        }
        
    }//end clase


?>