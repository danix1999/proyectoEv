<?php

require_once("clientes.php");

$getClientes = new Clientes();

$verClientes = $getClientes->getClientes();
print_r('<pre>');
print_r($verClientes);
print_r('</pre>')


?>