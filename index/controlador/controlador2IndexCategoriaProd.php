<?php
    //require_once('../modelo/modeloIndex.php');
    require_once('modeloIndex.php');
    //require_once('../../index.php');

    if (isset ($_REQUEST['Codigo_Categoria'])) {
        $modeloIndex = new Index();
        $CategoriaProductos=$_REQUEST['Codigo_Categoria'];
        $categoriaProductos = $modeloIndex->verProductoCategoria($CategoriaProductos);
        
        //header('Location: ../producto/vista/ProductosCategoria.php');
        //print_r($objmodeloIndex);
    }
