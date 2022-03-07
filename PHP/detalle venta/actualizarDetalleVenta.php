<?php

require_once("DetalleVenta.php");

$actDetalleVenta = new DetalleVenta();

$Actualizar = $actDetalleVenta->actualizarDetalleVenta(7,"telefono xiaomi solo una unidad",2,227000,0,3);

$verDetalleVenta = $actDetalleVenta->getDetalleVenta();
print_r('<pre>');
print_r($verDetalleVenta);
print_r('</pre>')



?>