<?php

require_once("clientes.php");

$actCliente = new Clientes();

$Actualizar = $actCliente->actualizarCliente(3,"34576234","alexa","garzon","alex@mail.com","321456375","carrera 9");

$verCliente = $actCliente->getClientes();
print_r('<pre>');
print_r($verCliente);
print_r('</pre>')



?>