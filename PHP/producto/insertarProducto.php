<?php

require_once("producto.php");

$objProducto = new Productos();

$Insertar = $objProducto->insertarProductos("smartphone","xiaomi","telefono ultima generacion",120000,5000,6);

echo"dato de producto guardado"



?>