<?php 
    require_once('../modelo/Proveedor.php');
    //echo "saludos";
   
    $modeloProveedor = new Proveedor();
    $Proveedores = $modeloProveedor->list();


    if (isset($_REQUEST["btnAccion"])) {
        //echo "saludos";
        if($_POST['id']){
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $modeloProveedor->edit($id, $nombre, $telefono, $direccion);
        } else{
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $modeloProveedor->add($nombre, $telefono, $direccion);
        }
    }

    if (isset($_GET['idDelete'])){
        $id = $_GET['idDelete'];
        echo $id;
        $modeloProveedor->delete($id);
    }
?>