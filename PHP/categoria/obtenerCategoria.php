<?php

require_once("categoria.php");

$getCategoria = new Categoria();

$verCategoria = $getCategoria->getCategoria();
print_r('<pre>');
print_r($verCategoria);
print_r('</pre>')


?>