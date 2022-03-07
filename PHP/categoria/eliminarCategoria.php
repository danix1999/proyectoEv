<?php

require_once("categoria.php");

$killCategoria = new Categoria();

$Eliminar = $killCategoria->eliminarCategoria("5");

echo "eliminado";



?>