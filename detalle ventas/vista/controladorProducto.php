<?php
    require_once('../modelo/modeloProducto.php');
    
    $modeloProducto = new Producto();
    $Producto = $modeloProducto->list();

    $Categoria = $modeloProducto->getIdCategoria();

    $Categoria = $modeloProducto->getNombreCategoria();

    if (isset($_REQUEST["btnAccion"])) {
        //echo "saludos";
        if($_POST['Id_Producto']){
            $id = $_POST['Id_Producto'];
            $Nombre_Producto = $_POST['Nombre_Producto'];
            $Marca_Producto = $_POST['Marca_Producto'];
            $Descripcion_Producto = $_POST['Descripcion_Producto'];
            $Valor_unitario_Producto = $_POST['Valor_unitario_Producto'];
            $Iva_Producto = $_POST['Iva_Producto'];
            $Codigo_categoria = $_POST['Codigo_categoria'];
            $modeloVentas->edit($id,$Nombre_Producto, $Marca_Producto, $Descripcion_Producto, $Valor_unitario_Producto ,$Iva_Producto ,$Codigo_categoria);
        } else{
            $Nombre_Producto = $_POST['Nombre_Producto'];
            $Marca_Producto = $_POST['fecha_venta'];
            $Descripcion_Producto = $_POST['Descripcion_Producto'];
            $Valor_unitario_Producto = $_POST['Valor_unitario_Producto'];
            $Iva_Producto = $_POST['Iva_Producto'];
            $Codigo_categoria = $_POST['Codigo_categoria'];
            $modeloVentas->add($Nombre_Producto, $Marca_Producto, $Descripcion_Producto, $Valor_unitario_Producto ,$Iva_Producto ,$Codigo_categoria);
        }
    }

    if (isset($_GET['idDelete'])){
        $id = $_GET['idDelete'];
        echo $id;
        $modeloProducto->delete($id);
    }
?>