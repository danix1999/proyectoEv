<?php

require_once("DetalleVenta.php");

$killDetalleVenta = new DetalleVenta();

$Eliminar = $killDetalleVenta->eliminarDetalleVenta("7");

echo "eliminado";



?>