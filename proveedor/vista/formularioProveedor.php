<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<header>
		<?php
		require_once('../controlador/controlador.php');
		?>
	</header>
		<h1>Actualizar proveedor</h1>
		<form action="../controlador/controlador.php" method="POST">
		  <input type="hidden" name="id" value="<?php if(isset($_GET['id'])) { echo $_GET['id']; }?>"><br>
		  <label for="nombre">Nombre:</label><br>
		  <input type="text" name="nombre" value="<?php if(isset($_GET['nombre'])) { echo $_GET['nombre']; }?>"><br>
		  <label for="telefono">Telefono:</label><br>
		  <input type="text" name="telefono" value="<?php if(isset($_GET['telefono'])) { echo $_GET['telefono']; }?>"><br>
		  <label for="direccion">Direccion:</label><br>
		  <input type="text" name="direccion" value="<?php if(isset($_GET['direccion'])) { echo $_GET['direccion']; }?>">
		  <button type="submit" name="btnAccion">Enviar</button>
		</form>
	</body>
</html>