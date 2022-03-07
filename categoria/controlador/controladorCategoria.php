<?php
    require_once('../modelo/modeloCategoria.php');
    
    
    $modeloCategoria = new Categoria();
    $Categoria = $modeloCategoria->list();

    if (isset($_REQUEST["btnAccion"])) {
        //echo "saludos";
        if($_POST['id']){
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $Descripcion = $_POST['Descripcion'];
            $modeloCategoria->edit($id, $nombre, $Descripcion);
        } else{
            $nombre = $_POST['nombre'];
            $Descripcion = $_POST['Descripcion'];
            $modeloCategoria->add($nombre, $Descripcion);
        }
    }

    if (isset($_GET['idDelete'])){
        $id = $_GET['idDelete'];
        echo $id;
        $modeloCategoria->delete($id);
    }
?>