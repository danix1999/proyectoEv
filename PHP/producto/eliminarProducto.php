<?php

require_once("producto.php");

$killproductos = new Productos();

$Eliminar = $killproductos->eliminarProducto(2);

echo "eliminado";



?>