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
		require_once('../controlador/controladorVenta.php');
		?>
	</header>
		<h1>Actualizar Venta</h1>
		<form action="../controlador/controladorVenta.php" method="POST">
		  <input type="hidden" name="codigo_venta" value="<?php if(isset($_GET['codigo_venta'])) { echo $_GET['codigo_venta']; }?>"><br>
		  <label for="Id_cliente">ID cliente:</label><br>  

		  <select>
		  	<?php foreach($clientes as $r): ?>
		        <option value="<?php echo $r['Id_Cliente'];?>"><?php echo $r['Cedula_Cliente'];?></option>
	    	<?php endforeach; ?>
		  </select>

		  <label for="fecha_venta">fecha de venta:</label><br>
		  <input type="date" name="fecha_venta" value="<?php if(isset($_GET['fecha_venta'])) { echo $_GET['fecha_venta']; }?>"><br>
		  <label for="total_venta">total venta:</label><br>
		  <input type="text" name="total_venta" value="<?php if(isset($_GET['total_venta'])) { echo $_GET['total_venta']; }?>"><br>
		  <button type="submit" name="btnAccion">Enviar</button>
		</form>
	</body>
</html>