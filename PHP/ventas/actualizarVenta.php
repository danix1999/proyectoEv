<?php

require_once("ventas.php");

$actVentas = new ventas();

$Actualizar = $actVentas->actualizarventa(6,3,"2022-02-13",26000);

$verVenta = $actVentas->getVentas();
print_r('<pre>');
 print_r($verVenta);
 print_r('</pre>')



?>