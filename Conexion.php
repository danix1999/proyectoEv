<?php  
    class Conexion{
        protected $db;
        private $driver = "mysql";
        private $host = "localhost";
        private $based = "bdelectricoscauca";
        private $usuario = "root";
        private $contrasena = "";

        public function __construct(){
            try{
                $db = new PDO("{$this->driver}:host={$this->host};dbname={$this->based}", $this->usuario, $this->contrasena);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $db;
                echo "Conexion Exitosa";
            } catch(PDOException $e){
                echo "Ha ocurrido un error al conectarse a la Bd".$e->getMessage();
                
            }
        }
    } //End clase 

    //$objConexion = new Conexion();
    //print_r($objConexion);


?>