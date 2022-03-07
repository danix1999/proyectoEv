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
		require_once('controladorProducto.php');
		?>
	</header>
		<h1>Confirmacion de compra</h1>


	<div id="contenedorProducto">
		<form action="../controlador/controladorDetalleVenta.php" method="POST">
		  <input type="hidden" name="Id_Producto" value="<?php if(isset($_GET['Id_Producto'])) { echo $_GET['Id_Producto']; }?>"><br>
		  <input type="hidden" name="codigo_venta" value="<?php if(isset($_GET['codigo_venta'])) { echo $_GET['codigo_venta']; }?>"><br>
		  
		  <label for="descripcion">Descripcion Venta:</label><br>
		  <input type="text" name="descripcion" value="<?php if(isset($_GET['descripcion'])) { echo $_GET['descripcion']; }?>"><br>

		  <label for="cantidad">Cantidad Venta:</label><br>
		  <input type="text" name="cantidad" value="<?php if(isset($_GET['cantidad'])) { echo $_GET['cantidad']; }?>"><br>

		  <label for="precio">Precio Venta:</label><br>
		  <input type="text" name="precio" value="<?php if(isset($_GET['precio'])) { echo $_GET['precio']; }?>"><br>		  	

		  <label for="descuento">Descuento Venta:</label><br> 
		  <input type="text" name="descuento" value="<?php if(isset($_GET['descuento'])) { echo $_GET['descuento']; }?>"><br>

		  <button type="submit" name="btnAccion">Enviar</button>
		</form>
	</body>
</html>