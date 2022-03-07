<?php 
    require_once("../../conexion/Conexion.php");
    

    class DetalleVenta extends Conexion{

        public function __construct(){
            $this->db = parent::__construct();


        }
        
        public function listVenta(){
            $table = $this->db->prepare("SELECT * FROM detalle_venta");
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
            

        }

        public function edit($id, $Descripcion, $Cantidad, $Precio, $Descuento, $Id_Producto){
            try {
                $table = $this->db->prepare("UPDATE detalle_venta SET descripcion = :descripcion, cantidad = :cantidad, precio = :precio, descuento = :descuento, id_producto = :id_producto WHERE codigo_venta=$id");
                $table->bindParam(':descripcion', $Descripcion);
                $table->bindParam(':cantidad', $Cantidad);
                $table->bindParam(':precio', $Precio);
                $table->bindParam(':descuento', $Descuento);
                $table->bindParam(':id_producto', $Id_Producto);
                $table->execute();
                //header('Location: ../vista/vistaProducto.php');
            } catch (Exception $e){
                throw $e;
            }
            
    
         }
    
         public function addVenta($Id_cliente, $Fecha_Venta, $Total_Venta)
         {
            try {
                $table = $this->db->prepare("INSERT INTO ventas (id_cliente, fecha_venta , total_venta) VALUES (:id_cliente, :fecha_venta , :total_venta)");
                $table->bindParam(':id_cliente', $Id_cliente);
                $table->bindParam(':fecha_venta', $Fecha_Venta);
                $table->bindParam(':total_venta', $Total_Venta);
                $table->execute();
                return $this->db->lastInsertId();
            } catch (Exception $e){
                throw $e;
            }
         }

         public function add($Codigo_Venta,$Descripcion, $Cantidad, $Precio, $Descuento, $Id_Producto){
            try {
                $table = $this->db->prepare("INSERT INTO detalle_venta (codigo_venta, descripcion, cantidad , precio , descuento, id_producto) VALUES (:codigo_venta, :descripcion,:cantidad, :precio ,:descuento ,:id_producto ) ");
                $table->bindParam(':codigo_venta', $Codigo_Venta);
                $table->bindParam(':descripcion', $Descripcion);
                $table->bindParam(':cantidad', $Cantidad);
                $table->bindParam(':precio', $Precio);
                $table->bindParam(':descuento', $Descuento);
                $table->bindParam(':id_producto', $Id_Producto);
                $table->execute();
                header('Location: ../vista/vistaDetalleVentas.php');
            } catch (Exception $e){
                throw $e;
            }
            
        }
        
    }//end clase


?>