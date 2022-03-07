<?php

require_once("clientes.php");

$objCliente = new Clientes();

$Insertar = $objCliente->insertarClientes("3567218","gerardo","garcia","gerardo@mail.com","3122734658","calle 7");




?>