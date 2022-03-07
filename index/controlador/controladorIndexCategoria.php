<?php
    //require_once('../modelo/modeloIndex.php');
    require_once('modeloIndex.php');
    //require_once('../../index.php');

    $modeloIndex = new Index();
    $Categorias = $modeloIndex->listarCategorias();
    
    
?>    