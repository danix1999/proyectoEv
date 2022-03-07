<?php

require_once("proveedor.php");

$getProveedores = new Proveedor();

$verProveedores = $getProveedores->getProveedores();
print_r('<pre>');
print_r($verProveedores);
print_r('</pre>')


?>