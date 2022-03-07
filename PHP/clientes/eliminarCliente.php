<?php

require_once("clientes.php");

$killclientes = new Clientes();

$Eliminar = $killclientes->eliminarCliente("4");

echo "eliminado";



?>