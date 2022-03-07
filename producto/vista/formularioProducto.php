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
		require_once('../controlador/controladorProducto.php');
		?>
	</header>
		<h1>Actualizar Venta</h1>
		<form action="../controlador/controladorProducto.php" method="POST">
		  <input type="hidden" name="Id_Producto" value="<?php if(isset($_GET['Id_Producto'])) { echo $_GET['Id_Producto']; }?>"><br>
		  
		  <label for="Nombre_Producto">Nombre Producto:</label><br>
		  <input type="text" name="Nombre_Producto" value="<?php if(isset($_GET['Nombre_Producto'])) { echo $_GET['Nombre_Producto']; }?>"><br>

		  <label for="Marca_Producto">Marca Producto:</label><br>
		  <input type="text" name="Marca_Producto" value="<?php if(isset($_GET['Marca_Producto'])) { echo $_GET['Marca_Producto']; }?>"><br>

		  <label for="Descripcion_Producto">Descripcion Producto:</label><br>
		  <input type="text" name="Descripcion_Producto" value="<?php if(isset($_GET['Descripcion_Producto'])) { echo $_GET['Descripcion_Producto']; }?>"><br>		  	

		  <label for="Valor_unitario_Producto">Valor unitario Producto:</label><br>
		  <input type="text" name="Valor_unitario_Producto" value="<?php if(isset($_GET['Valor_unitario_Producto'])) { echo $_GET['Valor_unitario_Producto']; }?>"><br>

		  <label for="Iva_Producto">Iva Producto:</label><br>
		  <input type="text" name="Iva_Producto" value="<?php if(isset($_GET['Iva_Producto'])) { echo $_GET['Iva_Producto']; }?>"><br>

		  <label for="Codigo_categoria">Codigo categoria:</label><br>  
		  <select name="Codigo_Categoria" id="Codigo_Categoria">
		  	<?php foreach($categorias as $r): ?>
		        <option value="<?php echo $r['Codigo_Categoria'];?>"><?php echo $r['Nombre_categoria'];?></option>
	    	<?php endforeach; ?>
		  </select>

		  <button type="submit" name="btnAccion">Enviar</button>
		</form>
	</body>
</html>