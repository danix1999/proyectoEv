<?php

require_once("ventas.php");

$getVentas = new ventas();

$verVentas = $getVentas->getVentas();
print_r('<pre>');
print_r($verVentas);
print_r('</pre>')


?>