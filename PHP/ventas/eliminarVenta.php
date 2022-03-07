<?php

require_once("ventas.php");

$killventas = new ventas();

$Eliminar = $killventas->eliminarVenta("1");

echo "eliminado";



?>