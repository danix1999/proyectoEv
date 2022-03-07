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
		<h1>Lista Productos</h1>


		<table border="1">
			<thead>
				<tr>
					<th>Nombre_Producto</th>
					<th>Marca_Producto</th>
					<th>Valor_unitario_Producto</th>

					
				</tr>
			</thead>
			<tbody>
				<!--
					Agregamos un foreach para recorrer los proveedores y los incrustamos en las celdas de la tabla
				-->
				<?php foreach($objmodeloIndex as $r): ?>
		        <tr>
		            
					<td><?php echo $modeloIndex['Nombre_Producto'];?></td>
		            <td><?php echo $modeloIndex['Marca_Producto'];?></td>
					<td><?php echo $modeloIndex['Valor_unitario_Producto'];?></td>
							          
		        </tr>
	    		<?php endforeach; ?>
			</tbody>
		</table>
</body>
</html>