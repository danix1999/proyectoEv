<?php

require_once("producto.php");

$actProducto = new Productos();

$Actualizar = $actProducto->actualizarProductos("real bx","realme","un telefono diferente",22000,2000,6,2);

$verProductos = $actProducto->getProducto();
print_r('<pre>');
 print_r($verProductos);
 print_r('</pre>')



?>