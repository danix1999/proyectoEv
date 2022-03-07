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
		require_once('../controlador/controladorCliente.php');
		?>
	</header>
		<h1>Lista Clientes</h1>

		<a href="../vista/formularioCliente.php">Agregar</a>

		<table border="1">
			<thead>
				<tr>
					<th>ID cliente</th>
					<th>cedula</th>
					<th>Nombres</th>
					<th>apellidos</th>
					<th>correo</th>
					<th>password</th>
					<th>celular</th>
					<th>direccion</th>
				</tr>
			</thead>
			<tbody>
				<!--
					Agregamos un foreach para recorrer los proveedores y los incrustamos en las celdas de la tabla
				-->
				<?php foreach($Cliente as $r): ?>
		        <tr>
		            <td><?php echo $r['Id_cliente'];?></td>
		            <td><?php echo $r['Cedula_Cliente'];?></td>
		            <td><?php echo $r['nombre_cliente'];?></td>
					<td><?php echo $r['apellidos_cliente'];?></td>
					<td><?php echo $r['correo_cliente'];?></td>
					<td><?php echo $r['password'];?></td>
					<td><?php echo $r['celular_cliente'];?></td>
					<td><?php echo $r['direccion_cliente'];?></td>
		            <td>
		                <a href="../vista/formularioCliente.php?id=<?php echo $r['Id_cliente'];?>&Cedula_Cliente=<?php echo $r['Cedula_Cliente'];?>&nombre_cliente=<?php echo $r['nombre_cliente'];?>&apellidos_cliente=<?php echo $r['apellidos_cliente'];?>&correo_cliente=<?php echo $r['correo_cliente'];?>&password=<?php echo $r['password'];?>&celular_cliente=<?php echo $r['celular_cliente'];?>&direccion_cliente=<?php echo $r['direccion_cliente'];?>">Editar</a>
		            </td>
		            <td>
		                <a href="../controlador/controladorCliente.php?idDelete=<?php echo $r['Id_cliente']; ?>">Eliminar</a>
		            </td>
		        </tr>
	    		<?php endforeach; ?>
			</tbody>
		</table>
</body>
</html>