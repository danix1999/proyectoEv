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
		<h1>Lista Venta</h1>

		<a href="../vista/formularioProducto.php">Agregar</a>

		<table border="1">
			<thead>
				<tr>
					<th>ID Producto</th>
					<th>Nombre_Producto</th>
					<th>Marca_Producto</th>
					<th>Descripcion_Producto</th>
					<th>Valor_unitario_Producto</th>
					<th>Iva_Producto</th>
					<th>Codigo_categoria</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<!--
					Agregamos un foreach para recorrer los proveedores y los incrustamos en las celdas de la tabla
				-->
				<?php foreach($Producto as $r): ?>
		        <tr>
		            <td><?php echo $r['Id_Producto'];?></td>
					<td><?php echo $r['Nombre_Producto'];?></td>
		            <td><?php echo $r['Marca_Producto'];?></td>
		            <td><?php echo $r['Descripcion_Producto'];?></td>
					<td><?php echo $r['Valor_unitario_Producto'];?></td>
					<td><?php echo $r['Iva_Producto'];?></td>
					<td><?php echo $r['Codigo_categoria'];?></td>
		            <td>
		                <a href="../vista/formularioProducto.php?Id_Producto=<?php echo $r['Id_Producto'];?>&Nombre_Producto=<?php echo $r['Nombre_Producto'];?>&Marca_Producto=<?php echo $r['Marca_Producto'];?>&Descripcion_Producto=<?php echo $r['Descripcion_Producto'];?>&Valor_unitario_Producto=<?php echo $r['Valor_unitario_Producto'];?>&Iva_Producto=<?php echo $r['Iva_Producto'];?>&Codigo_categoria=<?php echo $r['Codigo_categoria'];?>">Editar</a>
		            </td>
		            <td>
		                <a href="../controlador/controladorProducto.php?idDelete=<?php echo $r['Id_Producto']; ?>">Eliminar</a>
		            </td>
		        </tr>
	    		<?php endforeach; ?>
			</tbody>
		</table>
</body>
</html>