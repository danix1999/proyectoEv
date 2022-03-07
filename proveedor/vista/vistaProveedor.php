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
		<h1>Lista proveedores</h1>

		<a href="../vista/formularioProveedor.php">Agregar</a>

		<table border="1">
			<thead>
				<tr>
					<th>codigo proveedor</th>
					<th>Nombre proveedor</th>
					<th>direccion proveedor</th>
					<th>telefono proveedor</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<!--
					Agregamos un foreach para recorrer los proveedores y los incrustamos en las celdas de la tabla
				-->
				<?php foreach($Proveedores as $r): ?>
		        <tr>
		            <td><?php echo $r['Codigo_proveedor'];?></td>
		            <td><?php echo $r['Nombre_proveedor'];?></td>
		            <td><?php echo $r['Direccion_Proveedor'];?></td>
		            <td><?php echo $r['Telefono_Proveedor'];?></td>
		            <td>
		                <a href="../vista/formularioProveedor.php?id=<?php echo $r['Codigo_proveedor'];?>&nombre=<?php echo $r['Nombre_proveedor'];?>&telefono=<?php echo $r['Telefono_Proveedor'];?>&direccion=<?php echo $r['Direccion_Proveedor'];?>">Editar</a>
		            </td>
		            <td>
		                <a href="../controlador/controlador.php?idDelete=<?php echo $r['Codigo_proveedor']; ?>">Eliminar</a>
		            </td>
		        </tr>
	    		<?php endforeach; ?>
			</tbody>
		</table>
</body>
</html>