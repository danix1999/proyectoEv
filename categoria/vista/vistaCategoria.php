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
		<h1>Lista Categoria</h1>

		<a href="../vista/formularioCategoria.php">Agregar</a>

		<table border="1">
			<thead>
				<tr>
					<th>codigo categoria</th>
					<th>Nombre categoria</th>
					<th>descripcion categoria</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<!--
					Agregamos un foreach para recorrer los proveedores y los incrustamos en las celdas de la tabla
				-->
				<?php foreach($Categoria as $r): ?>
		        <tr>
		            <td><?php echo $r['Codigo_Categoria'];?></td>
		            <td><?php echo $r['Nombre_categoria'];?></td>
		            <td><?php echo $r['Descripcion_Categoria'];?></td>
		            <td>
		                <a href="../vista/formularioCategoria.php?id=<?php echo $r['Codigo_Categoria'];?>&nombre=<?php echo $r['Nombre_categoria'];?>&Descripcion=<?php echo $r['Descripcion_Categoria'];?>">Editar</a>
		            </td>
		            <td>
		                <a href="../controlador/controladorCategoria.php?idDelete=<?php echo $r['Codigo_Categoria']; ?>">Eliminar</a>
		            </td>
		        </tr>
	    		<?php endforeach; ?>
			</tbody>
		</table>
</body>
</html>