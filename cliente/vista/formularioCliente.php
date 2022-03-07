<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario Cliente</title>
</head>
<body>
	<header>
		<?php
		require_once('../controlador/controladorCliente.php');
		?>
	</header>
		<h1>agregar/actualizar Cliente</h1>
		<form action="../controlador/controladorCliente.php" method="POST">
		  <input type="hidden" name="id" value="<?php if(isset($_GET['id'])) { echo $_GET['id']; }?>"><br>
		  <label for="cedula">cedula:</label><br>
		  <input type="text" name="cedula" value="<?php if(isset($_GET['Cedula_Cliente'])) { echo $_GET['Cedula_Cliente']; }?>"><br>
		  <label for="nombre">nombre:</label><br>
		  <input type="text" name="nombre" value="<?php if(isset($_GET['nombre_cliente'])) { echo $_GET['nombre_cliente']; }?>"><br>
		  <label for="apellidos">apellido:</label><br>
		  <input type="text" name="apellidos" value="<?php if(isset($_GET['apellidos_cliente'])) { echo $_GET['apellidos_cliente']; }?>"><br>
		  <label for="correo">correo:</label><br>
		  <input type="text" name="correo" value="<?php if(isset($_GET['correo_cliente'])) { echo $_GET['correo_cliente']; }?>"><br>
		  <label for="password">contraseña:</label><br>
		  <input type="password" name="password" value="<?php if(isset($_GET['password'])) { echo $_GET['password']; }?>"><br>
		  <label for="celular">celular:</label><br>
		  <input type="text" name="celular" value="<?php if(isset($_GET['celular_cliente'])) { echo $_GET['celular_cliente']; }?>"><br>
		  <label for="direccion">direccion:</label><br>
		  <input type="text" name="direccion" value="<?php if(isset($_GET['direccion_cliente'])) { echo $_GET['direccion_cliente']; }?>"><br>
		  <button type="submit" name="btnAccion">Enviar</button>
		</form>
	</body>
</html>