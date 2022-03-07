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
		<h1>Lista Venta</h1>

		<a href="../vista/formularioVenta.php">Agregar</a>

		<table border="1">
			<thead>
				<tr>
					<th>codigo venta</th>
					<th>ID cliente</th>
					<th>fecha venta</th>
					<th>total venta</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<!--
					Agregamos un foreach para recorrer los proveedores y los incrustamos en las celdas de la tabla
				-->
				<?php foreach($Ventas as $r): ?>
		        <tr>
		            <td><?php echo $r['codigo_venta'];?></td>
					<td><?php echo $r['Id_cliente'];?></td>
		            <td><?php echo $r['fecha_venta'];?></td>
		            <td><?php echo $r['total_venta'];?></td>
		            <td>
		                <a href="../vista/formularioVenta.php?codigo_venta=<?php echo $r['codigo_venta'];?>&Id_cliente=<?php echo $r['Id_cliente'];?>&fecha_venta=<?php echo $r['fecha_venta'];?>&total_venta=<?php echo $r['total_venta'];?>">Editar</a>
		            </td>
		            <td>
		                <a href="../controlador/controladorVenta.php?idDelete=<?php echo $r['codigo_venta']; ?>">Eliminar</a>
		            </td>
		        </tr>
	    		<?php endforeach; ?>
			</tbody>
		</table>
</body>
</html>