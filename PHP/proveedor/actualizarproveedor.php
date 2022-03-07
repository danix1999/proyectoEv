<?php

require_once("proveedor.php");

$actProveedor = new Proveedor();

$Actualizar = $actProveedor->actualizarProveedor(3,"Asus",8372612,"calle 115");

$verProveedores = $actProveedor->getProveedores();
print_r('<pre>');
print_r($verProveedores);
print_r('</pre>')



?>