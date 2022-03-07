<?php
    require_once('../modelo/modeloIndex.php');

    $modeloIndex = new Index();
    $Index = $modeloIndex->listarProductos();
?>    