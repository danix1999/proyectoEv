<?php

require_once("producto.php");

$getProducto = new Productos();

$verProductos = $getProducto->getProducto();
print_r('<pre>');
print_r($verProductos);
print_r('</pre>')


?>