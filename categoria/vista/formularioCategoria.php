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
		require_once('../controlador/controladorCategoria.php');
		?>
	</header>
		<h1>Actualizar Categoria</h1>
		<form action="../controlador/controladorCategoria.php" method="POST">
		  <input type="hidden" name="id" value="<?php if(isset($_GET['id'])) { echo $_GET['id']; }?>"><br>
		  <label for="nombre">Nombre:</label><br>
		  <input type="text" name="nombre" value="<?php if(isset($_GET['nombre'])) { echo $_GET['nombre']; }?>"><br>
		  <label for="Descripcion">descripcion:</label><br>
		  <input type="text" name="Descripcion" value="<?php if(isset($_GET['Descripcion'])) { echo $_GET['Descripcion']; }?>"><br>
		  <button type="submit" name="btnAccion">Enviar</button>
		</form>
	</body>
</html>