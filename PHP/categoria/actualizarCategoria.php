<?php

require_once("categoria.php");

$actCategoria = new Categoria();

$Actualizar = $actCategoria->actualizarCategoria(4,"torres","computadores de mesa");

$verCategoria = $actCategoria->getCategoria();
print_r('<pre>');
print_r($verCategoria);
print_r('</pre>')



?>