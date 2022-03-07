<?php

require_once("ventas.php");

$objventa = new ventas();

$Insertar = $objventa->insertarVentas("2021-02-12","25000",3);

echo"dato de venta guardado"



?>