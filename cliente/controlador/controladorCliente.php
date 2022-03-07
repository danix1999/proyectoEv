<?php
    require_once('../modelo/modeloCliente.php');
    
    
    $modeloCliente = new clientes();
    $Cliente = $modeloCliente->list();

    if (isset($_REQUEST["btnAccion"])) {
        //echo "saludos";
        if($_POST['id']){
            $id = $_POST['id'];
            $Cedula_Cliente = $_POST['cedula'];
            $nombre_cliente = $_POST['nombre'];
            $apellidos_cliente = $_POST['apellidos'];
            $correo_cliente = $_POST['correo'];
            $password = $_POST['password'];
            $celular_cliente = $_POST['celular'];
            $direccion_cliente = $_POST['direccion'];
            $modeloCliente->edit($id,$Cedula_Cliente, $nombre_cliente, $apellidos_cliente, $correo_cliente,$password , $celular_cliente, $direccion_cliente);
        } else{
            $Cedula_Cliente = $_POST['cedula'];
            $nombre_cliente = $_POST['nombre'];
            $apellidos_cliente = $_POST['apellidos'];
            $correo_cliente = $_POST['correo'];
            $password = $_POST['password'];
            $celular_cliente = $_POST['celular'];
            $direccion_cliente = $_POST['direccion'];
            $modeloCliente->add($Cedula_Cliente, $nombre_cliente, $apellidos_cliente, $correo_cliente,$password , $celular_cliente, $direccion_cliente);
        }
    }

    if (isset($_GET['idDelete'])){
        $id = $_GET['idDelete'];
        echo $id;
        $modeloCliente->delete($id);
    }
?>