<?php
    //require_once('../modelo/modeloIndex.php');
    require_once('modeloIndex.php');

    $modeloIndex = new Index();
    $Categorias = $modeloIndex->listarCategorias();
    if (isset ($_REQUEST['btnProducto'])) {
        $CategoriaProducto=$_POST['Codigo_Categoria'];
    
    $objmodeloIndex = $modeloIndex->verProductoCategoria($CategoriaProducto);
    header('Location: ../producto/vista/ProductosCategoria.php');
    //print_r($objmodeloIndex);
    }
?>    