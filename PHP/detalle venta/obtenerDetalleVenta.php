<?php

require_once("DetalleVenta.php");

$getDetalleVenta = new DetalleVenta();

$verDetalleVenta = $getDetalleVenta->getDetalleVenta();
print_r('<pre>');
print_r($verDetalleVenta);
print_r('</pre>')


?>